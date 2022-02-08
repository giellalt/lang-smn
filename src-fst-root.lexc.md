
# Inari Sámi morphological analyser

This file documents the Inari Sámi morphological analyser. The tags in bold are the ones in use in the analyser.

 **Multichar_Symbols** definitions

## Parts of speech
* **+N +A +Adv +V**
* **+Pron +CS +CC**
* **+Adp +Po +Pr**
* **+Interj +Pcle**
* **+Num** 
* **+ABBR** 
* **+Symbol** = independent symbols in the text stream, like £, €, ©

### Tags for sub-POS

* **+Prop** - Propernoun
* **+Pers** - Personal Pronoun
* **+Dem** - Demonstrative Pronoun
* **+Interr** - Interrogative Pronoun
* **+Refl** - Reflexive Pronoun
* **+Recipr** - Reciprocal Pronoun
* **+Rel** - Relative Pronoun
* **+Indef** - Indefinitive Pronoun
* **+Coll** - Collective numerals, subtag for +N
* **+Arab** - Arabic numeral, subtag for +Num
* **+Rom** - Roman numeral, subtag for +Num
* **+ACR** - Acronym
* **+Dyn** - Dynamic Acronym
* **+NomAg** 
* **+Ord** 

### Tags for governing abbreviations in preprocessing

* **+Gram/TAbbr**:  Transitive abbreviation (it needs an argument)
* **+Gram/NoAbbr**:  Intransitive abbreviations that are homonymous   with more frequent words. They should only be considered  abbreviations in the middle of a sentence.
* **+Gram/TNumAbbr**:  Transitive abbreviation if the following     constituent is numeric
* **+Gram/NumNoAbbr**:  Transitive abbreviations for which numerals are complements and normal words. The abbreviation usage  the sentence can be considered as true cases.
* **+Gram/TIAbbr**:  Both transitive and intransitive abbreviation
* **+Gram/IAbbr**:  Intransitive abbreviation (it takes no argument)
* **+Gram/3syll**: trisyllabic verbs

## Grammatical properties

* **+IV +TV** 

### Number
* **+Sg +Pl +Du** 

#### Person - number
* **+Sg1 +Sg2 +Sg3** 
* **+Du1 +Du2 +Du3** 
* **+Pl1 +Pl2 +Pl3** 

#### Px
* **+PxSg1 +PxSg2 +PxSg3** 
* **+PxDu1 +PxDu2 +PxDu3** 
* **+PxPl1 +PxPl2 +PxPl3** 

#### Cases
* **+Nom +Gen +Acc** 
* **+Ill +Ine +Ela** 
* **+Com +Ess +Par +Abe** 
* **+Loc** 
* **+Known** mon , till we found a better tag

### Adjectival forms
* **+Comp +Superl** 
* **+Attr** 

### Adverb types 

* **+Spat**    Spatial adverbs
* **+Temp** Temporal adverbs

### Tense - mood
* **+Ind +Pot +Cond +Imprt +ImprtII** 
* **+Prs +Prt** 

### Indefinite verb forms
* **+Pass +Sup** 
* **+Inf +Ger +GerII** 
* **+ConNeg +Neg** 
* **+PrsPrc +PrfPrc** 
* **+VGen +VAbess** 
* **+Actio** 

## Derivation tags

The derivation position tags.

### The tag +Der
All non-positional derivations should be preceded by this tag, to make it possible
to target regular expressions at all derivations in a language-independent way:
just specify +Der|+Der1 .. +Der5 and you are set.

* **+Der** is the tag to put before the other der tags.

### Table for derivation tags

