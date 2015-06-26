#!/bin/bash

# script to generate paradigms for generating word forms
# command:
# sh generate_para.sh PATTERN

PATTERN=$1
L_FILE="in.txt"
grep $PATTERN ../src/morphology/stems/nouns.lexc |cut -d ':' -f1>$L_FILE

P_FILE="../test/data/testnounpradigm.txt"

for lemma in $(cat $L_FILE);
do
 for form in $(cat $P_FILE);
 do
   echo "${lemma}${form}"
 done
done

