

# DELIMITERS 

Sentence delimiters are the following: <.> <!> <?> <...> <¶>

# TAGS AND SETS

## Tags

This section lists all the tags inherited from the fst, and used as tags
in the syntactic analysis. The next section, **Sets**, contains sets defined
on the basis of the tags listed here, those set names are not visible in the output.

### Beginning and end of sentence
BOS 
EOS

### Parts of speech tags

N
A
Adv
V
Pron
CS
CC
Po
Pr
Pcle
Num
Interj
ABBR
ACR
CLB
LEFT
RIGHT
WEB
PUNCT 

### Tags for POS sub-categories

Pers
Dem
Interr
Indef
Recipr
Refl
Rel
Coll
NomAg
G3
Prop

### Tags for morphosyntactic properties

Nom
Acc
Gen
Ill
Loc
Com
Ess
Sg
Du
Pl
RCmpnd
Cmpnd
SgNomCmp
SgGenCmp
ShCmp
PxSg1
PxSg2
PxSg3
PxDu1
PxDu2
PxDu3
PxPl1
PxPl2
PxPl3
Comp
Superl
Attr
Ord
Qst
IV
TV 
Prt
Prs
Ind
Pot
Cond
Imprt
ImprtII
Sg1
Sg2
Sg3
Du1
Du2
Du3
Pl1
Pl2
Pl3
Inf
ConNeg
Neg
PrfPrc
VGen
PrsPrc
Ger
Sup
Actio

### Tags for clitic particles
Foc/ge
Foc/gen
Foc/ges
Foc/gis
Foc/naj
Foc/ba
Foc/be
Foc/hal
Foc/han
Foc/bat
Foc/son

### Derivation tags

Der/PassL Der/PassS
Der/NomAg
NomAg
Der/adda
Der/ahtti
Der/alla
Der/asti
Der/easti
Der/d
Der/eaddji
Der/eamoš
Der/amoš
Der/geahtes
Der/gielat
Der/NuA (what is NuA?) 
Der/h
Der/heapmi
Der/hudda
Der/huhtti
Der/huvva
Der/halla
Der/j
Der/l
Der/laš
Der/las
Der/hat
Der/mállet
Der/meahttun
Der/muš
Der/NomAct
Der/st
Der/stuvva
Der/upmi
Der/supmi
Der/vuotâ
Der/kyetti
Der/lagan
Der/lágán
Der/lágaš
Der/jagáš
Der/jahkásaš
Der/diibmosaš
Der/dássásaš
Der/A
Der/Dimin
Der/viđá
Der/viđi
Der/veara
Der/duohke
Der/duohkai
Der/vuolle
Der/vuollai
Der/vuolde
<vdic>

### Semantic tags

###  Syntactic tags

@+FAUXV
@+FMAINV
@-FAUXV
@-FMAINV
@-FSUBJ>
@-F<OBJ
@-FOBJ>
@-FSPRED<OBJ
@-F<ADVL
@-FADVL>
@-F<SPRED
@-F<OPRED
@-FSPRED>
@-FOPRED>
@>ADVL
@ADVL<
@<ADVL
@ADVL>
@ADVL
@HAB>
@<HAB
@>N
@>Interj
@N<
@>A
@P<
@>P
@HNOUN
@INTERJ
@>Num
@Pron<
@>Pron
@Num<
@OBJ
@<OBJ
@OBJ>
@OPRED
@<OPRED
@OPRED>
@PCLE
@COMP-CS<
@SPRED
@<SPRED
@SPRED>
@SUBJ
@<SUBJ
@SUBJ>
@PPRED
@APP
@APP-N<
@APP-Pron<
@APP>Pron
@APP-Num<
@APP-ADVL<
@VOC
@CVP
@CNP
@X

## Sets containing sets of lists and tags

This part of the file lists a large number of sets based partly upon the tags defined above, and 
partly upon lexemes drawn from the lexicon.
See the sourcefile itself to inspect the sets, what follows here is an overview of the set types.

