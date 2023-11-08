# Inari Sami description 

All documents in one file



## Guessing: Rule for adding Sem/Date as a tag to readings which looks like dates

## Guessing: Rule for adding Adv Sem/Adr as a tag to readings which looks addresses

* Rule for adding <vdic> to verbs denoting verbal actions like: ... dadjá Aili Kestkitalo.

*Select **PlcSur** (Sem/Plc) (Sem/Sur) 

### Some propernouns have two parts and the first is not a genitive. We still have problems with abbr when these propernouns are inflected or are a part of a cmp. The copy rule adds Attr reading to names which not get it in the fst (Soria). The select rule selects Attr when the next word is e.g. Moria.

* **SoriaAttr**  Soria Attr Moria, Harry Attr Potter-girji

* **SoriaMoria**

###  Rules for giving Attr to names, e.g. Ole Attr Kåven.

* **PropAttr** 

Remove unwanted analyses

## Numerals

* **IINeg**  Rom, not Neg (for apertium)

* **NumRom** in beginning of sentence

## Lexicalised derivations

* **eapmi** compounds with eapmi if they have Der/NomAct analysis

* **derN** removes DER-N if lexicalised non-essives

* **derNEss** removes DER-N if lexicalised essives (revise this) - flytter denne til slutten av fila

* **derA** removes DER-A if lexicalised A

* **derV** removes DER-V if lexicalised V,

* **derHderAlla, derAlla, derH, derST** chosses longest Der/tag

* **vuohtaNotAttr** removes Attr for Der/vuota

* **derPassActio** removes Actio Nom/Gen/Acc for passive forms. I don't think they exist in Sg, we prefer the PrfPrc analysis.

### Particular verbs

* **notRealV** removes verb readings from verbs like álbmotregistreret

* **notN** removes N for adjectives which have got noun analysis because of Px for Divvun 

* **leapmaDimin** removes it

* **Der/PassS** removes some Pass-readings in favour of V not Pass

* **notPass** removes som Pass readings which are not likely at all

* **LEX-PASS** removes passive forms of some lemmas in favour for the lexixalised one

* **LexSelbeassat**

* **LexSelgieldit**

* **LexSelollet**

* **Lexdiehttelasaid** diehttelasaid Adv

* **Lexgeassit** geassit Adv vs geassit V

* **Ger and GER-NOTV** remove Ger-forms which are not likely at all

## Propernouns

###  Removing or selecting proper nouns that are lookalikes

* **AvvilProp** selects Prop for Avvil

* **SamediggiProp** selects Prop after Ášši 01/12

* Rules for removing some Props which are identical to common nouns

*Removes **PropPl**, but problems with names as Davviriikkaid Ráđi, there we want Prop Pl

* **PropVfin** selects propernouns which can be Vfin in the beginning of a sentence

* **confProp, Lea, Man, Hui, Mo, Prop** removes Props which confuces the analyser, 

* **Dert** Rule for removing Der/t Prop when there are other analysis

### Some adjectives are never derived as Adv

### Rules for Prop Attr, Sem/Sur and Plc

* **PropAttrIfPropx** removes Attr if no Prop on the right side

* **PropInsideProp** Selects Prop if capital letter inside clause

* **AttrPropDerlaš** Selects (Prop Der/lasj Attr) if first one to the right is a noun

* **PropAttr** Removes (Prop Attr), but not if to the right is Prop or Ord OR ABBR 

* **PropSur** Selects (Prop Sem/Sur) if finite verb to the left. Immediately to the right is Sem/Fem OR Sem/Mal

* **PropAttr1** Selects Attr if you are Sem/Fem OR Sem/Mal, Sem/Sur or INITIAL and to your right is Prop which is Sem/Fem OR Sem/Mal or Sem/Sur 

*Removes **PropAttr** if no Prop on the right side

### MISC

* **NotConNegII** removes ConNegII if no Neg Imprt around. This is important, as the homonym forms are common. - 30850

* __errsub_uvvo__ removes -uvvat Err/Sub Sg3 if Der/PassL, e.g. čujuhuvvo

* sutnje is not verb

* **ABBR** Removes ABBR in favour of Adv, Pcle or Pron, e.g. "dii" when there is no punctuation

* **ollit** removes ollit when ollu - move this one?

* **FocbaDu3** removes Foc/ba when Du3 verbs like máhttiba and Adv like juoba and Prop like Jáhkoba (Acc) 

* **Focge** removes Foc/ge when Adv like dieđusge

* **Focge-dis** disambiguation Foc/Neg-ge and Foc/Pos-ge

# ONE-COHORT DISAMBIGUATION - CYCLE 0

The idea behind "cycle 0" is to have safe rules without context first.
These rules typically chose lexicalisations over derivations, 
Saami words instead of marginal names, etc.

## Lexicalised derivations

* Removes **derV**  DER-V if lexicalised.

*Removes **derN** if lexicalised.

*Removes **derNEss** if lexicalised, and both nouns are essive.

*Removes **derA** or PrsPrc or VGen if lexicalised. VGen is a chance.

*Removes **derAdv**  when Adv is lexicalised.  

* Removes **derVhmm** Does this function?

* **derHderAlla** removes Der/h Der/alla if Der/halla.

* **derAlla** removes Der/halla if Der/alla.

* Removes **derH** if Der/InchL.  

* Removes **derST** if Der/ahtti #OBS se på denne	

* **derVuohta** removes A Attr Der/vuota if A Der/vuota.	

## Fragments

* **Sem/Act** selects lexicalised NomAct in fragments (instead of loooking for VFIN). 

## Adjectives or nouns, not adverbs

* **Aifeambbo** selects A after eambbo

* **muhtunlagan** removes lága Ess if Indef ja lágan A

* **aiggePo** removes áigge Po, which belongs to MT and thu

## Adverbs

* IFF **buotAdv** : buot Adv in front of Superl

### Lexicalised adverbs
It is useful to select early the adverbial reading for potensial nouns or verbs.

* **aibbasAdv** áibbas dolin

***aloGen** removes állu Gen,  álo  Adv vs. N Gen

* **aiddo**

***bealisAdv** 

* **mannelTimeAdv** golbma jagi maŋŋel

* **AdvSTV** váldit mielde, oahppat bajil. eará? STRICT-TRANS-V is too strong

* **cadaAdv** if oažžut juoidá čađa

* **dussaiAdv**  

* **gaskanAdvVGen**  

* **gotAdv**  

* **ikteAdv**  

* **miehtaV**  

* **miehtaV**  

* **aigiAdv**  guokte vahku áigi

*  **viimmatAdv** 

* **dalleAdv**

*  **dusseAdv** 

* **alggageAdv**  

* **bearraiAdv**  

* **buresAdv**  

* **cadatAdv**  

* **cuozzutAdv**  

* **dadjatAdv**  

* **dadjatAdv2** 

* **dainnaAdv**  

* **daninAdv** selects danin Adv. It is a special rule, only negative restrictions.

* Select Ess, and then kill?  

* **dassaAdv**  

* **dakkoAdv**  

* **duoAdv**  

* **duoN**  

* **duodaidAdv**  

* **AdvNotNA** Adverbs, not nouns or adjectives

* **AComp** remove A Comp when Adv

* **birrasii** removes birrasii N

* **doarvaiAdv** removes birrasii N

* **eanasAdv**  

* **eambbogo** selects Adv eambbo go

* **eanetAdv**  

* **AdvComp**  

* **easkkaAdv**  

* **gaskatAdv**  

* **goassigeAdv**  

* **gosaAdv**  

* **gustoAdv**

* **gustoAdvláhka**

* **guhkasAdv**  

* **VifVFIN** removes V 

* **harveAdv**

* **juogoQst**

* **justeAdv**

* **loahpasAdv**

* **liikkaAdv**

* **luovosAdv**

* **maninAdv**

* **manneAdv**

* **muhtuminAdv3**

* **njuolgaAdv**

* **oddasitAdv**

* **oktanAdv**

* **ovttasAdv**

* **oktiiV** remove

* **oktiiAdv** select

* **ollasitAdv** selects

* **radjaiPo** selects

* **rabasAdv** selects

* **seahkáPl** selects Pl

* **seammaAdv** selects

* **unnanAdv** selects

* **varraAdv** selects

* **vehaziidAdv** selects

* **visotdAdv** selects

* **vuhtiiAdv**

## Pronouns 

* **recipr, reciprPl** select Recipr

### Nouns, not verbs

* **álbmotN**, ii V.

* **headisge**, ii heađisge.

* **loahppa** after TIME Gen.

### Lexical selection - nouns

* **sahkaEss** if Mii lea sáhkan.

* **sahkaPl** after PLURALIZER in NP

* **UsImprt** removes Imprt Sg3 for all nouns in -us	

* **SUBImprt** removes Imprt when it can be a part of an NP	

* **oahppit**, ii Imprt.

### mánnu vs mánus

### Not noun

## Adposition or not

* The rules **Pooaivai, Pogiedas** removes oaivái and gieđas as Po

*  **aldatV1, aldatPo, KillaldatV** for the problem aldat V vs. alde Po

## Not Qst

* **AdvQst** removes dego/nugo Qst 

## Interjections

* **Interjlemma** voja voja nana nana select interj if repeated 

## Southern Locative vs. Essive

* **SouthLoc** removes Southern Locative vs. Essive

## Px-rules for special nouns

* **NnoPx** Remove Px for special nouns

* **gaskaneaset** selects Po for gaskaneaset	

## Some verb rules

* **vfingo** selects VFIN in front of go Qst

* **buoritV** removes buorit as V

* Some brave rules for removing Imprt

* **ImprtCopPrfPrc** removes imperative readings in front of coopulas and PrfPrc

* **FocV** revmoves Foc when Actio, PrfPrc, VGen, e.g. čađahan, ovttasge

### Particular CS

* **madeCS** for mađe/mađi and dađe/dađi

* **dadeCS** for mađe/mađi and dađe/dađi
### Verb or Noun?

* **Včiehká** selects V instead of N when nomintive to the right and accusative to the left *fápmu čiehká luottaid*

## Adpositions

### Adpositions, not verbs

* **bealisPo** removes imperatives when Po lookalikes

# Section 2: LOCAL DISAMBIGUATION - CYCLE 1

## FAMILY pronouns

### Pron Pers 1. p.

* **moai** This rule is not in use because of REMOVE:Prop

* __miiPersLeft1, miiPersLeft2, _miiPersRight__ select mii Pers 

### Pron Pers 2. p.

* **donDem** selecst don as Dem instead of Pers

* **donPers** selecst don as Pers instead of Dem

### Pron Pers 3. p.

* **sonSG3V, sonRel, goson** select son as Pers, Rel or Pcle 

* **sutnje** ( = forms of the verb "suotnjat")

* **danin** (Pron Ess OR Adv)

* **datPlIll** selects dát Pron Dem Pl Ill

* **daiddaVerb** removes dáidda N Sg Nom 

* **dasaVGen, dasaLassin dasa,datSg3, datSg3PrfPrc** ( = forms of the verb "dassat"): 

* **dasaILLV** choses dasa to the left of verbs like duhtat, suhttat, luohttit

* **DemPlLoc** selects Dem when Dem Pl Loc and agreement, perhaps no need for it here because we have agreement-rules later. Men viktig: her blir vi kvitt duo N.

* **DemPlCom** selects Dem when Dem Pl Com and agreement, perhaps no need for it here because we have agreement-rules later.

* **datPersCopulas** select Pers in front of copula. I setninger som Riššat dat gal leat musge, jus eai leačča njuoskan. tolker jeg dat som Pcle. Derfor constraint hva som kommer etter.

* **datPcle1** selects dat Pcle between N and finite, even if there is agreement between verb and dat .

* **datPcle2** selects dat Pcle when there is no agreement between verb and dat .

* **KilldatPcle** removes the remaining dat Pcle

* **PersAcc** selects Pers Acc in accusativ infinitive clauses with object

* **datPers** selects Pers. I made it stronger than it was. ref. r897 in sme-dis.rle

* **datDemSg** selects Dem from Pron Pers Sg3 Gen

* **datPersPl3** selects dat Pl3 in front of V Pl3 and V Du3 and Rel Pl

## An early rule for "eanaš"/"eanas"

* **eanasPron** selects Pron in front of Pron Loc

## Px constraints 

First select Px, then remove all remaining Px

* Set with adjectives, which are documented to have Px in our corpus

* **APxifN** Remove A Px if N:

* **PxAlone** Remove Px if it is only word in the sentence, and not a typical px-term

* **APx** Remove A Px if Adv of A Ess og A Attr og PrfPrc or Loc

* **PxLocIll** Remove Px if viesus vissui or similar

* **NPxPrfPrc** Remove Px if PrfPrc with  leat to the left

* Nouns: **NomPxSg1** (not Ess) as the only word in a sentence. Needs no disambiguation.

* Nouns:  **AccPxSg1** after a TV verb. Exception for Aux.

* Nouns:  **AccPxSg1** after a TV Inf verb.

* **PxSg1LocAcc** is Acc to the right.

* **PxSg1Acc** is Acc to the right.

* coordination **PxSg1coord** 

* **PxSg1coordLast** for the last word of a coordination

* **ReflPxSg1** lean oahppan alddán

* Nouns: **PxSg2** if SG2-V. The rule needs no disambiguation. The DON-constraint because of homonymi with (N Pl)

* **PxSg2Acc** if  TV to the right

* **PxSg2AccImprt** if  TV Imprt to the left

* **PxSg2AccPrfPrc** after PrfPrc 

* **NotPxSg2** if no Sg2 

* **PxSg2GenPo** if in front of Po, after til verb

* **PxSg2Loc** after habitivconstruction

* **atnitPx** removes Px for for atnit muittus, gudnis, árvvus, čalmmis

* Nouns: **PxSg3Acc** if Sg3 or Sg to the left

* Nouns: **PxSg3Acc** if Sg3 or Sg to the left

* Nouns: **PxSg3AccPrfPrc** if PrfPrc and Sg3 to the left

*  **PxSg3GenPo1** in front of Po, to the left of the owner

*  **PxSg3GenPo2** in front of Po, to the left of the owner

* **Genguossis** is  selection Gen, not only with Px. The FAMILY-set would be better than Sem/Hum-tag, but there is often a propernoun connected to the noun. guossái and guossis should have Po analysis?

* **GenNPFinal** selects Gen as the modifier of a noun in the end of a sentence.

* **PxSg3Nom**

* **PxGenNorPo**  

* **PxGenNum**  

* **PxGenPr**  

* **PXGenoaivai**  for oaivái Po, there could be more Po for this rule?

* **PXAccCoor**  

*  **PxSg3CC** in coordination with the owner

* **PxSgIllPx**  

* **gaskaAcc**  

We end section 2 by removing all remaining Px

* **KillPx** removes all remaining Px readings

## Section 3: Certain verb readings

* **FinGoInf** for  vai áigu go njulget.. Lene:  we don't need this

verb or adv	

* **NotVGenIfDer** removes VGen if 0 = Der/Pass or Der...(r947)

* **NotVGenIfDer** removes VGen if 0 = Der/Pass or Der...(r947)

### All imperatives

For imperative disambiguation we need the following:
Pick imperative contexts, and thereafter remove imperative.
Such contexts are: Imperative verb sentence-initially with exclamation mark

* **NotEmbeddedImprt** removed Imprt after CS

* **NotImprtWhenInd** removes Imprt if part of an Ind domain

* **NotImprtWhenIndCoor** removes Imprt when coordination of an Ind domain - a very special case

* **NotImprtIfAttrLeft** removes Imprt after attribute

* **NotImprtIfRel** removes Imprt after Rel, unify this with other left context (r948)

### Sg1 - early cycle, safe rules

* **VSg1IfLeftMun** selects Sg1 when "mun" is to the left (r949)

* **VSG1IfRightMun** selects Sg1 when "mun" is to the right (r950)

### Sg2 - early cycle, safe rules

* **VSG2IfLeftDon** selects Sg2 when "don" is to the left (r951)

* **VSG2IfRightDon** selects Sg2 when "don" is to the right (r952)

* **VInfIfAhte** removes Inf if there is no other VFIN between BOS and "ahte" (r953)

### Sg3 - early cycle, safe rules

* **VSG3IfLeftSon** selects Sg3 when "son" is to the left (r954)

* **VSG3IfRithgSon** selects Sg3 when "son" is to the right (r954)

* **VNotSg3When12Left** removes Sg3 if 12 Pron immediate left (r955)

* **VNotSg3IfCom** removes Sg3 in X with Y is... (r957)

* **Sg3vdic** selects Sg3 if VERBAL-ACTIVITY between comma and Nom

* **NegSg3BeforeFoc** selects Neg before Foc/ge or ConNeg (r959)

* **vfin** removes verb reading when the reading should be noun  

Negative verb, not abbreviation or roman numeral Ii.

### Du1 - early cycle, safe rules

These Du1, Du2 rules are (almost) not in use in our corpus, but we keep them for completeness.

* **VDu1IfMoaiLeft** selects Du1 when "moai" left (r960)

* **VDu1IfMoaiRight** selects Du1 when "moai" right (r961)

### Du2 - early cycle, safe rules

The next two rules are not found in the corpus, but logically
they belong, to cover the whole paradigm. There is no verb-internal
homonymy here, but there is homonymy with e.g. Illative for certain verbs.

* **VDu2IFDoaiLeft** selects Du2 if "doai" to the left (r962)	 

* **VDu2IFDoaiRight** selects Du2 if "doai" to the right (r963)	 

### Du3 - early cycle, safe rules

The competitor to Du3 is -ba Foc.

* **VDu3IfSoaiLeft** selects Du3 when "soai" left (r964)

* **VDu3IFSoaiLeft** selects Du2 if "doai" to the right (r965)	 

* **VDu3IfGuokteLeft** selects Du3 if "guokte" left (r966) - 15

* **VDu3IfGuokteRight** removes Sg3 if "guokte" right and 0 Du3 (r967)

* **VDu3IfNjaNLeft** selects Du3 as verb with coordinated subject to the left (r968) - 43

* **VDu3IfNjaNRight** selects Du3 as verb with coordinated subject to the right (r969) - 12

* **VDu3IfCollLeft** hmm, remove this?

### Pl1 - early cycle, safe rules

The competitor here is obviously Inf, but also Pl3 and Prt Sg2.

* **goasbeareInf** goas beare Inf

* **VPl1IfMiiLeft** selects Pl1 if "mii" Pron to the left (r971) - 3163

* **VPl1IfMiiRight** selects Pl1 if "mii" Pron to the right (r972) - 272

* **VPl1NotImprIfMiiLeft** removes Imprt if if "mii" Pron to the left and 0 = "mii" (r973) - 557

### Pl2 - early cycle, safe rules

These rules are not used when disambiguating the corpus
* **VPl2IfDiiLeft** selects Pl2 if "dii" Pron to the left (r974) - 0

* **VPl2IfDiiRight** selects Pl2 if "dii" Pron to the right (r975) - 0

### Pl3 - early cycle, safe rules

Select...

* **r976** SE V Pl1 if *-1 SII

* **r977** SE V Pl1 if *1 SII

* **VPl3jaPl3** selects Prt Pl3 in coordination (r978)

The following two may be joined:

* **VPl3IfPronRelLeft1** selects Pl3 if -1 Rel is linked to -2 Pl (r979) - 7801

* **VPl3IfPronRelLeft2** selects Pl3 if -1 Rel is linked via COMMA to -3 Pl (r980) - 853

* **VPl3IfCSLinkPl3Left** selects Pl3 if -1 Rel is linked via COMMA to -3 Pl (r979) - 341

Remove...

The following two may be joined:

* **r982** removes Prt Sg2 if Pl3 subject - 6002

* **r983** removes Prt Sg2 if Pl3 subject via CS - 305

* **VPl3Lookalikes** removes "verbs" like "manne" and "dušše" (r984) - 274

* **VSg3Lookalikes** removes "verbs" like "skuvlii" 

* **VPl3NotSg2BefPassive** removes Sg2 for Pl3 and Inf before passive (r985)

* **EssNotV** selects Ess instead of VFIN

### PrsPrc

* **PrsPrc** selects PrsPrc if coordinated with A - 10
Early rule since many PrsPrc readings are removed later.

OBS: denne er ikke helt bra

* Actio Gen

* **ENInf1** 

* **ENInf2** selects Inf (NOTE, this was further down in sme-dis)

# Section 4: CYCLE 1B: REMOVING THE READINGS THAT WERE LEFT FROM THE 1A RULES 

We don't need more Px sections, it's done alrady

## Noun, adjectiv, PrsPrc or not?

* **NnotAcoord** removes A instead of N (earlier: selects N instead of A), based on coordination with N, and a vfin-verb

* **NPlbeforeRel, NSgbeforeRel** select N in front of Rel and MO

## Adjectives and adverbs

### Adv or not?
maid has many readings and as Rel it is a member of S-BOUNDARY. Therefore we need to disambiguate is early in this file. Most important is to select Adv. Because of that A ang N still can have Vfin readings, it is difficult to make very general rules.

* **vaikkomii**

* **giitu** or not

* **Interj** or not

* **AdvPx**

* **comparAdv**

* **maidAdv1** selects maid Adv when there is no vfin to the right.

* **maidAdv2** selects maid Adv copulas and PrfPrc or Actio Ess. We need this rule because of that there can be an Inf to the right which also has Vfin reading.

* **maidAdv3** selects maid Adv even if there is a vfin to the right.

* **maidAdv4** selects maid Adv between two verbs or the verb after is IV

* **maidAdv5** selects maid Adv in front of Comp which at this stage can have vfin analysis.

* **maidAdv6** selects maid Adv between copulas Pl3 and N Pl.

* **maidAdv7** in a special construction with geahččat

* **maidAdv8** selects maid Adv after a Pers

* **maidAdv9** selects maid Adv even 

* **maidAdv10** selects maid Adv iežas 

* **maidAdv11** selects maid Adv iežas 

* **KillmaidAdv** removed the remaining maid Adv

**matPcle**

The following two rules are omitted. They only inflect on the disambiguation of mat pcle, a wackernagel, which is done in the rule over here, I think.

* **olluNom** 

* **olluAdv**

* **jogoAdv** jogo and juoga as adverbs

* **AdvPx** selects Adv Px instead of N Px

* **AdvwhenAPl** selects A Pl instead of Adv

## Disambiguating abbreviations

* **AttrABBRNum**

## Disambiguating particles

* **sonPcle** selects son Pcle, the remaining Pcle are removed

## Disambiguating clitics

## Disambiguating numerals

## Disambiguating adpositions

### čađa
* **caddaN** if čađa and movement-v

Commented out som adp-rules we don't need anymore:

### geahčai
* **geahcaiPP** not geahččat V

### guovddaš
* **guovddasPP** or not 

### mađe
* **madePo** after Num Gen

* **NumMade** Num before mađe

### miehta
* "miehtá" is also VFIN, and miehtá needs special treatment 
- **miehtaPo** after place or time Gen

- **miehtaPr** before place or time Gen

* **oidnosisAdv**

* "ovddas" has many readings and needs special treatment 
- **ovddasPo**  - commented out because we don't need it

* special rules for rastá because it often is Adv, and it can be an object connected to the PP
- **rastaAdv**  čuohppat/časkit/sahet rastá

- **rastaPo, rastaPr**  fievrridit olbmo man nu rastá

- **rastaPr**  rastá ráji/rájá

* **birraPo, birraPr** special rules for birra because it often is Adv, and it can be an object connected to the PP

* "vuostá" has many readings and needs special treatment 
- **vuostaAdv**  váldit vuostá/vuostái
- **vuostaPr**  váldit vuostá/vuostái	

* vuollel ja badjel as Adv in front of Num

### LIST LG-MATERIAL = Inf Adv Nom ;

* **gaskasPosticky, gaskasPrsticky** selects Po after coordinating language materials

* **PoParantes** selects Po after paranteces

* **PoNomCompl** removes Po if no possible complement to the left

* **PoMeasure** removes Po when MEASURE to the left

* **PrGen1** selects Pr

* **PrGen2** selects Pr

* **PrNoCompl** removes Pr if no complement to the right	

* **PoGen** selects Po

### Diambiguation  Noun vs. Po or Pr:

* **vuollaiPo** selects

* **beallaiPo** selects

* **ovdalPr** selects

* **gaskanPo** selects

* **gaskkasPo** selects

* **ovddasPo1** selects

* **ovddasPo2** selects

* **ovddasPo3** 	selects

* **ovddasPocoord** selects

* **NwhenPo** removes N if Po

* **VwhenPo** removes V if Po

## Some particular subjunctions and Neg Sup

* **amasCS** selects CS, not A or Neg Sup

* **amasA** selects A, not CS or Neg Sup

* **amasNegSup** selects Neg Sup, not CS or A

* **amatNegSup** selects Neg Sup, not CS

* **dasgoCS** selects CS, not Qst

* Removes **vaikkoAdv** , it is always CS because of abbr: "vaikko_mii" Pron Indef, but not in apertium

## go as CS and Qst Pcle
First select all "go" Qst Pcle, then remove them so the rest will be "go" CS

* **standQst** selects Pcle in standard questions

* **standQst** selects Pcle in standard questions without question mark

* **objQst** selects Pcle in questions which function as object in the clause

* **objQst2** selects Pcle in standard questions where an object follows VFIN

* **subQst** selects Pcle in questions as subordinated clause

* **vaiQst** selects Pcle in questions with vai

* **auxQst** selects Pcle in questions as subordinated clause, starting with AUX

* **refQst** selects Pcle in two main clauses, the first one a question which is referred to in the second.

* **nounQst** selects Pcle for go after NP

* **poQst** selects Pcle for go after Po

* **AdvQst** selects Pcle for go after WORD

* **killPcle** removes all remaining Pcle for go 

# Section 9 WORD-SPECIFIC RULES

## Some particular subjunctions

## Adverb rules

# MAPPING OF COMP-CS< , COMPLEMENTS OF PARTICLES IN COMPARISON
First map all COMP-CS<, then remove the other readings

* **compInf** Inf go Inf

* **ComptimeAdvl** buoret go ovdal

* **ComptimeAdvl** ii nu ollu go dál

* **Compadvlcase** eará sivas go fuorrávuođas

* **CompNumP** uhcit go njealji stivrralahtu doarjagiin

* **CompEanet** dohko eanet go 

* **Compvejolas** go vejolaš

* **compNomHead** NP-HEAD-NOM (ADVL) go NP-HEAD-NOM (ADVL). VFIN-NOT-IMPRT pga manglende disamgiguering

* **CompNomHead** Comp NP-HEAD-NOM leat go NP-HEAD-NOM  

* **compMisc** go geassebuođut, go dán áigge

* **Compdego** dego @COMP-CS<

* **compAccdego** Acc dego Acc

* **compAccgo** Acc go Acc

* **compNum** TRANS-V eambbo go Num  

* **compCoord** coordination	

* **compCoordAttr** coordination again, now with Attr. Speacial rule because of that Attr also has other readings.	

* **compInf** 

* **compInfCoor** 

* **killAllnotComp** Removes analysis which are not @COMP-CS<

- *This was the kill all not Comp rule!!*

* **goCSbeforeComp** Selects CS analysis in front of @COMP-CS<

* **ACompgo** Selects Comp analysis in front of go and @COMP-CS<

# MAPPING OF CC AND CS

Mostly we map both @CNP and @CVP, then we select @CNP, after that we remove them so @CVP remains

* **cnpCompSC** Map @CNP if @COMP-CS< or COMPAR ahte

* **cnpCompSpec** special rule because of PrfPrc = VFIN

* **CSasCNPCVP** Map some CSs both @CNP @CVP

* **CSasCVP** Map @CVP to CS

* **CCasCNPCVP** Map (@CNP @CVP) to CC

* **ahteCNP** ahte CC @CNP, remove the rest

* **killAllahtenotCS** All other occurrences of "ahte" are CSs.

* **vaiCCCNP** vai as CC or CS

* **vaiCC** remove vai as CC 

* **vaiCCNegQst1** vai CC @CVP before Neg or question

* **vaiCCNegQst2** vai CC @CNP in question about two alternatives

* **vaiCCPrfPrcInfQst** vai CC @CNP in question about two alternatives

* **killAllvainotCSCVP** Select all vai CS @CVP	

* **dadeCNP** removes dađe @CNP, so @CVP remains

* **CVPNPron** No finite verb or verbalactivity in front N/Pron @CNP N/Pron	

* **CVPnoVfin** No potential finite verb following

* **CVPnoVfin** Infitive following

* **CVPInfInf** between to Inf

* **CVPadvladvl** between to ADVL

* **CVPAdvAdv** between to Adv

* **CVPActioNom** 

* **CVPnoVfinAdvl** No finite verb in front ADVLCASE @CNP ADVLCASE	

* **CVPAdvNom** Nom @CNP Adv Nom	

* **CVPCopNomInf** COPULAS Nom @CNP Nom Inf	

***CVPoppramsing** Lásse, Iŋgá ja mun

***CVPCmp/SplitR** Cmp/SplitR @CNP

* **CVPwrongCmpnd** wrongly formatted compounds

* **CVPAAttr** A Attr @CNP A Attr	

* **CVPA** A @CNP A 	

* **CVPAccAdv** Acc @CNP Adv Acc	

* **killAllCNP** removes all remaining @CNP

* **XCC-CS** removes CC and CS with no synttag

## PRONOUNS

### Plural?

* **PlSg3V** removes plural in front of Sg3 verb (and **SgPl3V** does the opposite)

## Interrogative and relative pronouns

* **Interr** selects interrogative pronouns in questions

* **InterrIfPot** selects interrogative pronouns in potential sentences, and after that we remove the remaining Interr

* **munPl3** removes Pron Pers Pl3 if there is no verb agreement

* **Rel** selects Rel

* **RelSg1, RelSg2** select Rel

* **RelPl** selects Rel

* **RelPl** removes Rel

## Emphatic ieš     

* **ies1Pl, ies2Pl** select Pl for ieža

* **iesDu** select Pl for ieža

## Numerals

* **NifNum** 

* **AdvOvtta** 

* **AdvNumEss** 

* **NumCurrency** Selects Num

* **NumNomJahki** Selects (Num Nom) 

* **NumDassa** Selects (Num Nom)

* **NumAccCurrency** Selects (Num Acc)	

* **NumNom** Selects (Num Nom) 

* **NumNomCoord** Selects (Num Nom) 

* **r1082** Selects (Num Nom) 

* **year** Selects (Num Gen)

* **numunit** Selects (Num Gen) + NUMUNIT 

* **NumGenPo** Selects Gen if you are Num and there is a Gen following the first Gen to the right *gávcci máná njuni ovddas* 

* **WWNumOrdIllAttr** selects Ill Attr and Loc Attr for numerals and ordinals

## Indefinite pronouns
The rules are not documented yet

* **IndefAttr1** Selects (Indef Attr) 	

* **IndefAttr2** Selects (Indef Attr) 

* **IndefAttr3** Selects (Indef Attr)

* **NoAttr** Removes Attr if you are Pron and first one to your right is (Pron Rel)	

* **NoIndefAttr** Removes (Indef Attr) if first one to the right is (Pron Pers Loc)

* **NoIndefGen** Removes (Pron Gen Indef) or (Pron Acc Indef) if intransitive mainverb to the left and end of sentence to the right *muhto gávdnojit maid eará*

* **IndefAttr4** Selects Indef if you are Interr, and to the left is *jus*

* **AttrBuot** IFF-rule

* **IndefNom** Selects (Pron Indef Nom) if you are BUOT and first one to the right is PL3-V 	

* **IndefNom2** Selects Indef Nom if you are BUOT and there is no transitive verb to your left or roght in the clause

* **miiIndef** it vaikko mii or mii beare

## Demonstrative pronouns - should have a look at these

* **DemPlIll** removes Dem Ill and Dem Loc in front of Acc

* **DemSgNom** selects Dem Nom Sg if VFIN Sg3

* **DemIndefAttr** selects Dem in front of Indef Attr, no verb to the left

* **DemGenSeammas** selects dat Dem Gen in front seammás

* **DemSg** removes Dem Sg when there is no Sg N to the right

* **datPersSg3** selects dat Pers Sg3 when there is no N to the right

* **PersNRel** selects Pers Sg3 when there is a N and a Rel to the right

* **DemMeasure** removes Dem in front of a Num and MEASURE or NUMUNIT in Ill

## Disambiguating adjectives 

### Rules related to specific adjectives

* jagáš

* boaris A or N

* dáláš

* dološ 

* garra N vs. garas A

* nanus

* nuorra (vs. nuorrat V)

* sierra

* surgat

* veara

* **vulitAttr**

* **Comp** rules select Comp A

### Attribute disambiguation

* **AttrVFIN** removes Attr in front of VFIN

* **AttrnotNA** removes Attr when no N or A to the right

* **ANomILLA** selects Nom when ILL-A	

### Rules for Attr between Dem and N

* **AAttrDemSg1, AAttrDemPl1** 

* **AAttrDemSg2, AAttrDemPl2** 

* **AAttrDemSg3, AAttrDemPl3** 

* **AAttrDemSgIll, AAttrDemPlIll** 

* **AAttrDemSgLoc, AAttrDemPlLoc** 

* **AAttrDemComPl** 

* **AAttrDemdakkar** 

### Other attribute rules 

* Not attribute in front of Ess: dovddus sánálaš nissonin

* **AAttrN** no copulas close to the left

* **AAttrCop**  copulas close to the left

* **AttrPlacelaš** This rule selects Sem/Plc Der/lasj A Attr in front of Prop or N

* **AdvManimus** 

* **AttrIllCop** 

* **AttrAdv** 

* **Cop** 

* **ANom**  removes A Nom

* **AAttr**  selects A Attr

* **AdvN** removes Adv   

* **AAttrPunct**    

* **AAttrgoAAttr**    

* **AttrTIME**    

