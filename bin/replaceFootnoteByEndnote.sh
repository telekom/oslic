#!/bin/bash

find snippets/ -name "*.tex" -type f |\
while read file; do 
  echo $file;
#  cat $file | sed "s/footnote{/endnote{/g" > x.x; mv x.x $file; 
  cat $file | sed "s/endnote{/footnote{/g" > x.x; mv x.x $file; 
done

