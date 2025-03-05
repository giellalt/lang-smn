#!/bin/bash

# script to generate paradigms for generating word forms
# command:
# sh generate_contlex_para.sh PATTERN
# example, when you are in smn:
# sh devtools/prop_minip.sh VUONA | dsmnNorm | less
# sh devtools/prop_minip.sh Hirškikkâ | dsmnNorm 


PATTERN=$1
L_FILE="in.txt"
cut -d '!' -f1 src/fst/morphology/stems/smn-propernouns.lexc | grep $PATTERN | cut -d ':' -f1 | tr -d '%'>$L_FILE

P_FILE="test/data/testpluralpropparadigm.txt"

for lemma in $(cat $L_FILE);
do
 for form in $(cat $P_FILE);
 do
      echo "${lemma}${form}" | $HLOOKUP $GTLANGS/lang-smn/src/generator-gt-norm.hfstol # hfst
 done
 rm -f $L_FILE
done

