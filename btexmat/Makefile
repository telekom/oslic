# (c) Karsten Reincke, Frankfurt am Main, 2011
# compile one/all tex-files 
AUX_EXTS=url bbl blg aux dvi toc log lof nlo ilg ilg nls
RES_EXTS=ps pdf bak lyx

all:
	echo "only compilations for single files"

.SUFFIXES: .tex .dvi .ps .pdf
.tex.dvi:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ latex $< 
	@ bibtex `basename $< .tex`
	@ makeindex `basename $< .tex`.nlo -s nomencl.ist -o `basename $< .tex`.nls
	@ latex $< 
	@ latex $< 
	@ latex $< 

.dvi.ps:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ dvips $<

.ps.pdf:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ ps2pdf $<


clearAuxFiles:
	$(foreach EXT, ${AUX_EXTS}, if [ ! "x`ls *.${EXT} 2>/dev/null`" = "x" ]; then rm *.${EXT}; fi;)
clearResFiles:
	$(foreach EXT, ${RES_EXTS}, if [ ! "x`ls *.${EXT} 2>/dev/null`" = "x" ]; then rm *.${EXT}; fi;)

clear:	clearAuxFiles
clean: 	clear clearResFiles


