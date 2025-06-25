
I N A R I   S A A M I   D I S A M B I G U A T O R               
==================================================================

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
PPUNCT 

PUNCT

COMMA
¶

### Tags for POS sub-categories

- Pers
- Dem
- Interr
- Indef
- Recipr
- Refl
- Rel
- Coll
- NomAg
- Prop
- Arab
- Romertall
- URL

### Tags for morphosyntactic properties

**Case:**
- Nom
- Acc
- Gen
- Ill
- Loc
- Com
- Ess
- Par
- Sg
- Du
- Pl

**Compounding:**
- Cmp - a compound
- Cmp/SplitR
- Cmp/SgNom Cmp/SgGen
- Cmp/SgGen
- Cmp/Attr
- Cmp/Hyph

**Possessives:**
- PxSg1
- PxSg2
- PxSg3
- PxDu1
- PxDu2
- PxDu3
- PxPl1
- PxPl2
- PxPl3
- Px - all of the above in one list

**Adjectival features:**
- Comp
- Superl
- Attr
- Ord

Qst
IV
TV 
Prt
Prs
Ind
Pot
Cond
Imprt

**Person and Number:**
- Sg1
- Sg2
- Sg3
- Du1
- Du2
- Du3
- Pl1
- Pl2
- Pl3

**Verb features:**
- Inf
- ConNeg
- Neg
- PrfPrc
- VGen
- PrsPrc
- Ger
- Sup
- Actio
- VAbess

### Tags for clitic particles

- Foc/ba
- Foc/baa
- Foc/baan
- Foc/ban
- Foc/be
- Foc/gas
- Foc/ge
- Foc/gen
- Foc/ges
- Foc/gis
- Foc/gin
- Foc/go
- Foc/han
- Foc/kin
- Foc/nii
- Foc/sun
- Foc/uv

### Derivation tags

* Der/PassL Der/PassS smn Der/Pass
* Der/NomAg
* NomAg
* Der/AAdv
* Der/ag
* Der/ahasas
* Der/adda
* Der/alla
* Der/Car
* Der/Caus
* Der/d
* Der/Dimin
* Der/InchL
* Der/ivvaas
* Der/l
* Der/laakan
* Der/lasj
* Der/mas
* Der/NomAct
* Der/sasj
* Der/st
* Der/t
* Der/tt
* Der/taa
* Der/upmi
* Der/vualasas
* Der/vuota

`<vdic>`

Err/Orth

### Numeral sets

OKTA

### Semantic tags

HUMAN

PROP-ATTR
PROP-SUR

TIME-N-SET
NOT-TIME
TIME-N

###  Syntactic tags

Tag structure: @self>mother or @mother<self or @self

- `@+FAUXV	 `
- `@+FMAINV	 `
- `@-FAUXV	 `
- `@-FMAINV	 `
- `@-FSUBJ>	 `
- `@-F<OBJ	 `
- `@-FOBJ>	 `
- `@-FSPRED<OBJ`
- `@-F<ADVL	 `
- `@-FADVL>	 `
- `@-F<SPRED	 `
- `@-F<OPRED	 `
- `@-FSPRED>	 `
- `@-FOPRED>	 `
- `@>ADVL`
- `@ADVL<`
- `@<ADVL`
- `@ADVL>`
- `@ADVL `
- `@HAB> `
- `@<HAB `
- `@>N		 `
- `@Interj	 `
- `@N<		 `
- `@>A		 `
- `@P<		 `
- `@>P		 `
- `@HNOUN	 `
- `@INTERJ	 `
- `@>Num	 `
- `@Pron<	 `
- `@>Pron	 `
- `@Num<	 `
- `@OBJ		 `
- `@<OBJ	 `
- `@OBJ>	 `
- `@OPRED	 `
- `@<OPRED	 `
- `@OPRED>	 `
- `@PCLE	 `
- `@COMP-CS< `
- `@SPRED	 `
- `@<SPRED	 `
- `@SPRED>	 `
- `@SUBJ	 `
- `@<SUBJ	 `
- `@SUBJ>	 `
- `SUBJ		 `
- `SPRED	 `
- `OPRED	 `
- `@PPRED	 `
- `@APP		 `
- `@APP-N<	 `
- `@APP-Pron<`
- `@APP>Pron `
- `@APP-Num< `
- `@APP-ADVL<`
- `@VOC		 `
- `@CVP		 `
- `@CNP		 `
- `OBJ		 `
- `<OBJ		 `
- `OBJ>		 `
- `<OBJ-OTHERS`
- `OBJ>-OTHERS`
- `SYN-V`
* `@X`

## Sets containing sets of lists and tags

This part of the file lists a large number of sets based partly upon the tags defined above, and 
partly upon lexemes drawn from the lexicon.
See the sourcefile itself to inspect the sets, what follows here is an overview of the set types.

### Sets for Single-word sets

OKTA and go, and the set INITIAL for initial letters 
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

SG1-V
SG2-V
SG3-V
DU1-V
DU2-V
DU3-V
PL1-V
PL2-V
PL3-V

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
Typical usage: ... (*1 N BARRIER NOT-NPMOD) ...
meaning: Scan to the first noun, ignoring anything that can be
part of the noun phrase of that noun (i.e., "scan to the next NP head")

### Other negatively defined morphosyntactic noun sets

### Noun sets

Nominal sets defined according to their morphophonological properties
Sets for lexeme homonymy (most of them are moved to where the actual rules are.)

The words in the set **N-PO** can be both N and Po, the set takes that into account.

### Nominal sets defined according to their semantical properties

* Spatial noun sets. These nouns behave like postpositions

* Time sets

* Amount sets

OKTA

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

### Syntactic sets

*These were the set types.*

# RULE SECTION
Here follow the rules.

**@NO CODE@**

Do not touch the speller suggestions:
* @NO CODE@

**@NO CODE@**

This is the first section. Here we put safe rules with no or minimal context.

## Removing unwanted names

SUSPICIOUSNAME for remivong propernouns Ai Ain Lie Sun Ta Van Viste Ive

## Numbers

Ruleset for numbers from sme, and adjusted.

SELECT:SemYear SemYear if Sem/Date is Num

**SELECT:SemYear Sem/Year** Choose if not currency

**Sem/ID** if § to the left

**REMOVE:dyn dyn** Arab if Prop # foreløpig løsning, til vi har ny løsning for numerals.lexc

Remove all **Sem/ID** 

* **Insertwww** Inserts the Sem/Adr tag to all url expressions

* **ArabNom** says that sentence-initial Arabic numeral is Nom unless followed by Po

* **Arab1** says that "1" is Nom, look at this

* **ArabNomPlc** gives Nom tu numerls following placenames

* **Arab** rule for Apertium

* **mustalid** adds <vdic> to language of telling and quoting, like: ... dadjá Aili Kestkitalo.

* **PlcSur1** The Linda Englad rule: name is Sur not Plc if having a surname

* **PlcSur2**

* **PlcSur4**

## Focus clitics
* **Qst** removes Foc/uv if Qst and "?" at the ende of the sentence
* **FocUv** is the revert rule, it removes  Qst for Foc/uv if there is no "?"

* **NoWackern** says that if the word is not number 2 in the sentence it is not Foc (todo: phrase level, not word)

## SECTION 2, more context

## Numerals

* **NumRom** in beginning of sentence

* **sasjnum** chooses num gen to the left of sâš

* **NotOrdIfABBR**

* Nom

## Imperatives

See also *Imprt or Ind* some sections down.

### 

* **NotUvImprt** here it is adverb etc.

* **NotImprtAfterLede** removes Imprt if leđe one to the left

* **ImprtInit** selects sentence-initial imperative when followed by Ill

