
#sh devtools/testminiparadigmerilexc.sh |less

grep '¢' src/fst/stems/nouns.lexc | cut -d '¢' -f2 |cut -d '!' -f1 |preprocess | grep '[a-z]' |$LOOKUP $GTHOME/langs/smn/src/analyser-gt-norm.xfst  