* **AAttrCoord1** coordination, first part

* **AAttrCoord2** coordination, first part

* **PrfPrcCoordA** selects PrfPrc in coordination with an A

* **ACoordPrfPrc** selects A itn coordination with PrfPrc 

* **AAttrContra** selects A itn coordination with PrfPrc 

### Special rules for 'buorre' (the only adjective showing case agreement)

This block of rules is there to ensure case agreement for comparatives.

* Select Pl Nom if V Pl3

* Remove Nom, Acc and Gen if Comp

### alit vs. allat Comp Attr

* **allat** in front of ALLAT OR MONEY OR EDUCATION OR go

* **alitColour** in coordination with COLOUR

* **alitN** in front of VEHICLE, CLOTHES, BEDCLOTHES, BUILDING and more

* **alitEOS** in the end of a sentence

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

## And now some rules for adverbs that modify adjectives

## Proper nouns

# VERBS

## Disambiguating verbs - part 1 

First ConNeg forms, they are dependent upon Neg verbs. Then Imperative 
(with their special syntax), infinitive, and other infinite forms. 
Person comes later (in part 2)

## ConNeg forms

Number following the rule headers below refer to numbers of hit in a 13 053 859 word corpus.

* **ConNegImp** selects ConNeg Imprt if Neg Imprt to the left. - 4265

* **PrfPrcConNeg**  to ConNeg Aux after PrfPrc

* **ConNegIfNeg** selects Ind ConNeg if Neg Ind to the left. This is the main (and common) ConNeg rule. - 660327

* **ConNegPrt** selects Prt if Prt to the left

* **ConNegCondIfNeg** selects Cond ConNeg if Neg Cond to the left. Less used, obviously. - 0 - homonymi?

* **ConNegPrfPrc** selects ConNeg for leat when topicalised PrfPrc between Neg and leat - 713

* **ConNegImpCC** catches the second ConNeg in cases like don't smile or laugh - 0

* **ConNegIndCC** catches the second ConNeg in cases like doesn't smile or laugh - 369

* **NotConNegIfNotNeg** removes ConNeg if no Neg to the left. Consider unifying with NotConNegNotNeg. - 1094269

* **NotConNegNotNeg** removes remaining ConNegs whenever no Neg to the left. - 5862

## Imperative

See also *Imprt or Ind* some sections down.

* **PassLNotImprt** removes Imprt when passive (sentence-initial, hence important)

* **ImprtLeat** says BOS Leat A is Imprt - 575

* **ImprtDál** 

* **SelImprtExcl** selects initial Imprt when excl mark 

* **ImprtComma** 

* **ImprtNotVGen**

* **NotImprtInd** 

* **NotImprtConNeg** 

* **NotImprtA** 

* **NotImprtN** 

* **NotImprtVFIN** 

* **NotImprtSlash** 

* **NotImprtGo** 

* bearrat TV or berret IV - berret is aux

## Infinitive

* **r2974** was moved up to select PL3-V after N Pl, might be relaxed to REMOVE Inf

* **r2976** was moved up to select PL3-V after N Pl, might be relaxed to REMOVE Inf

* **r1809** Not Pl1 (but Inf) if VFIN to the left, This is the basic Inf rule.

* **r1812** 

* **InfCompCs** 

* **r1811** 

* **EssInf**

Rules that prevent later selection of Inf for a finite verb in the frame 			

*INF-V...CC...*

* **r1816** 

* **r1818** 

* **r1819** 

* **r1820** 

* **r1821** 

* **r1823** 

* **r1824** 

* **r1825** 

* **r1827** 

* **r1828** 

## Verbgenitive

* **VGen** is typo

* **VGen** selects VGen after VGEN-V-TRIGGER-verb

* **Gen2**	selects VGen after after gaskan and lahka

* **VGen3** selects VGen after copulas

* **VGen4**

* **KillAllVGen** removes all VGen (r1842)

## Supinum vs. potential -- no example found in large corpus

## Perfect Participle

* **r1844** removes PrfPrc if 0 is the second N in an N and ... N construction

* **r1844** removes PrfPrc if 0 is the second N in an N and Gen ... N construction (this is marginal)

* __PrfPrc_Ess__ removes N Ess if 0 PrfPrc

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

* **r1863** is the mannan vahkku rule

## Actio

## Present participle
*orrut vs. orrot) 
## Rules for "addit" (which is an adjective, but more often a verb)
## Actio Loc = N Loc

* **ActioLoc** is an IFF rule, we also need rule for 'leat', like in lea go bieru oastimis

## Actio Nom = Ess

## Imprt or Ind

* **removeAllImp**

## Nouns or verbs

The rules are no documented yet

* **VFINAttr**

* **NPlbuorit**  

* **ActioEssNum**	

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

## Verbs as predicatives (@SPRED>) and (@<OPRED) 

### The tags (@SPRED>) and (@<OPRED) target  PrfPrc
The rules are no documented yet

* **spredPrfPrc** Buressivdniduvvon lehkos (topicalised PrfPrc) -- was r494

* **opredPrfPrc**	

* **opredPrfPrc**

## Passive verbs often have 

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

* **NPrfPrc7** Der/Pass, no TIME to the right

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

* **<SUBJInf5**

* **<SUBJInf6**

* **SUBJ>Inf**

### (@<SPRED)  target Inf

### (@<ADVL)  target Inf, Actio Ess

### @-F<OBJ  target Inf 

### (@A<)  target Inf 	
* **AInf** Inf 	

* **r368**	

### (@N<)  target Inf, Actio Ess

* **N<Infcoor**

### (@<ADVL)  target Inf, Actio Ess

* **ADVLActioEss** Inf 		

### (@<OBJ)  target Inf, Actio Ess, PrfPrc 

* **OBJActioEss** Inf 		

* **OBJPrfPrc** PrfPrc 			

### (@+FMAINV) and (@+FAUXV) and (@-FAUXV)

* **+FMAINVaux** AUX-OR-MAIN verbs     

* **+FMAINVcop** COPULAS verbs     

* **+FAUXVaux** AUX  verbs     

* **+FAUXVboahtit** boahtit as AUX      

* **-FAUXVaux** AUX verbs     

* **+FMAINVcopInfconstr** leat before Inf     

* **+FAUXVCop**  copulas coming before the mainverb

* **+FAUXVCop**  copulas coming before the mainverb, relative clause inbetween

* **+FMAINVcopMannan**  leat before mannan TIME     

* **+FMAINVHabconstr**  in habitive constructions    

* **+FMAINVCoopCoord** coordination  

* **+FAUXVleat**  

* **+FMAINVAux1**  

* **-FMAINVAux2**  

* **+FAUXVCop**  copulas coming after the mainverb

* **+FAUXVboahtit**  boahtit coming before the mainverb

* **+FMAINVCop**  copulas 	

* **+FMAINV**  to the remaining finite verbs which are not AUX    

* **+FMAINV**  to finite verb after mainverb

### (@-FMAINV) and (@-FAUXV)

* **-FAUXVConNegCop**  to ConNeg COPULAS   

* **-FAUXVConNegAux**  to ConNeg AUX-OR-MAIN   

* **-FAUXVConNegAux**  to ConNeg AUX   

* **-FMAINVConNeg**  to ConNeg   

* **-FMAINVConNeg**  to ConNeg

* **-FMAINVConNeg**  to ConNeg Aux after PrfPrc

* **-FMAINVConNegCop**  to ConNeg COPULAS   

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

* **-FMAINVSup**  to Sup

* **+FAUXV** to  Aux

* **NPrsPrc1** with 1C N Nom

* **ActioNom** with 1C N Nom

* **<ADVLVAbess** VAbess ADVL

* **<ADVLVGen** VGen ADVL

* **ADVL>VGen** VGen ADVL

* **<ADVLGer** Gerundium ADVL

* **ADVLGer>**

* **-FMAINVLoc** Actio Loc

* **>AActioGen** Actio Gen

### And then we remove the verbs which didn't get any syntactic tag, in favour of verbs with syntactic tags.

* **realverbX**

* **NomActLocX**

* **NomActX** removes other readings when PrfPrc Or Actio Ess

* **IfonlyVerb** selects the FMAINV reading in the cohort

* **IfonlyConNeg** ConNeg if it is @-FMAINV or @-FAUXV

### **killifVinCohort** This rule removes all other readings, if there is a mapped V reading in the same cohort. Every case which this goes wrong, should be fixed in mapping rules or previous disrules.

* **TEST** selects some infinte verb readings in the cohort

* **X**

# NOUNS

# CASE DISAMBIGUATION

## Num as subject, tricky cases - the rule should be here because of the verbdisambiguation

* **DiminNomPxSg1**	

## ACCUSATIVE-GENITIVE DISAMBIGUATION

## Secure rules for choosing Acc

* **PGenN** selects Gen when (Pron Pers) to the left and N to the right *mu sámevuođa iđuid*

* **CoGen1** (quite strict) selects the first of coordinated genitives *riikkaid, čearuid ja boazoorohagaid ovttasbarggu*

###  Semantihkka: Choosing accusative or genitive semantically

* **vuoiAcc** selects accusative if *vuoi* or *vuoi surgat* to the left 

* **SEMnotPossessor** Removes Gen if you are not a possible possessor (a human) # HAB-ACTOR

* **SEMnotHUM** removes Gen. This is when an NP is thought to be the OBJ, because it's not in the human sets and to the right is NON-FAMILY *njálgáid mánáide*. 

* **SEMXr2066** Removes Gen if there is a human or org to the right, exeption for *čállingiela áhčči* and so on

* **SEMgenEss** Removes Acc if there is Gen + Ess, like *dálu eamidin*

* **SEMXxr2071** Removes Gen: Nobody can possess a Proper name? Except from (Pron Pers) and Sem/Fem OR Sem/Mal

* **SEMXxPropOrg** Removes Gen: Who can possess Prop Sem/Org?    

* **SEMdep** Select Gen if main-organization in front of department   
* **SEMorghum** select gen if organization or education in front of human   

* **SEMXr2073** Remove Gen: Accusative in front of a human group *loktema sámiid buorrin*

* **SEMr2074** Selects Gen in front of HUMAN-GROUP

* **SEMactor** Select Gen in front of ABSTRACT and RIEKTEDILLI *unnitlogu oaidninčiegas*

* **SEMXr2076** Selects Gen if you are HUMAN or Pron with an ABSTRACT to your right *iežaset vuoigatvuođa*

* **VocNom** 

* **SEMyouareNom** Removes Gen and Acc when 0 FAMILY or PROFESSION because you are Nom. Not if -1 Num and VFIN is LEAT or IV *Oahpai go Sire sámegiela*

* **SEMyouareGen** Removes Nom if movement verb to the left and illative to the right, because you are the modifier of Ill *mannat Madame Tussaud kabinehttii*

* **SEMnotNom** Removes Nom if a Nom to the right followed by a transitive verb. 0 is animate and to the right is Ill. You are the modifier of Ill

* **SEMXxr2081** Removes Gen if NATION or POLITICAL-PLACE are to your right *dilálašvuođaid sámi*

* **SEMr2082** Selects Gen if you are LANGUAGE, giellanjuolggadus or giellaláhka in Acc-case and to your right is SAPMI-N-HEAD *sámegiela hálddašanguovlun*

* **SEMr2084** Selects Gen for *hálddašanguovllu suohkanat/gielddat*

* **SEMguovttis** selects genitive in front of guovttos and guovttis

* **SEMXr2087** selects Gen if you are a Prop/Plc followed by "gielda" or "suohkan"

* **SEMXr2087** Selects Gen if you have "eana" or "guovu" immediately to your right *Gomorra eatnamii*

* **SEMhumgroup** , tja

* __SEMplcGen_a__ Selects Gen if you are GEOGRAPHICAL-PLACE or (Prop Sem/Plc) in front of PLACE-ADV *Finnmárkku máttabealde*
* __SEMplcGen_b__ Selects Gen if you are GEOGRAPHICAL-PLACE or (Prop Sem/Plc) after a PLACE-ADV

* **SEMplcGen2** Removes Gen in front of a GENERAL-PLACE or POLITICAL-PLACE, if you are a noun *bidjen hildu sadjásis* 

* **SEMplcGen3** Removes Gen in front of GENERAL-PLACE or POLITICAL-PLACE, if you are ABSTR-TEXT or TEXT *cealkámušaid guovlluid dearvvašvuođafitnodagaid jahkedieđáhusain*

* **SEMXr2079** Removes Gen if you are Acc in front of MANNU *guđii virggi skábmanánu 1. b.*

* **SEMxhab** Selects Acc if COPULAS to the left of HAB-ACTOR *lea min*

* **SEMxboaris** Selects Gen if you are *boaris* in front of SAPMI-N-HEAD or SAPMI-PROP-HEAD *sii dolvo áhku boarrásiid siidii*

* **EMeallimamuorra** Selects Gen eallima muorra

* **ACRGen** Selects genitive: NRK Sápmi

* **ACRAttr** Selects genitive: IL Nordlys

* **SEMXxr2093** Selects accusative: if váldit to the left and mielde to the right: *váldit mielde*

* **SEMXr2096** Removes genitive: because Accusative in front of an organization

* **SEMGenORG** selects Gen (modifier): in front of an organization *Stáhta Oahpahuskantuvra*

* **SEMgen1** removes Acc if buot, gait or buohkat in front of a genitive, followed by a plural noun *buot Norlándda ohppiid*

* **SEMgen2** removes Acc if bargat or dihte are FMAINV or Inf and are found somewhere to the left of a Gen, which is followed by a noun *bargame boazodoallolága ođastemiin*

* **SEMXr2103** Selects accusative: OASSI is usually accusative *hálddaša stuora oasi*

* **SEMXxr2104** Selects accusative: if WRITING-ACTIVITY-V to the left and you are a TEXT *čállá vaidaga*

* **SEMXxacc**Removes accusative: if WRITING-ACTIVITY-V to the left and a noun to the right *čállit Norgga vásáhusaid*

* **SEMXxOrgRep** Selects genitive: An organization´s representative *Sámiráđi ovdaolmmoš*

* **SEMxr2107** Acc if *-1 fáktemuš

* **SEMXxr2108** Selects genitive if you are SAPMI with an Acc/Gen immediately to your left and a noun immediately to your right *girji sámi áššiid (birra)*

* **SEMsapmiModifier** Selects genitive (modifier): Sámi, suoma or ruoŧa  as modifier of noun *sámi oahpahus*

* **SEMsapmiModifier2** Select genitive (modifier): Sámi, suoma or ruoŧa on both sides of CNP as modifier of noun *Suoma ja Ruošša soahti*

* **SEMdazaModifier** Selects genitive (modifier): dáža, indiána, maya-indiána or romer  as modifier of noun *dáža oahpahus*

* **SEMXr2115** Selects genitive (modifier) in front of a lahka-noun *spábbačiekčanlága vuoigatvuohta*

* **SEMXr2116** Selects genitive (modifier) if you are LAHKA OR ORGANIZATION followed by mannu, day and numerals..

* **SEMvaldi** Selects correct váldi 

* **SEMtext** (modifier) selects genitive (modifier) if you are a TEXT in front of KLASS *doalloplána čuoggái*

*  **SEMgiella1** (modifier) selects Gen if you are a LANGUAGE in front of LESSON or SATNI *sámegiela oahpahusa*

* **SEMsamegiella** selects Gen for LANGUAGE if *1 is LESSON 

* **SEMlang** removes Gen if LANGUAGE is to the right, but not if you are ACTOR-ROLE and so on *oahpponeavvuid sámegillii* 

* **SEMlang2** Gen if you are LANGUAGE with 1 N: You are only a modifier in a sentence with a TV-verb, if there is an Acc or Com between you, or if the Obj is topicalized *ráhkadii sámegiela Áppesa*

* **SEMgiella2** Gen if you are Pron followed by giella *iežas giella*

* **SEMstahta1** Gen if 0 stáhta 1 org etc.

* **SEMfylka1** Gen if you are FYLKA followed by fylka *Romssa fylkkasuohkan*

* **SEMfylka2** Gen if you are FYLKA, then "ja" to the right followed by FYLKA *Finnmárkku ja Romssa fylkkagielddaide*

* **SEMfylka3** Gen if FYLKA and some place or org to the right *Finnmárkku ássiide*

### Other genitive rules

* **topGEN** Selects Gen if sentence intitial. To the right a Prf Prc that modifies nominative *Stáhta nammadan láhtu*

* **NomQst** Selects Nom in a Qst-sentence. To the left is Nom and leat with a Qst-particle *Leat go álbmotmeahcit veahkaváldi*

***Genlassin** Selects Gen if first one to the right is lassin *bargostipeanddaid lassin*

***lassinIll** Selects Ill if first one to the left is lassin *lassin Sarai*

### Gen and preposition/postposition

* **GenAPP** Selects genitive when a preposition to the left, or when a postposition to the right *rastá riikarájiid*

* **NomIfPo** removes Nom if sentence initial, because it modifies Gen

* **GenPoCoordPunct** Selects genitive for coordinated postpositions: with PUNKT to the left 

* **GenPoCoord** Selects genitive for coordinated postpositions *ráŋggáštusa ja buhtadusa hárrái*

* **GenGenPo** (modifies pp-phrase) selects Gen in front of postposition-phrase *álgojagiid soađi maŋŋá*

* **GenORG** (modifies Loc) selects Gen if you are MAIN-ORGANIZATION and to your right is Loc *dearvvašvuođafitnodagaid jahkedieđáhusain*

* **SEMnom** (modifies Nom) removes Acc if sentence boundary or adv to the left. To the right is Nom followed by a transitive verb and Acc *stálu beana njoallu háviid*

* **deaivatGenlusa** selects genitive when used like deaivat Gen lusa/lahkosii even if the verb deaivat belongs to the strict TV set.

### Genitive in place adverbials ROUTE

* **GenPlc** Selects genitive if you are ROUTE, and there is a MOVEMENT-V to your left or right *boahtiba dán geainnu*

* Selects accusative if you are ROUTE, and the verb čuovvut to the left. 

* **ruovttoluottaAdv**

### Adjectives take object

### Temporal adverbials: Choosing accusative or genitive TIME

* **GenMannuOrdRight** selects Gen if you are mannu and to your right is A Ord *miessemánu 10.*

* **GenMannuOrdLeft** selects Gen if you are mannu, to your left is Ord and to your right is a numeral

* **JahkeNumNom** selects Nom if you are Num, to your left is beaivi, then ord/Num and then mannu *borgemánu 1. b. 1891*

* **GenBoahtte** selects Gen if you are time, to your left is boahtte, boahtit, čuovvovaš or ovddit

* **TIMEobs** selects Gen if you are time, and to your right is an intransitive real-verb. No adverbials allowed to the right *vuolggán bearjadaga*

* **GenGuhte** selects Gen if you are vahkku with guhte to your left *guđe beaivvi*

* __Nom_b_1__ selects Nom if you are b/beaivi with a numeral/Ord to your left and a mannu to the left of that. To your right a finite verb čuovvut

* __Nom_b_2__ selects Nom if your are b with a numeral/Ord to your left and a mannu to the left of that. To your right copulas followd by beaivi in nom-case *juovlamánu 1. b. 1972 lei buorre beaivi*

* __Nom_b_3__ selects Nom if you are b/beaivi with Num/Ord to your left, with mannu to the left of that, with copulas even futer to the left and beaivi to the left of copulas

* **aigiAcc** Gen if 0 TIME 1 áigi

* **GenBeaivi2** selects Gen if you are beaivi with the end of the sentence or comma to your right. Restrictions to the left *riegádanbeaivvi,*

* **GenBeaivi3** selects Gen if you are beaivi with the beginning of the sentence to your right *Bearjadaga mii vuolgit*

* **GenBeaivi4** selects Gen if you are beaivi with a NP-boundary to your right

* **GenDate** selects Gen if you are Sem/Date

* **GenJuohke** selects Gen if juohke or seamma to the left *juohke dálvvi*

* **GenJahkiNum** selects Gen if you are jahki num with a numeral to your right *Skuvlajagi 1998-99*

* **AigiModifier** (modifier) selects Gen if aigi to the right *konferánssa áiggi*

* **GenHávvi** selects Gen for hávvi if Acc somewhere to the right 

* **GenHávvi2** selects Gen for hávvi if a transitive verb cannot be found somewhere in the sentence

* **GenGeardi** selects Gen if the beginning of the sentence to the left *Eará háviid*

* **GenRbeaivi** (modifier) selects Gen if riegádanbeaivi to your right 

* **GenGeardi2** selects Gen for geardi if Num Gen or Ord to the left 

* **GenTimePl** selects Gen for TIME-N + Pl if an attribute to the left *lagamus beivviid*

* **GenDURadj1** selects Gen if a duration adverbial to the left 

* **GenDURadj2** removes Gen for TIME-N, if duration adjective to the left *olles dálvvi*

* **GenDURNumPl** duháhiid jagiid

* **GenDUR1** removes Gen for VAHKKU-DUR if duration verb or place verb somewhere in the sentence. Restrictions. *ádjánii beaivvi*

* **GenDURNum** vázzen guokte maŋimuš jagi doppe

* **GenDUR2** removes Gen for VAHKKU-DUR if the duration verb or place verb to the left is perfectum participle or infinitive with an auxiliary to the left 

* **NoTimeAcc** removes Acc for time if POINT-IN-TIME-SPEC or Ord to the left *vuosttas beaivvi*

* **NoTimeAccII** removes Acc for time if POINT-IN-TIME verb to the left 

* **NoTimeAccIII** removes Acc for time if POINT-IN-TIME verb to the left is infinitive or perfectum participle with an auxilliary or negation to the left 

* **AccBeaivi** removes Acc for relative pronouns if followed by general beaivi *guđe beaivvi*

* **timeADVL** selects Gen for time: when perfectum participle or infinitive to the left are time adverbial verbs or not time object verbs, to the left of this there shall be an auxiliary *lean čoavdán cealkagiid maŋimuš áiggi*

* **theAccusative**_ selects Acc if you are a N or Pron with CC to your right, followed by Acc and a CLB or VFIN *gápmagiid ja vuoddagiid, sii geavahedje*

* **NotGenitive** selects Acc if you are a N or Pron with punctuation marks to your right, followed by a noun-phrase boundary

###  Reflexive pronouns: acc or gen

* **NUGOr2159** selects Gen between nugo and N *nugo suorri dulkaoahpu*

* **AccIEScoord** selects (Pron Refl Acc) Acc in front of "ja" to the left. To the right Loc or Ill *elliideaset ja iežaset ealáhussii*

* **GenIES** (modifier) selects (Pron Refl Gen) if NON-FAMILY OR ("bellodat") OR SAMEDIGGI-GEN to the right *iežaset mánáide*

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

* **gosnevrriid** selects Acc in the special cases where there is an Acc Pl in the beginning of the question which is not the object of the verb: Gos nevrriid...

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

* **GenNP2** Selects Gen for N (modifier): if CC "ja" immediately to your left and accusative to your right *ja sámi jurddašanvuogi*

* **GenNP3** Selects Gen (modifier): if first one to right is Nom or Loc *Norgga oaivegávpogis*

* **GenNP4** (modifier) selects Gen -1 BOS or COMMA, 1 Nom *nissoniid bargu*

* **GenNPCo** (modifier) Selects Pron Pers Gen if Nom to the left of ja *Mun ja mu ustibat*

* **GenRefl** (modifier) selects Gen in front of a noun in accusative or nominative case *iežaset oiviliid*

* **AccAfterCC** Select accusative: if genitiv to the left, and CC "ja" to the left of genitive *eamiálbmot- ja globaliserenprošeavtta koordináhtor*

### Accusative in coordination

* **CoAcc1** Selects Acc when NP inbetween commas *guolleoivviid, dáraid, debbuid, buđeittaid, boares rásiid*

* **CoAcc2** Select Acc if coordinator to your left and accusative to the left of the coordinator *deaja dahje sávtta*

* **CoAcc3** Selects Acc in front of *ja* if there is a secure Acc to the right *semináraid ja diehtojuohkinčoahkimiid*

* **CoAccJA** Selects Acc when "ja" to the left and comma to the left of "ja" with a secure Acc to the left of comma *sámegiela, ja heajos dárogiela.*

* **CoAccJA2** Selects Acc in front of Gen + Po if ja in front of Acc *ja ruhtan sávzzaid ovddas*

### Intransitive verbs can sometimes be transitive

* **IVasTV** Selects Acc if you are GEOGRAPHICAL-PLACE, ABSTR-ROUTE or EDUCATION and somewhere in the sentence is a intransitive verb acting as a transitive verb *sii vázzet skuvlla*

* **IVisTrans** Selects Acc if you are *spábba* and somewhere is *viehkat* 

* **IVisTrans2** Selects Acc if you are SHOE or HUNT-ANIMAL or BOAZU and somewhere is *vázzit*

* **IVceavzit** Selects Acc for ceavzit IV if you are *eksámen* and ceavzit is found somewhere in the clause 

* **IVnohkkat** Selects Acc if you are BEDCLOTHES  

* **IVsahttit** Selects Acc 

* **IVsahttit2** Selects Acc 

### Accusative or genitive in front of ALU and in front of adjectives

### Exceptional accusative attributes in front of ALU nouns.

* **ALU** Selects Acc when Num and right is MEASURE LINK 1 ALU

* **ALU2** Selects Acc when Num and not Adv, and 1 ALU

* **ALU3** Selects Acc for Num when right context Num ALU

* **NewGen** (complement of numerals) Selects Gen Sg when Num Sg to the left *guhtta kilu*

* **NewGenCo** (coordinated complement of numerals) Selects Gen if Num Acc + NewGen found to the left of "ja" *máŋga dáhpáhusa ja digaštallama*

* **ALU4** Selects Acc if you are Num and to your right Num Acc followed by MEASURE OR ALU/A *guokte golbma mehtara alu* 

* **ALU5** Selects Gen if Num to the right, followed by Num, followed by ALU/A 

* **NumTimeMannel** Selects Acc for Num before TIME MANNEL

* **NumPageMannel** Selects Acc for Num before siiddu etc + MANNEL.

* **NumPageMannel2** Selects Acc for Num before ovdalis etc

* **GenBoaris** Selects Gen in golbma *jagi* boaris

- Ritva comment: Find a rule for "viđa" aswell, this hits "mehter" as it should

* **XXr2002** Selects genitive if there is a numeral immediately to your left, and you are TIME: *golbma jagi*

### Numerals 

* **NumGenPo** Selects Gen for a numeral if a transitive verb to the left. To the right a Gen followed by a postposition *vuovdán 163 000 ruvnnu ovddas*

* **NumMoney** Selects Gen if you are a numeral and immediately to your right is CURRENCY *vihtta ruvnnu*

* **NumGitta** Selects Acc when you are a numeral with "gitta" immediately to your right followed by a numeral with acc-case *180 gitta 200*

* **NumAcc1** Selects Acc if you have a transitive verb to the left and you are a numeral followed by a noun  *oste guokte mielkki*

* **NumJahki** Removes Acc if you are a numeral and JAHKI-NUM is immediately to your left *mávssii mannan jagi 43 ruvnnu*

* **NomIfNum** Removes Acc if Gen to the right (because you are Nom). Transitive verb with an Acc to the right *máŋga gávpeolbmá lonuhedje fáhcaid*

* **NumAcc2** Selects Acc for singular numerals if there is a transitive verb somewhere in the sentence and the numeral is followed by a noun *logi báhkkoma* OBS

* **GenIfNum** (complement of numerals) Selects Gen Sg if there is a Num Sg to your left *guđa geardde* 

* **NumAccCo** (coordinated num) Selects Acc if you are Num Sg and to your right: CC with a Num to the right *guokte ja eanemusat golbma*

* **NumAccIV** Selects Acc 

* **NumAge** Selects Acc for Sg numerals if a time unit to the right is followed by boaris *vihtta jagi boaris*

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

* __jr_sr__ Selects (ABBR Nom) if you are *jr* or *sr* and first one to your left is (Sem/Sur Nom)

## Accusative before @COMP-CS<
## Accusative before some A
## Accusative sentence-finally

## Genitive

* **r2143** The most frequent genitive rule: Gen when postpos immediately to the right:

## Nominative and accusative

* **NAr2266** Selects Nom

***NomIFInitialThenSg3** Selects Nom if -1 BOS and 1 oblique / Sg3 lookalike. Works in fragments.

* **NAAccEllipsis1** Selects Acc	

* **NAAccEllipsis2** Selects Acc

* **r2281** marginal

* **NAr2288** Removes Nom

## Nominative

### Miscellaneous rules
* **NDnom** Selects Nom

* **NDr2300** Selects Nom if Gen immediately to the left. You are N-SG-NOM and to your right is SG3-V *Du ášši lea dehálaš*

* **NDr2302** Selects Nom if immediately to the left is "ruvdno" and to the left of it is Num *70 ruvnno mehtar*

* **NDr2304** Selects Nom for (Num Sg Loc) if to the left is a spesific word and to the right is EOC 	

* **NDr2305** Selects Nom for (Coll Nom) if to the left is (Pers Pl Nom) *mii golmmas*

* **NDr2306** Selects Nom for (N Nom) if to the left is "okta" or "nubbi" *okta lihtter*

* **NDr2308** Selects Nom for PROP

### Vocatives, subjects of sentence fragments
* **NDr2309** Selects Nom

* **NDr2310** Selects Nom	

* **NDr2311** Selects Nom

* **NDr2312** Selects Nom

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

### Nominative after "go", "dego", "dugo" and "nugo"

* **NDr2324** Selects Nom

* **NDr2325** Selects Nom

* **NDr2326** Selects Nom

* **NDr2327** Selects Nom

* **NumNomgo** Selects (Num Nom)

* **NumAccgo** Selects (Num Acc)

### Preverbal subjects

* **NDr2331** Selects (N Nom)

* **NDr2332** Selects (Num Nom)

* **NDr2333** Selects (Num Nom)	

* **NDr2334** Selects Nom

* **NDr2335** Selects Nom

* **NDr2336** selects (N Sg Nom) when 1 SG3-V

* **NDr2337** Selects (N Sg Nom)	

* **NDr2338** Selects (N Sg Nom)	

* **NDr2339** Selects (N Sg Nom)	

* **NDr2341** Selects Nom

* **NDr2341** Selects Nom

* **NDr2343** Selects (Sg Nom)

* **NDr2345** Selects Nom

* **NDr2350** Selects Nom

* **NDr2351** Selects Nom

* **NDr2353** Selects Adv

* **NDr2354** Selects Adv

* **NDr2355** Selects Adv

* **NDr2357** Selects (A Pl Nom)

* **NDr2358** Selects (A Pl Nom)

* **NDr2359** Selects (A Pl Nom)

### Postverbal subjects

* **NDr2360** Selects Nom

* **NDr2361** Selects Nom

* **NDr2364** Selects (Sg Nom)

* **NDr2366** Selects Nom

* **NDr2367** Selects Nom

* **NDr2368** Selects (N Pl Nom)

* **NDr2369** Selects (Pl3 Nom)

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

* **NDr2381** Selects (Pl Nom)	

* **NDr2382** Selects (Pl Nom)

* **NDr2383** Selects Nom

* **NDr2384** Selects Nom

* **NDr2385** Selects Nom

* **NDr2386** Selects Nom

* **NDr2387** Selects Nom

### Nominative as objects in existential clauses

* **NDSgr2388** Selects Nom

* **NDPlr2388** Selects Nom

* **NDr2389** Selects Nom

* **NDr2390** Selects Nom

* **NDr2391** Selects Nom 

* **NDr2392** Selects Nom

* **NDr2396** Selects (Pl Nom)

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

* **NDr2414** Selects Nom

* **NomCCNom** Selects Nom

* **NDr2416** Selects Nom

* **NDr2417** Selects Nom

* **NDr2418** Selects Nom

* **NDr2420** Selects Nom

* **NDr2421** Selects 

### Nominative in parallell constructions

* **NDr2422** Selects Nom

* **NDr2423** selects Nom if it finds a Nom to the left of CC and to the left of a verb. No verb allowed to the right *eamit barggai vuođđoskuvllas ja isit fas gymnásas*

* **nomHnoun** Selects Nom

* **SOV** Selects Nom in front of an Acc	

### Not nominative
* **NDr2424** Removes Nom

* **NDr2425** Removes Nom

* **NDr2426** Removes Nom, but not Actio 

* **NDr2427** Removes Nom

* **ND** Removes Nom	

## Comitative rules

### NP internal disambiguation of Com

* **PlSg-W** removes Pl when SG-WORD

* **LocPlur** removes Sg when PLURALIZER or OASSI OR HEADOFPARTS

* **Locgoabbat** selects Pl Loc after goabbat Foc/ge

* **NumCom** selects Num Com: guvttiin nieiddain if not plural-noun like: guvttiin heajain

* **ComDemNum1** selects N Com if there is a Dem or Num or buorre + Com to the left: Exception for plural-nouns  

* **Comburiin** selects N Com if there is a safe N Com to the right: buriin vugiin  

* **ComCOM-A** selects Sg Com after COM-A

* **Comduhtavas** selects Sg Com after duhtavaš

* **ComComAdv1** selects Com after COM-ADV or juohke

### Disambiguation based upon verb valency

* **LocLocVL1, LocLocVR** select Pl Loc if there is a LOC-V

* **LLocAccLocVL** select Pl Loc if there is a ACC-LOC-V

* **Loc-v** select Sg Loc if LOC-V to the left in the clause. No mainverb to the right in the clause

### Disambiguation of Com depending on Adv or certain verb or N

* **ComComAdv1** selects Com for ACTOR OR ACTOR-ROLE after og before COM-ADV 

* **Comboahtit** selects riika Com when boahtit: boahtit riikkainis, which is a special construction

* **ComComplPl-N** selects Sg Com for HUMAN, ORGANIZATION, INSTITUTION, STATE, EVENT-TOOL-ACTIVITY, láhka when there is a COM-COMPL-N to the left or right

