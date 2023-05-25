#!/bin/bash

# script to generate paradigms for generating word forms
# command, when you are in smn:
# sh devtools/verb_minip.sh 2SYLL_OD | less
# sh devtools/verb_minip.sh kihlođ 


LOOKUP=$(echo $LOOKUP)
HLOOKUP=$(echo $HLOOKUP)
GTHOME=$(echo $GTHOME)


PATTERN=$1
L_FILE="in.txt"
cut -d '!' -f1 src/fst/stems/verbs.lexc | egrep $PATTERN | tr '+' ':' | cut -d ':' -f1>$L_FILE

P_FILE="test/data/testverbinfinites.txt"

for lemma in $(cat $L_FILE);
do
 for form in $(cat $P_FILE);
 do
   echo "${lemma}${form}" | $HLOOKUP $GTLANGS/lang-smn/src/generator-gt-norm.hfstol # xfst
#      echo "${lemma}${form}" | $HLOOKUP $GTLANGS/lang-smn/src/generator-gt-norm.hfstol # hfst
 done
done

