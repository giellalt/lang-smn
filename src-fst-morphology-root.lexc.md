
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
* **+SentInit** 

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
 **+Foc/gen** 
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

## Error tags

All Err-tags must have a normative form as lemma except Err/Lex

* **+Err/Orth** - substandard, not in normative fst
* **+Err/Lex** - substandard, not in normative fst, no normative lemma
* **+Err/Hyph** - substandard, not in normative fst
* **+Err/SpaceCmp** - substandard, not in normative fst
* **+Err/MissingSpace** - in use in smi lexc

### Usage tags

* **+MWE** - MultiWord Expression, used for abbreviation extraction for preprocess.sh
* **+Use/-PLX** - do not include in Polderland spellers (most likely irrelevant for smn)
* **+Use/-Spell** - do not include in speller (even though the entry is formally correct)
* **+Use/SpellNoSugg** - Recognized, but not suggested in speller 
* **+Use/NGminip** Not for miniparadigm in NDS dicts
* **+Use/GC** – **only** retained in the HFST Grammar Checker disambiguation analyser
* **+Use/-GC** – **never** retained in the HFST Grammar Checker disambiguation analyser
* **+Use/TTS** – **only** retained in the HFST Text-To-Speech disambiguation tokeniser
* **+Use/-TTS** – **never** retained in the HFST Text-To-Speech disambiguation tokeniser

### Semantic tags to help disambiguation & synt. analysis: (before POS)

