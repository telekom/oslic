#!/bin/sh
####################
# only as a reminder not to use incompatible shell commands
# #!/usr/bin/env bash 
####################
REL="0.2.0"
WD=$HOME
OSLICNAM="oslic-$REL"
OSLICDIR="$WD/$OSLICNAM"
OSLICZIP="oslic-$REL.zip"

make dclean
if [ -e $OSLICDIR ]; then rm -rf $OSLICDIR; fi
mkdir -p $OSLICDIR

cp -rd * $OSLICDIR

( 
cd btexmat
make oscBibRevResourcesDe.pdf
make oscBibRevResourcesEn.pdf
make oscBibRevCopiedButNotRead.pdf
make oscBibRevNextAction.pdf
mv *.pdf $OSLICDIR
)

(
cd snippets
make ubRechercheDaFam.pdf
mv ubRechercheDaFam.pdf  $OSLICDIR
)

make osCompendiumEn.pdf

mv *.pdf $OSLICDIR

( cd $WD
if [ -e $OSLICZIP ]; then rm $OSLICZIP; fi
zip -r $OSLICZIP $OSLICNAM
)

make dclean
