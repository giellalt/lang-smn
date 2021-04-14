
# Inari Sámi morphological analyser

# Multichar_Symbols definitions

## Parts of speech
 *  +N +A +Adv +V					  
 *  +Pron +CS +CC					  
 *  +Adp +Po +Pr 					  
 *  +Interj +Pcle					  
 *  +ABBR         

 * +Symbol = independent symbols in the text stream, like £, €, ©


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

* **+Gram/TAbbr**:  Transitive abbreviation (it needs an argument)
* **+Gram/NoAbbr**:  Intransitive abbreviations that are homonymous
   with more frequent words. They should only be considered
   abbreviations in the middle of a sentence.
* **+Gram/TNumAbbr**:  Transitive abbreviation if the following
            constituent is numeric
* **+Gram/NumNoAbbr**:  Transitive abbreviations for which numerals
are complements and normal words. The abbreviation usage
is less common and thus only the occurences in the middle of
the sentence can be considered as true cases.
* **+Gram/TIAbbr**:  Both transitive and intransitive abbreviation
* **+Gram/IAbbr**:  Intransitive abbreviation (it takes no argument)
* **+Gram/3syll**: trisyllabic verbs



## Grammatical properties

 *  +IV +TV			  


### Person - number
 *  +Sg +Pl +Du						  

 *  +Sg1 +Sg2 +Sg3 				  
 *  +Du1 +Du2 +Du3 				  
 *  +Pl1 +Pl2 +Pl3					  

 *  +PxSg1 +PxSg2 +PxSg3 			  
 *  +PxDu1 +PxDu2 +PxDu3 			  
 *  +PxPl1 +PxPl2 +PxPl3 			  

### Case
 *  +Nom +Gen +Acc 				  
 *  +Ill +Ine +Ela 				  
 *  +Com +Ess +Par +Abe 			  
 *  +Loc                			  


 *  +Known  mon , till we found a better tag

### Adjectival forms
 *  +Comp +Superl 			  
 *  +Attr				  

### Adverb types 

 *  +Spat	   	Spatial adverbs
 *  +Temp	    Temporal adverbs


### Tense - mood
 *  +Ind +Pot +Cond +Imprt +ImprtII  
 *  +Prs +Prt						  

### Indefinite verb forms
 *  +Pass +Sup						  
 *  +Inf +Ger +GerII 				  
 *  +ConNeg +Neg 					  
 *  +PrsPrc +PrfPrc 				  
 *  +VGen +VAbess					  
 *  +Actio					  

```

```


All non-positional derivations should be preceded by this tag, to make it possible
to target regular expressions at all derivations in a language-independent way:
just specify +Der|+Der1 .. +Der5 and you are set.

 * +Der


### Derivations
### Other/unclassified derivations, can appear in all positions:


 *  +Der/ag  neeljičievâg neeljijienâg kuulmâloonjâg neeljičievâg neeljijienâg
 *  +Der/ahasas                     85-ahasâš škovlâahasâš
 *  +Der/ivvaas                  
 *  +Der/vualasas                     tutkâmvuálásâš


 * **+Ex/N	** - This tag is not added in lexc. The POS tag before derivation is converted into this tag when compiling FST for disambiguation.
 * **+Ex/A	** - This tag is not added in lexc. The POS tag before derivation is converted into this tag when compiling FST for disambiguation.
 * **+Ex/V	** - This tag is not added in lexc. The POS tag before derivation is converted into this tag when compiling FST for disambiguation.


### Clitics
 *  +Foc       				  
 *  +Foc/ba         
 *  +Foc/baa        
 *  +Foc/baan       
 *  +Foc/ban        
 *  +Foc/gan        
 *  +Foc/gas        
 *  +Foc/ge         
 *  +Foc/ges        
 *  +Foc/gin        
 *  +Foc/gis        
 *  +Foc/go         
 *  +Foc/han        
 *  +Foc/kas        
 *  +Foc/kin        
 *  +Foc/kis        
 *  +Foc/nii        
 *  +Foc/pa         
 *  +Foc/sun        
 *  +Foc/uv        

### Usage tags

 * **+Err/Orth** substandard, not in normative fst
 * **+Err/Lex** substandard, not in normative fst, no normative lemma
 * **+Err/Hyph** substandard, not in normative fst
 * **+Err/SpaceCmp** substandard, not in normative fst
|  **+Err/MissingSpace** | in use in smi lexc

 * **+MWE** - MultiWord Expression, used for abbreviation extraction for preprocess.sh
 * **+Use/-PLX** - do not include in Polderland spellers (most likely irrelevant for smn)
 * **+Use/-Spell** - do not include in speller (even though the entry is formally correct)
 * **+Use/SpellNoSugg** - Recognized, but not suggested in speller 
 * **+Use/GC** only retained in the HFST Grammar Checker disambiguation analyser
 * **+Use/-GC** never retained in the HFST Grammar Checker disambiguation analyser

## Semantic tags

 * +Sem/Act              
 * +Sem/Act_Fruit              
 * +Sem/Act_Plc              
 * +Sem/Act_Route              
 * +Sem/Act_Tool-it              
 * +Sem/Amount              
 * +Sem/Amount_Semcon              
 * +Sem/Ani               
 * +Sem/Ani-bird	               Bird names
 * +Sem/Ani-fish	               Fish names
 * +Sem/Ani-insect	               Insect names
 * +Sem/Ani_Body-abstr_Hum              
 * +Sem/Ani_Buildpart              
 * +Sem/Ani_Group              
 * +Sem/Ani_Group_Hum              
 * +Sem/Ani_Group_Prod-vis              
 * +Sem/Ani_Hum              
 * +Sem/Ani_Veh              
 * +Sem/Aniprod              
 * +Sem/Aniprod_Hum				           
 * +Sem/Aniprod_Obj-clo			           
 * +Sem/Aniprod_Perc-phys			           
 * +Sem/Aniprod_Plc_Route			           
 * +Sem/Atr	               
 * +Sem/Body  denotes bodyparts
 * +Sem/Body-abstr					           
 * +Sem/Body-abstr_Feat-psych		           
 * +Sem/Body-abstr_Prod-audio_Semcon          
 * +Sem/Body_Food					           
 * +Sem/Body_Hum					           
 * +Sem/Body_Mat					           
 * +Sem/Body_Measr					           
 * +Sem/Body_Plc					           
 * +Sem/Body_Plc-elevate			           
 * +Sem/Build						           
 * +Sem/Build-room  				           
 * +Sem/Build_Edu_Org				           
 * +Sem/Build_Org					           
 * +Sem/Buildpart					           
 * +Sem/Buildpart_Cat_Ctain_Mat	           
 * +Sem/Buildpart_Ctain_Obj		           
 * +Sem/Cat						           
 * +Sem/Clth						            clothes
 * +Sem/Clth-jewl					           
 * +Sem/Clth-jewl_Curr				           
 * +Sem/Clthpart					           
 * +Sem/Ctain						           
 * +Sem/Ctain-abstr				           
 * +Sem/Ctain-clth					           
 * +Sem/Ctain-clth_Veh				           
 * +Sem/Ctain_Furn					           
 * +Sem/Ctain_Tool					           
 * +Sem/Curr						           
 * +Sem/Dance						           
 * +Sem/Date						           
 * +Sem/Dir						           
 * +Sem/Domain						           
 * +Sem/Domain_Hum                
 * +Sem/Domain_Prod-audio			           
 * +Sem/Drink						           
 * +Sem/Drink_Plant				           
 * +Sem/Dummytag					           
 * +Sem/Edu						           
 * +Sem/Edu_Event					           
 * +Sem/Edu_Geom					           
 * +Sem/Edu_Hum              
 * +Sem/Edu_Mat					           
 * +Sem/Edu_Org					           
 * +Sem/Event						           
 * +Sem/Event_Food					           
 * +Sem/Event_Plc					           
 * +Sem/Event_Time					           
 * +Sem/Feat						           
 * +Sem/Feat-measr					           
 * +Sem/Feat-measr_Plc				           
 * +Sem/Feat-phys					           
 * +Sem/Feat-phys_Tool-write		           
 * +Sem/Feat-phys_Veh				           
 * +Sem/Feat-phys_Wthr				           
 * +Sem/Feat-psych					           
 * +Sem/Feat-psych_Plc				           
 * +Sem/Feat_Plant					           
 * +Sem/Fem               
 * +Sem/Food						           
 * +Sem/Food-med					           
 * +Sem/Food_Plant					           
 * +Sem/Fruit						           
 * +Sem/Fruit_Hum					           
 * +Sem/Furn						           
 * +Sem/Game_Obj-play				           
 * +Sem/Geom						           
 * +Sem/Geom_Obj					           
 * +Sem/Group_Hum					           
 * +Sem/Group_Hum_Org				           
 * +Sem/Group_Hum_Plc				           
 * +Sem/Group_Txt					           
 * +Sem/Hum						           
 * +Sem/Hum_Lang					           
 * +Sem/Hum_Lang_Plc				           
 * +Sem/Hum_Mat_Tool				           
 * +Sem/Hum_Obj					           
 * +Sem/Hum_Org					           
 * +Sem/Hum_Plc					           
 * +Sem/Hum_Veh					           
 * +Sem/ID 						           
 * +Sem/Ideol						           
 * +Sem/Lang 			             Languages
 * +Sem/Lang_Tool					           
 * +Sem/Mal               
 * +Sem/Mat						           
 * +Sem/Mat_Plant					           
 * +Sem/Mat_Txt					           
 * +Sem/Measr               
 * +Sem/Measr_Sign					           
 * +Sem/Measr_Time					           
 * +Sem/Money               
 * +Sem/Money_Obj					           
 * +Sem/Money_Txt					           
 * +Sem/Obj               
 * +Sem/Obj-clo					           
 * +Sem/Obj-el                
 * +Sem/Obj-ling					           
 * +Sem/Obj-play					           
 * +Sem/Obj-rope					           
 * +Sem/Obj-surfc					           
 * +Sem/Obj_Semcon					           
 * +Sem/Obj_State					           
 * +Sem/Obj_Veh					           
 * +Sem/Org               
 * +Sem/Org_Prod-audio				           
 * +Sem/Org_Prod-cogn				           
 * +Sem/Org_Prod-vis				           
 * +Sem/Org_Rule					           
 * +Sem/Org_Txt					           
 * +Sem/Part						           
 * +Sem/Perc-cogn					           
 * +Sem/Perc-emo					           
 * +Sem/Perc-phys					           
 * +Sem/Plant ! Plant names		           
 * +Sem/Plant-fungus	              Fungi names
 * +Sem/Plant_Plantpart                		           
 * +Sem/Plantpart					           
 * +Sem/Plc                                                    denotes places
 * +Sem/Plc-abstr					           
 * +Sem/Plc-abstr_Rel_State		                   
 * +Sem/Plc-abstr_Route			                   
 * +Sem/Plc-elevate				           
 * +Sem/Plc-line					           
 * +Sem/Plc-water					           
 * +Sem/Plc_Route					           
 * +Sem/Plc_Substnc				           
 * +Sem/Plc_Substnc_Wthr			                   
 * +Sem/Plc_Time					           
 * +Sem/Plc_Tool-catch				           
 * +Sem/Plc_Txt					           
 * +Sem/Plc_Wthr					           
 * +Sem/Pos						   
 * +Sem/Process					           
 * +Sem/Prod						   
 * +Sem/Prod-audio					           
 * +Sem/Prod-audio_Txt				           
 * +Sem/Prod-cogn					           
 * +Sem/Prod-cogn_Txt				           
 * +Sem/Prod-ling					           
 * +Sem/Prod-vis					           
 * +Sem/Rel					           
 * +Sem/Route					           
 * +Sem/Rule					           
 * +Sem/Semcon					           
 * +Sem/Semcon_Txt					           
 * +Sem/Sign					           
 * +Sem/State					           
 * +Sem/State-sick					           
 * +Sem/Substnc					           
 * +Sem/Substnc_Wthr				           
 * +Sem/Sur                                                   
 * +Sem/Time					           
 * +Sem/Time-clock					           
 * +Sem/Time_Wthr					           
 * +Sem/Tool					           
 * +Sem/Tool-catch					           
 * +Sem/Tool-clean					           
 * +Sem/Tool-it					           
 * +Sem/Tool-measr					           
 * +Sem/Tool-music					           
 * +Sem/Tool-write					           
 * +Sem/Txt					           
 * +Sem/Veh                                                   
 * +Sem/Wpn					           
 * +Sem/Wthr					            weather
 * +Sem/Year                                                  


## Punctuation

 *  +CLB +PUNCT +HYPH    
 *  +PAR +LEFT +RIGHT    
 *  +URL                 
 * **+CLBfinal**  Sentence final abbreviated expression ending in full stop, the full stop is ambiguous


## Morphophonemes

 *  k4 l4 t4 p4 c4 t4 č4         = these are consonants that change in cg
 *  b6 d6 g6                     = these are consonants that change in clitics: jiemge, epke
 *  i2 i3 u2 â2                  = stemvowel changing to e, e.g. kyeli:kyeˊle 
 *  i3                           =  stemvowel changing to e, e.g. kyeli:kyeˊle (why i3)
 *  i4                           = this is the postvocalic i consonant, realised as i
 *  i5                           = comitative suffix-begin in loanwords
 *  i6  j6                       = these are fake vowel and consonant, to get rules to function for exeptions
 *  a5 ä5 á5 e5 u5 o5 y5         = these vowels do not change, e.g. pyerá
 *  h5 j5 m5 ŋ5 t5 c5 d5         = these consonants do not change in WG
 *  l5 t5 r5 č5 k5 z5            = these consonants do not change in WG
 *  ∑    used for dynamic compounds, Capital Greek Sigma, Alt-Shift-S

### Archiphonemes

 * ^RC    = Root consonant dummy
 * ^RV    = Root vowel dummy
 * ^SC    = Suffix consonant dummy
 * ^SV    = Suffix vowel dummy
 * ^VO    = vowel copy

