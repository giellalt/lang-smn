#!/bin/bash

# script to generate paradigms for generating word forms
# command:
# sh generate_contlex_para.sh PATTERN
# example, when you are in smn:
# sh devtools/generate_contlex_para.sh LAAVU | dsmnDict | see

PATTERN=$1
L_FILE="in.txt"
grep $PATTERN src/morphology/stems/nouns.lexc |cut -d ':' -f1>$L_FILE

P_FILE="test/data/testnounpradigm.txt"

for lemma in $(cat $L_FILE);
do
 for form in $(cat $P_FILE);
 do
   echo "${lemma}${form}"
 done
done

