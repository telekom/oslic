# ------------------------------------------------------------------------------
# This file is part of the Open Source License Compendium (OSLiC) and is
# distributed under the same terms a the LaTeX sources of OSLiC.
# ------------------------------------------------------------------------------

require "erb"
require "fileutils"
require_relative "oslic"

module PHPBackend 

  class Generator

    OSUC_MASTER_DIR = "osuc-master-files"
    LSUC_MASTER_DIR = "lsuc-master-files"
    TEMPLATE_DIR = "oscad-1-templates"
    
    def initialize(xml_file, aux_file, output_directory)
      @data = Oslic::OscadData.new(xml_file, aux_file)
      @output_directory = output_directory
      @osuc_master_files = File.join(@output_directory, OSUC_MASTER_DIR)
      @lsuc_master_files = File.join(@output_directory, LSUC_MASTER_DIR)
      FileUtils.makedirs(@osuc_master_files)
      FileUtils.makedirs(@lsuc_master_files)
    end
    
    def generate
      @data.osucs.each { | osuc, description | render_osuc(osuc, description) }
      @data.licenses.each { | license | render_license(license) }
      render_matrix
    end

    def dump
      @data.pp
    end

  private
    def render_osuc(osuc, description)
      render_template("osuc-master", "osuc-#{osuc.downcase}-inc-master.php",
                      output_dir: @osuc_master_files, 
                      bindings: binding)
    end
    
    def render_license(license)
      lsuc_directory = File.join(@lsuc_master_files, license.abbrev.downcase)
      FileUtils.makedirs(lsuc_directory)
      license.use_cases.each do |lsuc|
        render_template("lsuc-master", "#{lsuc.name.downcase}-inc-master.php",
                        output_dir: lsuc_directory,
                        bindings: binding)
      end
    end
    
    def render_matrix
      matrix = use_case_matrix
      render_template("use-case-matrix", "oscad-basics-inc.php", 
                      bindings: binding)
    end
    
    def render_template(template_name, output_name, bindings: binding, output_dir: @output_directory)
      output_file = File.join(output_dir, output_name)
      template_file = File.join(TEMPLATE_DIR, "#{template_name}.erb")
      template = IO.read(template_file)
      IO.write(output_file, ERB.new(template, nil, "<>").result(bindings))
    end
    
    def use_case_matrix
      matrix = Hash.new
      @data.licenses.each do |license|
        osuc_to_lsuc = Hash.new
        matrix[license.id] = osuc_to_lsuc
        license.use_cases.each do |use_case|
          use_case.osucs.each do |osuc|
            osuc_to_lsuc[osuc] = use_case.id
          end
        end
      end
      return matrix
    end
  end
end

# ------------------------------------------------------------------------------
# Local Variables:
# mode: ruby
# fill-column: 78
# End:
# ------------------------------------------------------------------------------