| Pos1 | Pos2     | Pos3  | Pos4  | POS switches (from-to)| Explanation
| ---  | ---      | ---   | ---   | ---                   | ---
| **+Der1** |            |            |      |    | Position tag, required
|            | **+Der2** |            |      |    | Position tag, required
|            |            | **+Der3** |      |    | Position tag, required
|            |            |            | **+Der4** |    | Position tag, required
| **+Der/lasj** |            |            |      | NA | 
| **+Der/d** |            |            |      | VV | 
| **+Der/tt** |            |            |      | VV | - Causative čälittiđ
| **+Der/Caus** |            |            |      | VV | - 3-syll causatives
| **+Der/l** |            |            |      | VV | 
| **+Der/st** |            |            |      | VV | čälistiđ
| **+Der/Car** |            |            |      | NA | * +Der1+Der2 - only combine with Der3 caritive: peljittem
| **+Der/laakan** |            |            |      | AA | * +Der1+Der2 - only combine with Der3
| **+Der/Pass** |            |            |      | VV | -  passive
|            | **+Der/Dimin** |            |      | NN | (was: Der/aš & Der/š)
|            | **+Der/NomAg** |            |      |    | 
|            | **+Der/NomAct** |            |      | VN | Der/NomAct har to realisasjonar, med ulike restriksjonar,
|            | **+Der/sasj** |            |      | NA |           
|            | **+Der/alla** |            |      | VV | 
|            | **+Der/adda** |            |      | VV | 
|            | **+Der/AAdv** |            |      |    | adverb pyeremusávt pyeremusâht
|            | **+Der/taa** |            |      |    | adverb pyeremustáá !This is not the best tag?
|            |            | **+Der/vuota** |      | AN | 
|            |            |            | **+Der/InchL** | VV | 
|            |            |            | **+Der/upmi** | VN | 
|            |            |            | **+Der/mas** | VN | 

### Other derivations

Other/unclassified derivations, can appear in all positions:

* **+Der/ag** neeljičievâg neeljijienâg kuulmâloonjâg neeljičievâg neeljijienâg
* **+Der/ahasas** 85-ahasâš škovlâahasâš
* **+Der/ivvaas** 
* **+Der/vualasas** tutkâmvuálásâš
* **+Der/Superl** 
* **+Der/Comp** 
* **+Ex/N** - This tag is not added in lexc. The POS tag before derivation is converted into this tag when compiling FST for disambiguation.
* **+Ex/A** - This tag is not added in lexc. The POS tag before derivation is converted into this tag when compiling FST for disambiguation.
* **+Ex/V** - This tag is not added in lexc. The POS tag before derivation is converted into this tag when compiling FST for disambiguation.

### Clitics

* **+Qst** question particle
* **+Foc** 
 **+Foc/ba** 
 **+Foc/baa** 
 **+Foc/baan** 
 **+Foc/ban** 
 **+Foc/gan** 
 **+Foc/gas** 
 **+Foc/ge** 
 **+Foc/ges** 
 **+Foc/gin** 
 **+Foc/gis** 
 **+Foc/go** 
 **+Foc/han** 
 **+Foc/kas** 
 **+Foc/kin** 
 **+Foc/kis** 
 **+Foc/nii** 
 **+Foc/pa** 
 **+Foc/sun** 
**+Foc/uv** ... focus particles.

### Usage tags

* **+Err/Orth** - substandard, not in normative fst
* **+Err/Lex** - substandard, not in normative fst, no normative lemma
* **+Err/Hyph** - substandard, not in normative fst
* **+Err/SpaceCmp** - substandard, not in normative fst
* **+Err/MissingSpace** - in use in smi lexc
* **+MWE** - MultiWord Expression, used for abbreviation extraction for preprocess.sh
* **+Use/-PLX** - do not include in Polderland spellers (most likely irrelevant for smn)
* **+Use/-Spell** - do not include in speller (even though the entry is formally correct)
* **+Use/SpellNoSugg** - Recognized, but not suggested in speller 
* **+Use/GC** - only retained in the HFST Grammar Checker disambiguation analyser
* **+Use/-GC** - never retained in the HFST Grammar Checker disambiguation analyser

## Semantic tags

