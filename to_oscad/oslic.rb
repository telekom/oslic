require 'rexml/document'

module Oslic

  class Renderer
    def render(formatted_string)
      case formatted_string.format
      when :emph
        emph(formatted_string)
      else
        plain(formatted_string)
      end
    end
    
    def emph(str) str end
    def plain(str) str end
  end
  
  class MarkdownRenderer < Renderer
    def emph(str) "_#{str}_" end
  end
  
  class HTMLRenderer < Renderer
    def emph(str) "<em>#{str}</em>" end
  end
  
  class FormattedString < String
    attr_reader :format
    
    def initialize(str="", format=:plain)
      super(str)
      @format = format
    end
    
    @@renderer = Renderer.new
    
    def FormattedString.renderer(renderer)
      @@renderer = renderer
    end
    
    def to_s
      @@renderer.render(self)
    end
  end
  
  class RichText
    def initialize(str)
      @fragments = []
      input = str.strip
      while (match = /\\[[:lower:][:upper:]]+\s*{([^}]*)}/.match(input)) do
        add_fragment(match.pre_match)
        add_fragment(match[1], :emph) 
        input = match.post_match
      end
      add_fragment(input)
    end
    
    def to_s
      @fragments.inject("") { |result, frag| result << frag.to_s }
    end
    
  protected
    def new_fragment(str, format)
      FormattedString.new(str, format)
    end
    
  private
    def add_fragment(str, format=:plain)
      @fragments << new_fragment(str, format) unless str.empty?
    end
  end

  class CrossReference
    def initialize(filename)
      @sections = Hash.new("unknown")
      @pages = Hash.new("unknown")
      IO.foreach(filename) do |line|
        match = /\\newlabel\{([A-Za-z0-9_-]+)\}\{\{([0-9.]+)\}\{([0-9]+)\}/.match(line)
        if match then
          label = match[1]
          @sections[label] = match[2]
          @pages[label] = match[3]
        end
      end
    end
    
    def resolve_section(label)
      return @sections[label]
    end
    
    def resolve_page(label)
      return @pages[label]
    end
  end
  
  class UseCase
    attr_reader :id, :chapter, :osucs, :description, :prohibited, :required, :recommended
    
    def initialize(license, elem)
      @license = license
      @id = elem.attributes["id"]
      @osucs = []
      @prohibited = []
      @required = []
      @recommended = []
      
      elem.elements.each do |child|
        case child.name
        when "chapter"
          @chapter = child.text
        when "means"
          @description = RichText.new(child.text)
        when "mapsto"
          @osucs << child.text
        when "requires"
          child.elements.each("item") do |grandchild|
            if grandchild.attributes["type"] == "mandatory" then
              @required << RichText.new(grandchild.text)
            else
              @recommended << RichText.new(grandchild.text)
            end
          end
        when "prohibits"
          child.elements.each("item") do |grandchild|
            @prohibited << RichText.new(grandchild.text)
          end
        end
      end
    end

    def name
      "#{@license.abbrev}#{@id[/-[^-]+$/]}"
    end
    
    def pp
      puts "    Use case: #{id}"
      puts "        maps to #{osucs}"
      puts "        requires:"
      @required.each { |c| puts "            mandatory: #{c}" }
      @recommended.each { |c| puts "            voluntary: #{c}" }
      puts "        prohibits:"
      @prohibited.each { |c| puts "            #{c}" }
    end
  end
  
  class License
    attr_reader :id, :name, :title, :version, :abbrev, :use_cases
    attr_reader :discussion_chapter, :protection_chapter, :patent_chapter, :chapter 
    
    def initialize(elem, cross_ref)
      @id = elem.attributes["id"]
      @use_cases = []
      
      elem.elements.each do |child|
        case child.name
        when "protection"
          @protection_chapter = cross_ref.resolve_section(child.text)
        when "patent"
          @patent_chapter = cross_ref.resolve_section(child.text)
        when "discussion"
          @discussion_chapter = cross_ref.resolve_section(child.text)
        when "chapter"
          @chapter = child.text
        when "name"
          @name = child.text
        when "title"
          @title = child.text
        when "version"
          @version = child.text
        when "abbreviation"
          @abbrev = child.text
        when "lsuc"
          @use_cases << UseCase.new(self, child)
        end
      end
    end  
    
    def pp
      puts "  #{id}: \"#{title}\" name = #{name} version=#{version} abbrev=#{abbrev}"
      puts "         chapter = #{chapter}"
      puts "         patent clause = #{patent_chapter}"
      puts "         protection goals = #{protection_chapter}"
      puts "         discussion = #{discussion_chapter}"
      @use_cases.each { |u| u.pp }
    end
  end
  
  class OscadData
    attr_reader :osucs, :licenses

    def initialize(oscad_xml, oslic_aux)
      @oscad_xml = oscad_xml
      @oslic_aux = oslic_aux
      @osucs = Hash.new
      @licenses = []
      
      cross_ref = CrossReference.new @oslic_aux
      document = REXML::Document.new(File.open(@oscad_xml))
      document.elements.each("//osuc") do | elem |
        @osucs[elem.attributes["name"]] = elem.text
      end
      document.elements.each("//license") do | elem |
        @licenses << License.new(elem, cross_ref)
      end
    end
    
    def pp
      puts "Oscad data read from [#{@oscad_xml}, #{@oslic_aux}]"
      puts "OSUCS"
      @osucs.each { |name, description| puts "  #{name}\n    #{description}" }
      puts "LICENSES"
      @licenses.each { |l| l.pp }
    end
  end
end

