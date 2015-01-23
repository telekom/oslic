
# compile one/all tex-files 

LATEX=pdflatex

AUX_EXTS=url bbl blg aux dvi toc log lof nlo nls ilg ils ent out
RES_EXTS=ps pdf bak rtf
SUB_DIRS=
OSLICDIR=oslic


.SUFFIXES: .tex .dvi .ps .pdf .rtf

.tex.pdf:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ $(LATEX) $< 
	@ bibtex `basename $< .tex`
	@ makeindex `basename $< .tex`.nlo -s ../btexmat/nomencl.ist -o `basename $< .tex`.nls
	@ $(LATEX) $< 
	@ $(LATEX) $< 
	@ $(LATEX) $< 
ifneq ($(LATEX),pdflatex)
	@ echo "### converting DVI to PostScript"
	@ dvips $<
	@ echo "### converting PostScript to PDF"
	@ ps2pdf $<
endif
	@ mv $@ `basename $@ .pdf`-`cat rel-number.tex`.pdf

.tex.dvi:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ latex $< 
	@ bibtex `basename $< .tex`
	@ makeindex `basename $< .tex`.nlo -s btexmat/nomencl.ist -o `basename $< .tex`.nls
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
	@ mv $@ `basename $@ .pdf`-`cat rel-number.tex`.pdf

clearAuxFiles:
	$(foreach EXT, ${AUX_EXTS}, if [ ! "x`ls *.${EXT} 2>/dev/null`" = "x" ]; then rm *.${EXT}; fi;)
clearResFiles:
	$(foreach EXT, ${RES_EXTS}, if [ ! "x`ls *.${EXT} 2>/dev/null`" = "x" ]; then rm *.${EXT}; fi;)

clear:	clearAuxFiles
clean: 	clear clearResFiles

dclear: clear
	$(foreach DIR, ${SUB_DIRS}, cd ${DIR} && make clear && cd ..; done)

dclean: clean
	$(foreach DIR, ${SUB_DIRS}, cd ${DIR} && make clean && cd ..; done)