### Sets for Single-word sets

OKTA and go, and the set INITIAL for initial letters 
OKTA
go
INITIAL

### Sets for word or not

WORD
REAL-WORD
WORD-NOT-de
NOT-COMMA

### Derivational affixes

DER-V

DER-N

DER-A1

DER-A

A-V

A-NOT-V

### Case sets

ADLVCASE

CASE-HALFAGREEMENT
CASE-AGREEMENT
CASE

NOT-NOM
NOT-GEN
NOT-ACC

### Verb sets

NOT-V

### Sets for finiteness and mood

REAL-NEG

MOOD-V

GC

VFIN

VFIN-POS

VFIN-NOT-IMPRT

VFIN-NOT-NEG

NOT-PRFPRC

### Sets for person

### Sets consisting of forms of "leđe" (these ones need to be rewritten)

### Pronoun sets

### Adjectival sets and their complements

### Adverbial sets and their complements

### Sets for coordinators

### Sets for adverbs that have lookalikes
Here come some adverbs that have identical twins in other POS. 
If these are found in Adv contexts, we treat them as adverbs.

### Sets of elements with common syntactic behaviour

### Sets for verbs

V is all readings with a V tag in them, REAL-V should
be the ones without an N tag following the V.  
The REAL-V set thus awaits a fix to the preprocess V ... N bug.

* The set COPULAS is for predicative constructions

TRANS-V is the set for verbs really taking objects

* Sets for verbs choosing oblique objects or adverbials
* **STVLIST** is the list of strictly transitive verbs. In the rules, refer not to STVLIST, but to the set STV defined below.

STRICT-TRANS-V is the set for verbs which don't let a GenAcc be a modifier of anything else than an object, e.g. Mun organiseren eatni gievkkanis. - eatni wants to be the object

### Valency sets

* **PLACE-V** Those get only not locative if the target is a member TOOL, ABSTR-TOOL or ANIMATE or CONCEPT. Selects more locatives than ONLY-PLACE-LOC-V 

### Adverb sets

### Adjective sets

### NP sets defined according to their morphosyntactic features

### The PRE-NP-HEAD family of sets

These sets model noun phrases (NPs). The idea is to first define whatever can
occur in front of the head of the NP, and thereafter negate that with the
expression **WORD - premodifiers**.

The set **NOT-NPMOD** is used to find barriers between NPs.
Typical usage: ... (*1 N BARRIER NPT-NPMOD) ...
meaning: Scan to the first noun, ignoring anything that can be
part of the noun phrase of that noun (i.e., "scan to the next NP head")

### Other negatively defined morphosyntactic noun sets

### Noun sets

Nominal sets defined according to their morphophonological properties
Sets for lexeme homonymy (most of them are moved to where the actual rules are.)

The words in the set **N-PO** can be both N and Po, the set takes that into account.

### The LAHKA set family

### Nominal sets defined according to their semantical properties

* Spatial noun sets. These nouns behave like postpositions

* Time sets

* Amount sets

* Sets for nouns with morpho-syntactic preferences

* Number-related sets

* Sets for case, possessive, etc.

* Sets for nouns as pred

* Sets for animals

* Sets for things

* Sets for qualities

* Sets for things, not necessarily tools

* Sets for things such that people can be inside them:

* Sets for things such that people cannot be inside them:

* Part-whole sets for human

* Sets for places

* Sets that can both be buildings/places and represent humans

* Sets denoting relations

### Miscellaneous sets

### Border sets and their complements

### Multilingual sets

Conjunction sets

### Syntactic sets

ALLSYNTAG
NON-APP

*These were the set types.*

* * *

<small>This (part of) documentation was generated from [src/cg3/introdisambiguation.cg3](https://github.com/giellalt/lang-smn/blob/main/src/cg3/introdisambiguation.cg3)</small>
