# ------------------------------------------------------------------------------
# This file is part of the Open Source License Compendium (OSLiC) and is
# distributed under the same terms a the LaTeX sources of OSLiC.
# ------------------------------------------------------------------------------

require "psych"
require "fileutils"
require_relative "oslic"

module YAMLBackend

  class LicenseNames
    def initialize
      @stream = Psych::Nodes::Stream.new
      @doc = Psych::Nodes::Document.new
      @seq = Psych::Nodes::Sequence.new

      @stream.children << @doc
      @doc.children << @seq
    end

    class License 
      attr_reader :mapping

      def initialize osuc
        @mapping = Psych::Nodes::Mapping.new
        return add "osuc", osuc
      end

      def proapse 
        return add "type", "proapse"
      end

      def snimoli
        return add "type", "snimoli"
      end

      def modified
        return add "state", "modified"
      end

      def unmodified
        return add "state", "unmodified"
      end

      def independent
        return add "context", "independent"
      end

      def embedded
        return add "context", "embedded"
      end

      def for_yourself
        return add "recipient", "4yourself" 
      end

      def to_others
        return add "recipient", "2others"
      end

      def sources
        return add "form", "sources"
      end

      def binaries
        return add "form", "binaries"
      end

    private 
      def add key, value
        @mapping.children << Psych::Nodes::Scalar.new(key)
        @mapping.children << Psych::Nodes::Scalar.new(value)
        return self
      end
    end

    def add_license osuc
      result = License.new(osuc)
      @seq.children << result.mapping
      return result
    end

    def show
      return @stream.to_yaml
    end
      
  end

  class Generator
    def initialize(xml_file, aux_file, output_directory)
      @data = Oslic::OscadData.new(xml_file, aux_file)
      @output_directory = output_directory
      FileUtils.makedirs(@output_directory)
    end
    
    def generate
      render_license_names
      render_licenses
      render_lsuc
      render_osuc
      #@data.osucs.each { | osuc, description | render_osuc(osuc, description) }
      #@data.licenses.each { | license | render_license(license) }
      #render_matrix
    end

    def render_license_names
      write_yml "license_names.yml"
    end

    def render_licenses
      doc = new_doc
      lics = new_mapping (doc)
      @data.licenses.each do |license|
        new_scalar(license.name, lics)
        uc_map = new_mapping(lics)
        license.use_cases.each do |use_case|
          use_case.osucs.each do |osuc|
            new_quoted_scalar(osuc[5..-1], uc_map)
            new_scalar(use_case.id, uc_map)
          end
        end
      end
      write_yml "licenses.yml", doc
    end

    def render_lsuc
      write_yml "lsuc.yml"
    end

    def render_osuc
      doc = new_doc
      osucs = new_mapping (doc)
      @data.osucs.each do |name, description| 
        raise "Missing OSUC-name" if name == nil
        raise "No description for #{name}" if description == nil
        new_quoted_scalar(name, osucs)
        map = new_mapping(osucs)
        new_scalar("number", map)
        new_quoted_scalar(name, map)
        new_scalar("name", map)
        new_scalar("OSUC-#{name}", map)
        new_scalar("desc", map)
        new_scalar(description, map).style = Psych::Nodes::Scalar::FOLDED
      end
      write_yml "osuc.yml", doc
    end

    def write_yml filename, doc=nil
      full_path = File.join(@output_directory, filename)
      puts "Writing #{full_path}"
      if doc != nil then
        stream = Psych::Nodes::Stream.new
        stream.children << doc
        puts stream.to_yaml
      end
    end

    def new_doc
      Psych::Nodes::Document.new
    end

    def new_mapping parent=nil
      result = Psych::Nodes::Mapping.new
      parent.children << result unless parent == nil
      return result
    end

    def new_scalar value, parent=nil
      result = Psych::Nodes::Scalar.new(value)
      parent.children << result unless parent == nil
      return result
    end

    def new_quoted_scalar value, parent=nil
      result = new_scalar(value, parent)
      result.quoted = true
      result.style = Psych::Nodes::Scalar::DOUBLE_QUOTED
      return result
    end

    private :render_license_names, :render_licenses, :render_lsuc, :render_osuc
    private :write_yml, :new_mapping, :new_scalar, :new_quoted_scalar
  end

end

#app = YAMLBackend::LicenseNames.new
#app.add_license("01").proapse.unmodified.independent.for_yourself
#app.add_license("02S").proapse.unmodified.independent.to_others.sources
#app.add_license("02B").proapse.unmodified.independent.to_others.binaries
#puts app.show

DATA_FILE = Oslic::find_file("oscad.xml")
AUX_FILE = Oslic::find_file("oslic.aux")
OUTPUT_DIRECTORY = "oscad_data"

Oslic::FormattedString::renderer(Oslic::HTMLRenderer.new)
YAMLBackend::Generator.new(DATA_FILE, AUX_FILE, OUTPUT_DIRECTORY).generate

# ------------------------------------------------------------------------------
# Local Variables:
# mode: ruby
# fill-column: 78
# End:
# ------------------------------------------------------------------------------
