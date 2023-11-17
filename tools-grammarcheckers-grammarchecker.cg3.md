
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

## äigin > ääigi

## moadde kerdi > moddii

## Noun phrase internal phenomena

### Possessive pronouns > reflexive pronouns

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