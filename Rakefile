# ------------------------------------------------------------------------------
# Rake build script for oslic
# ------------------------------------------------------------------------------

USE_DVIPS = false

# ------------------------------------------------------------------------------
# Utilities for manipulating file names
# ------------------------------------------------------------------------------

def replace_ext(filename, new_ext) 
  filename.sub(/#{File.extname(filename)}/, new_ext)
end

def no_ext(filename)
  replace_ext(filename, "")
end

# ------------------------------------------------------------------------------
# Commands used in this file
# ------------------------------------------------------------------------------

def latex(filename)
  if USE_DVIPS
    sh "latex #{no_ext(filename)}"
  else
    sh "pdflatex #{no_ext(filename)}"
  end
end

def make_bib_and_index(filename)
  index_input = replace_ext(filename, '.nlo')
  index_output = replace_ext(filename, '.nls')
  sh "bibtex #{no_ext(filename)}"
  sh "makeindex #{index_input} -s btexmat/nomencl.ist -o #{index_output}"
end

def dvi_to_pdf(filename)
  if USE_DVIPS then
    dvi_file = replace_ext(filename, ".dvi")
    ps_file = replace_ext(filename, ".ps")
    sh "dvips #{dvi_file}"
    sh "ps2pdf #{ps_file}"
  end
end

# ------------------------------------------------------------------------------
# Tasks
# ------------------------------------------------------------------------------

task :build do 
  latex "oslic.tex"
  make_bib_and_index "oslic.tex"
  latex "oslic.tex"
  latex "oslic.tex"
  dvi_to_pdf "oslic.dvi"
end

task "oslic.pdf" => ["oslic.tex"] do 
  latex "oslic.tex"
  dvi_to_pdf "oslic.dvi"
end

# ------------------------------------------------------------------------------
# Local Variables:
# mode: ruby
# End:
# ------------------------------------------------------------------------------
