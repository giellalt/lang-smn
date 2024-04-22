

# Sublexica for nominal morphology 

Note: Triggers **must** be put in this order ("|" meaning "or") in 
order for the morphophonology to work: 

{SV,ÁE,ÁI}  {EA,EX,SC}  {FCD,FVD} {WG,CSH} CLEN  {VHIGH,VBACK}  {RVSH,RLEN} {SLEN,SVSH}  SVLOW 

## Table of content for this file 
Inflection lexica
1. Unclassified lexica 
2. Even-syllable stems 
2.1. Two-syllabic 
2.2. Four-syllabic even stems 
3. Odd-syllabic stems 
4. Contract stems 
Derivation lexica 

# Inflection lexica 

Lexicons starting with 2 are bisyllabic words, 
with 3 are trisyllabic, with 4 are quadrosyllabic. 
The contract ones start with **C** or **S**. 
Lexicons starting with **X** are pointed to from stem files 
*nouns.lexc, adjective.lexc, propernouns.lexc*, hence the **X_** (all parts of speech)
The lexica referred to as *basic lexica* are the ones found in the 
stems/nouns.lexc file. 

## Unclassified lexica 

These two lexica are temporary lexica for words waiting to be classified. 

**LEXICON KOLME** contains some ad hoc three syllable stem, for now directed to: 
* **3LITTER ;** 

**LEXICON nounstems** contains words that should be classified, for now directed to: 
* **3LITTER ;** 

## Two-syllable (even) stem lexica 

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

* **LEXICON 2KISSA** ki^RVssá No root vowel lengthening

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

* **LEXICON 2CAACI** čääc^RCi ==> čä^RVc^RCi

* **LEXICON 2CAACI_SG** 

* **LEXICON 2CAACI_PL** common Pl forms for Px 

* **LEXICON X_CAACI_SG** common Sg case forms 

* **LEXICON X_CAACI_PL** 

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

* **LEXICON KIRKKO_NJAMMA_SG** stem nja^RVmma  

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

## Four-syllable (even) stem lexica

### 4KUNAGAS lexicon family 

* **LEXICON 4KUNAGAS** 

* **LEXICON X_KUNAGAS** stem: kunâgâss

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

* **LEXICON 4PUHELIN**  stem: puhelim

### 2KOLLIISTALLAM lexicon family 

* **LEXICON 2KOLLIISTALLAM** 

* **LEXICON 4JOTOLAH**  splitting in sg pl 

* **LEXICON JOHTOLAH_OBL** common for N and A 

* **LEXICON 4JOTOLAH_PL** 

* **LEXICON 4KAPULUH** stem: kápul

* **LEXICON 4KUBALOH** stem: kubál

* **LEXICON 4LAS_NOUN** stem = aanaarl 

* **LEXICON LAS_COMMON** 

* **LEXICON X_LAS_COMMON_SG** normâl lâš:-lii-nouns and adjs 

* **LEXICON X_LAS_COMMON_PL** NOrmal plural and plural tantum cases, olympialiih 

* **LEXICON OLYMPIALIIH_PL** 

* **LEXICON LAS_SUF** 

* **LEXICON MUS_NOUN** type uáiváámus, aldemus 

## Odd-syllable stems 

* **LEXICON 3KOMPAS** stem kompass An odd loan word with the final -s lengthening 

* **LEXICON X_KOMPAS** 

* **LEXICON 3KEPIDEM** 

* **LEXICON 3KEPIDEM_PL** 

* **LEXICON 3POTTAAK** 

* **LEXICON X_POTTAAK** 

* **LEXICON 3EEMEED** 

* **LEXICON X_EEMEED** stem: eemeed

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

* **LEXICON 3RUONAS** ruonâs:ruonâs, nuurras WG NEP,  blank for the rest 

* **LEXICON X_RUONAS** WG NEP,  blank for the rest 

* **LEXICON 3VUONJAS**  kierâš, stem: kierrâ, px kierâččâm 

* **LEXICON 3CEVE** only for this lemma. It could go to 3LYEME but needs modifications of rules to get iä:e and -tt-, and the worst part is v:vv 

* **LEXICON 3LYEME** stem: luámmá^SVn^ÁE 

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

* **LEXICON C_POOVIJC** stem: puáhhá

* **LEXICON 3POOVIJ** 

* **LEXICON C_OLMOOS** lexicon for olmooš, stem is ulmu 

* **LEXICON C_OLMOOS_PL** 