### Triggers

 * ^CLEN     Consonant lengthening in qual WG
 * ^CSH      Consonant shortening (not WG)
 * ^FCD      Final consonant deletion
 * ^FVD      Final vowel deletion
 * ^EA      is á and root vowel change in Ill Sg of i-stems
 * ^EX      = Stem vowel: i to â where it should have been á, this is Err/Orth only      
 * ^RLEN     Root vowel lengthening (impl. WG)
 * ^RVSH     Root vow shortening
 * ^SLEN     Suffix vowel lengthening 
 * ^SVLOW    Suffix vowel lowering â > á and u > o
 * ^SVSH     Second syllable vowel shortening
 * ^VLOW    is Vowel lowering in 3rd sg of contract verbs tuhhid:tohhe
 * ^WG       Weak grade trigger
 * ^ÁE      á->e
 * ^ÁI      á->i
 * ^VHIGH   = hightening of vowels for verbs o to uu, a to oo
 * ^VBACK   = back vowels for verbs, ä to a (when needed, normally 2syll a|â is enough
 * ^IUML    =  â to e in front of high suffixes 
 * ^BLOCK   = This symbol just to block otherwise triggering contexts

## Symbols that need to be escaped on the lower side (towards twolc):

 *  +Use/NG       not-generate, for ped generation isme-ped.fst
 *  +Use/MT        generate only for MT 
 *  +Use/Circ     

 * +Use/-PMatch           = for preprocessing
 * +Use/PMatch            = for preprocessing
 * @P.Pmatch.Backtrack@   = for preprocessing


## Variants within the same paradigm
 * +v1     
 * +v2     
 * +v3     
 * +v4     
 * +Hom1   
 * +Hom2   
 * +Allegro   



## Compound tags

### These tags describe the parts of the compound.

The prefix (before "/") is **Cmp**.

 * +Cmp         compounds
 * +Cmp/Hyph    compounds

 * +Cmp/SgNom   compounds
 * +Cmp/PlNom   compounds
 * +Cmp/Attr    compounds
 * +Cmp/SgGen   compounds
 * +Cmp/PlGen   compounds
 * +Cmp/SplitR  compounds
 * +Cmp/Sh      compounds

### These tags govern the parts of the compound

The prefix (before "/") is **CmpNP**:
(meaning: this is the normative position of thus tag)

 * **+CmpNP/All** - ... in all positions, **default**, this tag does not have to be written
 * **+CmpNP/First** - ... only be first part in a compound or alone
 * **+CmpNP/Pref** - ... only **first** part in a compound, NEVER alone
 * **+CmpNP/Last** - ... only be last part in a compound or alone
 * **+CmpNP/Suff** - ... only **last** part in a compound, NEVER alone
 * **+CmpNP/None** - ... does not take part in compounds
 * **+CmpNP/Only** - ... only be part of a compound, i.e. can never
                    be used alone, but can appear in any position

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

 * +OLang/ENG  		  
 * +OLang/FIN  		  
 * +OLang/NNO  		  
 * +OLang/NOB  		  
 * +OLang/SME  		  
 * +OLang/SMA  		  
 * +OLang/SWE  		  
 * +OLang/UND  		  
 * +OLang/RUS  		  


## Flag diacritics
We have manually optimised the structure of our lexicon using following
flag diacritics to restrict morhpological combinatorics - only allow compounds
with verbs if the verb is further derived into a noun again:
|  @P.NeedNoun.ON@ | (Dis)allow compounds with verbs unless nominalised
|  @D.NeedNoun.ON@ | (Dis)allow compounds with verbs unless nominalised
|  @C.NeedNoun@ | (Dis)allow compounds with verbs unless nominalised
|  @R.NeedNoun.ON@ | (Dis)allow compounds with verbs unless nominalised

|  @D.ErrOrth.ON@ 
|  @C.ErrOrth@ 
|  @P.ErrOrth.ON@ 
|  @R.ErrOrth.ON@


For languages that allow compounding, the following flag diacritics are needed
to control position-based compounding restrictions for nominals. Their use is
handled automatically if combined with +CmpN/xxx tags. If not used, they will
do no harm.
|  @P.CmpFrst.FALSE@ | Require that words tagged as such only appear first
|  @D.CmpPref.TRUE@ | Block such words from entering ENDLEX
|  @P.CmpPref.FALSE@ | Block these words from making further compounds
|  @D.CmpLast.TRUE@ | Block such words from entering R
|  @D.CmpNone.TRUE@ | Combines with the next tag to prohibit compounding
|  @U.CmpNone.FALSE@ | Combines with the prev tag to prohibit compounding
|  @U.CmpNone.TRUE@ | Combines with the two previous ones to block compounding
|  @P.CmpOnly.TRUE@ | Sets a flag to indicate that the word has passed R
|  @D.CmpOnly.FALSE@ | Disallow words coming directly from root.
|  @D.CmpHyph.TRUE@ | Flag to control hyphenated compounds like proper nouns
|  @U.CmpHyph.FALSE@ | Flag to control hyphenated compounds like proper nouns
|  @U.CmpHyph.TRUE@ | Flag to control hyphenated compounds like proper nouns
|  @C.CmpHyph@ | Flag to control hyphenated compounds like proper nouns
|  @P.CmpHyph.TRUE@ | Flag to control hyphenated compounds like proper nouns
|  @N.CmpHyph.TRUE@ | Flag to control hyphenated compounds like proper nouns


Use the following flag diacritics to control downcasing of derived proper
nouns (e.g. Finnish Pariisi -> pariisilainen). See e.g. North Sámi for how to use
these flags. There exists a ready-made regex that will do the actual down-casing
given the proper use of these flags.
|  @U.Cap.Obl@ | Allowing downcasing of derived names: deatnulasj.
|  @U.Cap.Opt@ | Allowing downcasing of derived names: deatnulasj.


 * @U.NeedsVowRed.OFF@ is used to force hyphenation/non-reduction: samediggi-
 * @U.NeedsVowRed.ON@ is used to force reduction w/o hyphen: samedigge#xxx
 * @C.NeedsVowRed@ Clearing this feature, so that it doesn't interfere with further compounding

 * @C.Px@
 * @C.Nom3Px@
 * @P.Px.add@	
 * @R.Px.add@	
 * @P.Px.block@
 * @D.Px.block@
 * @P.Nom12Px.add@
 * @R.Nom12Px.add@
 * @P.Nom3Px.add@
 * @R.Nom3Px.add@

 * @P.Vgen.add@
 * @R.Vgen.add@


 * @R.SpellRlx.ON@ Flag used to tag spell-relax-analysed strings (and only those).
 * @D.SpellRlx.ON@ Flag used to tag spell-relax-analysed strings (and only those).
 * @C.SpellRlx@ Flag used to tag spell-relax-analysed strings (and only those).

 * @R.SpaceCmp.ON@ Flag to tag compounds written with a space
 * @D.SpaceCmp.ON@ Flag to tag compounds written with a space
 * @C.SpaceCmp@ Flag to tag compounds written with a space


# Basic lexica, pointing to the other lexicon files

 LEXICON Root    where everyting starts



 * **LEXICON Acronym** splitting in common and smn



 * **LEXICON ProperNoun** 



# Lexicon ENDLEX
And this is the ENDLEX of everything:
```
 @D.CmpOnly.FALSE@@D.CmpPref.TRUE@@D.NeedNoun.ON@ # ;
```
The `@D.CmpOnly.FALSE@` flag diacritic is ued to disallow words tagged
with +CmpNP/Only to end here.
The `@D.NeedNoun.ON@` flag diacritic is used to block illegal compounds.






# Adjective affixes




Order of triggers:
```
SV|ÁE|ÁI  SC  FCD WG|CSH CLEN  VHIGH|VBACK  RVSH|RLEN EA SLEN|SVSH  SVLOW
```






 **LEXICON ATTR** for stems with only attribute form




 **LEXICON SIAHA** for siähá




## Even-syllable stems












 **LEXICON SKELMA** directing to X_ALGA, attr skelmâ
























 **LEXICON CEPPI** directing to X_AIGI, attr. čepis








 **LEXICON KUKKE** directing to X_ALGE, attr. kuhes








 **LEXICON PASE** directing to X_NJUNE via HUMO_REST, attr. pase                  


 **LEXICON HUMO** directing to X_NJUNE via HUMO_REST, attr. humos                  






 **LEXICON UAMI** directing to X_SAAMI, attr. uá'mi


 **LEXICON LAAMI** directing to X_SAAMI, attr. lämis






 **LEXICON PYERI** directing to X_KYELI, attr. pyeri






 **LEXICON HYENI** directing to X_KYELI, attr. hyenes




 **LEXICON NUORA** directing to X_KIELA, attr. nuora










## Odd-syllable stems


 **LEXICON NJUORAS** directing to X_RUONAS, attr. njuorâs




 **LEXICON UAMIS** directing to X_RUONAS, as an own group because of FCD, attr. uámi, čuámi, often used in compounds






 **LEXICON HAANIS** directing to X_PAAVIR, attr. hänis




 **LEXICON TIMES** directing to X_PAAVIR, attr. timmâ




 __LEXICON KIARGUS_nocomp __  like HAANIS, directing to X_PAAVIR, 




 **LEXICON HAAITIS** directing to X_VEESKIR, attr. rähis, not in use


 **LEXICON HEEITUG** directing to X_PAAVIR, attr. heitugis, heitugâs






 **LEXICON VAANIS** directing to  X_PAAVIR, attr. väni


 **LEXICON NJAALGIS** directing to NJAALGIS_COMMON, Attr. njaalgâ and njälgis


 **LEXICON RAAPIS** directing to NJAALGIS_COMMON, Attr. räpis 


 __LEXICON NJAALGIS_COMMON __ directing to  X_KAARBIS


 **LEXICON KOSKES** directing to  X_VEESKIR, attr. koške




 **LEXICON NJOLGES** directing to  X_VEESKIR, attr. njolges






 **LEXICON FIIJNES**  no noun cont.lex with this pattern






 **LEXICON KOOIDAS** directing to  X_VEESKIR, attr. koidâ




 **LEXICON SUOTAS** directing to  X_VEESKIR, attr. suotâs




 **LEXICON LIAGUS** like SUOTAS except for CSH






 **LEXICON SENES** not fitting in X_PELES because of CSH attr. seŋes








 **LEXICON KEPPIS** directing to X_LITTER, attr. keppâ


 **LEXICON PASTEL** directing to X_LITTER, attr. pastelis; adj is PASTEL


 **LEXICON FISKAD** directing to X_LITTER, attr. fiskis (fikâdis)




 **LEXICON JUOLLAD** directing to X_EEMEED, attr, juolis, juolâdis, juolâdâs


 __LEXICON A_LITTER __ directing to X_LITTER














 **LEXICON ALMOS** directing to X_SAJOS, attr. almos






 __LEXICON SOOHAD_nocomp __ directing to X_EEMEED, attr. sohâdis




 **LEXICON SOOHAD** directing to X_EEMEED, attr. sohâdis






 **LEXICON MAAJEEB-COMP** comparative lexicon




 **LEXICON PEEGGALM** directing to X_EEMEED, attr. sohâdis
















 LEXICON A_KOLME  ad hoc three syllable stem > LITTER




 **LEXICON KUBDUV** . It doesn't fit with KAAMUV because of kubduvân, kubduvist






## Contracted stems


 **LEXICON ALKKEE** directing to X_TAHHEE, attr. älkkees




 __LEXICON A_IJJE  __ 


 **LEXICON PYECCEE** directing to X_TAHHEE, attr. pyeccee




 __LEXICON ALKKEE_COMMON __ common for ALKKEE and PYECCEE




 __LEXICON A_KAANDAS __ directing to X_KAANDAS, no attr, half congruence


 __LEXICON A_TUULAS __ directing to X_KAANDAS, no attr, half congruence




 **LEXICON STYERES** directing to X_KAARBIS, attr. stuorrâ


 **LEXICON RIGES** directing to X_KAARBIS, attr. riges, 3st comparision








 **LEXICON MUOTTII** almost like KARRII, direct to it?




 __LEXICON A_VUALAAS __ 




 **LEXICON SIAMMAS** 




 **LEXICON JIAVTAS** 










## 4 syll stems


 __LEXICON A_KUNAGAS __ directing to  X_KUNAGAS; syeligâs, is like kunâgâs but FCD is not enough to create the comparation










 **LEXICON UANIHASJ** directing to LAS_SUF, attr, -âš










 **LEXICON UNOHAS** directing to LAS_SUF, attr, -is




 **LEXICON ANOLASJ** directing to LAS_COMMON, attr, -âš
Adj - pooliitlâš: # attr. pooliitlâš; puolikongruenssi mahdollinen (#-paikat), puolikongr. asemesta SgNom.


 **LEXICON LAGAN** directing to A_LITTER, attr. -lágán














 **LEXICON MUSTOTTEM** pls note e > iä in sg ill; no comparation


 __LEXICON A_INDECL __ not all forms., attr = Sg. Nom.




 **LEXICON OLMOOSMETTUM**, not all forms. attr. = Sg. Nom.










## Comparision




 * **LEXICON COMPe** NUORA uses this lexicon




 * **LEXICON VVCOMPe** ALKKEE uses this lexicon; giving älkkeb etc.






 * **LEXICON COMPclen** NUORA uses this lexicon




 * **LEXICON CCOMPe** STYERES and MUOTTII use this lexicon




 * **LEXICON eCOMP**




 * **LEXICON COMPo** NJUORAS, NJAALGIS uses this lexicon




 * **LEXICON eCOMP-SUF** 


 * **LEXICON oCOMP-SUF** 




 * **LEXICON CCOMP-SUF**  STYERES uses this lexicon




 * **LEXICON COMP-SUF** 






 * **LEXICON VVCOMP-SUF** 




 * **LEXICON COMP-SUFclen** 




 * __LEXICON SUP_MUS  __


 * __LEXICON SUP_MUSJ  __ majemuš




 * **LEXICON MUS**  asdf


 * **LEXICON MUSj** SUP_MUSJ uses this lexicon, eg. majemuš




 * **LEXICON CMUS**  STYERES uses this lexicon




 * **LEXICON MOS**


 * **LEXICON MUS-SUF**


 * **LEXICON MUSj-SUF**


 * **LEXICON CMUS-SUF**






 * __LEXICON A_VUOTA  __ for derivation


 * __LEXICON FLAG_2KIELA  __ @C.NeedNoun@


 * __LEXICON A_ADV  __ for derivation










 * __LEXICON A_LAGAN  __ for derivation


 __LEXICON A_LASJ   __ 


 __LEXICON ATTR_R  __



# Inari Saami adjectives


 * __LEXICON LAST_CMP_ADJ __ cmp last part



 * **LEXICON AdjectiveRoot** is the list of adjectives



 * **aalmuglâš:aalmugl ANOLASJ "kansallinen" ;** 
 * **boreaallâš:boreaall ANOLASJ "boreaalinen" ;** etc.


Lyhentynyt attr.


Attr. venytetty + -s


Attr. -is







Attr. -es (KARITIIVADJ.) Attr. muštottes / muštottemes




-METTUM / -MÁTTUM


-sâš



Lyhentynyt attr. + -IS

From corpus






























# Inari Saami adpositions


























# Inari Saami adverbs


## The morphology
 * **LEXICON ADV** the Adv tag


 * **LEXICON PxADV** the Adv tag and Ill Px


 * **LEXICON NAAL** 




 * **LEXICON BEL-ADV** 


 * **LEXICON PEL-ADV** 




## The stems


 * **LEXICON Adverb**




# Conjunctions 






 * **LEXICON Conjunction**
 * ja Cc ;          






# Sublexica for nominal morphology

Note: Triggers **must** be put in this order ("|" meaning "or") in 
order for the morphophonology to work:
```
SV|ÁE|ÁI  EA|SC  FCD  WG|CSH  CLEN  VHIGH|VBACK  RVSH|RLEN  SLEN|SVSH  SVLOW
```


## Table of content for this file
1. Unclassified lexica
1. Even-syllable stems
    1. Two-syllabic
    1. Four-syllabic even stems
1. Odd-syllabic stems
1. Contract stems


# The continuation lexica 

Lexicons starting with 2 are bisyllabic words, 
with 3 are trisyllabic, with 4 are quadrosyllabic.
The contract ones start with **C** or **S**.
Lexicons starting with **X** are pointed to from stem files
*nouns.lexc, adjective.lexc, propernouns.lexc*.
The lexica referred to as *basic lexica* are the ones found in the 
stems/nouns.lexc file.



## 1. Unclassified lexica

These two lexica are temporary lexica for words waiting to be classified.

 LEXICON KOLME  contains a handful of ad hoc three syllable stem, for now directed to 
 3LITTER ; 



 LEXICON nounstems  contains words that should be classified, for now directed to
 3LITTER ;  



## 1. Even-syllable stem lexica

### 2ALGA lexicon family
This is the basic even-syllable lexicon.
(Note: 2VADDU differs from 2ALGA in having CLEN for Sg+Com and Pl+Ill , rlen svlow, ess:-)
\\ 
 * *LEXICON 2AIRU* (subtype of the 2ALGA basic lexicon)

 * *LEXICON 2ALGA* (basic lexicon)
\\ 
 * *LEXICON X_ALGA* (common to all POS)
\\ 
 * *LEXICON 2ALGA_SG* (Px paradigms)

\\ 
 * *LEXICON X_ALGA_SG* case paradigms sg a^RVlgâ, ku^RVssâ
\\ 
 * *LEXICON X_ALGA_PL* case para pl (plurals for 2KUMPPI)
\\ 
 * *LEXICON X_ALGA_PL_COMMON* Pl Nom and directing to
 X_WG_RLEN_PL_Loc ;  



 * *LEXICON 2AIRU_SG_DIM* a^RVlgâ


 * *LEXICON 2AIRU_PL_DIM* 


 * *LEXICON 2ALGA_DIM*

 * *LEXICON 2ALGA_SG_DIM* a^RVlgâ

 * *LEXICON 2ALGA_PL_DIM* 


### 2PUUVSAH lexicon family, stem is pu^RVk4s^RCâ
This for plural only nouns. Note: Sg forms in compounds
 * *LEXICON 2PUUVSAH_PL* (basic lexicon)
has WG compound form, then pointing to
 2PUUVSAH_PL2 ; 
\\ 
 * *LEXICON 2PUUVSAH_PL2* (pointed to by 2KUMPPI)
\\ 
 * *LEXICON X_WG_RLEN_PL_Loc* plural forms with ^WG and ^^WG^RLEN
\\ 
 * *LEXICON X_WG_RLEN_PL*

### 2SOLLA lexicon family
SM1, RLEN, earlier LLEN !rlen svlow, sgcom/plill:rlen  ess:clen
Last vowel is â.
 * *LEXICON 2SOLLA* (basic lexicon)
\\ 
 * *LEXICON 2SOLLA_SG* (Sg forms‚ pointing to Px)
\\ 
 * *LEXICON 2SOLLA_PL* (Pl forms, pointing to Px)
\\ 
 * *LEXICON X_SOLLA_SG* (Sg absolute forms)
\\ 
 * *LEXICON X_SOLLA_PL* (Pl Ill, the rest pointing to
  X_ALGA_PL_COMMON ; )



### 2JUUHA lexicon family

 * *LEXICON 2JUUHA* (basic lexicon)
\\ 
 * *LEXICON 2JUUHA_SG*
\\ 
 * *LEXICON 2JUUHA_PL*
\\ 
 * *LEXICON X_JUUHA_SG* (common POS Sg)
\\ 
 * *LEXICON X_JUUHA_PL* (common POS Pl)


 * *LEXICON JUUVAS* (A lexicon for lexicalised deminutive words, thus words NOT having a double deminutive)
So far it has only one member, juuvâš, and no Px
\\ 
 * *LEXICON X_JUUVAS_SG* stem is ju^RVh^RC
 * *LEXICON X_JUUVAS_PL* 


 * *LEXICON JUUHA_DIM* (a lexicon to create deminutives; Not for lexicalised words already being in deminutive)





### 2KIELA lexicon family
 WG, blank Ill, DLEN, RVSH, SVLOW 
\\
 * *LEXICON KIELAonly* 
\\ 
 * *LEXICON 2KIELA* (basic lexicon -> sg, pl)
\\ 
 * *LEXICON X_KIELA* (-> sg, pl)
\\ 
 * *LEXICON 2KIELA_SG* (Sg forms, pointing to Px)
\\ 
 * *LEXICON 2KIELA_PL* (Pl forms, pointing to Px)
\\ 
 * *LEXICON X_KIELA_PL*
\\ 
 * *LEXICON X_KIELA_SG*



 * *LEXICON KIELA_DIM*



### JUUHA-KIELA common forms
 * *LEXICON JUUHA_KIELA_SG*
\\ 
 * *LEXICON X_WG_RVSH_PL_notILL*


### 2TELTTA lexicon family

 * *LEXICON 2TELTTA* Check: is this identical to KISSA?
\\ 
 * *LEXICON 2TELTTA_SG*
\\ 
 * *LEXICON 2TELTTA_PL*
\\ 
 * *LEXICON X_TELTTA_SG*
\\ 
 * *LEXICON X_TELTTA_PL*


### 2FADDA lexicon family

 * *LEXICON 2FADDA*:  This might be the standard even syllabi lexicon
\\ 
 * *LEXICON 2FADDA_SG*
\\ 
 * *LEXICON 2FADDA_PL*
\\ 
 * *LEXICON X_FADDA_SG*
\\ 
 * *LEXICON X_FADDA_PL*


 * *LEXICON FADDA_SG_DIM* fá^RVddá

 * *LEXICON FADDA_PL_DIM* 



### 2KISSA lexicon family

 * *LEXICON 2KISSA*  No root vowel lengthening
\\ 
 * *LEXICON 2KISSA_SG*


 * *LEXICON KISSA_DIM*





\\ 
 * *LEXICON 2KISSA_PL*
\\ 
 * *LEXICON X_KISSA_SG*
\\ 
 * *LEXICON X_KISSA_PL*



### 2CAANA lexicon family

 * *LEXICON 2CAANA*:  !čá^RVn^RCá
\\ 
 * *LEXICON 2CAANA_SG*
\\ 
 * *LEXICON 2CAANA_PL*
\\ 
 * *LEXICON X_CAANA_SG*
\\ 
 * *LEXICON X_CAANA_PL*



### 2TAHO lexicon family

 * *LEXICON 2TAHO* only for taho, similar to 2LAJO except from Pl+Ill, almost similar to 2SPAHA

 * *LEXICON 2TAHO_SG*

 * *LEXICON 2TAHO_PL*

### 2LAJO lexicon family
 * *LEXICON 2LAJO*

 * *LEXICON 2LAJO_SG*

 * *LEXICON LAJO_TAHO_PX_SG*
\\ 
\\ 
 * *LEXICON X_LAJO_TAHO_SG*
\\ 
 * *LEXICON 2LAJO_PL*


 * *LEXICON  LAJO_TAHO_PX_PL*
\\ 


 * *LEXICON X_LAJO_PL*


### 2NJUNE lexicon family

 * *LEXICON 2NJUNE* almost similar to 2LAJO
\\ 
 * *LEXICON X_NJUNE* almost similar to 2LAJO
\\ 
 * *LEXICON 2NJUNE_SG*

\\ 
 * *LEXICON 2NJUNE_PL*
\\ 
 * *LEXICON X_NJUNE_SG*
\\
 * *LEXICON X_NJUNE_PL*

### 2ALME - 2ALGE - 2NIJBE lexicon family

 * *LEXICON 2ALGE*
\\ 
 * *LEXICON X_ALGE*
\\ 
 * *LEXICON 2ALGE_SG*
\\ 
 * *LEXICON 2ALGE_PL*
\\ 
 * *LEXICON X_ALGE_SG*
\\ 
 * *LEXICON X_ALGE_PL*
\\ 
 * *LEXICON X_ALGE_NIIBE_PL*
\\ 
 * *LEXICON 2NIJBE* 
\\ 
 * *LEXICON 2NIJBE_SG*
\\ 
 * *LEXICON 2NIJBE_PL*
\\ 
 * *LEXICON X_NIJBE_SG*
\\ 
 * *LEXICON X_NIJBE_PL*

 * *LEXICON 2ALGE_DIM*

 * *LEXICON 2ALGE_SG_DIM* a^RVlgâ


 * *LEXICON 2ALGE_PL_DIM* 




### 2VAHE lexicon family

 * *LEXICON 2VAHE*
\\ 
 * *LEXICON 2VAHE_SG*
\\ 
 * *LEXICON 2VAHE_PL*
\\ 
 * *LEXICON X_VAHE_SG*



### 2KUMPPI lexicon family
i-i-i > 2SOLLA (?); MLO: no, difference in sg Com and pl Ill
 * *LEXICON 2KUMPPI* (basic lexicon, pointing to
 2FADDA_SG ;  but having different compound form)
\\ 
 * *LEXICON 2KUMPPI_PL*  (plurals for 2KUMPPI, pointing to
 +N: X_ALGA_PL ; )



### 2SAAMI lexicon family
\\ 
 * *LEXICON 2SAAMI* to 2LAAVU after fix in twolc?  saämijn > saamijn when ^WG^CLEN^SVLOW
\\ 
 * *LEXICON X_SAAMI* to 2LAAVU after fix in twolc?  saämijn > saamijn when ^WG^CLEN^SVLOW
\\ 
 * *LEXICON 2SAAMI_SG*
\\ 
 * *LEXICON 2SAAMI_PL* plurals for 2SAAMI
\\ 
 * *LEXICON X_SAAMI_SG* to 2LAAVU after fix in twolc?  saämijn > saamijn when ^WG^CLEN^SVLOW
\\ 
 * *LEXICON X_SAAMI_PL* plurals for 2SAAMI


### 2CAACI - 2VYEHI lexicon family TODO -- 
WG, Ill EA, Com CLEN SVLOW, Ess **with** CLEN
 * *LEXICON 2CAACI* (basic lexicon

 * *LEXICON 2VYEHI* WG, Ill EA, Com CLEN SVLOW, Ess **without** CLEN
\\
 * *LEXICON 2VYEHI_SG* sg forms
\\
 * *LEXICON X_VYEHI_SG* (different Ess, Par), otherwise
   X_CAACI_VYEHI_SG ;   )

 * *LEXICON CAACI_VYEHI_SG* common for the two

 * *LEXICON 2CAACI_VYEHI_PL* common Pl forms for Px

 * *LEXICON X_CAACI_VYEHI_SG* common Sg case forms

 * *LEXICON X_CAACI_VYEHI_PL*

### 2AIGI lexicon family

 * *LEXICON 2AIGI* similar to 2VADDU except from EA for Sg+Ill

 * *LEXICON X_AIGI* similar to 2VADDU except from EA for Sg+Ill

 * *LEXICON 2AIGI_SG*

 * *LEXICON 2AIGI_PL*




 * *LEXICON X_AIGI_SG*


### 2KYELI - 2SYEJI lexicon family

 * *LEXICON 2KYELI* i-e-á, similar to 2ALGE, except from -i some places.     

 * *LEXICON 2KYELI_SG*  kyeli nouns


 * *LEXICON KYELI_SYEJI_SG* i-e-á,     

 * *LEXICON 2_KYELI_SYEJI_SG_PX*  common kyeli-syeji px

 * *LEXICON X_KYELI* lexicon coming in from the adjectives             

 * *LEXICON X_KYELI_PL* i-e-á, similar to 2ALGE, except from -i some places. 

 * *LEXICON 2KYELI_PL* 



 * *LEXICON 2_KYELI_SYEJI_PL_PX* 


 * *LEXICON KYELI_SYEJI_PL* i-e-á,     



### 2KIRKKO - 2NJAMMA lexicon family

 * *LEXICON 2KIRKKO*  > KIRKKO_NJAMMA, but WG for Sg+Loc: 



 * *LEXICON 2KIRKKO_SG*

 * *LEXICON 2NJAMMA* > KIRKKO_NJAMMA, but WG CLEN for Sg+Loc: loho:lovvoost

 * *LEXICON KIRKKO_NJAMMA_SG*   


 * *LEXICON KIRKKO_NJAMMA_PL*   



 * *LEXICON X_KIRKKO_NJAMMA_SG*



### 2VASO lexicon family

 * *LEXICON 2VASO* only for vašo, similar to 2LAJO except from Sg+Loc, almost similar to 2SPAHA and 2TAHO. Blank Nom, Ill, Ess SV CLEN SLEN, otherwise WG


 * *LEXICON 2VASO_SG*

 * *LEXICON 2VASO_PL*


 * *LEXICON X_VASO_SG*

 * *LEXICON X_VASO_PL*




### 2OKKO lexicon family


 * *LEXICON 2OKKO* Pl+Acc WG, Pl+Ill WG CLEN


 * *LEXICON 2OKKO_SG*


 * *LEXICON 2OKKO_PL*

 * *LEXICON X_OKKO_SG* Pl+Acc WG, Pl+Ill WG CLEN

 * *LEXICON X_OKKO_PL* Pl+Acc WG, Pl+Ill WG CLEN



 * *LEXICON LAAVU_DIM* 
 * *LEXICON 2RAAVHU* like 2LAAVU, but long vowel in cmp. 


 * *LEXICON 2RAAVHU_SG*



 * *LEXICON 2RAAVHU_PL* 


 * *LEXICON 2VIASU* just as LAAVU, but without the short gen/acc


 * *LEXICON 2LAAVU* WG, Ill EA, Com SVLOW, Ess CLEN

 * *LEXICON 2LAAVU_SG*



 * *LEXICON X_LAAVU_SG* 


 * *LEXICON 2LAAVU_PL* 

 * *LEXICON X_LAAVU_PL* 



 * *LEXICON 2VUAGGU* 



 * *LEXICON 2VUAGGU_SG* 

 * *LEXICON 2VUAGGU_PL* 


 * *LEXICON X_VUAGGU_SG* 


 * *LEXICON 2KUSSA*

 * *LEXICON 2KUSSA_PL*

 * *LEXICON 2VADDU* 2AIGI has EA for Sg+Ill, 2SOLLA has RLEN for Sg+Com and Pl+Ill


 * *LEXICON 2VADDU_SG*

 * *LEXICON 2VADDU_PL*





 * *LEXICON 2TAVLU* 


 * *LEXICON 2TAVLU_SG* 


 * *LEXICON 2TAVLU_PL* 


 * *LEXICON X_TAVLU_SG* 

 * *LEXICON X_TAVLU_PL* 


 * *LEXICON 2NIISU* 

 * *LEXICON 2NIISU_SG* 


 * *LEXICON 2NIISU_PL* 


 * *LEXICON X_NIISU_SG* 


 * *LEXICON X_NIISU_PL* 


 * *LEXICON 2VAALJA* 

 * *LEXICON 2VAALJA_SG* 


 * *LEXICON 2VAALJA_PL* 


 * *LEXICON X_VAALJA_SG* 


 * *LEXICON X_VAALJA_PL* 


 * *LEXICON 2SKERREEH_PL*  Plural tantum, as 2PUUVSAH, but w/o WG


### APINA lexicon family
this is for loanwords without stem change

 * *LEXICON APINA* 


 * *LEXICON APINA_SG*

 * *LEXICON APINA_PL*


 * *LEXICON X_APINA_SG* (common for different POS)

 * *LEXICON X_h_PL*  gives %>h etc. to vowel stems, pointong to notILL

 * *LEXICON X_h_PL_notILL* 




## Four-syllable stems


### 4KUNAGAS lexicon family

 * *LEXICON 4KUNAGAS* 


 * *LEXICON X_KUNAGAS* 

 * *LEXICON 4KUNAGAS_SG*

 * *LEXICON 4KUNAGAS_PL* >

 * *LEXICON X_KUNAGAS_SG*  this is for loanwords without stem change, 3-syll. cons end

 * *LEXICON X_KUNAGAS_PL*


### 4CAHALIG lexicon family

 * *LEXICON 4CAHALIG*

 * *LEXICON 4CAHALIG_SG*


 * *LEXICON 4CAHALIG_PL*


 * *LEXICON X_CAHALIG_SG*

 * *LEXICON X_eh_PL*

### 4MANUTTEP lexicon family

 * *LEXICON 4MANUTTEP* 

 * *LEXICON 4MANUTTEP_SG* 


 * *LEXICON 4MANUTTEP_PL* 


 * *LEXICON X_MANUTTEP_SG* 

 * *LEXICON X_MANUTTEP_PL* 


### 4PUHELIN lexicon family

 * *LEXICON 4PUHELIN*  Only a few words in this category


### 2KOLLIISTALLAM lexicon family

 * *LEXICON 2KOLLIISTALLAM*


## Odd-syllable stems

 * *LEXICON 3KOMPAS* stem kompass An odd loan word with the final -s lengthening


 * *LEXICON X_KOMPAS* 



 * *LEXICON 3KEPIDEM* 

 * *LEXICON 3KEPIDEM_PL* 


 * *LEXICON 3POTTAAK* 

 * *LEXICON X_POTTAAK* 


 * *LEXICON 3EEMEED*

 * *LEXICON X_EEMEED*


 * *LEXICON 3EEMEED_SG*

 * *LEXICON 3EEMEED_PL*

 * *LEXICON X_EEMEED_SG*


 * *LEXICON 3LITTER* MO Ib 2nd syll vowel does not alternate

 * *LEXICON X_LITTER* MO Ib 2nd syll vowel does not alternate

 * *LEXICON X_LITTER_not_Par*  for numerals



 * *LEXICON 3LITTER_SG*

 * *LEXICON 3LITTER_PL*



 * *LEXICON X_LITTER_SG* 


 * *LEXICON X_LITTER_SG_not_Par*  for numerals



 * *LEXICON 3PIEHAIN* to v1 3PIEHAINonly and v2 3PIEHANJ


























 * *LEXICON 3JAAVVIL* 

 * *LEXICON 3JAAVVIL_SG* 

 * *LEXICON 3JAAVVIL_PL* 


 * *LEXICON X_JAAVVIL_SG* 




 * *LEXICON 3TERES* 



 * *LEXICON 3PAAVIR* NGA+Abe blank, WG Ess, CSH for the rest

 * *LEXICON X_PAAVIR* NGA+Abe blank, WG Ess, CSH for the rest

 * *LEXICON 3PAAVIR_SG* 



 * *LEXICON 3PAAVIR_PL* plural forms

 * *LEXICON X_PAAVIR_SG* NGA+Abe blank, WG Ess, CSH for the rest

 * *LEXICON X_PAAVIR_not_Nom_Par* NGA+Abe blank, WG Ess, CSH for the rest

 * *LEXICON X_PAAVIR_not_Nom_Par_SG* 

 * *LEXICON 3SAJOS* sai4joos



 * *LEXICON X_SAJOS* 




 LEXICON 3UAIVAT  > 3EEMEED. No Px, but only one word uáivát, witout Px para.



 * *LEXICON 3VEESKIR* 

 * *LEXICON X_VEESKIR* 


 * *LEXICON 3VEESKIR_SG* 


 * *LEXICON 3VEESKIR_PL* 

 * *LEXICON 3COLL_LITTER* collective numbers: čiččâmâs

 * *LEXICON C_COLL_KAARBIS* collective numbers: oovces

 * *LEXICON 3COLL_PAAVIR* collective numbers: loves

 * *LEXICON 3COLL* collective numbers: kyevtis, kuulmâs.., redirecting to  X_VEESKIR


 * *LEXICON 3PIIVTAS* WG for NEP,  no triggers for the other cases

 * *LEXICON 3PIIVTAS_SG* 



 * *LEXICON 3PIIVTAS_PL* 

 * *LEXICON 3DUSSEPIIVTAS*  piivtâš itself is not in the 3PIIVTAS lexicon


 LEXICON X_VEESKIR_SG  

 * *LEXICON 3KAAVPUG* 


 * *LEXICON 3AARRAN* 



 * *LEXICON 3AARRAN_SG*


 * *LEXICON 3AARRAN_PL* plurals for 3AARRAN


 * *LEXICON X_AARRAN_SG* 


 * *LEXICON 3RUONAS* nuurras WG NEP,  blank for the rest




 * *LEXICON X_RUONAS* WG NEP,  blank for the rest



 * *LEXICON 3VUONJAS*  kierâš, stem: kierrâ, px kierâččâm




 LEXICON 3CEVE  only for this lemma. It could go to 3LYEME but needs modifications of rules to get iä:e and -tt-, and the worst part is v:vv





 * *LEXICON 3LYEME*





 * *LEXICON 3HUKSIM* NGA + Abe blank, SLEN for the rest

 * *LEXICON 3HUKSIM_SG* NGA + Abe blank, SLEN for the rest


 * *LEXICON 3HUKSIM_PL* plurals for 3HUKSIM

 * *LEXICON 3KIEDAVUSSAM* stem: :kieđâvušš




 * *LEXICON 3POOVSA*  soovsa

 * *LEXICON 3POOVSA_SG*  soovsa

 * *LEXICON 3POOVSA_PL*  plurals for 3POOVSA


## Contracted stems

 * *LEXICON C_KAAMUV*

 * *LEXICON X_KAAMUV*

 * *LEXICON X_KAAMUV_COMMON*



 * *LEXICON C_POOVIJC* 


 * *LEXICON 3POOVIJ*





 * *LEXICON C_OLMOOS* lexicon for olmooš

 * *LEXICON C_OLMOOS_PL* 


 * *LEXICON C_KAARBIS*

 * *LEXICON X_KAARBIS*


 * *LEXICON C_KAARBIS_SG*



 * *LEXICON C_KAARBIS_PL* 

 * *LEXICON X_KAARBIS_SG*

 * *LEXICON C_MORCES*

 * *LEXICON X_MORCES*

 * *LEXICON C_CUNOI*

 * *LEXICON C_PUASUI*



 * *LEXICON C_ALMAI*


 * *LEXICON C_KUAVSUI*

 * *LEXICON C_KUAVSUI_COMMON*

 * *LEXICON C_CUANJA*


 * *LEXICON CUANJA_COMMON* 



 * *LEXICON X_SVSLENh_PL* 


 * *LEXICON S_AAIGA* Almost identical with S_AAJA, except for Compounds

 * *LEXICON AAIGA_COMMON_SG* 

 * *LEXICON S_AAIGA_PL*

 * *LEXICON AAIGA_COMMON_PL*


 * *LEXICON S_AAJA*

 * *LEXICON S_KARRII*


 * *LEXICON X_KARRII*



 * *LEXICON S_SPAALVAS* 



 * *LEXICON S_TUULAS* ! stem: ku^RVđi

 * *LEXICON X_TUULAS*

 * *LEXICON S_TUULAS_SG*

 * *LEXICON S_TUULAS_PL*

 * *LEXICON X_TUULAS_SG*


 * *LEXICON X_TUULAS_PL*



 * *LEXICON S_KAANDAS* stem: ka^RVnd

 * *LEXICON X_KAANDAS*

 * *LEXICON S_KAANDAS_SG*

 * *LEXICON S_KAANDAS_PL*

 * *LEXICON X_KAANDAS_SG*

 * *LEXICON X_KAANDAS_PL*




 * *LEXICON S_KUULMIS* stem kuovtt


 * *LEXICON S_CISSAAS* ! stem: cissá

 * *LEXICON X_CISSAAS* 

 * *LEXICON S_VUALAAS* 

 * *LEXICON X_VUALAAS* 


 * *LEXICON S_KUAVDAS*  WG or not? vuáŋŋáš not WG, kiärpáš WG. stem: suábbá


 * *LEXICON S_KUAVDAS_SG* 



 * *LEXICON S_KUAVDAS_PL* 

 * *LEXICON X_KUAVDAS_SG* 

 * *LEXICON S_ALGAAS* stem alga






 * *LEXICON S_KUADHUS* 

 * *LEXICON S_KAAHUS* 

 * *LEXICON X_KAAHUS_notILL* 

 * *LEXICON S_SUOLLUS* 

 * *LEXICON X_SUOLLUS* 



 * *LEXICON 4C_RASTAGAS* splitting in sg and pl


 ** *LEXICON 4C_RASTAGAS_SG*  the sg ones

 ** *LEXICON 4C_RASTAGAS_PL*  the pl ones


 ** *LEXICON X_RASTAGAS* sg cases


 * *LEXICON 3OPPUS* 

 * *LEXICON 3ALMAS* 

 * *LEXICON ALMAS_COMMON* 





 * *LEXICON C_SARVES* sarves, jalŋes 

 * *LEXICON C_SARVES_SG* 

 * *LEXICON C_SARVES_PL* 

 * *LEXICON X_SARVES_SG* 

 * *LEXICON X_SARVES_PL* 



### 4-syllabic



 * *LEXICON 4JOTOLAH*  splitting in sg pl



 * *LEXICON JOHTOLAH_OBL* common for N and A

 * *LEXICON 4JOTOLAH_PL* 


 * *LEXICON 4KAPULUH* 


 * *LEXICON 4KUBALOH* 


 * *LEXICON 4LAS_NOUN* stem = aanaarl



 * *LEXICON LAS_COMMON* 


 * *LEXICON X_LAS_COMMON_SG* normâl lâš:-lii-nouns and adjs


 * *LEXICON X_LAS_COMMON_PL* NOrmal plural and plural tantum cases, olympialiih


 * *LEXICON OLYMPIALIIH_PL* 



 * *LEXICON LAS_SUF* 


 * *LEXICON MUS_NOUN* type uáiváámus, aldemus



## Contracted stems


 * *LEXICON C_EIJE* 

 * *LEXICON C_LOHHEE* 

 * *LEXICON C_LOHHEE_SG* redirects to  C_TAHHEE, but adds NomAg

 * *LEXICON C_LOHHEE_PL* redirects to  C_TAHHEE, but adds NomAg


 * *LEXICON C_TAHHEE*

 * *LEXICON C_TAHHEE_SG* 

 * *LEXICON C_TAHHEE_PL* 

 * *LEXICON X_TAHHEE* ee-final contract, -ei instead of -ij not-nomen-agentis

 * *LEXICON X_TAHHEE_SG* ee-final contract, -ei instead of -ij

 * *LEXICON X_TAHHEE_PL* ee-final contract, plural forms


## Comitative plural variation

 * *LEXICON GUIN* is here to give -guin and the Use/NG -gijn.










## Derivations

TODO: Move derivation lexica here
















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









 * **LEXICON MiddleNouns**



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
 ** **NounNoPx ;** No flag, no Px
 ** **@P.Px.add@  NounPxKin ;** TODO: add a flag @P.Nom3Px.add@ when we know how it works
 ** **@P.Px.add@  NounPx ;** with a @P.Px.add@ flag, and with Px (= most nouns)

 * **LEXICON NounNoPx** move here the nouns not taking Px.

 * **LEXICON NounPxKin**For the moment, kinship words go like NounPx and need not be moved here.


## The standard list of noun stems

The nouns are reverse-sorted according to contlex,
and thereafter according to stem.



 * **LEXICON NounPx** here we put all normal nouns, as before

From corpus
From missinglist


































# Inari Saami numerals



































































 * **LEXICON ARABICCOMPOUNDS**   arabic as first part, 



 * **LEXICON NUMERALCOMPOUNDS**: numeral as first part: duhatjienat,














# Particles












 * **LEXICON Particle**


 ges pcle ; 
 kes pcle ; 














# Pronouns for Inari Saami




 * **LEXICON Pronoun**




## Personal pronouns


 * **LEXICON Personal**




 * **LEXICON perspronsg** with contlex K and not G (munge)


 * **LEXICON persprondu**


 * **LEXICON perspronpl**






Demonstrative pronouns


 * **LEXICON Demonstrative**




 * **LEXICON TIET**


 * **LEXICON TOT**


 * **LEXICON TUOT**




 * **LEXICON TI-TUO**


 * **LEXICON TA**


 * **LEXICON TYE**
















## Reflexive pronouns


 * **LEXICON Reflexive**


























## Reciprocal pronouns


 * **LEXICON Reciprocal**






























 * **LEXICON miiInterRel**




 * **LEXICON kiiInterRel**






 * **LEXICON MK** common for mii and kii


 * **LEXICON MK-long**


 * **LEXICON MK-short**


 * **LEXICON MK-low**








## Indefinite pronouns






























































 LEXICON SIAMMAS_PRON  without WG






















# Propernoun morphology for Inari Saami


TODO:
These are not in use:
ANAR DUBAI DUBAI-plc DUBAI-sur MAKI 


 * __LEXICON Proper_infix __ is the de Silva lexicon


 * **LEXICON FirstTag**


 * **LEXICON TEMPORARY**


 * __LEXICON V_TEMPORARY __


 * **LEXICON NIEMI**




 * **LEXICON ACCRA-Y-obj**


 * **LEXICON ACCRA-Y-ani**


 * **LEXICON ACCRA-Y-mal**






 * **LEXICON ACCRA-Y-sur**


 * **LEXICON ACCRA-Y-malsur**




 * **LEXICON ACCRA-Y-org**


 * __LEXICON ACCRA-Y_MWE-plc __


 * **LEXICON ACCRA-Y-plc**


 * **LEXICON ACCRA-Y-fem**


 * **LEXICON ACCRA** SM1








 * **LEXICON HANNOLA-plc**


 * **LEXICON HANNOLA-sur**


 * **LEXICON LONDON-orgplc**


 * **LEXICON LONDONBERN-plc**


 * **LEXICON GIRUNA-plc**












 LEXICON KIARUN  = 3KIELES






 * **LEXICON KREIKKA-fem** Ella


 * **LEXICON KREIKKA-mal** Mikko






























 * **LEXICON ERVASTI** 




 * **LEXICON EUROOP-plc**


 * **LEXICON EUROOP-mal**




 * **LEXICON EUROOP**










 * **LEXICON LONDON**


 * **LEXICON C-FI-NEN**


 * **LEXICON BERN**






 * **LEXICON ACCRA-LOAN-obj**
 * **LEXICON ACCRA-LOAN-org**
 * **LEXICON ACCRA-LOAN-plc**


 * **LEXICON ACCRA-ani**
 * **LEXICON ACCRA-femplc**


 * **LEXICON ACCRA-femsur**
 * **LEXICON ACCRA-fem**


 * **LEXICON ACCRA-malfem**


 * **LEXICON ACCRA-malsur**


 * **LEXICON ACCRA-mal**


 * **LEXICON ACCRA-objplc**


 * **LEXICON ACCRA-obj**
 * **LEXICON ACCRA-org**


 * __LEXICON ACCRA-A_MWE-plc __


 * **LEXICON ACCRA-A-org**


 * **LEXICON ACCRA-A-plc**


 * **LEXICON ACCRA-A-fem**


 * __LEXICON ACCRA_MWE-plc __




 * **LEXICON ACCRA-plc**


 * **LEXICON ACCRA-sur**














 * **LEXICON BISSAU-plc**


 * **LEXICON PERU-plc**




 * **LEXICON ERVASTI-plcmal**






 * **LEXICON ERVASTI-fem**




 * **LEXICON ERVASTI-mal**




 * **LEXICON ERVASTI-obj**


 * **LEXICON ERVASTI-org**


 * **LEXICON ERVASTI-plc**


 * **LEXICON ERVASTI-sur**




 * **LEXICON BERN-LOAN-obj**
 * **LEXICON BERN-LOAN-org**
 * **LEXICON BERN-LOAN-plc**


 * **LEXICON BERN-ani**




 * **LEXICON BERN-fem**


 * **LEXICON BERN-mal**


 * **LEXICON BERN-objsur**
 * **LEXICON BERN-obj**
 * **LEXICON BERN-orgsur**
 * **LEXICON BERN-org**




 * __LEXICON BERN_MWE-plc __


 * **LEXICON BERN-plc**


 * **LEXICON BERN-surmal**
 * **LEXICON BERN-sur**


 * **LEXICON OY-plc** ad hoc 


 * **LEXICON OY-sur** ad hoc 


 * **LEXICON OY-fem** ad hoc 


 * **LEXICON C-FI-NEN-plc**


 * **LEXICON C-FI-NEN-sur**


 * **LEXICON C-FI-NEN-org**


 * **LEXICON DUBAI**


 * **LEXICON DUBAI-mal**


 * **LEXICON DUBAI-fem**


 * **LEXICON DUBAI-sur**


 * **LEXICON DUBAI-obj**


 * __LEXICON DUBAI_MWE-plc __


 * **LEXICON DUBAI-plc**


 * **LEXICON DUBAI-org**


 * **LEXICON GATA-plc**


 * **LEXICON JOKULL-plc**


 * **LEXICON LONDON-LOAN-obj**
 * **LEXICON LONDON-LOAN-org**
 * **LEXICON LONDON-LOAN-plc**


 * **LEXICON LONDON-ani**
 * **LEXICON LONDON-atr**
 * **LEXICON LONDON-fem**


 * **LEXICON LONDON-malfem**


 * **LEXICON LONDON-malplc**


 * **LEXICON LONDON-malsur**


 * **LEXICON LONDON-mal**


 * **LEXICON LONDON-obj**


 * **LEXICON LONDON-orgsur**


 * **LEXICON LONDON-org**


 * __LEXICON LONDON_MWE-plc __




 * **LEXICON LONDON-plc**


 * **LEXICON LONDON-sur**




 * **LEXICON MAKI-plc**


 * **LEXICON MAKI-sur**




 * **LEXICON NYSTØ-LOAN-org**
 * **LEXICON NYSTØ-LOAN-plc**


 * **LEXICON NYSTØ-fem**


 * **LEXICON NYSTØ-mal**


 * **LEXICON NYSTØ-obj**
 * **LEXICON NYSTØ-org**


 * __LEXICON NYSTØ_MWE-plc __


 * **LEXICON NYSTØ-plc**


 * **LEXICON NYSTØ-sur**


 * **LEXICON NYSTØ**


 * **LEXICON PIPPI-LOAN-plc**


 * **LEXICON PIPPI-ani**
 * **LEXICON PIPPI-femsur**


 * **LEXICON PIPPI-fem**


 * **LEXICON PIPPI-malfem**


 * **LEXICON PIPPI-mal**


 * **LEXICON PIPPI-obj**
 * **LEXICON PIPPI-org**
 * __LEXICON PIPPI_MWE-plc __


 * **LEXICON PIPPI-plc**


 * **LEXICON PIPPI-sur**


 * **LEXICON RONDANE-LOAN**




 * **LEXICON RONDANE-SG-LOAN**


 * **LEXICON RONDANE-SG-plc**


 * **LEXICON RONDANE-fem**


 * **LEXICON RONDANE-mal**


 * **LEXICON RONDANE-obj**
 * **LEXICON RONDANE-org**
 * **LEXICON RONDANE-plc**


 * **LEXICON RONDANE-sur**


 * **LEXICON RONDANE**


 * **LEXICON AANAAR-plc 	**


 * **LEXICON AANAAR-mal 	**


 * **LEXICON AANAAR-fem 	**




 * **LEXICON AANAAR 	** Goes to EEMEED




 * **LEXICON JAVRI-plc** jävri, jeggi




 * **LEXICON JAVRI-mal** 


 * **LEXICON JAVRI-fem** 




 * **LEXICON JAVRI-ani** 


 * **LEXICON JAVRI** similar to AIGI, but only Sg. Some case forms should be deleted for names? Only difference to VUONA is Ess/Par. Are they in use for names?






 * **LEXICON JAAVRIH-plc**  JAVRI-plurals, e.g. Kähteejäävrih




 * **LEXICON JAAVRIH**  plurals for JAVRI


 * **LEXICON LYEME** 




 * **LEXICON VAARI-plc** 






 * **LEXICON VAARI** to SAAMI




 * **LEXICON VAARIH-plc**  VAARI-plurals




 * **LEXICON VAARIH** VAARI-plurals




 * **LEXICON CIELGI-plc** to CAACI




 * **LEXICON CIELGI** to CAACI














 * **LEXICON LUOBAL-plc** Similar to VEESKIR




 **LEXICON LUOBAL** Similar to VEESKIR




 * **LEXICON LUOBBALEH-plc** Plural to LUOBAL-plc


 * **LEXICON LUOBBALEH-org** Plural to LUOBAL-plc


 * **LEXICON LUOBBALEH-ani** Plural to LUOBAL-plc




 * **LEXICON LUOBBALEH** plural forms 




 * **LEXICON JUUHA-plc** similar to JUUHA




 * **LEXICON JUUHA** similar to JUUHA, stem ju




 * **LEXICON JOOVSEP-mal**.  


 * **LEXICON JOOVSEP-fem**.  




 * **LEXICON JOOVSEP** 


 * **LEXICON MAARIT-fem   similar to 3POTTAAK** 




 * **LEXICON MAARIT** 








 * **LEXICON VUONA-mal** similar to ALGA


 * **LEXICON VUONA-fem** similar to ALGA


 * **LEXICON VUONA-obj** similar to ALGA


 * **LEXICON VUONA-org** similar to ALGA


 * **LEXICON VUONA-ani** similar to ALGA




 * **LEXICON VUONA-plc** similar to ALGA




 * **LEXICON VUONA** similar to ALGA






 * __LEXICON VUONA_PL __ similar to ALGA_PL X_PUUVSAH






 **LEXICON PAALGIS** similar to KAARBIS


 __LEXICON Prop_h_PL-plc __  gives %>h etc. to vowel stems


 __LEXICON Prop_h_PL __  gives %>h etc. to vowel stems




 * **LEXICON SAVO-plc** similar to ALGA


 * **LEXICON SAVO** similar to ALGA




 * **LEXICON ANDARAS-mal** similar to KUNAGAS


 * **LEXICON ANDARAS-org** similar to KUNAGAS






 * **LEXICON ANDARAS-plc** similar to KUNAGAS




 * **LEXICON ANDARAS**  this is for loanwords without stem change, 3-syll. cons end




 * **LEXICON LUOHTA-plc**   


 * **LEXICON LUOHTA-mal**


 * **LEXICON LUOHTA-fem**




 * **LEXICON LUOHTA** similar to VADDU




 * **LEXICON LAADUH-plc** Plural to LUOHTA-plc




 * **LEXICON LAADUH** 




 * **LEXICON MOKKE-plc** similar to ALGE 


 * **LEXICON MOKKE-sur** similar to ALGE 


 * **LEXICON MOKKE-org** similar to ALGE 




 * **LEXICON MOKKE-mal** similar to ALGE 


 * **LEXICON MOKKE-ani** similar to ALGE 




 * **LEXICON MOKKE** similar to ALGE








 * **LEXICON UAIVAS-plc** similar to KUAVDAS. 




 * **LEXICON UAIVAS**   similar to KUAVDAS




 * **LEXICON SUALUI-plc** similar to PUASUI and KUAVSUI. 




 * **LEXICON SUALUI** similar to PUASUI and KUAVSUI




 * **LEXICON SUOLLUUH-plc** SUALUI-plc plurals 




 * **LEXICON SUOLLUUH** SUALUI-plc plurals 




 * **LEXICON ROTO-plc** similar to LAJO and X_LAJO 




 * **LEXICON ROTO** similar to LAJO and X_LAJO




 * **LEXICON KURRA-plc** similar to SOLLA




 * **LEXICON KURRA** similar to SOLLA




 * **LEXICON LASSA-plc** similar to FADDA




 * **LEXICON LASSA**  Similar to FADDA






 * **LEXICON SUANJU-ani** similar to LAAVU




 * **LEXICON SUANJU-plc** similar to LAAVU




 * **LEXICON SUANJU** similar to LAAVU




 * **LEXICON NYERI-plc** similar to KYELI




 * **LEXICON NYERI** similar to KYELI






 * **LEXICON POHE-ani** similar to VAHE




 * **LEXICON POHE-mal** similar to VAHE




 * **LEXICON POHE-plc** similar to VAHE




 * **LEXICON POHE** nearly similar to VAHE






 **LEXICON ORDO** similar to  KIRKKO 


 * **LEXICON EENA-plc** similar to EENNAM, except for sg nom, eenâ (a rare form)






 * **LEXICON EENNAM-plc** similar to EEMEED


 * **LEXICON EENNAM-mal** similar to EEMEED




 * **LEXICON EENNAM** similar to EEMEED




 * **LEXICON ENAMEH-plc** similar to EEMEED




 * **LEXICON ENAMEH**  plurals for EEMEED




 * **LEXICON CUAJA-fem** XXX check this


 * **LEXICON CUAJA-plc** similar to TAALU2




 * **LEXICON CUAJA** similar to TAALU2










 * **LEXICON KUOLBA-plc** similar to POOVSA




 * **LEXICON KUOLBA**  similar to POOVSA




 * **LEXICON KAAVA-plc** similar to KIELA




 * **LEXICON KAAVA** similar to KIELA 


 * **LEXICON NJOBZA-ani** similar to 2ALGA


 * **LEXICON NJOBZA-plc** similar to 2ALGA




 * **LEXICON NJOBZA** similar to 2ALGA




 * **LEXICON JAAVRAS-plc**  


 * **LEXICON JAAVRAS-mal**  




 * **LEXICON JAAVRAS**  


 **LEXICON SUOLLUS-plc** 




 **LEXICON SUOLLUS** 






 * **LEXICON JUUVAS-plc** 








 * **LEXICON VUONAS-plc** 


 * **LEXICON VUONAS-ani**


 * **LEXICON VUONAS-mal**




 * **LEXICON VUONAS**  




 * **LEXICON VUONIIH-plc** Plural to VUONAS-plc


 * **LEXICON VUONIIH** plural forms 




 * **LEXICON VAARAAS-plc**  




 * **LEXICON VAARAAS**  vá^RVrá






 * **LEXICON LAADUS-plc** 


 * **LEXICON LAADUS**  




 * **LEXICON KALDEE-plc**  Similar to TAHHEE


 * **LEXICON KALDEE-org**  Similar to TAHHEE




 * **LEXICON KALDEE** Similar to TAHHEE


 * __LEXICON KALDEE_PL-plc __  Similar to TAHHEE_PL


 * **LEXICON KALDEE-mal**


 * **LEXICON KALDEE-fem**


 * __LEXICON KALDEE_PL __ Similar to TAHHEE






 * **LEXICON TUPE-plc**  Similar to NJUNE




 * **LEXICON TUPE-ani**  Similar to NJUNE




 * **LEXICON TUPE**  Similar to NJUNE




 * **LEXICON VASE-plc**  Similar to VAHE




 * **LEXICON VASE**




 * **LEXICON NIJTTO-plc**  Similar to SIJVO




 * **LEXICON NIJTTO**




 * **LEXICON AALAAS-plc**  Similar to ALGAAS




 * **LEXICON AALAAS** 






 LEXICON KIETARUOTAS-plc   3RUOTAS


 LEXICON KIETARUOTAS  


 * **LEXICON SIALGAS-plc**  Similar to KUAVDAS


 * **LEXICON SIALGAS-mal**  Similar to KUAVDAS




 * **LEXICON SIALGAS**  












 * **LEXICON LADDUUH-plc**  Similar to SPALVAAS plural


 * **LEXICON LADDUUH**  


 * **LEXICON MAADIJ-plc**  Similar to AARRAN




 * **LEXICON MAADIJ**  Similar to AARRAN








 * **LEXICON IANUDAH-plc**  Similar to 4JOTOLAH
















 * **LEXICON 4KUNAGAS-org** 


 * __LEXICON SME_NAMES-org __ 




 * __LEXICON SME_NAMES-mal __ 


 * __LEXICON SME_NAMES-fem __


 * __LEXICON SME_NAMES-sur __


 * __LEXICON SME_NAMES-plc __




 * __LEXICON SME_NAMES_PERS __ Attr to North Saami person names


 * __LEXICON SME_NAMES __ temp. only Sg+Nom and Cmp to North Saami names




 * **LEXICON PERSNAME-CMP** e.g. Anttikandâ, Aanti-kyevtis


 * **LEXICON flagK** 














# Punctuation for Inari Saami




## Clause boundary symbols


 *    %,+CLB:%,     # ;  
 *    %.+CLB:%.     # ;  
 *  %.%.+CLB:%.%.   # ;  


## Single punctuation marks


 *  •+PUNCT:•   # ;  
 *  ●+PUNCT:●   # ;  
 *  ·+PUNCT:·   # ;  


## Paired punctuation marks


 *  «+PUNCT+LEFT:«7     # ; 
 *  »+PUNCT+RIGHT:»7    # ; 




# How to work with non-language-specific propernouns



The file smi-propernouns.lexc is copied from the common **gtcore** directory
and *shall not* be edited in the **langs** directory.




## General notes


The entries are tagged in gtcore for language, to satisfy the needs of the 
synthetic speech project.


## Language-specific notes
### This file (smi-propernouns.lexc) when applied to sme




This file was originally written for sme, and is copied directly to
the langs/sme catalogue without modification.


Documenting (parts of) the lexicon structure for sme:


|   Final syll.  | stressed    | unstressed
| --- | --- | --- 
|  final X+i/j   |  DUBAI (V+j) | PIPPI (C+i) 
|  other final V |  NYSTØ‡      | ACCRA       


 ‡) Also -i- without a preceeding long vowel, like in **DUBAI**.






