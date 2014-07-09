# ------------------------------------------------------------------------------
# This file is part of the Open Source License Compendium (OSLiC) and is
# distributed under the same terms a the LaTeX sources of OSLiC.
# ------------------------------------------------------------------------------

require 'rexml/document'
require 'erb'

# Namespace for all classes required to read the LaTeX output.
# The namespace contains to kinds of classes: 
#
# RichText, FormattedString and the various Renderer subclasses allow a very
# basic markup in those parts of the LaTeX sources that will be used in the
# OSCAd. RichText stored this markup with the help of FormattedStrings and the
# various renderers transform this markup to other formats like HTML or
# Markdown.
# 
# The other four classes, CrossReference, UseCase, License, and OscadData
# represent the information extracted from the OSLiC sources. (CrossReference
# is actually an internal helper class and is not exposed to clients of the
# module.) 
module Oslic

  # A Renderer transforms a FormattedString to a string representing the
  # FormattedString in some markup language.  The Renderer class itself
  # ignores all markup and simply return the string stored in the
  # FormattedString.  
  class Renderer
    
    # Return the markup for the formatted_string.
    # Subclasses can define methods with the same name as the string's format
    # and they will be called automatically to render the string.  The result
    # of these methods will become the result of +render+. Additionally, 
    # subclasses can override Rendere#unkown_format to handle unknown formats.
    def render(formatted_string)
      if respond_to?(formatted_string.format) then
        method(formatted_string.format).call(formatted_string)
      else
        unknown_format(formatted_string)
      end
    end
    
    def unknown_format(str) str end
  end
  
  # A simple MarkDown renderer that represents :emph as italics and enquote by
  # placing the string in double quotes.
  class MarkdownRenderer < Renderer
    def emph(str) "_#{str}_" end
    def textbf(str) "*#{str}*" end
    def enquote(str) "\"#{str}\"" end
  end
  
  # A renderer that outputs the formatted string as HTML. +:emph+ is
  # translated as +<em>+ and +:enquote+ as double quotes, +&quot;+,
  class HTMLRenderer < Renderer
    def emph(str) "<em>#{as_html(str)}</em>" end
    def textbf(str) "<b>#{as_html(str)}</b>" end
    def enquote(str) "&quot;#{as_html(str)}&quot;" end
    def unknown_format(str) as_html(str) end
  private
    def as_html(s) s.encode(:xml => :text) end
  end
  
  # A string that has an additional property, 'format', that holds a keyword
  # indicating how the string should be formatted.  The actual formatting is
  # done by a renderer and the class keeps one default renderer, that is used
  # in the to_s method.
  class FormattedString < String
    @@default_renderer = Renderer.new
    
    # Changes the default renderer for all FormattedString.  Effective
    # immediately. 
    def FormattedString.renderer(renderer)
      @@default_renderer = renderer
    end
    
    # Create a new FormattedString optionally specifying a format.  ':plain'
    # means don't format the string, he effect of all other keywords depends
    # on the renderer.  Currently, ':emph' and ':enquote' are officially
    # supported (corresponding to the LaTeX commands \emph and \enquote.)
    def initialize(str="", format=:plain)
      super(str)
      @format = format
    end

    # A symbol describing the format of the string. :plain means 'no format'
    attr_reader :format
    
    # Return the representation created by the default renderer.
    def to_s
      @@default_renderer.render(self)
    end
  end
  
  # RichText is a piece of text with embedded markup.  It is intended to
  # represent those small paragraphs in the OSLiC that will be used in the
  # OSCAd, notably the requirements and the use case definitions.  
  #
  # The text outside all markup is represented by a FormattedString with the
  # format :plain, whereas the argument of a markup command is represented by
  # a formatted string with the name of the command as the format.
  #
  # NOTE: Nested markup is not supported and raises an exception!
  class RichText

    COMMAND_REGEX = /\\(?<command>[[:lower:][:upper:]]+)\s*{(?<content>[^}]*)}/
    NESTED_COMMAND_REGEX = /\\[[:lower:][:upper:]]+\s*{/

    # Create a RichText by passing the LaTeX source to the constructor.  Only
    # very basic markup is supported: All markup must be in the form of
    # commands with a single argument in braces, e. g., "\emph{the license}". 
    def initialize(str)
      @fragments = parse(str)
    end

    # Append the LaTeX source +str+ to the contents of this RichText
    def append(str)
      @fragments.insert(-1, *parse(str))
    end

    # Uses the FormattedString's default renderer to render the sequence of
    # FormattedStrings. 
    def to_s
      @fragments.inject("") { |result, frag| result << frag.to_s }
    end
    
  private
    # add a FormattedString to the list unless +str+ is empty
    def add_fragment(arr, str, format=:plain)
      arr << FormattedString.new(str, format) unless str.empty?
    end

    def parse(str)
      result = []
      input = str.strip.gsub(/\{\}/, "") # remove empty TeX groups
      while (match = COMMAND_REGEX.match(input)) do
        content = match["content"]
        if NESTED_COMMAND_REGEX =~ content
          raise "Nested markup not supported: #{input}" 
        end
        
        add_fragment(result, match.pre_match)
        add_fragment(result, content, match["command"].to_sym) 
        input = match.post_match
      end
      add_fragment(result, input)
      return result
    end
  end

  # The CrossReference contains maps the labels in the tex document to their
  # locations, both page and section number. 
  class CrossReference

    # Create a new CrossReference passing it the path, full or relative, 
    # of the LaTeX aux-file. 
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
    
    # Return the dotted section number (e. g., "3.4.1") for the specified
    # label or the string "unknown" if the label is not defined.
    def resolve_section(label)
      return @sections[label]
    end
    
    # Return the page number of the given label or the string "unknown" if the
    # label is not defined.
    def resolve_page(label)
      return @pages[label]
    end
  end
  
  # Represents a license specific use case (LSUC).  An LSUC maps to one or
  # more open source use cases (OSUC). Each LSUC belongs to a single license.
  class UseCase

    # Create a new UseCase that belongs to 'license' from the node 'elem' in
    # the XML document. May raise an exception if some elements in the subtree
    # rooted at 'elem' contain invalid markup (in the sense of RichText)
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
          parse_requires(child)
        when "requiresnothing" 
          parse_requires_nothing(child)
        when "prohibits"
          parse_prohibits(child)
        end
      end
      
      have_requirements = ! (@required.empty? and @recommended.empty?)
      unless have_requirements or defined?(@no_task_message)
        raise "#{@id}: Must have either <requires> or <requiresnothing>" 
      end
      if have_requirements and defined?(@no_task_message)
        raise "#{@id}: Cannot have both <requires> and <requiresnothing>" 
      end
    end

    # parse the contents of a <requires> element
    def parse_requires(requires_elem)
      requires_elem.elements.each do |child|
        case child.name
        when "item" then
          if child.attributes["type"] == "mandatory" then
            @required << RichText.new(child.text)
          else
            @recommended << RichText.new(child.text)
          end
        when "source-use-case" then
          @source_use_case = child.text
        end
      end 
    end

    # parse the contents of a <requiresnothing> clause
    # raises an exception if the element contains more than one <item>
    def parse_requires_nothing(requires_nothing_elem)
      requires_nothing_elem.elements.each("item") do |child|
        raise "#{@id}: Duplicate <item> in <requiresnothing>" if defined?(@no_task_message)
        @no_task_message = RichText.new(child.text)
      end
    end

    # parse the contents of a <prohibits> element
    def parse_prohibits(prohibits_elem)
      prohibits_elem.elements.each("item") do |child|
        @prohibited << RichText.new(child.text)
      end
    end

    # A unique id for this UseCase (unique even across licenses).  
    # The id starts with the license ID and should, like the license ID, not
    # be displayed to the user.
    attr_reader :id

    # The section number of the section that describes the LSUC (thus, it is
    # not really a chapter in LaTeX terminology).
    attr_reader :chapter

    # An array of OSUCs that map to this LSUC.  Each OSUC is specified in the
    # form "OSUC-XXY", where XX is a two-digit number and Y is either empty
    # (if the OSUC does not distinguish between binary and source
    # distribution) or either "S" or "B" for "source" and "binary",
    # respectively. 
    attr_reader :osucs

    # A RichText description of the meaning of the LSUC.
    attr_reader :description

    # An array of RichText descriptions of the things you must not do if you
    # use the software according to this use case.  Can be empty.  There is NO
    # text, if the use case does not prohibit anything particular.
    attr_reader :prohibited

    # An array of RichText descriptions of the things you must do if you use
    # the software according to this use case. The array can be empty.
    attr_reader :required

    # An array of RichText descriptions of the things you should do if you use
    # the software according to this use case. The array can be empty.
    attr_reader :recommended

    # A RichText description if there are no tasks to be performed
    attr_reader :no_task_message

    # The name of the use case that applies to a source distribution of this
    # binary use case.  This is nil, unless 
    # a) this use case is about binary distribution to third party and
    # b) the license requires the distribution of the source code for these binaries
    attr_reader :source_use_case

    # The abbreviation for this use case that should be displayed to the
    # user. Use this in preference to #id
    def name
      "#{@license.abbrev}#{@id[/-[^-]+$/]}"
    end
    
    # Print the contents of this UseCase for development and testing
    # purposes. This method is intended to be called by License#pp
    def pp
      has_tasks = (@required.length > 0) || (@recommended.length > 0)

      puts "    Use case: #{id} (#{name})"
      puts "        maps to #{osucs}"
      puts "        chapter #{chapter}"
      puts "        means: #{description}"
      puts "        source use case: #{source_use_case}"
      puts "        requires nothing:"                             unless has_tasks
      puts "            #{@nothing_required}"                      unless has_tasks
      puts "        requires:"                                     if has_tasks
      @required.each    { |c| puts "            mandatory: #{c}" } if has_tasks
      @recommended.each { |c| puts "            voluntary: #{c}" } if has_tasks
      puts "        prohibits:"
      @prohibited.each { |c| puts "            #{c}" }
    end

    private :parse_requires, :parse_prohibits
  end
  
  # Represents all the information about a particular license extracted from
  # the OSLiC. 
  class License
    
    # Create a new instance from the XML element that describes the license
    # and a CrossReference object used to resolve the section numbers of the
    # label names found in the XML.
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

    # A unique ID that consists only of upper and lower case ASCII letters.
    # Not suitable for displaying to the user. For example: 'GPLa' for GPL 2.0
    attr_reader :id

    # A short name of the license. Use this in preference to License#id in the
    # user interface.  For example, 'ApLv2' for the Apache license.
    attr_reader :name

    # The spelled out name of the License.  For example: 'Apache License 2.0'
    attr_reader :title

    # The version number of the license, if any (may be nil). For example:
    # '2.0' for the Apache 2 License. Do not expect the value to be numeric.
    attr_reader :version

    # An abbreviation for the license.  Generally a variant spelling of the
    # #id.  Neccessary for compatibility with the PHP backend. 
    # *This property should not be used for new code, either #id or #name
    # should be used instead* 
    attr_reader :abbrev 

    # An array containing all the license specific use cases.  Each element is
    # an instance of UseCase.  Technically, this array can be empty, although
    # this will render the License useless.
    attr_reader :use_cases

    # The number of the section containing a general discussion of the license
    # and a rationale of the to-do lists.  Either a section number ("6.3.10")
    # or the string "unknown" if there is no such chapter (or the label is not
    # yet defined).
    attr_reader :discussion_chapter

    # The section number in dotted notation of the section explaining what the
    # license protects or the string "unknown", if the corresponding label is
    # not defined.
    attr_reader :protection_chapter
    
    # The section number in dotted notation of the section explaining the
    # patent clauses of the library, if, any, or the string "unknown", if the
    # corresponding label is not defined.
    attr_reader :patent_chapter

    # The dotted number of the chapter in the OSLiC dealing with this
    # license. Always defined.
    attr_reader :chapter 
    
    # Print the contents of this License in a human readable form for
    # development and esting purposes.  This method is intended to be called
    # by OscadData#pp
    def pp
      puts "  #{id}: \"#{title}\" name = #{name} version=#{version} abbrev=#{abbrev}"
      puts "         chapter = #{chapter}"
      puts "         patent clause = #{patent_chapter}"
      puts "         protection goals = #{protection_chapter}"
      puts "         discussion = #{discussion_chapter}"
      @use_cases.each { |u| u.pp }
    end
  end
  
  # Artificial container that bundles the list of +License+s together with the
  # open source use case definitions.  
  class OscadData

    # Create an instance by parsing the LaTeX aux-file +oslic_aux+ and the XML
    # file +oscad_xml+ written by the _oscad.sty_ package.
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
    
    # A Hash that has the OSUC name (in the for "OSUC-XXY", see UseCase) as
    # key and a RichText, that describes the use case, as value
    attr_reader :osucs

    # An array of License instances.
    attr_reader :licenses

    # Print the OscadData in human readable form for development and testing
    # purposes. 
    def pp
      puts "Oscad data read from [#{@oscad_xml}, #{@oslic_aux}]"
      puts "OSUCS"
      @osucs.each { |name, description| puts "  #{name}\n    #{description}" }
      puts "LICENSES"
      @licenses.each { |l| l.pp }
    end
  end

  # Look for the a file with the given name in +directory+ and all parent
  # directories of +directory+.  +directory+ defaults to the current directory. 
  def Oslic.find_file(filename, directory=".")
    abs_directory = File.absolute_path(directory)
    file_path = File.join(abs_directory, filename)
    parent_dir = File.dirname(abs_directory)
    case
    when File.exists?(file_path) 
      return file_path
    when ((parent_dir == nil) or (parent_dir == abs_directory))
      # on Unix-like systems, File.dirname("/") == "/"
      raise "#{filename} not found!"
    else
      return find_file(filename, parent_dir)
    end
  end
  

end

# ------------------------------------------------------------------------------
# Local Variables:
# mode: ruby
# fill-column: 78
# End:
# ------------------------------------------------------------------------------