* **Comoktavuohta** selects Sg Com when oktavuohta is to the left or right

* **ComDU-NR** selects Sg Com after Pers dualis: moai áhčiin, munno vieljain

* **ComHumanOrg** selects HUMAN Sg Com after HUMAN, ORGANIZATION, INSTITUTION

### Animate nouns
* **ComAnimate** selecst Sg Com if there is an animate to the left, and the noun itself is not a ABSTR-TEXT,  TEXT,  PLACE,  INDUSTRY,  EDUCATION,  INSTITUTION,  ANIMATE

* **ComProp** selecst Prop Sg Com for person names. Exception for habitive constructions.

### HAB-ACTOR in habitive-constructions

* **LocHab1, LocHab2** select Pl when HAB-ACTOR

* **LocHab1, LocHab2** select Pl when HAB-ACTOR

* **LocGenerell** select Pl 

váldit vára + Loc

dahkat earrodearvvuođat geainna nu

eallit mainna nu

### Disambiguation based upon verb valency 

### COM-V 
* **ComVR, ComVL** select Com when COM-V

* **ComVOktiiL** select Com when OKTII-V 

* **ComVOktiiR** select Com when OKTII-V 

### tools (concrete and abstract)

* **ComTool1, ComTool2, ComToolCoord** select Com TOOL when ACTIVITY-V, MOVEMENT-V, PLACE-V-V 

* **ComHuman** selects Com ABSTR-TOOL OR SATNI when HUMAN-AGENT-V - does it function? 

### BODY as an instrument

* **ComBodyVerbalV** selects Com BODY when VERBAL-ACTIVITY-V 

* **ComHumanVerbalV** selects Com HUMAN when VERBAL-ACTIVITY-V or báhcit

* Abstract-entity-com-verbs

* **ComAbstract** selects Com if ABSTR-ENTITY-COM-V somwhere

* **ComOnlyPlaceV** is Only-place-loc-verb 

### Dynamic-verbs

* **LocdynamicVR, LocdynamicVL** select Pl Loc if there is a DYNAMIC-V and the noun itself is not a TOOL, ABSTR-TOOL, WRITING-TOOL, CONCEPT, HUMAN, VEHICLE, buorre, Der/NomAc

### Event-tool-actio
Most actio can be both tool and event. 

### PLACE-V

* **LocFurniture** select Pl Loc FURNITURE if there is a PLACE-V

* **ComPlaceV** select Com ANIMATE, CONCEPT, TOOL, ABSTR-TOOL, EVENT-TOOL-ACTIVITY if there is a PLACE-V

* **LocInstitution** select Loc INSTITUTION if there is a ABSTR-PLACE-V

* **LocPlaceIndustry** select Loc GEOGRAPHICAL-PLACE if there is a INDUSTRY to the right

* **LocSourceVR** select (Pl Loc)  

* **LocHumanAgVL** XXX This one was commented out (cf. 0 .. LINK ... BARRIER). Note that this rule did not affect the test result

* **LocHuman-agentV** XXX This one was commented out (cf. 0 .. LINK ... BARRIER). Note that this rule did not affect the test result

### STATE-V (eallit)

### Movement-verbs

### The super-set Dynamic-verb according to choose (Pl Loc) or (Sg Com)

The idea is that the superset DYNAMIC-V are not connected to TOOL, ABSTR-TOOL or CONCEPT in (Pl Loc). This is the "minste felles multiplum". The sub-sets are different, f.i. many of them (but not all) are not connected to HUMAN in (Pl Loc), one is not connected to ABSTR-ENTITY and ACTOR in (Pl Loc). We work with negation so the rules don´t destroy analysis because of insufficent sets. 

First the general-rules for selecting (Sg Com), then the more special rules for selecting (Sg Com), and then we selct (Pl Loc) for the rest of them under # Another round of locative rules.

* **ComDynV** Dynamic-verbs selects Com when TOOL, ABSTR-TOOL, WRITING-TOOL, CONCEPT, EVENT-TOOL-ACTIVITY

* Dynamic-verb selects Com when HUMAN, but not for HUMAN-SOURCE-VEHICLE-V 

* **ComBody** Body-activity-verb Selects Com when BODY, for BODY-ACTIVITY-V or VERBAL-ACTIVITY-V

* **ComVeh** Selects (Sg Com) if you are VEHICLE, default is Sg Com

### HUMAN-LOC-V 
* **LOCsatni** Selects (Pl Loc)

* **LOCwordparts** Selects (Pl Loc)

* bivvat - we don't need this any more

* ealihit

* ipmirdit / áddet

* ruhtadit

* suokkardit and čielggadit

* vástidit 

* Coordination

* **AccTV1NoC** was Eckhard's late version of AccTV1 without C. We will look at this.

* **AccEOS** is The Dangerous Rule: it is the last rule before removing all leftover Acc. It only selects Acc if Nom is not an option, dont change this btw, and the end of the sentence is the next one to the right

* **genRel** removes genitive if Rel to your right *ožžot olbmot skoviid maid*

* **genAcc** selects Acc 

* **genNom** removes Acc

* **makkárAcc** selects Acc after makkár, if not time or route

* **DemAcc** selects Den Acc after the last acc-disambiguation of nouns

* **KillAcc** Removes Acc if you are Gen 

### Locative and comitative - Disambiguation based upon coordination

### And then we remove the remaining Sg Com analysis

## Essive  

## Late case rules (after other case rules have worked). 

# VERBS PART 2, Section #22

## Finite or not

### Finite

### Not Finite

### Indicative Negative

### Infinitive

* **InfComplToN** Inf when -1 N

## Indicative or imperative

## Verbs according to person and number

### Sg1 - First person singular

* **InitialLeanRule** selects lean when no VFIN to the left

* **Sg1WhenAloneVfin** selects Sg1 when no other VFIN or PrfPrc

### Sg2 - Second person singular

* --r2907**Sg2** Prt Sg2 if ikte etc.

### Sg3 - Third person singular
Infinitive and clausal subject

Rules that look backwards for a subject across a relative clause:

Rules that look backwards for a subject across a subordinate clause (CP boundary):

Extension possibilities: Coordination

Son oaidná du ja mu ovdal go boahtit... 

Coordinated Sg3 verbs

Not (V Sg3)

### Du1 - First person dual 

* **MunJaDonDu** selects Du1 if Mon V ja don V de V-Du2

* **DonJaMunDu** selects Du1 if Don V ja mun V de V-Du2

The previous two rules look marginal.	

* **DuNotPrtIfToday** selects Du1 over Prt in the context of a present-marker.

* **Du1IfDu1** selects Du1 with a left context Du1 ... ja ... 

* **NoDu1** removes Du1 if no MOAI or Du1 around.

### Du2 - Second person dual

### Rules for leahppi = ("leahppi" N Sg Nom)

### Du3 - Third person dual

### Pl1 - First person plural

### Pl2 - Second person plural

### Pl3 - Third person plural

* **Pl3IfPlSubj** Pl3 if Pl noun to the left

* **Pl3IfPlSubj** Pl3 if safe plural (incl pron) to the left

* **Sg2LeftDon** selects Sg2 in Rel phrase if don to the left of it

* **allSg2leat** removes Sg2 if leat Prs Pl3

* **allPrsPl3** removes PrsPl3 if PrtSg2 initially

* **allPrtSg2** removes PrtSg2 if PrsPl3

## Rules for a special infinitive construction
## More finite verbs
## Passive
## Infinitive
## Present Participle
## Actio/Perfect Participle 

## Actio
## Selecting some more finite verbs

## Lexical disambiguation of verbs 

# NOMEN

## Case rules

## Other rules for nouns and pronouns

## Determiners
## Adverbs and adjectives

# NOUNS

* **derNEss** removes DER-N if lexicalised essives (revise this) - flytter denne til slutten av fila

## Variant lemmas

* Remove lemma2 if lemma 1

* **cleanSemClass** cleans up if a word has more semclasses. This is just a start.

# VERBS

# Removing Err/Orth