* +Sem/Act = Activity
* +Sem/Adr = Webadr
* +Sem/Amount = Amount
* +Sem/Ani = Animate
* +Sem/Aniprod = Animal Product
* +Sem/Body = Bodypart
* +Sem/Body-abstr = siellu, vuoig?a, jierbmi, (noe man kan bruke i fysisk aktivitet som en kroppsdel, f.eks. synet, stemmen, etc.)
* +Sem/Build = Building
* +Sem/Build-room = Room in a building, typically place to be
* +Sem/Buildpart = Part of Bulding, like the wall
* +Sem/Cat = Category
* +Sem/Clth = Clothes
* +Sem/Clth-jewl = Jewelery
* +Sem/Clthpart = part of clothes, boallu, sávdnji...
* +Sem/Ctain = Container
* +Sem/Ctain-abstr = Abstract container like bank account
* +Sem/Ctain-clth = Soft container, like a rucksack
* +Sem/Curr = Currency like dollár, Not Money
* +Sem/Date = Date
* +Sem/Dance = Dance
* +Sem/Dir = Direction like GPS-kursa
* +Sem/Domain = Domain like politics, reindeerherding (a system of actions)
* +Sem/Drink = Drink
* +Sem/Dummytag = Dummytag
* +Sem/Edu = Educational event
* +Sem/Event = Event
* +Sem/Feat = Feature, like Árvu. (noe som man kan ha mye eller lite av, det kan være en skala og som er på en måte karakteriserende. (høyde, vekt, farge, kreativitet etc.)
* +Sem/Feat-phys = Physiological feature, ivdni, fárda
* +Sem/Feat-psych = Psychological feauture
* +Sem/Feat-measr = Psychological feauture
* +Sem/Fem = Female name
* +Sem/Food = Food
* +Sem/Food-med = Medicine
* +Sem/Fruit = Fruits, vegetables, seeds, nuts
* +Sem/Furn = Furniture
* +Sem/Game = Game
* +Sem/Geom = Geometrical object
* +Sem/Group = Animal or Human Group
* +Sem/Hum = Human
* +Sem/Hum-abstr = Human abstract
* +Sem/Hum-prof = Human professional
* +Sem/Ideol = Ideology
* +Sem/ID = ID
* +Sem/Lang = Language
* +Sem/Mal = Male name
* +Sem/Mat = Material for producing things
* +Sem/Measr = Measure
* +Sem/Money = Has to do with money, like wages, not Curr(ency)
* +Sem/Obj = Object
* +Sem/Obj-clo = Cloth
* +Sem/Obj-cogn = Cloth
* +Sem/Obj-el = (Electrical) machine or apparatus
* +Sem/Obj-ling = Object with something written on it
* +Sem/Obj-rope = flexible ropelike object
* +Sem/Obj-surfc = Surface object
* +Sem/Org = Organisation
* +Sem/Part = Feature, oassi, bealli
* Perc = (perception) er noe man kan kjenne i en begrensa periode og som er forårsaka av noe utenifra, f.eks. Mus lea ballu. Mus lea bavččas.
* +Sem/Perc-cogn =
* +Sem/Perc-emo = Emotional perception
* +Sem/Perc-phys = Physical perception
* +Sem/Perc-psych = Psychological perception
* +Sem/Phonenr = Telephone number
* +Sem/Plant = Plant
* +Sem/Plantpart = Plant part
* +Sem/Plc = Place
* +Sem/Plc-abstr = Abstract place
* +Sem/Plc-elevate = Place
* +Sem/Plc-line = Place
* +Sem/Plc-water = Place
* +Sem/Pos = Position (as in social position job)
* +Sem/Process = Process
* +Sem/Prod = Product
* +Sem/Prod-audio = Audio product
* +Sem/Prod-cogn = Cognition product
* +Sem/Prod-ling = Linguistic product
* +Sem/Prod-vis = Visual product
* +Sem/Rel = Relation
* +Sem/Route = Route
* +Sem/Rule = Rule or convention
* +Sem/Semcon = Semantic concept
* +Sem/Sign = Sign (e.g. numbers, punctuation)
* +Sem/Sport = Sport
* +Sem/State =
* +Sem/State-sick = Illness
* +Sem/Substnc = Substance, like Air and Water
* +Sem/Sur = Surname
* +Sem/Symbol = Symbol
* +Sem/Time = Time
* +Sem/Time-clock = Time clock
* +Sem/Tool = Prototypical tool for repairing things
* +Sem/Tool-catch = Tool used for catching (e.g. fish)
* +Sem/Tool-clean = Tool used for cleaning
* +Sem/Tool-it = Tool used in IT
* +Sem/Tool-measr = Tool used for measuring
* +Sem/Tool-music = Music instrument
* +Sem/Tool-write = Writing tool
* +Sem/Txt = Text (girji, lávlla...)
* +Sem/Veh = Vehicle
* +Sem/Wpn = Weapon
* +Sem/Wthr = The Weather or the state of ground
* +Sem/Year - year (i.e. 1000 - 2999), used only for numerals

### semtags to be checked

### Multiple Semantic tags:
* +Sem/Act_Fruit
* +Sem/Act_Group Activity and Group
* +Sem/Act_Hum Activity and Human
* +Sem/Act_Plc   A persons job is an activity, and a place as well
* +Sem/Act_Route Activity and Route, ie johtolat
* +Sem/Act_Tool-it
* **+Sem/Amount_Build**   Amount and Building
* +Sem/Amount_Semcon
* +Sem/Ani_Body-abstr_Hum
* +Sem/Ani_Build
* +Sem/Ani_Buildpart
* +Sem/Ani_Build_Hum_Txt
* +Sem/Ani-fish
* +Sem/Ani_Group
* +Sem/Ani_Group_Hum
* +Sem/Ani_Group_Prod-vis
* +Sem/Ani_Hum
* +Sem/Ani_Hum_Plc
* +Sem/Ani_Hum_Time
* +Sem/Ani_Plc
* +Sem/Ani_Plc_Txt
* +Sem/Ani_Time
* +Sem/Ani_Veh
* +Sem/Aniprod_Hum
* +Sem/Aniprod_Obj-clo
* +Sem/Aniprod_Perc-phys
* +Sem/Aniprod_Plc
* +Sem/Aniprod_Plc_Route
* +Sem/Body-abstr_Feat-psych
* +Sem/Body-abstr_Prod-audio_Semcon
* +Sem/Body_Body-abstr
* +Sem/Body_Clth
* +Sem/Body_Food
* +Sem/Body_Group_Hum
* +Sem/Body_Group_Hum_Time
* +Sem/Body_Hum
* +Sem/Body_Mat
* +Sem/Body_Measr
* +Sem/Body_Obj_Tool-catch
* +Sem/Body_Plc
* +Sem/Body_Plc-elevate
* +Sem/Body_Time
* +Sem/Build_Clthpart
* +Sem/Build_Edu_Org
* +Sem/Build_Event_Org
* +Sem/Build_Obj
* +Sem/Build_Org
* +Sem/Build_Route
* +Sem/Build-room_Cat_Ctain_Mat
* +Sem/Buildpart_Cat
* +Sem/Buildpart_Cat_Ctain
* +Sem/Buildpart_Cat_Ctain_Mat
* +Sem/Buildpart_Ctain
* +Sem/Buildpart_Ctain_Mat
* +Sem/Buildpart_Ctain_Obj
* +Sem/Cat_Group_Hum
* +Sem/Cat_Group_Hum_Plc
* +Sem/Cat_Edu
* +Sem/Cat_Obj
* +Sem/Clth-jewl_Curr
* +Sem/Clth-jewl_Curr_Obj
* +Sem/Clth-jewl_Curr_Obj_Org
* +Sem/Clth-jewl_Fruit
* +Sem/Clth-jewl_Money
* +Sem/Clth-jewl_Plant
* +Sem/Clth_Hum
* +Sem/Clth_Obj-clo
* +Sem/Ctain-abstr_Org
* +Sem/Ctain-clth_Plant
* +Sem/Ctain-clth_Veh
* +Sem/Ctain_Feat-phys
* +Sem/Ctain_Furn
* +Sem/Ctain_Plc
* +Sem/Ctain_Tool
* +Sem/Ctain_Tool-measr
* +Sem/Curr_Org
* +Sem/Dance_Org
* +Sem/Dance_Prod-audio
* +Sem/Domain_Food-med
* +Sem/Domain_Hum
* +Sem/Domain_Prod-audio
* +Sem/Drink_Plant
* +Sem/Edu_Event
* +Sem/Edu_Geom
* +Sem/Edu_Group_Hum
* +Sem/Edu_Hum
* +Sem/Edu_Mat
* +Sem/Edu_Org
* +Sem/Event_Food
* +Sem/Event_Hum
* +Sem/Event_Plc
* +Sem/Event_Plc-elevate
* +Sem/Event_Time
* +Sem/Feat-measr_Plc
* +Sem/Feat-phys_Tool-write
* +Sem/Feat-phys_Veh
* +Sem/Feat-phys_Wthr
* +Sem/Feat-psych_Hum
* +Sem/Feat-psych_Plc
* +Sem/Food_Obj-surfc
* +Sem/Feat_Plant
* +Sem/Food_Perc-phys
* +Sem/Food_Plant
* +Sem/Food_Sign
* +Sem/Fruit_Hum
* +Sem/Game_Obj-play
* +Sem/Geom_Hum_Plc
* +Sem/Geom_Obj
* +Sem/Group_Hum
* +Sem/Group_Hum_Org
* +Sem/Group_Hum_Plc
* +Sem/Group_Hum_Plc-abstr
* +Sem/Group_Hum_Prod-vis
* +Sem/Group_Hum_Time
* +Sem/Group_Org
* +Sem/Group_Prod-vis
* +Sem/Group_Sign
* +Sem/Group_Txt
* +Sem/Hum_Lang
* +Sem/Hum_Lang_Plc
* +Sem/Hum_Lang_Time
* +Sem/Hum_Mat_Tool
* +Sem/Hum_Obj
* +Sem/Hum_Org
* +Sem/Hum_Sign
* +Sem/Hum_Part
* +Sem/Hum_Plant
* +Sem/Hum_Plc
* +Sem/Hum_Sign
* +Sem/Hum_Tool
* +Sem/Hum_Tool-it = Human
* +Sem/Hum_Veh
* +Sem/Hum_Wthr
* +Sem/Lang_Tool
* +Sem/Mat_Plant
* +Sem/Mat_Txt
* +Sem/Measr_Obj_Time
* +Sem/Measr_Sign = Sign (e.g. numbers, punctuation)
* +Sem/Measr_Time
* +Sem/Money_Obj
* +Sem/Money_Org
* +Sem/Money_Part
* +Sem/Money_Txt
* +Sem/Obj-play
* +Sem/Obj-play_Sport
* +Sem/Obj_Semcon
* +Sem/Obj_Sign
* +Sem/Obj_Veh
* +Sem/Clth-jewl_Org
* +Sem/Obj_Symbol
* +Sem/Org_Rule
* +Sem/Org_Buildpart 
* +Sem/Org_Txt
* +Sem/Org_Veh
* +Sem/Part_Prod-cogn
* +Sem/Part_Substnc
* +Sem/Perc-emo_Wthr
* +Sem/Plant_Plantpart
* +Sem/Plant_Tool
* +Sem/Plant_Tool-measr
* +Sem/Plc-abstr_Rel_State
* +Sem/Plc-abstr_Route
* +Sem/Plc_Pos
* +Sem/Plc_Route
* +Sem/Plc_Semcon
* +Sem/Plc_State
* +Sem/Plc_Substnc
* +Sem/Plc_Substnc_Wthr
* +Sem/Plc_Time
* +Sem/Plc_Tool-catch
* +Sem/Plc_Txt
* +Sem/Plc_Wthr
* +Sem/Prod-audio_Txt
* +Sem/Prod-cogn_Txt
* +Sem/Semcon_Txt
* +Sem/Obj_State
* +Sem/Substnc_Wthr
* +Sem/Plc_Time_Wthr
* +Sem/Time_Wthr
* +Sem/State-sick_Substnc
* +Sem/Obj-ling_Obj-surfc
* +Sem/Org_Prod-audio
* +Sem/Org_Prod-cogn
* +Sem/Org_Prod-vis

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
* **@P.Pmatch.Loc@** = 

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

* **+Cmp/Hyph** compounds where first part ends in -
* **+Cmp/SgNom** compounds where first part is Sg Nom
* **+Cmp/PlNom** compounds where first part is Pl Nom
* **+Cmp/Attr** compounds where first part is Attr
* **+Cmp/SgGen** compounds where first part is Sg Gen
* **+Cmp/PlGen** compounds where first part is Pl Gen
* **+Cmp/SplitR** compounds where first part is a split compound hmm
* **+Cmp/Sh** compounds where first part is a short form
* **+Cmp** This tag to mark there is a compound. It comes after the Cmp/xxx tag.

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
* **+OLang/SMJ** 
* **+OLang/SMA** 
* **+OLang/SWE** 
* **+OLang/UND** 
* **+OLang/RUS** 
* +OLang/PARA - parallelle navn, navnet skal ikke overføres til andre samisk språk

## Flag diacritics
We have manually optimised the structure of our lexicon using following
flag diacritics to restrict morhpological combinatorics - only allow compounds
with verbs if the verb is further derived into a noun again.
The P sets positive value, the C clears it.

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

Use the following flag diacritics to control harmony in numeral case inflection

| Flag | Explanation
| --- | --- 
|  **@U.Case.SgNom@** | Unifies with case Nominative
|  **@U.Case.PlNom@** | Unifies with case Nominative
|  **@U.Case.SgGen@** | Unifies with case Genitive
|  **@U.Case.PlGen@** | Unifies with case Genitive
|  **@U.Case.PlAcc@** | Unifies with case Accusative
|  **@U.Case.SgLoc@** | Unifies with case Locative
|  **@U.Case.PlLoc@** | Unifies with case Locative
|  **@U.Case.SgIll@** | Unifies with case Illative
|  **@U.Case.PlIll@** | Unifies with case Illative
|  **@U.Case.SgCom@** | Unifies with case Comitative
|  **@U.Case.Ess@** | Unifies with case Essive
|  **@U.Number.Sg@** | Unifies with number Singular - perhaps not in use
|  **@U.Number.Pl@** | Unifies with number Plural - perhaps not in use

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

<small>This (part of) documentation was generated from [src/fst/morphology/root.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/root.lexc)</small>
