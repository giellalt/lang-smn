#!/bin/bash

# A short shell script to test word form generation for all continuation
# lexicons except the ones listed in the exception list. 

# Path to $GIELLA_CORE - we don't use Autotools for these scripts:
if test -d "../giella-core" ; then
    giella_core="$(pwd)/../giella-core"
elif test "x$GTLANGS" != "x" -a -d "$GTLANGS/giella-core" ; then
    giella_core=$GTLANGS/giella-core
elif test "x$GIELLA_CORE" != "x" -a -d "$GIELLA_CORE" ; then
    giella_core=$GIELLA_CORE
elif test "x$GTCORE" != "x" -a -d "$GTCORE" ; then
    giella_core=$GTCORE
else	
    echo "ERROR: Neither of $$GIELLA_CORE, $$GTCORE or $$GTLANGS defined, and nothing found within the parent folder."
    exit 1
fi

######### USER Variables - change these to your liking: #########
# Codes for the word forms to be generated - list as many or few as needed:
morf_codes="+V+Inf \
            +V+Ind+Prs+Sg1 \
            +V+Ind+Prs+Sg3 \
            +V+Ind+Prs+ConNeg \
            +V+Ind+Prs+Pl3 \
            +V+Ind+Prs+Du1 \
            +V+Ind+Prt+Sg1 \
            +V+PrfPrc \
            +V+Ind+Prs+Du2 \
            +V+Ind+Prs+Du3 \
            +V+Ind+Prs+Pl1 \
            +V+Ind+Prs+Pl2 \
            +V+Ind+Prt+Sg3 \
            +V+Ind+Prt+Pl1 \
            +V+Ind+Prt+Pl3"

# Lexicon source file for lexicons and lemmas:
source_file=src/fst/stems/verbs.lexc

# Lexicons that should NOT be used to extract lemmas (egrep expression):
exception_lexicons="(4|3)"

# FST used for generation, MINUS suffix:
generator_file=src/generator-gt-norm

# How many lemmas maximally for each lexicon:
lemmacount=6

# Specify path to the dir containing the script used for generation:
script_dir=$giella_core/scripts

################## DO NOT CHANGE BELOW HERE!!! ##################
source $script_dir/generate-wordforms-for-cont_lexes.sh \
        "$giella_core" \
        "$morf_codes" \
        "$source_file" \
        "$generator_file" \
        "$lemmacount" \
        "$exception_lexicons"