* * *
<small>This (part of) documentation was generated from [src/cg3/coredisambiguation.cg3](https://github.com/giellalt/lang-smn/blob/main/src/cg3/coredisambiguation.cg3)</small>
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

* * *
<small>This (part of) documentation was generated from [src/cg3/valency.cg3](https://github.com/giellalt/lang-smn/blob/main/src/cg3/valency.cg3)</small>
# Continuation lexicons for abbreviations

## Lexica for adding tags and periods

## The sublexica

### Continuation lexicons for abbrs both with and witout final period

* **LEXICON ab-noun**

* **LEXICON ab-adj**

* **LEXICON ab-adv**

* **LEXICON ab-num**

### Lexicons without final period

* **LEXICON ab-nodot-noun**  The bulk

* **LEXICON ab-nodot-adj**

* **LEXICON ab-nodot-adv**

* **LEXICON ab-nodot-num**

### Lexicons with final period

* **LEXICON ab-dot-noun**  This is the lexicon for abbrs that must have a period.

* **LEXICON ab-dot-adj**  This is the lexicon for abbrs that must have a period.

* **LEXICON ab-dot-adv**  This is the lexicon for abbrs that must have a period.

* **LEXICON ab-dot-num**  This is the lexicon for abbrs that must have a period.

* **LEXICON ab-dot-cc**

* **LEXICON ab-verb**  A lexicon for "gč." and perhaps also other abbreviated verbs.

* **LEXICON ab-dot-verb**

* **LEXICON ab-nodot-verb**

* **LEXICON ab-dot-IVprfprc**

* **LEXICON nodot-attrnomaccgen-infl**

* **LEXICON nodot-attr-infl**

* **LEXICON nodot-nomaccgen-infl**

* **LEXICON dot-attrnomaccgen-infl**

* **LEXICON dot-attr**

* **LEXICON dot-nomaccgen-infl**

* **LEXICON DOT** - Adds the dot to dotted abbreviations.

* * *

<small>This (part of) documentation was generated from [src/fst/affixes/abbreviations.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/abbreviations.lexc)</small>

---



# Inari Saami acronyms

## The lexica giving tags and suffixes to the acronyms

* **LEXICON UNIT**  As acro, but without paradigm

* **LEXICON ACRO_ACCRA**

* **LEXICON ACRO** adds +N+ACR and redicrects to acroconnector

* **LEXICON acroconnector** Here comes a set of possible symbols to put between the abbreviation and its suffix

* **LEXICON acronull**  for suffixless forms, redirecting to K_only for clitic forms

* **LEXICON acrooblique**

* * *

<small>This (part of) documentation was generated from [src/fst/affixes/acronyms.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/acronyms.lexc)</small>

---



# Adjective affixes

This file contains the morphology for the Inari Saami adjectives.

The morphophonological processes are governed by triggers. When there are more
triggers, tney must be ordered as follows (where {A,B} C means *A or B, thereafter C*):

{SV,ÁE,ÁI}  SC  FCD {WG,CSH} CLEN  {VHIGH,VBACK}  {RVSH,RLEN} EA {SLEN,SVSH}  SVLOW

## Adjectives with attr only

**LEXICON ATTR** for stems with only attribute form, gives Attr, svt. sends to Cmp.

## Even-syllable stems

**LEXICON SIAHA** for siähá. It gives only Attr and Sg/Pl Nom. Fix?

**LEXICON SKELMA** directing to X_ALGA, attr skelmâ

**LEXICON CEPPI** directing to X_AIGI, attr. čepis

**LEXICON UCCE** 

**LEXICON SUVRE** 

**LEXICON KUKKE** directing to X_ALGE, attr. kuhes

**LEXICON PASE** directing to X_NJUNE via HUMO_REST, attr. pase                  

**LEXICON HUMO** directing to X_NJUNE via HUMO_REST, attr. humos                  

**LEXICON HUMO_REST** 

**LEXICON UAMI** directing to X_SAAMI, attr. uá'mi

**LEXICON LAAMI** directing to X_SAAMI, attr. lämis

**LEXICON LAAMI_REST** 

**LEXICON PYERI** directing to X_KYELI, attr. pyeri

**LEXICON HYENI** directing to X_KYELI, attr. hyenes

**LEXICON NUORA** directing to X_KIELA, attr. nuora

## Odd-syllable stems

**LEXICON NJUORAS** directing to X_RUONAS, attr. njuorâs

**LEXICON UAMIS** directing to X_RUONAS, as an own group because of FCD, attr. uámi, čuámi, often used in compounds

**LEXICON HAANIS** directing to X_PAAVIR, attr. hänis

**LEXICON TIMES** directing to X_PAAVIR, attr. timmâ

**LEXICON KIARGUS_nocomp**  like HAANIS, directing to X_PAAVIR, 

**LEXICON HAAITIS** directing to X_VEESKIR, attr. rähis, not in use

**LEXICON HEEITUG** directing to X_PAAVIR, attr. heitugis, heitugâs

**LEXICON VAANIS** directing to  X_PAAVIR, attr. väni

**LEXICON NJAALGIS** directing to NJAALGIS_COMMON, Attr. njaalgâ and njälgis

**LEXICON RAAPIS** directing to NJAALGIS_COMMON, Attr. räpis 

**LEXICON NJAALGIS_COMMON** directing to  X_KAARBIS

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

**LEXICON A_LITTER** directing to X_LITTER

**LEXICON ALMOS** directing to X_SAJOS, attr. almos

**LEXICON MAGGAAR** as SOOHAD_NOCOMP, BUT WITHOUT ATTR.

**LEXICON SOOHAD_nocomp** directing to X_EEMEED, attr. sohâdis

**LEXICON SOOHAD** directing to X_EEMEED, attr. sohâdis

**LEXICON SOOHAD_NULLATTR** 

**LEXICON SOOHAD_NOATTR** 

**LEXICON MAAJEEB-COMP** comparative lexicon

**LEXICON PEEGGALM** directing to X_EEMEED, attr. sohâdis

**LEXICON JUARBUDEKES** 

**LEXICON JUARBUDEVES** 

**LEXICON JUARBUDEKES_INFL** 

LEXICON A_KOLME ad hoc three syllable stem > LITTER

**LEXICON KUBDUV** . It doesn't fit with KAAMUV because of kubduvân, kubduvist

**LEXICON KUBDUV_COMP** 

## Contracted stems

**LEXICON ALKKEE** directing to X_TAHHEE, attr. älkkees

**LEXICON A_IJJE** 

**LEXICON TTETTEE** 

**LEXICON PYECCEE** directing to X_TAHHEE, attr. pyeccee

**LEXICON ALKKEE_COMMON** common for ALKKEE and PYECCEE

**LEXICON A_KAANDAS** directing to X_KAANDAS, no attr, half congruence

**LEXICON A_TUULAS** directing to X_KAANDAS, no attr, half congruence

**LEXICON STYERES** directing to X_KAARBIS, attr. stuorrâ

**LEXICON RIGES** directing to X_KAARBIS, attr. riges, 3st comparision

**LEXICON MUOTTII** almost like KARRII, direct to it?

**LEXICON A_VUALAAS** 

**LEXICON SIAMMAS** 

**LEXICON JIAVTAS** 

**LEXICON TAASSAS** note táássáš itself is not here.

## 4 syll stems

**LEXICON A_KUNAGAS** directing to  X_KUNAGAS; syeligâs, is like kunâgâs but FCD is not enough to create the comparation

**LEXICON UANIHASJ** directing to LAS_SUF, attr, -âš

**LEXICON KIERDAVAS** 

**LEXICON UANIHASJ_INFL** 

**LEXICON UNOHAS** directing to LAS_SUF, attr, -is

**LEXICON ANOLASJ** directing to LAS_COMMON, attr, -âš
Adj - pooliitlâš: # attr. pooliitlâš; puolikongruenssi mahdollinen (#-paikat), puolikongr. asemesta SgNom.

**LEXICON LAGAN** directing to A_LITTER, attr. -lágán

**LEXICON MUSTOTTEM** pls note e > iä in sg ill; no comparation

**LEXICON A_INDECL** not all forms., attr = Sg. Nom.

**LEXICON OLMOOSMETTUM**, not all forms. attr. = Sg. Nom.

**LEXICON METTUMforms** 

## Der/Comp+Aarision

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

* **LEXICON SUP_MUS**

* **LEXICON SUP_MUSJ** majemuš

* **LEXICON MUS**  asdf

* **LEXICON MUSj** SUP_MUSJ uses this lexicon, eg. majemuš

* **LEXICON CMUS**  STYERES uses this lexicon

* **LEXICON MOS**

* **LEXICON MUS-SUF**

* **LEXICON MUSj-SUF**

* **LEXICON CMUS-SUF**

**LEXICON P-COMP-ERR-ORTH** 

* **LEXICON A_VUOTA** for derivation

* **LEXICON FLAG_2KIELA** @C.NeedNoun@

* **LEXICON A_ADV** for derivation

* **LEXICON A_LAGAN** for derivation

**LEXICON A_LASJ** 

**LEXICON ATTR_R** sends to R, NAMAG, SAS, CMP_ADJ.

* * *

<small>This (part of) documentation was generated from [src/fst/affixes/adjectives.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/adjectives.lexc)</small>

---



# Sublexica for nominal morphology 

Note: Triggers **must** be put in this order ("|" meaning "or") in 
order for the morphophonology to work: 

{SV,ÁE,ÁI}  {EA,EX,SC}  {FCD,FVD} {WG,CSH} CLEN  {VHIGH,VBACK}  {RVSH,RLEN} {SLEN,SVSH}  SVLOW 

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

## Unclassified lexica 

These two lexica are temporary lexica for words waiting to be classified. 

**LEXICON KOLME** contains some ad hoc three syllable stem, for now directed to: 
* **3LITTER ;** 

**LEXICON nounstems** contains words that should be classified, for now directed to: 
* **3LITTER ;** 

## Even-syllable stem lexica 

### The 2ALGA lexicon family 
This is the basic even-syllable lexicon. 
(Note: 2VADDU differs from 2ALGA in having CLEN for Sg+Com and Pl+Ill , rlen svlow, ess:-) 

* **LEXICON 2ALGA** (basic lexicon) 

* **LEXICON 2ALGA_SG** (Px paradigms) 

* **LEXICON X_ALGA** (common to all POS) 

* **LEXICON X_ALGA_SG** case paradigms sg a^RVlgâ, ku^RVssâ 

* **LEXICON X_ALGA_PL** case para pl (plurals for 2KUMPPI) 

* **LEXICON X_ALGA_PL_COMMON** Pl Nom and directing to 
* **X_WG_RLEN_PL_Loc ;** 

* **LEXICON 2AIRU** (subtype of 2ALGA) 

### 2PUUVSAH lexicon family, stem is pu^RVk4s^RCâ 
This for plural only nouns. Note: Sg forms in compounds 
* **LEXICON 2PUUVSAH_PL** (basic lexicon) 
has WG compound form, then pointing to 
* **2PUUVSAH_PL2 ;** 

* **LEXICON 2PUUVSAH_PL2** (pointed to by 2KUMPPI) 

* **LEXICON X_WG_RLEN_PL_Loc** plural forms with ^WG and ^^WG^RLEN 

* **LEXICON X_WG_RLEN_PL** 

### 2SOLLA lexicon family 
SM1, RLEN, earlier LLEN !rlen svlow, sgcom/plill:rlen  ess:clen 
Last vowel is â. 
* **LEXICON 2SOLLA** (basic lexicon) 

* **LEXICON 2SOLLA_SG** (Sg forms‚ pointing to Px) 

* **LEXICON 2SOLLA_PL** (Pl forms, pointing to Px) 

* **LEXICON X_SOLLA_SG** (Sg absolute forms) 

* **LEXICON X_SOLLA_PL** (Pl Ill, the rest pointing to 
X_ALGA_PL_COMMON ;) 

### 2JUUHA lexicon family 

* **LEXICON 2JUUHA** (basic lexicon) 

* **LEXICON 2JUUHA_SG** 

* **LEXICON 2JUUHA_PL** 

* **LEXICON X_JUUHA_SG** (common POS Sg) 

* **LEXICON X_JUUHA_PL** (common POS Pl) 

* **LEXICON JUUVAS** (A lexicon for lexicalised deminutive words, thus words NOT having a double deminutive) 
So far it has only one member, juuvâš, and no Px 

* **LEXICON X_JUUVAS_SG** stem is ju^RVh^RC 
* **LEXICON X_JUUVAS_PL** 

### 2KIELA lexicon family 
WG, blank Ill, DLEN, RVSH, SVLOW 

* **LEXICON KIELAonly** 

* **LEXICON 2KIELA** (basic lexicon -> sg, pl) 

* **LEXICON X_KIELA** (-> sg, pl) 

* **LEXICON 2KIELA_SG** (Sg forms, pointing to Px) 

* **LEXICON 2KIELA_PL** (Pl forms, pointing to Px) 

* **LEXICON X_KIELA_PL** 

* **LEXICON X_KIELA_SG** 

### JUUHA-KIELA common forms 
* **LEXICON JUUHA_KIELA_SG** 

* **LEXICON X_WG_RVSH_PL_notILL**

### 2TELTTA lexicon family 

* **LEXICON 2TELTTA** teltta Check: is this identical to KISSA? 

* **LEXICON 2TELTTA_SG** 

* **LEXICON 2TELTTA_PL** 

* **LEXICON X_TELTTA_SG** 

* **LEXICON X_TELTTA_PL** 

### 2FADDA lexicon family 

* *LEXICON 2FADDA*:  This might be the standard even syllabi lexicon 

* **LEXICON 2FADDA_SG** 

* **LEXICON 2FADDA_PL** 

* **LEXICON X_FADDA_SG** 

* **LEXICON X_FADDA_PL** 

### 2KISSA lexicon family 

* **LEXICON 2KISSA**  No root vowel lengthening 

* **LEXICON 2KISSA_SG** 

* **LEXICON 2KISSA_PL** 

* **LEXICON X_KISSA_SG** 

* **LEXICON X_KISSA_PL** 

### 2CAANA lexicon family 

* *LEXICON 2CAANA*: čááná - čá^RVn^RCá 

* **LEXICON 2CAANA_SG** 

* **LEXICON 2CAANA_PL** 

* **LEXICON X_CAANA_SG** 

* **LEXICON X_CAANA_PL** 

### 2TAHO lexicon family 

* **LEXICON 2TAHO** only for taho, similar to 2LAJO except from Pl+Ill, almost similar to 2SPAHA 

* **LEXICON 2TAHO_SG**

* **LEXICON 2TAHO_PL** 

### 2LAJO lexicon family 
* **LEXICON 2LAJO** 

* **LEXICON 2LAJO_SG** 

* **LEXICON X_LAJO_TAHO_SG** 

* **LEXICON 2LAJO_PL** 

* **LEXICON LAJO_TAHO_PX_PL** 

* **LEXICON X_LAJO_PL** 

### 2NJUNE lexicon family 

* **LEXICON 2NJUNE** almost similar to 2LAJO 

* **LEXICON X_NJUNE** almost similar to 2LAJO 

* **LEXICON 2NJUNE_SG** 

* **LEXICON 2NJUNE_PL** 

* **LEXICON X_NJUNE_SG** 

* **LEXICON X_NJUNE_PL** 

### 2ALME - 2ALGE - 2NIJBE lexicon family 

* **LEXICON 2ALGE** 

* **LEXICON X_ALGE** 

* **LEXICON 2ALGE_SG** 

* **LEXICON 2ALGE_PL** 

* **LEXICON X_ALGE_SG** 

* **LEXICON X_ALGE_PL** 

* **LEXICON X_ALGE_NIIBE_PL** 

* **LEXICON 2NIJBE** 

* **LEXICON 2NIJBE_SG** 

* **LEXICON 2NIJBE_PL** 

* **LEXICON X_NIJBE_SG** 

* **LEXICON X_NIJBE_PL** 

### 2VAHE lexicon family 

* **LEXICON 2VAHE** 

* **LEXICON 2VAHE_SG** 

* **LEXICON 2VAHE_PL** 

* **LEXICON X_VAHE_SG** 

### 2KUMPPI lexicon family 
i-i-i > 2SOLLA (?); MLO: no, difference in sg Com and pl Ill 
* **LEXICON 2KUMPPI** (basic lexicon, pointing to 
* **2FADDA_SG ;** but having different compound form) 

* **LEXICON 2KUMPPI_PL**  (plurals for 2KUMPPI, pointing to 
+N: X_ALGA_PL ;) 

### 2SAAMI lexicon family 

* **LEXICON 2SAAMI** to 2LAAVU after fix in twolc?  saämijn > saamijn when ^WG^CLEN^SVLOW 

* **LEXICON X_SAAMI** to 2LAAVU after fix in twolc?  saämijn > saamijn when ^WG^CLEN^SVLOW 

* **LEXICON 2SAAMI_SG** 

* **LEXICON 2SAAMI_PL** plurals for 2SAAMI 

* **LEXICON X_SAAMI_SG** to 2LAAVU after fix in twolc?  saämijn > saamijn when ^WG^CLEN^SVLOW 

* **LEXICON X_SAAMI_PL** plurals for 2SAAMI 

### 2CAACI - 2VYEHI lexicon family TODO -- 
WG, Ill EA, Com CLEN SVLOW, Ess **with** CLEN 
* **LEXICON 2CAACI** (basic lexicon 

* **LEXICON 2VYEHI** WG, Ill EA, Com CLEN SVLOW, Ess **without** CLEN 

* **LEXICON 2VYEHI_SG** sg forms 

* **LEXICON X_VYEHI_SG** (different Ess, Par), otherwise 
X_CAACI_VYEHI_SG ;) 

* **LEXICON CAACI_VYEHI_SG** common for the two 

* **LEXICON 2CAACI_VYEHI_PL** common Pl forms for Px 

* **LEXICON X_CAACI_VYEHI_SG** common Sg case forms 

* **LEXICON X_CAACI_VYEHI_PL** 

### 2AIGI lexicon family 

* **LEXICON 2AIGI** similar to 2VADDU except from EA for Sg+Ill 

* **LEXICON X_AIGI** similar to 2VADDU except from EA for Sg+Ill 

* **LEXICON 2AIGI_SG** ä^RVi4gi

* **LEXICON 2AIGI_PL** 

* **LEXICON X_AIGI_SG** 

### 2KYELI - 2SYEJI lexicon family 
ne pitää yhdistää, yksi ero: 
X-leksikossa Sg Ill erilainen 

* **LEXICON 2KYELI** i-e-á, similar to 2ALGE, except from -i some places.     

* **LEXICON 2KYELI_SG**  kyeli nouns 

* **LEXICON KYELI_SYEJI_SG** i-e-á,     

* **LEXICON 2_KYELI_SYEJI_SG_PX**  common kyeli-syeji px 

* **LEXICON X_KYELI** lexicon coming in from the adjectives             

* **LEXICON X_KYELI_PL** i-e-á, similar to 2ALGE, except from -i some places. 

* **LEXICON 2KYELI_PL** 

* **LEXICON 2_KYELI_SYEJI_PL_PX** 

* **LEXICON KYELI_SYEJI_PL** i-e-á,     

### 2KIRKKO - 2NJAMMA lexicon family 

* **LEXICON 2KIRKKO**  > KIRKKO_NJAMMA, but WG for Sg+Loc: 

* **LEXICON 2KIRKKO_SG** 

* **LEXICON 2NJAMMA** njamma > KIRKKO_NJAMMA, but WG CLEN for Sg+Loc: loho:lovvoost 

* **LEXICON KIRKKO_NJAMMA_SG**   

* **LEXICON KIRKKO_NJAMMA_PL**   

* **LEXICON X_KIRKKO_NJAMMA_SG** 

### 2VASO lexicon family 

* **LEXICON 2VASO** only for vašo, similar to 2LAJO except from Sg+Loc, almost similar to 2SPAHA and 2TAHO. Blank Nom, Ill, Ess SV CLEN SLEN, otherwise WG 

* **LEXICON 2VASO_SG** 

* **LEXICON 2VASO_PL** 

* **LEXICON X_VASO_SG** 

* **LEXICON X_VASO_PL** 

### 2OKKO lexicon family 

* **LEXICON 2OKKO** Pl+Acc WG, Pl+Ill WG CLEN 

* **LEXICON 2OKKO_SG** 

* **LEXICON 2OKKO_PL** 

* **LEXICON X_OKKO_SG** Pl+Acc WG, Pl+Ill WG CLEN 

* **LEXICON X_OKKO_PL** Pl+Acc WG, Pl+Ill WG CLEN 

* **LEXICON 2RAAVHU** like 2LAAVU, but long vowel in cmp. 

* **LEXICON 2RAAVHU_SG** 

* **LEXICON 2RAAVHU_PL** 

* **LEXICON 2VIASU** just as LAAVU, but without the short gen/acc 

* **LEXICON 2LAAVU** WG, Ill EA, Com SVLOW, Ess CLEN 

* **LEXICON 2LAAVU_SG** 

* **LEXICON X_LAAVU_SG** 

* **LEXICON 2LAAVU_PL** 

* **LEXICON X_LAAVU_PL** 

* **LEXICON 2VUAGGU** 

* **LEXICON 2VUAGGU_SG** 

* **LEXICON 2VUAGGU_PL** 

* **LEXICON X_VUAGGU_SG** 

* **LEXICON 2KUSSA** 

* **LEXICON 2KUSSA_PL** 

* **LEXICON 2VADDU** 2AIGI has EA for Sg+Ill, 2SOLLA has RLEN for Sg+Com and Pl+Ill 

* **LEXICON 2VADDU_SG** 

* **LEXICON 2VADDU_PL** 

* **LEXICON 2TAVLU** 

* **LEXICON 2TAVLU_SG** 

* **LEXICON 2TAVLU_PL** 

* **LEXICON X_TAVLU_SG** 

* **LEXICON X_TAVLU_PL** 

* **LEXICON 2NIISU** 

* **LEXICON 2NIISU_SG** 

* **LEXICON 2NIISU_PL** 

* **LEXICON X_NIISU_SG** 

* **LEXICON X_NIISU_PL** 

* **LEXICON 2VAALJA** vaaljâ

* **LEXICON 2VAALJA_SG** vaaljâ : va^RVljâ

* **LEXICON 2VAALJA_PL** 

* **LEXICON X_VAALJA_SG** 

* **LEXICON X_VAALJA_PL** 

* **LEXICON 2SKERREEH_PL**  Plural tantum, as 2PUUVSAH, but w/o WG 

### APINA lexicon family 
this is for loanwords without stem change 

* **LEXICON APINA** 

* **LEXICON APINA_SG** 

* **LEXICON APINA_PL** 

* **LEXICON X_APINA_SG** (common for different POS) 

* **LEXICON X_h_PL**  gives %>h etc. to vowel stems, pointong to notILL 

* **LEXICON X_h_PL_notILL** 

## Four-syllable stems 

### 4KUNAGAS lexicon family 

* **LEXICON 4KUNAGAS** 

* **LEXICON X_KUNAGAS** 

* **LEXICON 4KUNAGAS_SG** 

* **LEXICON 4KUNAGAS_PL** > 

* **LEXICON X_KUNAGAS_SG**  this is for loanwords without stem change, 3-syll. cons end 

* **LEXICON X_KUNAGAS_PL** 

### 4CAHALIG lexicon family 

* **LEXICON 4CAHALIG** 

* **LEXICON 4CAHALIG_SG** 

* **LEXICON 4CAHALIG_PL** 

* **LEXICON X_CAHALIG_SG** 

* **LEXICON X_eh_PL** 

### 4MANUTTEP lexicon family 

* **LEXICON 4MANUTTEP** 

* **LEXICON 4MANUTTEP_SG** 

* **LEXICON 4MANUTTEP_PL** 

* **LEXICON X_MANUTTEP_SG** 

* **LEXICON X_MANUTTEP_PL** 

### 4PUHELIN lexicon family 

* **LEXICON 4PUHELIN**  Only a few words in this category 

### 2KOLLIISTALLAM lexicon family 

* **LEXICON 2KOLLIISTALLAM** 

## Odd-syllable stems 

* **LEXICON 3KOMPAS** stem kompass An odd loan word with the final -s lengthening 

* **LEXICON X_KOMPAS** 

* **LEXICON 3KEPIDEM** 

* **LEXICON 3KEPIDEM_PL** 

* **LEXICON 3POTTAAK** 

* **LEXICON X_POTTAAK** 

* **LEXICON 3EEMEED** 

* **LEXICON X_EEMEED** 

* **LEXICON 3EEMEED_SG** 

* **LEXICON 3EEMEED_PL** 

* **LEXICON X_EEMEED_SG** 

* **LEXICON 3LITTER** MO Ib 2nd syll vowel does not alternate 

* **LEXICON X_LITTER** MO Ib 2nd syll vowel does not alternate 

* **LEXICON X_LITTER_not_Par**  for numerals 

* **LEXICON 3LITTER_SG** 

* **LEXICON 3LITTER_PL** 

* **LEXICON X_LITTER_SG** 

* **LEXICON X_LITTER_SG_not_Par**  for numerals 

* **LEXICON 3PIEHAIN** to v1 3PIEHAINonly and v2 3PIEHANJ 

* **LEXICON 3JAAVVIL** 

* **LEXICON 3JAAVVIL_SG** 

* **LEXICON 3JAAVVIL_PL** 

* **LEXICON X_JAAVVIL_SG** 

* **LEXICON 3TERES** = ki5ällás^ÁE

* **LEXICON 3PAAVIR** NGA+Abe blank, WG Ess, CSH for the rest 

* **LEXICON X_PAAVIR** NGA+Abe blank, WG Ess, CSH for the rest 

* **LEXICON 3PAAVIR_SG** 

* **LEXICON 3PAAVIR_PL** plural forms 

* **LEXICON X_PAAVIR_SG** NGA+Abe blank, WG Ess, CSH for the rest 

* **LEXICON X_PAAVIR_not_Nom_Par** NGA+Abe blank, WG Ess, CSH for the rest 

* **LEXICON X_PAAVIR_not_Nom_Par_SG** 

* **LEXICON 3SAJOS** sai4joos 

* **LEXICON X_SAJOS** 

* **LEXICON 3UAIVAT** > 3EEMEED. No Px, but only one word uáivát, witout Px para. 

* **LEXICON 3VEESKIR** 

* **LEXICON X_VEESKIR** 

* **LEXICON 3VEESKIR_SG** 

* **LEXICON 3VEESKIR_PL** 

* **LEXICON 3COLL_LITTER** collective numbers: čiččâmâs 

* **LEXICON C_COLL_KAARBIS** collective numbers: oovces 

* **LEXICON 3COLL_PAAVIR** collective numbers: loves 

* **LEXICON 3COLL** collective numbers: kyevtis, kuulmâs.., redirecting to  X_VEESKIR 

* **LEXICON 3PIIVTAS** WG for NEP,  no triggers for the other cases 

* **LEXICON 3PIIVTAS_SG** 

* **LEXICON 3PIIVTAS_PL** 

* **LEXICON 3DUSSEPIIVTAS**  piivtâš itself is not in the 3PIIVTAS lexicon 

* **LEXICON X_VEESKIR_SG** 

* **LEXICON 3KAAVPUG** 

* **LEXICON 3AARRAN** 

* **LEXICON 3AARRAN_SG** 

* **LEXICON 3AARRAN_PL** plurals for 3AARRAN 

* **LEXICON X_AARRAN_SG** 

* **LEXICON 3RUONAS** nuurras WG NEP,  blank for the rest 

* **LEXICON X_RUONAS** WG NEP,  blank for the rest 

* **LEXICON 3VUONJAS**  kierâš, stem: kierrâ, px kierâččâm 

* **LEXICON 3CEVE** only for this lemma. It could go to 3LYEME but needs modifications of rules to get iä:e and -tt-, and the worst part is v:vv 

* **LEXICON 3LYEME** 

* **LEXICON 3HUKSIM** NGA + Abe blank, SLEN for the rest 

* **LEXICON 3HUKSIM_SG** NGA + Abe blank, SLEN for the rest 

* **LEXICON 3HUKSIM_PL** plurals for 3HUKSIM 

* **LEXICON 3KIEDAVUSSAM** stem: :kieđâvušš 

* **LEXICON 3POOVSA**  soovsa 

* **LEXICON 3POOVSA_SG**  soovsa 

* **LEXICON 3POOVSA_PL**  plurals for 3POOVSA 

## Contracted stems 

* **LEXICON C_KAAMUV** 

* **LEXICON X_KAAMUV** 

* **LEXICON X_KAAMUV_COMMON** 

* **LEXICON C_POOVIJC** 

* **LEXICON 3POOVIJ** 

* **LEXICON C_OLMOOS** lexicon for olmooš 

* **LEXICON C_OLMOOS_PL** 

* **LEXICON C_KAARBIS** 

* **LEXICON X_KAARBIS** 

* **LEXICON C_KAARBIS_SG** 

* **LEXICON C_KAARBIS_PL** 

* **LEXICON X_KAARBIS_SG** 

* **LEXICON C_PELES** 

* **LEXICON X_PELES** piällás^ÁE

* **LEXICON C_MORCES** 

* **LEXICON X_MORCES** 

* **LEXICON C_CUNOI** 

* **LEXICON C_PUASUI** 

* **LEXICON C_ALMAI** 

* **LEXICON C_KUAVSUI** 

* **LEXICON C_KUAVSUI_COMMON** 

* **LEXICON C_CUANJA** 

* **LEXICON CUANJA_COMMON** 

* **LEXICON X_SVSLENh_PL** 

* **LEXICON S_AAIGA** Almost identical with S_AAJA, except for Compounds 

* **LEXICON AAIGA_COMMON_SG** 

* **LEXICON S_AAIGA_PL** 

* **LEXICON AAIGA_COMMON_PL** 

* **LEXICON S_AAJA** 

* **LEXICON S_KARRII** 

* **LEXICON X_KARRII** 

* **LEXICON S_SPAALVAS** 

* **LEXICON S_TUULAS** ! stem: ku^RVđi 

* **LEXICON X_TUULAS** 

* **LEXICON S_TUULAS_SG** 

* **LEXICON S_TUULAS_PL** 

* **LEXICON X_TUULAS_SG** 

* **LEXICON X_TUULAS_PL** 

* **LEXICON S_KAANDAS** stem: ka^RVnd 

* **LEXICON X_KAANDAS** 

* **LEXICON S_KAANDAS_SG** 

* **LEXICON S_KAANDAS_PL** 

* **LEXICON X_KAANDAS_SG** 

* **LEXICON X_KAANDAS_PL** 

* **LEXICON S_KUULMIS** stem kuovtt 

* **LEXICON S_CISSAAS** ! stem: cissá 

* **LEXICON X_CISSAAS** stem čissá

* **LEXICON S_VUALAAS** 

* **LEXICON X_VUALAAS** 

* **LEXICON S_KUAVDAS**  WG or not? vuáŋŋáš not WG, kiärpáš WG. stem: suábbá 

* **LEXICON S_KUAVDAS_SG** 

* **LEXICON S_KUAVDAS_PL** 

* **LEXICON X_KUAVDAS_SG** 

* **LEXICON S_ALGAAS** stem alga 

* **LEXICON S_KUADHUS** 

* **LEXICON S_KAAHUS** 

* **LEXICON X_KAAHUS_notILL** 

* **LEXICON S_SUOLLUS** 

* **LEXICON X_SUOLLUS** 

* **LEXICON 4C_RASTAGAS** splitting in sg and pl 

    - *LEXICON 4C_RASTAGAS_SG*  the sg ones 

    - *LEXICON 4C_RASTAGAS_PL*  the pl ones 

    - *LEXICON X_RASTAGAS* sg cases 

* **LEXICON 3OPPUS** 

* **LEXICON 3ALMAS** 

* **LEXICON ALMAS_COMMON** 

* **LEXICON C_SARVES** sarves, jalŋes 

* **LEXICON C_SARVES_SG** 

* **LEXICON C_SARVES_PL** 

* **LEXICON X_SARVES_SG** 

* **LEXICON X_SARVES_PL** 

### 4-syllabic 

* **LEXICON 4JOTOLAH**  splitting in sg pl 

* **LEXICON JOHTOLAH_OBL** common for N and A 

* **LEXICON 4JOTOLAH_PL** 

* **LEXICON 4KAPULUH** 

* **LEXICON 4KUBALOH** 

* **LEXICON 4LAS_NOUN** stem = aanaarl 

* **LEXICON LAS_COMMON** 

* **LEXICON X_LAS_COMMON_SG** normâl lâš:-lii-nouns and adjs 

* **LEXICON X_LAS_COMMON_PL** NOrmal plural and plural tantum cases, olympialiih 

* **LEXICON OLYMPIALIIH_PL** 

* **LEXICON LAS_SUF** 

* **LEXICON MUS_NOUN** type uáiváámus, aldemus 

## Contracted stems 

* **LEXICON C_EIJE** 

* **LEXICON C_LOHHEE** 

* **LEXICON C_LOHHEE_SG** redirects to  C_TAHHEE, but adds NomAg 

* **LEXICON C_LOHHEE_PL** redirects to  C_TAHHEE, but adds NomAg 

* **LEXICON C_TAHHEE** 

* **LEXICON C_TAHHEE_SG** 

* **LEXICON C_TAHHEE_PL** 

* **LEXICON X_TAHHEE** ee-final contract, -ei instead of -ij not-nomen-agentis 

* **LEXICON X_TAHHEE_SG** ee-final contract, -ei instead of -ij 

* **LEXICON X_TAHHEE_PL** ee-final contract, plural forms 

## Comitative plural variation 

* **LEXICON GUIN** is here to give -guin and the Use/NG -gijn. 

## Derivations 

TODO: Move derivation lexica here 

### Diminutive derivations _DIM

### 2 syllabic stems

#### final â

* **LEXICON 2JUUHA_SG_DIM** (a lexicon to create deminutives; Not for lexicalised words already being in deminutive) 

* **LEXICON 2ALGA_SG_DIM** a^RVlgâ done witout FVD, both ways work

* **LEXICON 2ALGA_PL_DIM**  a^RVlgâ

* **LEXICON 2KIELA_DIM** done with FVD, both ways work

#### final á

* **LEXICON FADDA_SG_DIM** fá^RVddá 

* **LEXICON 2FADDA_PL_DIM** 

* **LEXICON 2KISSA_DIM** 

#### final e

* **LEXICON 2ALGE_SG_DIM**  a^RVlge alge, mo^RVkk4e mokke

* **LEXICON 2ALGE_PL_DIM** 

#### Final i

* ''LEXICON 2AIGI_SG_DIM''  pe^RVi4vi, ä^RVi4gi

* ''LEXICON 2AIGI_PL_DIM'' 

#### final u , tentative

* **LEXICON 2AIRU_SG_DIM** a^RVlgâ 

* **LEXICON 2AIRU_PL_DIM** 

* **LEXICON 2LAAVU_DIM** 

### contracted stem, final â, 

* **LEXICON 2AAIGA_DIM** 

### 3-syllabic

3LITTER --> 4C_RASTAGAS

### 4-syllabic

tbw.

### 4-syllabic contracted

tbw.

### Vowel-final loanwords

tbw.

* * *

<small>This (part of) documentation was generated from [src/fst/affixes/nouns.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/nouns.lexc)</small>

---



# Inari Saami number <-> text

* **LEXICON num**

* **LEXICON numsg**

* **LEXICON KYEHTI**

* **LEXICON OHTA**

* **LEXICON KULMA** maaŋgâi

* **LEXICON VITTA**

* **LEXICON KULMA_VITTA**

* **LEXICON CICCAM** to be checked

* **LEXICON iLOV**

* **LEXICON iLOVE**

* **LEXICON LOV_OBLi**

* **LEXICON LOV**

* **LEXICON plussLOVE**

* **LEXICON LOV_OBL**

* **LEXICON hcLOV**

* **hcLOV_OBL ;**

* **LEXICON hcLOV_OBL**

* **LEXICON ttLOV**

* **LEXICON ttLOVE**

* **LEXICON LOV_OBLtt**

* **LEXICON mLOV**

* **LEXICON mLOVE**

* **LEXICON mLOV_OBL**

* **LEXICON NUBALOH**

* **LEXICON LOVE**

* **LEXICON LOVE-COMMON**

* **LEXICON CYETI**

* **LEXICON ORDINALInfl**

* **LEXICON CICCADInfl**

* **LEXICON ORD-SAS**

* **LEXICON nubbecase**

* **LEXICON num-imprecise**

* **LEXICON num-imprecise-case**

* **LEXICON yeartagpl**

* **LEXICON dateyearcase**

* **LEXICON dateyearcase_nullsuff**

* **LEXICON dateyearcase_nullsuff_w_dot**

* **LEXICON dateyearcase_fullsuff** all cases

* **LEXICON ARABICCASES**  adds +Arab

* **LEXICON ARABICCASE**  adds +Arab

* **LEXICON ARABICCASE0**  adds +Arab

* **LEXICON DIGITCASES**  to distinguish between 0 and oblique

* **LEXICON DIGITCASE0**

* **LEXICON DIGITCASE**

* **LEXICON ARABICCASEORD**

* **LEXICON ARABICCASEORD-ERR**

* **LEXICON ARABICCASECOLL**

* **LEXICON ROMNUMTAGOBL**

* * *

<small>This (part of) documentation was generated from [src/fst/affixes/numerals.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/numerals.lexc)</small>

---


# Possessive suffixes for Inari Saami

We generate PxSg1, PxDu1, PxPl1, etc, despite there being no difference
between these in smn, due to MT purposes. An alternative would be to
just do Px1, Px2, Px3, and change tags from sme to smn in apertium.

* **LEXICON CPXsuff**

* **LEXICON VPXsuff** -n, -d, -s

* **LEXICON VPXsuff12**

* **LEXICON VPXsuff12nom**  -m/-n, -d, -s

* **LEXICON VPXsuff1**

* **LEXICON VPXsuff2**

* **LEXICON VPXsuff3**

* **LEXICON CPXsuffCOM**

* **+PxSg2:âdguin Px_K ;**

* **+PxSg3:iskuin Px_K ;**

* **LEXICON Px_K**

* * *

<small>This (part of) documentation was generated from [src/fst/affixes/possessive-suffixes.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/possessive-suffixes.lexc)</small>

---


# Propernoun morphology for Inari Saami

TODO:
These are not in use:
ANAR DUBAI DUBAI-plc DUBAI-sur MAKI 

* **LEXICON Proper_infix** is the de Silva lexicon

* **LEXICON FirstTag**

* **LEXICON TEMPORARY**

* **LEXICON V_TEMPORARY**

* **LEXICON NIEMI**

* **LEXICON ACCRA** SM1

* **LEXICON ACCRA-ani**

* **LEXICON ACCRA-femsur**
* **LEXICON ACCRA-fem**

* **LEXICON ACCRA-malfem**

* **LEXICON ACCRA-malsur**

* **LEXICON ACCRA-mal**

* **LEXICON ACCRA-objplc**

* **LEXICON ACCRA-obj**
* **LEXICON ACCRA-org**

* **LEXICON ACCRA-A_MWE-plc**

* **LEXICON ACCRA-A-org**

* **LEXICON ACCRA-A-plc**

* **LEXICON ACCRA-A-fem**

* **LEXICON ACCRA_MWE-plc**

* **LEXICON ACCRA-plc**

* **LEXICON ACCRA-sur**

* **LEXICON JUUHA-plc** similar to JUUHA

* **LEXICON JUUHA** similar to JUUHA, stem ju

* **LEXICON LUOHTA** similar to VADDU

* **LEXICON LUOHTA-plc**   

* **LEXICON LUOHTA-mal**

* **LEXICON LUOHTA-fem**

* **LEXICON LUOHTA_PL** similar to ALGA_PL X_PUUVSAH

* **LEXICON VUONA** similar to ALGA

* **LEXICON VUONA-plc** similar to ALGA

* **LEXICON VUONA-fem** similar to ALGA

* **LEXICON KURRA-plc** similar to SOLLA

* **LEXICON KURRA** similar to SOLLA

* **LEXICON KAAVA-plc** similar to KIELA

* **LEXICON KAAVA** similar to KIELA 

* **LEXICON NJOBZA** similar to 2ALGA

* **LEXICON NJOBZA-plc** similar to 2ALGA

* **LEXICON NJOBZA-ani** similar to 2ALGA

* **LEXICON LASSA-plc** similar to FADDA

* **LEXICON LASSA**  Similar to FADDA

* **LEXICON JAVRI-plc** jävri, jeggi

* **LEXICON JAVRI-org** Ráámátservi

* **LEXICON JAVRI-mal** 

* **LEXICON JAVRI-fem** 

* **LEXICON JAVRI-ani** 

* **LEXICON JAVRI** similar to AIGI, but only Sg. Some case forms should be deleted for names? Only difference to VUONA is Ess/Par. Are they in use for names?

* **LEXICON JAAVRIH-plc**  JAVRI-plurals, e.g. Kähteejäävrih

* **LEXICON JAAVRIH**  plurals for JAVRI

* **LEXICON VAARI** to SAAMI

* **LEXICON VAARI-plc** 

* **LEXICON VAARIH-plc**  VAARI-plurals

* **LEXICON VAARIH** VAARI-plurals

* **LEXICON CIELGI** to CAACI

* **LEXICON CIELGI-plc** to CAACI

* **LEXICON NYERI** similar to KYELI

* **LEXICON NYERI-plc** similar to KYELI

* **LEXICON TUPE**  Similar to NJUNE

* **LEXICON TUPE-plc**  Similar to NJUNE

* **LEXICON TUPE-ani**  Similar to NJUNE

 *LEXICON TUPE-mal**  Similar to NJUNE

* **LEXICON VASE-plc**  Similar to VAHE

* **LEXICON VASE**

* **LEXICON POHE** nearly similar to VAHE

* **LEXICON POHE-plc** similar to VAHE

* **LEXICON MOKKE** similar to ALGE

* **LEXICON MOKKE-plc** similar to ALGE 

* **LEXICON MOKKE-sur** similar to ALGE 

* **LEXICON MOKKE-org** similar to ALGE 

* **LEXICON MOKKE-fem** similar to ALGE 

* **LEXICON MOKKE-mal** similar to ALGE 

* **LEXICON MOKKE-ani** similar to ALGE 

* **LEXICON NIJTTO**

* **LEXICON NIJTTO-plc**  Similar to SIJVO

* **LEXICON ROTO** similar to LAJO and X_LAJO

* **LEXICON ROTO-plc** similar to LAJO and X_LAJO 

* **LEXICON LAADUH** 

* **LEXICON LAADUH-plc** Plural to LUOHTA-plc

* **LEXICON LONDON**

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

* **LEXICON LONDON-orgplc**

* **LEXICON LONDON_MWE-plc**

* **LEXICON LONDON-plc**

* **LEXICON LONDON-sur**

* **LEXICON LONDONBERN-plc**

* **LEXICON AANAAR** Goes to EEMEED

* **LEXICON AANAAR-plc**

* **LEXICON AANAAR-mal**

* **LEXICON AANAAR-fem**

LEXICON KIARUN = 3KIELES

**LEXICON LUOBAL** Similar to VEESKIR

* **LEXICON LUOBAL-plc** Similar to VEESKIR

* **LEXICON LUOBBALEH** plural forms 

* **LEXICON LUOBBALEH-plc** Plural to LUOBAL-plc

* **LEXICON LUOBBALEH-org** Plural to LUOBAL-plc

* **LEXICON LUOBBALEH-ani** Plural to LUOBAL-plc

* **LEXICON MAARIT** 

* **LEXICON MAARIT-fem similar to 3POTTAAK** 

* **LEXICON MAARIT-mal similar to 3POTTAAK** 

* **LEXICON SAVO-plc** similar to ALGA

* **LEXICON SAVO** similar to ALGA

* **LEXICON KUOLBA-plc** similar to POOVSA

* **LEXICON KUOLBA**  similar to POOVSA

* **LEXICON LYEME** 

* **LEXICON ANDARAS**  this is for loanwords without stem change, 3-syll. cons end

* **LEXICON ANDARAS-mal** similar to KUNAGAS

* **LEXICON ANDARAS-org** similar to KUNAGAS

* **LEXICON ANDARAS-plc** similar to KUNAGAS

* **LEXICON ANDARAS-obj** similar to KUNAGAS

* **LEXICON IANUDAH-plc**  Similar to 4JOTOLAH

* **LEXICON KALDEE** Similar to TAHHEE

* **LEXICON KALDEE-plc**  Similar to TAHHEE

* **LEXICON KALDEE-org**  Similar to TAHHEE
* **LEXICON KALDEE-sur**  Similar to TAHHEE

* **LEXICON KALDEE_PL-plc**  Similar to TAHHEE_PL

* **LEXICON KALDEE-mal**

* **LEXICON KALDEE-fem**

* **LEXICON KALDEE-ani**

* **LEXICON KALDEE_PL** Similar to TAHHEE

* **LEXICON SUALUI** similar to PUASUI and KUAVSUI

* **LEXICON SUALUI-plc** similar to PUASUI and KUAVSUI. 

* **LEXICON SUOLLUUH-plc** SUALUI-plc plurals 

* **LEXICON SUOLLUUH** SUALUI-plc plurals 

* *LEXICON PIRUKAAMUV-plc*

* *LEXICON PIRUKAAMUV*

**LEXICON PAALGIS** similar to KAARBIS

**LEXICON Prop_h_PL-plc**  gives %>h etc. to vowel stems

**LEXICON Prop_h_PL**  gives %>h etc. to vowel stems

* **LEXICON HANNOLA-plc**

* **LEXICON HANNOLA-sur**

* **LEXICON ERVASTI** 

* **LEXICON BISSAU-plc**

* **LEXICON ERVASTI-plcmal**

* **LEXICON ERVASTI-fem**

* **LEXICON ERVASTI-mal**

* **LEXICON ERVASTI-obj**

* **LEXICON ERVASTI-org**

* **LEXICON ERVASTI-plc**

* **LEXICON ERVASTI-sur**

* **LEXICON BERN**

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

* **LEXICON BERN_MWE-plc**

* **LEXICON BERN-plc**

* **LEXICON BERN-surmal**
* **LEXICON BERN-sur**

* **LEXICON OY-plc** ad hoc 

* **LEXICON OY-sur** ad hoc 

* **LEXICON OY-fem** ad hoc 

* **LEXICON C-FI-NEN**

* **LEXICON C-FI-NEN-plc**

* **LEXICON C-FI-NEN-sur**

* **LEXICON C-FI-NEN-org**

* **LEXICON DUBAI**

* **LEXICON DUBAI-mal**

* **LEXICON DUBAI-fem**

* **LEXICON DUBAI-sur**

* **LEXICON DUBAI-obj**

* **LEXICON DUBAI_MWE-plc**

* **LEXICON DUBAI-plc**

* **LEXICON DUBAI-org**

* **LEXICON GATA-plc**

* **LEXICON JOKULL-plc**

* **LEXICON MAKI-plc**

* **LEXICON MAKI-sur**

* **LEXICON PIPPI-LOAN-plc**

* **LEXICON PIPPI-ani**
* **LEXICON PIPPI-femsur**

* **LEXICON PIPPI-fem**

* **LEXICON PIPPI-malfem**

* **LEXICON PIPPI-mal**

* **LEXICON PIPPI-obj**
* **LEXICON PIPPI-org**
* **LEXICON PIPPI_MWE-plc**

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

| --- | --- | --- 

* **LEXICON UAIVAS**   similar to KUAVDAS

* **LEXICON UAIVAS-plc** similar to KUAVDAS. 

* **LEXICON SUANJU** similar to LAAVU

* **LEXICON SUANJU-plc** similar to LAAVU

* **LEXICON SUANJU-ani** similar to LAAVU

* **LEXICON SUANJU-fem** similar to LAAVU

* **LEXICON EENA-plc** no stem in stems/smn-propernouns.le≈c

* **LEXICON EENNAM-plc** similar to EEMEED

* **LEXICON EENNAM-mal** similar to EEMEED

* **LEXICON EENNAM** similar to EEMEED

* **LEXICON ENAMEH-plc** similar to EEMEED

* **LEXICON ENAMEH**  plurals for EEMEED

* **LEXICON MAADIJ**  Similar to AARRAN

* **LEXICON MAADIJ-plc**  Similar to AARRAN

* **LEXICON CUAJA** similar to TAALU2

* **LEXICON CUAJA-plc** similar to TAALU2

* **LEXICON CUAJA-fem** XXX check this

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

* **LEXICON LAADUS**  

* **LEXICON LAADUS-plc** 

* **LEXICON LADDUUH**  

* **LEXICON LADDUUH-plc**  Similar to SPALVAAS plural

* **LEXICON AALAAS-plc**  Similar to ALGAAS

* **LEXICON AALAAS** 

* **LEXICON SIALGAS-plc**  Similar to KUAVDAS

* **LEXICON SIALGAS-mal**  Similar to KUAVDAS

* **LEXICON SIALGAS**  

* **LEXICON SME_NAMES-org** 

* **LEXICON SME_NAMES-mal** 

* **LEXICON SME_NAMES-fem**

* **LEXICON SME_NAMES-sur**

* **LEXICON SME_NAMES-plc**

* **LEXICON SME_NAMES_PERS** Attr to North Saami person names

* **LEXICON SME_NAMES** temp. only Sg+Nom and Cmp to North Saami names

* **LEXICON PERSNAME-NOMCMP** e.g. Anttikandâ,  

* **LEXICON PERSNAME-GENCMP** e.g. , Aanti-kyevtis

* **LEXICON flagK** 

* * *

<small>This (part of) documentation was generated from [src/fst/affixes/propernouns.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/propernouns.lexc)</small>

---


# Symbol affixes

* **LEXICON Noun_symbols_possibly_inflected**

* **LEXICON Noun_symbols_never_inflected**

* **LEXICON SYMBOL_connector**

* **LEXICON SYMBOL_NO_suff**

* **LEXICON SYMBOL_suff**

* * *

<small>This (part of) documentation was generated from [src/fst/affixes/symbols.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/symbols.lexc)</small>

---


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

<small>This (part of) documentation was generated from [src/fst/affixes/verbs.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/verbs.lexc)</small>

---

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

<small>This (part of) documentation was generated from [src/fst/compounding.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/compounding.lexc)</small>

---


# Inari Saami morphophonological rule file

This file documents the [phonology.twolc file](http://github.com/giellalt/lang-smn/blob/main/src/fst/phonology.twolc) 

Here we govern all morphophonological processes.

# Alphabet 

## The Inari Saami letters

* a á â ä b c d e f g h i j k l m n o õ p q
 r s t u v w x y z æ ä ø ö å
 č đ ŋ ŧ š ž

* A Á Â Å B C D E F G H I J K L M N O Õ P Q
 R S T U V W X Y Z Æ Ä Ø Ö Å
 Č Đ Ŋ Ŧ Š Ž
* **%-** hyphen
* **'** the hyphen as hyphen
* **⎈** the ghost sign used in compounding, does not work in hfst

### Accented letters, just in case

* É Ó Ú Í À È Ò Ù Ì Ë Ü Ï Ê Ô Û Î Ã Ý þ Ð
 é ó ú í à è ò ù ì ë ü ï ê ô û î ã ý þ ð
 ß ª ß ç

Literal quotes and angles must be escaped (cf morpheme boundaries further down):
* »
«
>
<

### Archiphonemes

* **a5:a á5:á e5:e i5:i u5:u y5:y o5:o ä5:ä**  these do not change 
* **i2:i u2:u â2:â**  this is final i, u in contract verbs etc changing to e, o
* **i3:i**  this is invariant i
* **i4:i**  this is the underlying i consonant
* **i6:0** a fake vowel, to get WG rules to function, e.g. kyehtlov (kyehti6lov)
* **c5:c č5:č d5:d h5:h j5:j l5:l m5:m ŋ5:ŋ r5:r t5:t z5:z**  these do not change
* **b6:b d6:d g6:g** clitic consonants, jiemge, epke
* **j6:0** a fake consonant, to get WG rules to function, e.g. puávui
* **p4:p k4:k l4:l t4:t č4:č c4:c**  these are consonants that change in cg
* **':'** is the real apostroph

Then some more abstract archiphonemes
These are dependent upon the **Triggers** in the next section
* **%^RC:0** = root cons., lengthened by ^CLEN - máán%RCu máánnun
* **%^RV:0** = root vowel, lengthened by ^RLEN - ta%^RVvlu taavlu 
* **%^SC:0** = stem cons, %^SC:j, pluss lengthen after earlier shortening by %^CSH, see lyeme
* **%^SV:0** = stem vowel, lengthened by ^SLEN u:uu - táálu%^SV tááloost
* **%^VO:0** = vowel copy

### Triggers
These symbols govern the behaviour of the archiphonemes above.

* **%^CLEN:0** = Cons lengthening, with ^RC
* **%^CSH:0** = Cons shortening, laaŋkku - laaŋkun
* **%^RVSH:0** = Root vowel shortening
* **%^FCD:0** = Final consonant deletion 
* **%^FVD:0** = Final vowel deletion 
* **%^EA:0** = Stem vowel: e and i to a/á in ill, and root vowel ä>á, e(e)>iä, ie>iä, ye>uá
* **%^EX:0** = Stem vowel: i to â where it should have been á, this is Err/Orth only
* **%^RLEN:0** = Root vowel lengthening
* **%^SLEN:0** = Stem vowel lengthening
* **%^SVLOW:0** = Stem vowel lowering â>á and u>o - árppu árppoin, Root vowel shortening when more than one cns in consonant centre and suffix starts with i
* **%^SVSH:0** = Stem vowel shortening kappeer kaperân
* **%^WG:0** = Weak grade trigger
* **%^ÁE:0** = á to e in 3-syll, triggered by ^WG
* **%^ÁI:0** = á to i in 3-syll, triggered by ^WG
* **%^VHIGH:0** = High rootvow for verbs: e>iä, a>o, o>u, ää>áá, ee>iä, note also: ie>iä, ye>uá, uo>uá
* **%^VBACK:0** = Back rootvow for verbs: ä(ä)>a(a), á>aa, uá>o, ye>uo
* **%^BLOCK:0** = This symbol just to block otherwise triggering contexts
* **%^IUML:0** = â to e in front of high suffixes 

Trigger ordering in twolc and lexc, from left to right:

{SV,ÁE,ÁI}  {EA,EX,SC}  {FCD|,VD} {WG,CSH} CLEN  {VHIGH,VBACK}  {RVSH,RLEN} {SLEN,SVSH}  SVLOW

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

* **Vow = a á â ä e i o u y æ ø ö å** 
**i2 u2 â2** 
**i3** 
**a5 á5 i5 u5 y5 o5 ä5** 
**i6** 
**é ó ú í à è ò ù ì ë ü ï ê ô û î ã ý** 
**A Á Â Ä E I O U Y Æ Ø Ö Å** 
**É Ó Ú Í À È Ò Ú Ì Ë Ü Ï Ê Ô Û Î Ã Ý** 
**%^RV %^SV ;** 
* **RealVow = a á â ä e i o u y æ ø ö å** 
y5 i2 i3 i5 i6 â2
**é ó ú í à è ò ù ì ë ü ï ê ô û î ã ý** 
**A Á Â Ä E I O U Y Æ Ø Ö Å** 
**É Ó Ú Í À È Ò Ú Ì Ë Ü Ï Ê Ô Û Î Ã Ý ;** 
* **Cns = b c č d đ f g h j k l m n ŋ** 
**p q r s š t ŧ v w x z ž** 
**B C Č D Đ F G H J K L M N Ŋ** 
**P Q R S Š T Ŧ V W X Z Ž** 
**g2 k2 m2 n2** 
**b3 d3 g3 m3 h3** 
p4 k4 r4 l4 i4 t4 c4 č4
h5 j5 ŋ5 t5 c5 l5 t5 d5 r5 z5 j6
%^RC %^SC ;
* UnvoicedCns = c č f h k p s š t ;
* **Geminate = b d g p h t k c f z l m n ŋ r s š v ;**  
* **Sgm = Vow Cns ;** 
* **NotSuffixBorder = %^FCD %^FVD %^WG %^CSH %^CLEN %^SLEN %^RLEN %^RVSH %^SVLOW %^ÁE %^EA %^EX %^ÁI %^SVSH Vow Cns ;** 
* **Triggers = %^FCD %^FVD %^WG %^CSH %^CLEN %^SLEN %^RLEN %^RVSH %^SVLOW %^ÁE %^EA %^EX %^ÁI %^SVSH %^VHIGH %^VBACK %^IUML ;** 
* TriggersnotFCVD = %^WG %^CSH %^CLEN %^SLEN %^RLEN %^RVSH %^SVLOW %^ÁE %^EA %^EX %^ÁI %^SVSH %^VHIGH %^VBACK %^IUML ;
* **StemCns = b b3 d d3 g g2 g3 h h2 h3** 
**j l m m2 m3 m8 n n8 n2 ŋ r s ;** 

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

First we list the consonant rules, thereafter the vowel ones.

## Consonant rules

### Consonant gradation and shortening rules

First gradation and shortening. They are in the same rules, to avoid rule conflicts.

**RULE: x:y consonant gradation ** =  WG gives x:x and x:y, when there is no consonant lengthening  

* *ta^RVh^RCâ^WG^VHIGH#škyett4*
* ???
* *tu^RVp^RCe^WG*
* *tu0v0e0*
* *käähir^WG>*
* *käävir0>*
* *juáh^RCu^WG^RVSH>ttáá*
* *juáv0u00>ttáá*

**RULE: hh:vv** =  já%^RVhhá%^SVl%^ÁI : jäävvil

**RULE: Quality change of root consonant x:yy** =  consonant lengthening after WG, changing h:v, p:v, c:s

* *va^RVh%^RCo^WG^CLEN>im*
* *va0vvo00>im*

**RULE: t:đ, also tk4:đh gradation, part 1 ** =   

* *puáttee#vuot^RCâ^FVD^WG>i5i5*
* *puáttee#vuođ0000>ii*
* *jo^RVtk4â^WG^RLEN>*
* *joođhâ00>*
* *vädis#vuot^RCâ^FVD^WG>i5i5*
* *vädis#vuođ0000>ii*

**RULE: k4:h gradation for kk4, tk4, rkk4, lkk4** =  

* *totk4os^WG*
* *tođhos0*

**RULE: xx:yy gradation for xx4** =   puáhhoin, sukk4á:suhháást

* *mä^RVtk4i^WG^RLEN>.#.*
* *määđhi00>.#.*

* *su^RVkk4á^SV^WG^CLEN^SLEN>st*
* *su0hháá000>st*

**RULE: t4:đ and c4, č4, p4 gradation for tt:đ etc.** 
čuottâlm:čuođâlm njuottâs 

* *ru^RVtt4â^WG^RLEN>*
* *ruu0đâ00>*

**RULE: ht:vt, ks:vs etc. gradation** =  ht:vt, we use h 

* *pihtâs^WG*
* *pivtâs0*

### Consonant shortening rules

**RULE: k:0 gradation and shortening for xkk4** =  for lkk4, rkk4, vkk4

* *la^RVvkk4â^WG^RLEN*
* *laav0hâ00*

**RULE: xyy:xy gradation A** =   há%^RVi4ttás%^ÁI
1) WG
2) CSH  !he%^RVi4ttug
3) 

* *á^RVrppu^WG^RLEN>*
* *áár0pu00>*
* *á^RVrppu^WG^RVSH>ttáá*
* *á0r0pu00>ttáá*
* *riänttus^WG>*
* *riän0tus0>*

