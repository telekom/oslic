#!/usr/bin/env ruby
# ------------------------------------------------------------------------------
# This file is part of the Open Source License Compendium (OSLiC) and is
# distributed under the same terms a the LaTeX sources of OSLiC.
# ------------------------------------------------------------------------------

require_relative "oslic"
require_relative "php_backend"

DATA_FILE = Oslic::find_file("oscad.xml")
AUX_FILE = Oslic::find_file("oslic.aux")
OUTPUT_DIRECTORY = "master-files"

Oslic::FormattedString::renderer(Oslic::HTMLRenderer.new)
PHPBackend::Generator.new(DATA_FILE, AUX_FILE, OUTPUT_DIRECTORY).generate

# ------------------------------------------------------------------------------
# Local Variables:
# mode: ruby
# fill-column: 78
# End:
# ------------------------------------------------------------------------------
