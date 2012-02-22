# (c) Karsten Reincke, Frankfurt am Main, 2011
# compile one/all tex-files 
AUX_EXTS=url bbl blg aux dvi toc log lof
RES_EXTS=ps pdf bak

all:
	echo "only clear and clean options"

clearAuxFiles:
	$(foreach EXT, ${AUX_EXTS}, if [ ! "x`ls *.${EXT} 2>/dev/null`" = "x" ]; then rm *.${EXT}; fi;)
clearResFiles:
	$(foreach EXT, ${RES_EXTS}, if [ ! "x`ls *.${EXT} 2>/dev/null`" = "x" ]; then rm *.${EXT}; fi;)

clear:	clearAuxFiles
clean: 	clear clearResFiles


