
# Inflection lexica for Inari Saami verbs

This file contains the morphology for the Inari Saami verbs. 

The morphophonological processes are governed by triggers. When there are more
triggers, tney must be ordered as follows (where {A,B} C means *A or B, thereafter C*):

{SV,ÁE,ÁI}  {EA,SC}  FCD {WG,CSH} CLEN  {VHIGH,VBACK}  {RVSH,RLEN} EA {SLEN,SVSH}  SVLOW

## Overview of the file

1. Auxiliaries
1. NEG
1. LEDE
1. 2-syllabic: 2SYLL_ etc. (classified according to infinitive suffix)
1. 3-syllabic
1. 4-syllabic
1. Unclassified: verbstems, 3v, 4v

*A note on morphophonology:*
The consonant gradation setup for verbs is to a certain extent different
from the one for nouns. For the nouns, the stem vowel is part of the stem, 
whereas for the verbs, the stem vowel is added here in the affixes file.

## Auxiliaries

**LEXICON NEG**  = lists all forms of the negation verb

**LEXICON LEDE**  = lists all forms of the copula

## The regular verbs
### Order of lexica
We present lexica for even, odd and contracted stems. Finally come lexica for flag diacritica.

Transitivity: Lexica marked \_IV and \_TV get **+IV** and **+TV** tags before 
being redirected to common inflection.

Within each lexicon, the suffixes are ordered as follows:
1. Infinites
1. Indicative
1. Conditional
1. Potential
1. Derivations

## Even-syllable stems

### AD verbs (verbs ending in *-âđ*)

#### LEXICON 2SYLL\_HAAHAD

#### LEXICON 2SYLL\_AASSAD ( 48 verbs)
* 2SYLL_AASSAD - aassâđ ääss
- Inf:â%>đ K ;
- Ind+Prs+Sg3:á^CSH^VHIGH áásá,
- Ind+Prs+Pl3:i^CSH%>h ääsih, rvow like Inf,
- ConNeg:â^WG rvow like Inf,
- Ind+Prt+Sg1:i^VBACK%>m aassim

### Full paradigms

#### LEXICON 2SYLL\_VIEZZAD

#### LEXICON 2SYLL\_SPELLAD 
Similar to 2SYLL\_ETTAD, but less CSH, don't know yet how much. 20 verbs

#### LEXICON 2SYLL\_VIHKAD 

#### LEXICON 2SYLL\_ETTAD 
* 2SYLL_ETTAD ettâđ e^RVtt4
- Inf:â^VHIGH%>đ
- Ind+Prs+Sg3:á^CSH^VHIGH  iätá
- Ind+Prs+Pl3:e^CSH%>h
- ConNeg:â^WG^VHIGH^RLEN
- Ind+Prt+Sg1:i%>m

#### LEXICON 2SYLL\_KAVNAD 
* 2SYLL_KAVNAD  as ETTAD as ETTAD but with VBACK kavnâđ kä^RVvn, only RV ä in stem tothis lexicon 57 verbs
- Inf:
- Ind+Prs+Sg3: kávná
- Ind+Prs+Pl3: kävnih
- ConNeg: kaavnâ
- Ind+Prt+Sg1: kavnim

#### LEXICON 2SYLL\_KALGAD (only TV)
* 2SYLL_KALGAD kalgâđ
- Inf:
- Ind+Prs+Sg3:  kálgá
- Ind+Prs+Pl3: kälgih
- ConNeg: kaalgâ
- Ind+Prt+Sg1: kalgim

#### LEXICON 2SYLL\_KOLGAD 

#### LEXICON 2SYLL\_COGGAD 
* 2SYLL_COGGAD kolgâđ ka^RVlg
- Inf:
- Ind+Prs+Sg3: kalga
- Ind+Prs+Pl3: kalgeh
- ConNeg: koolgâ
- Ind+Prt+Sg1: kolgim

#### LEXICON 2SYLL\_KULGAD 
* 2SYLL_KULGAD kulgâđ ko^RVlg
- Inf:
- Ind+Prs+Sg3: kolgá
- Ind+Prs+Pl3: kolgeh
- ConNeg: kuulgâ
- Ind+Prt+Sg1: kulgim

Distinct from SODDAD with short vowel in past tense (du)
Turns out it was not distinct after all. Preper for fusing KULGAD and SODDAD

- LEXICON LEDE = back to KULGAD

** **LEXICON EVEN_PRT_KULGAD**

#### LEXICON 2SYLL\_SODDAD 
* 2SYLL_SODDAD šoddâđ ša^RVdd
- Inf:
- Ind+Prs+Sg3: šadda
- Ind+Prs+Pl3: šaddeh
- ConNeg: šoodâ
- Ind+Prt+Sg1: šoddim

#### LEXICON 2SYLL\_TOOLLAD (12 verbs)
* 2SYLL_TOOLLAD - toollâđ,  tuáll
- Inf:â^VBACK%>đ
- Ind+Prs+Sg3: tuálá, á^CSH
- Ind+Prs+Pl3:i^CSH%>h tuálih, rvow like Sg3
- ConNeg:â^WG^VHIGH^RLEN rvow like Sg3
- Prt+Sg1:i^VBACK^RLEN%>m toollim

