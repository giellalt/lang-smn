#!/bin/bash

# A short shell script to test word form generation for all continuation
# lexicons except the ones listed in the exception list.

# Path to $GIELLA_CORE - we don't use Autotools for these scripts:
if test "x$GIELLA_CORE" != "x" -a -d "$GIELLA_CORE" ; then
    giella_core=$GIELLA_CORE
elif test "x$GTCORE" != "x" -a -d "$GTCORE" ; then
    giella_core=$GTCORE
elif test "x$GTHOME" != "x" -a -d "$GTHOME/giella-core" ; then
    giella_core=$GTHOME/giella-core
else
    echo "ERROR: Neither of $$GIELLA_CORE, $$GTCORE or $$GTHOME defined."
    exit 1
fi

######### USER Variables - change these to your liking: #########
# Codes for the word forms to be generated - list as many or few as needed:
morf_codes="+N+Sg+Nom \
            +N+Sg+Gen \
            +N+Sg+Ill \
            +N+Sg+Loc \
            +N+Sg+Com \
            +N+Sg+Abe \
            +N+Par \
            +N+Ess \
            +N+Pl+Nom\
            +N+Pl+Gen \
            +N+Pl+Acc \
            +N+Pl+Ill \
            +N+Pl+Loc \
            +N+Pl+Com \
            +N+Pl+Abe"

# Lexicon source file for lexicons and lemmas:
source_file=src/morphology/stems/nouns.lexc

# Lexicons that should NOT be used to extract lemmas (egrep expression):
exception_lexicons="(nounstems|KOLME|NELJA|Rnoun|2PUUVSAH|2SAAGIH|2SAANIH|2SKERREEH|3JESANEH|3PAPAREH|3SOKSAMEH|3STEVILEH|3TONALEH|3VALJIIMEH|C_KILDEEH|3VANHIMEH)"

# FST used for generation, MINUS suffix:
generator_file=src/generator-gt-norm

# How many lemmas maximally for each lexicon:
lemmacount=2

# Specify path to the dir containing the script used for generation:
script_dir=devtools

################## DO NOT CHANGE BELOW HERE!!! ##################
source $script_dir/generate-wordforms-for-cont_lexes.sh \
        "$giella_core" \
        "$morf_codes" \
        "$source_file" \
        "$generator_file" \
        "$lemmacount" \
        "$exception_lexicons"