* **ImprtDál** 

* **ImprtComma** 

* **ImprtNotVGen**

* **NotImprtInd** 

* **NotImprtConNeg** 

* **NotImprtA** 

* **NotImprtN** 

* **NotImprtVFIN** 

Partitive after numerals

## Lexicalised derivations

* **derN** removes DER-N if lexicalised non-essives

* **derA** removes DER-A if lexicalised A

* **derAdv** removes DER-Adv if lexicalised Adv

* **derPass** removes DER-PASS if lexicalised V

* **derV** removes DER-V if lexicalised V,

### Particular verbs

* **PrsPrcIfA**

## Propernouns

###  Removing or selecting proper nouns that are lookalikes

*Removes **PropPl**, but problems with names as Davviriikkaid Ráđi, there we want Prop Pl

* **PronNotProp**

* **PropAttrIfPropx** removes Attr if no Prop on the right side

* **PropInsideProp** Selects Prop if capital letter inside clause

* **PropAttr** Removes (Prop Attr), but not if to the right is Prop or Ord OR ABBR 

* **PropSur** Selects (Prop Sem/Sur) if finite verb to the left. Immediately to the right is Sem/Fem OR Sem/Mal

* **r**

* **PropAttr1** Selects Attr if you are Sem/Fem OR Sem/Mal, Sem/Sur or INITIAL and to your right is Prop which is Sem/Fem OR Sem/Mal or Sem/Sur 

### MISC

der

*Removes **derNEss** if lexicalised, and both nouns are essive.

## Verbs

* DADJAT wants illative

* **vazzid** chooses väzziđ when Ill or čoođâ to the right --  vazzâđ venytellä vs. väzziđ kävellä

## Adjectives or nouns

## Adjectives, nouns, not adverbs

* **Aifeambbo** selects A after eambbo

## Subjunctions

Conjunctions

## Adverbs

### Adverbs or postpositions

### Adverbs or nouns

### Specific adverbs

###  buoh
* IFF **buotAdv** : buot Adv in front of Superl ok smn

* **mannelTimeAdv** golbma jagi maŋŋel

* **oovtast**

* **AdvSTV** váldit mielde, oahppat bajil. eará? STRICT-TRANS-V is too strong

* **pyereest**

* **miätáV**  

* **oddasitAdv**

* **oktanAdv**

* **ovttasAdv**

* **oktiiAdv** select

* **ollasitAdv** selects

**tuárviAdv** SELECT

* **Adverbs and not Nouns**

- uáli

Adverbs and not Pronouns

* **siste** is adv

## Pronouns 

* **recipr, reciprPl** select Recipr

### Nouns, not verbs

puáttiđ, not pađđeeđ (Prt: Sg3 poođij, Du1 poođijm, Du2 poođijd, Du3 poođijn, Pl1 poođijm, Pl2 poođijd)
* puáttiđ = tulla, pađđeeđ =käyttäytyä_levottomasti_(vasovasta_vaatimesta)
* We will make rules for pađđeeđ when we see examples of its use.

### Lexical selection - nouns

### Remove Imperative

* Some brave rules for removing Imprt

### Verb or Noun?

* **datPers** selects Pers. I made it stronger than it was. ref. r897 in sme-dis.rle

## Px constraints 

### PX Number

### From sme	

First select Px, then remove all remaining Px

* Set with adjectives, which are documented to have Px in our corpus

* **PxAlone** Remove Px if it is only word in the sentence, and not a typical px-term

* **NPxPrfPrc** Remove Px if PrfPrc with  leat to the left

* Nouns: **NomPxSg1** (not Ess) as the only word in a sentence. Needs no disambiguation.

* Nouns:  **AccPxSg1** after a TV verb. Exception for Aux.

* Nouns:  **AccPxSg1** after a TV Inf verb.

* **PxSg1LocAcc** is Acc to the right.

* **PxSg1Acc** is Acc to the right.

* coordination **PxSg1coord** 

* **PxSg1coordLast** for the last word of a coordination

* **PxSg2AccImprt** if  TV Imprt to the left

* **PxSg2AccPrfPrc** after PrfPrc 

* **NotPxSg2** if no Sg2 

* Nouns: **PxSg3AccPrfPrc** if PrfPrc and Sg3 to the left

*  **PxSg3GenPo2** in front of Po, to the left of the owner

* **PxGenNorPo**  

* **PXAccCoor**  

* **PxSgIllPx**  

We end section 2 by removing all remaining Px

* **KillPx** removes all remaining Px readings

* **NotVGenIfDer** removes VGen if 0 = Der/Pass or Der...(r947)

* **NotImprtIfAttrLeft** removes Imprt after attribute

* **NotImprtIfRel** removes Imprt after Rel, unify this with other left context (r948)

* **VSg1IfLeftMun** selects Sg1 when "mun" is to the left (r949)

* **VSG1IfRightMun** selects Sg1 when "mun" is to the right (r950)

### Sg2 - early cycle, safe rules

* **VSG2IfLeftDon** selects Sg2 when "tun" is to the left (r951)

* **VSG2IfRightDon** selects Sg2 when "tun" is to the right (r952)

### Sg3 - early cycle, safe rules

* **VSG3IfLeftSon** selects Sg3 when "sun" is to the left (r954)

* **VSG3IfRithgSon** selects Sg3 when "sun" is to the right (r954)

* **VNotSg3When12Left** removes Sg3 if 12 Pron immediate left (r955)

* **NegSg3BeforeFoc** selects Neg before Foc/ge or ConNeg (r959)

* **vfin** removes verb reading when the reading should be noun  

* **VDu1IfMoaiLeft** selects Du1 when "moai" left (r960)

* **VDu1IfMoaiRight** selects Du1 when "moai" right (r961)

### Pl3 - early cycle, safe rules

Select...

* **r976** SE V Pl1 if *-1 SII

* **r982** removes Prt Sg2 if Pl3 subject - 6002

* **VPl3Lookalikes** removes "verbs" like "mane" and "peri" (r984) - 274

* **VSg3Lookalikes** removes "verbs" like "skuvlii" 

OBS: denne er ikke helt bra

* **NPlbeforeRel, NSgbeforeRel** select N in front of Rel and MO

## Adjectives and adverbs

### Adv or not?
maid has many readings and as Rel it is a member of S-BOUNDARY. Therefore we need to disambiguate it early in this file. Most important is to select Adv. Because of that A and N still can have Vfin readings, it is difficult to make very general rules.

* **vaikkomii** was an IFF rule, but we weaken it to SELECT

* **Interj** or not

* **comparAdv**

* **AttrABBRNum**

* **PoParantes** selects Po after paranteces

* **PrGen1** selects Pr

* **PrGen2** selects Pr

* **PrNoCompl** removes Pr if no complement to the right	

* **PoGen** selects Po

* **vuollaiPo** selects

* **gaskkasPo** selects

* **NwhenPo** removes N if Po

* **compNomHead** NP-HEAD-NOM (ADVL) go NP-HEAD-NOM (ADVL). VFIN-NOT-IMPRT pga manglende disamgiguering

* **compMisc** go geassebuođut, go dán áigge

* **compCoord** coordination	

* **compCoordAttr** coordination again, now with Attr. Speacial rule because of that Attr also has other readings.	

* **compInf** 

* **compInfCoor** 

* **killAllnotComp** Removes analysis which are not @COMP-CS<

- *This was the kill all not Comp rule!!*

# MAPPING OF CC AND CS

Mostly we map both @CNP and @CVP, then we select @CNP, after that we remove them so @CVP remains

* **cnpCompSC** Map @CNP if @COMP-CS< or COMPAR ahte

