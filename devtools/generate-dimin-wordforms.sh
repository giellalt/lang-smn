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
morf_codes="+N+Der/Dimin+N+Sg+Nom \
            +N+Der/Dimin+N+Sg+Gen \
            +N+Der/Dimin+N+Sg+Ill \
            +N+Der/Dimin+N+Sg+Loc \
            +N+Der/Dimin+N+Sg+Com \
            +N+Der/Dimin+N+Sg+Abe \
            +N+Der/Dimin+N+Par \
            +N+Der/Dimin+N+Ess \
            +N+Der/Dimin+N+Pl+Nom\
            +N+Der/Dimin+N+Pl+Gen \
            +N+Der/Dimin+N+Pl+Acc \
            +N+Der/Dimin+N+Pl+Ill \
            +N+Der/Dimin+N+Pl+Loc \
            +N+Der/Dimin+N+Pl+Abe"

# Lexicon source file for lexicons and lemmas:
source_file=src/fst/morphology/stems/nouns.lexc

# Continuation lexicons that should NOT be used to extract lemmas (egrep expression):
exception_lexicons="(2KOLLIISTALLAM|2KUMPPI_PL|2LAAVU_PL|2LAJO|2SOLLA_PL|2TAHO|2VAALJA_PL|2VADDU_PL|2VUAGGU_PL|3ALMAS|3COLL_PAAVIR|3DUSSEPIIVTAS|3HUKSIM|3JAAVVIL|3KEPIDEM|3KIEDAVUSSAM|3KOMPAS|3OPPUS|3PAAVIR|3PIIVTAS|3SAJOS|4JOTOLAH|4JOTOLAH_PL|4KUBALOH|4C_RASTAGAS|4KUNAGAS|4KUNAGAS_PL|4LAS_NOUN|4MANUTTEP|APINA|C_MORCES|JUUVAS|MUS_NOUN|Rnoun|S_ALGAAS|S_CISSAAS|S_KAAHUS|S_KAANDAS|S_KUADHUS|S_KUAVDAS|S_KUULMIS|S_SPAALVAS|S_SUOLLUS|S_TUULAS|S_VUALAAS|nounstems|C_PELES)"

# FST used for generation, MINUS suffix:
generator_file=src/fst/generator-gt-norm

# How many lemmas maximally for each lexicon:
lemmacount=15

# Specify path to the dir containing the script used for generation:
script_dir=$giella_core/scripts

################## DO NOT CHANGE BELOW HERE!!! ##################
"$script_dir/generate-wordforms-for-cont_lexes.sh" \
        "$giella_core" \
        "$morf_codes" \
        "$source_file" \
        "$generator_file" \
        "$lemmacount" \
        "$exception_lexicons"
