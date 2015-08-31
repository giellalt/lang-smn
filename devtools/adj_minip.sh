#!/bin/bash

# script to generate paradigms for generating word forms
# command:
# sh generate_contlex_para.sh PATTERN
# example, when you are in smn:
# sh devtools/adj_minip.sh HUMO | dsmnNorm | less
# sh devtools/adj_minip.sh hyeni | dsmnNorm 


PATTERN=$1
L_FILE="in.txt"
cut -d '!' -f1 src/morphology/stems/adjectives.lexc | grep $PATTERN | cut -d ':' -f1>$L_FILE

P_FILE="test/data/testadjparadigm.txt"

for lemma in $(cat $L_FILE);
do
 for form in $(cat $P_FILE);
 do
   echo "${lemma}${form}"
 done
done

