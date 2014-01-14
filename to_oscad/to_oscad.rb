require 'rexml/document'

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
  attr_reader :id, :osucs, :prohibited, :required, :recommended
  
  def initialize(elem)
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
        @description = child.text
      when "mapsto"
        @osucs << child.text
      when "requires"
        child.elements.each("item") do |grandchild|
          if grandchild.attributes["type"] == "mandatory" then
            @required << grandchild.text
          else
            @recommended << grandchild.text
          end
        end
      when "prohibits"
        child.elements.each("item") do |grandchild|
          @prohibited << grandchild.text
        end
      end
    end
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
        @use_cases << UseCase.new(child)
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

class Oscad
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
    puts "Oscad [#{@oscad_xml}, #{@oslic_aux}]"
    puts "OSUCS"
    @osucs.each { |name, description| puts "  #{name}\n    #{description}" }
    puts "LICENSES"
    @licenses.each { |l| l.pp }
  end
end

Oscad.new("oscad.xml", "oslic.aux").pp
