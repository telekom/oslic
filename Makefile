#!/usr/bin/make -f
# compile one/all tex-files
#
# Use make LATEX=pdflatex (default) to produce oslic-$VERSION.pdf
#  or make LATEX=latex to produce oslic.dvi.
# A pretty standard tex installation will do, the only somewhat non-standard
# requirement are newfile and shadow styles, which on some distros are 
# provided by packages like texlive-newfile and texlive-shadow.

LATEX=pdflatex

AUX_EXTS=url bbl blg aux dvi toc log lof nlo nls ilg ils ent out
RES_EXTS=ps pdf bak rtf
SUB_DIRS=articles bibfiles btexmat extracts snippets templates
OSLICDIR=oslic


ifneq ($(LATEX),pdflatex)
all:	advi

advi: clear
	find . -maxdepth 1 -name "*.tex" -type f ! -name "rel*.tex"|\
	while read file; do \
	  make "`basename $$file .tex`.dvi";\
	done

aps: clear
	find . -maxdepth 1 -name "*.tex" -type f ! -name "rel*.tex"|\
	while read file; do \
		make "`basename $$file .tex`.ps";\
	done

else
all:	apdf

endif

apdf: clear
	find . -maxdepth 1 -name "*.tex" -type f ! -name "rel*.tex"|\
	while read file; do \
		make "`basename $$file .tex`.pdf";\
	done

ifneq ($(LATEX),pdflatex)
ddvi: advi
	$(foreach DIR, ${SUB_DIRS}, cd ${DIR} && make advi && cd ..; done)

dps: aps
	$(foreach DIR, ${SUB_DIRS}, cd ${DIR} && make aps && cd ..; done)
endif

dpdf: apdf
	$(foreach DIR, ${SUB_DIRS}, cd ${DIR} && make apdf && cd ..; done)

ascii:
	mkdir -p asc && rm asc/*
	find snippets -name "*.tex" | grep -v "\/osc" |\
	while read f; do \
		n=`basename $$f`; detex $$f > asc/$$n.txt;\
		echo "$$f-> $$n.txt";\
	done
	detex oslic.tex > asc/000-oslic.tex.txt
	cat `ls asc/* | sort` | grep -v "^$$" > oslic-extract.txt

.SUFFIXES: .tex .dvi .ps .pdf .rtf

.tex.pdf:
	@ echo "### `date +'%Y%m%dT%H%M%S'`" 
	@ echo "### converting $< to $@"
	@ $(LATEX) $< 
	@ bibtex `basename $< .tex`
	@ makeindex `basename $< .tex`.nlo -s btexmat/nomencl.ist -o `basename $< .tex`.nls
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

dist:
	tar -czvf ../${OSLICDIR}-`cat rel-number.tex`.tar.gz --exclude=${OSLICDIR}/ecopies/* ../${OSLICDIR}
	zip -r ../${OSLICDIR}-`cat rel-number.tex`.zip --exclude=../${OSLICDIR}/ecopies/* ../${OSLICDIR}

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

