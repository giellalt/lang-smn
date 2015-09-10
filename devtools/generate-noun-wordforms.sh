#!/bin/bash

# A short shell script to test word form generation for all continuation
# lexicons except the ones listed in the exception list.

######### USER Variables - change these to your liking: #########
# Codes for the word forms to be generated - list as many or few as needed:
morf_codes="+N+Sg+Nom \
            +N+Sg+Gen \
            +N+Sg+Ill \
            +N+Sg+Loc \
            +N+Sg+Com \
            +N+Pl+Nom"

# Lexicon source file for lexicons and lemmas:
source_file=src/morphology/stems/nouns.lexc

# Lexicons that should NOT be used to extract lemmas (egrep expression):
exception_lexicons="(nounstems|KOLME|NELJA|Rnoun|2PUUVSAH|2SAAGIH|2SAANIH|2SKERREEH|3JESANEH|3PAPAREH|3SOKSAMEH|3STEVILEH|3TONALEH|3VALJIIMEH|C_KILDEEH|3VANHIMEH)"

# FST used for generation, MINUS suffix:
generator_file=src/generator-gt-norm

# How many lemmas maximally for each lexicon:
lemmacount=2

# Specify path to $GTCORE - we don't use Autotools for these scripts:
gtcore=$GTCORE


################## DO NOT CHANGE BELOW HERE!!! ##################
source $gtcore/scripts/generate-wordforms-for-cont_lexes.sh \
        "$gtcore" \
        "$morf_codes" \
        "$source_file" \
        "$generator_file" \
        "$lemmacount" \
        "$exception_lexicons"
