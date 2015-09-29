# sh devtools/contlexlist.sh
# makes a sorted list with all continuation lexicons and their members

grep ';' src/morphology/stems/nouns.lexc | cut -d ' ' -f1,2 |awk '{print $2" "$1}' |rev | sort | rev |see

