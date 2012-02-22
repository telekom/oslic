# (c) Karsten Reincke, Frankfurt am Main, 2011
# compile one/all tex-files 
AUX_EXTS=url bbl blg aux dvi toc log lof
RES_EXTS=ps pdf


all:	advi

advi: clear
	find . -maxdepth 1 -name "*.tex" \! -name "osc*" -type f |\
	while read file; do \
	  make "`basename $$file .tex`.dvi";\
	done

aps: clear
	find . -maxdepth 1 -name "*.tex" \! -name "osc*" -type f |\
	while read file; do \
	  make "`basename $$file .tex`.ps";\
	done

apdf: clear
	find . -maxdepth 1 -name "*.tex" \! -name "osc*" -type f |\
	while read file; do \
	  make "`basename $$file .tex`.pdf";\
	done


.SUFFIXES: .tex .dvi .ps .pdf
.tex.dvi:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ latex $< 
	@ bibtex `basename $< .tex`
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

