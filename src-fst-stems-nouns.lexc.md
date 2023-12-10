

# Inari Saami noun roots

## 1. Even-syllable stems
* â-stems
* á-stems
* o-stems
* a-stems
* ä-stems
* e-stems
* i stems
* u stems
* Four-syllabic even stems
* 2.1 Stems without consonant gradation
* 2.1.1 2nd syll vowel does not alternate (MO Ia)
* 2.1.2 2nd syll vowel alternates (MO Ib)
* 2.2 Stems without consonant gradation
3. Ohter cases, all kind of changes

* **LEXICON NounRoot** is the basic lexicon, dividing into
* **FirstComponent ;** , nouns only in use as cmp first parts, and
* **Noun ;** , the noun list itself.

* **LEXICON LastNouns** pointed to from compounds.lexc
* **heivi+CmpN/SgNomLeft+CmpNP/Suff+Sem/Dummytag:he^RVi4vi 2AIGI ;**

* **LEXICON FirstComponent**
* **pessijâš+N+Cmp/SgNom+Sem/Time:pessijâš Rnoun ;**
* **luáppijâš+N+Cmp/SgNom+Sem/Time:luáppijâš Rnoun ;**
* ...

* **LEXICON MiddleNouns** , referred to from compounding.lexc
* **njune+N+Cmp/Sh+Sem/Body:njun Rnoun ;**
* **njälmi+N+Cmp/Sh+Sem/Body:njälm Rnoun ;** tags_via_apertium

* **LEXICON NAMAG** gives »»» and directs to NAMAG, both from adj and numerals

* **LEXICON SAS** , both from adj and numerals

* **LEXICON NAMAGCont**

* **LEXICON SASCont** ,

* *LEXICON Gen_DER* 

* *LEXICON Nom_DER* 

* *LEXICON DER-AG* 

* *LEXICON DER-SAS* 

## The split into different noun types according to Px

* **LEXICON Noun** is split into NounNoPx, NounPxKin, NounPx.
    - **NounNoPx ;** No flag, no Px
    - **@P.Px.add@ NounPxKin ;** TODO: add a flag @P.Nom3Px.add@ when we know how it works
    - **@P.Px.add@ NounPx ;** with a @P.Px.add@ flag, and with Px (= most nouns)

* **LEXICON NounNoPx** move here the nouns not taking Px.

* **LEXICON NounPxKin**For the moment, kinship words go like NounPx and need not be moved here.

## The standard list of noun stems

The nouns are reverse-sorted according to contlex,
and thereafter according to stem.

* **LEXICON NounPx** here we put all normal nouns, as before

From corpus
From missinglist

* * *

<small>This (part of) documentation was generated from [src/fst/stems/nouns.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/nouns.lexc)</small>

---

