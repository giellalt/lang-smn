#!/bin/bash

# script to generate paradigms for generating word forms
# command:
# sh generate_contlex_para.sh PATTERN
# example, when you are in smn:
# sh devtools/prop_minip.sh VUONA | dsmnNorm | less
# sh devtools/prop_minip.sh Hirškikkâ | dsmnNorm 


PATTERN=$1
L_FILE="in.txt"
cut -d '!' -f1 src/fst/generated_files/smi-smn-propernouns.lexc | grep $PATTERN | tr '+' ':' | cut -d ':' -f1 | tr -d '%'>$L_FILE

P_FILE="test/data/testpropparadigm.txt"

for lemma in $(cat $L_FILE);
do
 for form in $(cat $P_FILE);
 do
   echo "${lemma}${form}" | $LOOKUP $GTLANGS/lang-smn/src/generator-gt-norm.xfst # xfst
#      echo "${lemma}${form}" | $HLOOKUP $GTLANGS/lang-smn/src/generator-gt-norm.hfstol # hfst
 done
done