* **cnpCompSpec** special rule because of PrfPrc = VFIN

* **CSasCNPCVP** Map some CSs both @CNP @CVP

* **CSasCVP** Map @CVP to CS

* **CCasCNPCVP** Map (@CNP @CVP) to CC

* **ahteCNP** ahte CC @CNP, remove the rest

* **killAllahtenotCS** All other occurrences of "et" are CSs.

* **vaiCCCNP** vai as CC or CS

* **vaiCC** remove vai as CC 

* **vaiCCNegQst1** vai CC @CVP before Neg or question

* **vaiCCNegQst2** vai CC @CNP in question about two alternatives

* **killAllvainotCSCVP** Select all vai CS @CVP	

* **CVPNPron** No finite verb or verbalactivity in front N/Pron @CNP N/Pron	

* **CVPnoVfin** No potential finite verb following

* **CVPnoVfin** Infitive following

* **CVPInfInf** between to Inf

* **CVPadvladvl** between to ADVL

* **CVPAdvAdv** between to Adv

* **CVPActioNom** 

* **CVPnoVfinAdvl** No finite verb in front ADVLCASE @CNP ADVLCASE	

* **CVPMiella**

* **CVPAdvNom** Nom @CNP Adv Nom	

* **CVPAccAdv** Acc @CNP Adv Acc	

* **CVP**

* **CS**

* **killAllCNP** removes all remaining @CNP

* **XCC-CS** removes CC and CS with no synttag

* **Interr** selects interrogative pronouns in questions

* **InterrIfPot** selects interrogative pronouns in potential sentences, and after that we remove the remaining Interr

* **munPl3** removes Pron Pers Pl3 if there is no verb agreement

* **Rel** selects Rel

* **RelSg1, RelSg2** select Rel

* **RelPl** selects Rel

* **RelPl** removes Rel

## Numerals

* **NumAccCurrency** Selects (Num Acc)	

* **NumNom** Selects (Num Nom) 

* **NumNom** Selects (Num Nom) 

* **NumNom** Selects (Num Nom) 

* **NumNom** Selects (Num Nom) 

* **NumNom** Selects (Num Nom) 

* **NumNom** Selects (Num Nom) between para

* **NumNom** Selects (Num Nom) in equation

* **NumNomCoord** Selects (Num Nom) 

* **r1082** Selects (Num Nom) 

* **year** Selects (Num Gen)

* **numunit** Selects (Num Gen) + NUMUNIT 

* **NumGenPo** Selects Gen if you are Num and there is a Gen following the first Gen to the right *gávcci máná njuni ovddas* 

* **jagiGen**

* **Locattr**

* **Illattr**

* **LocIllattr**

* **numPlAccn**

* **WWNumOrdIllAttr** selects Ill Attr and Loc Attr for numerals and ordinals

* **WWNumOrdAttr**

* **galleIndef**

* **galleIndef**

* **galleNum**

* **nubbiGen**

* **nubbiIndef**

* **nubbiOrd**

* **nubbiOrdManu**

* **nubbiOrdSuperl**

* **nnubbiIndefIll**

* **nnubbiOrdLex**

* **nnubbiIndefOkta**

* **nnubbiOrdEss**

* **nnubbiIndefAcc**

* **nnubbiAttr**

* **nKillnubbiOrd**

## Indefinite pronouns
The rules are not documented yet

* **mihheen** attr if neg + mihheen + NP

* **IndefAttr2** Selects (Indef Attr) 

* **IndefAttr3** Selects (Indef Attr)

* **NoAttr** Removes Attr if you are Pron and first one to your right is (Pron Rel)	

* **NoIndefAttr** Removes (Indef Attr) if first one to the right is (Pron Pers Loc)

* **NoIndefGen** Removes (Pron Gen Indef) or (Pron Acc Indef) if intransitive mainverb to the left and end of sentence to the right *muhto gávdnojit maid eará*

* **IndefNotAdv**

* **IndefNotAdvL**

* **MiiPl**

* **DemSgNom** selects Dem Nom Sg if VFIN Sg3

* **sierraAAttr**

* **Comp** rules select Comp A

* **AdvManimus** 

* **AttrAdv** 

* **Cmp/SplitRA**

* **CopANom** 

* **ANom**  removes A Nom

* **AAttr**  selects A Attr

* **OrdAttr**

* **AdvN** removes Adv   

* **AAttrPunct**    

* **AttrTIME**    

* **AAttrCoord1** coordination, first part

* **AAttrCoord2** coordination, first part

* **PrfPrcCoordA** selects PrfPrc in coordination with an A

* Remove Nom, Acc and Gen if Comp

* **APlNomafterCop** selects A Pl Nom after copulas and Pl Nom OR Pl Pron

* **APlNomafterCop2** selects A Pl Nom after copulas and Pl Nom OR Pl Pron

* **APlNomafterDu** selects A Pl Nom after copulas and Du

* **ASgNomNoSubj** selects A Sg Nom after copulas Sg3 or Neg Sg3

* **ASgNomafterCop** selects A Sg Nom after copulas and Sg Nom, not so strong constraint for the target

* **ASgNomEssCopNeg** selects A Sg Nom after copulas Sg3 or Neg Sg3s, 

* dsfa

* **AcompGo** Selects (A Comp Nom) even if there is no verb (ellipse)

* **Wr1775xc** Selects (A Sg Nom) if you are (N Sg Loc), Der/NomAg or (NN A). Copulas is to the left. EOS or CLB is to the right

* **Wr1776xc** selects (A Sg Nom) 

* **Wr1777c**

* **Wr1778xc**

* **Wr1779xc**

* **Wr1780c**

* **Wr1781c**

* **Wr1782**

* **Wr1784**

* **Wr1785**

* **Wr1785b**

* **Wr1786xc**

* **Wr1787c**

* **Wr1788xc**

* **Wr1789xc**

* **Wr1791xc**

* **Wr1796xc**

## And now some rules for adverbs that modify adjectives

* **AdvModA2**

* **AdvModA3**

* **AdvModA4**

* **NomAg**

* **Nom**

* **Nom**

* **vfin**

## ConNeg forms

Number following the rule headers below refer to numbers of hit in a 13 053 859 word corpus.

* **ConNegImp** selects ConNeg Imprt if Neg Imprt to the left. - 4265

* **PrfPrcConNeg**  to ConNeg Aux after PrfPrc

* **ConNegIfNeg** selects Ind ConNeg if Neg Ind to the left. This is the main (and common) ConNeg rule. - 660327

* **ConNegPrfPrc** selects ConNeg for leat when topicalised PrfPrc between Neg and leat - 713

* **NotConNegIfNotNeg** removes ConNeg if no Neg to the left. Consider unifying with NotConNegNotNeg. - 1094269

* **NotConNegNotNeg** removes remaining ConNegs whenever no Neg to the left. - 5862

* **VGen** selects VGen after VGEN-V-TRIGGER-verb

* **VGen4**

* **KillAllVGen** removes all VGen (r1842)

## Supinum vs. potential -- no example found in large corpus

## Perfect Participle

* **r1844** removes PrfPrc if 0 is the second N in an N and ... N construction

* **r1844** removes PrfPrc if 0 is the second N in an N and Gen ... N construction (this is marginal)

* **r1852** selects PrfPrc if copula to the left

* **r1853** selects PrfPrc if Rel to the left which again is linked to copula

### Topicalized version

the following chapter should be possible to unify.

* **r1855** selects PrfPrc if Nom to the left linked to copula

* **r1857** selects PrfPrc if Acc to the left linked to copula

* **r1858** selects PrfPrc if NP head to the left linked to copula

* **r1857** selects PrfPrc if copula to the left