### This file (smi-propernouns.lexc) when applied to sma, smj and smn.


For sma, smj and smn, there is a script, `src/scripts/smi-sma-conversion.pl`
changing the lexicon names from sme-style to sma/smj/smn-style. The resulting
file is `src/fst/stems/smi-sma-propernouns.lexc`, with the content
of this file following the text *Dump from SMI*. This is governed in 
*src/fst/Makefile.am*




### Modifications for sma
**MAKI** er for finske i-finale navn hvor sørsamisk og lulesamisk følger ulike
mønster. PIPPi i smj, ACCRA i sme og sma.


### Modifications for sma
**BETFAGE** er spesifikk for lulesamisk, og er identisk med ACCRA for dei andre
samiske språka. BETFAGE skal brukast ved e-finale ACCRA-ord.


### Modifications for smn


See the perl script


----


The beginning of this file (*smi-propernouns.lexc*) looks as follows 
(and thereafter 31000 similar lines follow):




 A-ha+OLang/NOB:A-ha ACCRA-org ;			     \\
 Aabakken+OLang/NOB:Aa#bakken9 LONDON-sur ;   \\
 Aabel+OLang/NOB:Aabel LONDON-mal ;		     \\
 Aabenraa+OLang/NOB:Aabenraa NYSTØ-sur ;	     \\