* **+Sem/Act** 
* **+Sem/Act_Fruit** 
* **+Sem/Act_Plc** 
* **+Sem/Act_Route** 
* **+Sem/Act_Tool-it** 
* **+Sem/Amount** 
* **+Sem/Amount_Semcon** 
* **+Sem/Ani** 
* **+Sem/Ani-bird** Bird names
* **+Sem/Ani-fish** Fish names
* **+Sem/Ani-insect** Insect names
* **+Sem/Ani_Body-abstr_Hum** 
* **+Sem/Ani_Buildpart** 
* **+Sem/Ani_Group** 
* **+Sem/Ani_Group_Hum** 
* **+Sem/Ani_Group_Prod-vis** 
* **+Sem/Ani_Hum** 
* **+Sem/Ani_Veh** 
* **+Sem/Aniprod** 
* **+Sem/Aniprod_Hum** 
* **+Sem/Aniprod_Obj-clo** 
* **+Sem/Aniprod_Perc-phys** 
* **+Sem/Aniprod_Plc_Route** 
* **+Sem/Atr** 
* **+Sem/Body** denotes bodyparts
* **+Sem/Body-abstr** 
* **+Sem/Body-abstr_Feat-psych** 
* **+Sem/Body-abstr_Prod-audio_Semcon** 
* **+Sem/Body_Food** 
* **+Sem/Body_Hum** 
* **+Sem/Body_Mat** 
* **+Sem/Body_Measr** 
* **+Sem/Body_Plc** 
* **+Sem/Body_Plc-elevate** 
* **+Sem/Build** 
* **+Sem/Build-room** 
* **+Sem/Build_Edu_Org** 
* **+Sem/Build_Org** 
* **+Sem/Buildpart** 
* **+Sem/Buildpart_Cat_Ctain_Mat** 
* **+Sem/Buildpart_Ctain_Obj** 
* **+Sem/Cat** 
* **+Sem/Clth** clothes
* **+Sem/Clth-jewl** 
* **+Sem/Clth-jewl_Curr** 
* **+Sem/Clthpart** 
* **+Sem/Ctain** 
* **+Sem/Ctain-abstr** 
* **+Sem/Ctain-clth** 
* **+Sem/Ctain-clth_Veh** 
* **+Sem/Ctain_Furn** 
* **+Sem/Ctain_Tool** 
* **+Sem/Curr** 
* **+Sem/Dance** 
* **+Sem/Date** 
* **+Sem/Dir** 
* **+Sem/Domain** 
* **+Sem/Domain_Hum** 
* **+Sem/Domain_Prod-audio** 
* **+Sem/Drink** 
* **+Sem/Drink_Plant** 
* **+Sem/Dummytag** 
* **+Sem/Edu** 
* **+Sem/Edu_Event** 
* **+Sem/Edu_Geom** 
* **+Sem/Edu_Hum** 
* **+Sem/Edu_Mat** 
* **+Sem/Edu_Org** 
* **+Sem/Event** 
* **+Sem/Event_Food** 
* **+Sem/Event_Plc** 
* **+Sem/Event_Time** 
* **+Sem/Feat** 
* **+Sem/Feat-measr** 
* **+Sem/Feat-measr_Plc** 
* **+Sem/Feat-phys** 
* **+Sem/Feat-phys_Tool-write** 
* **+Sem/Feat-phys_Veh** 
* **+Sem/Feat-phys_Wthr** 
* **+Sem/Feat-psych** 
* **+Sem/Feat-psych_Plc** 
* **+Sem/Feat_Plant** 
* **+Sem/Fem** 
* **+Sem/Food** 
* **+Sem/Food-med** 
* **+Sem/Food_Plant** 
* **+Sem/Fruit** 
* **+Sem/Fruit_Hum** 
* **+Sem/Furn** 
* **+Sem/Game_Obj-play** 
* **+Sem/Geom** 
* **+Sem/Geom_Obj** 
* **+Sem/Group_Hum** 
* **+Sem/Group_Hum_Org** 
* **+Sem/Group_Hum_Plc** 
* **+Sem/Group_Txt** 
* **+Sem/Hum** 
* **+Sem/Hum_Lang** 
* **+Sem/Hum_Lang_Plc** 
* **+Sem/Hum_Mat_Tool** 
* **+Sem/Hum_Obj** 
* **+Sem/Hum_Org** 
* **+Sem/Hum_Plc** 
* **+Sem/Hum_Veh** 
* **+Sem/ID** 
* **+Sem/Ideol** 
* **+Sem/Lang**  Languages
* **+Sem/Lang_Tool** 
* **+Sem/Mal** 
* **+Sem/Mat** 
* **+Sem/Mat_Plant** 
* **+Sem/Mat_Txt** 
* **+Sem/Measr** 
* **+Sem/Measr_Sign** 
* **+Sem/Measr_Time** 
* **+Sem/Money** 
* **+Sem/Money_Obj** 
* **+Sem/Money_Txt** 
* **+Sem/Obj** 
* **+Sem/Obj-clo** 
* **+Sem/Obj-el**           
* **+Sem/Obj-ling** 
* **+Sem/Obj-play** 
* **+Sem/Obj-rope** 
* **+Sem/Obj-surfc** 
* **+Sem/Obj_Semcon** 
* **+Sem/Obj_State** 
* **+Sem/Obj_Veh** 
* **+Sem/Org** 
* **+Sem/Org_Prod-audio** 
* **+Sem/Org_Prod-cogn** 
* **+Sem/Org_Prod-vis** 
* **+Sem/Org_Rule** 
* **+Sem/Org_Txt** 
* **+Sem/Part** 
* **+Sem/Perc-cogn** 
* **+Sem/Perc-emo** 
* **+Sem/Perc-phys** 
* **+Sem/Plant**   Plant names
* **+Sem/Plant-fungus**    Fungi names
* **+Sem/Plant_Plantpart** 
* **+Sem/Plantpart** 
* **+Sem/Plc** denotes places
* **+Sem/Plc-abstr** 
* **+Sem/Plc-abstr_Rel_State** 
* **+Sem/Plc-abstr_Route** 
* **+Sem/Plc-elevate** 
* **+Sem/Plc-line** 
* **+Sem/Plc-water** 
* **+Sem/Plc_Route** 
* **+Sem/Plc_Substnc** 
* **+Sem/Plc_Substnc_Wthr** 
* **+Sem/Plc_Time** 
* **+Sem/Plc_Tool-catch** 
* **+Sem/Plc_Txt** 
* **+Sem/Plc_Wthr** 
* **+Sem/Pos** 
* **+Sem/Process** 
* **+Sem/Prod** 
* **+Sem/Prod-audio** 
* **+Sem/Prod-audio_Txt** 
* **+Sem/Prod-cogn** 
* **+Sem/Prod-cogn_Txt** 
* **+Sem/Prod-ling** 
* **+Sem/Prod-vis** 
* **+Sem/Rel** 
* **+Sem/Route** 
* **+Sem/Rule** 
* **+Sem/Semcon** 
* **+Sem/Semcon_Txt** 
* **+Sem/Sign** 
* **+Sem/State** 
* **+Sem/State-sick** 
* **+Sem/Substnc** 
* **+Sem/Substnc_Wthr** 
* **+Sem/Sur** 
* **+Sem/Time** 
* **+Sem/Time-clock** 
* **+Sem/Time_Wthr** 
* **+Sem/Tool** 
* **+Sem/Tool-catch** 
* **+Sem/Tool-clean** 
* **+Sem/Tool-it** 
* **+Sem/Tool-measr** 
* **+Sem/Tool-music** 
* **+Sem/Tool-write** 
* **+Sem/Txt** 
* **+Sem/Veh** 
* **+Sem/Wpn** 
* **+Sem/Wthr** weather
* **+Sem/Year** 

