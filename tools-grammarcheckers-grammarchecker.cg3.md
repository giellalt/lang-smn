
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
```

There are very many modes in the `modes` folder, look at them.
If you use emacs and have cg-mode installed, you may run analysis with C-c C-i / C-c C-c
See also [the documentation on grammarchecker testing](https://giellalt.github.io/proof/gramcheck/doc/grammarchecker_testing.html)

# Delimiters, tags and sets

Sentence delimiters are the following: <.> <!> <?> <...> <¶>

## Tags

This section lists all the tags inherited from the fst, and used as tags
in the syntactic analysis. The next section, **Sets**, contains sets defined
on the basis of the tags listed here, those set names are not visible in the output.

### Tags declared as single-membered LISTs 

#### Beginning and end of sentence
BOS 
EOS

### Parts of speech tags

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
¶
?

### Tags for POS sub-categories

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

### Tags for clitic particles

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

### Derivation tags

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

### Semantic tags

- vdic
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

### Names

PROP-ATTR
PROP-SUR

### Time sets
TIME-N-SET
NOT-TIME
TIME-N

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

### Some subsets of the VFIN sets
SG-V, DU-V, PL-V,
DU-PL-V
1-2-V
VNOTSG1 (for all other persons than Sg1), VNOTSG2, ...

### Imperative sets

No one so far

### Sets consisting of forms of "leđe" (these ones need to be rewritten)
LEDE, LEAN, LEAT, ...

### QUASI-TV
Mun vuolgim raapâid pajas. Verb accepts accusative in front of adverb.

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

- LIST COM-V = "algâttiđ" "älgiđ" "arvâlâddâđ" "árvvohuššat" "ávkašuvvat" "bálddastahttit" "bálddalastit" "bártašuvvat" "birgehallat" "birget" "bivvat" "buohtastahttit" "čoahkkinastit" "deaivvadit" "tevdiđ" "digaštallat" "doarrut" "duhkoraddat" "elettiđ" "flirtet" "gávnnadit" "gárvodit" "giksašuvvat" "gilvalit" "gulahallat" "gulaskuddat" "hilbošit" "joatkit" "juogadit" "jyehiđ" "láhttet" "leaikkastallat" "lohpádaddat" "lohpádallat" "lonuhit" "meannudit" "malssidit" "molssodit" "náitalit" "uástiđ" "oktiibidjat" "oahpásmuvvat" "ovttasbargat" "ovttastahttit" "rahčat" "reivvestaddat" "riidalit" "riiddáskit" "rohcošit" "ságastit" "seaguhit" "servvoštallat" "servvoštaddat" "soabadit" "käydä" "soahtat" "soardit" "stálostallat" "stoahkat" "šiehtadallat" "šiehtadit" "šiehttat" "veahkehit" "veardidit" "vijđediđ" "vrd" ; 

- LIST ILL-V = "aibâšiđ" "älgiđ" "asâiduđ" "pokkiđ" "peessâđ" "čokánistiđ" "čujottiđ" ("čuoppâđ" Ex/V Ex/TV Der/Pass) "vaikuttiđ" "teivâđ" "turvâstiđ" "tuuttâđ" "kuoskâđ" "hárjániđ" "irgediđ" "irgástallat" ("juáhuđ" Ex/V Der/Pass V) "juohhuđ" ("jyehiđ" Ex/V Ex/TV Der/Pass) "oskođ" "lijkkuđ" "lyettiđ"  "vyelgiđ" "maccâđ" "mieđettiđ" "miettâđ" "njeeijâđ" "enittiđ" "oskođ" "peessâđ" "riemmâđ" "valmiđ" "uásálistiđ" "uápásmuđ" "suttâđ" "vaikuttiđ" "västidiđ" "vyelgiđ" "vaiguttiđ" "vuáđuduđ" ; 

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

- LIST INF-V = "enittiđ" "áhásiđ" "áiguđ" "älgiđ" "ásahit" "paggiđ" "povčâstiđ" "peessâđ" "lijkkuđ" "anoa" "bivvat" "ajasta" "puáttiđ" "käskeä" "čokkáđ" "čokánistiđ" "čokániđ" "pisániđ" "čuoččastit" "čuárvuđ" "čurggodit" ("ettâđ" Der/Pass) "tovâttiđ" "táttuđ" "täiđiđ" "tarbâšiđ" "miäruštâllâđ" "suovvâđ" "tuáivuđ" "hoputtaa" "oskeldâttâđ" "ferttiđ" "huámášiđ" "huolâttiđ" "kolgâđ" "vaattâđ" "gárrut" "karttâđ" "iskâđ" "geargat" "geatnegahttit" "ajasta" "vaijeeđ" "koččođ" "háhppehit" "halijdiđ" "hárjániđ" "käydä" "lávet" "lijkkuđ" "morániđ" "vyelgiđ" "mättiđ" "máššat" "movttiidahttit" "mušteđ" "nagodit" "navdit" "máttááttiđ" "oahpástuvvat" "máttáđ" "uážžuđ" "enittiđ" "laskea" "riepmat" "sättiđ" "seahtit" "anoa" "sättiđ" "suovvat" "šoddâđ" "maaššâđ" "vaijeeđ" "tekemään" "koirasta" "vuogáiduvvat" "vyelgiđ" "vuollánit" "vyerdiđ"; 

- LIST ACC-INF-V = "anoa" "čuárvuđ" "tovâttiđ" "suovvâđ" "koččođ" "movttiidahttit" "anoa" "suovvat" ; 

- LIST OPRED-V = "alidit" "kevttiđ" "algâttiđ" "ásahit" "porgâđ" "bidjat" "ceavzit" "ettâđ" "dahkaluddat" "toohâđ" "lijkkuđ" "tubdâđ" "dulkot" "karttâđ" "kevttiđ" "keččâđ" "käskeä" "koččođ" "kvalifiseret" "málet" "meroštallat" "navdit" "uáiniđ" "merhâšiđ" "visásmittiđ" "väldiđ" "valjiđ" "rábmot" "vihahit" ; 

- LIST OKTII-V = ("puállu" Der/huvva) "goallostit" "nuhostiđ" "bidjat" "kiinni" "suddâdiđ" "käydä" "bidjat" "iskeä" "keessiv" "kuullâđ" "rehkenastit" "ordnet" "käydä" "gávnnadit" "heivehit" "toimâđ" "keččâliđ" "jhkin" "seaguhit" "sorrot" ; 

- LIST VGEN-V-TRIGGER = "peessâđ" "bidjat" "bijadit" "anoa" "puáttiđ" "pyehtiđ" "čuággiđ" "čuávvuđ" "pyehtiđ" "duolmmadit" "uážžuđ" "heiviđ" "kolgâđ" "girdit" "gálašit" "kavnâđ" "goastit" "kuáđuttiđ" "gurgalit" "gárgidit" "jávkkihit" "joatkit" "reissiđ" "jorgut" "loahpahit" "vyelgiđ" "mátkkoštit" "njahkalit"  "njoammut" "oasálastit" "rasttildit" "kaksijalkaisista" "sihkkelastit" "váccašit" "vájuldit" "vánddardit" "viekkimpiergâs" "viehkalit" "viežžat" "vyeijiđ" "vyelgiđ" ; 

- LIST VGEN-V = "bassit" "bárdnat" "bealkit" "biškut" "puáttiđ" "purrâđ" "civkit" "čárvut" "čäälliđ" "čeargut" "čierrut" "čuoigâđ" "čuárvuđ" "doarggistit" "duorrat" "fáiput" "garrudit" "gállit" "uuccâđ" "geargat" "geavzut" "gievvut" "gilljut" "girdit" "kuullâđ" "kyeddiđ" "heahpanaddat" "hoigat" "holvut" "čuárvuđ" "hupmat" "jápmit" "reissiđ" "jorgut" "juoigâđ" "láddjet" "lávluđ" "luoibmat" "murdit" "njáhkat" "njoammut" "njurgut" "uáđđiđ" "oahkut" "uáiniđ" "orroođ" "reaškit" "riidet" "rohkut" "kaksijalkaisista" "ruossut" "sáđđat" "sihkkelastit" "skeaikit" "skierbmut" "soabbut" "speažžut" "suhkat" "suoibut" "šlivgut" "šloahtat" "šnjirgut" "väzziđ" "viekkimpiergâs" "vuoijâđ" "vyeijiđ" "vuohčut" "vyeittiđ" "vuoššat" ; 

- LIST SOURCE-V = "vaattâđ" ; 

- LIST MOVEMENT-V = "ádjit" "peessâđ" "puáttiđ" "čuoigâđ" "čuoiggadit" "fárret" "finadit" "finihit" "heiviđ" "gálašit" "gállit" "girdit" "johttát" "reissiđ" "jorahallat" "vyelgiđ" "mátkkoštit" "njoammut" "njuiket" "enittiđ" "riidet" "kaksijalkaisista" "sáhtostit" "sihkkelastit" "soabbulit" "soabbut" "šloahtat" "váccašit" "vádjolit" "vájaldit" "vájuldit" "vánddardit" "väzziđ" "viehkalit" "viekkimpiergâs" "viežžat" "vuodjalit" "vuoijâđ" "vyeijiđ" "vuojadit" "vuojâččiđ" "vyelgiđ" ; 

- LIST JOHTIT = "čuoigâđ" "čuoiggadit" "gálašit" "gállit" "girdit" "johttát" "reissiđ" "mátkkoštit" "njoammut" "riidet" "kaksijalkaisista" "sihkkelastit" "soabbulit" "soabbut" "šloahtat" "váccašit" "vádjolit" "vájaldit" "vájuldit" "vánddardit" "väzziđ" "viehkalit" "viekkimpiergâs" "vuodjalit" "vuoijâđ" "vyeijiđ" "vuojadit" "vuojâččiđ" ; 

- LIST HUMAN-ACTIVITY-V = "áitit" "bassit" "báhčit" "bealuštit" "beaskidit" "beastit" "bidjat" "biebmat" "anoa" "puáldiđ" "botket" "pyehtiđ" "buvttadit" "iskeä" "kiinni" "jtak" "čäälliđ" "čuággiđ" "čoavdit" "čugget" "čuoppâđ" "dearpalit" "dearpat" "dearvvahit" "tevdiđ" "devdnet" "hoivata" "tehdä" "doarrádallat" "doidit" "dolastit" "čuojahit" "dovddastit" "dubmet" "duddjot" "duvdilit" "ferdnet" "gáhkket" "gárvodit" "gásttašit" "gávkat" "keččâđ" "gilvit" "kuárruđ" "koddeđ" "kangaspuilla" "koččođ" "kuškâdiđ" "goivet" "luávdiđ" "gottihit" "guldalit" "guolástit" "hábmet" "hervet" "hoigat" "hoitát" "hukset" "huškut" "huškkohallat" "jugahit" "juuhâđ" "juksat" "juogadit" "jyehiđ" "láddjet" "láibut" "láktadit" "loaiddastit" "luddet" "merket" "mihtidit" "murret" "lujittaa" "náitalit" "njuoskadit" "máttááttiđ" "uástiđ" "uuccâđ" "olahit" "rahpat" "toohâđ" "ráidnet" "rátkit" "registreret" "rekruteret" "riŋget" "ruohkkat" "sahát" "vuolgâttiđ" "sáltet" "sárgut" "sihkkut" "siktet" "skihtardit" "skoalkalit" "tevdnet" "vadjat" "veahkehit" "vikšet" "vuáđudiđ" "vuosehit" "vuoidat" "vuoiddadit" "vyeittiđ" "vuostáiváldit" "vuoššat" "vyebdiđ" "vurket" ; 

- LIST BODY-ACTIVITY-V = "purrâđ" "čiekčat" "čujuhit" "čuorbmat" "kuullâđ" "jhk" "jorahit" "lihkahit" "lihkastahttit" "luptiđ" "njávkkadit" "njávkkastit" "uáiniđ" "seavvit" ; 

- LIST PLACING-ACTIVITY-V = "bidjat" "buonjostit" ; 

- LIST WRITING-ACTIVITY-V = "čäälliđ" ; 

- LIST HANDICRAFT-ACTIVITY-V = "buddet" "botnit" "kuárruđ" "hervet" "vadjat" "vikšet" ; 

- LIST DADJAT = "naggiđ" "ettâđ" "luuhâđ" "muštâliđ" ; 

- LIST HUPMAT = "dáikit" "dárostit" "digaštallat" "digaštit" "tuoldâđ" "háladit" "háleštit" "hállat" "hoallat" "humadit" "hupmat" "logaldallat" "máidnut" "máinnašit" "muitaladdat" "njurgut" "merhâšiđ" "savkalit" "ságastaddat" "ságastallat" "ságastit" "sámástit" "sámistit" "sárdnidit" "sárdnut" "sártnodit" "solžat" "suomastit" ; 

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

- LIST DEHALAS = "táválâš" "dehálaš" "tehálâš" "mearkkašahtti" "epitáválâš" "máhđulâš" "suohtas" ; 

### Other adjective sets
A-N, A-N-CASE, ...
- LIST A-N = "buoidi" "čeppi" "headju" "heittot" "jalla" "neavri" "nuorâ" "oahpis" "oarbbis" "räähis" "riges" "váivváš" "vuoras"; 

- LIST GRADE-A = "fávru" "headju"; 

- LIST A-LEX-AS-NOUN = "adj." "kuávdáš" "nuorâ" "oahpis" "váivi" "uáinojeijee"; 

- LIST TIME-A = "čuávuvâš" "čuávuvâš" "maŋit" "majemuš" "ovdebáš" ("vyelgiđ" PrfPrc) ("vássit" PrfPrc)   ;  

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

Nominal sets defined according to their morphophonological properties
Sets for lexeme homonymy (most of them are moved to where the actual rules are.)

The words in the set **N-PO** can be both N and Po, the set takes that into account.

Nouns that have dangerous homonyms

### Nominal sets defined according to their semantical properties

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

### Grammarchecker sets

name convention for error tags: ´´&errortype-errorsubtype-is-shouldbe´´

 

 

 

RULE SECTION
============

- Example marking: Wrong = #%
- Example marking: Correct = #$
- Example marking: Finnish = #f

**Speller suggestions rule** ADD @typo - make sure the suggestions survive the cg mangling:

## Verb agreement rules

### Imperativ rules

#### Sg 3

### Singulaari

#### Sg1

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

### Duaali

#### Du1

**Agreement rule:** msyn-agr-other-du1

#### Du2

**Agreement rule:** msyn-agr-other-du2 *Tuoi koolgâi/kolgáid tääl algâttiđ monnii sämmilâškampanja.*

#### Du3

**Agreement rule:** msyn-agr-sg3-du3 

**Agreement rule:** msyn-agr-sg3-du3 

### Pluraali

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

## Complement of negative verb

**Agreement rule:** &msyn-negcompl-sg3-conneg

## Suomen nessesiivirakenne

**Agreement rule:** msyn-ness-acc-nom

**Agreement rule:** msyn-ness-acc-nom *Muu ličij/liččim kolgâm porgâđ taam tállán.* (???)

**Agreement rule:** msyn-ness-acc-nom *Ij-uv/Jieh-uv tuu/tun kolgâm vyelgiđ suáluikuávlun Jennyin?*

**Agreement rule:** msyn-ness-acc-nom

**Agreement rule:** msyn-ness-acc-nom *Suu/Sun koolgâi forgâ porgâđ miärádâs.*

### Inf should be Actio Essive

**Agreement rule:** msyn-orrood-inf-actioess *Mun orom leđe/lemin ennuv velgus anarâškielân.*

### Existential sentences

Here, the verb should be plural. The interference comes from Finnish e-sentences, where the verb is in the ingular. 

**Agreement rule:** msyn-extv-sg3-pl3 *Must lii/láá uđđâ autoh.*

**Agreement rule:** msyn-extv-sg3-pl3, *Iäruh omâstemráhtusist: mieđetteijee já kieldee häämi.*

**Agreement rule:** msyn-extv-pl3-sg3 *Must lii/láá uđđâ autoh.*
**Agreement rule:** msyn-extv-pl3-sg3 *Liihân/Lááhân must uđđâ autoh.*
**Agreement rule:** msyn-extv-pl3-sg3 *Liihân/Lááhân must uđđâ autoh.*
**Agreement rule:** msyn-extv-pl3-sg3 *Liihân/Lááhân must uđđâ autoh.*
**Agreement rule:** msyn-extv-pl3-sg3 *Lii/Láá must uđđâ autoh.*

**Agreement rule:** msyn-extv-numeral-sg3-pl3

**Agreement rule:** msyn-extneg-sg3-pl3

**Agreement rule:** msyn-extneg-sg3-pl3

### Existential sentences and habitives

**Agreement rule:** msyn-extsubj-ill-nom

**Agreement rule:** msyn-extsubj-ill-nom *Šiljoost láá poccuuh/poccuid.*

**Agreement rule:** msyn-extsubj-acc-nom

**Agreement rule:** msyn-extv-sg3-pl3 

**Agreement rule:** msyn-extsubj-ill-nom

### Postpositions

**Agreement rule:** msyn-po-nom-gen

**Agreement rule:** msyn-po-nom-gen

**Agreement rule:** msyn-po-placc-plgen *Vuoigâdvuotä nubástittiđ kielâ jieijâs táárbuid/táárbui mield.*

### Predicative

**Agreement rule:** msyn-pred-acc-nom *Taah láá čielgâ aašijd/ááših.*

**Agreement rule:** msyn-pred-acc-nom *Lii-uv toos synonymáid/synonym*

**Agreement rule:** msyn-pred-ill-nom *Lii-uv toos synonymijd/synonym*

#### Agreement error with predicative

**Agreement rule:** msyn-predagr-pl3-sg3 *Iä/Ij lah toorjâ.*

**Agreement rule:** msyn-adj-attr-pred

**Agreement rule:** msyn-adj-attr-pred *Mun lam fiskis/fiskâd.*

### Confusion rules

**Agreement rule:** msyn-v-sg1-prfprc *Sun lii huunjâm/huunnjâm.*

### Subjects

### Plural objects

### Plural 2020

**Agreement rule:** msyn-plobj-nom-acc

**Agreement rule:** msyn-plobj-nom-acc

### ConNeg Better: Target whatever is there and should have been a conneg. !!!

**Agreement rule:** msyn-v-sg3-conneg *Sun ij lah/lii.*

**Agreement rule:** msyn-v-du3-conneg *Noomah iä vuáđuduv/vuáđuduu.*

**Agreement rule:** msyn-v-sg3-conneg *Sun ij puávtáččij/puávtáččii vyelgiđ.*

### Singular objects

#### Plain object of TV in Nom shall be Acc

**Agreement rule:** msyn-obj-sgnom-sgacc *Mun juuvâm ain mielkki/mielhi.*

**Agreement rule:** msyn-obj-sgnom-sgacc *Mun lam ain juunâm mielkki/mielhi.*

**Agreement rule:** msyn-obj-sgnom-sgacc)

### Plural objects

Finnish plural objects are in the nominative, in Inari Saami they are in the accusative.

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-obj-plnom-placc

**Agreement rule:** msyn-plobj-nom-acc *Nubeh tobdeh kuobbâreh/kuobbârijd ivneest.*

**Agreement rule:** msyn-obj-plnom-placc (6 rules) *Lam valjim taah säänih/saanijd.*

**Agreement rule:**  msyn-top-nom-acc

**Agreement rule:** msyn-top-nom-acc 

### Acc shall be Ill

**Agreement rule:** msyn-obj-acc-ill

**Agreement rule:** msyn-obj-acc-ill *Ideologia kuáská kielâid/kieláid.*

### Acc shall be Nom

**Agreement rule:** syn-top-placc-plnom *Anarâškielâlijd/Anarâškielâliih noomâid kiävttoo/kiävttojeh uccáá.*

**Agreement rule:** msyn-top-placc-plnom *tiäđuid/tiäđuh ij kavnuu.*

### Acc shall be Ill

**Agreement rule:** msyn-obj-acc-ill

**Agreement rule:** msyn-obj-acc-ill

**Agreement rule:** msyn-obj-acc-ill

### Imperative errors

Suomâkielâ imperatiiv mieđetteijee häämist, mast objekt sajehäämmin lii maaŋgâlovo nominatiiv mut sämikielâst akkusatiiv:

**Agreement rule:** msyn-imp-nom-acc

**Agreement rule:** msyn-imp-nom-acc

Outcommented...

#### Accusative subjects in passive 

b) Suomâkielâ partitiiv passiivráhtusijn; sämikielâst passiiv ohtâvuođâst lii nominatiiv já verbâ maaŋgâlovvoost.

**Agreement rule:** msyn-pass-accsubj-nomsubj

**Agreement rule:** msyn-pass-accsubj-nomsubj *Sämikielâlijd nomâttâsâid iä jur kevttuu.*

**Agreement rule:** msyn-pass-accsubj-nomsubj: *Sämikielâlijd/Sämikielâliih nomâttâsâid kiävttojeh uccáá.*

**Agreement rule:** msyn-pass-accsubj-nomsubj *Tävirijd/Tävireh láppojii ääitist.*

**Agreement rule:** msyn-pass-accsubj-nomsubj: *Páárnán iä adeluu talkkâsijd/talkkâseh tipšopeeivi ääigi.*

## Noun phrase internal phenomena 

### Demonstratives

**Agreement rule:** msyn-dem-locattr-gen

### Noun phrase possessor

**Agreement rule:** msyn-posspl-acc-gen. *Siijđoid/Siijđoi lehâstem tábáhtuvá itten.*

**Agreement rule:** msyn-posspl-acc-gen. coordination: *uásálistiđ párnáid/párnái já nuorâi leiráid*

**Agreement rule:** msyn-posspl-acc-gen. coordination: *uásálistiđ párnáid/párnái já nuorâi leiráid*

### Noun phrase complements

N + Ill

**Agreement rule:** msyn-posspl-ill-gen: *uásálistiđ párnáid/párnái leiráid stuorrâhâžžân.*

**Agreement rule:** msyn-ncompl-ess-sgill: *Must lii tárbu toorjân/torjui.*

**Agreement rule:** msyn-ncompl-ess-sgill: *Maggaar toorjân/torjui sist ličij tárbu.*

**Agreement rule:** msyn-ncompl-placc-plill: *Motomeh suomâkielâ vaikuttâsah/tábáhtussáid tábáhtusâid láá tuhhiittum anarâškielân.*

**Agreement rule:** msyn-ncompl-placc-plill

### Noun phrase agreement NP 

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

### Quantor phrases

**Agreement rule:** msyn-num-par-gen: Must láá kyehti kyellid/kyele

**Agreement rule:** msyn-num-gen-par:  8 kaandâ/kandâd

**Agreement rule:** msyn-num-acc-par: 8 kaandâ/kandâd

### Quantor adverbs

msyn-quant-gen-nom

## Numeral phrases
Commented out, Comment in to test the 2-6 and 7+ sets...

msyn-num-par-gen
The rule is: 2-6 + gensg, 7- + par

## Adverbial rules

## Valency rules

## Lexical rules

**Realword error rule:** real-pisso-pissood

**Realword error rule:** real-pele-peeli

## Syntactical rules

The gramamrchecker file ends here.

* * *
<small>This (part of) documentation was generated from [tools/grammarcheckers/grammarchecker.cg3](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/grammarchecker.cg3)</small>