* **LEXICON C_KAARBIS** stem:  ká^RVrbás^ÁI

* **LEXICON X_KAARBIS** 

* **LEXICON C_KAARBIS_SG** 

* **LEXICON C_KAARBIS_PL** 

* **LEXICON X_KAARBIS_SG** 

* **LEXICON C_PELES** 

* **LEXICON X_PELES** piällás^ÁE

* **LEXICON C_MORCES** stem: morččás^ÁE

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

    - *LEXICON X_RASTAGAS_SG* sg cases 

* **LEXICON 3OPPUS** stem: oppu 

* **LEXICON 3ALMAS** 

* **LEXICON C_SARVES** sarves, jalŋes stem: sarv, jalŋ

* **LEXICON C_SARVES_SG** 

* **LEXICON C_SARVES_PL** 

* **LEXICON X_SARVES_SG** 

* **LEXICON X_SARVES_PL** 

* **LEXICON C_EIJE** 

* **LEXICON C_LOHHEE** 

* **LEXICON C_LOHHEE_SG** redirects to  C_TAHHEE, but adds NomAg 

* **LEXICON C_LOHHEE_PL** redirects to  C_TAHHEE, but adds NomAg 

* **LEXICON C_TAHHEE** STEM IS: myersse

* **LEXICON C_TAHHEE_SG** 

* **LEXICON C_TAHHEE_PL** 

* **LEXICON X_TAHHEE** ee-final contract, -ei instead of -ij not-nomen-agentis 

* **LEXICON X_TAHHEE_SG** ee-final contract, -ei instead of -ij 

* **LEXICON X_TAHHEE_PL** ee-final contract, plural forms 

## Comitative plural variation 

* **LEXICON GUIN** is here to give -guin and the Use/NG -gijn. 

# Derivation lexica 

TODO: Move derivation lexica here 

## Diminutive derivations _DIM

### 2 syllabic stems

#### final â

* **LEXICON 2JUUHA_SG_DIM** (a lexicon to create deminutives; Not for lexicalised words already being in deminutive) 

* **LEXICON 2ALGA_SG_DIM** a^RVlgâ done witout FVD, both ways work

* **LEXICON 2ALGA_PL_DIM**  a^RVlgâ

#### final á

* **LEXICON FADDA_SG_DIM** fá^RVddá 

* **LEXICON 2FADDA_PL_DIM** 

* **LEXICON 2KISSA_DIM** 

* **LEXICON 2KYELI_SG_DIM** 

* **LEXICON 2KYELI_PL_DIM** 

#### final e

* **LEXICON 2ALGE_SG_DIM**  a^RVlge alge, mo^RVkk4e mokke

* **LEXICON 2ALGE_PL_DIM** 

#### Final i

* ''LEXICON 2CAACI_SG_DIM'' stem:  čä^RVc^RCi

* ''LEXICON 2CAACI_PL_DIM'' 

* ''LEXICON 2AIGI_SG_DIM''  pe^RVi4vi, ä^RVi4gi

* ''LEXICON 2AIGI_PL_DIM'' 

#### final o

#### final u , tentative

* **LEXICON 2AIRU_SG_DIM** a^RVlgâ 

* **LEXICON 2AIRU_PL_DIM** 

* **LEXICON 2LAAVU_DIM** 

### contracted stem, final â, 

* **LEXICON 2AAIGA_DIM** 

* **LEXICON C_KAARBIS_SG_DIM**  stem ká^RVrbás^ÁI

### 3-syllabic

3LITTER --> 4C_RASTAGAS

    - *LEXICON 3EEMEED_SG_DIM*  the sg ones 

    - *LEXICON 3EEMEED_PL_DIM*  the pl ones 

    - *LEXICON 3EEMEED_SG_DIM_CASE* sg cases 

    - *LEXICON 3EEMEED_PL_DIM_CASE* pl cases 

### 4-syllabic

#### -uv: -uvâš, -uvvii

* ''LEXICON 4JOTOLAH_SG_DIM'' stem kápul + uv

* ''LEXICON 4JOTOLAH_PL_DIM'' stem kápul + uv

#### -âss: -âsâš, -âssii

* ''LEXICON 4KUNAGAS_SG_DIM'' stem kápul + uv

* ''LEXICON 4KUNAGAS_PL_DIM'' stem kápul + uv

### Vowel-final loanwords

tbw.

* * *

<small>This (part of) documentation was generated from [src/fst/morphology/affixes/nouns.lexc](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/nouns.lexc)</small>
