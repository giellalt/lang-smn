
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