* **r1861** selects PrfPrc if VFIN to the left

* **r3576** selects PrfPrc if Acc to the left linked to activity verb

## Actio

## Present participle
*orrut vs. orrot) 
## Rules for "addit" (which is an adjective, but more often a verb)
## Actio Loc = N Loc

* **ActioLoc** is an IFF rule, we also need rule for 'leat', like in lea go bieru oastimis

## Nouns or verbs

The rules are no documented yet

* **VFINAttr**

* **ActEssIfSensationv**	

* **NoActorIfSg3**

* **GenIfPo**

## Demonstrative pronouns, agreement in DP - should it be moved to after verbmappings? 
The rules are no documented yet

* **DemAttr**

* **IndefAgree** guhtege goappašat iešguhtege guhte

* **DemCASEPl**

* **DemCASESg**

* **DemAttrNum**

* **DemAcc**

* **DemAttr**

### Attribute disambiguation

* **AttrTitle**

* **AttrVFIN** removes Attr in front of VFIN

* **AttrnotNA** removes Attr when no N or A to the right

### Rules for Attr between Dem and N

* **AAttrDemSg1, AAttrDemPl1** 

* **AAttrDemSg2, AAttrDemPl2** 

* **AAttrDemSg3, AAttrDemPl3** 

* **AAttrDemSgIll, AAttrDemPlIll** 

* **AAttrDemSgLoc, AAttrDemPlLoc** 

* **AAttrDemdakkar** 

* **AAttrN** no copulas close to the left

* **AAttrCop**  copulas close to the left

# VERB MAPPINGS

Lexical disambiguation of verbs

## Verbs as predicatives (@SPRED>) and (@<OPRED) 

### The tags (@SPRED>) and (@<OPRED) target  PrfPrc
The rules are no documented yet

## Verbs as prenominal participles (@>N):

* Some verbs will not be @>N

* **NPrfPrc1** with 1C N Nom

* **NPrfPrc2** with -1C Dem or Num or Attr or Indef

* **NPrfPrc3** with PrfPrc or ConNeg to the left, the N can be different cases

* **NPrfPrc4** mannat in front of TIME

* **NPrfPrcPr** after Pr 

* **NPrfPrcPo** before Po

* **NPrfPrcGen** after Gen

* **NPrfPrc6** the verb can be to the right

* **NPrfPrcCoor** coordination

### (@+FAUXV) and (@+FMAINV) target Neg, orrut
* **+FAUXVNeg**

* **+FMAINVorrut** finite orrut

* **FAUXVorrut** finite orrut

* **FAUXVorrut** infinite orrut

### (@<SUBJ)  target Inf

* **<SUBJInf2**

* **r354**

* **<SUBJInf3**

* **<SUBJInf4**

* **<SUBJInf6**

* **SUBJ>Inf**

### (@<SPRED)  target Inf

### (@<ADVL)  target Inf, Actio Ess

### @-F<OBJ  target Inf 

### (@A<)  target Inf 	
* **AInf** Inf 	

### (@N<)  target Inf, Actio Ess

* **N<Infcoor**

### (@<ADVL)  target Inf, Actio Ess

* **ADVLActioEss** Inf 		

### (@<OBJ)  target Inf, Actio Ess, PrfPrc 

* **OBJActioEss** Inf 		

* **OBJPrfPrc** PrfPrc 			

### (@+FMAINV) and (@+FAUXV) and (@-FAUXV)

* **+FMAINVcop** COPULAS verbs     

* **+FAUXVaux** AUX  verbs     

* **+FAUXVboahtit** boahtit as AUX      

* **-FAUXVaux** AUX verbs     

* **+FMAINVcopInfconstr** leat before Inf     

* **+FAUXVCop**  copulas coming before the mainverb

* **+FAUXVCop**  copulas coming before the mainverb, relative clause inbetween

* **+FMAINVHabconstr**  in habitive constructions    

* **+FMAINVCoopCoord** coordination  

* **+FAUXVleat**  

* **+FMAINVAux1**  

* **-FMAINVAux2**  

* **+FAUXVCop**  copulas coming after the mainverb

* **+FMAINVCop**  copulas 	

### The big general @+FMAINV rule

* **+FMAINV**  to the remaining finite verbs which are not AUX    

* **+FMAINV**  to finite verb after mainverb

### (@-FMAINV) and (@-FAUXV)

* **-FAUXVConNegCop**  to ConNeg COPULAS   

* **-FAUXVConNegAux**  to ConNeg AUX-OR-MAIN   

* **-FAUXVConNegAux**  to ConNeg AUX   

* **-FMAINVConNeg**  to ConNeg   

* **-FMAINVConNeg**  to ConNeg

* **-FMAINVConNeg**  to ConNeg Aux after PrfPrc

* **-FAUXVPrfPrcAux**  to PrfPrc AUX  before Inf or Actio Ess

* **-FMAINVPrfPrc**  to PrfPrc 

* **-FMAINVPrfPrcEss**  to PrfPrc before Ess

* **-FMAINVPrfPrcleat**  to PrfPrc leat

* **-FMAINVPrfPrcafterAuxAux**  to PrfPrc after two Auxs

* **-FMAINVPrfPrccoord**  to PrfPrc coordination	

* **-FMAINVPrfPrccoord**  to PrfPrc coordination	

* **-FMAINVPrfbeforeAux**  to PrfPrc before the Aux	

* **-FMAINVPrfafterMan**  to PrfPrc before the Aux	

* **-FMAINVInf**  to Inf

* **-FMAUXVActioEss**  to Actio Ess

* **-FMAINVActioEss**  to Actio Ess

* **+FAUXV** to  Aux

* **NPrsPrc1** with 1C N Nom

* **ActioNom** with 1C N Nom

* **<ADVLVAbess** VAbess ADVL

* **<ADVLVGen** VGen ADVL

* **ADVL>VGen** VGen ADVL

* **<ADVLGer** Gerundium ADVL

* **ADVLGer>**

* **-FMAINVLoc** Actio Loc

# NOUNS

# CASE DISAMBIGUATION

## Num as subject, tricky cases - the rule should be here because of the verbdisambiguation

## ACCUSATIVE-ILLATIVE DISAMBIGUATION

## ACCUSATIVE-GENITIVE DISAMBIGUATION

## Secure rules for choosing Acc

* **PGenN** selects Gen when (Pron Pers) to the left and N to the right *mu sámevuođa iđuid*

* **CoGen1** (quite strict) selects the first of coordinated genitives *riikkaid, čearuid ja boazoorohagaid ovttasbarggu*

###  Semantihkka: Choosing accusative or genitive semantically

* **vuoiAcc** selects accusative if *vuoi* or *vuoi surgat* to the left 

* **SEMnotPossessor** Removes Gen if you are not a possible possessor (a human) # HAB-ACTOR

* **SEMnotHUM** removes Gen. This is when an NP is thought to be the OBJ, because it's not in the human sets and to the right is NON-FAMILY *njálgáid mánáide*. 

* **SEMXr2066** Removes Gen if there is a human or org to the right, exeption for *čállingiela áhčči* and so on

* **SEMXxr2071** Removes Gen: Nobody can possess a Proper name? Except from (Pron Pers) and Sem/Fem OR Sem/Mal

* **SEMXxPropOrg** Removes Gen: Who can possess Prop Sem/Org?    Names or their possessed ones can !!

* **SEMdep** Select Gen if main-organization in front of department   
* **SEMorghum** select gen if organization or education in front of human   

* **SEMXr2073** Remove Gen: Accusative in front of a human group *loktema sámiid buorrin*

* **SEMr2074** Selects Gen in front of HUMAN-GROUP