## How to work


Setting: A non-Inari Sámi name is missing in the FST.


1. Check whether the name (*Hiroshima*) is found in the src/fst/generated-files/ catalogue.
    1. if it is not, and is a non-smn name, it probably should be in the general file. \\
   Add it to gtcore/giella-shared/smi/src/fst/stems/smi-propernouns.lexc
    1. if it is in the generated cataloge, check wheter it has the contlex you want it to have \\
   if it does, it should work, so debug. \\
   if it does not, add a line for the name in question to the file \\
   src/scripts/smi-smn-conversion.pl (use existing lines as documentation).

   







# Propernoun lexicon, Inari Sámi specific names 


 **LEXICON Prefix-Proper**


First part of complex names

 * Alemus FirstTag ;     
 * Cuávis FirstTag ;     


 **LEXICON ProperNoun-smn**
Ordinary names


Family names



Pet names



Fictional names - - probably no point of adding the fem/mal/ani tags



Object names or organizations






Geographical names
















# Subjunctions




 LEXICON Subjunction 



# Inflection lexica for Inari Saami verbs

Order of triggers:
```
SV|ÁE|ÁI  EA|SC  FCD  WG|CSH  CLEN  VHIGH|VBACK  RVSH|RLEN  SLEN|SVSH  SVLOW
```


