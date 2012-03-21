#!/bin/sh
REL="0.1.6"
WD=$HOME
OSLICNAM="OSLiC-$REL"
OSLICDIR="$WD/$OSLICNAM"
OSLICZIP="oslic-$REL.zip"

make dclean
if [ -e $OSLICDIR ]; then rm -rf $OSLICDIR; fi
mkdir -p $OSLICDIR

cp -rd * $OSLICDIR

( 
cd btexmat
make oscBibRevResourcesDe.pdf
mv oscBibRevResourcesDe.pdf ../oscBibRevResourcesDe-$REL.pdf
make oscBibRevNextActionEn.pdf
mv oscBibRevNextActionEn.pdf ../oscBibRevNextActionEn-$REL.pdf
)

(
cd snippets
make ubRechercheDaFam.pdf
mv ubRechercheDaFam.pdf ../ubRechercheDaFam-$REL.pdf
)

make osCompendiumEn.pdf

mv *.pdf $OSLICDIR

( cd $WD
if [ -e $OSLICZIP ]; then rm $OSLICZIP; fi
zip -r $OSLICZIP $OSLICNAM
)

make dclean
