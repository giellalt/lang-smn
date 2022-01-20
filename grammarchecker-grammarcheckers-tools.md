
I N A R I   S A A M I  G R A M M A R   C H E C K E R
================================================================== 


Development setup:   
---------------------- 
```
cd $GTLANGS/lang-smn
./autogen.sh
./configure --with-hfst --enable-syntax --enable-grammarchecker --enable-tokenisers --enable-alignment --enable-reversed-intersect
make
cd tools/grammarcheckers
make dev
```

Then edit/test as:   
```
echo "Sun ij puátá." | sh modes/smngram.mode  # from the terminal
Hint: There are very many modes in the modes folder, look at them.
emacs grammarchecker.cg3  # and C-c C-i / C-c C-c if you use emacs and have cg-mode installed
```










# DELIMITERS 

Sentence delimiters are the following: <.> <!> <?> <...> <¶>


# TAGS AND SETS



## Tags


This section lists all the tags inherited from the fst, and used as tags
in the syntactic analysis. The next section, **Sets**, contains sets defined
on the basis of the tags listed here, those set names are not visible in the output.



### Tags declared as single-membered LISTs 


#### Beginning and end of sentence
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
CC-CS
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
QMARK
PPUNCT 
PUNCT

COMMA
¶
?



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
Prop
Allegro
Arab
Romertall


### Tags for morphosyntactic properties

Nom
Acc
Gen
Ill
Loc
Com
Ess
Ess
Sg
Du
Pl
Cmp/SplitR
Cmp/SgNom Cmp/SgGen
Cmp/SgGen
PxSg1
PxSg2
PxSg3
PxDu1
PxDu2
PxDu3
PxPl1
PxPl2
PxPl3
Px

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
VAbess

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
Der/alla
Der/d
Der/Car
Der/Car
Der/lasj
Der/NomAct
Der/st
Der/upmi
Der/vuota
Der/InchL
Der/Dimin
Der/Aadv


Err/Orth
Err/Orth-spes

- LIST DER-A-ADV = (Der/lasj Der/AAdv Adv) ; #
- SET NOT-DER-A-ADV = Adv - DER-A-ADV ; #


### Semantic tags

<vdic>
HUMAN
Sem/Act
Sem/Ani
Sem/Atr
Sem/Body
Sem/Clth
Der/Date
Sem/Domain
Sem/Feat-phys
Sem/Fem
Sem/Group
Der/Hum
Der/ID
Sem/Lang
Sem/Mal
Sem/Measr
Sem/Measr_Time
Sem/Money
Sem/Obj
Sem/Obj-el
Sem/Org
Sem/Perc-emo
Sem/Plc
Sem/Sign
Sem/State-sick
Sem/Sur
Sem/Time
Sem/Time
Sem/Txt
Der/Year


### Names

PROP-ATTR
PROP-SUR

### Time sets
TIME-N-SET
NOT-TIME
TIME-N



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
@HAB
@>N
@Interj
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
SUBJ
SPRED
OPRED
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
OBJ
<OBJ
OBJ>
<OBJ-OTHERS
OBJ>-OTHERS
SYN-V
@X



SETS
----


Sets containing sets of lists and tags

This part of the file lists a large number of sets based partly upon the tags defined above, and 
partly upon lexemes drawn from the lexicon.
See the sourcefile itself to inspect the sets, what follows here is an overview of the set types.



### Sets for Single-word entities

The set **go** for *ko*, , and the set INITIAL for initial letters 



### Sets for word or not

- WORD =  any word
- REAL-WORD-NOT-ABBR
- WORD-NOT-de
- NOT-COMMA
Note! We also have CLB_NOT-COMMA


### Derivational affixes

- DER-V
- DER-N
- DER-A1
- DER-A
- A-V
- A-NOT-V


### Case sets

- LIST ACCILL = Acc Ill ; #
- LIST ADVLCASE = Ill Loc Com Ess ;  #



- LIST CASE-HALFAGREEMENT = Ill (Sg Loc) (Pl Com) Ess ;   #
- LIST CASE-AGREEMENT = Nom Acc Gen (Pl Ill) Loc Com Ess ;   #
- LIST CASE = Nom Acc Gen Ill Loc Com Ess ;  #
- SET NOT-NOM = CASE - Nom ;  #
- SET NOT-GEN = CASE - Gen ;  #
- SET NOT-ACC = CASE - Acc ;  #

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
SG1-V
SG2-V
SG3-V
DU1-V
DU2-V
DU3-V
PL1-V
PL2-V
PL3-V

PERNUM


POSITIVE-V


### Some subsets of the VFIN sets
SG-V, DU-V, PL-V, etc.





### Imperative sets

No one so far


### Sets consisting of forms of "leđe" (these ones need to be rewritten)
LEDE, LEAN, LEAT, ...




### Pronoun sets
MUN, DON, SON, MOAI, ...



















### Adjectival sets and their complements
LEX-A, A-CASE, ...











### Adverbial sets and their complements
LEX-ADV, LEX-ADV-DE, ...











### Sets for coordinators
Foc, NEGFOC, ...








### Sets for adverbs that have lookalikes
Here come some adverbs that have identical twins in other POS. 
If these are found in Adv contexts, we treat them as adverbs.



LACCAT-ADV

MOD-NP-ADV

MOD-ADV-ADV

EASKKA












### Sets of elements with common syntactic behaviour


### Sets for verbs


V is all readings with a V tag in them, REAL-V should
be the ones without an N tag following the V.  
The REAL-V set thus awaits a fix to the preprocess V ... N bug.



- The set COPULAS is for predicative constructions














TRANS-V is the set for verbs really taking objects




- Sets for verbs choosing oblique objects or adverbials
- **STVLIST** is the list of strictly transitive verbs. In the rules, refer not to STVLIST, but to the set STV defined below.