* **SEMactor** Select Gen in front of ABSTRACT and RIEKTEDILLI *unnitlogu oaidninčiegas*

* **SEMXr2076** Selects Gen if you are HUMAN or Pron with an ABSTRACT to your right *iežaset vuoigatvuođa*

* **VocNom** 

* **SEMyouareNom** Removes Gen and Acc when 0 FAMILY or PROFESSION because you are Nom. Not if -1 Num and VFIN is LEDE or IV *Oahpai go Sire sámegiela*

* **SEMyouareGen** Removes Nom if movement verb to the left and illative to the right, because you are the modifier of Ill *mannat Madame Tussaud kabinehttii*

* **SEMnotNom** Removes Nom if a Nom to the right followed by a transitive verb. 0 is animate and to the right is Ill. You are the modifier of Ill

* **SEMXxr2081** Removes Gen if NATION or POLITICAL-PLACE are to your right *dilálašvuođaid sámi*

* **SEMXr2087** Selects Gen if you have "eennâm" or "guovu" immediately to your right *Gomorra eatnamii*

* **SEMplcGen2** Removes Gen in front of a GENERAL-PLACE or POLITICAL-PLACE, if you are a noun *bidjen hildu sadjásis* 

* **SEMplcGen3** Removes Gen in front of GENERAL-PLACE or POLITICAL-PLACE, if you are ABSTR-TEXT or TEXT *cealkámušaid guovlluid dearvvašvuođafitnodagaid jahkedieđáhusain*

* **SEMXr2079** Removes Gen if you are Acc in front of MANNU *guđii virggi skábmanánu 1. b.*

* **SEMxhab** Selects Acc if COPULAS to the left of HAB-ACTOR *lea min*

* **EMeallimamuorra** Selects Gen eallima muorra

* **ACRGen** Selects genitive: NRK Sápmi

* **ACRAttr** Selects genitive: IL Nordlys

* **SEMXr2096** Removes genitive: because Accusative in front of an organization

* **SEMGenORG** selects Gen (modifier): in front of an organization *Stáhta Oahpahuskantuvra*

* **SEMgen1** removes Acc if buot, gait or buohkat in front of a genitive, followed by a plural noun *buot Norlándda ohppiid*

* **SEMgen2** removes Acc if bargat or dihte are FMAINV or Inf and are found somewhere to the left of a Gen, which is followed by a noun *bargame boazodoallolága ođastemiin*

* **SEMXr2103** Selects accusative: OASSI is usually accusative *hálddaša stuora oasi*

* **SEMXxr2104** Selects accusative: if WRITING-ACTIVITY-V to the left and you are a TEXT *čállá vaidaga*

* **SEMXxacc**Removes accusative: if WRITING-ACTIVITY-V to the left and a noun to the right *čállit Norgga vásáhusaid*

* **SEMXxr2108** Selects genitive if you are SAPMI with an Acc/Gen immediately to your left and a noun immediately to your right *girji sámi áššiid (birra)*

* **SEMsapmiModifier** Selects genitive (modifier): Sámi, suoma or ruoŧa  as modifier of noun *sámi oahpahus*

* **SEMtext** (modifier) selects genitive (modifier) if you are a TEXT in front of KLASS *doalloplána čuoggái*

* **SEMgiella2** Gen if you are Pron followed by giella *iežas giella*

### Other genitive rules

* **topGEN** Selects Gen if sentence intitial. To the right a Prf Prc that modifies nominative *Stáhta nammadan láhtu*

* **NomQst** Selects Nom in a Qst-sentence. To the left is Nom and leat with a Qst-particle *Leat go álbmotmeahcit veahkaváldi*

***lassinIll** Selects Ill if first one to the left is lassin *lassin Sarai*

### Gen and preposition/postposition

* **GenAPP** Selects genitive when a preposition to the left, or when a postposition to the right *rastá riikarájiid*

* **NomIfPo** removes Nom if sentence initial, because it modifies Gen

* **GenPoCoordPunct** Selects genitive for coordinated postpositions: with PUNKT to the left 

* **GenPoCoord** Selects genitive for coordinated postpositions *ráŋggáštusa ja buhtadusa hárrái*

* **GenGenPo** (modifies pp-phrase) selects Gen in front of postposition-phrase *álgojagiid soađi maŋŋá*

* **GenORG** (modifies Loc) selects Gen if you are MAIN-ORGANIZATION and to your right is Loc *dearvvašvuođafitnodagaid jahkedieđáhusain*

* **SEMnom** (modifies Nom) removes Acc if sentence boundary or adv to the left. To the right is Nom followed by a transitive verb and Acc *stálu beana njoallu háviid*

### Genitive in place adverbials ROUTE

* **GenPlc** Selects genitive if you are ROUTE, and there is a MOVEMENT-V to your left or right *boahtiba dán geainnu*

### Temporal adverbials: Choosing accusative or genitive TIME

* **GenMannuOrdRight** selects Gen if you are mannu and to your right is A Ord *miessemánu 10.*

* **GenMannuOrdLeft** selects Gen if you are mannu, to your left is Ord and to your right is a numeral

* **TIMEobs** selects Gen if you are time, and to your right is an intransitive real-verb. No adverbials allowed to the right *vuolggán bearjadaga*

* **GenJuohke** selects Gen if juohke or seamma to the left *juohke dálvvi*

* **GenJahkiNum** selects Gen if you are jahki num with a numeral to your right *Skuvlajagi 1998-99*

* **AigiModifier** (modifier) selects Gen if aigi to the right *konferánssa áiggi*

* **GenHávvi2** selects Gen for hávvi if a transitive verb cannot be found somewhere in the sentence

* **GenGeardi** selects Gen if the beginning of the sentence to the left *Eará háviid*

* **GenRbeaivi** (modifier) selects Gen if riegádanbeaivi to your right 

* **GenDURadj1** selects Gen if a duration adverbial to the left 

* **GenDURadj2** removes Gen for TIME-N, if duration adjective to the left *olles dálvvi*

* **NoTimeAccII** removes Acc for time if POINT-IN-TIME verb to the left 

* **timeADVL** selects Gen for time: when perfectum participle or infinitive to the left are time adverbial verbs or not time object verbs, to the left of this there shall be an auxiliary *lean čoavdán cealkagiid maŋimuš áiggi*

### Accusative or Genitive

* **theAccusative** selects Acc if you are a N or Pron with CC to your right, followed by Acc and a CLB or VFIN *gápmagiid ja vuoddagiid, sii geavahedje*

* **NotGenitive** selects Acc if you are a N or Pron with punctuation marks to your right, followed by a noun-phrase boundary

###  Reflexive pronouns: acc or gen

* **GenIES** (modifier) selects (Pron Refl Gen) if NON-FAMILY OR ("piäládâh") OR SAMEDIGGI-GEN to the right *iežaset mánáide*

* **AccIES** SELECTS accusative object (Pron Refl Acc)  

* **AccIES** (modifier) removes accusative object (Pron Refl Acc) if Ill or Loc to the right, but not if a transitive verb is found to the left 

* **GenIESinf** removes (Pron Refl Gen) if a transitive verb to the left and an Inf to the right 

### Accusative object 

* **AccActioEss** Selects accusative: when a Strict transitive verb actio ess to the left, but not if there is an other Acc to the right followed by EOS

* **AccEss** removes Acc when you are SAPMI-N-HEAD with an Ess to your right, but not if there is a transitive mainverb to the left *dutkama duogážin*

***topOBJPers** Removes Gen if you are Acc, and to you right is a Pron followed by a transitive verb. You have to be sentence initial

***AccVAbess** Selects Gen if to the right is abessive 