## Overview

1. Auxiliaries
    1. NEG
    1. LEDE
1. 2-syllabic: 2SYLL_ etc. (classified according to infinitive suffix)
1. 3-syllabic
1. 4-syllabic
1. Unclassified: verbstems, 3v, 4v

### The lexica

*Twosyllabic lexica*

* 2SYLL_AASSAD - aassâđ ääss
    - Inf:â%>đ K ;
    - Ind+Prs+Sg3:á^CSH^VHIGH áásá,
    - Ind+Prs+Pl3:i^CSH%>h ääsih, rvow like Inf,
    - ConNeg:â^WG rvow like Inf,
    - Ind+Prt+Sg1:i^VBACK%>m aassim
* 2SYLL_MOONNAD - moonnâđ ma^RVnn
    - Inf:â^VHIGH^RLEN%>đ (functions also for ääss)
    - Ind+Prs+Sg3:á^CSH mana,
    - Ind+Prs+Pl3:e^CSH%>h maneh, rvow like Sg3
    - ConNeg:â^WG^VHIGH^RLEN rvow like Inf
    - Ind+Prt+Sg1:i^VHIGH^RLEN%>m moonnim
* 2SYLL_TOOLLAD - toollâđ,  tuáll
    - Inf:â^VBACK%>đ
    - Ind+Prs+Sg3: tuálá, á^CSH
    - Ind+Prs+Pl3:i^CSH%>h tuálih, rvow like Sg3
    - ConNeg:â^WG^VHIGH^RLEN rvow like Sg3
    - Prt+Sg1:i^VBACK^RLEN%>m toollim
* 2SYLL_TOOHAD - toohâđ, ta^RVh^RC
    - Inf: = 2SYLL_MOONNAD
    - Ind+Prs+Sg3:á^CSH taha,
    - Ind+Prs+Pl3:e^CSH%>h taheh, rvow like Sg3
    - Ind+Prt+Sg3:â^WG^VHIGH^RLEN%>i  juuvâi
    - ConNeg: rvow like Inf = 2SYLL_MOONNAD
    - Ind+Prt+Sg1: toohim = 2SYLL_MOONNAD
* 2SYLL_VIISSAD - viiššâđ, vi^RVšš
    - Inf:â^VHIGH^RLEN%>đ
    - Ind+Prs+Sg3:á^CSH višá,
    - Ind+Prs+Pl3:e^CSH^RVSH%>h, rvow like Sg3 višeh
    - ConNeg:â^WG^RLEN viišâ, rvow like Inf
    - Ind+Prt+Sg1:i^RLEN%>m viiššim
* 2SYLL_KIESSAD - kiessâđ, kiess
    - Inf:â%>đ
    - Ind+Prs+Sg3:á^CSH^VHIGH kiäsá,
    - Ind+Prs+Pl3:i^CSH%>h kiesih
    - ConNeg:â^WG rvow like Inf kiesâ
    - Ind+Prt+Sg1:i%>m  kiessim
* 2SYLL_VUOLLAD - vuollâđ, vuoll OBS: not Prs+Pl3 vowel like the others
    - Inf:â%>đ
    - Ind+Prs+Sg3:á^CSH^VHIGH vuálá,
    - Ind+Prs+Pl3:i^CSH%>h  vyelih
    - ConNeg:â^WG rvow like Inf vuolâ
    - Ind+Prt+Sg1:i%>m vuollim
* 2SYLL_ETTAD ettâđ e^RVtt4
    - Inf:â^VHIGH%>đ
    - Ind+Prs+Sg3:á^CSH^VHIGH  iätá
    - Ind+Prs+Pl3:e^CSH%>h
    - ConNeg:â^WG^VHIGH^RLEN
    - Ind+Prt+Sg1:i%>m
* 2SYLL_KALGAD kalgâđ
    - Inf:
    - Ind+Prs+Sg3:  kálgá
    - Ind+Prs+Pl3: kälgih
    - ConNeg: kaalgâ
    - Ind+Prt+Sg1: kalgim
* 2SYLL_KAVNAD  as ETTAD but with VBACK kavnâđ kä^RVvn
    - Inf:
    - Ind+Prs+Sg3: kávná
    - Ind+Prs+Pl3: kävnih
    - ConNeg: kaavnâ
    - Ind+Prt+Sg1: kavnim
* 2SYLL_COGGAD kolgâđ ka^RVlg
    - Inf:
    - Ind+Prs+Sg3: kalga
    - Ind+Prs+Pl3: kalgeh
    - ConNeg: koolgâ
    - Ind+Prt+Sg1: kolgim
* 2SYLL_KULGAD kulgâđ ko^RVlg
    - Inf:
    - Ind+Prs+Sg3: kolgá
    - Ind+Prs+Pl3: kolgeh
    - ConNeg: kuulgâ
    - Ind+Prt+Sg1: kulgim
* 2SYLL_OPPAD oppâđ uápp
    - Inf:
    - Ind+Prs+Sg3: uáppá
    - Ind+Prs+Pl3: uáppih
    - ConNeg: oopâ
    - Ind+Prt+Sg1: oppim
* 2SYLL_SODDAD šoddâđ ša^RVdd
    - Inf:
    - Ind+Prs+Sg3: šadda
    - Ind+Prs+Pl3: šaddeh
    - ConNeg: šoodâ
    - Ind+Prt+Sg1: šoddim
* 2SYLL_POHTED pohteđ:po5^RVht
    - poovtám RLEN
    - pohtá
    - pohteh
    - povte
* 2SYLL_PIHTED pihteđ pi^RVht
    - pivtám
    - pihtá
    - pihteh
    - pivte
* 2SYLL_KALVED kalveđ ka^RVlv
    - kalvam
    - kalva
    - kalveh
    - kalve
* 2SYLL_JOTTEED
* 2SYLL_ID celkkiđ
* 2SYLL_KASTID
* 2SYLL_EELLID: iälám iälá eelih ij ele
* 2SYLL_KEESSID
* 2SYLL_CAALLID
* 2SYLL_PAACCID pääcciđ
    - Ind+Prs+Sg1: páásám
    - Ind+Prs+Sg3: páácá
    - Ind+Prs+Pl3: pääcih NB! pääccih?
* 2SYLL_UADDID
    - Ind+Prs+Sg1: čálám
    - Ind+Prs+Sg3: čáálá
    - Ind+Prs+Pl3: čäälih NB! čäällih?
* 2SYLL_TIETTID
* 2SYLL_UADDID
* 2SYLL_VYEIJID
* 2SYLL_VYELGID like VYEIJID, but -i for reduced forms
* JUAVVID

* 2SYLL_OD
* 2SYLL_OOD
    - Prt+Du1 njivvoim WG CLEN
* 2SYLL_ORROOD  like 2SYLL_OOD, but different triggers here and there
    - Prt+Du1 oroim WG

* 2SYLL_UD
    - Inf: ruábbuđ
    - Ind+Prs+Sg3: ruábbu
    - Ind+Prs+Pl3: ruábbuh
    - ConNeg: ruábu
    - Ind+Prt+Sg1: ruábbum
* 2SYLL_KUARRUD  long dipht => -o
    - Inf: kuárruđ
    - Ind+Prs+Sg3: kuáru
    - Ind+Prs+Pl3: kuáruh
    - ConNeg: kuáru, kuáro
    - Ind+Prt+Sg1: koorrum
* 2SYLL_UAZZUD
    - Inf: uážžuđ
    - Ind+Prs+Sg3: uážžu
    - Ind+Prs+Pl3: uážžuh
    - ConNeg: uážu
    - Ind+Prt+Sg1: ožžum