#### LEXICON 2SYLL\_OPPAD 
* 2SYLL_OPPAD oppâđ uápp
- Inf:
- Ind+Prs+Sg3: uáppá
- Ind+Prs+Pl3: uáppih
- ConNeg: oopâ
- Ind+Prt+Sg1: oppim
- Der/InchL: opâškyettiđ

suggested stem = tuáll
Impossible to see the differences in diphtong length

#### LEXICON 2SYLL\_TOOHAD 38 verbs
* 2SYLL_TOOHAD - toohâđ, ta^RVh^RC
- Inf: = 2SYLL_MOONNAD
- Ind+Prs+Sg3:á^CSH taha,
- Ind+Prs+Pl3:e^CSH%>h taheh, rvow like Sg3
- Ind+Prt+Sg3:â^WG^VHIGH^RLEN%>i  juuvâi
- ConNeg: rvow like Inf = 2SYLL_MOONNAD
- Ind+Prt+Sg1: toohim = 2SYLL_MOONNAD

#### LEXICON 2SYLL\_MMOONNAD 24 verbs
* 2SYLL_MOONNAD - moonnâđ ma^RVnn
- Inf:â^VHIGH^RLEN%>đ (functions also for ääss)
- Ind+Prs+Sg3:á^CSH mana,
- Ind+Prs+Pl3:e^CSH%>h maneh, rvow like Sg3
- ConNeg:â^WG^VHIGH^RLEN rvow like Inf
- Ind+Prt+Sg1:i^VHIGH^RLEN%>m moonnim

nuuvâ, iige noovâ

#### LEXICON 2SYLL\_VIIRRAD 

#### LEXICON 2SYLL\_VIISSAD 
* 2SYLL_VIISSAD - viiššâđ, vi^RVšš
- Inf:â^VHIGH^RLEN%>đ
- Ind+Prs+Sg3:á^CSH višá,
- Ind+Prs+Pl3:e^CSH^RVSH%>h, rvow like Sg3 višeh
- ConNeg:â^WG^RLEN viišâ, rvow like Inf
- Ind+Prt+Sg1:i^RLEN%>m viiššim

#### LEXICON 2SYLL\_CIEPPAD  like 2SYLL_KIESSAD but less CSH 4 verbs. 34 verbs

#### LEXICON 2SYLL\_KIESSAD
* 2SYLL_KIESSAD - kiessâđ, kiess
- Inf:â%>đ
- Ind+Prs+Sg3:á^CSH^VHIGH kiäsá,
- Ind+Prs+Pl3:i^CSH%>h kiesih
- ConNeg:â^WG rvow like Inf kiesâ
- Ind+Prt+Sg1:i%>m  kiessim

#### LEXICON 2SYLL\_VUOLLAD  ye to ua vyešš 71 verbs
* 2SYLL_VUOLLAD - vuollâđ, vuoll OBS: not Prs+Pl3 vowel like the others
- Inf:â%>đ
- Ind+Prs+Sg3:á^CSH^VHIGH vuálá,
- Ind+Prs+Pl3:i^CSH%>h  vyelih
- ConNeg:â^WG rvow like Inf vuolâ
- Ind+Prt+Sg1:i%>m vuollim

#### LEXICON 2SYLL\_LUOIKKAD RUOTTAD\_LUOIKKAD, passive, no Der/l, otherw like ruottad, 3 verbs

#### LEXICON 2SYLL\_RUOTTAD

#### LEXICON 2SYLL\_LUOIKKAD, no passive

### ED verbs

#### LEXICON 2SYLL\_KALVED kalveđ without RLEN Prs+Sg1. 8 verbs
* 2SYLL_KALVED kalveđ ka^RVlv
- kalvam
- kalva
- kalveh
- kalve

#### LEXICON 2SYLL\_POHTED  with RLEN Prs+Sg1. 31 verbs
* 2SYLL_POHTED pohteđ:po5^RVht
- poovtám RLEN
- pohtá
- pohteh
- povte

#### LEXICON 2SYLL\_PIHTED 82 verbs
* 2SYLL_PIHTED pihteđ pi^RVht
- pivtám
- pihtá
- pihteh
- pivte

### EED verbs

### ID verbs

#### 2SYLL\_UADDID
* 2SYLL_UADDID
- Ind+Prs+Sg1: čálám
- Ind+Prs+Sg3: čáálá
- Ind+Prs+Pl3: čäälih NB! čäällih?

as 2SYLL_ID, but only 3 person

#### 2SYLL\_ID celkkiđ

#### 2SYLL\_EELLID
* 2SYLL_EELLID: iälám iälá eelih ij ele

** **LEXICON VINFINITES_EELLID !**

* 2SYLL_PAACCID pääcciđ
- Ind+Prs+Sg1: páásám
- Ind+Prs+Sg3: páácá
- Ind+Prs+Pl3: pääcih NB! pääccih?