* **topOBJ1** Selects accusative: when a Strict transitive verb to the right (topicalized object) *beaskka geavahedje*

* **topOBJ2** Selects Acc when a transitive finite mainverb to the right (less strict) *dan juohkehaš fuobmá*

* **topOBJ3** Selects Acc. It is not depending on a transitive verb like topOBJ1 and 2, but selects Acc when Aux to the left, but only if there is no chanse of it beeing a Nom 

* **AccTV1** Selects accusative: when a Strict transitive verb to the left (barrier exludes everything but: adv, N Ess , N Loc and Pcle). No Acc allowed to the left of the verb. No Acc allowed to the right of you, except pronouns and education (sentenceboundary and N Ess as barriers). Only numunit numerals are allowed to the left. You are not Acc if you are: time, ruote or Pron Indef. Neither if you are Pron Refl with Gen to your right followed by N Ess. Neither if you are Pron Refl with Gen to your right followed by Po. N Nom and Ger not allowed immediatly to your right. You are not Acc if you are a Nom cased Prop and the verb is some kind of verbalactivityverb and ahte or sentenceboundary is to the right. Vdic not allowed immediately to your left. If váldit is the verb, you are likely to be a Gen if Ill-body noun is found to the right. *oste mielkki gávppis*

* **PronNP** (removes Acc): selects Gen for Pron Pers if Acc or Ill to the right, given that there is a secure object or that no transitive verb is found *bija ruđa mu kontoi*

* **r2206** selects Gen when a finite verb to the left and Nom or Acc to the right *lohkaba su girjji*

* **r2271** Removes genitive when a transitive verb to the left and you (not if you are a pronoun) are followed by Ill/Loc/Com/Adv: *doalvvui stálu meahccái*

* **AccTV2** Selects accusative: when a transitive verb to the left.
No Acc allowed to the left in the sentence (sentenceboundary as a barrier).
No Acc allowed to the right (barriers are CC, comma and sentenceboundary).
Note that Gen to the right followed by a noun is allowed.
You shall not be: route, time, Pron Dem.
You are not Acc if you are: Gen-cased Pron or Animate with Ill immediately to your right.
No Acc, Com, N Nom or Gerundium allowed immediately to your right.
No Gen followed by Po allowed immediately to your right.
A SG3-verb is only allowed to your left ...
(barriers excluding everything except NP-heads and adverbs, PrfPrc is also a barrier)
if there is a Nom left to the SG3-verb.
No vdic allowed immediately to your left.
You are not Acc if: you are a Nom-cased Prop, followed by ahte or EOS
and the verb found to the left (SV-boundary) is some kind of verbalactivityverb or a humanagentverb.

* **AccTV3** Selects accusative: when transitive verb to the left, if it doesn't find a barrier: comma, Num, real-v, Ess, s-boundary. Acc not allowed to the left of the verb. Not Acc if animate or Gen in front of Ill. Numerals the only Acc allowed to the right. Not Num, time route or adv. Not Com or Ger immediately to the right. Neither Po. Not Acc if sg3-verb to the left without a Nom to its left. Not Pron Dem followed by N, neither Pron Rel followed by time. No vdic immediately to your left. No Nom-cased Prop with some sort of verbal activity to its left is allowed..  

* **OLDr2466** Selects accusative: when transitive verb to the left, but not if the TV is FAUX OR LOC-V

* **AccInf** Selects Acc if the verb to the left is TV + Inf (you are the obj of the Inf). Differs from the other rules by not beeing restricted by an Acc to the right *hállat eatnigiela*

* **AccCOP** Selects Acc if copulas to the left and nominative to the left of COP *gápmagat leat áhči*

### Gen modifiers inside NP 

* **GenNP1** Selects Gen for Pron Pers (modifier): if NP-BOUNDARY OR Acc (but not if the finite verb is TV) to the left and N to right 

* **GenNP2** Selects Gen for N (modifier): if CC "já" immediately to your left and accusative to your right *ja sámi jurddašanvuogi*

* **GenNP3** Selects Gen (modifier): if first one to right is Nom or Loc *Norgga oaivegávpogis*

* **GenNP4** (modifier) selects Gen -1 BOS or COMMA, 1 Nom *nissoniid bargu*

* **GenNPCo** (modifier) Selects Pron Pers Gen if Nom to the left of ja *Mun ja mu ustibat*

* **GenRefl** (modifier) selects Gen in front of a noun in accusative or nominative case *iežaset oiviliid*

* **AccAfterCC** Select accusative: if genitiv to the left, and CC "já" to the left of genitive *eamiálbmot- ja globaliserenprošeavtta koordináhtor*

### Accusative in coordination

* **CoAcc1** Selects Acc when NP inbetween commas *guolleoivviid, dáraid, debbuid, buđeittaid, boares rásiid*

* **CoAcc2** Select Acc if coordinator to your left and accusative to the left of the coordinator *deaja dahje sávtta*

* **CoAcc3** Selects Acc in front of *ja* if there is a secure Acc to the right *semináraid ja diehtojuohkinčoahkimiid*

* **CoAccJA** Selects Acc when "já" to the left and comma to the left of "já" with a secure Acc to the left of comma *sámegiela, ja heajos dárogiela.*

* **CoAccJA2** Selects Acc in front of Gen + Po if ja in front of Acc *ja ruhtan sávzzaid ovddas*

### Intransitive verbs can sometimes be transitive

* **IVasTV** Selects Acc if you are GEOGRAPHICAL-PLACE, ABSTR-ROUTE or EDUCATION and somewhere in the sentence is a intransitive verb acting as a transitive verb *sii vázzet skuvlla*

* **IVsahttit** Selects Acc 

* **NewGen** (complement of numerals) Selects Gen Sg when Num Sg to the left *guhtta kilu*

* **NewGenCo** (coordinated complement of numerals) Selects Gen if Num Acc + NewGen found to the left of "já" *máŋga dáhpáhusa ja digaštallama*

* **ALU4** Selects Acc if you are Num and to your right Num Acc followed by MEASURE OR ALU/A *guokte golbma mehtara alu* 

* **NumTimeMannel** Selects Acc for Num before TIME MANNEL

* **GenBoaris** Selects Gen in golbma *jagi* boaris

- Ritva comment: Find a rule for "viđa" aswell, this hits "mehter" as it should

* **XXr2002** Selects genitive if there is a numeral immediately to your left, and you are TIME: *golbma jagi*

### Numerals 

* **NumMoney** Selects Gen if you are a numeral and immediately to your right is CURRENCY *vihtta ruvnnu*

* **NumAcc1** Selects Acc if you have a transitive verb to the left and you are a numeral followed by a noun  *oste guokte mielkki*

* **NumJahki** Removes Acc if you are a numeral and JAHKI-NUM is immediately to your left *mávssii mannan jagi 43 ruvnnu*

* **NomIfNum** Removes Acc if Gen to the right (because you are Nom). Transitive verb with an Acc to the right *máŋga gávpeolbmá lonuhedje fáhcaid*

* **NumAcc2** Selects Acc for singular numerals if there is a transitive verb somewhere in the sentence and the numeral is followed by a noun *logi báhkkoma* OBS

* **GenIfNum** (complement of numerals) Selects Gen Sg if there is a Num Sg to your left *guđa geardde* 

* **NumAccCo** (coordinated num) Selects Acc if you are Num Sg and to your right: CC with a Num to the right *guokte ja eanemusat golbma*

* **NumAccIV** Selects Acc 

* **NumAccPlRight** Selects Acc when transitive verb to the left. You are Num Pl and to your right is Acc *goarui viđaid gápmagiid*

* **NumAccPlLeft** Selects Acc when tranistive verb to the right (same as the previous. Only differs in which direction the verb is found). *galliid sabehiid don ostet*	