### Threesyllabic
* 3_LEKKASID (no stem change, but going to ODDLEX)
    - Sg1: %>âm, Sg3: ^CLEN^RLEN (note: ODDLEX :-(
* 3_CIELATTID (stem-final tt shortening) cielâttiđ: cielât Length change in stem: Consonant change only
    - Sg1: %>âm, Sg3: ^CLEN^RLEN
* 3_VYEJETTID (2syll vow short in Inf, long in Sg3, 1st syll V lengthening) vyejettiđ vyejeet
    - Sg1: %>âm, Sg3: ^RLEN^SLEN
* 3_PUTESTID (cns and vow lengthening) putestiđ: putteest Length change in stem: Short V in Inf (before V)
    - Sg1: %>âm, Sg3: ^CLEN^SLEN
* 3_COKKIITTID (stem-final tt shortening + 2syll vow shortening cokkiittiđ cokkit.
    - Sg1: %>âm, Sg3: ^SVSH
    - difference in negation + Action Ess, Loc.. compared to 3_COKKIITTID)
    - Length change in stem: Long V in Inf (before C#).
* 3_KUIKETTID = 3_LEKKASID
* 3_MERIDID
    - Sg1: %>âm, Sg3: ^CLEN^RLEN
* 3_ADELID
    - Sg1: %>âm, Sg3: ^CLEN

### 4-syllabic
* 4v
* 4_ADELISTID
* 4_KAVNATTATTAD
* 4_TUHHID

### Contracted
* Contracted j-stems
    - C_COKKAD (áj-contracted)
        - Ind Prs Pl3 čokkájeh
    - C_PALLAD (aj-contracted)
    - C_TUHHID (ej-contracted)
    - C_RAMMUD (oj-contracted)
* Contracted v-stems
    - C_TABAHTUD (Sg3 -uvá)
    - C_MERIDUD (Sg3 uvvoo)

Unclassified verbs
* verbstem (no info)

A note on morphophonology
The consonant gradation setup for verbs is to a certain extent different
from the one for nouns, namely:
...



# THE LEXICA THEMSELVES


## Auxiliaries

 * **LEXICON NEG** = the negation verb

\\
 * **LEXICON LEDE** = The copula









## The regular verbs
### Order of lexica
Within each lexicon, the suffixes are ordered as follows:
1. Infinites
1. Indicative
1. Conditional
1. Potential
1. Derivations


## Even-syllable stems

### AD verbs
### Partial paradigms

 * __LEXICON 2SYLL_HAAHAD_IV  __
 * __LEXICON 2SYLL_HAAHAD_TV  __

 * __LEXICON 2SYLL_HAAHAD_V  __

 * __LEXICON EVEN_IND_HAAHAD __


 * __LEXICON EVEN_IMPRT_HAAHAD __


 * __LEXICON 2SYLL_AASSAD __  48 verbs
 * __LEXICON 2SYLL_AASSAD_IV  __
 * __LEXICON 2SYLL_AASSAD_TV  __

 * __LEXICON 2SYLL_AASSAD_V  __


 * __LEXICON VINFINITES_AASSAD __




 * __LEXICON EVEN_IND_AASSAD __


 * __LEXICON EVEN_POT_AASSAD __

 * __LEXICON EVEN_IMPRT_AASSAD __


### Full paradigms

 * __LEXICON 2SYLL_VIEZZAD __
 * __LEXICON 2SYLL_VIEZZAD_IV __
 * __LEXICON 2SYLL_VIEZZAD_TV __

 * __LEXICON 2SYLL_VIEZZAD_V  __ 6 verbs


 ** __LEXICON VINFINITES_VIEZZAD __




 ** __LEXICON EVEN_IND_PRS_VIEZZAD __

 ** __LEXICON EVEN_IND_PRT_VIEZZAD __

 * __LEXICON EVEN_POT_VIEZZAD __

 ** __LEXICON EVEN_IMPRT_VIEZZAD __




 * __LEXICON 2SYLL_SPELLAD_V  __ Similar to 2SYLL_ETTAD, but less CSH, don't know yet how much. 20 verbs



 ** __LEXICON VINFINITES_SPELLAD __





 ** __LEXICON EVEN_IND_PRS_SPELLAD  __

 ** __LEXICON EVEN_IND_PRT_SPELLAD __







 * __LEXICON 2SYLL_ETTAD_V  __ 19 verbs


 ** __LEXICON VINFINITES_ETTAD __



 ** __LEXICON EVEN_IND_PRS_ETTAD __


 ** __LEXICON EVEN_IMPRT_ETTAD __

 ** __LEXICON EVEN_POT_ETTAD __



 * __LEXICON 2SYLL_KAVNAD_V  __ as ETTAD but with VBACK, only RV ä in stem tothis lexicon 57 verbs



 ** __LEXICON VINFINITES_KAVNAD   __





 ** __LEXICON EVEN_IND_KAVNAD  __


 ** __LEXICON EVEN_POT_KAVNAD __

 ** __LEXICON EVEN_IMPRT_KAVNAD  __



 * __LEXICON 2SYLL_KALGAD_TV  __ Only one verb: kalgâđ Ind+Prs+Pl3 kälgih, vs. kävneh 2SYLL_KAVNAD

 ** __LEXICON VINFINITES_KALGAD  __



 ** __LEXICON EVEN_IND_KALGAD  __


 ** __LEXICON EVEN_POT_KALGAD __

 ** __LEXICON EVEN_IMPRT_KALGAD  __





 * __LEXICON 2SYLL_COGGAD_V  __ 18 verbs

 ** __LEXICON VINFINITES_COGGAD  __



 ** __LEXICON EVEN_IND_COGGAD  __


 ** __LEXICON EVEN_COND_COGGAD __

 ** __LEXICON EVEN_POT_COGGAD __

 ** __LEXICON EVEN_IMPRT_COGGAD __



 * __LEXICON 2SYLL_KULGAD_V   __ 55 verbs

Distinct from SODDAD with short vowel in past tense (du)
Turns out it was not distinct after all. Preper for fusing KULGAD and SODDAD






 * __LEXICON 2SYLL_SODDAD_V  __ 6 verbs



 ** __LEXICON VINFINITES_SODDAD  __



 ** __LEXICON EVEN_PRS_SODDAD __

 ** __LEXICON EVEN_PRT_SODDAD __


 ** __LEXICON EVEN_POT_SODDAD __

 ** __LEXICON EVEN_IMPRT_SODDAD __



 * __LEXICON 2SYLL_TOOLLAD_V  __ 12 verbs



 ** __LEXICON VINFINITES_TOOLLAD  __



 ** __LEXICON EVEN_IND_TOOLLAD  __


 ** __LEXICON EVEN_POT_TOOLLAD __

 ** __LEXICON EVEN_IMPRT_TOOLLAD  __



 * __LEXICON 2SYLL_OPPAD_V  __ 12 verbs

suggested stem = tuáll
Impossible to see the differences in diphtong length


 ** __LEXICON VINFINITES_OPPAD   __



 ** __LEXICON EVEN_IND_OPPAD   __


 ** __LEXICON EVEN_POT_OPPAD __

 ** __LEXICON EVEN_IMPRT_OPPAD   __





 * __LEXICON 2SYLL_TOOHAD_V  __ 38 verbs


 ** __LEXICON EVEN_IND_TOOHAD  __



 ** __LEXICON EVEN_POT_TOOHAD __


 * __LEXICON 2SYLL_MOONNAD_V  __ 24 verbs


 ** __LEXICON VINFINITES_MOONNAD  __

nuuvâ, iige noovâ



 ** __LEXICON EVEN_IND_MOONNAD  __


 ** __LEXICON EVEN_IMPRT_MOONNAD  __

 ** __LEXICON EVEN_POT_MOONNAD __


 * __LEXICON 2SYLL_VIIRRAD_V  __ 20 verbs

 ** __LEXICON VINFINITES_VIIRRAD  __ OK



 ** __LEXICON EVEN_IND_VIIRRAD   __


 ** __LEXICON EVEN_POT_VIIRRAD __

 ** __LEXICON EVEN_IMPRT_VIIRRAD   __





 * __LEXICON 2SYLL_VIISSAD_V  __ 20 verbs

 ** __LEXICON VINFINITES_VIISSAD  __



 ** __LEXICON EVEN_IND_VIISSAD   __


 ** __LEXICON EVEN_POT_VIISSAD __

 ** __LEXICON EVEN_IMPRT_VIISSAD   __



 * __LEXICON 2SYLL_CIEPPAD_V  __ like 2SYLL_KIESSAD but less CSH 4 verbs. 34 verbs

 ** __LEXICON EVEN_IND_PRS_CIEPPAD    __



 * __LEXICON 2SYLL_KIESSAD_V  __








 * __LEXICON 2SYLL_VUOLLAD_V  __ ye to ua vyešš 71 verbs

 ** __LEXICON VINFINITES_2SYLL_VUOLLAD  __



 ** __LEXICON EVEN_IND_2SYLL_VUOLLAD __


 ** __LEXICON EVEN_POT_2SYLL_VUOLLAD __

 ** __LEXICON EVEN_IMPRT_2SYLL_VUOLLAD __


 * __LEXICON 2SYLL_LUOIKKAD_TV  __ passive, no Der/l, otherw like ruottad, 3 verbs


 * __LEXICON 2SYLL_RUOTTAD_V  __ no passive, but Der/l. 4 verbs

 * __LEXICON 2SYLL_RUOTTAD_LUOIKKAD  __ no passive

 ** __LEXICON VINFINITES_2SYLL_RUOTTAD  __



 ** __LEXICON EVEN_IND_2SYLL_RUOTTAD  __


 ** __LEXICON EVEN_POT_2SYLL_RUOTTAD __

 ** __LEXICON EVEN_IMPRT_2SYLL_RUOTTAD __


### ED verbs


 * __LEXICON 2SYLL_KALVED_V  __ kalveđ without RLEN Prs+Sg1. 8 verbs


 * __LEXICON 2SYLL_POHTED_V  __ with RLEN Prs+Sg1. 31 verbs

 ** __LEXICON VINFINITES_ED   __



 ** __LEXICON EVEN_IND_ED __ kalveđ


 ** __LEXICON EVEN_POT_POHTED __

 ** __LEXICON EVEN_POT_ED __ ... this one to be relocated to _ED


 ** __LEXICON EVEN_IMPRT_ED  __



 * __LEXICON 2SYLL_PIHTED_V  __  82 verbs

 ** __LEXICON VINFINITES_PIHTED   __



 ** __LEXICON EVEN_IND_PIHTED   __


 ** __LEXICON EVEN_POT_PIHTED __

 ** __LEXICON EVEN_IMPRT_PIHTED   __

### EED verbs


 ** __LEXICON 2SYLL_JOTTEED_V  __ . 27 verbs

 ** __LEXICON VINFINITES_EED   __



 ** __LEXICON EVEN_IND_EED   __


 ** __LEXICON EVEN_POT_EED __

 ** __LEXICON EVEN_IMPRT_EED  __


 ** __LEXICON 2SYLL_PAHHEED_V  __ yaml anneed. 2 verbs


 ** __LEXICON VINFINITES_PAHHEED  __



 ** __LEXICON EVEN_IND_PAHHEED   __



 ** __LEXICON EVEN_IMPRT_PAHHEED   __


### ID verbs


 * __LEXICON 2SYLL_UADDID_V  __ 3 verbs

 ** __LEXICON VINFINITES_UADDID   __



 ** __LEXICON EVEN_IND_UADDID   __


 ** __LEXICON EVEN_POT_UADDID __

 ** __LEXICON EVEN_IMPRT_UADDID   __

 * __LEXICON 2SYLL_UAINID_TV  __  5 verbs

 ** __LEXICON VINFINITES_UAINID  __



 ** __LEXICON EVEN_IND_UAINID   __


 ** __LEXICON EVEN_POT_UAINID __

 ** __LEXICON EVEN_IMPRT_UAINID   __


 * __LEXICON 2SYLL_CAALLID __  7 verbs

 * __LEXICON 2SYLL_CAALLID_V  __ 7 verbs

 ** __LEXICON VINFINITES_CAALLID   __




 ** __LEXICON EVEN_IND_CAALLID   __


 ** __LEXICON EVEN_POT_CAALLID __

 ** __LEXICON EVEN_IMPRT_CAALLID __

as 2SYLL_ID, but only 3 person




 ** __LEXICON VINFINITES_ID  __




 ** __LEXICON EVEN_IND_ID  __





 * __LEXICON 2SYLL_EELLID_V  __ iälám iälá eelih ij ele. 4 verbs

 ** __LEXICON VINFINITES_EELLID !  __



 ** __LEXICON EVEN_IND_EELLID __


 ** __LEXICON EVEN_IMPRT_EELLID __




 * __LEXICON 2SYLL_KEESSID_V  __ like EELLID except from Prs+ConNeg. 4 verbs

 ** __LEXICON VINFINITES_KEESSID __




 ** __LEXICON EVEN_IND_KEESSID  __


 ** __LEXICON EVEN_IMPRT_KEESSID __



 * __LEXICON 2SYLL_PAACCID_V  __ 5 verbs

 ** __LEXICON VINFINITES_PAACCID __




 ** __LEXICON EVEN_IND_PAACCID __


 ** __LEXICON EVEN_IMPRT_PAACCID __

 ** __LEXICON EVEN_POT_PAACCID __



 * __LEXICON 2SYLL_VYELGID_V  __ like VYEIJID, but -i for reduced forms. 7 verbs



 ** __LEXICON EVEN_IND_VYELGID  __




 * __LEXICON 2SYLL_VYEIJID_V  __  5 verbs



 ** __LEXICON EVEN_IND_VYEIJID __





 * __LEXICON 2SYLL_JYEHID_V  __  5 verbs


 ** __LEXICON EVEN_IND_JYEHID __



 * __LEXICON 2SYLL_VYEIJID_VYELGID_COMMON  __


 ** __LEXICON VINFINITES_VYEIJID_VYELGID  __



 ** __LEXICON EVEN_POT_VYEIJID __

 ** __LEXICON EVEN_IMPRT_VYEIJID __



 * __LEXICON 2SYLL_KASTID_V  __ 9 verbs

 ** __LEXICON VINFINITES_KASTID  __ kä^RVst





 ** __LEXICON EVEN_IND_KASTID __


 ** __LEXICON EVEN_POT_KASTID __

 ** __LEXICON EVEN_IMPRT_KASTID  __



 * __LEXICON 2SYLL_TIETTID_V  __ only 1 verb: tiettiđ. Ind+Prs+ConNeg: tieđe vs. Ind+Prs+ConNeg: kieldi 2SYLL_ID

 ** __LEXICON VINFINITES_TIETTID __




 ** __LEXICON EVEN_IND_TIETTID __


 ** __LEXICON EVEN_POT_TIETTID __

 ** __LEXICON EVEN_IMPRT_TIETTID __


 ** __LEXICON EVEN_POT_ID __



 ** __LEXICON EVEN_IMPRT_ID __



### OD verbs


 * __LEXICON 2SYLL_HILGOD_V  __ this as the only OD verb(s) with passive 7 verbs


 * __LEXICON 2SYLL_OD_V  __ OD paradigm, no passive here. 130 verbs


 ** __LEXICON VINFINITES_OD __






 ** __LEXICON EVEN_POT_OD __

 ** __LEXICON EVEN_IMPRT_OD __



### OOD verbs

 * __LEXICON 2SYLL_OOD_V  __ 31 verbs

 ** __LEXICON VINFINITES_OOD __



 ** __LEXICON EVEN_IND_OOD  __


 ** __LEXICON EVEN_POT_OOD __

 ** __LEXICON EVEN_IMPRT_OOD __



 * __LEXICON 2SYLL_ORROOD_V  __ like njihhood, but different triggers here and there. 24 verbs





 ** __LEXICON EVEN_IND_ORROOD   __


 ** __LEXICON EVEN_POT_ORROOD __

 ** __LEXICON EVEN_IMPRT_ORROOD  __


### UD verbs


 * __LEXICON 2SYLL_KUARRUD_V  __ long dipht => -o . 56 verbs

 ** __LEXICON VINFINITES_KUARRUD __





 * __LEXICON EVEN_IND_KUARRUD __


 * __LEXICON EVEN_POT_KUARRUD __

 ** __LEXICON EVEN_IMPRT_KUARRUD  __




 * __LEXICON 2SYLL_UD_V  __ 175 verbs


 ** __LEXICON VINFINITES_UD __



 ** __LEXICON EVEN_IND_UD __


 ** __LEXICON EVEN_POT_UD __

 ** __LEXICON EVEN_IMPRT_UD __


 * __LEXICON 2SYLL_UAZZUD_V  __ 59 verbs

 ** __LEXICON VINFINITES_UAZZUD __


 ** __LEXICON EVEN_IND_UAZZUD __


 ** __LEXICON EVEN_POT_UAZZUD __

 ** __LEXICON EVEN_IMPRT_UAZZUD __

###  Common even lexica

 * __LEXICON EVEN_COND __






## Odd-syllable stems


 * __LEXICON 3_KUIKETTID_V __ this has lengthening of ^RV for Cns-initial suff


 * __LEXICON 3_LEKKASID_V  __ SM51, no length change in stem



 * __LEXICON 3_CIELATTID_V  __ SM57, consonant and vowel change





 * __LEXICON 3_VYEJETTID_V  __ SM53. short V in Inf





 ** __LEXICON ODD_PRS_VYEJETTID  __

 ** __LEXICON ODD_IMPRT_VYEJETTID  __



 * __LEXICON ADELID_TV  __ only for adeliđ, to get adde as default ConNeg, others are 3_ADELID



 * __LEXICON 3_ADELID_V  __ SM53. short V in Inf

 ** __LEXICON ADELID_COMMON __


 ** __LEXICON ODD_VINFINITES_ADELID __

 ** __LEXICON ODD_PRS_ADELID __



 * __LEXICON 3_MERIDID_V  __ SM53. short V in Inf



 ** __LEXICON ODD_INFINITES_MERIDID __



 * __LEXICON 3_PUTESTID_V  __ SM53. short V in Inf




 ** __LEXICON ODD_PRS_PUTESTID  __



 * __LEXICON 3_COKKIITTID_V  __ SM52, long V in Inf


 ** __LEXICON ODD_VINFINITES_COKKIITTID  __

 ** __LEXICON ODD_PRS_COKKIITTID  __



### Common lexicons inflecting odd-syllabic verbs



 * __LEXICON ODD_INFINITES   __




 * __LEXICON ODD_PRS_CONNEG    __

 * __LEXICON ODD_PRS_CONNEG_rlen    __




 * __LEXICON ODD_PRS   __

 * __LEXICON ODD_PRT  __

 * __LEXICON ODD_COND   __

 * __LEXICON ODD_POT   __


 * __LEXICON ODD_IMPRT   __

 * __LEXICON ODD_IMPRT_REST   __



 * __LEXICON ODD_DU_ERRORTH  __



## Derivational extentions to 3-syllabic verbs

 * __LEXICON 3_DERIVED_LOW  __ lexicon to be determined

 * __LEXICON 3_DERIVED  __ lexicon

 * __LEXICON 3_DERIVED_SLEN  __ lexicon


 * __LEXICON 3_DERIVED_REST  __ lexicon












 * __LEXICON 3_DERIVED_CLEN  __ lexicon

















 * __LEXICON 3_DERIVED_VBACK   __















## Contracted stems

###  j stems



 * __LEXICON C_COKKAD_V  __






 ** __LEXICON C_PASS_LONG  __









 * __LEXICON C_PALLAD_V __






 * __LEXICON C_HOLHOD __







 * __LEXICON C_TUHHID_V __








 * __LEXICON C_SLOOVID __











 ** __LEXICON C_PASS_SH_RVSH __ shortens vowel











 ** __LEXICON C_PASS_SH_RLEN __ does not shorten vowel










 ** __LEXICON C_PASS_SH_ALTERNATE __ toohum: does not shorten vowel, does not lengthen consonant, this is a Use/NG lexicon











 * __LEXICON C_RAMMUD_V __ does not shorten vowel







 ** __LEXICON C_RAMMUD_POT  __ umify this and next


 * __LEXICON CONTR_POT __ unify this and previous










 ** __LEXICON C_PASS_SH_POHTED  __ shortens long vow in certain forms

 ** __LEXICON C_PASS_SH  __ shortens long vow in certain forms

 ** __LEXICON C_PASS_SH_COMMON  __ shortens long vow in certain forms







###  v stems



 * __LEXICON C_TABAHTUD_V  __ Sg3 -vá






















## 4-syllabic


 * __LEXICON 4SYLL_KYETTID_V  __





 ** __LEXICON EVEN_IND_KYETTID   __


 ** __LEXICON KYETTID_POT_ID  __



 * __LEXICON 4_ADELISTID_V   __










 * __LEXICON 4_ITTID_V   __ temporarilly, we need a yaml for this









































# Other lexicq
## Case lexica

 * **LEXICON VABESS** to handle Abessive variation, hánnáá, hennáá, hinnáá.
\\
 * **LEXICON VGEN** flag for VGen

## Derivation lexica

 * __LEXICON DER_MAS __ 
\\
 * **LEXICON IJJE** 
\\
 * __LEXICON IJJE_PRSPRC __ 
\\
 * **LEXICON NOMACT** for -náál suffixation.


# Flag section

 __LEXICON FLAG_3HUKSIM  __ should not be disallowed by ENDLEX @D.NeedNoun.ON@

 __LEXICON FLAG_3KIEDAVUSSAM __ should not be disallowed by ENDLEX @D.NeedNoun.ON@

 __LEXICON FLAG_CTAHHEE __ should not be disallowed by ENDLEX @D.NeedNoun.ON@







 __LEXICON FLAG_K __ should not be disallowed by ENDLEX @D.NeedNoun.ON@


















# Verb stems


## Overview
* Reference to VGen 
* Auxiliaries
    - NEG
    - LEDE
* 2-syllabic: 2SYLL_ etc. (classified according to infinitive suffix)
* 3-syllabic
* 4-syllabic
* Unclassified: verbstems, 3v, 4v

## The lexica

### Twosyllabic

* 2SYLL_AASSAD - aassâđ ääss
    - Inf:â%>đ K 
    - Ind+Prs+Sg3:á^EA^CSH áásá, 
    - Ind+Prs+Pl3:i^CSH%>h ääsih, rvow like Inf, 
    - ConNeg:â^WG rvow like Inf, 
    - Ind+Prt+Sg1:i^VBACK%>m aassim
* 2SYLL_MOONNAD - moonnâđ ma^RVnn
    - Inf:â^VHIGH^RLEN%>đ (functions also for ääss)
    - Ind+Prs+Sg3:á^CSH mana, 
    - Ind+Prs+Pl3:e^CSH%>h maneh, rvow like Sg3 
    - ConNeg:â^WG^VHIGH^RLEN rvow like Inf 
    - Ind+Prt+Sg1:i^VHIGH^RLEN%>m moonnim
* 2SYLL_TOOLLAD - toollâđ, tuáll
    - Inf:â^VBACK%>đ
    - Ind+Prs+Sg3: tuálá, á^CSH
    - Ind+Prs+Pl3:i^CSH%>h tuálih, rvow like Sg3 
    - ConNeg:â^WG^VHIGH^RLEN rvow like Sg3 
    - Prt+Sg1:i^VBACK^RLEN%>m toollim
* 2SYLL_TOOHAD - toohâđ, ta^RVh^RC
    - Inf: = 2SYLL_MOONNAD
    - Ind+Prs+Sg3:á^CSH taha, 
    - Ind+Prs+Pl3:e^CSH%>h taheh, rvow like Sg3 
    - Ind+Prt+Sg3:â^WG^VHIGH^RLEN%>i juuvâi
    - ConNeg: rvow like Inf = 2SYLL_MOONNAD
    - Ind+Prt+Sg1: toohim = 2SYLL_MOONNAD
* 2SYLL_VIISSAD - viiššâđ, vi^RVšš
    - Inf:â^VHIGH^RLEN%>đ
    - Ind+Prs+Sg3:á^CSH višá, 
    - Ind+Prs+Pl3:e^CSH^RVSH%>h, rvow like Sg3 višeh
    - ConNeg:â^WG^RLEN viišâ, rvow like Inf
    - Ind+Prt+Sg1:i^RLEN%>m viiššim
* 2SYLL_KIESSAD - kiessâđ, kiess
    - Inf:â%>đ 
    - Ind+Prs+Sg3:á^EA^CSH kiäsá, 
    - Ind+Prs+Pl3:i^CSH%>h kiesih
    - ConNeg:â^WG rvow like Inf kiesâ
    - Ind+Prt+Sg1:i%>m kiessim
* 2SYLL_VUOLLAD - vuollâđ, vuoll OBS: not Prs+Pl3 vowel like the others
    - Inf:â%>đ
    - Ind+Prs+Sg3:á^CSH^VHIGH vuálá, 
    - Ind+Prs+Pl3:i^CSH%>h vyelih
    - ConNeg:â^WG rvow like Inf vuolâ
    - Ind+Prt+Sg1:i%>m vuollim
* 2SYLL_ETTAD ettâđ e^RVtt4
    - Inf:â^VHIGH%>đ
    - Ind+Prs+Sg3:á^CSH^VHIGH iätá
    - Ind+Prs+Pl3:e^CSH%>h
    - ConNeg:â^WG^VHIGH^RLEN
    - Ind+Prt+Sg1:i%>m 
* 2SYLL_KALGAD kalgâđ
    - Inf: 
    - Ind+Prs+Sg3: kálgá
    - Ind+Prs+Pl3: kälgih
    - ConNeg: kaalgâ
    - Ind+Prt+Sg1: kalgim
* 2SYLL_KAVNAD as ETTAD but with VBACK kavnâđ kä^RVvn
    - Inf:
    - Ind+Prs+Sg3: kávná
    - Ind+Prs+Pl3: kävneh
    - ConNeg: kaavnâ
    - Ind+Prt+Sg1: kävnim
* 2SYLL_COGGAD kolgâđ ka^RVlg
    - Inf: 
    - Ind+Prs+Sg3: kalga
    - Ind+Prs+Pl3: kalgeh
    - ConNeg: koolgâ
    - Ind+Prt+Sg1: kolgim
* 2SYLL_KULGAD kulgâđ ko^RVlg
    - Inf:
    - Ind+Prs+Sg3: kolgá
    - Ind+Prs+Pl3: kolgeh
    - ConNeg: kuulgâ
    - Ind+Prt+Sg1: kulgim
* 2SYLL_OPPAD oppâđ uápp
    - Inf:
    - Ind+Prs+Sg3: uáppá
    - Ind+Prs+Pl3: uáppih
    - ConNeg: oopâ
    - Ind+Prt+Sg1: oppim
* 2SYLL_SODDAD šoddâđ ša^RVdd
    - Inf:
    - Ind+Prs+Sg3: šadda
    - Ind+Prs+Pl3: šaddeh
    - ConNeg: šoodâ
    - Ind+Prt+Sg1: šoddim
* 2SYLL_POHTED pohteđ:po5^RVht
    - poovtám RLEN
    - pohtá
    - pohteh
    - povte
* 2SYLL_PIHTED pihteđ pi^RVht
    - pivtám
    - pihtá
    - pihteh
    - pivte
* 2SYLL_KALVED kalveđ ka^RVlv 
    - kalvam
    - kalva
    - kalveh
    - kalve
* 2SYLL_JOTTEED
* 2SYLL_ID
* 2SYLL_EELLID: iälám iälá eelih ij ele
* 2SYLL_KASTID
* 2SYLL_CAALLID
    - Ind+Prs+Sg1: čálám
    - Ind+Prs+Sg3: čáálá
    - Ind+Prs+Pl3: čäälih NB! čäällih?
* 2SYLL_PAACCID
    - Ind+Prs+Sg1: páásám
    - Ind+Prs+Sg3: páácá
    - Ind+Prs+Pl3: pääcih NB! pääccih?
* 2SYLL_TIETTID
* 2SYLL_UADDID
* 2SYLL_VYEIJID
* 2SYLL_VYELGID like VYEIJID, but -i for reduced forms
* JUAVVID

* 2SYLL_OD
* 2SYLL_OOD
    - Prt+Du1 njivvoim WG CLEN
* 2SYLL_ORROOD like 2SYLL_OOD, but different triggers here and there
    - Prt+Du1 oroim WG

* 2SYLL_UD
    - Inf: ruábbuđ
    - Ind+Prs+Sg3: ruábbu
    - Ind+Prs+Pl3: ruábbuh
    - ConNeg: ruábu
    - Ind+Prt+Sg1: ruábbum
* 2SYLL_KUARRUD long dipht => -o
    - Inf: kuárruđ
    - Ind+Prs+Sg3: kuáru
    - Ind+Prs+Pl3: kuáruh
    - ConNeg: kuáru, kuáro
    - Ind+Prt+Sg1: koorrum
* 2SYLL_UAZZUD
    - Inf: uážžuđ
    - Ind+Prs+Sg3: uážžu
    - Ind+Prs+Pl3: uážžuh
    - ConNeg: uážu
    - Ind+Prt+Sg1: ožžum

### Threesyllabic
* 3v (unclassified)
* 3_LEKKASID (no stem change)
* 3_CIELATTID (stem-final tt shortening) cielâttiđ: cielât Length change in stem: Consonant change only
* 3_VYEJETTID (2syll vow short in Inf, long in Sg3, 1st syll V lengthening) vyejettiđ vyejeet
* 3_PUTESTID (cns and vow lengthening) putestiđ: putteest Length change in stem: Short V in Inf (before V)
* 3_COKKIITTID (stem-final tt shortening + 2syll vow shortening cokkiittiđ cokkit. 
    - difference in negation + Action Ess, Loc.. compared to 3_COKKIITTID) 
    - Length change in stem: Long V in Inf (before C#).
* 3_KUIKETTID (stem-final tt shortening)	 
* 3_MERIDID (Long root vowel and root conconant in third singular)	 
* 3_ADELID
* 3_UTTID
* Sg3 suojâlA

### 4-syllabic
* 4v
* 4_ADELISTID
* 4_KAVNATTATTAD
* 4_TUHHID

### Contracted
* Contracted j-stems
    - C_COKKAD (áj-contracted) 
        - Ind Prs Pl3 čokkájeh
    - C_PALLAD (aj-contracted) 
    - C_TUHHID (ej-contracted) 
    - C_RAMMUD (oj-contracted) 
* Contracted v-stems
    - C_TABAHTUD (Sg3 -uvá)
    - C_MERIDUD (Sg3 uvvoo)

### Unclassified verbs
* verbstem (no info)










## Auxiliaries

 * ij+V+IV+Neg: NEG ; 
 * leđe+V+IV: LEDE ; 


Main verbs


Intransitive verbs
Transitive verbs







# Alphabet 


## The Inari Saami letters

 *  a á â ä b c d e f g h i j k l m n o õ p q 
   r s t u v w x y z æ ä ø ö å               
   č đ ŋ ŧ š ž                               

 *  A Á Â Å B C D E F G H I J K L M N O Õ P Q 
   R S T U V W X Y Z Æ Ä Ø Ö Å               
   Č Đ Ŋ Ŧ Š Ž                               
 *  %-                                         hyphen
 *  '        the hyphen as hyphen
 *   ⎈       the ghost sign used in compounding, does not work in hfst

### Accented letters, just in case

 *  É Ó Ú Í À È Ò Ù Ì Ë Ü Ï Ê Ô Û Î Ã Ý þ Ð   
   é ó ú í à è ò ù ì ë ü ï ê ô û î ã ý þ ð   
   ß ª ß ç                                   



Literal quotes and angles must be escaped (cf morpheme boundaries further down):
* »
 «
 >
 <



### Different archiphonemes


 * a5:a á5:á e5:e i5:i u5:u y5:y o5:o ä5:ä    these do not change 
 * i2:i u2:u â2:â    this is final i, u in contract verbs etc changing to e, o
 * i3:i              this is invariant i
 * i4:i              this is the underlying i consonant
 * i6:0             a fake vowel, to get WG rules to function, e.g. kyehtlov (kyehti6lov)

 * c5:c č5:č d5:d h5:h j5:j l5:l m5:m ŋ5:ŋ r5:r t5:t z5:z    these do not change
 * b6:b d6:d g6:g  clitic consonants, jiemge, epke
 * j6:0            a fake consonant, to get WG rules to function, e.g. puávui
 * p4:p  k4:k  l4:l t4:t č4:č c4:c   these are consonants that change in cg
 *  ':'            is the real apostroph

### More abstract archiphonemes (dependent upon the **Triggers** in the next section)

 * %^RC:0       = root cons., lengthened by ^CLEN - máán%RCu máánnun
 * %^RV:0       = root vowel, lengthened by ^RLEN - ta%^RVvlu taavlu 
 * %^SC:0       = stem cons, %^SC:j, pluss lengthen after earlier shortening by %^CSH, see lyeme
 * %^SV:0       = stem vowel, lengthened by ^SLEN u:uu - táálu%^SV tááloost
 * %^VO:0       = vowel copy

### Triggers

 * %^CLEN:0     = Cons lengthening, with ^RC
 * %^CSH:0      = Cons shortening, laaŋkku - laaŋkun
 * %^RVSH:0     = Root vowel shortening
 * %^FCD:0      = Final consonant deletion 
 * %^FVD:0      = Final vowel deletion 
 * %^EA:0       = Stem vowel: e and i to a/á in ill, and root vowel ä>á, e(e)>iä, ie>iä, ye>uá
 * %^EX:0       = Stem vowel: i to â where it should have been á, this is Err/Orth only
 * %^RLEN:0     = Root vowel lengthening
 * %^SLEN:0     = Stem vowel lengthening
 * %^SVLOW:0    = Stem vowel lowering â>á and u>o - árppu árppoin, Root vowel shortening when more than one cns in consonant centre and suffix starts with i
 * %^SVSH:0     = Stem vowel shortening kappeer kaperân
 * %^WG:0       = Weak grade trigger
 * %^ÁE:0       = á to e in 3-syll, triggered by ^WG
 * %^ÁI:0       = á to i in 3-syll, triggered by ^WG
 * %^VHIGH:0    = High rootvow for verbs: e>iä, a>o, o>u, ää>áá, ee>iä, note also: ie>iä, ye>uá, uo>uá
 * %^VBACK:0    = Back rootvow for verbs: ä(ä)>a(a), á>aa, uá>o, ye>uo
 * %^BLOCK:0    = This symbol just to block otherwise triggering contexts
 * %^IUML:0     = â to e in front of high suffixes 

Trigger ordering in twolc and lexc, from left to right:

```
SV|ÁE|ÁI  EA|EX|SC  FCD|FVD  WG|CSH  CLEN  VHIGH|VBACK  RVSH|RLEN  SLEN|SVSH  SVLOW
```


## Morpheme boundaries:

Here we define the suffix border >
The other borders are not used yet, but still defined:

* **«**:  Derivational prefix
* **»**:  Derivational suffix
* **%<**:  Inflectional prefx
* **%>**:  Inflectional suffix
* **%^**:  (exceptional) soft hyphenation point
and the symbol #, which is Word boundary for both lexicalised and dynamic compounds

End of alphabet definitions


Sets

 *  Vow = a á â ä e i o u y æ ø ö å              
        i2 u2 â2                                 
        i3                                       
        a5 á5 i5 u5 y5 o5 ä5                     
        i6                                       
        é ó ú í à è ò ù ì ë ü ï ê ô û î ã ý      
        A Á Â Ä E I O U Y Æ Ø Ö Å                
        É Ó Ú Í À È Ò Ú Ì Ë Ü Ï Ê Ô Û Î Ã Ý      
        %^RV %^SV ;                              
 *  RealVow = a á â ä e i o u y æ ø ö å          
        y5 i2 i3 i5 i6 â2                       
        é ó ú í à è ò ù ì ë ü ï ê ô û î ã ý      
        A Á Â Ä E I O U Y Æ Ø Ö Å                
        É Ó Ú Í À È Ò Ú Ì Ë Ü Ï Ê Ô Û Î Ã Ý ;    
 *  Cns = b c č d đ f g h j k l m n ŋ            
        p q r s š t ŧ v w x z ž                  
        B C Č D Đ F G H J K L M N Ŋ              
        P Q R S Š T Ŧ V W X Z Ž                  
        g2 k2 m2 n2                              
        b3 d3 g3 m3 h3                           
        p4 k4 r4 l4  i4  t4 c4 č4               
        h5 j5 ŋ5 t5 c5 l5 t5 d5 r5 z5 j6        
        %^RC %^SC   ;                           
 *  UnvoicedCns = c č f h k p s š t  ;          
 *  Geminate = b d g p h t k c f z l m n ŋ r s š v ;   
 *  Sgm = Vow Cns ;                                   
 *  NotSuffixBorder = %^FCD %^FVD %^WG %^CSH %^CLEN %^SLEN %^RLEN %^RVSH %^SVLOW %^ÁE %^EA %^EX %^ÁI %^SVSH Vow Cns ;  
 *  Triggers =        %^FCD %^FVD %^WG %^CSH %^CLEN %^SLEN %^RLEN %^RVSH %^SVLOW %^ÁE %^EA %^EX %^ÁI %^SVSH %^VHIGH %^VBACK %^IUML ;  
 *  TriggersnotFCVD =             %^WG %^CSH %^CLEN %^SLEN %^RLEN %^RVSH %^SVLOW %^ÁE %^EA %^EX %^ÁI %^SVSH %^VHIGH %^VBACK %^IUML ; 
 *  StemCns = b b3 d d3 g g2 g3 h h2 h3          
            j l m m2 m3 m8 n n8 n2 ŋ r s  ;      




# Definition section

Introducing a WG right context 
```WeakGrade =  (RealVow:) [:RealVow |i6:]  (Cns:) ([%^SV:|%^ÁI:](%^ÁE:)) (%^FCD:) %^WG:0   ; ```  



As we look at more cases, the WeakGrade definition tends to be longer. 
We want to keep it short, but we want the code to work Thus, we document.
* The second :RealVow is there for long consonant stems
* The (Cns:) is there for consonant stems
* -č: is there for the č:i pair of eeč^RCi:eijijn
* The i6: is there for kyehtlov (kyehti6lov)



# Rule section


## Consonant rules

### Consonant gradation and shortening



* **x:y consonant gradation** \\  WG gives x:x and x:y, when there is no consonant lengthening  

* *tu^RVp^RCe^WG*
* *tu0v0e0*

* *käähir^WG>*
* *käävir0>*

* *juáh^RCu^WG^RVSH>ttáá*
* *juáv0u00>ttáá*



* **hh:vv** \\  já%^RVhhá%^SVl%^ÁI : jäävvil



* **Quality change of root consonant x:yy** \\  consonant lengthening after WG, changing h:v, p:v, c:s

* *va^RVh%^RCo^WG^CLEN>im*
* *va0vvo00>im*


* **t:đ, also tk4:đh gradation, part 1** \\   

* *puáttee#vuot^RCâ^FVD^WG>i5i5*
* *puáttee#vuođ0000>ii*

* *jo^RVtk4â^WG^RLEN>*
* *joođhâ00>*

* *vädis#vuot^RCâ^FVD^WG>i5i5*
* *vädis#vuođ0000>ii*

* **k4:h gradation for kk4, tk4, rkk4, lkk4** \\  

* *totk4os^WG*
* *tođhos0*


* **xx:yy gradation for xx4** \\   puáhhoin, sukk4á:suhháást

* *mä^RVtk4i^WG^RLEN>.#.*
* *määđhi00>.#.*

* *su^RVkk4á^SV^WG^CLEN^SLEN>st*
* *su0hháá000>st*



* **t4:đ and c4, č4, p4 gradation for tt:đ etc.** 

* *ru^RVtt4â^WG^RLEN>*
* *ruu0đâ00>*



* **ht:vt, ks:vs etc. gradation** \\  ht:vt, we use h 


* *pihtâs^WG*
* *pivtâs0*



### Consonant shortening

* **k:0 gradation and shortening for xkk4** \\  for lkk4, rkk4, vkk4


* *la^RVvkk4â^WG^RLEN*
* *laav0hâ00*


* **xyy:xy gradation A** \\   há%^RVi4ttás%^ÁI

* *á^RVrppu^WG^RLEN>*
* *áár0pu00>*

* *á^RVrppu^WG^RVSH>ttáá*
* *á0r0pu00>ttáá*

* *riänttus^WG>*
* *riän0tus0>*



* **č:0 in čč4 consonant gradation when CLEN** \\ when čč4

* *lu^RVčč4â^WG^RLEN^SVLOW>in*
* *luu0já000>in*


* **From i4j to j when WG and CSH** \\ e.g. sai4joos:sajoos




* **xx:x consonant gradation and shortening and x:x shortening** \\   weak grade or consonant shortening 

* *ku^RVrrâ^CSH^RLEN>n*
* *kuu0râ00>n*

* *so^RVllâ^CSH^RLEN>n*
* *soo0lâ00>n*

* *vi^RVššâ^CSH^RVSH>vettee*
* *vi00šâ00>vettee*


* *la^RVs^RCe^SVtt^RLEN^SLEN>vettee*
* *laas0ee0t00>vettee*

* *cuozzâ^WG^RLEN>*
* *cuo0zâ00>*

* *vá^RVddu^CSH^RLEN>n*
* *váá0du00>n*

* *haavvâr^CSH^SVSH>ist*
* *ha00vâr00>ist*

* *pottáák^SC^CSH^SVSH>ist*
* *po0t0ákk00>ist*

* *kahhaan^CSH^SVSH>ân*
* *ka0h0an00>ân*


* **tt:t  - final consonant and consonant gradation** \\ consonant gradation, and 3syll verbs in -tt lose t in front of cns-initial suff

* *las^RCe^SVtt^CLEN^SLEN>*
* *lassee0t00>*

* **nnj to nj shortening weak grade and consonant shortening** \\  special rule, e.g. konnjâl -> konjâlân puánnjá


 * **Word final consonant deletion** \\ for vaskâm:vaaskâ

* *va^RVskâm^FCD^RLEN*
* *vaaskâ000*

* *njuolgâd^FCD^RVSH*
* *njuolgâ000*


 * **Final m in stems, smm to sm** \\ 


* **Wordfinal consonants part 1**  e%^RVlâčč
1)
2)jurdâččmân:jurdâšmân ju%^RVrdâčč%^RLEN%>mân
3)  šš>š in hárávušš>vetteđ 


* *hárávušš>vetteđ*
* *hárávu0š>vetteđ*

* *konnjâl^CSH>ân*
* *kon0jâl0>ân*

* *suán^RCju^CLEN>n*
* *suánnju0>n*

* *haamit^SC^CSH^SVSH>ist*
* *ha0mitt00>ist*

* *su^RVkk4á^SV^WG^CLEN^SLEN>st*
* *su0hháá000>st*





### Consonant lengthening



* **Lengthening of half-long root consonant x:xx** \\  riččá piiru piirrun niisu niissun

* **Lengthening of root consonant x:yy** \\  consonant lengthening after WG - h:vv, p:vv, c:ss

* *ka^RVss^RCa^SV^WG^CLEN^SLEN>st*
* *ka0ss0aa000>st*

* *va^RVh^RCe^SV^WG^CLEN^SLEN>st*
* *va0vvee000>st*

* *va^RVh^RCe^SV^CLEN^SLEN>n*
* *va0hhee00>n*

* **Lengthening of consonant h5** \\    this one does not fit into the general rule because of h5:h

* *put^RCe^SVst^CLEN^SLEN>*
* *putteest00>*


* *ke^RVp^RCidm^CLEN^RLEN^SLEN>ân*
* *keeppidm000>ân*

* *kieh^RCâ^WG^CLEN^SVLOW>in*
* *kievvá000>in*

* *i^RVšš^RCe^SV^WG^CLEN^SLEN>st*
* *i0šš0ee000>st*

* *kol^RCe^CLEN>*
* *kolle0>*

* *kiel^RCâ^CLEN>n*
* *kiellâ0>n*


* **č:ij part 1** \\  

* **Lengthening root consonant j:ij 1** \\  for saje:saijeen 


* **č:ij and j:ij part 2** \\  

* *sa^RVj^RCe^SV^CLEN^SLEN>n*
* *sa0ijee00>n*

* *pááj^RCá^CLEN>n*
* *pááijá0>n*

* *vaj^RCe^SVd^CLEN^SLEN>*
* *vaijeed00>*




* **nj to nnj consonant lengthening** \\  special rule, suánju : suánnjun for Par and Ess



* **Consonant lengthening after xx:x and xy:zy weak grade with x4 on upper side** \\   k4, č, p4  kukse:kuvssijn  


* **Consonant lengthening xy:xyy** \\ 



### Stem consonant and suffix consonant 


* **Assimilation of consonants t d š**  delet t in front of -ttáá, avoid -tttáá

* *haamit>ttáá*
* *haami0>ttáá*



* **Wordfinal consonants part 2**  e%^RVlâčč cummâlâhč:cummâlâhš

* **Final consonant x:xx** \\  pottáák potákkân  


* **Clitic devoicing** \\  for focus particle bá to pá after unvoiced stem cns.


## Vowel rules

### First syllable vowel shortening


* *koonnjâl^CSH>ân*
* *ko0n0jâl0>ân*

* *kappeer^CSH^SVSH>ist*
* *ka0p0er00>ist*

* *čäällim^CSH>ist*
* *čä00lim0>ist*

* *muusik^SC^CSH^RVSH>ist*
* *mu0sikk00>ist*


* *aarrân^CSH>ân*
* *a00rân0>ân*

* *kiirrâs^RVSH>ân*
* *ki0rrâs0>ân*



* **Vowel shortening VV:V** \\ ráávhu- : rávhoid, käähir%^CSH%>id kuuđiâ%^RVSH%>žân
1. svnlow
1. čääci : čassijn
1. kaamuv kammust
1. pááppár : pápárân páápp4ár%^ÁI%^WG%^RVSH%>id
1. pááppár : pápárân viijđás%^ÁE%^WG%^RVSH> 
1. njääh^RCe^CLEN^RVSH> = njähhe>
1. njääh^RCe^CLEN^RVSH> = njähhe>


* **Long vowel shortening** \\ (example?), no ^CSH, since that gives Vy:0

* **e:0 in passive** \\



* *mááh^RCu^WG^CLEN^SVLOW>in*
* *má0vvo000>in*

* *mool^RCâ^WG^RVSH>ttáá*
* *mo0l0â00>ttáá*

* **e:0 in passive** \\ special rule for getting ej̣ittáá instead of ej̣ittáá.

* **Underlying long vowel shortening iä:e and ää:ä or a** \\ čääh%^RCu2%^CLEN%^VBACK%>um


 3st stems viäskár veskirin, časkes časkes ča%^RVskas%^ÁE viäskár%^ÁI%^WG%^RVSH

* *kaavpug^CSH^RVSH^SVSH>ân*
* *ka0vpug000>ân*



* *mool^RCâ^WG>*
* *mool0â0>*


* *käähir^WG>*
* *käävir0>*

* *juáh^RCu^WG^RVSH>ttáá*
* *juáv0u00>ttáá*





### First syllable vowel lengthening

* **Root vowel lenghtening in many stems** \\  no rootvowel length if stem vowel lengthens and the consonantcentre consists of two or more consonants 

* *kä^RVvnâst^WG^VBACK^RLEN>*
* *kaavnâst000>*

* *le^RVkk4â^WG^RLEN>*
* *lee0hâ00>*

* *he^RVrkkib^WG^RLENttáá*
* *heer0kib00ttáá*


* *nju^RVne^SV^WG^RLEN^SLEN>st*
* *njuunee000>st*



* **Root vowel o5:u** \\ 




* **Root vowel ä:ää lenghtening and diphthongisation e:iä** \\ special rule, for avoiding conflict spä%^RVi4lih%^WG%^RLEN, 


* **Root vowel o lengthening** \\  alge : oolgijn 

* *a^RVlge^WG^RLEN>id*
* *oolgi00>jd*



* **Root vowel u lengthening with vowel change before suffix i** \\  alge : oolgijn 

* *mu^RVšti^WG^VHIGH^RLEN>j*
* *muušti000>j*

* *lo^RVh^RCá^WG^VHIGH^RLEN>im*
* *luuv0á000>im*

* *ku^RVlgâ^WG^VHIGH^RLEN>i3*
* *kuulgâ000>i*

* *hu^RVm^RCo^SVb^RVSH>ist*
* *hu0m0o0b0>ist*

* *hu^RVm^RCo^SVb^WG^RVSH^SVSH>ân*
* *hu0m0o0b000>ân*


### First syllable vowel change

a rules

* **Root vowel change a:o before suffix i and for contract verbs** \\  alge : olgijn 

* **Root vowel o:u for contract verbs and Root vowel change o:u before suffix i** 


* *tohhi2>đ*
* *tuhhi>đ*

* *lo^RVh^RCá^WG^VHIGH^RLEN>im*
* *luuv0á000>im*




### ä rules

* **Monophthongisation rule iä:ee 1** \\  
1)