#### 2SYLL_VYELGID like VYEIJID, but -i for reduced forms. 7 verbs

### OD verbs

### OOD verbs
* 2SYLL_OOD
- Prt+Du1 njivvoim WG CLEN

#### 2SYLL\_ORROOD
* 2SYLL_ORROOD  like 2SYLL_OOD, but different triggers here and there
- Prt+Du1 oroim WG

### UD verbs

#### 2SYLL\_KUARRUD
* 2SYLL_KUARRUD  long dipht => -o
- Inf: kuárruđ
- Ind+Prs+Sg3: kuáru
- Ind+Prs+Pl3: kuáruh
- ConNeg: kuáru, kuáro
- Ind+Prt+Sg1: koorrum

#### 2SYLL\_UD
* 2SYLL_UD
- Inf: ruábbuđ
- Ind+Prs+Sg3: ruábbu
- Ind+Prs+Pl3: ruábbuh
- ConNeg: ruábu
- Ind+Prt+Sg1: ruábbum

#### 2SYLL\_UAZZUID
* 2SYLL_UAZZUD
- Inf: uážžuđ
- Ind+Prs+Sg3: uážžu
- Ind+Prs+Pl3: uážžuh
- ConNeg: uážu
- Ind+Prt+Sg1: ožžum

###  Common even lexica

## Odd-syllable stems

* 3_KUIKETTID = 3_LEKKASID. TODO: Unify (?)

* 3_LEKKASID (no stem change, but going to ODDLEX)
- Sg1: %>âm, Sg3: ^CLEN^RLEN (note: ODDLEX :-(

* 3_CIELATTID (stem-final tt shortening) cielâttiđ: cielât Length change in stem: Consonant change only
- Sg1: %>âm, Sg3: ^CLEN^RLEN

* 3_VYEJETTID (2syll vow short in Inf, long in Sg3, 1st syll V lengthening) vyejettiđ vyejeet
- Sg1: %>âm, Sg3: ^RLEN^SLEN

* 3_ADELID
- Sg1: %>âm, Sg3: ^CLEN

* 3_MERIDID
- Sg1: %>âm, Sg3: ^CLEN^RLEN

* 3_PUTESTID (cns and vow lengthening) putestiđ: putteest Length change in stem: Short V in Inf (before V)
- Sg1: %>âm, Sg3: ^CLEN^SLEN

* 3_COKKIITTID (stem-final tt shortening + 2syll vow shortening cokkiittiđ cokkit.
- Sg1: %>âm, Sg3: ^SVSH
- difference in negation + Action Ess, Loc.. compared to 3_COKKIITTID)
- Length change in stem: Long V in Inf (before C#).

### Common lexicons inflecting odd-syllabic verbs

### Derivational extentions to 3-syllabic verbs

### 4-syllabic

* 4v
* 4_ADELISTID
* 4_KAVNATTATTAD
* 4_TUHHID

## Contracted stems

###  j stems
* Contracted j-stems
- C_COKKAD (áj-contracted)
- Ind Prs Pl3 čokkájeh
- C_PALLAD (aj-contracted)
- C_TUHHID (ej-contracted)
- C_RAMMUD (oj-contracted)

###  v stems

* Contracted v-stems
- C_TABAHTUD (Sg3 -uvá)
- C_MERIDUD (Sg3 uvvoo)

* **LEXICON C_TABAHTUD** Sg3 -uvá

* **LEXICON C_MERIDUD** Sg3 -uvvoo

## 4-syllabic

**LEXICON 4SYLL_KYETTID** 

**LEXICON 4_ADELISTID** 

**LEXICON 4_ITTID** 

**LEXICON 4_UHCAD** 

# Other lexica
Here come the case variation for VAbess, and flag for VGen, they are invariant above and thus collected here.

## Case lexica

* **LEXICON VABESS** to handle Abessive variation, hánnáá, hennáá, hinnáá.
* **LEXICON VGEN**  flag for VGen

## Derivation lexica
These point to different nominal paradigms.

* **LEXICON DER_MAS** 
* **LEXICON IJJE** 
* **LEXICON IJJE_PRSPRC** 
* **LEXICON NOMACT**  for -náál suffixation.

## Flag section

The lexica in this section add the *@C.NeedNoun@* flag, thereby allowing them to 
become the second part of N + (V > N) compounds.

**LEXICON FLAG_3HUKSIM** should not be disallowed by ENDLEX @D.NeedNoun.ON@

**LEXICON FLAG_3KIEDAVUSSAM** should not be disallowed by ENDLEX @D.NeedNoun.ON@

**LEXICON FLAG_CTAHHEE** should not be disallowed by ENDLEX @D.NeedNoun.ON@

**LEXICON FLAG_K** should not be disallowed by ENDLEX @D.NeedNoun.ON@

* * *

<small>This (part of) documentation was generated from [src/fst/morphology/affixes/verbs.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/verbs.lexc)</small>

---