* **NumAccPlLeft** Selects Acc if you are N Acc Pl and to your left is Num Acc Pl *galliid sabegiid*		

* **NumOkta** Selects Acc if 0 okta followed by a noun. Transitive verb to the left *oidnen ovtta nieidda*

* **QUANgenCoord** Selects Gen for coordinated complement of a numeral

* **QUANgen1** Selects Gen if a numeral with Nom-case to the left and 3Pl-verb to the right

* **QUANr2142** Selects Gen if a numeral to the left and genitive to the right. Transitive verb not allowed to the left.

### Leftover accusatives

***COMPInfAcc** Selects Acc if you are Gen and to the left is an Inf TV @COMP-CS<

* **AccInf2** Selects Acc if Inf immediately to the RIGHT *guliid čoallut*

* **AccNomCOPconstr** Selects Acc in front of Inf; only if there is no chance for itself beeing Nom

* **AccTV4** Selects Acc if transitive mainverb to the left. Lots of restrictions to the right

* **AccPronRel** Selects (Pron Rel Acc) when a secure Acc or Nom to the left *gáibidedje internáhttaskuvlla man*

* **AccPronRel2** Selects (Pron Rel Acc) when somewhere in the sentence is a Nom (barrier is sv-boundary), but only if leat isn't the main verb. *geaid eamiálbmogat* 

* **AccPronRel3** Selects Acc if there is a (Pron Rel Nom) to the right. Obs: not hit nominatives, hence negations. *eanu mii šealgá*	

* **AccActioLoc** Selects Acc when transitive Actio Loc somewhere in the sentence *guldeleames muitalusaid*

* **AccAhte** Selects Acc when *ahte* is found to the right 

* **AccAux** Selects Acc if beginning of sentence to the right and aux, not leat,  is to the left. No Acc allowed to the left *láđđi fertejetne oastit*

* **HabGenAdvl** Removes Acc; in a habitive adverbial construction with Gen, but only if there is no chans of 0 beeing Nom *Dat lea áhči*

* **AccIll** Selects Acc if a strict transitive verb is found to the left and Ill to your right. You are not allowed to be a possible modifier of ill: Pron, Px. *buktán heasttaid meahccái*

* **Gerundium0** Selects Acc as the complement of Ger

* **Gerundium1** Removes Gen if no other object available for the preceding tv-verb

* **Gerundium2** Selects Acc in front of Ger, but not if it is not HAB-ACTOR/Pron Pers. No transitive verb allowed to the left, exept it it has an object of its own.

* **GerundiumTEST** Selects Acc 
* **GerundiumTEST** selects Gen for HAB-ACTOR and Pron Pers in front of Ger, but only if there is an Acc belonging to a transitive to the left

* **NomIfProp** Removes Acc and Gen when you Prop because you are Nom. To the left is a sg3-verb. Should not hit Prop that are Sem/Plc.

* **NomIfProp2** Removes Acc and Nom when you are Prop Sem/Plc because you are Gen. To the left is a sg3-verb. To the right is a noun.

* **NomSentFin** Selects Nom if you are Acc or Gen and EOS is to yoru right. Copulas is found to the left 

Accusative or Illative

## Nominative or accusative or genitive

* **NAr2266** Selects Nom

* **NAAccEllipsis2** Selects Acc

* **NAr2288** Removes Nom

## Nominative

* **NDr2300** Selects Nom if Gen immediately to the left. You are N-SG-NOM and to your right is SG3-V *Du ášši lea dehálaš*

* **NDr2306** Selects Nom for (N Nom) if to the left is "ohtâ" or "nubbe" *okta lihtter*

* **NDr2308** Selects Nom for PROP

### Vocatives, subjects of sentence fragments
* **NDr2309** Selects Nom

* **NDr2310** Selects Nom	

* **NDr2311** Selects Nom

* **NDr2313** Selects Nom

* **NDr2314** Selects Nom

* **NDr2315** Selects Nom

### Nominative in titles and sentence fragments

* **NDr2317** Selects Nom: A single word is nominative

* **NDr2318** Selects Nom: A single word with a numeral in front of it is nominative

* **NDr2319** Selects Nom: An NP head with a genitive modifier is nominative

* **NDr2320** Selects Nom: A title is nominative if it has a Nom reading at all

* **NDr2321** Selects Nom: An NP head with an Attr modifier is nominative

* **onlyProp** Selects Nom

### Nominative after "ko", "mahte", "dugo" and "nugo"

* **NDr2325** Selects Nom

* **NDr2326** Selects Nom

* **NumNomgo** Selects (Num Nom)

### Preverbal subjects

* **NDr2331** Selects (N Nom)

* **NDr2332** Selects (Num Nom)

* **NDr2333** Selects (Num Nom)	

* **NDr2334** Selects Nom

* **NDr2335** Selects Nom

* **NDr2336** selects (N Sg Nom) when 1 SG3-V

* **NDr2338** Selects (N Sg Nom)	

* **NDr2339** Selects (N Sg Nom)	

* **NDr2341** Selects Nom

* **NDr2341** Selects Nom

* **NDr2343** Selects (Sg Nom)

* **NDr2345** Selects Nom

* **NDr2350** Selects Nom

* **NDr2351** Selects Nom

* **NDr2357** Selects (A Pl Nom)

* **NDr2359** Selects (A Pl Nom)

### Postverbal subjects

* **NDr2360** Selects Nom

* **NDr2361** Selects Nom

* **NDr2364** Selects (Sg Nom)

* **NDr2368** Selects (N Pl Nom)

* **NDr2370** Selects (Num Nom)

* **NDr2372** Selects (Pron Pl Nom)

* **NDr2373** Selects Nom

* **NDr2375** Selects Nom

* **NDr2376** Selects Nom

* **PostVNom** Selects Nom if a singular third person verb to the left with no Nom to the left of it

* **PostVNomComp** Selects (N Sg Nom)

### Nominative predicatives

* **NDr2378** Selects (Sg Nom)

* **ND** selects Nom if; you are HUMAN and immediately to your right is a place. Leat is to the left, and there is HUMAN or Pers to the left of leat *Son lei oahpaheaddji Kárášjogas*

* **NDr2379** Selects (Sg Nom)

* **NDr2380** Selects (Pl Nom)

* **NDr2382** Selects (Pl Nom)

* **NDr2383** Selects Nom

* **NDr2384** Selects Nom

* **NDr2385** Selects Nom

### Nominative as objects in existential clauses

* **NDSgr2388** Selects Nom

* **NDPlr2388** Selects Nom

* **NDr2389** Selects Nom

* **NDr2390** Selects Nom

* **NDr2391** Selects Nom 

### Nominative in coordination and apposition

* **NDr2399** Selects Nom  

* **NDr2400** Selects Nom

* **NDr2401** Selects Nom

* **NDr2402** Selects Nom

* **NDr2403** Selects Nom

* **NDr3529** Selects Nom	

* **NDr2406** Selects Nom

* **NDr2407** Selects Nom

* **NDr2408** Selects Nom

* **NDr2409** Selects Nom

* **NDr2411** Selects Nom

* **NDr2412** Selects Nom

* **NDr2413** Selects Nom

* **NomCCNom** Selects Nom

* **NDr2416** Selects Nom

* **NDr2417** Selects Nom

* **NDr2418** Selects Nom

### Nominative in parallell constructions

* **NDr2422** Selects Nom

* **NDr2423** selects Nom if it finds a Nom to the left of CC and to the left of a verb. No verb allowed to the right *eamit barggai vuođđoskuvllas ja isit fas gymnásas*

* **nomHnoun** Selects Nom

