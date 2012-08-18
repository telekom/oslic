# (c) Karsten Reincke, Frankfurt am Main, 2011
# compile one/all tex-files 

AUX_EXTS=url bbl blg aux dvi toc log lof nlo nls ilg ils ent
RES_EXTS=ps pdf bak rtf
SUB_DIRS=bibfiles btexmat extracts snippets templates
OSLICDIR=oslic

all:	advi

advi: clear
	find . -maxdepth 1 -name "*.tex" -type f |\
	while read file; do \
	  make "`basename $$file .tex`.dvi";\
	done

aps: clear
	find . -maxdepth 1 -name "*.tex" -type f |\
	while read file; do \
		make "`basename $$file .tex`.ps";\
	done

apdf: clear
	find . -maxdepth 1 -name "*.tex" -type f |\
	while read file; do \
		make "`basename $$file .tex`.pdf";\
	done

ddvi: advi
	$(foreach DIR, ${SUB_DIRS}, cd ${DIR} && make advi && cd ..; done)

dps: aps
	$(foreach DIR, ${SUB_DIRS}, cd ${DIR} && make aps && cd ..; done)

dpdf: apdf
	$(foreach DIR, ${SUB_DIRS}, cd ${DIR} && make apdf && cd ..; done)


.SUFFIXES: .tex .dvi .ps .pdf .rtf
.tex.dvi:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ latex $< 
	@ bibtex `basename $< .tex`
	@ makeindex `basename $< .tex`.nlo -s btexmat/nomencl.ist -o `basename $< .tex`.nls
	@ latex $< 
	@ latex $< 
	@ latex $< 

.tex.rtf:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ latex $< 
	@ bibtex `basename $< .tex`
	@ makeindex `basename $< .tex`.nlo -s btexmat/nomencl.ist -o `basename $< .tex`.nls
	@ latex $< 
	@ latex $< 
	@ latex $< 
	@ latex2rtf -o `basename $@ .rtf`-`cat release.tex`.rtf  $< 

.dvi.ps:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ dvips $<

.ps.pdf:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ ps2pdf $<
	@ mv $@ `basename $@ .pdf`-`cat release.tex`.pdf

dist:
	tar -czvf ../${OSLICDIR}-`cat release.tex`.tar.gz --exclude=${OSLICDIR}/ecopies/* ../${OSLICDIR}
	zip -r ../${OSLICDIR}-`cat release.tex`.zip --exclude=../${OSLICDIR}/ecopies/* ../${OSLICDIR}

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