## Punctuation

* **+CLB +PUNCT +HYPH** 
* **+PAR +LEFT +RIGHT** 
* **+URL** 
* **+CLBfinal**  Sentence final abbreviated expression ending in full stop, the full stop is ambiguous

## Morphophonemes

* **k4 l4 t4 p4 c4 t4 č4** = these are consonants that change in cg
* **b6 d6 g6** = these are consonants that change in clitics: jiemge, epke
* **i2 i3 u2 â2** = stemvowel changing to e, e.g. kyeli:kyeˊle 
* **i3** =  stemvowel changing to e, e.g. kyeli:kyeˊle (why i3)
* **i4** = this is the postvocalic i consonant, realised as i
* **i5** = comitative suffix-begin in loanwords
* **i6 j6** = these are fake vowel and consonant, to get rules to function for exeptions
* **a5 ä5 á5 e5 u5 o5 y5** = these vowels do not change, e.g. pyerá
* **h5 j5 m5 ŋ5 t5 c5 d5** = these consonants do not change in WG
* **l5 t5 r5 č5 k5 z5** = these consonants do not change in WG
* **∑** used for dynamic compounds, Capital Greek Sigma, Alt-Shift-S

### Archiphonemes

* **^RC** = Root consonant dummy
* **^RV** = Root vowel dummy
* **^SC** = Suffix consonant dummy
* **^SV** = Suffix vowel dummy
* **^VO** = vowel copy