* **iä:e rule 1 and second syllable Fleeting vowel before suffix** \\  Note: many rules in one



* **iä:e and iä:ee rule 2 and Diphthongisation i5ä to ie** \\  

* *siämmu2>đ>*
* *s0emmu>đ>*




* **Different rules for ä:a, first vowel (or only vowel)** \\  čääci:čassijn, läbži:labžijn lään^RCi%>id

* *njääh^RCi^WG^VBACK>i3*
* *njaav0i00>i*



* **ää to aa, second vowel** \\  á:o in pairs like kuátij -> koođij, säämi -> saamij čäällu%^VBACK%>m lään^RCi%>id



* **ää to áá and á0 in Illative and Sg3** \\  ... for säämi > sáámán



* *sääm^RCi^EA>n*
* *sáám0á0>n*


* **äRV to áá in Illative and Sg3** \\  ... for täsni -> táásnán


* *tä^RVsni^EA^CSH^RLEN>n*
* *táásná000>n*

* **Vowel lengthening äRV to aa** \\  äigi aaigijd

* *sälkki2>đ>*
* *salkki>đ>*

* *sääm^RCi^WG>in*
* *saam0i0>jn*

* *sääm^RCi^WG>id*
* *saam0i0>jd*


* *stäävi2>đ>*
* *staavi>đ>*

