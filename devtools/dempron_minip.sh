#!/bin/bash

# script to generate paradigms for generating word forms
# command:
# sh generate_contlex_para.sh PATTERN
# example, when you are in smn:
# sh devtools/noun_minip.sh LAAVU | less
# sh devtools/noun_minip.sh smiergâs 
# Only get the lemma you ask for:
# sh devtools/noun_minip.sh '^smiergâs[:+]' 


LOOKUP=$(echo $LOOKUP)
HLOOKUP=$(echo $HLOOKUP)
GTLANGS=$(echo $GTLANGS)


PATTERN=$1
L_FILE="in.txt"
cut -d '!' -f1 src/fst/morphology/stems/pronouns.lexc | egrep $PATTERN |grep -v Err | tr '+' ':'| cut -d ':' -f1>$L_FILE

P_FILE="src/fst/morphology/test/testdempronparadigm.txt"

for lemma in $(cat $L_FILE);
do
 for form in $(cat $P_FILE);
 do
      echo "${lemma}${form}" | $HLOOKUP $GTLANGS/lang-smn/src/fst/generator-gt-norm.hfstol # hfst
#      echo "${lemma}${form}" | $LOOKUP $GTLANGS/lang-smn/src/fst/generator-gt-norm.xfst # xfst
 done
 rm -f $L_FILE
done