**RULE: č:0 in čč4 consonant gradation when CLEN** = when čč4

* *lu^RVčč4â^WG^RLEN^SVLOW>in*
* *luu0já000>in*

**RULE: From i4j to j when WG and CSH** = e.g. sai4joos:sajoos
1) when WG
2) when CSH 
3) ?

**RULE: xx:x consonant gradation and shortening and x:x shortening** =   weak grade **or** consonant shortening (Both in same rule)
1) when WG
2) when CSH  

*Tests:*
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

**RULE: tt:t  - final consonant and consonant gradation**  = consonant gradation, and 3syll verbs in -tt lose t in front of cns-initial suff
1) WG, not CLEN
2) CSH
3) uáivátt : uáivát
4) olášuttem:olášutmân
5) uáiváátt>ân uáiváátân
6) uápásmittijm>uápásmitijm

* *las^RCe^SVtt^CLEN^SLEN>*
* *lassee0t00>*

**RULE: nnj to nj shortening weak grade and consonant shortening** =  special rule, e.g. konnjâl -> konjâlân puánnjá

**RULE: Word final consonant deletion** = for vaskâm:vaaskâ

* *va^RVskâm^FCD^RLEN*
* *vaaskâ000*
* *njuolgâd^FCD^RVSH*
* *njuolgâ000*

**RULE: Final m in stems, smm to sm** = 
1) puttáás_min 
2) stoorgâs_mân  sto%^RVrgâsm

**RULE: Wordfinal consonants part 1**  e%^RVlâčč
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

### Consonant lengthening rules

**RULE: Lengthening of half-long root consonant x:xx** =  riččá piiru piirrun niisu niissun

**RULE: Lengthening of root consonant x:yy** =  consonant lengthening after WG - h:vv, p:vv, c:ss

* *ka^RVss^RCa^SV^WG^CLEN^SLEN>st*
* *ka0ss0aa000>st*
* *va^RVh^RCe^SV^WG^CLEN^SLEN>st*
* *va0vvee000>st*
* *va^RVh^RCe^SV^CLEN^SLEN>n*
* *va0hhee00>n*

**RULE: Lengthening of consonant h5** =    this one does not fit into the general rule because of h5:h

*TEST:*
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

**RULE: č:ij part 1** =  
eeč%^RCi:eijijn eeč%^RCi%^WG%^CLEN%^SVLOW%>in

**RULE: Lengthening root consonant j:ij 1** =  for saje:saijeen 

**RULE: č:ij and j:ij part 2** =  

*Tests:*
* *sa^RVj^RCe^SV^CLEN^SLEN>n*
* *sa0ijee00>n*
* *pááj^RCá^CLEN>n*
* *pááijá0>n*
* *vaj^RCe^SVd^CLEN^SLEN>*
* *vaijeed00>*

**RULE: nj to nnj consonant lengthening** =  special rule, suánju : suánnjun for Par and Ess

**RULE: Consonant lengthening after xx:x and xy:zy weak grade with x4 on upper side** =   k4, č, p4  kukse:kuvssijn  

**RULE: Consonant lengthening xy:xyy**  ( fix: døp Cz om til Cx)

### Stem consonant and suffix consonant rules

**RULE: Assimilation of consonants t d š**  delet t in front of -ttáá, avoid -tttáá

* *haamit>ttáá*
* *haami0>ttáá*

**RULE: Wordfinal consonants part 2**  e%^RVlâčč cummâlâhč:cummâlâhš

**RULE: Final consonant x:xx** =  pottáák potákkân  

**RULE: Clitic devoicing** =  for focus particle bá to pá after unvoiced stem cns.

**RULE: Gerund devoicing** =   dijn to tijn after stems in tšs

## Vowel rules

### First syllable vowel shortening rules

*Tests:*
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

**RULE: Vowel shortening VV:V (e in own rule)** = ráávhu- : rávhoid, käähir%^CSH%>id kuuđiâ%^RVSH%>žân
1. essee : esseid, suklaa : suklaid

**RULE: Long vowel shortening** = (example?), no ^CSH, since that gives Vy:0
3syll kaavpug:kavpugân 
táálhudem koomerdem

**RULE: e:0 in passive and elsewhere** \\
2st stems
kaavpug:kavpugân 
táálhudem koomerdem

1. essee : esseid, suklaa : suklaid                                                                                    

*Tests:*
* *mááh^RCu^WG^CLEN^SVLOW>in*
* *má0vvo000>in*
* *mool^RCâ^WG^RVSH>ttáá*
* *mo0l0â00>ttáá*

**RULE: e:0 in passive and elsewhere** = special rule for getting ej̣ittáá instead of ej̣ittáá.

**RULE: Underlying long vowel shortening iä:e and ää:ä or a** = čääh%^RCu2%^CLEN%^VBACK%>um

3st stems viäskár veskirin, časkes časkes ča%^RVskas%^ÁE viäskár%^ÁI%^WG%^RVSH

* *kaavpug^CSH^RVSH^SVSH>ân*
* *ka0vpug000>ân*

* *mool^RCâ^WG>*
* *mool0â0>*

* *käähir^WG>*
* *käävir0>*

* *juáh^RCu^WG^RVSH>ttáá*
* *juáv0u00>ttáá*

### First syllable vowel lengthening rules

**RULE: Root vowel lenghtening in many stems** =  no rootvowel length if stem vowel lengthens and the consonantcentre consists of two or more consonants 
2syll and 3syll 

* *kä^RVvnâst^WG^VBACK^RLEN>*
* *kaavnâst000>*

* *le^RVkk4â^WG^RLEN>*
* *lee0hâ00>*

* *he^RVrkkib^WG^RLENttáá*
* *heer0kib00ttáá*

* *nju^RVne^SV^WG^RLEN^SLEN>st*
* *njuunee000>st*

**RULE: Root vowel o5:u ** = 
puhtii

**RULE: Root vowel ä:ää lenghtening and diphthongisation e:iä** = special rule, for avoiding conflict spä%^RVi4lih%^WG%^RLEN, 
1) vä%^RVr%^RCid
2)
3)já%^RVhhá%^SVl%^ÁI%^WG%^RLEN>
4)
5) e:iä, ergi -> iärgán
6) too much here?
7) čevžuin čiävžui če%^RVvžui4%^WG>

* *pe^RVi4vi^EA^WG>žân*
* *piäivá00>žân*

* *pe^RVi4vi^EA^CLEN>i5n*
* *piäivá00>in*

**RULE: Root vowel o lengthening** =  alge : oolgijn 
1)
2)
3)
5) toovâd moonnum
poovtám  o5o

* *a^RVlge^WG^RLEN>id*
* *oolgi00>jd*

**RULE: Root vowel u lengthening with vowel change before suffix i** =  alge : oolgijn 
1)
2)
3)
4) puuvtijd
5) juuttu>m
5) juuttâl

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

### First syllable vowel change rules

All instances of the same vowel alternation are in the same rule.

a rules

**RULE: Root vowel change a:o before suffix i and for contract verbs** =  alge : olgijn 
contr 
contr 

**RULE: Root vowel o:u for contract verbs and Root vowel change o:u before suffix i** 
juttuum
?
alge : olgijn, remove đ because of inf.
XXX ny
1) poccuu puásui  
([%^RLEN:|%^RVSH:]) (%^SLEN:) [%>|.#.] 5) jutâlâm juuttâl

* *tohhi2>đ*
* *tuhhi>đ*
* *lo^RVh^RCá^WG^VHIGH^RLEN>im*
* *luuv0á000>im*

* *ho^RVrtte*
* *hu0rttijn*

### ä rules

**RULE: Monophthongisation rule iä:ee 1** =  
1)
2)viäskár veeskir iäbbár eebir 
estuđ

**RULE: iä:e rule 1 and second syllable Fleeting vowel before suffix        ** =  Note: many rules in one
1)  i:0 for iđ C verbs 
2)  i:0 for uđ C verbs
melluu
4) cokkiitt%^CLEN%^RLEN%^SLEN%>mân

**RULE: iä:e and iä:ee rule 2 and Diphthongisation i5ä to ie** =  
estuđ kiä5ptu2 > kieptuđ

* *siämmu2>đ>*
* *s0emmu>đ>*

**RULE: Different rules for ä:a, first vowel (or only vowel)** =  čääci:čassijn, läbži:labžijn lään^RCi%>id
OBS ^EA -> VHIGH?

* *njääh^RCi^WG^VBACK>i3*
* *njaav0i00>i*

* *kä^RVvnâ^WG^VBACK#škyett4*
* *ka0vnâ00#škye0t*

**RULE: ää to aa, second vowel** =  á:o in pairs like kuátij -> koođij, säämi -> saamij čäällu%^VBACK%>m lään^RCi%>id
viäskár:veeskir viäskár%^ÁI%^WG%^RLEN
paaccim čaallum

* *čäähâ^WG^VBACK^RVSH#škyett4*
* *čaavâ000#škye0t*

**RULE: ää to áá and á0 in Illative and Sg3** =  ... for säämi > sáámán
:á  XXX
sámásis
njálmásis

:á

* *sääm^RCi^EA>nmake*
* *sáám0á0>n*

**RULE: äRV to áá in Illative and Sg3** =  ... for täsni -> táásnán
čevžuin čiävžui RLEN

* *hä^RVvdi^EA^WG^RLEN>š*
* *háávdá000>š*

* *tä^RVsni^EA^CSH^RLEN>n*
* *táásná000>n*

**RULE: Vowel lengthening äRV to aa ** =  äigi aaigijd
kä%^RVlgâ%^WG%^VBACK%^RLEN%>m

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

#### á rules

**RULE: Root vowel change for á to ä with i in second syllable** =  päävir , já%^RVhhá%^SVl%^ÁI%^WG%^RLEN>

* *páápp4ár^ÁI^WG^RLEN*
* *pää0vir000*

**RULE: Root and stem vowel á:a for verbs** 

* *pá^RVkk4u^VBACK>m>*
* *pa0kku0>m>*

* *pá^RVkk4u^WG^RLEN>im>*
* *páá0hu00>im>*

### á and uá rules

**RULE: Monophthongisation rule uá:o0 part 2: Vowel shortening for uá ** =  for uábbi -> obbijn  čuál%^RCi%^WG%>in tuái4jâl%^CSH%^VBACK%^RVSH%>âm
sopâvetteđ tojâdâm
uáinu

**RULE: Monophthongisation rule u:o and root vowel change u:o, special rule for olmooš and contract verbs** = 
ulmu : olmooš, olmožin, carefully with only initial vowel
oođđim            
sopâvetteđ tojâdâm
puáhháá : poovij ! XXX

* *uái4nu2>đ*
* *o0inu>đ*

* *tuállâ^WG^VBACK^RVSH#škyett4*
* *to00lâ000#škye0t*

**RULE: Diphthong rule uá:uo and uá:oo, part 2** =  
uá > uo
uá > uo

**RULE: Root vowel aa:áá in C-stems with stemvowel u, part 1** =  ahhu:áhu

**RULE: Root vowel aa:áá in C-stems with stemvowel u, part 2** =  ahhu:ááhu

**RULE: Diphthongisation e to iä, part 1 ** =   
ergi:iärgán eeč^RCi^EA^CLEN^RVSH>s
čevžuin čiävžui če%^RVvžui4%^WG>
peeh%^RCá%^VHIGH> peeh%^RC 
piävu>s piähho>on piäváččii not meendu
veerrá%^EA%^CSH>
SV: mánuttep : mánuttiäpán

* *ce^RVlkk4u2^CLEN^VHIGH^RVSH>o*
* *ciälkko000>o*

* *eellá^CSH^VHIGH>mušš^FCD*
* *iä0lá00>muš00*

**RULE: ie to iä in Illative and Sg3** =  kiem´ni -> kiämnán, veerdi : viärdán peerru2%^CLEN%^VHIGH%^RVSH%>o
čevžuin čiävžui
piähhoo
eellá%^CSH%^VHIGH
PrfPrc Err/Orth

**RULE: Diphthongisation uo:uá** =   

**RULE: ye to uá and uo, part 1** =  Part 1 of ye to uá for kyeli : kuálán  
syej%^RCi%^RVSH%^CLEN%>in
[i|Cns]; ryettâ^WG^VBACK^RLEN>m

* *ryettâ^WG#škyett4*
* *ruo0tâ0#škye0t*

**RULE: e to á in ye to uá, part 2 and Stem vowel e to á for other root vowel** =  Part 2 of ye to uá for kyeli : kuálán
*ryetáim:
*ryetáim:

* *mo^RVkk4e^SV^EA^WG^CLEN^SLEN*
* *mo0hháá0000*

* *kyel^RCi3^EA^CLEN>m*
* *kuállá00>m*

**RULE: ye to uo, part 2** =  Part 2 of ye to uá for kyeli : kuolijn

* *lyei4kk4â^WG^VBACK^RLEN#škyett4*
* *luoi0hâ000#škye0t*

**RULE: uá to ye and uo to ye, part 1** =  Part 1 luámmán : lyeme čuággás%^ÁI%^WG%^RLEN%>

* *vuolle^CLEN>en*
* *vyelle0>en*

**RULE: uá to ye, part 2** =  Part 2 luámmán : lyeme

**RULE: uo to ye, part 2** =  vyelleen, vyeleem,vyelih

### Second syllable rules

**RULE: Second syllable vowel change á to e or i in 3syll stems** = puttás- > putes, triggers are ^ÁE and ^ÁI já%^RVhhá%^SVl%^ÁI%^WG%^RLEN%> pu5árrás%^ÁI%^WG%>umos

*Test:*
* *puttás^ÁE^WG>*
* *pu0tes00>*

**RULE: Stemvowel shortening  áá and aa to e or i in 3syll** = puttás- > putes, triggers are ^ÁE and ^ÁI

*Tests:*
* *nahha^SVr^ÁE^WG^RLEN>*
* *na0ve0r000>*
* *nahha^SVr^ÁE^WG^RLEN*
* *na0ve0r000*

**RULE: Stem vowel e to a for a root vowel.** =  alge to aalgan

*Tests:*
* *a^RVlge^SV^EA^SLEN>š*
* *a0lgaa00>š*
* *a^RVlge^SV^EA^SLEN*
* *a0lgaa00*
* *a^RVlge^EA^CSH^RLEN>n*
* *aalga000>n*
* *va^RVh^RCe^SV^EA^CLEN^SLEN>m*
* *va0hhaa000>m*

**RULE: Stem vowel i to á for other root vowel.** =  e.g. säämi > Ill sáámán 
SV uábbám iännásis

**RULE: Stem vowel i to â for other root vowel, as a common error.** =  e.g. säämi > Ill Err/Orth sáámân 

**RULE: Stem vowel i to e in front of j** =  

**RULE: Stem vowel â to a in Pl Nom -h** =  silbâ to siilbah  %^WG%^RLEN%>hlove%>h

* *so^RVllâ^WG^RLEN>h*
* *soo0la00>h*

**RULE: Stem vowel â to á change before i** = sollâ to sooláid 

* *so^RVllâ^WG^RLEN^SVLOW>in*
* *soo0lá000>in*

**RULE: Stem vowel i3:0** = 

**RULE: Stem vowel u:o change before suffix** =  
1) olmooš, olmožin
2) 

**RULE: Stem vowel u2:o change before suffix** =  
SVLOW together with u?

* *uáinu>o*
* *uáino>o*

**RULE: Second vowel shortening** = eemeed : emedân, savvoon : savo 
eemeed : emedân sai4joos

**Tests**
* *kulluutt^SVSH>*
* *kull0u0t0>*
* *eemeed^CSH^SVSH>ân*
* *e0m0ed00>ân*
* *kappeer^CSH^SVSH>ân*
* *ka0p0er00>ân*

* *feeri2>i3tt^SVSH*
* *feer0>itt0*

**RULE: Stem vowel:0 in front of â** = aiguu:aaigâ

**RULE: Stem â deleting** = kandâ:kandii ... built without ^FVD (sigh)

* *če^RVrdâi^WG>ih*
* *če0rd0i0>ih*

* *če^RVrdâi^WG>j*
* *če0rd0i0>j*

* *če^RVrdâi^WG>id*
* *če0rd0i0>jd*

**RULE: Word final vowel deletion** = This unfortunately both for word and stem vowel deletion just now.

*Tests:*
* *sollâ^FVD>ii*
* *soll00>ii*

* *a^RVlgâ^FVD^WG^CLENi>*
* *a0lg0000i>i*

* *a^RVlgâi^FVD^WG^CLEN>i5*
* *a0lg0i000>i*

### Suffix vowel rules

**RULE: Suffix vowel lengthening** = long á in kissáást, nuorâ : nuorááin, hyeni:hyeneest

**Tests**
* *ki^RVssá^SV^WG^CLEN^SLEN>st*
* *ki0ssáá000>st*
* *mi^RVllo^SV^WG^CLEN^SLEN>st*
* *mi0lloo000>st*
* *huksi^SVm^SLEN>ist*
* *huksiim0>ist*
* *táál^RCu^SV^WG^RVSH^SLEN^SVLOW>st*
* *táál0oo0000>st*

**RULE: Suffix i5:j for lexicon APINA** = salijn

**RULE: Suffix i5:0 for loanwords** = *timotein, Charlien*, not *timoteiin, Chariliein*, change (invariant) i5 to something else?

**RULE: Suffix i:j for i and e-stems** =  

**RULE: Vowel copy in suffix** =  for imperative Sg3, at least

### Suffix consonant rules

**RULE: Adjective illative in -vân after u** =  

**RULE: Shortening u for vân illative** =  

* *hárdu2>utt^SVSH*
* *hárd0>utt0*

**RULE: Potential vowel shortening for contract verbs** =  -áážep becomes -áš etc.

**RULE: Insertion of pleonastic hyphen** = for compounding of two vowels *stovli-ijâ*

*Tests:*
* *skä^RVi4nâ^VBACK>đ*
* *ska0inâ0>đ*
* *hu^RVm^RCo^SVb^WG^RLEN^SLEN^RLEN^SLEN*
* *huum0oob00000*

* * *

<small>This (part of) documentation was generated from [src/fst/phonology.twolc](https://github.com/giellalt/lang-smn/blob/main/src/fst/phonology.twolc)</small>

---


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
* **+OLang/SMA** 
* **+OLang/SWE** 
* **+OLang/UND** 
* **+OLang/RUS** 
* +OLang/PARA - parallelle navn, navnet skal ikke overføres til andre samisk språk

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

<small>This (part of) documentation was generated from [src/fst/root.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/root.lexc)</small>

---


# Inari Saami adjectives

* **LEXICON CMP_ADJ**  adds +Cmp tag

* **LEXICON LAST_CMP_ADJ** is for cmp last part (one member)

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

* * *

<small>This (part of) documentation was generated from [src/fst/stems/adjectives.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/adjectives.lexc)</small>

---


# Inari Saami adpositions

* * *

<small>This (part of) documentation was generated from [src/fst/stems/adpositions.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/adpositions.lexc)</small>

---


# Inari Saami adverbs

## The morphology
* **LEXICON ADV** adds the +Adv tag

* **LEXICON PxADV** the Adv tag and Ill Px

* **LEXICON NAAL** 

* **LEXICON BEL-ADV** 

* **LEXICON PEL-ADV** 

## The stems

* **LEXICON Adverb**

* * *

<small>This (part of) documentation was generated from [src/fst/stems/adverbs.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/adverbs.lexc)</small>

---


# Conjunctions 

* **LEXICON Cc**
 **+CC: # ;** adds the tag

* **LEXICON Conjunction**
* ja Cc ;
* **ađai Cc "taikka" ;**
* **adai Cc "tai" ;**
* **tâi Cc ;**
* ...

* * *

<small>This (part of) documentation was generated from [src/fst/stems/conjunctions.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/conjunctions.lexc)</small>

---


# Interjections

* **LEXICON Interj**
* **+Interj: # ;** adds the tag

* **LEXICON Interjection**

* **aa Interj ;**
* **aa-a Interj ;**
* **aamen Interj "aamen" ;**
* ai Interj "hoi" ;
* ...
* het-het Interj ;
* kulâ Interj ;
* na Interj "no" ;
* titityy Interj ;

* * *

<small>This (part of) documentation was generated from [src/fst/stems/interjections.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/interjections.lexc)</small>

---



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
* **njune+N+Cmp/Sh+Sem/Hum:njun Rnoun ;**
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



# Inari Saami numerals

* **LEXICON Numeral**

* **LEXICON HUNDREDSM**

* **LEXICON CUODIM**

* **LEXICON HUNDREDM**

* **LEXICON TEENSM**

* **LEXICON TEENM**

* **LEXICON LOHKAIM**

* **LEXICON TENSM**

* **LEXICON LOGIM**

* **LEXICON ONESM**

* **LEXICON MILJON**

# Under the million

In principle as the above.

* **LEXICON OVERTHOUSANDS**

* **LEXICON HUNDREDST**

* **LEXICON TWOCUODIT**

* **LEXICON SEVENCUODIT**

* **LEXICON HUNDREDT**  X = 1-9, Y = 0-9

* **LEXICON TEENST**

* **LEXICON TEENT**

* **LEXICON LOHKAIT**

* **LEXICON TENST**

* **LEXICON LOGIT**

* **LEXICON ONEST**

* **LEXICON THOUSANDS**

* **LEXICON TWOST**

* **LEXICON SEVENST**

* **LEXICON TWOTHOUSANDS** 2000 - 6999

* **LEXICON SEVENTHOUSANDS** 7000 - 9999

* **LEXICON THOUSAND**

# Here starts the 999 numbers

* **LEXICON UNDERTHOUSAND**

* **LEXICON SEVENHUNDREDS** 700-900 with +Par

* **LEXICON TWOHUNDREDS** 200-699 with +Acc

* **LEXICON SEVENCUODI** 700-900 with +Par

* **LEXICON CUODI** 200-699 with +Acc

* **LEXICON HUNDRED**

* **LEXICON TEENS**

* **LEXICON TEEN**

* **LEXICON LOHKAI**

* **LEXICON LOGAAT**

* **LEXICON TENS**

* **LEXICON LOGIi**

* **LEXICON LOGIhc**

* **LEXICON oohceLOGIhc**

* **LEXICON LOGItt**

* **LEXICON LOGI**

* **LEXICON LOGIm**

* **LEXICON ONES** to card and ord

* **LEXICON CARDINAL** this is 1-10

* **LEXICON MISCNUM**

* **LEXICON ARABICCOMPOUNDS**   arabic as first part, 

* **LEXICON NUMERALCOMPOUNDS**: numeral as first part: duhatjienat,

* **LEXICON ORDINAL**

* * *

<small>This (part of) documentation was generated from [src/fst/stems/numerals.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/numerals.lexc)</small>

---


# Particles

* **LEXICON pcle**

* **+Pcle: # ;** adding tags

* **LEXICON Particle**

* **aainâs pcle "toki" ;** 
* **ama pcle "kai" ;**
* **amahân pcle ;**
* **amal pcle "kai" ;**
* ... and 60 more
ges pcle ;
kes pcle ;

* * *

<small>This (part of) documentation was generated from [src/fst/stems/particles.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/particles.lexc)</small>

---


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

LEXICON SIAMMAS_PRON without WG

* * *

<small>This (part of) documentation was generated from [src/fst/stems/pronouns.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/pronouns.lexc)</small>

---


# File containing Inari Saami abbreviations 

## Lexica for adding tags and periods

Splitting in 4 + 1 groups, because of the preprocessor

* **LEXICON Abbreviation-smn**
1. The ITRAB ; lexicon (intransitive abbrs)
1. The TRNUMAB ; lexicon (abbrs trans wrt. numberals)
1. The TRAB ; lexicon (transitive abbrs)
1. The NOAB ; lexicon (not really abbrs)
1. The NUMNOAB ; lexicon (not behaving as abbr before num)

## The abbreviation lexicon itself

* **LEXICON ITRAB** are intransitive abbreviations, A.S. etc.

* **LEXICON NOAB** du, gen, jur

This class contains homonyms, which are both intransitive
abbreviations and normal words. The abbreviation usage
is less common and thus only the occurences in the middle of
the sentnece (when next word has small letters) can be 
considered as true cases.

* **LEXICON TRNUMAB** contains abbreviations who are transitive in front of numerals 

For abbrs for which numerals are complements, but other
words not necessarily are. This group treats arabic numerals as
if it were transitive but letters as if it were intransitive.

* **LEXICON TRAB** contains transitive abbreviations

This lexicon is for abbrs that always have a constituent following it.

* **LEXICON NUMNOAB** su, dii

This class contains homonyms, which are both abbrs for 
which numerals are complements and normal words. The abbreviation usage
is less common and thus only the occurences in the middle of
the sentence can be considered as true cases.

* * *

<small>This (part of) documentation was generated from [src/fst/stems/smn-abbreviations.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/smn-abbreviations.lexc)</small>

---



# Inari Saami acronyms

This file contains a loop for random capital-letter acronyms, 
as well as two lists of common acronyms: letter-number acronyms and 
small-capital letter combinations.

## The main part

* **LEXICON Acronym-smn** divides the acros in the 3 types just mentioned.

* * *

<small>This (part of) documentation was generated from [src/fst/stems/smn-acronyms.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/smn-acronyms.lexc)</small>

---


# Propernoun lexicon, Inari Sámi specific names 

**LEXICON Prefix-Proper**

First part of complex names

* Alemus FirstTag ;
* Cuávis FirstTag ;

**LEXICON ProperNoun-smn**
Indeclineable

Ordinary names

Family names

Pet names

Fictional names - - probably no point of adding the fem/mal/ani tags

Object names or organizations

Geographical names

* * *

<small>This (part of) documentation was generated from [src/fst/stems/smn-propernouns.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/smn-propernouns.lexc)</small>

---


# Subjunctions

* **LEXICON Cs**
* **+CS: # ;** adding tags

LEXICON Subjunction

* **tassaaš% ko Cs ;**
* **tegu Cs ;**
* **ete Cs ;**
* and 2o more

* * *

<small>This (part of) documentation was generated from [src/fst/stems/subjunctions.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/subjunctions.lexc)</small>

---



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

## VGenVerbs
* väzziđ:vä^RVzz 2SYLL_ID_IV ; vääzin
* jotteeđ:jo^RVt^RC 2SYLL_JOTTEED_IV ; YAML jođen

## Main verbs

Intransitive and transitive verbs are marked with sublexica ending in **_IV** orr **_TV**.
Sublexica without these endings are not yet classified for transitivity, and
end up *not* receiving *+IV* or *+TV* tags.

* * *

<small>This (part of) documentation was generated from [src/fst/stems/verbs.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/verbs.lexc)</small>

---



retroflex plosive, voiceless		t`  ʈ	    0288, 648 (` = ASCII 096)
retroflex plosive, voiced		d`	ɖ		0256, 598
labiodental nasal				F 	ɱ		0271, 625
retroflex nasal					n` 	ɳ		0273, 627
palatal nasal					J 	ɲ		0272, 626
velar nasal						N 	ŋ		014B, 331
uvular nasal						N\	ɴ		0274, 628

bilabial trill					B\ 	ʙ		0299, 665
uvular trill						R\ 	ʀ		0280, 640
alveolar tap						4	ɾ		027E, 638
retroflex flap					r` 	ɽ		027D, 637
bilabial fricative, voiceless	p\ 	ɸ		0278, 632
bilabial fricative, voiced		B 	β		03B2, 946
dental fricative, voiceless		T 	θ		03B8, 952
dental fricative, voiced			D 	ð		00F0, 240
postalveolar fricative, voiceless	S	ʃ		0283, 643
postalveolar fricative, voiced		Z 	ʒ		0292, 658
retroflex fricative, voiceless		s` 	ʂ		0282, 642
retroflex fricative, voiced			z` 	ʐ		0290, 656
palatal fricative, voiceless			C 	ç		00E7, 231
palatal fricative, voiced			j\ 	ʝ		029D, 669
velar fricative, voiced	        	G 	ɣ		0263, 611
uvular fricative, voiceless			X	χ		03C7, 967
uvular fricative, voiced				R 	ʁ		0281, 641
pharyngeal fricative, voiceless		X\ 	ħ		0127, 295
pharyngeal fricative, voiced			?\ 	ʕ		0295, 661
glottal fricative, voiced			h\	ɦ		0266, 614

alveolar lateral fricative, vl.		K 
alveolar lateral fricative, vd.		K\

labiodental approximant				P (or v\) 
alveolar approximant					r\ 
retroflex approximant				r\` 
velar approximant					M\

retroflex lateral approximant		l` 
palatal lateral approximant			L 
velar lateral approximant			L\
Clicks

bilabial								O\	(O = capital letter) 
dental								|\
(post)alveolar						!\ 
palatoalveolar						=\ 
alveolar lateral						|\|\
Ejectives, implosives

ejective								_>	e.g. ejective p		p_>
implosive							_<	e.g. implosive b	b_<
Vowels

close back unrounded					M
close central unrounded 				1 
close central rounded				} 
lax i								I 
lax y								Y 
lax u								U

close-mid front rounded				2 
close-mid central unrounded			@\ 
close-mid central rounded			8 
close-mid back unrounded				7

schwa								@

open-mid front unrounded				E 
open-mid front rounded				9
open-mid central unrounded			3 
open-mid central rounded				3\ 
open-mid back unrounded				V 
open-mid back rounded				O