* *stäävi2>j>*
* *staavi>j>*

* *stäävi2>i3>*
* *staavi>i>*

* *stäävi2>jeh>*
* *stääve>jeh>*

* *kä^RVvnâst^WG^VBACK^RLEN^SLEN>*
* *kaavnâst0000>*


á

* **Root vowel change for á to ä with i in second syllable** \\  päävir , já%^RVhhá%^SVl%^ÁI%^WG%^RLEN>


* *páápp4ár^ÁI^WG^RLEN*
* *pää0vir000*


* **Root and stem vowel á:a for verbs** 


* *pá^RVkk4u^VBACK>m>*
* *pa0kku0>m>*

* *pá^RVkk4u^WG^RLEN>im>*
* *páá0hu00>im>*


### á and uá rules

* **Monophthongisation rule uá:o0 part 2: Vowel shortening for uá** \\  for uábbi -> obbijn  čuál%^RCi%^WG%>in tuái4jâl%^CSH%^VBACK%^RVSH%>âm


* **Monophthongisation rule u:o and root vowel change u:o, special rule for olmooš and contract verbs** \\ 

* *uái4nu2>đ*
* *o0inu>đ*


* **Diphthong rule uá:uo and uá:oo, part 2** \\  



* **Diphthongisation e to iä, part 1** \\   


* **Root vowel aa:áá in C-stems with stemvowel u, part 1** \\  ahhu:áhu


* **Root vowel aa:áá in C-stems with stemvowel u, part 2** \\  ahhu:ááhu





* **ie to iä in Illative and Sg3** \\  kiem´ni -> kiämnán, veerdi : viärdán peerru2%^CLEN%^VHIGH%^RVSH%>o




* **Diphthongisation uo:uá** \\   


* **ye to uá and uo, part 1** \\  Part 1 of ye to uá for kyeli : kuálán  


* **ye to uá, part 2** \\  Part 2 of ye to uá for kyeli : kuálán

* *kyel^RCi3^EA^CLEN>m*
* *kuállá00>m*

* **ye to uo, part 2** \\  Part 2 of ye to uá for kyeli : kuolijn

* **uá to ye and uo to ye, part 1** \\  Part 1 luámmán : lyeme čuággás%^ÁI%^WG%^RLEN%>

* *vuolle^CLEN>en*
* *vyelle0>en*

* **uá to ye, part 2** \\  Part 2 luámmán : lyeme




### Second syllable rules

* **Second syllable vowel change á to e or i in 3syll stems** \\ puttás- > putes, triggers are ^ÁE and ^ÁI já%^RVhhá%^SVl%^ÁI%^WG%^RLEN%> pu5árrás%^ÁI%^WG%>umos

* *puttás^ÁE^WG>*
* *pu0tes00>*

* **Stemvowel shortening  áá and aa to e or i in 3syll** \\ puttás- > putes, triggers are ^ÁE and ^ÁI

* *nahha^SVr^ÁE^WG^RLEN>*
* *na0ve0r000>*

* *nahha^SVr^ÁE^WG^RLEN*
* *na0ve0r000*



* **Stem vowel e to a for a root vowel.** \\  alge to aalgan

* *a^RVlge^SV^EA^SLEN>š*
* *a0lgaa00>š*


* *a^RVlge^SV^EA^SLEN*
* *a0lgaa00*

* *a^RVlge^EA^CSH^RLEN>n*
* *aalga000>n*

* *va^RVh^RCe^SV^EA^CLEN^SLEN>m*
* *va0hhaa000>m*

* **Stem vowel e to á for other root vowel** \\  if e stem

* **Stem vowel i to á for other root vowel.** \\  e.g. säämi > Ill sáámán 

* **Stem vowel i to â for other root vowel, as a common error.** \\  e.g. säämi > Ill Err/Orth sáámân 


* **Stem vowel i to e in front of j** \\  



* **Stem vowel â to a in Pl Nom -h** \\  silbâ to siilbah  %^WG%^RLEN%>hlove%>h


* *so^RVllâ^WG^RLEN>h*
* *soo0la00>h*

* **Stem vowel â > á change before i** \\ sollâ to sooláid 


* *so^RVllâ^WG^RLEN^SVLOW>in*
* *soo0lá000>in*







* **Stem vowel i3:0** \\ 



* **Stem vowel u:o change before suffix** \\  
2) 


* **Stem vowel u2:o change before suffix** \\  

* *uáinu>o*
* *uáino>o*




* **Second vowel shortening** \\ eemeed : emedân, savvoon : savo 

* *kulluutt^SVSH>*
* *kull0u0t0>*

* *eemeed^CSH^SVSH>ân*
* *e0m0ed00>ân*


* *kappeer^CSH^SVSH>ân*
* *ka0p0er00>ân*

* **Stem vowel:0 in front of â** \\ aiguu:aaigâ


* **Stem â deleting** \\ kandâ:kandii



* *a^RVlgâi^FVD^WG^CLEN>i5*
* *a0lg0i000>i*

### Suffix vowel rules

* **Suffix vowel lengthening** \\ long á in kissáást, nuorâ : nuorááin, hyeni:hyeneest




* *ki^RVssá^SV^WG^CLEN^SLEN>st*
* *ki0ssáá000>st*

* *mi^RVllo^SV^WG^CLEN^SLEN>st*
* *mi0lloo000>st*

* *huksi^SVm^SLEN>ist*
* *huksiim0>ist*


* *táál^RCu^SV^WG^RVSH^SLEN^SVLOW>st*
* *táál0oo0000>st*

* **Suffix i5:j for lexicon APINA** \\ salijn


* **Suffix i5:0 and i5ä:e** \\ timotein oboen, not Chariliein


* **Suffix i:j for i and e-stems** \\  


* **Vowel copy in suffix** \\  for imperative Sg3, at least


Suffix consonant rules




## Other rules

 * **Word final vowel deletion** \\ for vaskâm:vaaskâ

* *sollâ^FVD>ii*
* *soll00>ii*

* **Potential vowel shortening for contract verbs** \\  -áážep becomes -áš etc.






* *skä^RVi4nâ^VBACK>đ*
* *ska0inâ0>đ*

* *hu^RVm^RCo^SVb^WG^RLEN^SLEN^RLEN^SLEN*
* *huum0oob00000*

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
QMARK
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



### Semantic tags


HUMAN

HAB-ACTOR
HAB-ACTOR-NOT-HUMAN



PROP-ATTR
PROP-SUR



TIME-N-SET
NOT-TIME
TIME-N



###  Syntactic tags

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
REAL-WORD-NOT-ABBR
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

POSITIVE-V





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

ALLSYNTAG

*These were the set types.*


# RULE SECTION
Here follow the rules.



This is the first section. Here we put safe rules with no or minimal context.

## Removing unwanted names



## Numbers

Ruleset for numbers from sme, and adjusted.












* **SemID** Strange number is ID.

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

* **AccTV2** Selects accusative: when a transitive verb to the left. No Acc allowed to the left in the sentence (sentenceboundary as a barrier). No Acc allowed to the right (barriers are CC, comma and sentenceboundary). Note that Gen to the right followed by a noun is allowed. You shall not be: route, time, Pron Dem. You are not Acc if you are: Gen-cased Pron or Animate with Ill immediately to your right. No Acc, Com, N Nom or Gerundium allowed immediately to your right. No Gen followed by Po allowed immediately to your right. A SG3-verb is only allowed to your left (barriers excluding everything except NP-heads and adverbs, PrfPrc is also a barrier) if there is a Nom left to the SG3-verb. No vdic allowed immediately to your left. You are not Acc if: you are a Nom-cased Prop, followed by ahte or EOS and the verb found to the left (SV-boundary) is some kind of verbalactivityverb or a humanagentverb.

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














# Substitute rules

These 12 substitute rules add the <smn> language code to all words, to govern 
their behaviour in the subsequent cg files. The rules are removed when this
file is ported to Apertium.






