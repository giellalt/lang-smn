#Inari Saami compounding

LEXICON Rhash - adding lower # and pointing at R

LEXICON R -  Flags to control compounding

LEXICON Rnoun - 

LEXICON RAlmostReal -  lexicalising the 3-part compounds, with the tag ShCmp

LEXICON Rreal - This initial recursive/compounding lexicon adds flags to 
control compounding, before going to the real compounding lexicon.
This is the former R lexicon, renamed to avoid the MiddleNouns loop

LEXICON RrealAfterCmpNFlags - coming from Rreal

LEXICON nounflag -  coming from previous, going to the Root lexica

LEXICON RHyph - This initial recursive/compounding lexicon adds flags to
control compounding, before going to the real compounding lexicon

LEXICON RHyph_after_cmp_flags - from RHyph

LEXICON RProp - This initial recursive/compounding lexicon adds flags to
control compounding, before going to the real compounding lexicon

- LEXICON RProp_after_cmp_flags from RProp

LEXICON RNum - This initial recursive/compounding lexicon adds flags to
control compounding, before going to the real compounding lexicon

LEXICON RNum_after_cmp_flags - going to Noun, should it be to NounRoot?

* * *

<small>This (part of) documentation was generated from [src/fst/morphology/compounding.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/compounding.lexc)</small>