* **SOV** Selects Nom in front of an Acc	

### Not nominative
* **NDr2424** Removes Nom

* **NDr2425** Removes Nom

* **NDr2426** Removes Nom, but not Actio 

* **ND** Removes Nom	

## Comitative rules

Assuming there is Sg Com / Pl Gen homonymy in Inari Saami. There is, but far more marginal than
for North Saami, the following rules should be revised to account for that.

### NP internal disambiguation of Com

* **PlSg-W** removes Pl when SG-WORD

* **LocPlur** removes Sg when PLURALIZER or OASSI OR HEADOFPARTS

* **NumCom** selects Num Com: guvttiin nieiddain if not plural-noun like: guvttiin heajain

* **ComDemNum1** selects N Com if there is a Dem or Num or buorre + Com to the left: Exception for plural-nouns  

* **Comburiin** selects N Com if there is a safe N Com to the right: buriin vugiin  

* **ComCOM-A** selects Sg Com after COM-A

* **ComComAdv1** selects Com after COM-ADV or juohke

### Disambiguation based upon verb valency

* **LocLocVL1, LocLocVR** select Pl Loc if there is a LOC-V

* **LLocAccLocVL** select Pl Loc if there is a ACC-LOC-V

* **Loc-v** select Sg Loc if LOC-V to the left in the clause. No mainverb to the right in the clause

### Disambiguation of Com depending on Adv or certain verb or N

* **ComComAdv1** selects Com for ACTOR OR ACTOR-ROLE after og before COM-ADV 

* **ComComplPl-N** selects Sg Com for HUMAN, ORGANIZATION, INSTITUTION, STATE, EVENT-TOOL-ACTIVITY, láhka when there is a COM-COMPL-N to the left or right

* **Comoktavuohta** selects Sg Com when oktavuohta is to the left or right

* **ComDU-NR** selects Sg Com after Pers dualis: moai áhčiin, munno vieljain

* **ComHumanOrg** selects HUMAN Sg Com after HUMAN, ORGANIZATION, INSTITUTION

### Animate nouns
* **ComAnimate** selecst Sg Com if there is an animate to the left, and the noun itself is not a ABSTR-TEXT,  TEXT,  PLACE,  INDUSTRY,  EDUCATION,  INSTITUTION,  ANIMATE

* **ComProp** selecst Prop Sg Com for person names. Exception for habitive constructions.

* **FinalComForAni** where philosophy is that you are with someone, not on someone

### HAB-ACTOR in habitive-constructions

* **LocHab1, LocHab2** select Pl when HAB-ACTOR

* **LocHab1, LocHab2** select Pl when HAB-ACTOR

### Disambiguation based upon verb valency 

### COM-V 
* **ComVR, ComVL** select Com when COM-V

### tools (concrete and abstract)

* **ComTool1, ComTool2, ComToolCoord** select Com TOOL when ACTIVITY-V, MOVEMENT-V, PLACE-V-V 

* **ComHumanVerbalV** selects Com HUMAN when VERBAL-ACTIVITY-V or báhcit

### Dynamic-verbs

* **LocdynamicVR, LocdynamicVL** select Pl Loc if there is a DYNAMIC-V and the noun itself is not a TOOL, ABSTR-TOOL, WRITING-TOOL, CONCEPT, HUMAN, VEHICLE, buorre, Der/NomAc

* **LocdynamicVR** selects Pl Loc

* **LocdynamicVL** selects Pl Loc

### Event-tool-actio
Most actio can be both tool and event. 

### PLACE-V

* **ComPlaceV** select Com ANIMATE, CONCEPT, TOOL, ABSTR-TOOL, EVENT-TOOL-ACTIVITY if there is a PLACE-V

### Movement-verbs

* **ComboahtitR** selects Sg Com 

* **ComboahtitV–** selects Sg Com for animate eller pron

* **ComMovemVL**  selects Sg Com over Pl Loc for a movement verb 

* **ComMovemVR** selects Sg Com over Pl Loc for a movement verb

* **ComDynV** Dynamic-verbs selects Com when TOOL, ABSTR-TOOL, WRITING-TOOL, CONCEPT, EVENT-TOOL-ACTIVITY

* Dynamic-verb selects Com when HUMAN, but not for HUMAN-SOURCE-VEHICLE-V 

* **ComBody** Body-activity-verb Selects Com when BODY, for BODY-ACTIVITY-V or VERBAL-ACTIVITY-V

* **LocCop** selects Pl Loc if event

* Coordination

### Locative and comitative - Disambiguation based upon coordination

### And then we remove the remaining Sg Com analysis

Final Com/Loc rule: Remove Com.

* **KillComSg** This is the final Com/Loc rule, and it chooses Pl Loc. Remove this for grammar checker.

* **miiPlAcc** selects acc noun if mii or kii to the left

* **AccTV1NoC** was Eckhard's late version of AccTV1 without C. We will look at this.

* **AccEOS** is The Dangerous Rule: it is the last rule before removing all leftover Acc. It only selects Acc if Nom is not an option, dont change this btw, and the end of the sentence is the next one to the right

* **genRel** removes genitive if Rel to your right *ožžot olbmot skoviid maid*

* **genAcc** selects Acc 

* **genNom** removes Acc

* **DemAcc** selects Den Acc after the last acc-disambiguation of nouns

* **KillAcc** Removes Acc if you are Gen 

## Essive  

## Finite or not

### Finite

* **r2906** Sg2 if Sg2

### Not Finite

* **r2824** 

### Infinitive

## Indicative or imperative

## Verbs according to person and number

### Sg1 - First person singular

### Du1 - First person dual 

* **Du1IfDu1** selects Du1 with a left context Du1 ... ja ... 

* **NoDu1** removes Du1 if no MOAI or Du1 around.

### Pl3

* Pl3 not Pl Gen

* **Pl3IfPlSubj** Pl3 if Pl noun to the left

* **Pl3IfPlSubj** Pl3 if safe plural (incl pron) to the left

* **Sg2LeftDon** selects Sg2 in Rel phrase if don to the left of it

* **allPrtSg2** removes PrtSg2 if PrsPl3

## Passive
## Infinitive
## Present Participle
## Actio/Perfect Participle 

# NOMEN

## Case rules

## Other rules for nouns and pronouns

## Determiners
## Adverbs and adjectives

## Adverbs not nouns

# NOUNS

## Adverb or Participle

Genitive not Nominative

* **GenModifiesN** is a tentative rule to be modified

## Variant lemmas

* Remove lemma2 if lemma 1

* **cleanSemClass** cleans up if a word has more semclasses. This is just a start.

### And then we remove the verbs which didn't get any syntactic tag, in favour of verbs with syntactic tags.

* **realverbX**

* **IfonlyVerb** selects the FMAINV reading in the cohort

* **IfonlyConNeg** ConNeg if it is @-FMAINV or @-FAUXV

### **killifVinCohort** This rule removes all other readings, if there is a mapped V reading in the same cohort. Every case which this goes wrong, should be fixed in mapping rules or previous disrules.

* **TEST** selects some infinte verb readings in the cohort

* **X**

# Removing Err/Orth

Denne regelen fjerner Err/Orth når det er samme lemma, sjøl om morfologien er forskjellig.

* **errsub** removes err/orth forms

Test: Go for minimal weight.

# Substitute rules

These 12 substitute rules add the <smn> language code to all words, to govern 
their behaviour in the subsequent cg files. The rules are removed when this
file is ported to Apertium.

* * *

<small>This (part of) documentation was generated from [src/cg3/disambiguator.cg3](https://github.com/giellalt/lang-smn/blob/main/src/cg3/disambiguator.cg3)</small>
