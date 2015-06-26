grep ';' src/morphology/stems/nouns.lexc | cut -d ' ' -f1,2 |awk '{print $2" "$1}' |rev | sort | rev |see