ash (ae digraph)						{ 
open schwa (turned a)				6

open front rounded					& 
open back unrounded	        		A 
open back rounded					Q
Other symbols

voiceless labial-velar fricative		W 
voiced labial-palatal approx.		H 
voiceless epiglottal fricative		H\ 
voiced epiglottal fricative			<\ 
epiglottal plosive					>\

alveolo-palatal fricative, vl. 		s\ 
alveolo-palatal fricative, voiced	z\ 
alveolar lateral flap				l\ 
simultaneous S and x					x\ 
tie bar								_
Suprasegmentals

primary stress						" 
secondary stress						% 
long									: 
half-long							:\ 
extra-short							_X 
linking mark							-\
Tones and word accents

level extra high						_T 
level high							_H
level mid							_M 
level low							_L 
level extra low						_B
downstep								! 
upstep								^	(caret, circumflex)

contour, rising						 
contour, falling						_F 
contour, high rising					_H_T 
contour, low rising					_B_L 

contour, rising-falling				_R_F 
(NB Instead of being written as diacritics with _, all prosodic marks can alternatively be placed in a separate tier, set off by < >, as recommended for the next two symbols.)
global rise				<R> 
global fall				<F>
Diacritics

voiceless				_0	(0 = figure), e.g. n_0
voiced					_v 
aspirated				_h 
more rounded				_O	(O = letter) 
less rounded				_c 
advanced					_+
retracted				_-
centralized				_" 
syllabic					=	(or _=) e.g. n= (or n_=) 
non-syllabic				_^ 
rhoticity				`

breathy voiced			_t 
creaky voiced			_k
linguolabial				_N 
labialized				_w 
palatalized				'	(or _j) e.g. t' (or t_j) 
velarized				_G 
pharyngealized			_?\

dental					_d 
apical					_a 
laminal					_m
nasalized				~	(or _~) e.g. A~ (or A_~) 
nasal release			_n
lateral release			_l 
no audible release		_}

velarized or pharyngealized		_e 
velarized l, alternatively		5 
raised							_r 
lowered							_o 
advanced tongue root				_A 
retracted tongue root			_q

* * *

<small>This (part of) documentation was generated from [src/phonetics/txt2ipa.xfscript](https://github.com/giellalt/lang-smn/blob/main/src/phonetics/txt2ipa.xfscript)</small>

---



We describe here how abbreviations are in Inari Sami are read out, e.g.
for text-to-speech systems.

For example:

* s.:syntynyt # ;  
* os.:omaa% sukua # ;  
* v.:vuosi # ;  
* v.:vuonna # ;  
* esim.:esimerkki # ; 
* esim.:esimerkiksi # ; 

* * *

<small>This (part of) documentation was generated from [src/transcriptions/transcriptor-abbrevs2text.lexc](https://github.com/giellalt/lang-smn/blob/main/src/transcriptions/transcriptor-abbrevs2text.lexc)</small>

---


# The Inari Sámi dates 

This is a file generating Inari Sámi date expressions.

* * *

<small>This (part of) documentation was generated from [src/transcriptions/transcriptor-date-digit2text.lexc](https://github.com/giellalt/lang-smn/blob/main/src/transcriptions/transcriptor-date-digit2text.lexc)</small>

---



# Inari Saami number <-> text

* * *

<small>This (part of) documentation was generated from [src/transcriptions/transcriptor-numbers-digit2text.lexc](https://github.com/giellalt/lang-smn/blob/main/src/transcriptions/transcriptor-numbers-digit2text.lexc)</small>

---


# The Inari Sámi dates

This is a file generating Inari Sámi date expressions.

* * *

<small>This (part of) documentation was generated from [src/transcriptions/transcriptor-ttsdate-digit2text.lexc](https://github.com/giellalt/lang-smn/blob/main/src/transcriptions/transcriptor-ttsdate-digit2text.lexc)</small>

---


I N A R I    S A A M I    G R A M M A R    C H E C K E R
==================================================================

# Development setup

Compiling the grammarchecker:

```
cd $GTLANGS/lang-smn
./autogen.sh
./configure --with-hfst --enable-syntax --enable-grammarchecker --enable-tokenisers --enable-alignment --enable-reversed-intersect
make
cd tools/grammarcheckers
make dev
```

Then edit/test as follows:

```
echo "Sun ij puátá." | sh modes/smngram.mode
echo "Sun ij puátá." | sh modes/smngram-release.mode
```

There are very many modes in the `modes` folder, look at them.
If you use emacs and have cg-mode installed, you may run analysis with C-c C-i / C-c C-c
See also [the documentation on grammarchecker testing](https://giellalt.github.io/proof/gramcheck/doc/grammarchecker_testing.html)

# Delimiters, tags and sets

Sentence delimiters are the following: <.> <!> <?> <...> <¶>

## Tags and sets

This section lists all the tags inherited from the fst, and used as tags
in the syntactic analysis. The next section, **Sets**, contains sets defined
on the basis of the tags listed here, those set names are not visible in the output.

### Beginning / end of sentence
BOS
EOS

### Parts of speech

-
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

-
ABBR
ACR
WEB
CLB
LEFT
RIGHT
PPUNCT
PUNCT
COMMA
EXCLMARK
¶
?
MWE
Cmp, but two-word muotâsaanijd seems like an error

### POS sub-categories

-
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
Rom

### Morphosyntactic properties

Nom
Acc
Gen
Ill
Loc
Com
Ess
Ess
Ess
Sg
Du
Pl
Cmp/SplitR
Cmp/SgNom
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
Px (= set of all Px)

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

### Clitic particles

Foc/ge
Foc/gen
Foc/gin
Foc/ges
Foc/gis
Foc/naj
Foc/ba
Foc/be
Foc/hal
Foc/han
Foc/bat
Foc/son

### Derivation 

Der/Pass
Der/NomAg
Actor (= NomAg and Der/NomAg)
Der/alla
Der/d
Der/Car
Der/Caus
Der/lasj
Der/NomAct
Der/st
Der/upmi
Der/vuota
Der/InchL
Der/Dimin
Der/Aadv
Der/Comp
Der/Superl

- LIST DER-A-ADV = (Der/lasj Der/AAdv Adv) ;  ;
- SET NOT-DER-A-ADV = Adv - DER-A-ADV ; 

### Error tags

- All Err/Orth tags
- Err/Orth-spes for all Err/Orth save the simple one

### Secondary tags

- vdic
- spelling error

### Semtags

- HUMAN
- Sem/Act
- Sem/Ani
- Sem/Atr
- Sem/Body
- Sem/Clth
- Der/Date
- Sem/Domain
- Sem/Feat-phys
- Sem/Fem
- Sem/Group
- Sem/Hum
- Sem/ID
- Sem/Lang
- Sem/Mal
- Sem/Measr
- Sem/Measr_Time
- Sem/Money
- Sem/Obj
- Sem/Obj-el
- Sem/Org
- Sem/Par
- Sem/Perc-emo
- Sem/Plc
- Sem/Sign
- Sem/State-sick
- Sem/Sur
- Sem/Time
- Sem/Time
- Sem/Txt
- Der/Year

This ends the semtag list.

PROP-ATTR
PROP-SUR

TIME-N-SET
NOT-TIME
TIME-N

### Valency tags
See also the valency file in src/cg3

### Syntactic tags

- @+FAUXV
- @+FMAINV
- @-FAUXV
- @-FMAINV
- @-FSUBJ>
- @-F<OBJ
- @-FOBJ>
- @-FSPRED<OBJ
- @-F<ADVL
- @-FADVL>
- @-F<SPRED
- @-F<OPRED
- @-FSPRED>
- @-FOPRED>
- FOBJ
- FMAINV
- FAUXV
- @>ADVL
- @ADVL<
- @<ADVL
- @ADVL>
- @ADVL
- @HAB>
- @<HAB
- @HAB
- @>N
- @Interj
- @N<
- @>A
- @P<
- @>P
- @HNOUN
- @INTERJ
- @>Num
- @Pron<
- @>Pron
- @Num<
- @OBJ
- @<OBJ
- @OBJ>
- @OPRED
- @<OPRED
- @OPRED>
- @PCLE
- @COMP-CS<
- @SPRED
- @<SPRED
- @SPRED>
- @SUBJ
- @<SUBJ
- @SUBJ>
- SUBJ = all subjtags
- SPRED etc.
- OPRED
- @PPRED
- @APP
- @APP-N<
- @APP-Pron<
- @APP>Pron
- @APP-Num<
- @APP-ADVL<
- @VOC
- @CVP
- @CNP
- OBJ
- <OBJ
- OBJ>
-  <OBJ-OTHERS
- OBJ>-OTHERS
- NOT-FAUXV = FMAINV OR OBJ + V OR ADVL + V

The following work after the mapping rules for verbs:

- SYN-V
- @X (this last one for unassigned functions)

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

- LIST ACCILL = Acc Ill ; 
- LIST ADVLCASE = Ill Loc Com Ess ;  
- LIST CASE-HALFAGREEMENT = Ill (Sg Loc) (Pl Com) Ess ;   
- LIST CASE-AGREEMENT = Nom Acc Gen (Pl Ill) Loc Com Ess ;   
- LIST CASE = Nom Acc Gen Ill Loc Com Ess ;  
- SET NOT-NOM = CASE - Nom ;  
- SET NOT-GEN = CASE - Gen ;  
- SET NOT-ACC = CASE - Acc ;  

### Verb sets

- SET NOT-V = WORD - V ;  
- SET REAL-NEG = Neg - Sup ;  
- SET MOOD-V = Ind OR Pot OR Imprt OR Cond OR (Neg Sup) ;  
- LIST GC = ("gč") ;  
- SET VFIN = GC OR MOOD-V - ConNeg ;  
- SET VFIN-POS = MOOD-V - ConNeg - Neg ;  
- SET VFIN-NOT-IMPRT = VFIN - Imprt ;  
- SET VFIN-NOT-NEG = VFIN - Neg ;  
- SET NOT-PRFPRC = WORD - PrfPrc ;  

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

- LIST PERNUM = Sg1 Sg2 Sg3 Du1 Du2 Du3 Pl1 Pl2 Pl3 ;  

### Finite verb sets

SG-V, DU-V, PL-V,
DU-PL-V
1-2-V
VNOTSG1 (for all other persons than Sg1), VNOTSG2, ...

No one so far

z### Copula sets 

(these ones need to be rewritten)

LEDE, LEAN, LEAT, ...

### QUASI-TV
Mun vuolgim raapâid pajas. Verb accepts accusative in front of adverb.

### Pronoun sets

MUN, DON, SON, MOAI, ...

### Adjective sets

LEX-A, A-CASE, ...

- SET LEX-A = A - DER-A ;  

- SET A-CASE = A - Attr - Adv ;  

- LIST A-CC = A CC ;  

- SET NOT-A = WORD - A ;   This is former NOT-ADJ
- SET NOT-A-COMMA = WORD - A - COMMA ;  
- SET NOT-A-COMMA-CC = WORD - A - COMMA - CC ;  
- SET NOT-Attr = WORD - Attr ;  
- SET NOT-A-PCLE = WORD - A - Pcle ;  
- SET NOT-A-CC = WORD - A-CC ;  

- LIST ATTRONLY = "anarâškiel" "eeđâb" "fakkâ" "fastâ" "hirmâd" "huámášekkis" "hyperkorrekt" "korrekt" "läättinkiel" "nuorttâkiel" "nuuvtkočodum" "ohtuunis" "olmâ" "oovdiš" "oovtâkiel" "orjâlâškiel" "pajekiel" "prelimináár" "puigâ" "ruotâkiel" "ruoŧâkiel" "sämikiel" "sierâ" "suomâkiel" "tiätu" "tommittáá" "ubâ" "váháš" "vuáđusämikiel" "vuoigâ" ;  

This set was removed, for a good reason?
- SET NOT-A-ADV = WORD - A - Adv OR ("meid") ;  

- LIST CONCORD-A = "maggaar" "pyeri" "siämmáš" "taggaar" "tyeggáár" "tieggáár" (".*lágán"r) (".*láš"r) (".*lááš"r) (".*lâš"r) (".*laš"r) (".*sâš"r) (".*vâš"r) (".*muš"r) Der/lasj ;  = this is the set for adj agreeing with N.

### Adverbial sets

LEX-ADV, LEX-ADV-DE, ...

### Coordinator sets

Foc, NEGFOC, ...

### Adverbs that have lookalikes

Here come some adverbs that have identical twins in other POS.
If these are found in Adv contexts, we treat them as adverbs.

LACCAT-ADV

MOD-NP-ADV

MOD-ADV-ADV

EASKKA

### Sets of elements with common syntactic behaviour

### Verb sets

V is all readings with a V tag in them, REAL-V should
be the ones without an N tag following the V.
The REAL-V set thus awaits a fix to the preprocess V ... N bug.

- The set COPULAS is for predicative constructions

TRANS-V is the set for verbs really taking objects

- Sets for verbs choosing oblique objects or adverbials
- **STVLIST** is the list of strictly transitive verbs. In the rules, refer not to STVLIST, but to the set STV defined below.

STRICT-TRANS-V is the set for verbs which don't let a GenAcc be a modifier of anything else than an object, e.g. Mun organiseren eatni gievkkanis. - eatni wants to be the object

- LIST COM-V = "algâttiđ" "älgiđ" "arvâlâddâđ" "viärdádâllâđ" "pártáskiđ" "piergiittâllâđ" "piergiđ" "pallâđ" "čuákkimistiđ" "teivâđ" "tevdiđ" "tigáštâllâđ" "tuárruđ" "sierâdiđ" "elettiđ" "flirttađ" "gávnnadit" "kárvuttiđ" "váivášuđ" "kištottâllâđ" "gulahallat" "gulaskuddat" "hilbošit" "juátkiđ" "jyehiđ" "lattiđ" "leakkastallat" "lohpádaddat" "lohpádallat" "lonottiđ" "molsođ" "naaijâđ" "oktiibidjat" "uápásmiđ" "ovttasbargat" "ovttastahttit" "ruhnođ" "reivvestaddat" "rijdâliđ" "rijdáskiđ" "rohcošit" "sárnuđ" "siävuttiđ" "servuustâllâđ" "sovâttâllâđ" "soottâđ" "sierâdiđ" "šietâdiđ" "sooppâđ" "išediđ" "verdidiđ" "vijđediđ" "vrd" ; 

- LIST ILL-V = "aibâšiđ" "asâiduđ" "pokkiđ" "peessâđ" "čokánistiđ" "čujottiđ" ("čuoppâđ" Ex/V Ex/TV Der/Pass) "vaikuttiđ" "turvâstiđ" "tuuttâđ" "kuoskâđ" "hárjániđ" "irgediđ" "irgástallat" ("juáhuđ" Ex/V Der/Pass V) "juohhuđ" ("jyehiđ" Ex/V Ex/TV Der/Pass) "lijkkuđ" "lyettiđ"  "vyelgiđ" "maccâđ" "mieđettiđ" "miettâđ" "moonnâđ" "njeeijâđ" "enittiđ" "oskođ" "peessâđ" "riemmâđ" "valmiđ" "uásálistiđ" "uápásmuđ" "suttâđ" "vaikuttiđ" "västidiđ" "vyelgiđ" "vaiguttiđ" "vuáđuduđ" ; 

- LIST TRANSL-V = "jápmit" "duššat" "hávkat" "náitalit" "gaskkalduvvat" "nohkat" "goarránit" "heahpanit" "boakčánit" "šlundut" "ráigánit" "vuollánit" "gopmánit" "fuotnánit" "roahppánit" "reakčanit" "bieđganit" "luoddanit" "guvggodit" "liegganit" "suorganit" "báhkkanit" "cuovkanit" "hedjonit" "lohppet" "goikat" "galbmot" "goallut" "ruostut" "buoidut" "guvggodit" "suvrut" "suddâdiđ" ; 

- LIST REKS-V = "áibbašit" "teivâđ" "dorvvastit" "tuuttâđ" "käyttää" "hárjániđ" "oskođ" "lijkkuđ" "mieđettiđ" "enittiđ" "valmiđ" "käydä" "searvat" "vyelgiđ" "beroštit" "kieldiđ" "bihtit" "ceavzit" "dinet" "tulkkâđ" "eastadallat" "eastadit" "huolâttiđ" "fuollat" "geargat" "lakkađ" "luohpat" "oassálastit" "váikkuhit" "váruhit" ; 

- LIST ACC-LOC-V = "kieldiđ" "čuávvuđ" "earuhit" "kieldiđ" "jtak" ; 

- LIST ACC-ILL-V = "addit" "bidjat" "merhâšiđ"; 

- LIST MIELDE-V = "addit" "bidjat" "täiđiđ" "leđe" "uástiđ" "uážžuđ" "väldiđ" ; 

- LIST TIME-ADVL-V = "áhásiđ" "ássat" "porgâđ" "ajasta" "anoa" "eelliđ" "fievridiđ" "guohtut" "joatkit" "láddet" "máttááttiđ" "peividiđ" ; 

- LIST TIMEOBJECT-V = "addit" "kevttiđ" "arvâlâddâđ" "bálvalit" "čuávvuđ" "tevdiđ" "diŋgot" "iävtuttiđ" "fátmmastit" "vaattâđ" "kavnâđ" "kevttiđ" "ajasta" "guhkidit" "hábmet" "tekstiä" "juolludit" "lasettiđ" "liigudit" "loahpahit" "loaktit" "markeret" "meridiđ" "molsut" "oanidit" "uážžuđ" "käydä" "šiehttat" "várret" "vijđediđ" ; 

- LIST DURATION-V = "áhásiđ" "porgâđ" "ajasta" "čuoigâđ" "eelliđ" "gollat" "guohtut" "leđe" "väzziđ"; 

- LIST POINT-IN-TIME-V = "árrit" "orostittiđ" "estiđ" "cakkadit" "cakkastallat" "lijkkuđ" "doallat" "duostut" "dustet" "eastadit" "kieldiđ" "goahcat" "heađuštit" "estiđ" ; 

- LIST ROUTE-ADVL-V = "puáttiđ" "čuoigâđ" ; 

- LIST ROUTEOBJECT-V = "ásahit" "bidjat" "botnjat" "basuhit" "pyerediđ" "čielgâsmittiđ" "čuovvulit" "čielgiđ" "čuárvuđ" "čurvet" "dieđihit" "lujittaa" "duorggastit" "kevttiđ" "geahpedit" "geahpidit" "gudnejahttit" "tutkâđ" "kieđâvuššâđ" "kyeđđiđ" "gilljut" "heahtit" "čuárvuđ" "huikkádit" "juoigâđ" "lávluđ" "luuhâđ" "loahpahit" "meridiđ" "máidnut" "lujittaa" "njulget" "máttááttiđ" "toohâđ" "sivdnidit" "tutkâđ" "kepidiđ" "válmmaštit" "vurket" ; 

- LIST HAB-V = "puáttiđ" "leđe" "goallut" "sorjođ" "jápmit" "šoddâđ" ; 

### Valency sets

- LIST INF-V = "enittiđ" "áhásiđ" "áiguđ" "älgiđ" "asâttiđ" "paggiđ" "povčâstiđ" "peessâđ" "lijkkuđ" "anoa" "pallâđ" "puáttiđ" "koččođ" "čokkáđ" "čokánistiđ" "čokániđ" "pisániđ" "čuožâstiđ" "čuárvuđ" "čurggodit" ("ettâđ" Der/Pass) "tovâttiđ" "táttuđ" "täiđiđ" "tarbâšiđ" "miäruštâllâđ" "suovvâđ" "tuáivuđ" "huáputtiđ" "oskeldâttâđ" "ferttiđ" "huámášiđ" "huolâttiđ" "kolgâđ" "pyehtiđ" "vaattâđ" "gárrut" "karttâđ" "iskâđ" "kiergâniđ" "kennigâttiđ" "vaijeeđ" "koččođ" "happiittiđ" "halijdiđ" "hárjániđ" "laaviđ" "lijkkuđ" "morániđ" "vyelgiđ" "mättiđ" "movttiidittiđ" "mušteđ" "vaijeeđ" "nabdeđ" "máttááttiđ" "uápásmiđ" "máttáđ" "uážžuđ" "enittiđ" "riemmâđ" "sättiđ" "seahtit" "áánnuđ" "sättiđ" "suovvâđ" "šoddâđ" "maaššâđ" "vaijeeđ" "vyelgiđ" "vuálániđ" "vyerdiđ"; 

- LIST ACC-INF-V = "anoa" "čuárvuđ" "tovâttiđ" "suovvâđ" "koččođ" "movttiidahttit" "anoa" "suovvat" ; 

- LIST OPRED-V = "alidit" "kevttiđ" "algâttiđ" "ásahit" "porgâđ" "bidjat" "ceavzit" "ettâđ" "dahkaluddat" "toohâđ" "lijkkuđ" "tubdâđ" "dulkot" "karttâđ" "kevttiđ" "keččâđ" "käskeä" "koččođ" "kvalifiseret" "málet" "meroštallat" "navdit" "uáiniđ" "merhâšiđ" "visásmittiđ" "väldiđ" "valjiđ" "rábmot" "vihahit" ; 

- LIST OKTII-V = ("puállu" Der/huvva) "goallostit" "nuhostiđ" "bidjat" "kiinni" "suddâdiđ" "käydä" "bidjat" "iskeä" "keessiv" "kuullâđ" "rehkenastit" "ordnet" "käydä" "gávnnadit" "heivehit" "toimâđ" "keččâliđ" "jhkin" "seaguhit" "sorrot" ; 

- LIST VGEN-V-TRIGGER = "peessâđ" "bidjat" "bijadit" "anoa" "puáttiđ" "pyehtiđ" "čuággiđ" "čuávvuđ" "pyehtiđ" "duolmmadit" "uážžuđ" "heiviđ" "kolgâđ" "girdit" "gálašit" "kavnâđ" "goastit" "kuáđuttiđ" "gurgalit" "gárgidit" "jávkkihit" "joatkit" "reissiđ" "jorgut" "loahpahit" "vyelgiđ" "mátkkoštit" "njahkalit"  "njoammut" "oasálastit" "rasttildit" "kaksijalkaisista" "sihkkelastit" "váccašit" "vájuldit" "vánddardit" "viekkimpiergâs" "viehkalit" "viežžat" "vyeijiđ" "vyelgiđ" ; 

- LIST SOURCE-V = "vaattâđ" ; 

- LIST MOVEMENT-V = "ádjit" "peessâđ" "puáttiđ" "čuoigâđ" "čuoiggadit" "fárret" "finadit" "finihit" "heiviđ" "gálašit" "gállit" "girdit" "johttát" "reissiđ" "jorahallat" "vyelgiđ" "mátkkoštit" "njoammut" "njuiket" "enittiđ" "riidet" "kaksijalkaisista" "sáhtostit" "sihkkelastit" "soabbulit" "soabbut" "šloahtat" "váccašit" "vádjolit" "vájaldit" "vájuldit" "vánddardit" "väzziđ" "viehkalit" "viekkimpiergâs" "viežžat" "vuodjalit" "vuoijâđ" "vyeijiđ" "vuojadit" "vuojâččiđ" "vyelgiđ" ; 

- LIST JOHTIT = "čuoigâđ" "čuoiggadit" "gálašit" "gállit" "girdit" "johttát" "reissiđ" "mátkkoštit" "njoammut" "riidet" "kaksijalkaisista" "sihkkelastit" "soabbulit" "soabbut" "šloahtat" "váccašit" "vádjolit" "vájaldit" "vájuldit" "vánddardit" "väzziđ" "viehkalit" "viekkimpiergâs" "vuodjalit" "vuoijâđ" "vyeijiđ" "vuojadit" "vuojâččiđ" ; 

- LIST HUMAN-ACTIVITY-V = "äštiđ" "enittiđ" "hammiđ" "herviđ" "hoittáđ" "huksiđ" "huškođ" "išediđ" "juksâđ" "juuhâđ" "jyehiđ" "jyehiđ" "kárvudâttâđ" "kästiđ" "kavkkâđ" "keččâđ" "koddeđ" "koččođ" "kuálástiđ" "kuárruđ" "kuldâliđ" "kuškâdiđ" "lahtâdiđ" "lehâstiđ" "liäibuđ" "luávdiđ" "luoddiđ" "máttááttiđ" "merkkiđ" "mittediđ" "naaijâđ" "nijtteđ" "njuoskâdiđ" "pääččiđ" "passeeđ" "piäluštiđ" "piäluštiđ" "pieijâđ" "piemmâđ" "puáldiđ" "puovtâdiđ" "putestiđ" "pyehtiđ" "registeeriđ" "sáhháđ" "salttiđ" "sárguđ" "sárguđ" "sárnuđ" "sikkođ" "suáittiđ" "suáittiđ" "terppâđ" "tevdiđ" "tiervâttiđ" "toimâđ" "toohâđ" "tuáijuđ" "tubdâstiđ" "tuommiđ" "uástiđ" "uigâđ" "uuccâđ" "vipšâđ" "vooijâđ" "vuástáväldiđ" "vuáđudiđ" "vuoidâđ" "vuolgâttiđ" "vuorkkiđ" "vuoššâđ" "vyebdiđ" "vyeittiđ" "čäälliđ" "čäittiđ" "čuággiđ" "čuávdiđ" "čuoggiđ" "čuoppâđ" ;  

- LIST BODY-ACTIVITY-V = "purrâđ" "čiekčat" "čujuhit" "čuorbmat" "kuullâđ" "jhk" "jorahit" "lihkahit" "lihkastahttit" "luptiđ" "njávkkadit" "njávkkastit" "uáiniđ" "seavvit" ; 

- LIST PLACING-ACTIVITY-V = "bidjat" "buonjostit" ; 

- LIST WRITING-ACTIVITY-V = "čäälliđ" ; 

- LIST HANDICRAFT-ACTIVITY-V = "buddet" "botnit" "kuárruđ" "hervet" "vadjat" "vikšet" ; 

- LIST DADJAT = "naggiđ" "ettâđ" "luuhâđ" "muštâliđ" ; 

- LIST HUPMAT = "mainâšiđ" "merhâšiđ" "njurgođ" "sámástiđ" "särnidiđ" "sárnuđ" "sárnuđ" "sárnuđ" "savâstâllâđ" "savâstâllâđ" "savâstâllâđ" "savâstiđ" "sovkkâliđ" "suomâstiđ" "tigáštâllâđ" "tuoldâđ" "šuáláđ" ;  

- LIST VERBAL-ACTIVITY = "arvâlâddâđ" "celkkiđ" "čielgiđ" "naggiđ" "basuhit" "bealkit" "cuoigut" "čuárvuđ" "čurvet" "ettâđ" "deattastit" "gielistit" "gilljut" "gopmulit" "háladit" "háleštit" "hállat" "hoallat" "čuárvuđ" "huikkádit" "jtak" "juoigâđ" "kommenteret" "lávluđ" "luuhâđ" "muštâliđ" "kutsua" "kutsua" "ravviđ" "sivdnidit" "váruhit" "västidiđ" ; 

- LIST HUMAN-AGENT-V = "áŋgiruššat" "ásahit" "beahttit" "pyerediđ" "čielgâsmittiđ" "čuovvulit" "dássidit" "deattastit" "tiäduttiđ" "dieđihit" "tievvâđ" "lujittaa" "geahpedit" "geahpidit" "gudnejahttit" "tutkâđ" "illudit" "lassánit" "liekkadallat" "loahpahit" "luohpat" "meridiđ" "moivašuhttit" "kutsua" "lujittaa" "oassálastit" "tutkâđ" "kepidiđ" "váikkuhit" "válmmaštit" "verrošit" "vurket" ; 

- LIST NOT-HUMAN-OBJECT-V = "porgâđ" "purrâđ" "čäälliđ" "luuhâđ" "vyeijiđ" ; 

- LIST USUALLY-IV =  "boradit" ; 

- LIST INTELLECTUAL-ACTIVITY-V = "tubdâđ" "huámášiđ" "huámášiđ" "huobmát" "jurddahit" "jurddašit" "smiehttat" ; 

- LIST VEHICLE-PLACE-V = "addit" "bearrat" "gaikkihit" "vaattâđ" "geiget" "uástiđ" "uážžuđ" "suoládit" "väldiđ"  ; 

- LIST VEHICLE-TOOL-V = "peessâđ" "puáttiđ" "pyehtiđ" "pyehtiđ" "fievridiđ" "vuolggahit" ; 

- LIST ABSTR-ENTITY-COM-V = "investeret" "lihkosmuvvat" "lihkostuvvat" "lihkustuvvat" "ruttâdiđ"; 

- LIST ONLY-PLACE-LOC-V = "algâttiđ" "bártidit" "porgâđ" "čokánistiđ" "toohâđ" "iskâđ" "olahit" "veahkehit" ; 

- LIST HUMAN-LOC-V = "kevttiđ" "pääcciđ" "kevttiđ" "käskeä" "kutsua" ; 

- **PLACE-V** Those get only not locative if the target is a member TOOL, ABSTR-TOOL or ANIMATE or CONCEPT. Selects more locatives than ONLY-PLACE-LOC-V
- LIST PLACE-V = "ássat" "buolvvastallat" "buolvvastit" "čippostallat" "čokkáđ" "čohkahit" "čuážžuđ" "čuččodit" "morihit" "gullát" "morránit" "orroođ" "orodit" "stuorrut" "veallát" "veallahit" ; 

- LIST ABSTR-PLACE-V = "váilut" "käydä" "hiehpat" "siskeldiđ" "käydä" "šiehttat"; 

- LIST STATE-V = "eelliđ" ; 

- LIST REM-WITH-PARTS = "gaikkihit" ; 

- LIST PERCEPTION-V = "áicat" "tubdâđ" "ealvit" "huámášiđ" "huámášiđ" "kuullâđ" "haksit" "huobmát" "huomihit" "uáiniđ" ; 

- LIST ILLNESS-V = "buohcat" "buohccát" ;  

- LIST ADV-PX-V = "keččâđ" ; 

- LIST MUITALIT = "arvâlâddâđ" "anoa" "boagustit" "celkkiđ" "cuoigut" "čielgiđ" "čurvet" "čuárvuđ" "ettâđ" "dahkaluddat" "deattastit" "tiäduttiđ" "tuáivuđ" "epidiđ" "geardduhit" "geažuhit" "gielistit" "gilljut" "hállat" "hoallat" "čuárvuđ" "huikkádit" "imaštallat" "jtak" "jievžat" "juoigâđ" "jurdilit" "jurddašit" "kommenteret" "lávluđ" "lasettiđ" "loahpahit" "luuhâđ" "lopediđ" "máidnut" "máinnašit" "muštâliđ" "unohtamisen" "nágget" "njávggádit" "merhâšiđ" "ravviđ" "savkalit" "sárdnidit" "šuohkihit" "váidalit" "váruhit" "västidiđ" ; 

- LIST LEXICALISED-PASS-V = "kevttuđ" ; 

### Adverb sets

### Adjective sets

Lexical valency sets for adjectives.
here we have adjectives according to their semantic properties

- LIST DEHALAS = "táválâš" "dehálaš" "tehálâš" "mearkkašahtti" "epitáválâš" "máhđulâš" "suohtas" ; 

Other adjective sets

A-N, A-N-CASE, ...
- LIST A-N = "buoidi" "čeppi" "headju" "heittot" "jalla" "neavri" "nuorâ" "oahpis" "oarbbis" "räähis" "riges" "váivváš" "vuoras"; 

- LIST GRADE-A = "fávru" "headju"; 

- LIST A-LEX-AS-NOUN = "adj." "kuávdáš" "nuorâ" "oahpis" "váivi" "uáinojeijee"; 

- LIST TIME-A = "čuávuvâš" "čuávuvâš" "maŋit" "majemuš" "ovdebáš" "moonnâm" "puáttee" "ittáš" "tot" "taat" "tiet" "tuot" ("vyelgiđ" PrfPrc) ("vássit" PrfPrc)   ;  

- LIST DURATION-A = "heila" "eanas" "eenâb" "geažo" "geažos" "guhkki" "obba" "melgâd" "stuárudâh" "oles" "puoh" ; 

- LIST POINT-IN-TIME-SPEC = "toovláš" "eres" "iežá" "nubbe" ; 

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

Nominal sets defined morphophonologically
Sets for lexeme homonymy (most of them are moved to where the actual rules are.)

The words in the set **N-PO** can be both N and Po, the set takes that into account.

Nouns that have dangerous homonyms

### Nominal sets defined semantically

- Spatial noun sets. These nouns behave like postpositions

- Time sets

- Amount sets

OKTA

- Sets for nouns with morpho-syntactic preferences

- Number-related sets

- Sets for case, possessive, etc.

- Sets for nouns as pred

- LIST FAMILY-ONLY-HUMAN = (Prop Sem/Mal) (Prop Sem/Fem) (Prop Sem/Sur) "isoisälle" "kaavâ" "isoisälle" "bárdnemánná" "käälis" "čeahci" "čeahcit" "eemeed" "eahki" "kaavâ" "kaavâ" "iänui" "goaski" "pelikyeimi" "isän" "irgi" "käälis" "alge" "isoisälle" "manje" "isää" "madâräijih" "máttaráhkku" "moarsi" "muoŧŧá" "muoŧŧal" "náittosguoibmi" "neahpi" "uábbi" "oabbábealle" "miespuolinen" "oappáš" "oarpmealle" "osku#guoibmi" "ristváhnen" (".*sássa"r) "siessal" "siessá" "vieljaš" "viljâ" "vielljabealle" "vilbealle" "vuohppa" "vuonáhkku" "vyene" ; 

- LIST FAMILY-ALSO-ABSTRACT = "eeči" "áddjá" "áhkku" "peerâ" "enni" "oapmahaš" "sohka" "sohkagoddi" "váhnen" "veahka" ; 

- LIST NON-FAMILY = "alge" "algaaš" "divššohas" "alge" (".*guoibmi"r) "vierailija" "naabur" "lagamuš" (".*mánná"r) "mánáš" (".*nieida"r) "nieidâš" (".*nisson"r) (".*nisu"r) "nuorâ" "oskkuviellja" "ustev" (".*olmmoš"r) "naabur" "roppâ" "sámenuorra" "sämmilâš" "skippáár" "ustev" "smávvagánda" (".*ustit"r) "skippáár" "viijses" ; 

- LIST HUMAN-LIKE = "beahtu" "beargalat" "eŋgel" "háldi" "hearrá" "immeel" "stállu" "suodjalus#eŋgel" "ulda" ; 

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

*These were the set types.*

## Grammarchecker sets

name convention for error tags: ´´&errortype-errorsubtype-is-shouldbe´´

 

 

 

# RULE SECTION

- Example marking: Wrong = #%
- Example marking: Correct = #$
- Example marking: Finnish = #f

**Speller suggestions rule** ADD @typo - make sure the suggestions survive the cg mangling:

## Singleton words

**Speller suggestions rule** &real-love-lope

## Noun phrase internal phenomena

### Demonstratives

**Agreement rule:** `msyn-dem-locattr-gen`

### Noun phrase possessor

**Agreement rule:** `msyn-posspl-acc-gen`. *Siijđoid/Siijđoi lehâstem tábáhtuvá itten.*

**Agreement rule:** msyn-posspl-acc-gen. coordination: *uásálistiđ párnáid/párnái já nuorâi leiráid*

**Agreement rule:** msyn-posspl-acc-gen. coordination: *uásálistiđ párnáid/párnái já nuorâi leiráid*

### Noun phrase complements

N + Ill

**Agreement rule:** msyn-posspl-ill-gen: *uásálistiđ párnáid/párnái leiráid stuorrâhâžžân.*

**Agreement rule:** msyn-ncompl-ess-sgill: *Must lii tárbu toorjân/torjui.*

**Agreement rule:** msyn-ncompl-ess-sgill: *Maggaar toorjân/torjui sist ličij tárbu.*

**Agreement rule:** msyn-ncompl-placc-plill: *Motomeh suomâkielâ vaikuttâsah/tábáhtussáid tábáhtusâid láá tuhhiittum anarâškielân.*

**Agreement rule:** msyn-ncompl-placc-plill

### Double possessive rules

### Number and case agreement 

### Det + N agreement

**Agreement rule:** msyn-det-nom-acc: Puurâ tuoh/tuoid rusinijd!

Attributive forms

mii + nominative should be mii + acc

**Agreement rule:** msyn-mii-sgnom-placc: Mii historjá/historjáid taat lii

**Agreement rule:**

### Adjectives in attributive position

**Agreement rule:** msyn-adj-gen-nom (A.Gen + N.Nom)

**Agreement rule:** msyn-adj-nom-acc

### Quantors in attributive positions

**Agreement rule:** msyn-quant-nom-gen (A.Gen + N.Nom) # add Ord

### Relative pronoun in N + Rel

### Quantor phrases

#### Numeral phrases

**Agreement rule:** msyn-num-par-gen: Must láá kyehti kyellid/kyele

**Agreement rule:** msyn-num-gen-par:  8 kaandâ/kandâd

**Agreement rule:** msyn-num-acc-par: 8 kaandâ/kandâd

#### Quantor adverbs

#### Quantor adverb complementss

msyn-quant-gen-nom

## Verb agreement rules

### Indicative person agreement

#### Sg1

**Agreement rule:** `msyn-agr-sg2-sg1`, 

**Agreement rule:** msyn-agr-other-sg1, *Mun puátá/puáđám*

**Agreement rule:** msyn-agr-other-sg1

**Agreement rule:** msyn-v-prfprc-sg1, Subject to the left

**Agreement rule:** msyn-v-actio-sg1, Subject to the left

#### Sg2

**Agreement rule:** msyn-agr-other-sg2, Subject to the left, *Tun puátá/puáđah*

#### Sg3

**Agreement rule:** msyn-agr-sg1-sg3, Subject to the left, *Sun puáđam/puátá*

**Agreement rule:** msyn-agr-sg2-sg3, Subject to the left, *Sun puáđah/puátá*

**Agreement rule:** msyn-agr-imprt-sg3, Subject to the left, *Sun puáđah/puátá*

#### Du1

**Agreement rule:** msyn-agr-other-du1

#### Du2

**Agreement rule:** msyn-agr-other-du2 *Tuoi koolgâi/kolgáid tääl algâttiđ monnii sämmilâškampanja.*

#### Du3

**Agreement rule:** msyn-agr-sg3-du3

**Agreement rule:** msyn-agr-sg3-du3

#### Pl1

**Agreement rule:** msyn-agr-other-pl1, *Mij puátá/puáttip.*

#### Pl2

**Agreement rule:** syn-agr-other-pl2, *Tij puátá/puátivetteđ.*

#### Pl3

Sg3/Pl3 errors: Suomâkielâ sárnumkielâ epikongruens maaŋgâlovo 3. persovnist

**Agreement rule:** Subject to the right, msyn-agr-sg3-pl3

**Agreement rule:** msyn-agr-sg3-du3

**Agreement rule:** msyn-agr-sg3-pl3, Subject to the left, *80 puátá/puáđah*

**Agreement rule:** msyn-agr-sg3-pl3, Subject to the left, *80 puátá/puáđah*

**Agreement rule:** msyn-agr-other-pl3, Subject to the left, *Toh puátá/puátih.*

**Agreement rule:** msyn-agr-other-pl3

**Agreement rule:** msyn-agr-other-pl3

### Imperativ rules

### Infinite verbforms

#### Inf should be Actio Essive

**Agreement rule:** msyn-orrood-inf-actioess *Mun orom leđe/lemin ennuv velgus anarâškielân.*

#### ConNeg in present tense

**Agreement rule:** &msyn-negcompl-sg3-conneg

**Agreement rule:** msyn-v-sg3-conneg *Sun ij lah/lii.*

**Agreement rule:** msyn-v-du3-conneg *Noomah iä vuáđuduv/vuáđuduu.*

**Agreement rule:** msyn-v-sg3-conneg *Sun ij puávtáččij/puávtáččii vyelgiđ.*

#### ConNeg in past tense

**Agreement rule**  Negative gives participle msyn-v-sg1-prfprc

#### Sg1 should be Participle

**Agreement rule:** msyn-v-sg1-prfprc *Sun lii huunjâm/huunnjâm.*

## Existential sentences

### Verb should be plural. 

The interference comes from Finnish e-sentences, where the verb is in the singular.

**Agreement rule:** msyn-extv-sg3-pl3 *Must lii/láá uđđâ autoh.*

**Agreement rule:** msyn-extv-sg3-pl3, *Iäruh omâstemráhtusist: mieđetteijee já kieldee häämi.*

**Agreement rule:** msyn-extv-pl3-sg3 
**Agreement rule:** msyn-extv-pl3-sg3 *Liihân/Lááhân must uđđâ autoh.*
**Agreement rule:** msyn-extv-pl3-sg3 *Liihân/Lááhân must uđđâ autoh.*
**Agreement rule:** msyn-extv-pl3-sg3 *Liihân/Lááhân must uđđâ autoh.*
**Agreement rule:** msyn-extv-pl3-sg3 *Lii/Láá must uđđâ autoh.*

**Agreement rule:** msyn-extv-numeral-sg3-pl3

**Agreement rule:** msyn-extneg-sg3-pl3

**Agreement rule:** msyn-extneg-sg3-pl3

### E-sentences and habitives

**Agreement rule:** msyn-extsubj-ill-nom

**Agreement rule:** msyn-extsubj-ill-nom *Šiljoost láá poccuuh/poccuid.*

**Agreement rule:** msyn-extsubj-acc-nom

**Agreement rule:** msyn-extv-sg3-pl3

**Agreement rule:** msyn-extsubj-ill-nom

## Subjects

### Subjects gen > nom

### Finnish nessesiivi: acc > nom

**Agreement rule:** msyn-ness-acc-nom

**Agreement rule:** msyn-ness-acc-nom *Muu ličij/liččim kolgâm porgâđ taam tállán.* (???)

**Agreement rule:** msyn-ness-acc-nom *Ij-uv/Jieh-uv tuu/tun kolgâm vyelgiđ suáluikuávlun Jennyin?*

**Agreement rule:** msyn-ness-acc-nom

**Agreement rule:** msyn-ness-acc-nom *Suu/Sun koolgâi forgâ porgâđ miärádâs.*

**Agreement rule:** msyn-pass-accsubj-nomsubj: *Sämikielâlijd/Sämikielâliih nomâttâsâid kiävttojeh uccáá.*

**Agreement rule:** msyn-pass-accsubj-nomsubj *Tävirijd/Tävireh láppojii ääitist.*

**Agreement rule:** msyn-pass-accsubj-nomsubj: *Páárnán iä adeluu talkkâsijd/talkkâseh tipšopeeivi ääigi.*

### Subjects in passive: acc > nom

b) Suomâkielâ partitiiv passiivráhtusijn; sämikielâst passiiv ohtâvuođâst lii nominatiiv já verbâ maaŋgâlovvoost.

**Agreement rule:** msyn-pass-accsubj-nomsubj

**Agreement rule:** msyn-pass-accsubj-nomsubj *Sämikielâlijd nomâttâsâid iä jur kevttuu.*

**Agreement rule:** syn-top-placc-plnom *Anarâškielâlijd/Anarâškielâliih noomâid kiävttoo/kiävttojeh uccáá.*

**Agreement rule:** msyn-top-placc-plnom *tiäđuid/tiäđuh ij kavnuu.*

## Objects

### Singular objects

#### Ordinary singular objects

Hmm, no rules for this, it seems.

#### LEDE + OBJ + Th-ADJ + TV

** Object rule ** Object in unexpected post-copula position: *Onne lii kandâ/kaandâ älkkee uáiniđ*

#### Topicalised objects

**Agreement rule:**  msyn-top-nom-acc

**Agreement rule:** msyn-top-nom-acc

### Plural objects

These are often put in nominative, due to Finnish plural objects.

**Agreement rule:** msyn-plobj-nom-acc

**Agreement rule:** msyn-plobj-nom-acc

**Agreement rule:** msyn-obj-sgnom-sgacc *Mun juuvâm ain mielkki/mielhi.*

**Agreement rule:** msyn-obj-sgnom-sgacc *Mun lam ain juunâm mielkki/mielhi.*

**Agreement rule:** msyn-obj-sgnom-sgacc)

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-plobj-nom-acc *Nubeh tobdeh kuobbâreh/kuobbârijd ivneest.*

**Agreement rule:** msyn-obj-plnom-placc (6 rules) *Lam valjim taah säänih/saanijd.*

### Imperative objects

Nom should be acc in imperative

Suomâkielâ imperatiiv mieđetteijee häämist, mast objekt sajehäämmin lii maaŋgâlovo nominatiiv mut sämikielâst akkusatiiv:

**Agreement rule:** msyn-imp-nom-acc

**Agreement rule:** msyn-imp-nom-acc

Outcommented...

## Predicative

### Acc > Nom in predicative

**Agreement rule:** msyn-pred-acc-nom *Taah láá čielgâ aašijd/ááših.*

**Agreement rule:** msyn-pred-acc-nom *Lii-uv toos synonymáid/synonym*

**Agreement rule:** msyn-pred-acc-nom as previous but -2 leđe

**Agreement rule:** msyn-pred-acc-nom as previous but -3 leđe

**Agreement rule:** msyn-pred-acc-nom complements of leđe should be Nom. As previous but -4 leđe

**Agreement rule:** msyn-pred-ill-nom *Lii-uv toos synonymijd/synonym*

### Agreement error with predicative

The challenge is to avoid cases where the A is not part of the NP, like:
- how **hard nature** is, 
- that part is *sensitive wind.ILL* (sensitive to the wind)

**Agreement rule:** msyn-predagr-pl3-sg3 *Iä/Ij lah toorjâ.*

**Agreement rule:** msyn-adj-pred-attr Plural adjectives should be Attr in front of N.

**Agreement rule:** msyn-adj-attr-other

**Agreement rule:** msyn-adj-attr-pred *Tot lii hirmâd*

**Agreement rule:** msyn-adj-attr-pred *Mun lam fiskis/fiskâd.*

## Adverbial rules

These rules target adverbial cases, many of them the acc-ill lookalike *-âid/-áid*.

### Adverbial case errors

#### Acc > Ill

**Agreement rule:** msyn-obj-acc-ill

**Agreement rule:** msyn-obj-acc-ill *Ideologia kuáská kielâid/kieláid.*

**Agreement rule:** msyn-obj-acc-ill *Ideologia kuáská kielâid/kieláid.*

**Agreement rule:** msyn-obj-acc-ill

**Agreement rule:** msyn-obj-acc-ill

**Agreement rule:** msyn-obj-acc-ill

#### PlLoc > SgCom

#### PlLoc > SgIll

#### PlGen > SgIll

#### Ess > SgIll

### Postposition internal case errors

**Agreement rule:** msyn-po-nom-gen

**Agreement rule:** msyn-po-nom-gen

**Agreement rule:** msyn-po-placc-plgen *Vuoigâdvuotä nubástittiđ kielâ jieijâs táárbuid/táárbui mield.*

### Valency errors

## Lexical rules

**Realword error rule:** real-pisso-pissood

**Realword error rule:** real-pele-peeli

**Realword error rule:** real-keesi-keessiv 

**Realword error rule:** real-keessiv-keesi 

## Easteregg rule

## Word order rules

**Syntax rule:** syn-OVS-OSV

The grammarchecker file ends here.

## AFTER-SECTIONS

SUBSTITUTE MWE (*)

* * *
<small>This (part of) documentation was generated from [tools/grammarcheckers/grammarchecker-release.cg3](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/grammarchecker-release.cg3)</small>
I N A R I    S A A M I    G R A M M A R    C H E C K E R
==================================================================

# Development setup

Compiling the grammarchecker:

```
cd $GTLANGS/lang-smn
./autogen.sh
./configure --with-hfst --enable-syntax --enable-grammarchecker --enable-tokenisers --enable-alignment --enable-reversed-intersect
make
cd tools/grammarcheckers
make dev
```

Then edit/test as follows:

```
echo "Sun ij puátá." | sh modes/smngram.mode
echo "Sun ij puátá." | sh modes/smngram-release.mode
```

There are very many modes in the `modes` folder, look at them.
If you use emacs and have cg-mode installed, you may run analysis with C-c C-i / C-c C-c
See also [the documentation on grammarchecker testing](https://giellalt.github.io/proof/gramcheck/doc/grammarchecker_testing.html)

# Delimiters, tags and sets

Sentence delimiters are the following: <.> <!> <?> <...> <¶>

## Tags and sets

This section lists all the tags inherited from the fst, and used as tags
in the syntactic analysis. The next section, **Sets**, contains sets defined
on the basis of the tags listed here, those set names are not visible in the output.

### Beginning / end of sentence
BOS
EOS

### Parts of speech

-
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

-
ABBR
ACR
WEB
CLB
LEFT
RIGHT
PPUNCT
PUNCT
COMMA
EXCLMARK
¶
?
MWE
Cmp, but two-word muotâsaanijd seems like an error

### POS sub-categories

-
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
Rom

### Morphosyntactic properties

Nom
Acc
Gen
Ill
Loc
Com
Ess
Ess
Ess
Sg
Du
Pl
Cmp/SplitR
Cmp/SgNom
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
Px (= set of all Px)

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

### Clitic particles

Foc/ge
Foc/gen
Foc/gin
Foc/ges
Foc/gis
Foc/naj
Foc/ba
Foc/be
Foc/hal
Foc/han
Foc/bat
Foc/son

### Derivation 

Der/Pass
Der/NomAg
Actor (= NomAg and Der/NomAg)
Der/alla
Der/d
Der/Car
Der/Caus
Der/lasj
Der/NomAct
Der/st
Der/upmi
Der/vuota
Der/InchL
Der/Dimin
Der/Aadv
Der/Comp
Der/Superl

- LIST DER-A-ADV = (Der/lasj Der/AAdv Adv) ;  ;
- SET NOT-DER-A-ADV = Adv - DER-A-ADV ; 

### Error tags

- All Err/Orth tags
- Err/Orth-spes for all Err/Orth save the simple one

### Secondary tags

- vdic
- spelling error
- adjectives with homonymous attributive and predicative forms

### Semtags

- HUMAN
- Sem/Act
- Sem/Ani
- Sem/Atr
- Sem/Body
- Sem/Clth
- Der/Date
- Sem/Domain
- Sem/Feat-phys
- Sem/Fem
- Sem/Group
- Sem/Hum
- Sem/ID
- Sem/Lang
- Sem/Mal
- Sem/Measr
- Sem/Measr_Time
- Sem/Money
- Sem/Obj
- Sem/Obj-el
- Sem/Org
- Sem/Par
- Sem/Perc-emo
- Sem/Plc
- Sem/Sign
- Sem/State-sick
- Sem/Sur
- Sem/Time
- Sem/Time
- Sem/Txt
- Der/Year

This ends the semtag list.

PROP-ATTR
PROP-SUR

TIME-N-SET
NOT-TIME
TIME-N

### Valency tags
See also the valency file in src/cg3

### Syntactic tags

- @+FAUXV
- @+FMAINV
- @-FAUXV
- @-FMAINV
- @-FSUBJ>
- @-F<OBJ
- @-FOBJ>
- @-FSPRED<OBJ
- @-F<ADVL
- @-FADVL>
- @-F<SPRED
- @-F<OPRED
- @-FSPRED>
- @-FOPRED>
- FOBJ
- FMAINV
- FAUXV
- @>ADVL
- @ADVL<
- @<ADVL
- @ADVL>
- @ADVL
- @HAB>
- @<HAB
- @HAB
- @>N
- @Interj
- @N<
- @>A
- @P<
- @>P
- @HNOUN
- @INTERJ
- @>Num
- @Pron<
- @>Pron
- @Num<
- @OBJ
- @<OBJ
- @OBJ>
- @OPRED
- @<OPRED
- @OPRED>
- @PCLE
- @COMP-CS<
- @SPRED
- @<SPRED
- @SPRED>
- @SUBJ
- @<SUBJ
- @SUBJ>
- SUBJ = all subjtags
- SPRED etc.
- OPRED
- @PPRED
- @APP
- @APP-N<
- @APP-Pron<
- @APP>Pron
- @APP-Num<
- @APP-ADVL<
- @VOC
- @CVP
- @CNP
- OBJ
- <OBJ
- OBJ>
-  <OBJ-OTHERS
- OBJ>-OTHERS
- NOT-FAUXV = FMAINV OR OBJ + V OR ADVL + V

The following work after the mapping rules for verbs:

- SYN-V
- @X (this last one for unassigned functions)

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

- LIST ACCILL = Acc Ill ; 
- LIST ADVLCASE = Ill Loc Com Ess ;  
- LIST CASE-HALFAGREEMENT = Ill (Sg Loc) (Pl Com) Ess ;   
- LIST CASE-AGREEMENT = Nom Acc Gen (Pl Ill) Loc Com Ess ;   
- LIST CASE = Nom Acc Gen Ill Loc Com Ess ;  
- SET NOT-NOM = CASE - Nom ;  
- SET NOT-GEN = CASE - Gen ;  
- SET NOT-ACC = CASE - Acc ;  

### Verb sets

- SET NOT-V = WORD - V ;  
- SET REAL-NEG = Neg - Sup ;  
- SET MOOD-V = Ind OR Pot OR Imprt OR Cond OR (Neg Sup) ;  
- LIST GC = ("gč") ;  
- SET VFIN = GC OR MOOD-V - ConNeg ;  
- SET VFIN-POS = MOOD-V - ConNeg - Neg ;  
- SET VFIN-NOT-IMPRT = VFIN - Imprt ;  
- SET VFIN-NOT-NEG = VFIN - Neg ;  
- SET NOT-PRFPRC = WORD - PrfPrc ;  

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

- LIST PERNUM = Sg1 Sg2 Sg3 Du1 Du2 Du3 Pl1 Pl2 Pl3 ;  

### Finite verb sets

SG-V, DU-V, PL-V,
DU-PL-V
1-2-V
VNOTSG1 (for all other persons than Sg1), VNOTSG2, ...

No one so far

z### Copula sets 

(these ones need to be rewritten)

LEDE, LEAN, LEAT, ...

### QUASI-TV
Mun vuolgim raapâid pajas. Verb accepts accusative in front of adverb.

### Pronoun sets

MUN, DON, SON, MOAI, ...

### Adjective sets

LEX-A, A-CASE, ...

- SET LEX-A = A - DER-A ;  

- SET A-CASE = A - Attr - Adv ;  

- LIST A-CC = A CC ;  

- SET NOT-A = WORD - A ;   This is former NOT-ADJ
- SET NOT-A-COMMA = WORD - A - COMMA ;  
- SET NOT-A-COMMA-CC = WORD - A - COMMA - CC ;  
- SET NOT-Attr = WORD - Attr ;  
- SET NOT-A-PCLE = WORD - A - Pcle ;  
- SET NOT-A-CC = WORD - A-CC ;  

- LIST ATTRONLY = "anarâškiel" "eeđâb" "fakkâ" "fastâ" "hirmâd" "huámášekkis" "hyperkorrekt" "korrekt" "läättinkiel" "nuorttâkiel" "nuuvtkočodum" "ohtuunis" "olmâ" "oovdiš" "oovtâkiel" "orjâlâškiel" "pajekiel" "prelimináár" "puigâ" "ruotâkiel" "ruoŧâkiel" "sämikiel" "sierâ" "suomâkiel" "tiätu" "tommittáá" "ubâ" "váháš" "vuáđusämikiel" "vuoigâ" ;  

This set was removed, for a good reason?
- SET NOT-A-ADV = WORD - A - Adv OR ("meid") ;  

- LIST CONCORD-A = "maggaar" "pyeri" "siämmáš" "taggaar" "tyeggáár" "tieggáár" (".*lágán"r) (".*láš"r) (".*lááš"r) (".*lâš"r) (".*laš"r) (".*sâš"r) (".*vâš"r) (".*muš"r) Der/lasj ;  = this is the set for adj agreeing with N.

### Adverbial sets

LEX-ADV, LEX-ADV-DE, ...

### Coordinator sets

Foc, NEGFOC, ...

### Adverbs that have lookalikes

Here come some adverbs that have identical twins in other POS.
If these are found in Adv contexts, we treat them as adverbs.

LACCAT-ADV

MOD-NP-ADV

MOD-ADV-ADV

EASKKA

### Sets of elements with common syntactic behaviour

### Verb sets

V is all readings with a V tag in them, REAL-V should
be the ones without an N tag following the V.
The REAL-V set thus awaits a fix to the preprocess V ... N bug.

- The set COPULAS is for predicative constructions

TRANS-V is the set for verbs really taking objects

- Sets for verbs choosing oblique objects or adverbials
- **STVLIST** is the list of strictly transitive verbs. In the rules, refer not to STVLIST, but to the set STV defined below.

STRICT-TRANS-V is the set for verbs which don't let a GenAcc be a modifier of anything else than an object, e.g. Mun organiseren eatni gievkkanis. - eatni wants to be the object

- LIST COM-V = "algâttiđ" "älgiđ" "arvâlâddâđ" "viärdádâllâđ" "pártáskiđ" "piergiittâllâđ" "piergiđ" "pallâđ" "čuákkimistiđ" "teivâđ" "tevdiđ" "tigáštâllâđ" "tuárruđ" "sierâdiđ" "elettiđ" "flirttađ" "gávnnadit" "kárvuttiđ" "váivášuđ" "kištottâllâđ" "gulahallat" "gulaskuddat" "hilbošit" "juátkiđ" "jyehiđ" "lattiđ" "leakkastallat" "lohpádaddat" "lohpádallat" "lonottiđ" "molsođ" "naaijâđ" "oktiibidjat" "uápásmiđ" "ovttasbargat" "ovttastahttit" "ruhnođ" "reivvestaddat" "rijdâliđ" "rijdáskiđ" "rohcošit" "sárnuđ" "siävuttiđ" "servuustâllâđ" "sovâttâllâđ" "soottâđ" "sierâdiđ" "šietâdiđ" "sooppâđ" "išediđ" "verdidiđ" "vijđediđ" "vrd" ; 

- LIST ILL-V = "aibâšiđ" "asâiduđ" "pokkiđ" "peessâđ" "čokánistiđ" "čujottiđ" ("čuoppâđ" Ex/V Ex/TV Der/Pass) "vaikuttiđ" "turvâstiđ" "tuuttâđ" "kuoskâđ" "hárjániđ" "irgediđ" "irgástallat" ("juáhuđ" Ex/V Der/Pass V) "juohhuđ" ("jyehiđ" Ex/V Ex/TV Der/Pass) "lijkkuđ" "lyettiđ"  "vyelgiđ" "maccâđ" "mieđettiđ" "miettâđ" "moonnâđ" "njeeijâđ" "enittiđ" "oskođ" "peessâđ" "riemmâđ" "valmiđ" "uásálistiđ" "uápásmuđ" "suttâđ" "vaikuttiđ" "västidiđ" "vyelgiđ" "vaiguttiđ" "vuáđuduđ" ; 

- LIST TRANSL-V = "jápmit" "duššat" "hávkat" "náitalit" "gaskkalduvvat" "nohkat" "goarránit" "heahpanit" "boakčánit" "šlundut" "ráigánit" "vuollánit" "gopmánit" "fuotnánit" "roahppánit" "reakčanit" "bieđganit" "luoddanit" "guvggodit" "liegganit" "suorganit" "báhkkanit" "cuovkanit" "hedjonit" "lohppet" "goikat" "galbmot" "goallut" "ruostut" "buoidut" "guvggodit" "suvrut" "suddâdiđ" ; 

- LIST REKS-V = "áibbašit" "teivâđ" "dorvvastit" "tuuttâđ" "käyttää" "hárjániđ" "oskođ" "lijkkuđ" "mieđettiđ" "enittiđ" "valmiđ" "käydä" "searvat" "vyelgiđ" "beroštit" "kieldiđ" "bihtit" "ceavzit" "dinet" "tulkkâđ" "eastadallat" "eastadit" "huolâttiđ" "fuollat" "geargat" "lakkađ" "luohpat" "oassálastit" "váikkuhit" "váruhit" ; 

- LIST ACC-LOC-V = "kieldiđ" "čuávvuđ" "earuhit" "kieldiđ" "jtak" ; 

- LIST ACC-ILL-V = "addit" "bidjat" "merhâšiđ"; 

- LIST MIELDE-V = "addit" "bidjat" "täiđiđ" "leđe" "uástiđ" "uážžuđ" "väldiđ" ; 

- LIST TIME-ADVL-V = "áhásiđ" "ássat" "porgâđ" "ajasta" "anoa" "eelliđ" "fievridiđ" "guohtut" "joatkit" "láddet" "máttááttiđ" "peividiđ" ; 

- LIST TIMEOBJECT-V = "addit" "kevttiđ" "arvâlâddâđ" "bálvalit" "čuávvuđ" "tevdiđ" "diŋgot" "iävtuttiđ" "fátmmastit" "vaattâđ" "kavnâđ" "kevttiđ" "ajasta" "guhkidit" "hábmet" "tekstiä" "juolludit" "lasettiđ" "liigudit" "loahpahit" "loaktit" "markeret" "meridiđ" "molsut" "oanidit" "uážžuđ" "käydä" "šiehttat" "várret" "vijđediđ" ; 

- LIST DURATION-V = "áhásiđ" "porgâđ" "ajasta" "čuoigâđ" "eelliđ" "gollat" "guohtut" "leđe" "väzziđ"; 

- LIST POINT-IN-TIME-V = "árrit" "orostittiđ" "estiđ" "cakkadit" "cakkastallat" "lijkkuđ" "doallat" "duostut" "dustet" "eastadit" "kieldiđ" "goahcat" "heađuštit" "estiđ" ; 

- LIST ROUTE-ADVL-V = "puáttiđ" "čuoigâđ" ; 

- LIST ROUTEOBJECT-V = "ásahit" "bidjat" "botnjat" "basuhit" "pyerediđ" "čielgâsmittiđ" "čuovvulit" "čielgiđ" "čuárvuđ" "čurvet" "dieđihit" "lujittaa" "duorggastit" "kevttiđ" "geahpedit" "geahpidit" "gudnejahttit" "tutkâđ" "kieđâvuššâđ" "kyeđđiđ" "gilljut" "heahtit" "čuárvuđ" "huikkádit" "juoigâđ" "lávluđ" "luuhâđ" "loahpahit" "meridiđ" "máidnut" "lujittaa" "njulget" "máttááttiđ" "toohâđ" "sivdnidit" "tutkâđ" "kepidiđ" "válmmaštit" "vurket" ; 

- LIST HAB-V = "puáttiđ" "leđe" "goallut" "sorjođ" "jápmit" "šoddâđ" ; 

### Valency sets

- LIST INF-V = "enittiđ" "áhásiđ" "áiguđ" "älgiđ" "asâttiđ" "paggiđ" "povčâstiđ" "peessâđ" "lijkkuđ" "anoa" "pallâđ" "puáttiđ" "koččođ" "čokkáđ" "čokánistiđ" "čokániđ" "pisániđ" "čuožâstiđ" "čuárvuđ" "čurggodit" ("ettâđ" Der/Pass) "tovâttiđ" "táttuđ" "täiđiđ" "tarbâšiđ" "miäruštâllâđ" "suovvâđ" "tuáivuđ" "huáputtiđ" "oskeldâttâđ" "ferttiđ" "huámášiđ" "huolâttiđ" "kolgâđ" "pyehtiđ" "vaattâđ" "gárrut" "karttâđ" "iskâđ" "kiergâniđ" "kennigâttiđ" "vaijeeđ" "koččođ" "happiittiđ" "halijdiđ" "hárjániđ" "laaviđ" "lijkkuđ" "morániđ" "vyelgiđ" "mättiđ" "movttiidittiđ" "mušteđ" "vaijeeđ" "nabdeđ" "máttááttiđ" "uápásmiđ" "máttáđ" "uážžuđ" "enittiđ" "riemmâđ" "sättiđ" "seahtit" "áánnuđ" "sättiđ" "suovvâđ" "šoddâđ" "maaššâđ" "vaijeeđ" "vyelgiđ" "vuálániđ" "vyerdiđ"; 

- LIST ACC-INF-V = "anoa" "čuárvuđ" "tovâttiđ" "suovvâđ" "koččođ" "movttiidahttit" "anoa" "suovvat" ; 

- LIST OPRED-V = "alidit" "kevttiđ" "algâttiđ" "ásahit" "porgâđ" "bidjat" "ceavzit" "ettâđ" "dahkaluddat" "toohâđ" "lijkkuđ" "tubdâđ" "dulkot" "karttâđ" "kevttiđ" "keččâđ" "käskeä" "koččođ" "kvalifiseret" "málet" "meroštallat" "navdit" "uáiniđ" "merhâšiđ" "visásmittiđ" "väldiđ" "valjiđ" "rábmot" "vihahit" ; 

- LIST OKTII-V = ("puállu" Der/huvva) "goallostit" "nuhostiđ" "bidjat" "kiinni" "suddâdiđ" "käydä" "bidjat" "iskeä" "keessiv" "kuullâđ" "rehkenastit" "ordnet" "käydä" "gávnnadit" "heivehit" "toimâđ" "keččâliđ" "jhkin" "seaguhit" "sorrot" ; 

- LIST VGEN-V-TRIGGER = "peessâđ" "bidjat" "bijadit" "anoa" "puáttiđ" "pyehtiđ" "čuággiđ" "čuávvuđ" "pyehtiđ" "duolmmadit" "uážžuđ" "heiviđ" "kolgâđ" "girdit" "gálašit" "kavnâđ" "goastit" "kuáđuttiđ" "gurgalit" "gárgidit" "jávkkihit" "joatkit" "reissiđ" "jorgut" "loahpahit" "vyelgiđ" "mátkkoštit" "njahkalit"  "njoammut" "oasálastit" "rasttildit" "kaksijalkaisista" "sihkkelastit" "váccašit" "vájuldit" "vánddardit" "viekkimpiergâs" "viehkalit" "viežžat" "vyeijiđ" "vyelgiđ" ; 

- LIST SOURCE-V = "vaattâđ" ; 

- LIST MOVEMENT-V = "ádjit" "peessâđ" "puáttiđ" "čuoigâđ" "čuoiggadit" "fárret" "finadit" "finihit" "heiviđ" "gálašit" "gállit" "girdit" "johttát" "reissiđ" "jorahallat" "vyelgiđ" "mátkkoštit" "njoammut" "njuiket" "enittiđ" "riidet" "kaksijalkaisista" "sáhtostit" "sihkkelastit" "soabbulit" "soabbut" "šloahtat" "váccašit" "vádjolit" "vájaldit" "vájuldit" "vánddardit" "väzziđ" "viehkalit" "viekkimpiergâs" "viežžat" "vuodjalit" "vuoijâđ" "vyeijiđ" "vuojadit" "vuojâččiđ" "vyelgiđ" ; 

- LIST JOHTIT = "čuoigâđ" "čuoiggadit" "gálašit" "gállit" "girdit" "johttát" "reissiđ" "mátkkoštit" "njoammut" "riidet" "kaksijalkaisista" "sihkkelastit" "soabbulit" "soabbut" "šloahtat" "váccašit" "vádjolit" "vájaldit" "vájuldit" "vánddardit" "väzziđ" "viehkalit" "viekkimpiergâs" "vuodjalit" "vuoijâđ" "vyeijiđ" "vuojadit" "vuojâččiđ" ; 

- LIST HUMAN-ACTIVITY-V = "äštiđ" "enittiđ" "hammiđ" "herviđ" "hoittáđ" "huksiđ" "huškođ" "išediđ" "juksâđ" "juuhâđ" "jyehiđ" "jyehiđ" "kárvudâttâđ" "kästiđ" "kavkkâđ" "keččâđ" "koddeđ" "koččođ" "kuálástiđ" "kuárruđ" "kuldâliđ" "kuškâdiđ" "lahtâdiđ" "lehâstiđ" "liäibuđ" "luávdiđ" "luoddiđ" "máttááttiđ" "merkkiđ" "mittediđ" "naaijâđ" "nijtteđ" "njuoskâdiđ" "pääččiđ" "passeeđ" "piäluštiđ" "piäluštiđ" "pieijâđ" "piemmâđ" "puáldiđ" "puovtâdiđ" "putestiđ" "pyehtiđ" "registeeriđ" "sáhháđ" "salttiđ" "sárguđ" "sárguđ" "sárnuđ" "sikkođ" "suáittiđ" "suáittiđ" "terppâđ" "tevdiđ" "tiervâttiđ" "toimâđ" "toohâđ" "tuáijuđ" "tubdâstiđ" "tuommiđ" "uástiđ" "uigâđ" "uuccâđ" "vipšâđ" "vooijâđ" "vuástáväldiđ" "vuáđudiđ" "vuoidâđ" "vuolgâttiđ" "vuorkkiđ" "vuoššâđ" "vyebdiđ" "vyeittiđ" "čäälliđ" "čäittiđ" "čuággiđ" "čuávdiđ" "čuoggiđ" "čuoppâđ" ;  

- LIST BODY-ACTIVITY-V = "purrâđ" "čiekčat" "čujuhit" "čuorbmat" "kuullâđ" "jhk" "jorahit" "lihkahit" "lihkastahttit" "luptiđ" "njávkkadit" "njávkkastit" "uáiniđ" "seavvit" ; 

- LIST PLACING-ACTIVITY-V = "bidjat" "buonjostit" ; 

- LIST WRITING-ACTIVITY-V = "čäälliđ" ; 

- LIST HANDICRAFT-ACTIVITY-V = "buddet" "botnit" "kuárruđ" "hervet" "vadjat" "vikšet" ; 

- LIST DADJAT = "naggiđ" "ettâđ" "luuhâđ" "muštâliđ" ; 

- LIST HUPMAT = "mainâšiđ" "merhâšiđ" "njurgođ" "sámástiđ" "särnidiđ" "sárnuđ" "sárnuđ" "sárnuđ" "savâstâllâđ" "savâstâllâđ" "savâstâllâđ" "savâstiđ" "sovkkâliđ" "suomâstiđ" "tigáštâllâđ" "tuoldâđ" "šuáláđ" ;  

- LIST VERBAL-ACTIVITY = "arvâlâddâđ" "celkkiđ" "čielgiđ" "naggiđ" "basuhit" "bealkit" "cuoigut" "čuárvuđ" "čurvet" "ettâđ" "deattastit" "gielistit" "gilljut" "gopmulit" "háladit" "háleštit" "hállat" "hoallat" "čuárvuđ" "huikkádit" "jtak" "juoigâđ" "kommenteret" "lávluđ" "luuhâđ" "muštâliđ" "kutsua" "kutsua" "ravviđ" "sivdnidit" "váruhit" "västidiđ" ; 

- LIST HUMAN-AGENT-V = "áŋgiruššat" "ásahit" "beahttit" "pyerediđ" "čielgâsmittiđ" "čuovvulit" "dássidit" "deattastit" "tiäduttiđ" "dieđihit" "tievvâđ" "lujittaa" "geahpedit" "geahpidit" "gudnejahttit" "tutkâđ" "illudit" "lassánit" "liekkadallat" "loahpahit" "luohpat" "meridiđ" "moivašuhttit" "kutsua" "lujittaa" "oassálastit" "tutkâđ" "kepidiđ" "váikkuhit" "válmmaštit" "verrošit" "vurket" ; 

- LIST NOT-HUMAN-OBJECT-V = "porgâđ" "purrâđ" "čäälliđ" "luuhâđ" "vyeijiđ" ; 

- LIST USUALLY-IV =  "boradit" ; 

- LIST INTELLECTUAL-ACTIVITY-V = "tubdâđ" "huámášiđ" "huámášiđ" "huobmát" "jurddahit" "jurddašit" "smiehttat" ; 

- LIST VEHICLE-PLACE-V = "addit" "bearrat" "gaikkihit" "vaattâđ" "geiget" "uástiđ" "uážžuđ" "suoládit" "väldiđ"  ; 

- LIST VEHICLE-TOOL-V = "peessâđ" "puáttiđ" "pyehtiđ" "pyehtiđ" "fievridiđ" "vuolggahit" ; 

- LIST ABSTR-ENTITY-COM-V = "investeret" "lihkosmuvvat" "lihkostuvvat" "lihkustuvvat" "ruttâdiđ"; 

- LIST ONLY-PLACE-LOC-V = "algâttiđ" "bártidit" "porgâđ" "čokánistiđ" "toohâđ" "iskâđ" "olahit" "veahkehit" ; 

- LIST HUMAN-LOC-V = "kevttiđ" "pääcciđ" "kevttiđ" "käskeä" "kutsua" ; 

- **PLACE-V** Those get only not locative if the target is a member TOOL, ABSTR-TOOL or ANIMATE or CONCEPT. Selects more locatives than ONLY-PLACE-LOC-V
- LIST PLACE-V = "ássat" "buolvvastallat" "buolvvastit" "čippostallat" "čokkáđ" "čohkahit" "čuážžuđ" "čuččodit" "morihit" "gullát" "morránit" "orroođ" "orodit" "stuorrut" "veallát" "veallahit" ; 

- LIST ABSTR-PLACE-V = "váilut" "käydä" "hiehpat" "siskeldiđ" "käydä" "šiehttat"; 

- LIST STATE-V = "eelliđ" ; 

- LIST REM-WITH-PARTS = "gaikkihit" ; 

- LIST PERCEPTION-V = "áicat" "tubdâđ" "ealvit" "huámášiđ" "huámášiđ" "kuullâđ" "haksit" "huobmát" "huomihit" "uáiniđ" ; 

- LIST ILLNESS-V = "buohcat" "buohccát" ;  

- LIST ADV-PX-V = "keččâđ" ; 

- LIST MUITALIT = "arvâlâddâđ" "anoa" "boagustit" "celkkiđ" "cuoigut" "čielgiđ" "čurvet" "čuárvuđ" "ettâđ" "dahkaluddat" "deattastit" "tiäduttiđ" "tuáivuđ" "epidiđ" "geardduhit" "geažuhit" "gielistit" "gilljut" "hállat" "hoallat" "čuárvuđ" "huikkádit" "imaštallat" "jtak" "jievžat" "juoigâđ" "jurdilit" "jurddašit" "kommenteret" "lávluđ" "lasettiđ" "loahpahit" "luuhâđ" "lopediđ" "máidnut" "máinnašit" "muštâliđ" "unohtamisen" "nágget" "njávggádit" "merhâšiđ" "ravviđ" "savkalit" "sárdnidit" "šuohkihit" "váidalit" "váruhit" "västidiđ" ; 

- LIST LEXICALISED-PASS-V = "kevttuđ" ; 

### Adverb sets

### Adjective sets

Lexical valency sets for adjectives.
here we have adjectives according to their semantic properties

- LIST DEHALAS = "táválâš" "dehálaš" "tehálâš" "mearkkašahtti" "epitáválâš" "máhđulâš" "suohtas" ; 

Other adjective sets

A-N, A-N-CASE, ...
- LIST A-N = "buoidi" "čeppi" "headju" "heittot" "jalla" "neavri" "nuorâ" "oahpis" "oarbbis" "räähis" "riges" "váivváš" "vuoras"; 

- LIST GRADE-A = "fávru" "headju"; 

- LIST A-LEX-AS-NOUN = "adj." "kuávdáš" "nuorâ" "oahpis" "váivi" "uáinojeijee"; 

- LIST TIME-A = "čuávuvâš" "čuávuvâš" "maŋit" "majemuš" "ovdebáš" "moonnâm" "puáttee" "ittáš" "tot" "taat" "tiet" "tuot" ("vyelgiđ" PrfPrc) ("vássit" PrfPrc)   ;  

- LIST DURATION-A = "heila" "eanas" "eenâb" "geažo" "geažos" "guhkki" "obba" "melgâd" "stuárudâh" "oles" "puoh" ; 

- LIST POINT-IN-TIME-SPEC = "toovláš" "eres" "iežá" "nubbe" ; 

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

Nominal sets defined morphophonologically
Sets for lexeme homonymy (most of them are moved to where the actual rules are.)

The words in the set **N-PO** can be both N and Po, the set takes that into account.

Nouns that have dangerous homonyms

### Nominal sets defined semantically

- Spatial noun sets. These nouns behave like postpositions

- Time sets

- Amount sets

OKTA

- Sets for nouns with morpho-syntactic preferences

- Number-related sets

- Sets for case, possessive, etc.

- Sets for nouns as pred

- LIST FAMILY-ONLY-HUMAN = (Prop Sem/Mal) (Prop Sem/Fem) (Prop Sem/Sur) "isoisälle" "kaavâ" "isoisälle" "bárdnemánná" "käälis" "čeahci" "čeahcit" "eemeed" "eahki" "kaavâ" "kaavâ" "iänui" "goaski" "pelikyeimi" "isän" "irgi" "käälis" "alge" "isoisälle" "manje" "isää" "madâräijih" "máttaráhkku" "moarsi" "muoŧŧá" "muoŧŧal" "náittosguoibmi" "neahpi" "uábbi" "oabbábealle" "miespuolinen" "oappáš" "oarpmealle" "osku#guoibmi" "ristváhnen" (".*sássa"r) "siessal" "siessá" "vieljaš" "viljâ" "vielljabealle" "vilbealle" "vuohppa" "vuonáhkku" "vyene" ; 

- LIST FAMILY-ALSO-ABSTRACT = "eeči" "áddjá" "áhkku" "peerâ" "enni" "oapmahaš" "sohka" "sohkagoddi" "váhnen" "veahka" ; 

- LIST NON-FAMILY = "alge" "algaaš" "divššohas" "alge" (".*guoibmi"r) "vierailija" "naabur" "lagamuš" (".*mánná"r) "mánáš" (".*nieida"r) "nieidâš" (".*nisson"r) (".*nisu"r) "nuorâ" "oskkuviellja" "ustev" (".*olmmoš"r) "naabur" "roppâ" "sámenuorra" "sämmilâš" "skippáár" "ustev" "smávvagánda" (".*ustit"r) "skippáár" "viijses" ; 

- LIST HUMAN-LIKE = "beahtu" "beargalat" "eŋgel" "háldi" "hearrá" "immeel" "stállu" "suodjalus#eŋgel" "ulda" ; 

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

*These were the set types.*

## Grammarchecker sets

name convention for error tags: ´´&errortype-errorsubtype-is-shouldbe´´

 

 

 

# RULE SECTION

- Example marking: Wrong = #%
- Example marking: Correct = #$
- Example marking: Finnish = #f

**Speller suggestions rule** ADD @typo - make sure the suggestions survive the cg mangling:

## Singleton words

**Speller suggestions rule** &real-love-lope

## Noun phrase internal phenomena

### Demonstratives

**Agreement rule:** `msyn-dem-locattr-gen`

### Noun phrase possessor

**Agreement rule:** `msyn-posspl-acc-gen`. *Siijđoid/Siijđoi lehâstem tábáhtuvá itten.*

**Agreement rule:** msyn-posspl-acc-gen. coordination: *uásálistiđ párnáid/párnái já nuorâi leiráid*

**Agreement rule:** msyn-posspl-acc-gen. coordination: *uásálistiđ párnáid/párnái já nuorâi leiráid*

### Noun phrase complements

N + Ill

**Agreement rule:** msyn-posspl-ill-gen: *uásálistiđ párnáid/párnái leiráid stuorrâhâžžân.*

**Agreement rule:** msyn-ncompl-ess-sgill: *Must lii tárbu toorjân/torjui.*

**Agreement rule:** msyn-ncompl-ess-sgill: *Maggaar toorjân/torjui sist ličij tárbu.*

**Agreement rule:** msyn-ncompl-placc-plill: *Motomeh suomâkielâ vaikuttâsah/tábáhtussáid tábáhtusâid láá tuhhiittum anarâškielân.*

**Agreement rule:** msyn-ncompl-placc-plill

### Double possessive rules

### Number and case agreement 

### Det + N agreement

**Agreement rule:** msyn-det-nom-acc: Puurâ tuoh/tuoid rusinijd!

Attributive forms

mii + nominative should be mii + acc

**Agreement rule:** msyn-mii-sgnom-placc: Mii historjá/historjáid taat lii

**Agreement rule:**

### Adjectives in attributive position

**Agreement rule:** msyn-adj-gen-nom (A.Gen + N.Nom)

**Agreement rule:** msyn-adj-nom-acc

### Quantors in attributive positions

**Agreement rule:** msyn-quant-nom-gen (A.Gen + N.Nom) # add Ord

### Relative pronoun in N + Rel

### Quantor phrases

#### Numeral phrases

**Agreement rule:** msyn-num-par-gen: Must láá kyehti kyellid/kyele

**Agreement rule:** msyn-num-gen-par:  8 kaandâ/kandâd

**Agreement rule:** msyn-num-acc-par: 8 kaandâ/kandâd

#### Quantor adverbs

#### Quantor adverb complementss

msyn-quant-gen-nom

## Verb agreement rules

### Indicative person agreement

#### Sg1

**Agreement rule:** `msyn-agr-sg2-sg1`, 

**Agreement rule:** msyn-agr-other-sg1, *Mun puátá/puáđám*

**Agreement rule:** msyn-agr-other-sg1

**Agreement rule:** msyn-v-prfprc-sg1, Subject to the left

**Agreement rule:** msyn-v-actio-sg1, Subject to the left

#### Sg2

**Agreement rule:** msyn-agr-other-sg2, Subject to the left, *Tun puátá/puáđah*

#### Sg3

**Agreement rule:** msyn-agr-sg1-sg3, Subject to the left, *Sun puáđam/puátá*

**Agreement rule:** msyn-agr-sg2-sg3, Subject to the left, *Sun puáđah/puátá*

**Agreement rule:** msyn-agr-imprt-sg3, Subject to the left, *Sun puáđah/puátá*

#### Du1

**Agreement rule:** msyn-agr-other-du1

#### Du2

**Agreement rule:** msyn-agr-other-du2 *Tuoi koolgâi/kolgáid tääl algâttiđ monnii sämmilâškampanja.*

#### Du3

**Agreement rule:** msyn-agr-sg3-du3

**Agreement rule:** msyn-agr-sg3-du3

#### Pl1

**Agreement rule:** msyn-agr-other-pl1, *Mij puátá/puáttip.*

#### Pl2

**Agreement rule:** syn-agr-other-pl2, *Tij puátá/puátivetteđ.*

#### Pl3

Sg3/Pl3 errors: Suomâkielâ sárnumkielâ epikongruens maaŋgâlovo 3. persovnist

**Agreement rule:** Subject to the right, msyn-agr-sg3-pl3

**Agreement rule:** msyn-agr-sg3-du3

**Agreement rule:** msyn-agr-sg3-pl3, Subject to the left, *80 puátá/puáđah*

**Agreement rule:** msyn-agr-sg3-pl3, Subject to the left, *80 puátá/puáđah*

**Agreement rule:** msyn-agr-other-pl3, Subject to the left, *Toh puátá/puátih.*

**Agreement rule:** msyn-agr-other-pl3

**Agreement rule:** msyn-agr-other-pl3

### Imperativ rules

### Infinite verbforms

#### Inf should be Actio Essive

**Agreement rule:** msyn-orrood-inf-actioess *Mun orom leđe/lemin ennuv velgus anarâškielân.*

#### ConNeg in present tense

**Agreement rule:** &msyn-negcompl-sg3-conneg

**Agreement rule:** msyn-v-sg3-conneg *Sun ij lah/lii.*

**Agreement rule:** msyn-v-du3-conneg *Noomah iä vuáđuduv/vuáđuduu.*

**Agreement rule:** msyn-v-sg3-conneg *Sun ij puávtáččij/puávtáččii vyelgiđ.*

#### ConNeg in past tense

**Agreement rule**  Negative gives participle msyn-v-sg1-prfprc

#### Sg1 should be Participle

**Agreement rule:** msyn-v-sg1-prfprc *Sun lii huunjâm/huunnjâm.*

## Existential sentences

### Verb should be plural. 

The interference comes from Finnish e-sentences, where the verb is in the singular.

**Agreement rule:** msyn-extv-sg3-pl3 *Must lii/láá uđđâ autoh.*

**Agreement rule:** msyn-extv-sg3-pl3, *Iäruh omâstemráhtusist: mieđetteijee já kieldee häämi.*

**Agreement rule:** msyn-extv-pl3-sg3 
**Agreement rule:** msyn-extv-pl3-sg3 *Liihân/Lááhân must uđđâ autoh.*
**Agreement rule:** msyn-extv-pl3-sg3 *Liihân/Lááhân must uđđâ autoh.*
**Agreement rule:** msyn-extv-pl3-sg3 *Liihân/Lááhân must uđđâ autoh.*
**Agreement rule:** msyn-extv-pl3-sg3 *Lii/Láá must uđđâ autoh.*

**Agreement rule:** msyn-extv-numeral-sg3-pl3

**Agreement rule:** msyn-extneg-sg3-pl3

**Agreement rule:** msyn-extneg-sg3-pl3

### E-sentences and habitives

**Agreement rule:** msyn-extsubj-ill-nom

**Agreement rule:** msyn-extsubj-ill-nom *Šiljoost láá poccuuh/poccuid.*

**Agreement rule:** msyn-extsubj-acc-nom

**Agreement rule:** msyn-extv-sg3-pl3

**Agreement rule:** msyn-extsubj-ill-nom

## Subjects

### Subjects gen > nom

### Finnish nessesiivi: acc > nom

**Agreement rule:** msyn-ness-acc-nom

**Agreement rule:** msyn-ness-acc-nom *Muu ličij/liččim kolgâm porgâđ taam tállán.* (???)

**Agreement rule:** msyn-ness-acc-nom *Ij-uv/Jieh-uv tuu/tun kolgâm vyelgiđ suáluikuávlun Jennyin?*

**Agreement rule:** msyn-ness-acc-nom

**Agreement rule:** msyn-ness-acc-nom *Suu/Sun koolgâi forgâ porgâđ miärádâs.*

**Agreement rule:** msyn-pass-accsubj-nomsubj: *Sämikielâlijd/Sämikielâliih nomâttâsâid kiävttojeh uccáá.*

**Agreement rule:** msyn-pass-accsubj-nomsubj *Tävirijd/Tävireh láppojii ääitist.*

**Agreement rule:** msyn-pass-accsubj-nomsubj: *Páárnán iä adeluu talkkâsijd/talkkâseh tipšopeeivi ääigi.*

### Subjects in passive: acc > nom

b) Suomâkielâ partitiiv passiivráhtusijn; sämikielâst passiiv ohtâvuođâst lii nominatiiv já verbâ maaŋgâlovvoost.

**Agreement rule:** msyn-pass-accsubj-nomsubj

**Agreement rule:** msyn-pass-accsubj-nomsubj *Sämikielâlijd nomâttâsâid iä jur kevttuu.*

**Agreement rule:** syn-top-placc-plnom *Anarâškielâlijd/Anarâškielâliih noomâid kiävttoo/kiävttojeh uccáá.*

**Agreement rule:** msyn-top-placc-plnom *tiäđuid/tiäđuh ij kavnuu.*

## Objects

### Singular objects

#### Ordinary singular objects

Hmm, no rules for this, it seems.

#### LEDE + OBJ + Th-ADJ + TV

** Object rule ** Object in unexpected post-copula position: *Onne lii kandâ/kaandâ älkkee uáiniđ*

#### Topicalised objects

**Agreement rule:**  msyn-top-nom-acc

**Agreement rule:** msyn-top-nom-acc

### Plural objects

These are often put in nominative, due to Finnish plural objects.

**Agreement rule:** msyn-plobj-nom-acc

**Agreement rule:** msyn-plobj-nom-acc

**Agreement rule:** msyn-obj-sgnom-sgacc *Mun juuvâm ain mielkki/mielhi.*

**Agreement rule:** msyn-obj-sgnom-sgacc *Mun lam ain juunâm mielkki/mielhi.*

**Agreement rule:** msyn-obj-sgnom-sgacc)

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-plobj-nom-acc *Nubeh tobdeh kuobbâreh/kuobbârijd ivneest.*

**Agreement rule:** msyn-obj-plnom-placc (6 rules) *Lam valjim taah säänih/saanijd.*

### Imperative objects

Nom should be acc in imperative

Suomâkielâ imperatiiv mieđetteijee häämist, mast objekt sajehäämmin lii maaŋgâlovo nominatiiv mut sämikielâst akkusatiiv:

**Agreement rule:** msyn-imp-nom-acc

**Agreement rule:** msyn-imp-nom-acc

Outcommented...

## Predicative

### Acc > Nom in predicative

**Agreement rule:** msyn-pred-acc-nom *Taah láá čielgâ aašijd/ááših.*

**Agreement rule:** msyn-pred-acc-nom *Lii-uv toos synonymáid/synonym*

**Agreement rule:** msyn-pred-acc-nom as previous but -2 leđe

**Agreement rule:** msyn-pred-acc-nom as previous but -3 leđe

**Agreement rule:** msyn-pred-acc-nom complements of leđe should be Nom. As previous but -4 leđe

**Agreement rule:** msyn-pred-ill-nom *Lii-uv toos synonymijd/synonym*

### Agreement error with predicative

The challenge is to avoid cases where the A is not part of the NP, like:
- how **hard nature** is, 
- that part is *sensitive wind.ILL* (sensitive to the wind)

**Agreement rule:** msyn-predagr-pl3-sg3 *Iä/Ij lah toorjâ.*

**Agreement rule:** msyn-adj-pred-attr Plural adjectives should be Attr in front of N.

**Agreement rule:** msyn-adj-attr-other

**Agreement rule:** msyn-adj-attr-pred *Tot lii hirmâd*

**Agreement rule:** msyn-adj-attr-pred *Mun lam fiskis/fiskâd.*

## Adverbial rules

These rules target adverbial cases, many of them the acc-ill lookalike *-âid/-áid*.

### Adverbial case errors

#### Acc > Ill

**Agreement rule:** msyn-obj-acc-ill

**Agreement rule:** msyn-obj-acc-ill *Ideologia kuáská kielâid/kieláid.*

**Agreement rule:** msyn-obj-acc-ill *Ideologia kuáská kielâid/kieláid.*

**Agreement rule:** msyn-obj-acc-ill

**Agreement rule:** msyn-obj-acc-ill

**Agreement rule:** msyn-obj-acc-ill

#### PlLoc > SgCom

#### PlLoc > SgIll

#### PlGen > SgIll

#### Ess > SgIll

### Postposition internal case errors

**Agreement rule:** msyn-po-nom-gen

**Agreement rule:** msyn-po-nom-gen

**Agreement rule:** msyn-po-placc-plgen *Vuoigâdvuotä nubástittiđ kielâ jieijâs táárbuid/táárbui mield.*

### Valency errors

## Lexical rules

**Realword error rule:** real-pisso-pissood

**Realword error rule:** real-pele-peeli

**Realword error rule:** real-keesi-keessiv 

**Realword error rule:** real-keessiv-keesi 

## Easteregg rule

## Word order rules

**Syntax rule:** syn-OVS-OSV

The grammarchecker file ends here.

## AFTER-SECTIONS

SUBSTITUTE MWE (*)

* * *
<small>This (part of) documentation was generated from [tools/grammarcheckers/grammarchecker.cg3](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/grammarchecker.cg3)</small>
I N A R I   S A A M I   G R A M M A R C H E C K E R   D I S A M B I G U A T O R               
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
- adjectives with homonymous attributive and predicative forms

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

- LIST CONCORD-A = "maggaar" "pyeri" "siämmáš" "taggaar" "tyeggáár" "tieggáár" (".*lágán"r) (".*láš"r) (".*lâš"r) (".*laš"r) (".*sâš"r) (".*vâš"r) (".*muš"r) Der/lasj ;  = this is the set for adj agreeing with N.

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

This is the first section. Here we put safe rules with no or minimal context.

## Removing unwanted names

## Numbers

Ruleset for numbers from sme, and adjusted.

* **SemID** Strange number is ID. (no it need not be

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

* **NotImprtN** not grc 

* **NotImprtVFIN** 

Partitive after numerals

## Lexicalised derivations

* **derN** removes DER-N if lexicalised non-essives

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

* **Aifeambbo** selects N after eambbo grc -- strange A to N.

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

* Some brave rules for removing Imprt not grc

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

* **VNotSg3When12Left** removes Sg3 if 12 Pron immediate left (r955) # remove grc

* **NegSg3BeforeFoc** selects Neg before Foc/ge or ConNeg (r959)

* **vfin** removes verb reading when the reading should be noun  

* **VDu1IfMoaiLeft** selects Du1 when "moai" left (r960)

* **VDu1IfMoaiRight** selects Du1 when "moai" right (r961)

### Pl3 - early cycle, safe rules

Select...

* **r976** SE V Pl1 if *-1 SII

* **r982** removes Prt Sg2 if Pl3 subject - 6002

* **VPl3Lookalikes** removes "verbs" like "mane" and "peri" (r984) - 274

* **VSg3Lookalikes** removes "verbs" like "skuvlii" Remove rule to make grammarchecker work.

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

* **killAllnotComp** Removes analysis which are not @COMP-CS< -- it seems this rule is not relevant in a grc context.

- *This was the kill all not Comp rule!!*

# MAPPING OF CC AND CS

Mostly we map both @CNP and @CVP, then we select @CNP, after that we remove them so @CVP remains

* **cnpCompSC** Map @CNP if @COMP-CS< or COMPAR ahte

* **cnpCompSpec** special rule because of PrfPrc = VFIN

* **CSasCNPCVP** Map some CSs both @CNP @CVP

* **CSasCVP** Map @CVP to CS

* **CCasCNPCVP** Map (@CNP @CVP) to CC

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

* **AdvManimus** 

* **AttrAdv** 

* **Cmp/SplitRA**

* **CopANom** 

* **ANom**  removes A Nom

* **AAttr**  selects A Attr remove grc

* **OrdAttr**

* **AdvN** removes Adv   

* **AAttrPunct**    

* **AttrTIME**    grc -- no logic here.

* **AAttrCoord1** coordination, first part -- grc

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

* **Wr1786xc** grc

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

### Gen modifiers inside NP 

* **GenNP1** Selects Gen for Pron Pers (modifier): if NP-BOUNDARY OR Acc (but not if the finite verb is TV) to the left and N to right 

* **GenNP2** Selects Gen for N (modifier): if CC "já" immediately to your left and accusative to your right *ja sámi jurddašanvuogi*

* **GenNP3** Selects Gen (modifier): if first one to right is Nom or Loc *Norgga oaivegávpogis*

* **GenNP4** (modifier) selects Gen -1 BOS or COMMA, 1 Nom *nissoniid bargu*

* **GenNPCo** (modifier) Selects Pron Pers Gen if Nom to the left of ja *Mun ja mu ustibat*

* **GenRefl** (modifier) selects Gen in front of a noun in accusative or nominative case *iežaset oiviliid*

* **Gen Not Acc**

* **AccAfterCC** Select accusative: if genitiv to the left, and CC "já" to the left of genitive *eamiálbmot- ja globaliserenprošeavtta koordináhtor*

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
Removed for grc (evaluate this!)

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

* **NDr2336** selects (N Sg Nom) when 1 SG3-V (grc: also Actio?)

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

* **PostVNom** Selects Nom if a singular third person verb to the left with no Nom to the left of it -- REMOVE FOR GRC

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

* **FinalComForAni** where philosophy is that you are with someone, not on someone # grc too general.

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

* **GenModifiesN** is a tentative rule to be modified ... or removed. Sukk.

## Variant lemmas

* Remove lemma2 if lemma 1  

* **cleanSemClass** cleans up if a word has more semclasses. This is just a start.

### And then we remove the verbs which didn't get any syntactic tag, in favour of verbs with syntactic tags.

* **realverbX**

* **IfonlyVerb** selects the FMAINV reading in the cohort ... to hard

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
<small>This (part of) documentation was generated from [tools/grammarcheckers/grc-disambiguator.cg3](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/grc-disambiguator.cg3)</small>

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
Der/Date
Der/Year
Der/Hum
<vdic>

Err/Orth
Err/Orth-spes

### Semantic tags

Sem/Act
Sem/Ani
Sem/Atr
Sem/Body
Sem/Clth
Sem/Domain
Sem/Feat-phys
Sem/Fem
Sem/Group
Sem/Lang
Sem/Mal
Sem/Measr
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
Sem/Txt

HUMAN

PROP-ATTR
PROP-SUR

TIME-N-SET
NOT-TIME
TIME-N

### secondary tags

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

## Sets containing sets of lists and tags

This part of the file lists a large number of sets based partly upon the tags defined above, and 
partly upon lexemes drawn from the lexicon.
See the sourcefile itself to inspect the sets, what follows here is an overview of the set types.

### Sets for Single-word sets

go, and the set INITIAL for initial letters 
go
INITIAL

### Sets for word or not

WORD
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
Typical usage: ... (*1 N BARRIER NPT-NPMOD) ...
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

* * *
<small>This (part of) documentation was generated from [tools/grammarcheckers/spellchecker.cg3](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/spellchecker.cg3)</small>Requires a recent version of HFST (3.10.0 / git revision>=3aecdbc)
Then just:
$ make
$ echo "ja, ja" | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst

Issues:
- [X] Ambiguous input
- Seems to work fine
- [X] Ambiguous multiword expessions with ambiguous tokenisation
- Seems to work – represented within lexc now; hfst-tokenise also
supports forms on the analyses now
- [X] Ambiguous multiword expessions need reorganising after CG
- The module cg-mwesplit takes wordforms from readings and turns them into
new cohorts
- [X] Unknown words
- The set-difference method only works for words without
flag diacritics (even though we should be working only on the form-side?)
and leads to binary blow-up: With only lower unknowns, we get 45M;
lower+upper gives 67M, while no unknowns gives 27M
- Fixed instead by treating empty analyses as unknown-tokens in
hfst-tokenise, and outputting unmatched strings with a prefix
- [ ] Treat input that's within superblanks as unmatched
- probably requires a change in hfst-tokenise itself
- [X] Try >1 space for ambiguous MWE's? – represented within lexc now
- [ ] Try set-difference-unknowns method with regular hfst commands?

More usage examples:
$ echo "Juos gorreválggain lea (dárbbašlaš) deavdit gáibádusa boasttu olmmoš, man mielde lahtuid." | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
$ echo "(gáfe) 'ja' ja 3. ja? ц jaja ukjend \"ukjend\"" | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
$ echo "márffibiillagáffe" | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst

Pmatch documentation:
https://kitwiki.csc.fi/twiki/bin/view/KitWiki/HfstPmatch

Apart from what's in our morphology, there are
1) unknown word-like forms, and
2) unmatched strings
We want to give 1) a match, but let 2) be treated specially by hfst-tokenise -a
TODO: Could use something like this, but built-in's don't include šžđčŋ:

Simply give an empty reading when something is unknown:
hfst-tokenise --giella-cg will treat such empty analyses as unknowns, and
remove empty analyses from other readings. Empty readings are also
legal in CG, they get a default baseform equal to the wordform, but
no tag to check, so it's safer to let hfst-tokenise handle them.

Needs hfst-tokenise to output things differently depending on the tag they get

* * *

<small>This (part of) documentation was generated from [tools/tokenisers/tokeniser-disamb-gt-desc.eighties.pmscript](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-disamb-gt-desc.eighties.pmscript)</small>

---

# Tokeniser for smn

Usage:
```
$ make
$ echo "ja, ja" | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
$ echo "Juos gorreválggain lea (dárbbašlaš) deavdit gáibádusa boasttu olmmoš, man mielde lahtuid." | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
$ echo "(gáfe) 'ja' ja 3. ja? ц jaja ukjend \"ukjend\"" | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
$ echo "márffibiillagáffe" | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
```

Pmatch documentation:
<https://github.com/hfst/hfst/wiki/HfstPmatch>

Characters which have analyses in the lexicon, but can appear without spaces
before/after, that is, with no context conditions, and adjacent to words:
* Punct contains ASCII punctuation marks
* The symbol after m-dash is soft-hyphen `U+00AD`
* The symbol following {•} is byte-order-mark / zero-width no-break space
`U+FEFF`.

Whitespace contains ASCII white space and
the List contains some unicode white space characters
* En Quad U+2000 to Zero-Width Joiner U+200d'
* Narrow No-Break Space U+202F
* Medium Mathematical Space U+205F
* Word joiner U+2060

Apart from what's in our morphology, there are
1. unknown word-like forms, and
2. unmatched strings
We want to give 1) a match, but let 2) be treated specially by
`hfst-tokenise -a`
Unknowns are made of:
* lower-case ASCII
* upper-case ASCII
* select extended latin symbols
ASCII digits
* select symbols
* Combining diacritics as individual symbols,
* various symbols from Private area (probably Microsoft),
so far:
* U+F0B7 for "x in box"

## Unknown handling
Unknowns are tagged ?? and treated specially with `hfst-tokenise`
hfst-tokenise --giella-cg will treat such empty analyses as unknowns, and
remove empty analyses from other readings. Empty readings are also
legal in CG, they get a default baseform equal to the wordform, but
no tag to check, so it's safer to let hfst-tokenise handle them.

Finally we mark as a token any sequence making up a:
* known word in context
* unknown (OOV) token in context
* sequence of word and punctuation
* URL in context

* * *

<small>This (part of) documentation was generated from [tools/tokenisers/tokeniser-disamb-gt-desc.pmscript](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-disamb-gt-desc.pmscript)</small>

---

# Grammar checker tokenisation for smn

Requires a recent version of HFST (3.10.0 / git revision>=3aecdbc)
Then just:
```
$ make
$ echo "ja, ja" | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
```

More usage examples:
```
$ echo "Juos gorreválggain lea (dárbbašlaš) deavdit gáibádusa boasttu olmmoš, man mielde lahtuid." | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
$ echo "(gáfe) 'ja' ja 3. ja? ц jaja ukjend \"ukjend\"" | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
$ echo "márffibiillagáffe" | hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
```

Pmatch documentation:
<https://github.com/hfst/hfst/wiki/HfstPmatch>

Characters which have analyses in the lexicon, but can appear without spaces
before/after, that is, with no context conditions, and adjacent to words:
* Punct contains ASCII punctuation marks
* The symbol after m-dash is soft-hyphen `U+00AD`
* The symbol following {•} is byte-order-mark / zero-width no-break space
`U+FEFF`.

Whitespace contains ASCII white space and
the List contains some unicode white space characters
* En Quad U+2000 to Zero-Width Joiner U+200d'
* Narrow No-Break Space U+202F
* Medium Mathematical Space U+205F
* Word joiner U+2060

Apart from what's in our morphology, there are
1) unknown word-like forms, and
2) unmatched strings
We want to give 1) a match, but let 2) be treated specially by hfst-tokenise -a
* select extended latin symbols
* select symbols
* various symbols from Private area (probably Microsoft),
so far:
* U+F0B7 for "x in box"

TODO: Could use something like this, but built-in's don't include šžđčŋ:

Simply give an empty reading when something is unknown:
hfst-tokenise --giella-cg will treat such empty analyses as unknowns, and
remove empty analyses from other readings. Empty readings are also
legal in CG, they get a default baseform equal to the wordform, but
no tag to check, so it's safer to let hfst-tokenise handle them.

Finally we mark as a token any sequence making up a:
* known word in context
* unknown (OOV) token in context
* sequence of word and punctuation
* URL in context

* * *

<small>This (part of) documentation was generated from [tools/tokenisers/tokeniser-gramcheck-gt-desc.pmscript](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-gramcheck-gt-desc.pmscript)</small>

---

# TTS tokenisation for smj

Requires a recent version of HFST (3.10.0 / git revision>=3aecdbc)
Then just:
```sh
make
echo "ja, ja" \
| hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
```

More usage examples:
```sh
echo "Juos gorreválggain lea (dárbbašlaš) deavdit gáibádusa \
boasttu olmmoš, man mielde lahtuid." \
| hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
echo "(gáfe) 'ja' ja 3. ja? ц jaja ukjend \"ukjend\"" \
| hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
echo "márffibiillagáffe" \
| hfst-tokenise --giella-cg tokeniser-disamb-gt-desc.pmhfst
```

Pmatch documentation:
<https://kitwiki.csc.fi/twiki/bin/view/KitWiki/HfstPmatch>

Characters which have analyses in the lexicon, but can appear without spaces
before/after, that is, with no context conditions, and adjacent to words:
* Punct contains ASCII punctuation marks
* The symbol after m-dash is soft-hyphen `U+00AD`
* The symbol following {•} is byte-order-mark / zero-width no-break space
`U+FEFF`.

Whitespace contains ASCII white space and
the List contains some unicode white space characters
* En Quad U+2000 to Zero-Width Joiner U+200d'
* Narrow No-Break Space U+202F
* Medium Mathematical Space U+205F
* Word joiner U+2060

Apart from what's in our morphology, there are
1) unknown word-like forms, and
2) unmatched strings
We want to give 1) a match, but let 2) be treated specially by hfst-tokenise -a
* select extended latin symbols
* select symbols
* various symbols from Private area (probably Microsoft),
so far:
* U+F0B7 for "x in box"

TODO: Could use something like this, but built-in's don't include šžđčŋ:

Simply give an empty reading when something is unknown:
hfst-tokenise --giella-cg will treat such empty analyses as unknowns, and
remove empty analyses from other readings. Empty readings are also
legal in CG, they get a default baseform equal to the wordform, but
no tag to check, so it's safer to let hfst-tokenise handle them.

Needs hfst-tokenise to output things differently depending on the tag they get

* * *

<small>This (part of) documentation was generated from [tools/tokenisers/tokeniser-tts-cggt-desc.pmscript](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-tts-cggt-desc.pmscript)</small>

---