### Triggers

* **^CLEN**  Consonant lengthening in qual WG
* **^CSH**  Consonant shortening (not WG)
* **^FCD**  Final consonant deletion
* **^FVD**  Final vowel deletion
* **^EA** is á and root vowel change in Ill Sg of i-stems
* **^EX** = Stem vowel: i to â where it should have been á, this is Err/Orth only      
* **^RLEN**  Root vowel lengthening (impl. WG)
* **^RVSH**  Root vow shortening
* **^SLEN**  Suffix vowel lengthening 
* **^SVLOW**  Suffix vowel lowering â > á and u > o
* **^SVSH**  Second syllable vowel shortening
* **^VLOW** is Vowel lowering in 3rd sg of contract verbs tuhhid:tohhe
* **^WG**  Weak grade trigger
* **^ÁE** á->e
* **^ÁI** á->i
* **^VHIGH** = hightening of vowels for verbs o to uu, a to oo
* **^VBACK** = back vowels for verbs, ä to a (when needed, normally 2syll a|â is enough
* **^IUML** =  â to e in front of high suffixes 
* **^BLOCK** = This symbol just to block otherwise triggering contexts

## Symbols that need to be escaped on the lower side (towards twolc):

* **»** derivation boundary symbols (for hunspell etc. not in use (?))
* **«** derivation
* **%>**  suffix
* **%<**  prefix
* **+Use/NG** not-generate, for ped generation isme-ped.fst
* **+Use/MT**  generate only for MT 
* **+Use/Circ** 
* **+Use/-PMatch** = for preprocessing
* **+Use/PMatch** = for preprocessing
* **@P.Pmatch.Backtrack@** = for preprocessing

## Variants within the same paradigm
* **+v1** 
 **+v2** 
 **+v3** 
 **+v4**  for different paradigm variants of same lexeme
* **+Hom1** 
 **+Hom2** for different homonymous lexemes
* **+Allegro** 

## Compound tags

### These tags describe the parts of the compound.

The prefix (before "/") is **Cmp**.

* **+Cmp/Hyph** compounds
* **+Cmp/SgNom** compounds
* **+Cmp/PlNom** compounds
* **+Cmp/Attr** compounds
* **+Cmp/SgGen** compounds
* **+Cmp/PlGen** compounds
* **+Cmp/SplitR** compounds
* **+Cmp/Sh** compounds
* **+Cmp** This tag to mark there is a compound.

### These tags govern the parts of the compound

The prefix (before "/") is **CmpNP**:
(meaning: this is the normative position of thus tag)

* **+CmpNP/All** - ... in all positions, **default**, this tag does not have to be written
* **+CmpNP/First** - ... only be first part in a compound or alone
* **+CmpNP/Pref** - ... only **first** part in a compound, NEVER alone
* **+CmpNP/Last** - ... only be last part in a compound or alone
* **+CmpNP/Suff** - ... only **last** part in a compound, NEVER alone
* **+CmpNP/None** - ... does not take part in compounds
* **+CmpNP/Only** - ... only be part of a compound, i.e. can never be used alone, but can appear in any position

The prefix (before "/") is **CmpN**:
(meaning: this is the normative position of thus tag)
The tagged part of the compound should make a compound using:

* **+CmpN/SgN** Singular Nominative
* **+CmpN/SgG** Singular Genitive
* **+CmpN/PlG** Plural Genitive

Unmarked = Default, ie `+CmpN/SgN` for SMN.

The second part of the compound may require that the previous (left part) is:

* **+CmpN/SgNomLeft** Singular Nominative
* **+CmpN/SgGenLeft** Singular Genitive
* **+CmpN/PlGenLeft** Plural Genitive

## Language tagged names

* **+OLang/ENG** 
* **+OLang/FIN** 
* **+OLang/NNO** 
* **+OLang/NOB** 
* **+OLang/SME** 
* **+OLang/SMA** 
* **+OLang/SWE** 
* **+OLang/UND** 
* **+OLang/RUS** 

## Flag diacritics
We have manually optimised the structure of our lexicon using following
flag diacritics to restrict morhpological combinatorics - only allow compounds
with verbs if the verb is further derived into a noun again:

| Flag | Explanation
| --- | --- 
|  **@P.NeedNoun.ON@** | (Dis)allow compounds with verbs unless nominalised 
|  **@D.NeedNoun.ON@** | (Dis)allow compounds with verbs unless nominalised 
|  **@C.NeedNoun@** | (Dis)allow compounds with verbs unless nominalised 
|  **@R.NeedNoun.ON@** | (Dis)allow compounds with verbs unless nominalised 
|  **@D.ErrOrth.ON@**  | Disallow ErrOrth
|  **@C.ErrOrth@**  | Clear ErrOrth flag
|  **@P.ErrOrth.ON@**  | Set positive value for ErrOrth flag
|  **@R.ErrOrth.ON@**  | Reset ErrOrth Flag

For languages that allow compounding, the following flag diacritics are needed
to control position-based compounding restrictions for nominals. Their use is
handled automatically if combined with +CmpN/xxx tags. If not used, they will
do no harm.

| Flag | Explanation
| --- | --- 
|  **@P.CmpFrst.FALSE@** | Require that words tagged as such only appear first
|  **@D.CmpPref.TRUE@** | Block such words from entering ENDLEX
|  **@P.CmpPref.FALSE@** | Block these words from making further compounds
|  **@D.CmpLast.TRUE@** | Block such words from entering R
|  **@D.CmpNone.TRUE@** | Combines with the next tag to prohibit compounding
|  **@U.CmpNone.FALSE@** | Combines with the prev tag to prohibit compounding
|  **@U.CmpNone.TRUE@** | Combines with the two previous ones to block compounding
|  **@P.CmpOnly.TRUE@** | Sets a flag to indicate that the word has passed R
|  **@D.CmpOnly.FALSE@** | Disallow words coming directly from root.
|  **@D.CmpHyph.TRUE@** | Flag to control hyphenated compounds like proper nouns
|  **@U.CmpHyph.FALSE@** | Flag to control hyphenated compounds like proper nouns
|  **@U.CmpHyph.TRUE@** | Flag to control hyphenated compounds like proper nouns
|  **@C.CmpHyph@** | Flag to control hyphenated compounds like proper nouns
|  **@P.CmpHyph.TRUE@** | Flag to control hyphenated compounds like proper nouns
|  **@N.CmpHyph.TRUE@** | Flag to control hyphenated compounds like proper nouns

Use the following flag diacritics to control downcasing of derived proper
nouns (e.g. Finnish Pariisi -> pariisilainen). See e.g. North Sámi for how to use
these flags. There exists a ready-made regex that will do the actual down-casing
given the proper use of these flags.

| Flag | Explanation
| --- | --- 
|  **@U.Cap.Obl@** | Allowing downcasing of derived names: deatnulasj.
|  **@U.Cap.Opt@** | Allowing downcasing of derived names: deatnulasj.
| **@U.NeedsVowRed.OFF@**  | is used to force hyphenation/non-reduction: samediggi-
| **@U.NeedsVowRed.ON@**  | is used to force reduction w/o hyphen: samedigge#xxx
| **@C.NeedsVowRed@**  | Clearing this feature, so that it doesn't interfere with further compounding
| **@C.Px@**  | Clear px
| **@C.Nom3Px@**  | 
| **@P.Px.add@**  | 
| **@R.Px.add@**  | 
| **@P.Px.block@**  | 
| **@D.Px.block@**  | 
| **@P.Nom12Px.add@**  | 
| **@R.Nom12Px.add@**  | 
| **@P.Nom3Px.add@**  | 
| **@R.Nom3Px.add@**  | 
| **@P.Vgen.add@**  | 
| **@R.Vgen.add@**  | 
| **@R.SpellRlx.ON@**  | Flag used to tag spell-relax-analysed strings (and only those).
| **@D.SpellRlx.ON@**  | Flag used to tag spell-relax-analysed strings (and only those).
| **@C.SpellRlx@**  | Flag used to tag spell-relax-analysed strings (and only those).
| **@R.SpaceCmp.ON@**  | Flag to tag compounds written with a space
| **@D.SpaceCmp.ON@**  | Flag to tag compounds written with a space
| **@C.SpaceCmp@**  | Flag to tag compounds written with a space

Basic lexica, pointing to the other lexicon files

# Lexicon Root where everyting starts
* **@U.Cap.Obl@ ProperNoun ;**  propernouns, always uppercase
* **@U.Cap.Opt@ ProperNoun ;**  propernouns, downcased for derivations: aanaarlâš
* **Abbreviation ;** 
* **Acronym ;** 
* **AdjectiveRoot ;** 
* **NounRoot ;** 
* **VerbRoot ;** 
* **Adverb ;** 
* **Particle ;** 
* **Subjunction ;** 
* **Conjunction ;** 
* **Adposition ;** 
* **Interjection ;** 
* **Numeral ;** 
* **Pronoun ;** 
* **Punctuation ;** 
* **Symbols ;** 

We split of the 3 lexica defined above already here:

* **LEXICON Abbreviation** directing to both smi (common) and smn abbrs.
	* **Abbreviation-smn ;** 
	* **Abbreviation-smi ;** 

* **LEXICON Acronym** splitting in common and smn
	* **Acronym-smi ;** 
	* **Acronym-smn ;** 

* **LEXICON ProperNoun** point
	* **Prefix-Proper ;** 
	* **ProperNoun-smn ;** 
	* **@N.CmpHyph.TRUE@ ProperNoun-smi-nocomp ;**  Lexicon for short names - always require hyphen
	* **ProperNoun-smi ;** 

# Lexicon ENDLEX 
And this is the ENDLEX of everything:
```
**@D.CmpOnly.FALSE@@D.CmpPref.TRUE@@D.NeedNoun.ON@ # ;** 
```
The `@D.CmpOnly.FALSE@` flag diacritic is ued to disallow words tagged
with +CmpNP/Only to end here.
The `@D.NeedNoun.ON@` flag diacritic is used to block illegal compounds.
* * *
<small>This (part of) documentation was generated from [../src/fst/root.lexc](http://github.com/giellalt/lang-smn/blob/main/../src/fst/root.lexc)</small>