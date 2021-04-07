





The file smi-propernouns.lexc is copied from the common **gtcore** directory
and *shall not* be edited in the **langs** directory.




# General notes


The entries are tagged in gtcore for language, to satisfy the needs of the 
synthetic speech project.


# Language-specific notes
## This file (smi-propernouns.lexc) when applied to sme




This file was originally written for sme, and is copied directly to
the langs/sme catalogue without modification.


Documenting (parts of) the lexicon structure for sme:


|   Final syll.  | stressed    | unstressed
| --- | --- | --- 
|  final X+i/j   |  DUBAI (V+j) | PIPPI (C+i) 
|  other final V |  NYSTØ‡      | ACCRA       


 ‡) Also -i- without a preceeding long vowel, like in **DUBAI**.






## This file (smi-propernouns.lexc) when applied to sma, smj and smn.


For sma, smj and smn, there is a script, `src/scripts/smi-sma-conversion.pl`
changing the lexicon names from sme-style to sma/smj/smn-style. The resulting
file is `src/fst/stems/smi-sma-propernouns.lexc`, with the content
of this file following the text *Dump from SMI*. This is governed in 
*src/fst/Makefile.am*




## Modifications for sma
**MAKI** er for finske i-finale navn hvor sørsamisk og lulesamisk følger ulike
mønster. PIPPi i smj, ACCRA i sme og sma.


## Modifications for sma
**BETFAGE** er spesifikk for lulesamisk, og er identisk med ACCRA for dei andre
samiske språka. BETFAGE skal brukast ved e-finale ACCRA-ord.


## Modifications for smn


See the perl script


----


The beginning of this file (*smi-propernouns.lexc*) looks as follows 
(and thereafter 31000 similar lines follow):




 A-ha+OLang/NOB:A-ha ACCRA-org ;			     \\
 Aabakken+OLang/NOB:Aa#bakken9 LONDON-sur ;   \\
 Aabel+OLang/NOB:Aabel LONDON-mal ;		     \\
 Aabenraa+OLang/NOB:Aabenraa NYSTØ-sur ;	     \\






# How to work


Setting: A non-Inari Sámi name is missing in the FST.


1. Check whether the name (*Hiroshima*) is found in the src/fst/generated-files/ catalogue.
    1. if it is not, and is a non-smn name, it probably should be in the general file. \\
   Add it to gtcore/giella-shared/smi/src/fst/stems/smi-propernouns.lexc
    1. if it is in the generated cataloge, check wheter it has the contlex you want it to have \\
   if it does, it should work, so debug. \\
   if it does not, add a line for the name in question to the file \\
   src/scripts/smi-smn-conversion.pl (use existing lines as documentation).

   