STRICT-TRANS-V is the set for verbs which don't let a GenAcc be a modifier of anything else than an object, e.g. Mun organiseren eatni gievkkanis. - eatni wants to be the object
























### Valency sets

INF-V


ACC-INF-V




OPRED-V














































- **PLACE-V** Those get only not locative if the target is a member TOOL, ABSTR-TOOL or ANIMATE or CONCEPT. Selects more locatives than ONLY-PLACE-LOC-V 






















### Adverb sets









### Adjective sets










### Other adjective sets
A-N, A-N-CASE, ...











### NP sets defined according to their morphosyntactic features










### The PRE-NP-HEAD family of sets

These sets model noun phrases (NPs). The idea is to first define whatever can
occur in front of the head of the NP, and thereafter negate that with the
expression **WORD - premodifiers**.









The set **NOT-NPMOD** is used to find barriers between NPs.
Typical usage: ... (*1 N BARRIER NOT-NPMOD) ...
meaning: Scan to the first noun, ignoring anything that can be
part of the noun phrase of that noun (i.e., "scan to the next NP head")






### Other negatively defined morphosyntactic noun sets












### Noun sets

Nominal sets defined according to their morphophonological properties
Sets for lexeme homonymy (most of them are moved to where the actual rules are.)


The words in the set **N-PO** can be both N and Po, the set takes that into account.



### Nominal sets defined according to their semantical properties


- Spatial noun sets. These nouns behave like postpositions




- Time sets

































- Amount sets
















OKTA










- Sets for nouns with morpho-syntactic preferences

- Number-related sets










- Sets for case, possessive, etc.













- Sets for nouns as pred









































- Sets for animals

GEN-ANIMAL, PREDATOR. BIRD, ...













- Sets for things

















- Sets for qualities


- Sets for things, not necessarily tools


















- Sets for things such that people can be inside them:

- Sets for things such that people cannot be inside them:






- Part-whole sets for human




- Sets for places






























- Sets that can both be buildings/places and represent humans























































- Sets denoting relations





### Miscellaneous sets
















### Border sets and their complements














### Syntactic sets

ALLSYNTAG

*These were the set types.*


### Grammarchecker sets

name convention for error tags: ´´&errortype-errorsubtype-is-shouldbe´´





RULE SECTION
============


- Example marking: Wrong = #%
- Example marking: Correct = #$
- Example marking: Finnish = #f




# Verb agreement rules

## Sg3/Pl3 errors

msyn-agr-sg3-pl3

msyn-agr (this should be updated)


msyn-v-prfprc-sg1

msyn-agr-other-sg1

msyn-agr-other-sg1



msyn-v-actio-sg1


### Sg2

nmsyn-agr-other-sg2



## Duaali

msyn-agr-other-du1






## Pluraali

msyn-agr-other-pl1



syn-agr-other-pl2





Suomâkielâ sárnumkielâ epikongruens maaŋgâlovo 3. persovnist 

msyn-agr-other-sg3



## Suomen nessesiivirakenne

msyn-ness-acc-nom

msyn-ness-acc-nom








## Inf should be Actio Essive

msyn-orrood-inf-actioess





## Existential sentences -- same as next?

msyn-ext-sg3-pl3

msyn-extv-sg3-pl3
Iäruh omâstemráhtusist: mieđetteijee já kieldee häämi

### Verb in plural 




msyn-extneg-sg3-pl3





### Existential sentences and habitives








## Postpositions



syn-po-nom-gen




msyn-po-placc-plgen




## Predicative

msyn-pred-acc-nom

### Agreement error with predicative

msyn-predagr-pl3-sg3


msyn-adj-attr-pred







## Confusion rules

Sg1 for PrfPrc




## Plural objects






msyn-v-sg3-conneg

msyn-v-du3-conneg



msyn-dem-locattr-gen

msyn-obj-plnom-placc	



### Acc shall be Nom

syn-top-placc-plnom 



### Acc shall be Ill

msyn-obj-acc-ill




### Inarinsaamenkielisiä nimiä käytetään vähän

msyn-top-placc-plnom



### Plain object of TV in Nom shall be Acc

msyn-obj-sgnom-sgacc



msyn-obj-plnom-placc


### Imperative errors

Suomâkielâ imperatiiv mieđetteijee häämist, mast objekt sajehäämmin lii maaŋgâlovo nominatiiv mut sämikielâst akkusatiiv:

msyn-imp-nom-acc


## Infinitive errors

look at this




### Accusative subjects in passive 

b) Suomâkielâ partitiiv passiivráhtusijn; sämikielâst passiiv ohtâvuođâst lii nominatiiv já verbâ maaŋgâlovvoost.

msyn-pass-accsubj-nomsubj














## Noun phrase internal phenomena 


### Noun phrase complements

N + Ill

msyn-ncompl-ess-sgill








### Quantor phrases

msyn-quant-gen-nom



### Noun phrase agreement NP 


Det + N agreement

msyn-det-nom-acc



Attributive forms


mii + nominative should be mii + acc

msyn-mii-sgnom-placc




### Adjectives in attributive position

msyn-adj-gen-nom


## Numeral phrases
Commented out, Comment in to test the 2-6 and 7+ sets...


msyn-num-par-gen
The rule is: 2-6 + gensg, 7- + par

msyn-num-par-gen


msyn-num-gen-par

msyn-num-acc-par





## Lexical rules

real-pisso-pissood



The gramamrchecker file ends here.

* * *
<small>This (part of) documentation was generated from [../tools/grammarcheckers/grammarchecker.cg3](http://github.com/giellalt/lang-smn/blob/main/../tools/grammarcheckers/grammarchecker.cg3)</small>