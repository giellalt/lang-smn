! Divvun & Giellatekno - open source grammars for Sámi and other languages
! Copyright © 2000-2010 The University of Tromsø & the Norwegian Sámi Parliament
! http://giellatekno.uit.no & http://divvun.no
!
! This program is free software; you can redistribute and/or modify
! this file under the terms of the GNU General Public License as published by
! the Free Software Foundation, either version 3 of the License, or
! (at your option) any later version. The GNU General Public License
! is found at http://www.gnu.org/licenses/gpl.html. It is
! also available in the file $GTHOME/LICENSE.txt.
!
! Other licensing options are available upon request, please contact
! giellatekno@uit.no or feedback@divvun.no

! ======================
!! # Inflection lexica for Inari Saami verbs
! ======================

!! This file contains the morphology for the Inari Saami verbs. 

!! The morphophonological processes are governed by triggers. When there are more
!! triggers, tney must be ordered as follows (where {A,B} C means *A or B, thereafter C*):

!! {SV,ÁE,ÁI}  {EA,SC}  FCD {WG,CSH} CLEN  {VHIGH,VBACK}  {RVSH,RLEN} EA {SLEN,SVSH}  SVLOW

!! ## Overview of the file

!! 1. Auxiliaries
!!     1. NEG
!!     1. LEDE
!! 1. 2-syllabic: 2SYLL_ etc. (classified according to infinitive suffix)
!! 1. 3-syllabic
!! 1. 4-syllabic
!! 1. Unclassified: verbstems, 3v, 4v


!! *A note on morphophonology:*
!! The consonant gradation setup for verbs is to a certain extent different
!! from the one for nouns. For the nouns, the stem vowel is part of the stem, 
!! whereas for the verbs, the stem vowel is added here in the affixes file.



!! ## Auxiliaries

LEXICON NEG !!≈ **@CODE@**  = lists all forms of the negation verb
+Ind+Sg1:jiem G ; ! jiemge, *jiemgin, jiemba
+Ind+Sg2:jieh G ; ! etc. 
+Ind+Sg3:ij ENDLEX ;  !
+Ind+Du1:iän G ;
+Ind+Du2:eppee G ;
+Ind+Du3:iävá G ;
+Ind+Pl1:ep G ; 
+Ind+Pl2:eppeđ G ;
+Ind+Pl3:iä G ;
+Ind+Sg3+Foc/go:ij%>#go # ;  !
+Ind+Sg3+Foc/ge:i%>#ge # ;
+Ind+Sg3+Foc/ge+Use/NG:ij%>#ge # ;
+Ind+Sg3+Foc/han:ij%>#hân # ;
+Ind+Pl3+Foc/ge:iä%>#ge # ;
+Ind+Sg1+Foc/ge+Use/NG:e%>#ge # ; ! This either with or without pe-nu tag.
+Ind+Sg2+Foc/ge+Use/NG:e%>#ge # ; ! 
+Ind+Sg3+Foc/ge+Use/NG:e%>#ge # ;
+Ind+Pl1+Foc/ge+Use/NG:e%>#ge # ;
+Ind+Pl2+Foc/ge+Use/NG:e%>#ge # ;
+Ind+Pl3+Foc/ge+Use/NG:e%>#ge # ;
+Ind+Sg3+Foc/uv:ij%>#%-uv KG2 ;  !
+Ind+Sg3+Foc/uv+Foc/gis:ij%>#%-uvks # ;  !
+Ind+Sg3+Foc/ba:ij%>#ba # ;  !

+Imprt+Sg1:iällum  G ;
+Imprt+Sg2:ele G ;
+Imprt+Sg3:iällus G ;
+Imprt+Du1:iälloon G ;
+Imprt+Du2:ellee G ;
+Imprt+Du3:iällus G ;
+Imprt+Pl1:iällup G ;
+Imprt+Pl2:elleđ G ;
+Imprt+Pl3:iällus G ;
+Opt+Sg2:iälu G ;
+Opt+Du2:iällu G ;
+Opt+Pl2:iälluđ G ;
+Sup:amas G ;
+Sup+Use/NG:emis G ;

LEXICON LEDE !!≈ **@CODE@**  = lists all forms of the copula
+Inf:leđe K ;

! Present
+Ind+Prs+Sg1:lam K ;
+Ind+Prs+Sg2:lah K ;
+Ind+Prs+Sg3:lii K ;
+Ind+Prs+Du1:láán K ;
+Ind+Prs+Du1+Use/NG:laan K ;
+Ind+Prs+Du1+Use/NG:leen K ;
+Ind+Prs+Du2:leppee K ;
+Ind+Prs+Du3+Use/NG:lava K ;
+Ind+Prs+Du3:lává K ;
+Ind+Prs+Pl1:lep K ;
+Ind+Prs+Pl2:leppeđ K ;
+Ind+Prs+Pl3:láá K ;
+Ind+Prs+Pl3+Use/NG:laa K "weight: 2.0" ;

! Past
+Ind+Prt+Sg1:lijjim K ;
+Ind+Prt+Sg2:lijjih K ;
+Ind+Prt+Sg3:lâ%>i K ;
+Ind+Prt+Sg3+Err/Orth:lai K ;
+Ind+Prt+Sg3+Err/Orth:lei K ;
+Ind+Prt+Du1:láim K ;
+Ind+Prt+Du1+Use/NG:lááim K ;
+Ind+Prt+Du1+Use/NG:leim K ;
+Ind+Prt+Du2:láid K ;
+Ind+Prt+Du2+Use/NG:lááid K ;
+Ind+Prt+Du2+Use/NG:leid K ;
+Ind+Prt+Du3:láin K ;
+Ind+Prt+Du3+Err/Orth:lâin K ;
+Ind+Prt+Du3+Use/NG:lááin K ;
+Ind+Prt+Du3+Use/NG:lein K ;
+Ind+Prt+Pl1:lâim K ;
+Ind+Prt+Pl1+Use/NG:leim K ;
+Ind+Prt+Pl2:lâid K ;
+Ind+Prt+Pl2+Use/NG:leid K ;
+Ind+Prt+Pl3:lijjii K ;
+Ind+Prt+Pl3+Err/Orth:leijii K ; ! corpus

! Conditional
+Cond+Prs+Sg1:liččim    K ;
+Cond+Prs+Sg2:liččih    K ;
+Cond+Prs+Sg3:ličij	    K ;
+Cond+Prs+Du1:liččijm   K ;
+Cond+Prs+Du2:liččijd K ;
+Cond+Prs+Du3:liččijn K ;
+Cond+Prs+Pl1:liččijm K ;
+Cond+Prs+Pl2:liččijd K ;
+Cond+Prs+Pl3:liččii  K ;

!Potential
+Pot+Prs+Sg1:ležžeem   K ;
+Pot+Prs+Sg2:ležžeeh   K ;
+Pot+Prs+Sg3+Use/NG:leš	   K ;
+Pot+Prs+Sg3:lâš	   K ;
+Pot+Prs+Sg3+Err/Orth:laš	   K ;
+Pot+Prs+Du1:ležžeen   K ;
+Pot+Prs+Du2:lešvettee K ;
+Pot+Prs+Du3:ležžev	   K ;
+Pot+Prs+Du3+Use/NG:ležžâv	   K ;
+Pot+Prs+Pl1:ležžep	   K ;
+Pot+Prs+Pl1+Use/NG:ležžâp	   K ;
+Pot+Prs+Pl2:lešvetteđ K ;
+Pot+Prs+Pl3:ležeh	   K ;

! Imperative
+Imprt+Sg2:liähu		K ;
+Imprt+Sg3:liävus	    K ;
+Imprt+Sg3+Err/Orth:liävvus	    K ;
+Imprt+Sg3+Err/Orth:lávus	    K ;
+Imprt+Sg3+Err/Orth:liäkkus	  K ;
+Imprt+Sg3+Err/Orth:lekkus	  K ;
+Imprt+Du3:liähus	    K ;
+Imprt+Pl3:liähus	    K ;
+Imprt+Pl3+Err/Orth:láhhus  K ;
+Imprt+Pl3+Err/Orth:lekkus  K ;

! Infinite forms
+Ind+Prs+ConNeg:lah	    K ;
+Ind+Prs+ConNeg+Foc/kin:lekken    K ;
+Ind+Prs+ConNeg+Foc/kin+Err/Orth:lekkin    K ;
+Ind+Prt+ConNeg+Use/NG:lam   K ;
+Ind+Prt+ConNeg:lamaš K ;
+Cond+Prs+ConNeg:liččii	    K ;
+Pot+Prs+ConNeg:ližžii	    K ;
+Ind+Pot+Prs+ConNeg:lâš K ;
+Ind+Pot+Prs+ConNeg+Use/NG:leš K ;
+PrsPrc:leijee		    K ;
+PrfPrc+Use/NG:lam K ;
+PrfPrc:lamaš K ;
+PrfPrc+Use/NG:lámáš	    K ;
+PrfPrc+Err/Orth:lamâš	    K ;
+Actio+Ess:lemin	    K ;
+Actio+Loc:lemist	    K ;
+Ger:leđedijn		    K ;



!! ## The regular verbs
!! ### Order of lexica
!! We present lexica for even, odd and contracted stems. Finally come lexica for flag diacritica.

!! Transitivity: Lexica marked \_IV and \_TV get **+IV** and **+TV** tags before 
!! being redirected to common inflection.

!! Within each lexicon, the suffixes are ordered as follows:
!! 1. Infinites
!! 1. Indicative
!! 1. Conditional
!! 1. Potential
!! 1. Derivations


!! ## Even-syllable stems
!    -------------------

!! ### AD verbs (verbs ending in *-âđ*)

!! #### LEXICON 2SYLL\_HAAHAD
LEXICON 2SYLL_HAAHAD_IV  
+V+IV: 2SYLL_HAAHAD_V ;
LEXICON 2SYLL_HAAHAD_TV  
+V+TV: 2SYLL_HAAHAD_V ;

LEXICON 2SYLL_HAAHAD_V  
VINFINITES_AASSAD ;
+Ind: EVEN_IND_HAAHAD ;
+Cond+Prs:â^WG^VBACK^RVSH%> EVEN_COND ;
+Pot+Prs: EVEN_POT_AASSAD ; ! PM: haahâđ+Pot+Prs+Sg1:hävveem (CLEN), aassâđ:ääseem (RLEN)
+Imprt: EVEN_IMPRT_HAAHAD ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !  čääh^RC -> á (VHINH RVSH) , a (VBACK RVSH)
!+Der4+Der/InchL:â^WG^VBACK^RVSH#škyett4 4SYLL_KYETTID_DER ; !
+Der4+Der/InchL:â^WG^VBACK#škyett4 4SYLL_KYETTID_DER ; !
+Der1+Der/d:âd^WG^VBACK 3_DERIVED_LOW ; !
+Der1+Der/st:âst^WG^VBACK 3_DERIVED_LOW ; !
+Der1+Der/tt:âtt^WG^VBACK 3_DERIVED_LOW ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:â^CSH^VBACK^RVSH DER_MAS ; ! asâmâš
+Der2+Der/NomAg:e^CLEN^RVSH%> C_TAHHEE ;

LEXICON EVEN_IND_HAAHAD 
+Prs+Sg1:â^WG^VBACK%>m K ;
+Prs+Sg2:a^WG%>h K ;
+Prs+Sg3:á^CSH^VHIGH K ;      ! x    äässe^CLEN^RVSH>
+Prs+Du1:e^CLEN^RVSH%>en K ; ! njääh^RCe^CLEN^RVSH>
+Prs+Du2:â^CSH^VBACK^RVSH%>vettee K ;  ! a
+Prs+Du3:â^VBACK%>v K ;
+Prs+Pl1:â^VBACK%>p K ;
+Prs+Pl2:â^CSH^VBACK^RVSH%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i^VBACK%>m K ; 	! ^VBACK
+Prt+Sg2:i^VBACK%>h K ; 	! ^VBACK
+Prt+Sg3:â^WG^VBACK%>i K ;
!+Prt+Du1:á^WG^VBACK%>im K ; ! havváim hääh^RC
!+Prt+Du2:á^WG^VBACK%>id K ; ! havváid
!+Prt+Du3:á^WG^VBACK%>in K ; ! havváin
+Prt+Du1:á^WG^CLEN^VBACK^RVSH%>im K ;
+Prt+Du2:á^WG^CLEN^VBACK^RVSH%>id K ;
+Prt+Du3:á^WG^CLEN^VBACK^RVSH%>in K ;
+Prt+Pl1:â^WG^VBACK%>im K ;
+Prt+Pl2:â^WG^VBACK%>id K ;
+Prt+Pl3:i^CLEN^VBACK^RVSH%>i3 K ;

LEXICON EVEN_IMPRT_HAAHAD 
+Sg2:â^WG^VBACK K ;
+Sg3:o^WG^VBACK^RVSH%>s K ; !â^WG^VBACK^RVSH havos
+Du1:o^CLEN^VBACK^RVSH%>on K ;
+Du2:e^CLEN^RVSH%>e K ;
+Du3:o^CLEN^VBACK^RVSH%>os K ;
+Pl1:o^CLEN^VBACK^RVSH%>op K ;
+Pl2:â^VBACK%>đ K ;
+Pl3:o^CLEN^VBACK^RVSH%>os K ;


!! #### LEXICON 2SYLL\_AASSAD ( 48 verbs)
!! * 2SYLL_AASSAD - aassâđ ääss
!!     - Inf:â%>đ K ;
!!     - Ind+Prs+Sg3:á^CSH^VHIGH áásá,
!!     - Ind+Prs+Pl3:i^CSH%>h ääsih, rvow like Inf,
!!     - ConNeg:â^WG rvow like Inf,
!!     - Ind+Prt+Sg1:i^VBACK%>m aassim
LEXICON 2SYLL_AASSAD 
+V: 2SYLL_AASSAD_V ;
LEXICON 2SYLL_AASSAD_IV 
+V+IV: 2SYLL_AASSAD_V ;
LEXICON 2SYLL_AASSAD_TV 
+V+TV: 2SYLL_AASSAD_V ;

LEXICON 2SYLL_AASSAD_V  
VINFINITES_AASSAD ;
+Ind: EVEN_IND_AASSAD ;
+Cond+Prs:â^WG^VBACK^RVSH%> EVEN_COND ;
+Pot+Prs: EVEN_POT_AASSAD ;
+Imprt: EVEN_IMPRT_AASSAD ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !  čääh^RC -> á (VHINH RVSH) , a (VBACK RVSH)
+Der4+Der/InchL:â^WG^VBACK^RVSH#škyett4 4SYLL_KYETTID_DER ; !
+Der1+Der/d:âd^WG^VBACK 3_DERIVED_LOW ; !
+Der1+Der/st:âst^WG^VBACK 3_DERIVED_LOW ; !
+Der1+Der/tt:âtt^WG^VBACK 3_DERIVED_LOW ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:â^CSH^VBACK^RVSH DER_MAS ; ! asâmâš
+Der2+Der/NomAg:e^CLEN^RVSH%> C_TAHHEE ;


LEXICON VINFINITES_AASSAD 
+Inf:â^VBACK%>đ K ; !^VBACK
+Ind+Prs+ConNeg:â^WG^VBACK K ;
+Ind+Prt+ConNeg:â^VBACK%>m K ;
+Cond+Prs+ConNeg:â^WG^VBACK^RVSH%>ččii K ;
+Pot+Prs+ConNeg:i^WG^VBACK%>i3 K ;
+Imprt+ConNeg:â^WG^VBACK K ;

+PrsPrc:e^CLEN^RVSH%>e K ; ! trigger for u > o
+PrfPrc:â^VBACK%>m K ;

+VAbess:â^WG^VBACK^RVSH VABESS ;
+VGen:â^WG^VBACK%>n VGEN ;

+Actio+Nom:â^VBACK%>m NOMACT ;
+Actio+Ill:â^CSH^VBACK^RVSH%>mân K ;
+Actio+Loc:â^CSH^VBACK^RVSH%>mist K ;
+Actio+Ess:â^CSH^VBACK^RVSH%>min K ;
+Actio+Com:â^CSH^VBACK^RVSH%>máin K ;
+VAbess:â^WG^VBACK^RVSH VABESS ;
+Ger+PxSg1:â^WG^VBACK^RVSH%>dijnân K ;
+Ger+PxSg2:â^WG^VBACK^RVSH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VBACK^RVSH%>dijnes K ;
+Ger+PxSg3:â^WG^VBACK^RVSH%>dijnis K ;
+Ger:â^WG^VBACK^RVSH%>dijn K ;
+Der4+Der/NomAct:â^VBACK%>m FLAG_3LITTER ;

LEXICON EVEN_IND_AASSAD 
+Prs+Sg1:â^WG^VBACK%>m K ;
+Prs+Sg2:a^WG%>h K ;
+Prs+Sg3:á^CSH^VHIGH K ;      ! x    äässe^CLEN^RVSH>
+Prs+Du1:e^CLEN^RVSH%>en K ; ! njääh^RCe^CLEN^RVSH>
+Prs+Du2:â^CSH^VBACK^RVSH%>vettee K ;  ! a
+Prs+Du3:â^VBACK%>v K ;
+Prs+Pl1:â^VBACK%>p K ;
+Prs+Pl2:â^CSH^VBACK^RVSH%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i^VBACK%>m K ; 	! ^VBACK
+Prt+Sg2:i^VBACK%>h K ; 	! ^VBACK
+Prt+Sg3:â^WG^VBACK%>i K ;
+Prt+Du1:á^WG^VBACK%>im K ; ! aasáim
+Prt+Du2:á^WG^VBACK%>id K ; ! jna
+Prt+Du3:á^WG^VBACK%>in K ;
+Prt+Du1+Err/Orth:á^WG^CLEN^VBACK^RVSH%>im K ;
+Prt+Du2+Err/Orth:á^WG^CLEN^VBACK^RVSH%>id K ;
+Prt+Du3+Err/Orth:á^WG^CLEN^VBACK^RVSH%>in K ;
+Prt+Pl1:â^WG^VBACK%>im K ;
+Prt+Pl2:â^WG^VBACK%>id K ;
+Prt+Pl3:i^CLEN^VBACK^RVSH%>i3 K ;

LEXICON EVEN_POT_AASSAD 
+Sg1:e^WG^CLEN^RVSH%>em K ; ! PM: with aassâđ, CLEN/RLEN should be the same as in Ind.prt.du, but other contlex direct to here as well?
+Sg2:e^WG^CLEN^RVSH%>eh K ; ! PM: with aassâđ, CLEN/RLEN should be the same as in Ind.prt.du, but other contlex direct to here as well?
+Sg3:â^WG^VBACK%>š K ;
+Du1:â^WG^VBACK^RVSH%>žeen K ;
+Du2:â^WG^VBACK%>švettee K ;
+Du3:â^WG^VBACK^RVSH%>žává K ;
+Pl1:â^WG^VBACK^RVSH%>žep K ;
+Pl2:â^WG^VBACK%>švetteđ K ;
+Pl3:â^WG^VBACK^RVSH%>žeh K ;

LEXICON EVEN_IMPRT_AASSAD 
+Sg2:â^WG^VBACK K ;
+Sg3:u^WG^VHIGH%>s K ;
+Du1:o^CLEN^VHIGH^RVSH%>on K ;
+Du2:e^CLEN^RVSH%>e K ;
+Du3:u^VHIGH%>s K ;
+Pl1:u^VHIGH%>p K ;
+Pl2:â^VBACK%>đ K ;
+Pl3:u^VHIGH%>s K ;


!! ### Full paradigms

!! #### LEXICON 2SYLL\_VIEZZAD
LEXICON 2SYLL_VIEZZAD 
+V: 2SYLL_VIEZZAD_V ;
LEXICON 2SYLL_VIEZZAD_IV 
+V+IV: 2SYLL_VIEZZAD_V ;
LEXICON 2SYLL_VIEZZAD_TV 
+V+TV: 2SYLL_VIEZZAD_V ;

LEXICON 2SYLL_VIEZZAD_V  
VINFINITES_VIEZZAD ;
+Ind+Prs: EVEN_IND_PRS_VIEZZAD ;
+Ind+Prt: EVEN_IND_PRT_VIEZZAD ;
+Cond+Prs:â^WG%> EVEN_COND ;
+Pot+Prs: EVEN_POT_VIEZZAD ;
+Imprt: EVEN_IMPRT_VIEZZAD ;
+Der4+Der/InchL:â^WG#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:âd^WG 3_DERIVED ; !viežâdiđ viežâd vs viežžâd luoihâdiđ 3_KUIKETTID?
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L_CLEN ;
:â DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !viežžuuččii viežžui

LEXICON VINFINITES_VIEZZAD 
+Inf:â%>đ K ;
+Ind+Prs+ConNeg:â^WG K ;
+Ind+Prt+ConNeg:â%>m K ;
+Cond+Prs+ConNeg:â^WG%>ččii K ;
+Pot+Prs+ConNeg:i%>i3 K ;
+Imprt+ConNeg:â^WG K ;

+PrsPrc:e%>e K ;
+PrfPrc:â%>m K ;
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ;

+VAbess:â^WG VABESS ;
+VGen:â^WG%>n VGEN ;

+Actio+Nom:â%>m NOMACT ;
+Actio+Ill:â%>mân K ;
+Actio+Com:â%>máin K ;
+Actio+Loc:â%>mist K ;
+Actio+Ess:â%>min K ;
+VAbess:â^WG^RVSH VABESS ;
+Ger+PxSg1:â^WG%>dijnân K ;
+Ger+PxSg2:â^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG%>dijnes K ;
+Ger+PxSg3:â^WG%>dijnis K ;
+Ger:â^WG%>dijn K ;
+Der4+Der/NomAct:â%>m FLAG_3LITTER ; ! LA: removed ^VHIGH ?

LEXICON EVEN_IND_PRS_VIEZZAD 
+Sg1:â^WG%>m K ;     ! viežâm
+Sg2:a^WG%>h K ;     ! viežah
+Sg2+Err/Orth:â^WG%>h K ;     ! viežâh
+Sg3:á^VHIGH K ;       ! viäžžá
+Du1:e%>en K ;  ! viežžeen
+Du2:â%>vettee K ; ! viežžâvettee
+Du3:â%>v K ;         ! viežžâv
+Pl1:â%>p K ;	! viežžâp
+Pl2:â%>vetteđ K ;  ! viežžâvetteđ
+Pl3:i%>h K ;	! viežžih

LEXICON EVEN_IND_PRT_VIEZZAD 
+Sg1:i%>m K ; ! viežžim
+Sg2:i%>h K ; ! viežžih
+Sg3:â^WG%>i K ; ! viežâi
+Du1:á^WG%>im K ; ! viežáim
+Du2:á^WG%>id K ; ! viežáid
+Du3:á^WG%>in K ; ! viežáin
+Pl1:â^WG%>im K ;	! viežâim
+Pl2:â^WG%>id K ; ! viežâid
+Pl3:i%>i3 K ;	! viežžii

LEXICON EVEN_POT_VIEZZAD
+Sg1:e^WG^CLEN%>em K ;
+Sg2:e^WG^CLEN%>eh K ;
+Sg3:â^WG%>š K ; ! viežâš
+Du1:â^WG%>žeen K ; ! viežâšeen
+Du2:â^WG%>švettee K ; ! viežâšvettee
+Du3:â^WG%>žává K ; ! viežâšává
+Pl1:â^WG%>žep K ; ! viežâšep
+Pl2:â^WG%>švetteđ K ; ! viežâšvetteđ
+Pl3:â^WG%>žeh K ; ! viežâseh

LEXICON EVEN_IMPRT_VIEZZAD
+Sg2:â^WG K ; ! viežâ
+Sg3:u^WG^VHIGH%>s K ; ! viäžus
+Du1:o^VHIGH%>on K ; ! viäžžoon
+Du2:e%>e K ; ! viežžee
+Du3:u^VHIGH%>s K ; ! viäžžus
+Pl1:u^VHIGH%>p K ; ! viäžžup
+Pl2:â%>đ K ; ! viežžâđ
+Pl3:u^VHIGH%>s K ; ! viäžžus


!! #### LEXICON 2SYLL\_SPELLAD 
!! Similar to 2SYLL\_ETTAD, but less CSH, don't know yet how much. 20 verbs
LEXICON 2SYLL_SPELLAD
+V: 2SYLL_SPELLAD_V ;
LEXICON 2SYLL_SPELLAD_IV
+V+IV: 2SYLL_SPELLAD_V ;
LEXICON 2SYLL_SPELLAD_TV
+V+TV: 2SYLL_SPELLAD_V ;

LEXICON 2SYLL_SPELLAD_V  
VINFINITES_SPELLAD ;
+Ind+Prs: EVEN_IND_PRS_SPELLAD ;
+Ind+Prt: EVEN_IND_PRT_SPELLAD ;
+Pot+Prs: EVEN_POT_ETTAD ;
+Cond+Prs:â^WG^VHIGH%> EVEN_COND ;
+Imprt: EVEN_IMPRT_ETTAD ;
+Der4+Der/InchL:â^WG^VHIGH#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:âd^WG 3_DERIVED ; !
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L_VERSION2 ; !Former: 3_DERIVED_VBACK does noet work
:â DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !ettum ettui lekkum terppum

LEXICON VINFINITES_SPELLAD 
+Inf:â^VHIGH%>đ K ;
+Ind+Prs+ConNeg:â^WG^VHIGH^RLEN K ;
+Ind+Prt+ConNeg:â^VHIGH%>m K ;
+Cond+Prs+ConNeg:â^WG^VHIGH%>ččii K ;
+Pot+Prs+ConNeg:i^WG^VHIGH^RLEN%>i3 K ;
+Imprt+ConNeg:â^WG^VHIGH^RLEN K ;
+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+PrfPrc:â^VHIGH%>m K ;
+PrfPrc+Use/NG:â%>m K ;
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ; !tobdee NB! pargee ok

+VAbess:â^WG^VHIGH VABESS ;
+VGen:â^WG^VHIGH^RLEN%>n VGEN ;

+Ger+PxSg1:â^WG^VHIGH%>dijnân K ;
+Ger+PxSg2:â^WG^VHIGH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VHIGH%>dijnes K ;
+Ger+PxSg3:â^WG^VHIGH%>dijnis K ;
+Ger:â^WG^VHIGH%>dijn K ;
+Actio+Nom:â^VHIGH%>m NOMACT ;
+Actio+Ill:â^VHIGH%>mân K ;
+Actio+Loc:â^VHIGH%>mist K ;
+Actio+Com:â^VHIGH%>máin K ;
+Actio+Ess:â^VHIGH%>min K ;
+Der4+Der/NomAct:â^VHIGH%>m FLAG_3LITTER ;



LEXICON EVEN_IND_PRS_SPELLAD  
+Sg1:â^WG^VHIGH^RLEN%>m K ;
+Sg2:a^WG^VHIGH^RLEN%>h K ;
+Sg2+Err/Orth:â^WG^VHIGH^RLEN%>h K ;
+Sg3:á^VHIGH K ;       ! iätá (CSH tt-t), šadda, viggá
+Du1:e^CLEN%>en K ;
+Du2:â%>vettee K ; ! etâvettee (CSH) šoddâvettee, viggâvettee
+Du3:â^VHIGH%>v K ;
+Pl1:â%>p K ;
+Pl2:â^VHIGH%>vetteđ K ;
+Pl3:i%>h K ;  ! spellih

LEXICON EVEN_IND_PRT_SPELLAD 
+Sg1:i%>m K ;
+Sg2:i%>h K ;
+Sg3:â^WG^RLEN%>i3 K ;
+Du1:á^WG^RLEN%>im K ; ! ETTAD RLEN
+Du2:á^WG^RLEN%>id K ; ! ETTAD RLEN
+Du3:á^WG^RLEN%>in K ; ! ETTAD RLEN
+Pl1:â^WG^RLEN%>im K ;
+Pl2:â^WG^RLEN%>id K ;
+Pl3:i^CLEN%>i3 K ;

!! #### LEXICON 2SYLL\_VIHKAD 
LEXICON 2SYLL_VIHKAD
+V: 2SYLL_VIHKAD_V ;
LEXICON 2SYLL_VIHKAD_IV
+V+IV: 2SYLL_VIHKAD_V ;
!LEXICON 2SYLL_VIHKAD_TV
!+V+TV: 2SYLL_VIHKAD_V ;

LEXICON 2SYLL_VIHKAD_V
2SYLL_KAVNAD_V ;


!! #### LEXICON 2SYLL\_ETTAD 
!! * 2SYLL_ETTAD ettâđ e^RVtt4
!!     - Inf:â^VHIGH%>đ
!!     - Ind+Prs+Sg3:á^CSH^VHIGH  iätá
!!     - Ind+Prs+Pl3:e^CSH%>h
!!     - ConNeg:â^WG^VHIGH^RLEN
!!     - Ind+Prt+Sg1:i%>m
LEXICON 2SYLL_ETTAD
+V: 2SYLL_ETTAD_V ;
LEXICON 2SYLL_ETTAD_TV
+V+TV: 2SYLL_ETTAD_V ;
LEXICON 2SYLL_ETTAD_V  
! ettâđ	 | eeđâm   | iä-á | eteh    | ettim  | e^RVtt4

:  VINFINITES_ETTAD ;
+Ind+Prs: EVEN_IND_PRS_ETTAD ;
+Ind+Prt: EVEN_IND_PRT_SPELLAD ;
+Cond+Prs:â^WG^VHIGH%> EVEN_COND ;
+Pot+Prs: EVEN_POT_ETTAD ;
+Imprt: EVEN_IMPRT_ETTAD ;
+Der4+Der/InchL:â^WG^VHIGH#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:âd^WG 3_DERIVED ; !
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:â^CSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !ettum ettui lekkum terppum

LEXICON VINFINITES_ETTAD 
+Inf:â^VHIGH%>đ K ;
+Ind+Prs+ConNeg:â^WG^VHIGH^RLEN K ;
+Ind+Prt+ConNeg:â^VHIGH%>m K ;
+Cond+Prs+ConNeg:â^WG^VHIGH%>ččii K ;
+Pot+Prs+ConNeg:i^WG^VHIGH^RLEN%>i3 K ;
+Imprt+ConNeg:â^WG^VHIGH^RLEN K ;
+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+PrfPrc:â^VHIGH%>m K ;
+PrfPrc+Use/NG:â%>m K ;
!+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ; !tobdee NB! pargee ok

+VAbess:â^WG^VHIGH VABESS ;
+VGen:â^WG^VHIGH^RLEN%>n VGEN ;

+Ger+PxSg1:â^WG^VHIGH%>dijnân K ;
+Ger+PxSg2:â^WG^VHIGH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VHIGH%>dijnes K ;
+Ger+PxSg3:â^WG^VHIGH%>dijnis K ;
+Ger:â^WG^VHIGH%>dijn K ;
+Actio+Ess:â^CSH^VHIGH%>min K ;
+Actio+Ill:â^CSH^VHIGH%>mân K ;
+Actio+Loc:â^CSH^VHIGH%>mist K ;
+Actio+Com:â^CSH^VHIGH%>máin K ;
+Actio+Nom:â^VHIGH%>m NOMACT ;
!+Der4+Der/NomAct:â^VHIGH%>m FLAG_3LITTER ;

LEXICON EVEN_IND_PRS_ETTAD 
+Sg1:â^WG^VHIGH^RLEN%>m K ;
+Sg2:a^WG^VHIGH^RLEN%>h K ;
+Sg2+Err/Orth:â^WG^VHIGH^RLEN%>h K ;
+Sg3:á^CSH^VHIGH K ;       ! iätá (CSH tt-t), šadda, viggá
+Du1:e^CLEN%>en K ;
+Du2:â^CSH%>vettee K ; ! etâvettee (CSH) šoddâvettee, viggâvettee
+Du3:â^VHIGH%>v K ;
+Pl1:â%>p K ;
+Pl2:â^CSH^VHIGH%>vetteđ K ;
+Pl3:e^CSH%>h K ;  ! loheh


LEXICON EVEN_IMPRT_ETTAD 
+Sg2:â^WG^RLEN K ;
+Sg3:u^WG^VHIGH%>s K ;
+Du1:o^CLEN^VHIGH%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:u^CLEN^VHIGH%>s K ;
+Pl1:u^CLEN^VHIGH%>p K ;
+Pl2:â^VHIGH%>đ K ;
+Pl3:u^CLEN^VHIGH%>s K ;

LEXICON EVEN_POT_ETTAD 
+Sg1:e^WG^RLEN%>em K ;
+Sg2:e^WG^RLEN%>eh K ;
+Sg3:â^WG^VHIGH^RLEN%>š K ;
+Du1:â^WG^VHIGH%>žeen K ;
+Du2:â^WG^VHIGH^RLEN%>švettee K ;
+Du3:â^WG^VHIGH%>žává K ;
+Pl1:â^WG^VHIGH%>žep K ;
+Pl2:â^WG^VHIGH^RLEN%>švetteđ K ;
+Pl3:â^WG^VHIGH%>žeh K ;


!! #### LEXICON 2SYLL\_KAVNAD 
!! * 2SYLL_KAVNAD  as ETTAD as ETTAD but with VBACK kavnâđ kä^RVvn, only RV ä in stem tothis lexicon 57 verbs
!!     - Inf:
!!     - Ind+Prs+Sg3: kávná
!!     - Ind+Prs+Pl3: kävnih
!!     - ConNeg: kaavnâ
!!     - Ind+Prt+Sg1: kavnim
LEXICON 2SYLL_KAVNAD
+V: 2SYLL_KAVNAD_V ;
LEXICON 2SYLL_KAVNAD_IV
+V+IV: 2SYLL_KAVNAD_V ;
LEXICON 2SYLL_KAVNAD_TV
+V+TV: 2SYLL_KAVNAD_V ;

LEXICON 2SYLL_KAVNAD_V  
  VINFINITES_KAVNAD ;
+Ind: EVEN_IND_KAVNAD ;
+Cond+Prs:â^WG^VBACK%> EVEN_COND ;
+Pot+Prs: EVEN_POT_KAVNAD ;
+Imprt: EVEN_IMPRT_KAVNAD ;

+Der4+Der/InchL:â^WG^VBACK#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:âd^WG^VBACK 3_DERIVED_LOW ; !
+Der1+Der/st:âst^WG^VBACK 3_DERIVED_LOW ; !
+Der1+Der/tt:âtt^WG^VBACK 3_DERIVED_LOW ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L_CLEN ; ! kaččâliđ
:â^VBACK DER_MAS ;
+Der3+Der/Pass:u2  C_PASS_SH_RVSH ; !

LEXICON VINFINITES_KAVNAD  
+Inf:â^VBACK%>đ K ;

+Ind+Prs+ConNeg:â^WG^VBACK^RLEN K ;
+Ind+Prt+ConNeg:â^VBACK%>m K ;
+Cond+Prs+ConNeg:â^WG^VBACK%>ččii K ;
+Pot+Prs+ConNeg:i^WG^VBACK%>i3 K ;
+Imprt+ConNeg:â^WG^VBACK^RLEN K ;

+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+PrfPrc:â^VBACK%>m K ;
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ; !tobdee NB! pargee ok

+VAbess:â^WG^VBACK VABESS ;
+VGen:â^WG^VBACK^RLEN%>n VGEN ;

+Actio+Nom:â^VBACK%>m NOMACT ;
+Actio+Ill:â^VBACK%>mân K ;
+Actio+Loc:â^VBACK%>mist K ;
+Actio+Com:â^VBACK%>máin K ;
+Actio+Ess:â^VBACK%>min K ;
+Ger+PxSg1:â^WG^VBACK%>dijnân K ;
+Ger+PxSg2:â^WG^VBACK%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VBACK%>dijnes K ;
+Ger+PxSg3:â^WG^VBACK%>dijnis K ;
+Ger:â^WG^VBACK%>dijn K ;
+Der4+Der/NomAct:â^VBACK%>m FLAG_3LITTER ;

LEXICON EVEN_IND_KAVNAD  
+Prs+Sg1:â^WG^VBACK^RLEN%>m K ;
+Prs+Sg2:a^WG^VBACK^RLEN%>h K ;
+Prs+Sg2+Err/Orth:â^WG^VBACK^RLEN%>h K ;
+Prs+Sg3:á^VHIGH K ;       !
+Prs+Du1:e^CLEN%>en K ;
+Prs+Du2:â^VBACK%>vettee K ; !
+Prs+Du3:â^VBACK%>v K ;
+Prs+Pl1:â^VBACK%>p K ;
+Prs+Pl2:â^VBACK%>vetteđ K ;
+Prs+Pl3:i%>h K ;

+Prt+Sg1:i^VBACK%>m K ;
+Prt+Sg2:i^VBACK%>h K ;
+Prt+Sg3:â^WG^VBACK^RLEN%>i3 K ;
+Prt+Du1:á^WG^CLEN^VBACK%>im K ; ! KAVNAD RLEN
+Prt+Du2:á^WG^CLEN^VBACK%>id K ; ! KAVNAD RLEN
+Prt+Du3:á^WG^CLEN^VBACK%>in K ; ! KAVNAD RLEN
+Prt+Pl1:â^WG^VBACK^RLEN%>im K ;
+Prt+Pl2:â^WG^VBACK^RLEN%>id K ;
+Prt+Pl3:i^CLEN^VBACK%>i3 K ;

LEXICON EVEN_POT_KAVNAD 
+Sg1:e^WG^CLEN%>em K ;
+Sg2:e^WG^CLEN%>eh K ;
+Sg3:â^WG^VBACK^RLEN%>š K ;
+Du1:â^WG^VBACK%>žeen K ;
+Du2:â^WG^VBACK^RLEN%>švettee K ;
+Du3:â^WG^VBACK%>žává K ;
+Pl1:â^WG^VBACK%>žep K ;
+Pl2:â^WG^VBACK^RLEN%>švetteđ K ;
+Pl3:â^WG^VBACK%>žeh K ;

LEXICON EVEN_IMPRT_KAVNAD  
+Sg2:â^WG^VBACK^RLEN K ;
+Sg3:u^WG^VHIGH^RLEN%>s K ;
+Du1:o^CLEN^VHIGH%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:u^CLEN^VHIGH%>s K ;
+Pl1:u^CLEN^VHIGH%>p K ;
+Pl2:â^VBACK%>đ K ;
+Pl3:u^CLEN^VHIGH%>s K ;


!! #### LEXICON 2SYLL\_KALGAD (only TV)
!! * 2SYLL_KALGAD kalgâđ
!!     - Inf:
!!     - Ind+Prs+Sg3:  kálgá
!!     - Ind+Prs+Pl3: kälgih
!!     - ConNeg: kaalgâ
!!     - Ind+Prt+Sg1: kalgim
LEXICON 2SYLL_KALGAD_TV  ! Only one verb: kalgâđ Ind+Prs+Pl3 kälgih, vs. kävneh 2SYLL_KAVNAD
+V+TV:  VINFINITES_KALGAD ;
+V+TV+Ind: EVEN_IND_KALGAD ;
+V+TV+Cond+Prs:â^WG^VBACK%> EVEN_COND ;
+V+TV+Pot+Prs: EVEN_POT_KALGAD ;
+V+TV+Imprt: EVEN_IMPRT_KALGAD ;
+V+TV+Der4+Der/InchL:â^WG^VBACK#škyett4 4SYLL_KYETTID_DER ;
+V+TV+Der1+Der/d:âd^WG 3_DERIVED_VBACK ; !
+V+TV+Der1+Der/st:âst^WG 3_DERIVED_VBACK ; ! Former: 3_DERIVED, does noet work
+V+TV+Der1+Der/tt:âtt^WG 3_DERIVED_VBACK ; !
!DERL+V+TV+Der1+Der/l:âl 3_DERIVED_L_CLEN ;
+V+TV:â^VBACK DER_MAS ;
+V+TV+Der3+Der/Pass:u2^CLEN C_PASS_SH_COMMON ; ! ! Added ^VBACK

LEXICON VINFINITES_KALGAD 
+Inf:â^VBACK%>đ K ;
+Ind+Prs+ConNeg:â^WG^VBACK^RLEN K ;
+Ind+Prt+ConNeg:â^VBACK%>m K ;
+Cond+Prs+ConNeg:â^WG^VBACK%>ččii K ;
+Pot+Prs+ConNeg:i^WG^VBACK%>i3 K ;
+Imprt+ConNeg:â^WG^VBACK^RLEN K ;
+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+PrfPrc:â^VBACK%>m K ;
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ;

+VAbess:â^WG^VBACK VABESS ;
+VGen:â^WG^VBACK^RLEN%>n VGEN ;

+Actio+Nom:â^VBACK%>m NOMACT ;
+Actio+Ill:â^WG^VBACK%>mân K ;
+Actio+Loc:â^WG^VBACK%>mist K ;
+Actio+Com:â^WG^VBACK%>máin K ;
+Actio+Ess:â^WG^VBACK%>min K ;
+Ger+PxSg1:â^WG^VBACK%>dijnân K ;
+Ger+PxSg2:â^WG^VBACK%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VBACK%>dijnes K ;
+Ger+PxSg3:â^WG^VBACK%>dijnis K ;
+Ger:â^WG^VBACK%>dijn K ;
+Der4+Der/NomAct:â^VBACK%>m FLAG_3LITTER ;

LEXICON EVEN_IND_KALGAD 
+Prs+Sg1:â^WG^VBACK^RLEN%>m K ;
+Prs+Sg2:a^WG^VBACK^RLEN%>h K ;
+Prs+Sg2+Err/Orth:â^WG^VBACK^RLEN%>h K ;
+Prs+Sg3:á^WG^VHIGH K ;       !
!+Prs+Sg3:á^CSH K ;       !
+Prs+Du1:e^CLEN%>en K ;
+Prs+Du2:â^CSH^VBACK%>vettee K ; !
+Prs+Du3:â^VBACK%>v K ;
+Prs+Pl1:â^VBACK%>p K ;
+Prs+Pl2:â^CSH^VBACK%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;  ! loheh
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i^VBACK%>m K ;
+Prt+Sg2:i^VBACK%>h K ;
+Prt+Sg3:â^WG^VBACK^RLEN%>i3 K ;
+Prt+Du1:á^WG^VBACK%>im K ; !
+Prt+Du2:á^WG^VBACK%>id K ; !
+Prt+Du3:á^WG^VBACK%>in K ; !
+Prt+Pl1:â^WG^VBACK^RLEN%>im K ;
+Prt+Pl2:â^WG^VBACK^RLEN%>id K ;
+Prt+Pl3:i^CLEN^VBACK%>i3 K ;

LEXICON EVEN_POT_KALGAD
+Sg1:e^WG%>em K ;
+Sg2:e^WG%>eh K ;
+Sg3:â^WG^VBACK^RLEN%>š K ;
+Du1:â^WG^VBACK%>žeen K ;
+Du2:â^WG^VBACK^RLEN%>švettee K ;
+Du3:â^WG^VBACK%>žává K ;
+Pl1:â^WG^VBACK%>žep K ;
+Pl2:â^WG^VBACK^RLEN%>švetteđ K ;
+Pl3:â^WG^VBACK%>žeh K ;

LEXICON EVEN_IMPRT_KALGAD 
+Sg2:â^WG^VBACK^RLEN K ;
+Sg3:u^WG^VHIGH^RLEN%>s K ;
+Du1:o^CLEN^VHIGH%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:u^CLEN^VHIGH%>s K ;
+Pl1:u^CLEN^VHIGH%>p K ;
+Pl2:â^VBACK%>đ K ;
+Pl3:u^CLEN^VHIGH%>s K ;

!! #### LEXICON 2SYLL\_KOLGAD 
LEXICON 2SYLL_KOLGAD_IV ! auxiliary verb with restricted paradigm
+V+IV: VINFINITES_COGGAD ; ! Todo: restrict these
+V+IV+Ind: EVEN_IND_COGGAD ;
+V+IV+Cond+Prs:â^WG EVEN_COND_COGGAD ;
+V+IV+Pot+Prs: EVEN_POT_COGGAD ;
! +V+IV+Imprt: EVEN_IMPRT_COGGAD ;
! +V+IV+Der4+Der/InchL:â^WG^VHIGH#škyett4 4SYLL_KYETTID_DER ;
! +V+IV+Der1+Der/d:âd^WG 3_DERIVED ; !
! +V+IV+Der1+Der/st:âst^WG 3_DERIVED ; !
! +V+IV+Der1+Der/tt:âtt^WG 3_DERIVED ; !


!! #### LEXICON 2SYLL\_COGGAD 
!! * 2SYLL_COGGAD kolgâđ ka^RVlg
!!     - Inf:
!!     - Ind+Prs+Sg3: kalga
!!     - Ind+Prs+Pl3: kalgeh
!!     - ConNeg: koolgâ
!!     - Ind+Prt+Sg1: kolgim
LEXICON 2SYLL_COGGAD
+V: 2SYLL_COGGAD_V ;
LEXICON 2SYLL_COGGAD_IV
+V+IV: 2SYLL_COGGAD_V ;
LEXICON 2SYLL_COGGAD_TV
+V+TV: 2SYLL_COGGAD_V ;

LEXICON 2SYLL_COGGAD_V  ! 18 verbs
VINFINITES_COGGAD ;
+Ind: EVEN_IND_COGGAD ;
+Cond+Prs:â^WG EVEN_COND_COGGAD ;
+Pot+Prs: EVEN_POT_COGGAD ;
+Imprt: EVEN_IMPRT_COGGAD ;
+Der4+Der/InchL:â^WG^VHIGH#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:âd^WG 3_DERIVED ; !
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:â^VHIGH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !

LEXICON VINFINITES_COGGAD  !
+Inf:â^VHIGH%>đ K ;
+Ind+Prs+ConNeg:â^WG^VHIGH^RLEN K ;
+Ind+Prt+ConNeg:â^VHIGH%>m K ;
+Cond+Prs+ConNeg:â^WG^VHIGH%>ččii K ;
+Pot+Prs+ConNeg:i^WG^VHIGH%>i3 K ;
+Imprt+ConNeg:â^WG^VHIGH^RLEN K ;
+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+PrfPrc:â^VHIGH%>m K ;
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ;

+VAbess:â^WG^VHIGH VABESS ;
+VGen:â^WG^VHIGH^RLEN%>n VGEN ;

+Actio+Nom:â^VHIGH%>m NOMACT ;
+Actio+Ill:â^VHIGH%>mân K ;
+Actio+Loc:â^VHIGH%>mist K ;
+Actio+Com:â^VHIGH%>máin K ;
+Actio+Ess:â^VHIGH%>min K ;
+Ger+PxSg1:â^WG^VHIGH%>dijnân K ;
+Ger+PxSg2:â^WG^VHIGH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VHIGH%>dijnes K ;
+Ger+PxSg3:â^WG^VHIGH%>dijnis K ;
+Ger:â^WG^VHIGH%>dijn K ;
+Der4+Der/NomAct:â^VHIGH%>m FLAG_3LITTER ;

LEXICON EVEN_IND_COGGAD  !
+Prs+Sg1:â^WG^VHIGH^RLEN%>m K ;
+Prs+Sg2:a^WG^VHIGH^RLEN%>h K ;
+Prs+Sg2+Err/Orth:â^WG^VHIGH^RLEN%>h K ;
+Prs+Sg3:a K ;       !
+Prs+Sg3+Err/Orth:â K ;       !
+Prs+Du1:e%>en K ;
+Prs+Du2:â^VHIGH%>vettee K ; !
+Prs+Du3:â^VHIGH%>v K ;
+Prs+Pl1:â^VHIGH%>p K ;
+Prs+Pl2:â^VHIGH%>vetteđ K ;
+Prs+Pl3:e%>h K ;  !

+Prt+Sg1:i^VHIGH%>m K ;
+Prt+Sg2:i^VHIGH%>h K ;
+Prt+Sg3:â^WG^VHIGH^RLEN%>i3 K ; ! koolgâi
+Prt+Sg3+Err/Orth:â^WG^VHIGH%>i3 K ; ! kolgâi (wrong)
+Prt+Du1:á^WG^VHIGH%>im K ; !
+Prt+Du2:á^WG^VHIGH%>id K ; !
+Prt+Du3:á^WG^VHIGH%>in K ; !
+Prt+Pl1:â^WG^VHIGH^RLEN%>im K ;
+Prt+Pl2:â^WG^VHIGH^RLEN%>id K ;
+Prt+Pl3:i^CLEN^VHIGH%>i3 K ;

LEXICON EVEN_COND_COGGAD !
+Sg1:^VHIGH%>čč%>im K ;
+Sg2:^VHIGH%>čč%>ih K ;
+Sg3:^VHIGH%>čč%>ij K ;
+Du1:^VHIGH%>čč%>áim K ;
+Du2:^VHIGH%>čč%>áid K ;
+Du3:^VHIGH%>čč%>áin K ;
+Pl1:^VHIGH%>čč%>ijm K ;
+Pl2:^VHIGH%>čč%>ijd K ;
+Pl3:^VHIGH%>čč%>ii K ;

LEXICON EVEN_POT_COGGAD !
+Sg1:e^WG^CLEN%>em K ;
+Sg2:e^WG^CLEN%>eh K ;
+Sg3:â^WG^VHIGH^RLEN%>š K ;
+Du1:â^WG^VHIGH%>žeen K ;
+Du2:â^WG^VHIGH^RLEN%>švettee K ;
+Du3:â^WG^VHIGH%>žává K ;
+Pl1:â^WG^VHIGH%>žep K ;
+Pl2:â^WG^VHIGH^RLEN%>švetteđ K ;
+Pl3:â^WG^VHIGH%>žeh K ;

LEXICON EVEN_IMPRT_COGGAD !
+Sg2:â^WG^VHIGH^RLEN K ;
+Sg2:â^WG^RLEN K ;
+Sg3:u^WG%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:u^CLEN%>s K ;
+Pl1:u^CLEN%>p K ;
+Pl2:â^VHIGH%>đ K ;
+Pl3:o^CLEN%>os K ;



!! #### LEXICON 2SYLL\_KULGAD 
!! * 2SYLL_KULGAD kulgâđ ko^RVlg
!!     - Inf:
!!     - Ind+Prs+Sg3: kolgá
!!     - Ind+Prs+Pl3: kolgeh
!!     - ConNeg: kuulgâ
!!     - Ind+Prt+Sg1: kulgim
LEXICON 2SYLL_KULGAD
+V: 2SYLL_KULGAD_V ;
LEXICON 2SYLL_KULGAD_IV
+V+IV: 2SYLL_KULGAD_V ;
LEXICON 2SYLL_KULGAD_TV
+V+TV: 2SYLL_KULGAD_V ;

LEXICON 2SYLL_KULGAD_V   ! 55 verbs

!! Distinct from SODDAD with short vowel in past tense (du)
!! Turns out it was not distinct after all. Preper for fusing KULGAD and SODDAD

VINFINITES_SODDAD ;
+Ind+Prs: EVEN_PRS_SODDAD ;
+Ind+Prt: EVEN_PRT_SODDAD ;
+Cond+Prs:â^WG^VHIGH%> EVEN_COND ;
+Pot+Prs: EVEN_POT_SODDAD ;
+Imprt: EVEN_IMPRT_SODDAD ;
+Der4+Der/InchL:â^WG^VHIGH#škyett4 4SYLL_KYETTID_DER ; !porgâ#škyettiđ
+Der1+Der/d:âd^WG 3_DERIVED ; !
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L_CLEN ; ! ML: No Der/l for the SODDAD verbs
:â^VHIGH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; ! or perhaps: C_PASS_SH ; !porgui ostui

!LEXICON EVEN_PRT_KULGAD !!≈ ** **@CODE@**
!+Sg1:i^VHIGH%>m K ;
!+Sg2:i^VHIGH%>h K ;
!+Sg3:â^WG^VHIGH^RLEN%>i3 K ;
!+Du1:á^WG^CLEN^VHIGH%>im K ; ! SODDAD RLEN
!+Du2:á^WG^CLEN^VHIGH%>id K ; ! SODDAD RLEN
!+Du3:á^WG^CLEN^VHIGH%>in K ; ! SODDAD RLEN
!+Pl1:â^WG^VHIGH^RLEN%>im K ;
!+Pl2:â^WG^VHIGH^RLEN%>id K ;
!+Pl3:i^CLEN^VHIGH%>i3 K ;

!! #### LEXICON 2SYLL\_SODDAD 
!! * 2SYLL_SODDAD šoddâđ ša^RVdd
!!     - Inf:
!!     - Ind+Prs+Sg3: šadda
!!     - Ind+Prs+Pl3: šaddeh
!!     - ConNeg: šoodâ
!!     - Ind+Prt+Sg1: šoddim
LEXICON 2SYLL_SODDAD
+V: 2SYLL_SODDAD_V ;
LEXICON 2SYLL_SODDAD_IV
+V+IV: 2SYLL_SODDAD_V ;
!LEXICON 2SYLL_SODDAD_TV
!+V+TV: 2SYLL_SODDAD_V ;
LEXICON 2SYLL_SODDAD_V  ! 6 verbs

! kalgâđ | kaalgâm | á-á  | kälgih  | kalgim | kä^RVlg
! šoddâđ | šoodâm  | a-a  | šaddeh  | šoddim | ša^RVdd
! kulgâđ | kuulgâm | o-á  | kolgeh  | kulgim | ko^RVlg
! ä>a, a>o, o>u

VINFINITES_SODDAD ;
+Ind+Prs: EVEN_PRS_SODDAD ;
+Ind+Prt: EVEN_PRT_SODDAD ;
+Cond+Prs:â^WG^VHIGH%> EVEN_COND ;
+Pot+Prs: EVEN_POT_SODDAD ;
+Imprt: EVEN_IMPRT_SODDAD ;
+Der4+Der/InchL:â^WG^VHIGH#škyett4 4SYLL_KYETTID_DER ; !porgâ#škyettiđ
+Der1+Der/d:âd^WG 3_DERIVED ; !
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L ; ! Note: See comment in 2SYLL_KULGAD "No Der/l for SODDAD..
:â^VHIGH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !

LEXICON VINFINITES_SODDAD  
+Inf:â^VHIGH%>đ K ;
+Ind+Prs+ConNeg:â^WG^VHIGH^RLEN K ;
+Ind+Prt+ConNeg:â^VHIGH%>m K ;
+Cond+Prs+ConNeg:â^WG^VHIGH%>ččii K ;
+Pot+Prs+ConNeg:i^VHIGH%>i5 K ;
+Imprt+ConNeg:â^WG^VHIGH^RLEN K ;
+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+PrfPrc:â^VHIGH%>m K ;
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ;

+VAbess:â^WG^VHIGH VABESS ;
+VGen:â^WG^VHIGH^RLEN%>n VGEN ;

+Actio+Nom:â^VHIGH%>m NOMACT ;
+Actio+Ill:â^VHIGH%>mân K ;
+Actio+Loc:â^VHIGH%>mist K ;
+Actio+Com:â^VHIGH%>máin K ;
+Actio+Ess:â^VHIGH%>min K ;
+Ger+PxSg1:â^WG^VHIGH%>dijnân K ;
+Ger+PxSg2:â^WG^VHIGH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VHIGH%>dijnes K ;
+Ger+PxSg3:â^WG^VHIGH%>dijnis K ;
+Ger:â^WG^VHIGH%>dijn K ;
+Der4+Der/NomAct:â^VHIGH%>m FLAG_3LITTER ;

LEXICON EVEN_PRS_SODDAD 
+Sg1:â^WG^VHIGH^RLEN%>m K ;
+Sg2:a^WG^VHIGH^RLEN%>h K ;
+Sg3:á K ;       ! iätá (CSH tt-t), šadda, viggá
+Sg3+Err/Orth:á^CSH K ;
+Sg3+Err/Orth:â^CSH K ;
+Sg3+Err/Orth:â K ;
+Du1:e^CLEN%>en K ;
+Du2:â^VHIGH^RVSH%>vettee K ; ! etâvettee (CSH) šoddâvettee, viggâvettee
+Du3:â^VHIGH%>v K ;
+Pl1:â^VHIGH%>p K ;
+Pl2:â^VHIGH^RVSH%>vetteđ K ;
+Pl3:e%>h K ;  ! loheh

LEXICON EVEN_PRT_SODDAD 
+Sg1:i^VHIGH%>m K ;
+Sg2:i^VHIGH%>h K ;
+Sg3:â^WG^VHIGH^RLEN%>i3 K ;
+Du1:á^WG^VHIGH%>im K ; ! SODDAD not RLEN
+Du2:á^WG^VHIGH%>id K ; ! SODDAD not RLEN
+Du3:á^WG^VHIGH%>in K ; ! SODDAD not RLEN
+Pl1:â^WG^VHIGH^RLEN%>im K ;
+Pl2:â^WG^VHIGH^RLEN%>id K ;
+Pl3:i^CLEN^VHIGH%>i3 K ;


LEXICON EVEN_POT_SODDAD 
+Sg1:e^WG^CLEN%>em K ;
+Sg2:e^WG^CLEN%>eh K ;
+Sg3:â^WG^VHIGH^RLEN%>š K ;
+Du1:â^WG^VHIGH%>žeen K ;
+Du2:â^WG^VHIGH^RLEN%>švettee K ;
+Du3:â^WG^VHIGH%>žává K ;
+Pl1:â^WG^VHIGH%>žep K ;
+Pl2:â^WG^VHIGH^RLEN%>švetteđ K ;
+Pl3:â^WG^VHIGH%>žeh K ;

LEXICON EVEN_IMPRT_SODDAD 
+Sg2:â^WG^VHIGH^RLEN K ;
+Sg3:o^WG%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:o^CLEN%>os K ;
+Pl1:o^CLEN%>p K ;
+Pl2:â^VHIGH%>đ K ;
+Pl3:o^CLEN%>os K ;


!! #### LEXICON 2SYLL\_TOOLLAD (12 verbs)
!! * 2SYLL_TOOLLAD - toollâđ,  tuáll
!!     - Inf:â^VBACK%>đ
!!     - Ind+Prs+Sg3: tuálá, á^CSH
!!     - Ind+Prs+Pl3:i^CSH%>h tuálih, rvow like Sg3
!!     - ConNeg:â^WG^VHIGH^RLEN rvow like Sg3
!!     - Prt+Sg1:i^VBACK^RLEN%>m toollim
LEXICON 2SYLL_TOOLLAD
+V: 2SYLL_TOOLLAD_V ;
LEXICON 2SYLL_TOOLLAD_IV
+V+IV: 2SYLL_TOOLLAD_V ;
LEXICON 2SYLL_TOOLLAD_TV
+V+TV: 2SYLL_TOOLLAD_V ;

LEXICON 2SYLL_TOOLLAD_V  
! suggested stem = tuáll
!Impossible to see the differences in diphtong length

VINFINITES_TOOLLAD ; ! same as in MOONNAD
+Ind: EVEN_IND_TOOLLAD ; ! should be separated from MOONNAD
+Cond+Prs:â^WG^VBACK%> EVEN_COND ;
+Pot+Prs: EVEN_POT_TOOLLAD ;
+Imprt: EVEN_IMPRT_TOOLLAD ;
+Der4+Der/InchL:â^WG^VBACK^RVSH#škyett4 4SYLL_KYETTID_DER ; ! tolâškuáđám
+Der1+Der/d:âd^WG^VBACK 3_DERIVED_LOW ; !
+Der1+Der/st:âst^WG^VBACK 3_DERIVED_LOW ;
+Der1+Der/tt:âtt^WG^VBACK 3_DERIVED_LOW ; !
!DERL+Der1+Der/l:âl^WG 3_DERIVED_L_CLEN ;
:â^CSH^VBACK^RVSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH ; ! ? !tolluđ, tollui

LEXICON VINFINITES_TOOLLAD 
+Inf:â^VBACK%>đ K ;
+Ind+Prs+ConNeg:â^WG^VBACK^RLEN K ;
+Ind+Prt+ConNeg:â^VBACK^RLEN%>m K ;
+Cond+Prs+ConNeg:â^WG^VBACK%>ččii K ;
+Pot+Prs+ConNeg:i^WG^VBACK^RLEN%>i3 K ;
+Imprt+ConNeg:â^WG^RLEN K ;
+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+PrfPrc:â^VBACK^RLEN%>m K ; !toollâm
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ;

+VAbess:â^WG^VBACK^RVSH VABESS ;
+VGen:â^WG^VBACK^RLEN%>n VGEN ;

+Actio+Nom:â^VBACK^RLEN%>m NOMACT ;
+Actio+Ill:â^CSH^VBACK^RVSH%>mân K ;
+Actio+Loc:â^CSH^VBACK^RVSH%>mist K ;
+Actio+Com:â^CSH^VBACK^RVSH%>máin K ;
+Actio+Com+Err/Orth:â^CSH^VBACK^RVSH%>mijn K ;
+Actio+Ess:â^CSH^VBACK^RVSH%>min K ;
+Ger+PxSg1:â^WG^VBACK^RVSH%>dijnân K ;
+Ger+PxSg2:â^WG^VBACK^RVSH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VBACK%>dijnes K ;
+Ger+PxSg3:â^WG^VBACK^RVSH%>dijnis K ;
+Ger:â^WG^VBACK^RVSH%>dijn K ;
+Der4+Der/NomAct:â^VBACK^RLEN%>m FLAG_3LITTER ;

LEXICON EVEN_IND_TOOLLAD  
+Prs+Sg1:â^WG^VBACK%>m K ;            ! toolâm ! uá > o
+Prs+Sg2:a^WG^VBACK%>h K ;            ! toolah
+Prs+Sg3:á^CSH K ;       		      ! tuálá
+Prs+Du1:e%>en K ;  			      ! tuálleen
+Prs+Du2:â^CSH^VBACK^RVSH%>vettee K ; ! tolâvettee
+Prs+Du3:â^VBACK^RLEN%>v K ;          ! toollâv
+Prs+Pl1:â^VBACK%>p K ;  ! toollâp
+Prs+Pl2:â^CSH^VBACK^RVSH%>vetteđ K ; ! tolâvetteđ
+Prs+Pl3:i^CSH%>h K ;                 ! tuálih
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i^VBACK^RLEN%>m K ;		! toollim
+Prt+Sg2:i^VBACK^RLEN%>h K ;		! toollih
+Prt+Sg3:â^WG^VBACK^RLEN%>i K ;		! toolâi
+Prt+Du1:á^WG^VBACK^RLEN%>im K ;    ! tooláim
+Prt+Du2:á^WG^VBACK^RLEN%>id K ;    ! tooláid
+Prt+Du3:á^WG^VBACK^RLEN%>in K ;	! tooláin
+Prt+Pl1:â^WG^VBACK^RLEN%>im K ;	! toolâim
+Prt+Pl2:â^WG^VBACK^RLEN%>id K ;	! toolâid
+Prt+Pl3:i^VBACK^RVSH%>i5 K ;			! tollii

LEXICON EVEN_POT_TOOLLAD 
+Sg1:e^WG%>em K ;                 ! tuáleem
+Sg2:e^WG%>eh K ;                 ! tuáleeh
+Sg3:â^WG^VBACK%>š K ;            ! toolâš
+Du1:â^WG^VBACK^RVSH%>žeen K ;    ! tolâžeen
+Du2:â^WG^VBACK^RLEN%>švettee K ; ! toolâšvettee
+Du3:â^WG^VBACK^RVSH%>žává K ;    ! tolâžává
+Pl1:â^WG^VBACK^RVSH%>žep K ;     ! tolâžep
+Pl2:â^WG^VBACK^RLEN%>švetteđ K ; ! toolâšvetteđ
+Pl3:â^WG^VBACK^RVSH%>žeh K ;     ! tolâžeh

LEXICON EVEN_IMPRT_TOOLLAD  
+Sg2:â^WG^VBACK K ;      ! toolâ
+Sg3:u^WG%>s K ;         ! tuálus
+Du1:o^RVSH%>on K ;      ! tuálloon
+Du2:e^RVSH%>e K ; 		 ! tuállee
+Du3:u%>s K ; 	         ! tuállus
+Pl1:u%>p K ;	         ! tuállup
+Pl2:â^VBACK^RLEN%>đ K ; ! toollâđ
+Pl3:u^RLEN%>s K ;       ! tuállus


!! #### LEXICON 2SYLL\_OPPAD 
!! * 2SYLL_OPPAD oppâđ uápp
!!     - Inf:
!!     - Ind+Prs+Sg3: uáppá
!!     - Ind+Prs+Pl3: uáppih
!!     - ConNeg: oopâ
!!     - Ind+Prt+Sg1: oppim
!!     - Der/InchL: opâškyettiđ
LEXICON 2SYLL_OPPAD
+V: 2SYLL_OPPAD_V ;
LEXICON 2SYLL_OPPAD_IV
+V+IV: 2SYLL_OPPAD_V ;
LEXICON 2SYLL_OPPAD_TV
+V+TV: 2SYLL_OPPAD_V ;

LEXICON 2SYLL_OPPAD_V  
!! suggested stem = tuáll
!! Impossible to see the differences in diphtong length

VINFINITES_OPPAD ; ! same as in MOONNAD, root vow: -uá- 
+Ind: EVEN_IND_OPPAD ; ! should be separated from MOONNAD
+Cond+Prs:â^WG^VBACK^RVSH%> EVEN_COND ;
+Pot+Prs: EVEN_POT_OPPAD ;
+Imprt: EVEN_IMPRT_OPPAD ;
+Der4+Der/InchL:â^WG^VBACK^RVSH%>škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:â^WG%>d 3_KUIKETTID ; !
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:â^VBACK^RVSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RLEN ; ! ?

LEXICON VINFINITES_OPPAD   
+Inf:â^VBACK^RVSH%>đ K ;
!+Ind+Prs+ConNeg:â^WG^VBACK^RLEN K ;
+Ind+Prs+ConNeg:â^WG^VBACK K ;
+Ind+Prt+ConNeg:â^VBACK^RVSH%>m K ;
+Cond+Prs+ConNeg:â^WG^VBACK^RVSH%>ččii K ;
+Pot+Prs+ConNeg:i^VBACK^RVSH%>i3 K ;
+Imprt+ConNeg:â^WG^VBACK^RLEN K ;
+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+PrfPrc:â^VBACK^RVSH%>m K ;
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ;

+VAbess:â^WG^VBACK^RVSH VABESS ;
+VGen:â^WG^VBACK^RLEN%>n VGEN ;

+Actio+Nom:â^VBACK^RVSH%>m NOMACT ; ! oppâm
+Actio+Ill:â^VBACK^RVSH%>mân K ;
+Actio+Loc:â^VBACK^RVSH%>mist K ;
+Actio+Com:â^VBACK^RVSH%>máin K ;
+Actio+Ess:â^VBACK^RVSH%>min K ;
+Ger+PxSg1:â^WG^VBACK^RVSH%>dijnân K ;
+Ger+PxSg2:â^WG^VBACK^RVSH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VBACK^RVSH%>dijnes K ;
+Ger+PxSg3:â^WG^VBACK^RVSH%>dijnis K ;
+Ger:â^WG^VBACK^RVSH%>dijn K ;
+Der4+Der/NomAct:â^VBACK^RVSH%>m FLAG_3LITTER ;

LEXICON EVEN_IND_OPPAD   
+Prs+Sg1:â^WG^VBACK^RLEN%>m K ;    	! toolâm ! uá > o
+Prs+Sg2:a^WG^VBACK^RLEN%>h K ;     ! toolah
+Prs+Sg3:á K ;       		! uáppá
+Prs+Du1:e%>en K ;  			! tuálleen
+Prs+Du2:â^VBACK^RVSH%>vettee K ; 	! oppâvettee
+Prs+Du3:â^VBACK^RVSH%>v K ;         ! oppâv
+Prs+Pl1:â^VBACK^RVSH%>p K ;  ! oppâp
+Prs+Pl2:â^VBACK^RVSH%>vetteđ K ; 	 ! oppâvetteđ
+Prs+Pl3:i%>h K ;           ! uáppih

+Prt+Sg1:i^VBACK^RVSH%>m K ;				! oppim
+Prt+Sg2:i^VBACK^RVSH%>h K ;				! oppih
+Prt+Sg3:â^WG^VBACK^RLEN%>i K ;			! oopâi
+Prt+Du1:á^WG^VBACK^RLEN%>im K ; ! oopáim
+Prt+Du2:á^WG^VBACK^RLEN%>id K ; ! oopáid
+Prt+Du3:á^WG^VBACK^RLEN%>in K ;	! oopáin
+Prt+Pl1:â^WG^VBACK^RLEN%>im K ;	! oopáim
+Prt+Pl2:â^WG^VBACK^RLEN%>id K ;	! oopáid
+Prt+Pl3:i^VBACK^RVSH%>i5 K ;			! tollii

LEXICON EVEN_POT_OPPAD 
+Sg1:e^WG^CLEN%>em K ; ! uáppeem, suáđheem
+Sg2:e^WG^CLEN%>eh K ; ! uáppeeh, suáđheeh
+Sg3:â^WG^VBACK%>š K ; ! toolâš
+Du1:â^WG^VBACK^RVSH%>žeen K ; ! tolâžeen
+Du2:â^WG^VBACK^RLEN%>švettee K ; ! toolâšvettee
+Du3:â^WG^VBACK^RVSH%>žává K ; ! tolâžává
+Pl1:â^WG^VBACK^RVSH%>žep K ; ! tolâžep
+Pl2:â^WG^VBACK^RLEN%>švetteđ K ; ! toolâšvetteđ
+Pl3:â^WG^VBACK^RVSH%>žeh K ; ! tolâžeh

LEXICON EVEN_IMPRT_OPPAD  
+Sg2:â^WG^VBACK K ; ! toolâ
+Sg3:u^WG%>s K ; ! tuálus
+Du1:o^RVSH%>on K ; ! tuálloon
+Du2:e^RVSH%>e K ; 		! tuállee
+Du3:u%>s K ; 	! tuállus
+Pl1:u%>p K ;	! tuállup
+Pl2:â^VBACK^RVSH%>đ K ; ! oppâđ
+Pl3:u^RLEN%>s K ; ! tuállus



!! #### LEXICON 2SYLL\_TOOHAD 38 verbs
!! * 2SYLL_TOOHAD - toohâđ, ta^RVh^RC
!!     - Inf: = 2SYLL_MOONNAD
!!     - Ind+Prs+Sg3:á^CSH taha,
!!     - Ind+Prs+Pl3:e^CSH%>h taheh, rvow like Sg3
!!     - Ind+Prt+Sg3:â^WG^VHIGH^RLEN%>i  juuvâi
!!     - ConNeg: rvow like Inf = 2SYLL_MOONNAD
!!     - Ind+Prt+Sg1: toohim = 2SYLL_MOONNAD
LEXICON 2SYLL_TOOHAD
+V: 2SYLL_TOOHAD_V ;
LEXICON 2SYLL_TOOHAD_IV
+V+IV: 2SYLL_TOOHAD_V ;
LEXICON 2SYLL_TOOHAD_TV
+V+TV: 2SYLL_TOOHAD_V ;

LEXICON 2SYLL_TOOHAD_V  

VINFINITES_MOONNAD ; !po^RVrr
+Ind: EVEN_IND_TOOHAD ;
+Pot+Prs: EVEN_POT_TOOHAD ;
+Cond+Prs:â^WG^VHIGH%> EVEN_COND ;
+Imprt: EVEN_IMPRT_MOONNAD ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ;   ! prfprc tohhum, tahhoo always CLEN, RVSH
+Der3+Der/Pass+Use/NG:u2 C_PASS_SH_ALTERNATE ; ! prfprc: toohum, tahhoo ta^RVh^RC â^VHIGH^RLEN%>đ
+Der1+Der/d:âd^WG^VBACK 3_DERIVED_LOW ; ! pu^RVrâd vs po^RVrr, luvâdiđ
+Der1+Der/st:âst^WG^VBACK 3_DERIVED ; ! purâstiđ
+Der1+Der/tt:âtt^WG^VBACK 3_DERIVED ; ! purâttiđ
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:â^VHIGH DER_MAS ;
+Der4+Der/InchL:â^WG^VHIGH#škyett4 4SYLL_KYETTID_DER ; ! luvâ#škyettiđ polâ#škyettiđ rosâ#škyettiđ

LEXICON EVEN_IND_TOOHAD 
+Prs+Sg1:â^WG^VHIGH^RLEN%>m K ;
+Prs+Sg2:a^WG^VHIGH^RLEN%>h K ;
+Prs+Sg3:á^CSH K ;
+Prs+Du1:e^CLEN%>en K ;
+Prs+Du2:â^CSH^VHIGH%>vettee K ;
+Prs+Du3:â^VHIGH^RLEN%>v K ;
+Prs+Pl1:â^VHIGH^RLEN%>p K ;
+Prs+Pl2:â^CSH^VHIGH%>vetteđ K ;
+Prs+Pl3:e^CSH%>h K ;             ! loheh

+Prt+Sg1:i^VHIGH^RLEN%>m K ;
+Prt+Sg2:i^VHIGH^RLEN%>h K ;
+Prt+Sg3:â^WG^VHIGH^RLEN%>i K ;
+Prt+Du1:á^WG^CLEN^VHIGH%>im K ;
+Prt+Du2:á^WG^CLEN^VHIGH%>id K ;
+Prt+Du3:á^WG^CLEN^VHIGH%>in K ;
+Prt+Pl1:â^WG^VHIGH^RLEN%>im K ;
+Prt+Pl2:â^WG^VHIGH^RLEN%>id K ;
+Prt+Pl3:i^CLEN^VHIGH%>i3 K ;


LEXICON EVEN_POT_TOOHAD 
+Sg1:e^CLEN%>em K ;
+Sg2:e^CLEN%>eh K ;
+Sg3:â^WG^VHIGH^RLEN%>š K ;
+Du1:â^WG^VHIGH%>žeen K ;
+Du2:â^WG^VHIGH^RLEN%>švettee K ;
+Du3:â^WG^VHIGH%>žává K ;
+Pl1:â^WG^VHIGH%>žep K ;
+Pl2:â^WG^VHIGH^RLEN%>švetteđ K ;
+Pl3:â^WG^VHIGH%>žeh K ;

!! #### LEXICON 2SYLL\_MMOONNAD 24 verbs
!! * 2SYLL_MOONNAD - moonnâđ ma^RVnn
!!     - Inf:â^VHIGH^RLEN%>đ (functions also for ääss)
!!     - Ind+Prs+Sg3:á^CSH mana,
!!     - Ind+Prs+Pl3:e^CSH%>h maneh, rvow like Sg3
!!     - ConNeg:â^WG^VHIGH^RLEN rvow like Inf
!!     - Ind+Prt+Sg1:i^VHIGH^RLEN%>m moonnim
LEXICON 2SYLL_MOONNAD
+V: 2SYLL_MOONNAD_V ;
LEXICON 2SYLL_MOONNAD_IV
+V+IV: 2SYLL_MOONNAD_V ;
LEXICON 2SYLL_MOONNAD_TV
+V+TV: 2SYLL_MOONNAD_V ;

LEXICON 2SYLL_MOONNAD_V  

VINFINITES_MOONNAD ;
+Ind: EVEN_IND_MOONNAD ;
+Pot+Prs: EVEN_POT_MOONNAD ;
+Cond+Prs:â^WG^VHIGH%> EVEN_COND ;
+Imprt: EVEN_IMPRT_MOONNAD ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !soppum toppuu monnuuččij
+Der4+Der/InchL:â^WG^VHIGH#škyett4 4SYLL_KYETTID_DER ; ! luvâ#škyettiđ polâ#škyettiđ rosâ#škyettiđ
+Der1+Der/d:âd^WG^VBACK 3_DERIVED_LOW ; !3_DERIVED ; !
+Der1+Der/st:âst^WG^VBACK 3_DERIVED_LOW ; ! 3_DERIVED ; !njomâstiđ
+Der1+Der/tt:âtt^WG^VBACK 3_DERIVED_LOW ; ! 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:â^CSH^VHIGH^RVSH DER_MAS ;

LEXICON VINFINITES_MOONNAD 
+Inf:â^VHIGH^RLEN%>đ K ;

+Ind+Prs+ConNeg:â^WG^VHIGH^RLEN K ;
+Ind+Prt+ConNeg:â^VHIGH^RLEN%>m K ;
+Cond+Prs+ConNeg:â^WG^VHIGH%>ččii K ;
+Pot+Prs+ConNeg:i^WG^VHIGH^RLEN%>i3 K ;
+Imprt+ConNeg:â^WG^VHIGH^RLEN K ; !! nuuvâ, iige noovâ
+PrfPrc:â^VHIGH^RLEN%>m K ;
+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ;

+VAbess:â^WG^VHIGH VABESS ;
+VGen:â^WG^VHIGH^RLEN%>n VGEN ;

+Ger+PxSg1:â^WG^VHIGH%>dijnân K ;
+Ger+PxSg2:â^WG^VHIGH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VHIGH%>dijnes K ;
+Ger+PxSg3:â^WG^VHIGH%>dijnis K ;
+Ger:â^WG^VHIGH%>dijn K ;
+Actio+Ess:â^CSH^VHIGH%>min K ;
+Actio+Ill:â^CSH^VHIGH%>mân K ;
+Actio+Loc:â^CSH^VHIGH%>mist K ;
+Actio+Com:â^CSH^VHIGH%>máin K ;
+Actio+Com+Err/Orth:â^CSH^VHIGH%>mijn K ;
+Actio+Nom:â^VHIGH^RLEN%>m NOMACT ;
+Der4+Der/NomAct:â^VHIGH^RLEN%>m FLAG_3LITTER ;
! Ger missing

LEXICON EVEN_IND_MOONNAD 
+Prs+Sg1:â^WG^VHIGH^RLEN%>m K ;
+Prs+Sg2:a^WG^VHIGH^RLEN%>h K ;
+Prs+Sg3:á^CSH K ;
+Prs+Du1:e^CLEN%>en K ;
+Prs+Du2:â^CSH^VHIGH%>vettee K ;
+Prs+Du3:â^VHIGH^RLEN%>v K ;
+Prs+Pl1:â^VHIGH^RLEN%>p K ;
+Prs+Pl2:â^CSH^VHIGH%>vetteđ K ;
+Prs+Pl3:e^CSH%>h K ;             ! loheh

+Prt+Sg1:i^VHIGH^RLEN%>m K ;
+Prt+Sg2:i^VHIGH^RLEN%>h K ;
+Prt+Sg3:â^WG^VHIGH^RLEN%>i K ;
+Prt+Du1:á^WG^VHIGH^RLEN%>im K ;
+Prt+Du2:á^WG^VHIGH^RLEN%>id K ;
+Prt+Du3:á^WG^VHIGH^RLEN%>in K ;
+Prt+Pl1:â^WG^VHIGH^RLEN%>im K ;
+Prt+Pl2:â^WG^VHIGH^RLEN%>id K ;
+Prt+Pl3:i^VHIGH%>i3 K ;

LEXICON EVEN_IMPRT_MOONNAD 
+Sg2:â^WG^VHIGH^RLEN K ;
+Sg3:o^WG%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:o^CLEN%>os K ;
+Pl1:o^CLEN%>op K ;
+Pl2:â^VHIGH^RLEN%>đ K ;
+Pl3:o^CLEN%>os K ;

LEXICON EVEN_POT_MOONNAD 
+Sg1:e^WG^RLEN%>em K ;
+Sg2:e^WG^RLEN%>eh K ;
+Sg3:â^WG^VHIGH^RLEN%>š K ;
+Du1:â^WG^VHIGH%>žeen K ;
+Du2:â^WG^VHIGH^RLEN%>švettee K ;
+Du3:â^WG^VHIGH%>žává K ;
+Pl1:â^WG^VHIGH%>žep K ;
+Pl2:â^WG^VHIGH^RLEN%>švetteđ K ;
+Pl3:â^WG^VHIGH%>žeh K ;


!! #### LEXICON 2SYLL\_VIIRRAD 
LEXICON 2SYLL_VIIRRAD
+V: 2SYLL_VIIRRAD_V ;
LEXICON 2SYLL_VIIRRAD_IV
+V+IV: 2SYLL_VIIRRAD_V ;
!LEXICON 2SYLL_VIIRRAD_TV
!+V+TV: 2SYLL_VIIRRAD_V ;

LEXICON 2SYLL_VIIRRAD_V
VINFINITES_VIIRRAD ;
+Ind: EVEN_IND_VIIRRAD ;
+Pot+Prs: EVEN_POT_VIIRRAD ;
+Cond+Prs:â^WG^RVSH%> EVEN_COND ; ! X
+Imprt: EVEN_IMPRT_VIIRRAD ;
+Der4+Der/InchL:â^WG^RVSH#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:âd^WG 3_DERIVED ; !
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L_RLEN_CLEN ;
:â^CSH^RVSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !virruđ

LEXICON VINFINITES_VIIRRAD  
+Inf:â^RLEN%>đ K ; ! viirrâđ
+Ind+Prs+ConNeg:â^WG^RLEN K ; ! viirâ
+Ind+Prt+ConNeg:â^RLEN%>m K ; ! viirrâm
+Cond+Prs+ConNeg:â^WG^RVSH%>ččii K ; ! virâččii
+Pot+Prs+ConNeg:i^WG^RLEN%>i5 K ; ! viirii
+Imprt+ConNeg:â^WG^RLEN K ; ! viirâ
+PrsPrc:e%>e K ; ! ! virree
+PrfPrc:â^RLEN%>m K ; ! viirrâm
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ;

+VAbess:â^WG VABESS ; ! OK
+VGen:â^WG^RLEN%>n VGEN ;

+Ger+PxSg1:â^WG%>dijnân K ; ! OK
+Ger+PxSg2:â^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG%>dijnes K ;
+Ger+PxSg3:â^WG%>dijnis K ;
+Ger:â^WG%>dijn K ;
+Actio+Ess:â^CSH%>min K ;
+Actio+Ill:â^CSH%>mân K ;
+Actio+Loc:â^CSH%>mist K ;
+Actio+Com:â^CSH%>máin K ;
+Actio+Nom:â^RLEN%>m NOMACT ;
+Der4+Der/NomAct:â^RLEN%>m FLAG_3LITTER ;

LEXICON EVEN_IND_VIIRRAD   
+Prs+Sg1:â^WG^RLEN%>m K ;     	! viirâm
+Prs+Sg2:â^WG^RLEN%>h K ;     	! viirah
+Prs+Sg3:á^CSH K ;       		! virá
+Prs+Du1:e^CLEN%>en K ;  		! virreen njihheen
+Prs+Du2:â^CSH%>vettee K ; 		! virâvettee
+Prs+Du3:â^RLEN%>v K ;         	! viirrâv
+Prs+Pl1:â^RLEN%>p K ;          ! viirrâp
+Prs+Pl2:â^CSH^RVSH%>vetteđ K ; ! virâvetteđ
+Prs+Pl3:e^CSH^RVSH%>h K ;      ! vireh

+Prt+Sg1:i^RLEN%>m K ;       ! viirrim
+Prt+Sg2:i^RLEN%>h K ;       ! viirrih
+Prt+Sg3:â^WG^RLEN%>i K ;    ! viirâi
+Prt+Du1:á^WG^RLEN%>im K ;   ! viiráim
+Prt+Du2:á^WG^RLEN%>id K ;   ! viiráid
+Prt+Du3:á^WG^RLEN%>in K ;   ! viiráin
+Prt+Pl1:â^WG^RLEN%>im K ;   ! viirâim
+Prt+Pl2:â^WG^RLEN%>id K ;   ! viirâid
+Prt+Pl3:i^CLEN^RVSH%>i5 K ; ! virrii njihhii

LEXICON EVEN_POT_VIIRRAD 
+Sg1:e^WG^RLEN%>em K ;
+Sg2:e^WG^RLEN%>eh K ;
+Sg3:â^WG^RLEN%>š K ;
+Du1:â^WG%>žeen K ;
+Du2:â^WG^RLEN%>švettee K ;
+Du3:â^WG%>žává K ;
+Pl1:â^WG%>žep K ;
+Pl2:â^WG^RLEN%>švetteđ K ;
+Pl3:â^WG%>žeh K ;

LEXICON EVEN_IMPRT_VIIRRAD
+Sg2:â^WG^RLEN K ;
+Sg3:o^WG^RVSH%>s K ;
+Du1:o^CLEN^RVSH%>on K ;
+Du2:e^CLEN^RVSH%>e K ;
+Du3:o^CLEN^RVSH%>os K ;
+Pl1:o^CLEN^RVSH%>op K ;
+Pl2:â^RLEN%>đ K ;
+Pl3:o^CLEN^RVSH%>os K ;


!! #### LEXICON 2SYLL\_VIISSAD 
!! * 2SYLL_VIISSAD - viiššâđ, vi^RVšš
!!     - Inf:â^VHIGH^RLEN%>đ
!!     - Ind+Prs+Sg3:á^CSH višá,
!!     - Ind+Prs+Pl3:e^CSH^RVSH%>h, rvow like Sg3 višeh
!!     - ConNeg:â^WG^RLEN viišâ, rvow like Inf
!!     - Ind+Prt+Sg1:i^RLEN%>m viiššim
LEXICON 2SYLL_VIISSAD
+V: 2SYLL_VIISSAD_V ;

!LEXICON 2SYLL_VIISSAD_IV
!+V+IV: 2SYLL_VIISSAD_V ;

LEXICON 2SYLL_VIISSAD_TV
+V+TV: 2SYLL_VIISSAD_V ;

LEXICON 2SYLL_VIISSAD_V  
VINFINITES_VIISSAD ;
+Ind: EVEN_IND_VIISSAD ;
+Pot+Prs: EVEN_POT_VIISSAD ;
+Cond+Prs:â^WG^RVSH%> EVEN_COND ;
+Imprt: EVEN_IMPRT_VIISSAD ;
+Der4+Der/InchL:â^WG^VHIGH#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:âd^WG 3_DERIVED ; !
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_VBACK ;
:â^CSH^RVSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !vuoššui

LEXICON VINFINITES_VIISSAD 
+Inf:â^RLEN%>đ K ;  ! No VHIGH for i stem
+Ind+Prs+ConNeg:â^WG^RLEN K ;
+Ind+Prt+ConNeg:â^RLEN%>m K ;
+Cond+Prs+ConNeg:â^WG%>ččii K ;
+Pot+Prs+ConNeg:i^WG^RLEN%>i5 K ;
+Imprt+ConNeg:â^WG^RLEN K ;
+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+PrfPrc:â^RLEN%>m K ;
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ;

+VAbess:â^WG^RVSH VABESS ;
+VGen:â^WG^RLEN%>n VGEN ;

+Ger+PxSg1:â^WG%>dijnân K ;
+Ger+PxSg2:â^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG%>dijnes K ;
+Ger+PxSg3:â^WG%>dijnis K ;
+Ger:â^WG^RVSH%>dijn K ;
+Actio+Ess:â^CSH%>min K ;
+Actio+Ill:â^CSH%>mân K ;
+Actio+Loc:â^CSH%>mist K ;
+Actio+Com:â^CSH%>máin K ;
+Actio+Nom:â%>m NOMACT ;
+Actio+Nom:â^RLEN%>m NOMACT ;
+Der4+Der/NomAct:â%>m FLAG_3LITTER ;

LEXICON EVEN_IND_VIISSAD   
+Prs+Sg1:â^WG^RLEN%>m K ;     	! viišâm
+Prs+Sg2:â^WG^RLEN%>h K ;     	! viišah
+Prs+Sg3:á^CSH K ;       		! višá
+Prs+Du1:e^CLEN%>en K ;  		! viššeen njihheen
+Prs+Du2:â^CSH^RVSH%>vettee K ; ! višâvettee
+Prs+Du3:â^RLEN%>v K ;          ! viiššâv
+Prs+Pl1:â^RLEN%>p K ;          ! viiššâp
+Prs+Pl2:â^CSH^RVSH%>vetteđ K ; ! višâvetteđ
+Prs+Pl3:e^CSH^RVSH%>h K ;      ! višeh

+Prt+Sg1:i^RLEN%>m K ; 		! viiššim
+Prt+Sg2:i^RLEN%>h K ; 		! viišših
+Prt+Sg3:â^WG^RLEN%>i K ; 	! viišâi
+Prt+Du1:á^WG^RLEN%>im K ; ! viišáim
+Prt+Du2:á^WG^RLEN%>id K ; ! viišáid
+Prt+Du3:á^WG^RLEN%>in K ; ! viišáin
+Prt+Pl1:â^WG^RLEN%>im K ; ! viišâim
+Prt+Pl2:â^WG^RLEN%>id K ; ! viišâid
+Prt+Pl3:i^CLEN^RVSH%>i5 K ; 	! viššii njihhii

LEXICON EVEN_POT_VIISSAD 
+Sg1:e^WG^RLEN%>em K ;
+Sg2:e^WG^RLEN%>eh K ;
+Sg3:â^WG^RLEN%>š K ;
+Du1:â^WG^RVSH%>žeen K ;
+Du2:â^WG^RLEN%>švettee K ;
+Du3:â^WG^RVSH%>žává K ;
+Pl1:â^WG^RVSH%>žep K ;
+Pl2:â^WG^RLEN%>švetteđ K ;
+Pl3:â^WG^RVSH%>žeh K ;

LEXICON EVEN_IMPRT_VIISSAD  
+Sg2:â^WG^RLEN K ;
+Sg3:o^WG^RVSH%>s K ;
+Du1:o^CLEN^RVSH%>on K ;
+Du2:e^CLEN^RVSH%>e K ;
+Du3:o^CLEN^RVSH%>os K ;
+Pl1:o^CLEN^RVSH%>op K ;
+Pl2:â^RVSH%>đ K ;
+Pl2:â^RLEN%>đ K ;
+Pl3:o^CLEN^RVSH%>os K ;


!! #### LEXICON 2SYLL\_CIEPPAD  like 2SYLL_KIESSAD but less CSH 4 verbs. 34 verbs
LEXICON 2SYLL_CIEPPAD
+V: 2SYLL_CIEPPAD_V ;
LEXICON 2SYLL_CIEPPAD_TV
+V+TV: 2SYLL_CIEPPAD_V ;

LEXICON 2SYLL_CIEPPAD_V 
:  VINFINITES_VIEZZAD ;
+Ind+Prs: EVEN_IND_PRS_CIEPPAD ;
+Ind+Prt: EVEN_IND_PRT_VIEZZAD ;
+Cond+Prs:â^WG%> EVEN_COND ;
+Pot+Prs: EVEN_POT_VIEZZAD ;
+Imprt: EVEN_IMPRT_VIEZZAD ;
+Der4+Der/InchL:â^WG#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:â^WG%>d 3_KUIKETTID ; !
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:â^CSH^RVSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !vuoššui

LEXICON EVEN_IND_PRS_CIEPPAD   
+Sg1:â^WG%>m K ;
+Sg2:â^WG%>h K ;
+Sg3:á^VHIGH K ;
+Du1:e%>en K ;
+Du2:â%>vettee K ;
+Du3:â%>v K ;
+Pl1:â%>p K ;
+Pl2:â%>vetteđ K ;
+Pl3:i%>h K ;


!! #### LEXICON 2SYLL\_KIESSAD
!! * 2SYLL_KIESSAD - kiessâđ, kiess
!!     - Inf:â%>đ
!!     - Ind+Prs+Sg3:á^CSH^VHIGH kiäsá,
!!     - Ind+Prs+Pl3:i^CSH%>h kiesih
!!     - ConNeg:â^WG rvow like Inf kiesâ
!!     - Ind+Prt+Sg1:i%>m  kiessim
LEXICON 2SYLL_KIESSAD
+V: 2SYLL_KIESSAD_V ;
LEXICON 2SYLL_KIESSAD_IV
+V+IV: 2SYLL_KIESSAD_V ;
LEXICON 2SYLL_KIESSAD_TV
+V+TV: 2SYLL_KIESSAD_V ;

LEXICON 2SYLL_KIESSAD_V  
VINFINITES_KIESSAD ;
+Ind+Prs: EVEN_IND_PRS_KIESSAD ;
+Ind+Prt: EVEN_IND_PRT_VIEZZAD ;
+Cond+Prs:â^WG%> EVEN_COND ;
+Pot+Prs: EVEN_POT_VIEZZAD ; ! PM: pot.prs.sg1 viež'žeem (CLEN) BUT kieseem (RLEN)
+Imprt: EVEN_IMPRT_VIEZZAD ;
+Der4+Der/InchL:â^WG#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:â^WG%>d 3_KUIKETTID ; !
+Der1+Der/st:âst^WG 3_DERIVED ; !
+Der1+Der/tt:âtt^WG 3_DERIVED ; !  ok cielâttiđ paradigm
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:â^CSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !pieijui sierruu piemmui

LEXICON VINFINITES_KIESSAD
+Inf:â%>đ K ;
+Ind+Prs+ConNeg:â^WG K ;
+Ind+Prt+ConNeg:â%>m K ;
+Cond+Prs+ConNeg:â^WG%>ččii K ;
+Pot+Prs+ConNeg:i^WG%>i3 K ;
+Imprt+ConNeg:â^WG K ;
+PrsPrc:e^CLEN%>e K ; ! trigger for u > o
+PrfPrc:â%>m K ;
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ;

+VAbess:â^WG VABESS ;
+VGen:â^WG%>n VGEN ;

+Actio+Nom:â%>m NOMACT ;
+Actio+Ill:â^CSH%>mân K ;
+Actio+Loc:â^CSH%>mist K ;
+Actio+Com:â^CSH%>máin K ;
+Actio+Ess:â^CSH%>min K ;
+Ger+PxSg1:â^WG%>dijnân K ;
+Ger+PxSg2:â^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG%>dijnes K ;
+Ger+PxSg3:â^WG%>dijnis K ;
+Ger:â^CSH%>dijn K ;
+Der4+Der/NomAct:âm FLAG_3AARRAN ; !no %>

LEXICON EVEN_IND_PRS_KIESSAD
+Sg1:â^WG%>m K ;
+Sg2:â^WG%>h K ;
+Sg3:á^CSH^VHIGH K ;
+Du1:e%>en K ;
+Du2:â^CSH%>vettee K ;
+Du3:â%>v K ;
+Pl1:â%>p K ;
+Pl2:â^CSH%>vetteđ K ;
+Pl3:i^CSH%>h K ;


!! #### LEXICON 2SYLL\_VUOLLAD  ye to ua vyešš 71 verbs
!! * 2SYLL_VUOLLAD - vuollâđ, vuoll OBS: not Prs+Pl3 vowel like the others
!!     - Inf:â%>đ
!!     - Ind+Prs+Sg3:á^CSH^VHIGH vuálá,
!!     - Ind+Prs+Pl3:i^CSH%>h  vyelih
!!     - ConNeg:â^WG rvow like Inf vuolâ
!!     - Ind+Prt+Sg1:i%>m vuollim
LEXICON 2SYLL_VUOLLAD
+V: 2SYLL_VUOLLAD_V ;
LEXICON 2SYLL_VUOLLAD_IV
+V+IV: 2SYLL_VUOLLAD_V ;
LEXICON 2SYLL_VUOLLAD_TV
+V+TV: 2SYLL_VUOLLAD_V ;

LEXICON 2SYLL_VUOLLAD_V  
VINFINITES_2SYLL_VUOLLAD ;
+Ind: EVEN_IND_2SYLL_VUOLLAD ;
+Cond+Prs:â^WG^VBACK^RLEN%> EVEN_COND ;
+Pot+Prs: EVEN_POT_2SYLL_VUOLLAD ;
+Imprt: EVEN_IMPRT_2SYLL_VUOLLAD ;
+Der4+Der/InchL:â^WG^VBACK^RLEN#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:â^WG%>d 3_KUIKETTID ; !
+Der1+Der/st:âst^WG^VBACK 3_DERIVED ; ! ^VBACK mai 17
+Der1+Der/tt:âtt^WG^VBACK 3_DERIVED ; ! ^VBACK mai 17
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:â^CSH^VBACK DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RLEN ; !

LEXICON VINFINITES_2SYLL_VUOLLAD 
+Inf:â^VBACK^RLEN%>đ K ; ! xxx remove RLEN
+Ind+Prs+ConNeg:â^WG^VBACK^RLEN K ;
+Ind+Prt+ConNeg:â^VBACK^RLEN%>m K ;
+Cond+Prs+ConNeg:â^WG^VBACK^RLEN%>ččii K ;
+Pot+Prs+ConNeg:i^WG%>i3 K ;
+Imprt+ConNeg:â^WG K ;
+PrsPrc:e%>e K ;
+PrfPrc:â^VBACK^RLEN%>m K ;
+Der2+Der/NomAg:e%> C_TAHHEE ;

+VAbess:â^WG^VBACK^RLEN VABESS ;
+VGen:â^WG^VBACK^RLEN%>n VGEN ;

+Actio+Nom:â^VBACK^RLEN%>m NOMACT ;
+Actio+Ill:â^CSH^VBACK^RVSH%>mân K ;
+Actio+Loc:â^CSH^VBACK^RVSH%>mist K ;
+Actio+Com:â^CSH^VBACK^RVSH%>máin K ;
+Actio+Ess:â^CSH^VBACK^RVSH%>min K ;
+Ger+PxSg1:â^WG^VBACK^RLEN%>dijnân K ;
+Ger+PxSg2:â^WG^VBACK^RLEN%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VBACK^RLEN%>dijnes K ;
+Ger+PxSg3:â^WG^VBACK^RLEN%>dijnis K ;
+Ger:â^WG^VBACK^RLEN%>dijn K ;
+Der4+Der/NomAct:â^VBACK^RLEN%>m FLAG_3LITTER ;

LEXICON EVEN_IND_2SYLL_VUOLLAD 
+Prs+Sg1:â^WG^VBACK^RLEN%>m K ;
+Prs+Sg2:â^WG^VBACK^RLEN%>h K ;
+Prs+Sg3:á^CSH^VHIGH K ;      ! FORMER: ^CSH^VHIGH
+Prs+Du1:e^CLEN%>en K ;
+Prs+Du2:â^CSH^VBACK^RLEN%>vettee K ;
+Prs+Du3:â^VBACK^RLEN%>v K ;
+Prs+Pl1:â^VBACK^RLEN%>p K ;
+Prs+Pl2:â^CSH^VBACK^RLEN%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;             ! loheh
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i^VBACK^RLEN%>m K ;
+Prt+Sg2:i^VBACK^RLEN%>h K ;
+Prt+Sg3:â^WG^VBACK^RLEN%>i K ;
+Prt+Du1:á^WG^VBACK^RLEN%>im K ; ! not ^CLEN?
+Prt+Du2:á^WG^VBACK^RLEN%>id K ; ! not ^CLEN?
+Prt+Du3:á^WG^VBACK^RLEN%>in K ; ! not ^CLEN?
+Prt+Pl1:â^WG^VBACK^RLEN%>im K ;
+Prt+Pl2:â^WG^VBACK^RLEN%>id K ;
+Prt+Pl3:i^CLEN^VBACK^RLEN%>i3 K ;

LEXICON EVEN_POT_2SYLL_VUOLLAD 
+Sg1:e^WG^VBACK^RLEN%>em K ;
+Sg2:e^WG^VBACK^RLEN%>eh K ;
+Sg3:â^WG^VBACK^RLEN%>š K ;
+Du1:â^WG^VBACK^RLEN%>žeen K ;
+Du2:â^WG^VBACK^RLEN%>švettee K ;
+Du3:â^WG^VBACK^RLEN%>žává K ;
+Pl1:â^WG^VBACK^RLEN%>žep K ;
+Pl2:â^WG^VBACK^RLEN%>švetteđ K ;
+Pl3:â^WG^VBACK^RLEN%>žeh K ;

LEXICON EVEN_IMPRT_2SYLL_VUOLLAD 
+Sg2:â^WG^VBACK^RLEN K ;    !
+Sg3:u^WG^VHIGH%>s K ; !
+Du1:o^VHIGH%>on K ;    ! uá
+Du2:e%>e K ;     		! ye
+Du3:u^VHIGH%>s K ;     ! uá
+Pl1:u^VHIGH%>p K ;     ! uá
+Pl2:â^VBACK^RLEN%>đ K ;     !
+Pl3:u^VHIGH%>s K ;     ! uá


!! #### LEXICON 2SYLL\_LUOIKKAD RUOTTAD\_LUOIKKAD, passive, no Der/l, otherw like ruottad, 3 verbs
LEXICON 2SYLL_LUOIKKAD_TV
+V+TV+Der3+Der/Pass:u2 C_PASS_SH_RLEN ; !
+V+TV: 2SYLL_RUOTTAD_LUOIKKAD ;

!! #### LEXICON 2SYLL\_RUOTTAD
LEXICON 2SYLL_RUOTTAD
+V: 2SYLL_RUOTTAD_V ;
LEXICON 2SYLL_RUOTTAD_IV
+V+IV: 2SYLL_RUOTTAD_V ;
LEXICON 2SYLL_RUOTTAD_TV
+V+TV: 2SYLL_RUOTTAD_V ;

LEXICON 2SYLL_RUOTTAD_V  ! no passive, but Der/l. 4 verbs
!DERL+Der1+Der/l:â^VBACK^RLEN%>l 3_DERIVED_VBACK ; ! Look at this, Trond. ! 3_DERIVED_VBACK
2SYLL_RUOTTAD_LUOIKKAD ;

!! #### LEXICON 2SYLL\_LUOIKKAD, no passive
LEXICON 2SYLL_RUOTTAD_LUOIKKAD  
VINFINITES_2SYLL_RUOTTAD ;
+Ind: EVEN_IND_2SYLL_RUOTTAD ;
+Cond+Prs:â^WG^VBACK^RLEN%> EVEN_COND ;
+Pot+Prs: EVEN_POT_2SYLL_RUOTTAD ;
+Imprt: EVEN_IMPRT_2SYLL_RUOTTAD ;
+Der4+Der/InchL:â^WG^VBACK^RLEN#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:â^WG^VBACK^RLEN%>d 3_KUIKETTID ; !ruotâdiđ this one functions!
+Der1+Der/st:â^WG^VBACK^RLEN%>st 3_KUIKETTID ; !
+Der1+Der/tt:â^WG^VBACK^RLEN%>tt 3_KUIKETTID ; ! TEST
! Der/l declared above
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !

LEXICON VINFINITES_2SYLL_RUOTTAD 
+Inf:â^VBACK^RLEN%>đ K ;
+Ind+Prs+ConNeg:â^WG^VBACK^RLEN K ;
+Ind+Prt+ConNeg:â^VBACK^RLEN%>m K ;
+Cond+Prs+ConNeg:â^WG^VBACK^RLEN%>ččii K ;
+Pot+Prs+ConNeg:i%>i3 K ;
+Imprt+ConNeg:â^WG K ;
+PrsPrc:e%>e K ;
+PrfPrc:â^VBACK^RLEN%>m K ;
+Der2+Der/NomAg:e%> C_TAHHEE ;

+VAbess:â^WG^VBACK^RLEN VABESS ;
+VGen:â^WG^VBACK^RLEN%>n VGEN ;

+Actio+Nom:â^VBACK^RLEN%>m NOMACT ;
+Actio+Ill:â^VBACK^RLEN%>mân K ;
+Actio+Loc:â^VBACK^RLEN%>mist K ; !luoikkâmist
+Actio+Com:â^VBACK^RLEN%>máin K ; !
+Actio+Ess:â^VBACK^RLEN%>min K ;
+Ger+PxSg1:â^WG^VBACK^RLEN%>dijnân K ;
+Ger+PxSg2:â^WG^VBACK^RLEN%>dijnâd K ;
+Ger+PxSg3+Err/Orth:â^WG^VBACK^RLEN%>dijnes K ;
+Ger+PxSg3:â^WG^VBACK^RLEN%>dijnis K ;
+Ger:â^WG^VBACK^RLEN%>dijn K ;
+Der4+Der/NomAct:â^VBACK^RLEN%>m FLAG_3LITTER ; !luoikkâmist

LEXICON EVEN_IND_2SYLL_RUOTTAD  
+Prs+Sg1:â^WG^VBACK^RLEN%>m K ;
+Prs+Sg2:â^WG^VBACK^RLEN%>h K ;
+Prs+Sg3:á^VHIGH K ;    !
+Prs+Du1:e%>en K ;
+Prs+Du2:â^VBACK^RLEN%>vettee K ;
+Prs+Du3:â^VBACK^RLEN%>v K ;
+Prs+Pl1:â^VBACK^RLEN%>p K ;
+Prs+Pl2:â^VBACK^RLEN%>vetteđ K ;
+Prs+Pl3:i%>h K ;

+Prt+Sg1:i^VBACK^RLEN%>m K ;
+Prt+Sg2:i^VBACK^RLEN%>h K ;
+Prt+Sg3:â^WG^VBACK^RLEN%>i K ;
+Prt+Du1:á^WG^VBACK^RLEN%>im K ; ! not ^CLEN?
+Prt+Du2:á^WG^VBACK^RLEN%>id K ; ! not ^CLEN?
+Prt+Du3:á^WG^VBACK^RLEN%>in K ; ! not ^CLEN?
+Prt+Pl1:â^WG^VBACK^RLEN%>im K ;
+Prt+Pl2:â^WG^VBACK^RLEN%>id K ;
+Prt+Pl3:i^VBACK^RLEN%>i3 K ;

LEXICON EVEN_POT_2SYLL_RUOTTAD 
+Sg1:e^WG^CLEN%>em K ;
+Sg2:e^WG^CLEN%>eh K ;
+Sg3:â^WG^VBACK^RLEN%>š K ;
+Du1:â^WG^VBACK^RLEN%>žeen K ;
+Du2:â^WG^VBACK^RLEN%>švettee K ;
+Du3:â^WG^VBACK^RLEN%>žává K ;
+Pl1:â^WG^VBACK^RLEN%>žep K ;
+Pl2:â^WG^VBACK^RLEN%>švetteđ K ;
+Pl3:â^WG^VBACK^RLEN%>žeh K ;

LEXICON EVEN_IMPRT_2SYLL_RUOTTAD 
+Sg2:â^WG^VBACK^RLEN K ;    !
+Sg3:u^VHIGH%>s K ; !
+Du1:o^VHIGH%>on K ;    ! uá
+Du2:e%>e K ;     ! ye
+Du3:u^VHIGH%>s K ;     ! uá
+Pl1:u^VHIGH%>p K ;     ! uá
+Pl2:â^VBACK^RLEN%>đ K ;     !
+Pl3:u^VHIGH%>s K ;     ! uá


!! ### ED verbs

!! #### LEXICON 2SYLL\_KALVED kalveđ without RLEN Prs+Sg1. 8 verbs
!! * 2SYLL_KALVED kalveđ ka^RVlv
!!     - kalvam
!!     - kalva
!!     - kalveh
!!     - kalve
LEXICON 2SYLL_KALVED
+V: 2SYLL_KALVED_V ;
LEXICON 2SYLL_KALVED_IV
+V+IV: 2SYLL_KALVED_V ;
LEXICON 2SYLL_KALVED_TV
+V+TV: 2SYLL_KALVED_V ;

LEXICON 2SYLL_KALVED_V 
: VINFINITES_PIHTED ;
+Ind: EVEN_IND_PIHTED ;
+Cond+Prs:á^WG%> EVEN_COND ; ! anneeđ a, jotteeđ á.
+Pot+Prs: EVEN_POT_ED ;
+Imprt: EVEN_IMPRT_ED ;
+Der4+Der/InchL:e^WG#škyett4 4SYLL_KYETTID_DER ; !sirde#škyettiđ
+Der1+Der/d:e^SVd^WG 3_DERIVED_SLEN ; !
+Der1+Der/st:est^WG 3_DERIVED ; ! arvestiđ a^RVrv
+Der1+Der/tt:ett^WG 3_DERIVED ; !
!DERL+Der1+Der/l:el 3_DERIVED_L_CLEN ; ! former: 3_DERIVED_BACK
:e^EA DER_MAS ; ! á for root oiu, e for root a
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; ! aRV  o  a


!! #### LEXICON 2SYLL\_POHTED  with RLEN Prs+Sg1. 31 verbs
!! * 2SYLL_POHTED pohteđ:po5^RVht
!!     - poovtám RLEN
!!     - pohtá
!!     - pohteh
!!     - povte
LEXICON 2SYLL_POHTED
+V: 2SYLL_POHTED_V ;
LEXICON 2SYLL_POHTED_IV
+V+IV: 2SYLL_POHTED_V ;
LEXICON 2SYLL_POHTED_TV
+V+TV: 2SYLL_POHTED_V ;

LEXICON 2SYLL_POHTED_V  
VINFINITES_ED ;
+Ind: EVEN_IND_ED ;
+Pot+Prs: EVEN_POT_POHTED ;
+Cond+Prs:á^WG%> EVEN_COND ; ! anneeđ a, jotteeđ á.
+Imprt: EVEN_IMPRT_ED ;
+Der4+Der/InchL:e^WG#škyett4 4SYLL_KYETTID_DER ; !sirde#škyettiđ
+Der1+Der/st:est^WG 3_DERIVED ; ! arvestiđ a^RVrv
+Der1+Der/tt:ett^WG 3_DERIVED ; !
+Der1+Der/d:ed^WG 3_DERIVED ; !
!DERL+Der1+Der/l:el 3_DERIVED_L ; !
:á DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_POHTED ; !

LEXICON VINFINITES_ED  
+Inf:e%>đ K ;
+Ind+Prs+ConNeg:e^WG K ;
+Ind+Prt+ConNeg:á%>m K ;
+Cond+Prs+ConNeg:á^WG%>ččii K ;
+Pot+Prs+ConNeg:á^WG%>á K ;
+Imprt+ConNeg:e^WG K ;
+PrsPrc:e%>e K ;
+PrfPrc:á%>m K ;
+PrfPrc+Err/Orth:%>m K ;
+Der2+Der/NomAg:e%> C_TAHHEE ; !paldee muttee kirdee hurgee ok

+VAbess:e^WG VABESS ;
+VGen:e^WG%>n VGEN ;

+Actio+Nom:e%>m NOMACT ;
+Actio+Ill:e%>mân K ;
+Actio+Loc:e%>mist K ;
+Actio+Com:e%>máin K ;
+Actio+Ess:e%>min K ;
+Ger+PxSg1:e^WG%>dijnân K ;
+Ger+PxSg2:e^WG%>dijnâd K ;
+Ger+PxSg3:e^WG%>dijnis K ;
+Ger+PxSg3+Err/Orth:e^WG%>dijnes K ;
+Ger:e^WG%>dijn K ;
+Der4+Der/NomAct:e%>m FLAG_3LITTER ;

LEXICON EVEN_IND_ED 
+Prs+Sg1+Err/Orth:á^WG^RLEN%>m K ;
+Prs+Sg1:á^WG%>m K ;
+Prs+Sg2+Err/Orth:á^WG^RLEN%>h K ;
+Prs+Sg2:á^WG%>h K ;
+Prs+Sg3:á K ;
+Prs+Du1:e^CLEN%>en K ;
+Prs+Du2:e%>vettee K ;
+Prs+Du3:e%>v K ;
+Prs+Pl1:e%>p K ;
+Prs+Pl2:e%>vetteđ K ;
+Prs+Pl3:e%>h K ;

+Prt+Sg1:i%>m K ;
+Prt+Sg2:i%>h K ;
+Prt+Sg3:i^WG^RLEN%>i K ;
+Prt+Du1:i^WG^CLEN%>im K ;
+Prt+Du2:i^WG^CLEN%>id K ;
+Prt+Du3:i^WG^CLEN%>in K ;
+Prt+Pl1:i^WG^RLEN%>im K ;
+Prt+Pl2:i^WG^RLEN%>id K ;
+Prt+Pl3:i%>i3 K ;

LEXICON EVEN_POT_POHTED 
+Sg1:e%>em K ;
+Sg2:e%>eh K ;
+Sg3:i^WG^RLEN%>š K ;
+Du1:i^WG%>žeen K ;
+Du2:i^WG^RLEN%>švettee K ;
+Du3:i^WG%>žává K ;
+Pl1:i^WG%>žep K ;
+Pl2:i^WG^RLEN%>švetteđ K ;
+Pl3:i^WG%>žeh K ;

LEXICON EVEN_POT_ED ! this one to be relocated to _ED
+Sg1:e%>em K ;
+Sg2:e%>eh K ;
+Sg3:i^WG^VHIGH^RLEN%>š K ;
+Du1:i^WG^VHIGH%>žeen K ;
+Du2:i^WG^VHIGH^RLEN%>švettee K ;
+Du3:i^WG^VHIGH%>žává K ;
+Pl1:i^WG^VHIGH%>žep K ;
+Pl2:i^WG^VHIGH^RLEN%>švetteđ K ;
+Pl3:i^WG^VHIGH%>žeh K ;


LEXICON EVEN_IMPRT_ED 
+Sg2:e^WG K ;
+Sg3:o^WG%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:o^CLEN%>os K ;
+Pl1:o^CLEN%>op K ;
+Pl2:e%>đ K ;
+Pl3:o^CLEN%>os K ;


!! #### LEXICON 2SYLL\_PIHTED 82 verbs
!! * 2SYLL_PIHTED pihteđ pi^RVht
!!     - pivtám
!!     - pihtá
!!     - pihteh
!!     - pivte
LEXICON 2SYLL_PIHTED
+V: 2SYLL_PIHTED_V ;
LEXICON 2SYLL_PIHTED_IV
+V+IV: 2SYLL_PIHTED_V ;
LEXICON 2SYLL_PIHTED_TV
+V+TV: 2SYLL_PIHTED_V ;

LEXICON 2SYLL_PIHTED_V 
VINFINITES_PIHTED ;
+Ind: EVEN_IND_PIHTED ;
+Cond+Prs:á^WG%> EVEN_COND ; ! anneeđ a, jotteeđ á.
+Pot+Prs: EVEN_POT_PIHTED ;
+Imprt: EVEN_IMPRT_PIHTED ;
+Der4+Der/InchL:e^WG#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:ed^WG 3_DERIVED ; !
+Der1+Der/st:est^WG 3_DERIVED ; ! arvestiđ a^RVrv
+Der1+Der/tt:ett^WG 3_DERIVED ; !
!DERL+Der1+Der/l:el 3_DERIVED_L_VERSION2 ; ! 3_LEKKASID
:á DER_MAS ;
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; ! sirdum sirdojii sirdui sirdoo kalvojeh njuvdum čiptum nobduđ

LEXICON VINFINITES_PIHTED  
+Inf:e%>đ K ;
+Ind+Prs+ConNeg:e^WG K ;
+Ind+Prt+ConNeg:á%>m K ;
+Cond+Prs+ConNeg:á^WG%>ččii K ;
+Pot+Prs+ConNeg:á%>á K ;
+Imprt+ConNeg:e^WG K ;
+PrsPrc:e%>e K ;
+PrfPrc:á%>m K ;
+PrfPrc+Err/Orth:â%>m K ;
+Der2+Der/NomAg:e C_TAHHEE ;

+VAbess:e^WG VABESS ;
+VGen:e^WG%>n VGEN ;

+Actio+Nom:e%>m NOMACT ;
+Actio+Ill:e%>mân K ;
+Actio+Loc:e%>mist K ;
+Actio+Com:e%>máin K ;
+Actio+Ess:e%>min K ;
+Ger+PxSg1:e^WG%>dijnân K ;
+Ger+PxSg2:e^WG%>dijnâd K ;
+Ger+PxSg3:e^WG%>dijnis K ;
+Ger+PxSg3+Err/Orth:e^WG%>dijnes K ;
+Ger:e^WG%>dijn K ;
+Der4+Der/NomAct:e%>m FLAG_3LITTER ;

LEXICON EVEN_IND_PIHTED   
+Prs+Sg1:á^WG%>m K ;
+Prs+Sg2:á^WG%>h K ;
+Prs+Sg3:á K ;
+Prs+Du1:e^CLEN%>en K ;
+Prs+Du2:e%>vettee K ;
+Prs+Du3:e%>v K ;
+Prs+Pl1:e%>p K ;
+Prs+Pl2:e%>vetteđ K ;
+Prs+Pl3:e%>h K ;   !OBS??

+Prt+Sg1:i^VHIGH%>m K ;
+Prt+Sg2:i^VHIGH%>h K ;
+Prt+Sg3:i^WG^VHIGH^RLEN%>j K ;
+Prt+Du1:i^WG^CLEN^VHIGH%>jm K ;
+Prt+Du2:i^WG^CLEN^VHIGH%>jd K ;
+Prt+Du3:i^WG^CLEN^VHIGH%>jn K ;
+Prt+Pl1:i^WG^VHIGH^RLEN%>jm K ;
+Prt+Pl2:i^WG^VHIGH^RLEN%>jd K ;
+Prt+Pl3:i^CLEN^VHIGH%>i3 K ;

LEXICON EVEN_POT_PIHTED !
+Sg1:e%>em K ;
+Sg2:e%>eh K ;
+Sg3:i^WG^VHIGH^RLEN%>š K ;
+Du1:i^WG^VHIGH^RVSH%>žeen K ;
+Du2:i^WG^VHIGH^RLEN%>švettee K ;
+Du3:i^WG^VHIGH^RVSH%>žává K ;
+Pl1:i^WG^VHIGH^RVSH%>žep K ;
+Pl2:i^WG^VHIGH^RLEN%>švetteđ K ;
+Pl3:i^WG^VHIGH^RVSH%>žeh K ;

LEXICON EVEN_IMPRT_PIHTED   !
!+Sg2:e^WG^VHIGH K ;
+Sg2:e^WG K ;
+Sg3:o^WG%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:o^CLEN%>os K ;
+Pl1:o^CLEN^VHIGH%>op K ;
!+Pl2:e^VHIGH%>đ K ;
+Pl2:e^VHIGH%>đ K ;
+Pl3:o^CLEN%>os K ;

!! ### EED verbs

!
LEXICON 2SYLL_JOTTEED
+V: 2SYLL_JOTTEED_V ;
LEXICON 2SYLL_JOTTEED_IV
+V+IV: 2SYLL_JOTTEED_V ;
LEXICON 2SYLL_JOTTEED_TV
+V+TV: 2SYLL_JOTTEED_V ;

LEXICON 2SYLL_JOTTEED_V  ! . 27 verbs
VINFINITES_EED ;
+Ind: EVEN_IND_EED ;
+Cond+Prs:á^WG%> EVEN_COND ; ! anneeđ a, jotteeđ á.
+Pot+Prs: EVEN_POT_EED ;
+Imprt: EVEN_IMPRT_EED ;
+Der4+Der/InchL:e^WG#škyett4 4SYLL_KYETTID_DER ; !jođe#škyettiđ
+Der1+Der/st:e^SVst^WG 3_DERIVED ; ! arvestiđ a^RVrv
+Der1+Der/tt:e^SVtt^WG 3_DERIVED ; !
:á^CSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !paččojeh kođđojeh

LEXICON VINFINITES_EED   !
+Inf:e^CLEN%>eđ K ;
+Ind+Prs+ConNeg:e^WG K ;
+Ind+Prt+ConNeg:á^CLEN%>ám K ;
+Cond+Prs+ConNeg:á^WG%>ččii K ; !twolc á:a if a stem
+Pot+Prs+ConNeg:á^WG^RLEN%>á K ; !twolc á:a if a stem
+Imprt+ConNeg:e^WG K ;
+PrsPrc:e^CLEN%>e K ;
+PrfPrc:á^CLEN%>ám K ; !twolc á:a if a stem
+PrfPrc+Err/Orth:â^CLEN%>ám K ; !twolc á:a if a stem
+Der2+Der/NomAg:e^CLEN%> C_TAHHEE ; !accee ok

+VAbess:e^WG VABESS ;
+VGen:e^WG%>n VGEN ;

+Actio+Nom:e^CLEN%>em NOMACT ;
+Actio+Ill:e^CSH%>mân K ;
+Actio+Loc:e^CSH%>mist K ;
+Actio+Com:e^CSH%>máin K ;
+Actio+Ess:e^CSH%>min K ;
+Ger+PxSg1:e^WG%>dijnân K ;
+Ger+PxSg2:e^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:e^WG%>dijnes K ;
+Ger+PxSg3:e^WG%>dijnis K ;
+Ger:e^WG%>dijn K ;
+Der4+Der/NomAct:e^CLEN%>em FLAG_3EEMEED ;

LEXICON EVEN_IND_EED   !
+Prs+Sg1:á^WG%>m K ;
+Prs+Sg2:á^WG%>h K ;
+Prs+Sg3:á^CSH K ;
+Prs+Du1:e^CLEN%>en K ;
+Prs+Du2:e^CSH%>vettee K ;
+Prs+Du3:e^CLEN%>ev K ;
+Prs+Pl1:e^CLEN%>ep K ;
+Prs+Pl2:e^CSH%>vetteđ K ;
+Prs+Pl3:e^CSH%>h K ;

+Prt+Sg1:i^CLEN^VHIGH^RLEN%>m K ;
+Prt+Sg2:i^CLEN^VHIGH^RLEN%>h K ;
+Prt+Sg3:i^WG^VHIGH^RLEN%>j K ;
+Prt+Du1:i^WG^VHIGH^RLEN%>jm K ;
+Prt+Du2:i^WG^VHIGH^RLEN%>jd K ;
+Prt+Du3:i^WG^VHIGH^RLEN%>jn K ;
+Prt+Pl1:i^WG^VHIGH^RLEN%>jm K ;
+Prt+Pl2:i^WG^VHIGH^RLEN%>jd K ;
+Prt+Pl3:i^CLEN^VHIGH%>i3 K ;

LEXICON EVEN_POT_EED !
+Sg1:e^WG^RLEN%>em K ;
+Sg2:e^WG^RLEN%>eh K ;
+Sg3:i^WG^VHIGH^RLEN%>š K ;
+Du1:i^WG^VHIGH^RVSH%>žeen K ;
+Du2:i^WG^VHIGH^RLEN%>švettee K ;
+Du3:i^WG^VHIGH^RVSH%>žává K ;
+Pl1:i^WG^VHIGH^RVSH%>žep K ;
+Pl2:i^WG^VHIGH^RLEN%>švetteđ K ;
+Pl3:i^WG^VHIGH^RVSH%>žeh K ;

LEXICON EVEN_IMPRT_EED  !
+Sg2:e^WG K ;
+Sg3:o^WG%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:o^CLEN%>os K ;
+Pl1:o^CLEN%>op K ;
+Pl2:e^CLEN%>eđ K ;
+Pl3:o^CLEN%>os K ;

LEXICON 2SYLL_PAHHEED
+V: 2SYLL_PAHHEED_V ;
!LEXICON 2SYLL_PAHHEED_IV
!+V+IV: 2SYLL_PAHHEED_V ;
LEXICON 2SYLL_PAHHEED_TV
+V+TV: 2SYLL_PAHHEED_V ;

LEXICON 2SYLL_PAHHEED_V  ! yaml anneed. 2 verbs
VINFINITES_PAHHEED ;
+Ind: EVEN_IND_PAHHEED ;
+Cond+Prs:á^WG%> EVEN_COND ; ! anneeđ a, jotteeđ á.
+Pot+Prs: EVEN_POT_EED ;
+Imprt: EVEN_IMPRT_PAHHEED ;
+Der4+Der/InchL:e^WG#škyett4 4SYLL_KYETTID_DER ; !jođe#škyettiđ
+Der1+Der/d:ed^WG 3_DERIVED ; !
+Der1+Der/st:est^WG 3_DERIVED ; ! arvestiđ a^RVrv
+Der1+Der/tt:ett^WG 3_DERIVED ; !
!DERL+Der1+Der/l:el 3_DERIVED_L ; !
:á^CSH DER_MAS ;
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; !paččojeh kođđojeh


LEXICON VINFINITES_PAHHEED  !
+Inf:e%>eđ K ; ! CLEN away
+Ind+Prs+ConNeg:e^WG K ;
+Ind+Prt+ConNeg:á%>ám K ;
+Cond+Prs+ConNeg:á^WG%>ččii K ; !twolc á:a if a stem
+Pot+Prs+ConNeg:á^WG^RLEN%>á K ; !twolc á:a if a stem
+Imprt+ConNeg:e^WG K ;
+PrsPrc:e%>e K ;
+PrfPrc:á%>ám K ; !twolc á:a if a stem
+PrfPrc+Err/Orth:â%>ám K ; !twolc á:a if a stem
+Der2+Der/NomAg:e%> C_TAHHEE ; !accee ok

+VAbess:e^WG VABESS ;
+VGen:e^WG%>n VGEN ;

+Actio+Nom:e%>em NOMACT ;
+Actio+Ill:e^CSH%>mân K ;
+Actio+Loc:e^CSH%>mist K ;
+Actio+Com:e^CSH%>máin K ;
+Actio+Ess:e^CSH%>min K ;
+Ger+PxSg1:e^WG%>dijnân K ;
+Ger+PxSg2:e^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:e^WG%>dijnes K ;
+Ger+PxSg3:e^WG%>dijnis K ;
+Ger:e^WG%>dijn K ;
+Der4+Der/NomAct:e%>em FLAG_3EEMEED ;

LEXICON EVEN_IND_PAHHEED   !
+Prs+Sg1:á^WG%>m K ;
+Prs+Sg2:á^WG%>h K ;
+Prs+Sg3:á^CSH K ;
+Prs+Du1:e%>en K ;
+Prs+Du2:e^CSH%>vettee K ;
+Prs+Du3:e%>ev K ;
+Prs+Pl1:e%>ep K ;
+Prs+Pl2:e^CSH%>vetteđ K ;
+Prs+Pl3:e^CSH%>h K ;

+Prt+Sg1:i^CSH^VHIGH^RLEN%>m K ;
+Prt+Sg2:i^CSH^VHIGH^RLEN%>h K ;
+Prt+Sg3:i^WG^VHIGH^RLEN%>j K ;
+Prt+Du1:i^WG^VHIGH^RLEN%>jm K ;
+Prt+Du2:i^WG^VHIGH^RLEN%>jd K ;
+Prt+Du3:i^WG^VHIGH^RLEN%>jn K ;
+Prt+Pl1:i^WG^VHIGH^RLEN%>jm K ;
+Prt+Pl2:i^WG^VHIGH^RLEN%>jd K ;
+Prt+Pl3:i^CLEN^VHIGH%>i3 K ;


LEXICON EVEN_IMPRT_PAHHEED   !
+Sg2:e^WG K ;
+Sg3:o^WG%>s K ;
+Du1:o%>on K ;
+Du2:e%>e K ;
+Du3:o%>os K ;
+Pl1:o%>op K ;
+Pl2:e%>eđ K ;
+Pl3:o%>os K ;


!! ### ID verbs

!! #### 2SYLL\_UADDID
LEXICON 2SYLL_UADDID
!! * 2SYLL_UADDID
!!     - Ind+Prs+Sg1: čálám
!!     - Ind+Prs+Sg3: čáálá
!!     - Ind+Prs+Pl3: čäälih NB! čäällih?
+V: 2SYLL_UADDID_V ;
LEXICON 2SYLL_UADDID_IV
+V+IV: 2SYLL_UADDID_V ;
LEXICON 2SYLL_UADDID_TV
+V+TV: 2SYLL_UADDID_V ;

LEXICON 2SYLL_UADDID_V  ! 3 verbs
VINFINITES_UADDID ;
+Ind: EVEN_IND_UADDID ;
+Cond+Prs:á^WG%> EVEN_COND ;
+Pot+Prs: EVEN_POT_UADDID ;
+Imprt: EVEN_IMPRT_UADDID ;
+Der4+Der/InchL:i^WG#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/st:ist^WG 3_DERIVED ;
+Der1+Der/tt:itt^WG 3_DERIVED ;
!DERL+Der1+Der/l:âl 3_DERIVED_L ; !tojâliđ tooijâl
:á^CSH DER_MAS ;
! no Der/Pass for these 3 verbs

LEXICON VINFINITES_UADDID   !
+Inf:i%>đ K ;
+Ind+Prs+ConNeg:i^WG K ;
+Ind+Prs+ConNeg+Use/NG:e^WG K ;
+Ind+Prt+ConNeg:á%>m K ;
+Cond+Prs+ConNeg:á^WG%>ččii K ;
+Pot+Prs+ConNeg:á^WG%>á K ;
+Imprt+ConNeg: K ;
+PrsPrc:e%>e K ;
+PrfPrc:á%>m K ;
+PrfPrc+Err/Orth:â2%>m K ;
+Der2+Der/NomAg:e C_TAHHEE ;

+VAbess:e^WG VABESS ;
+VAbess+Use/NG:i^WG VABESS ;
+VGen:i^WG%>n VGEN ;

+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i^CSH%>mân K ;
+Actio+Loc:i^CSH%>mist K ;
+Actio+Com:i^CSH%>máin K ;
+Actio+Ess:i^CSH%>min K ;
+Ger+PxSg1:i^WG%>dijnân K ;
+Ger+PxSg1+Err/Orth:e^WG%>dijnân K ;
+Ger+PxSg2:i^WG%>dijnâd K ;
+Ger+PxSg2+Err/Orth:e^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:i^WG%>dijnes K ;
+Ger+PxSg3:i^WG%>dijnis K ;
+Ger+PxSg3+Err/Orth:e^WG%>dijnis K ;
+Ger:i^WG%>dijn K ;
+Ger+Err/Orth:e^WG%>dijn K ;
+Der4+Der/NomAct:i%>m FLAG_3HUKSIM ;

LEXICON EVEN_IND_UADDID   !
+Prs+Sg1:á^WG^VHIGH^RLEN%>m K ;   ! kästiđ
+Prs+Sg2:á^WG^VHIGH^RLEN%>h K ;   ! kästiđ
+Prs+Sg3:á^CSH^VHIGH K ;
+Prs+Du1:e^CLEN%>en K ;
+Prs+Du2:i^CSH%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i^CSH%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i^VBACK%>m K ; ! uáđđi^VBACK>m : oođđ0>im
+Prt+Sg2:i^VBACK%>h K ;
+Prt+Sg3:i^WG^VBACK%>j K ;
+Prt+Du1:i^WG^VBACK%>jm K ;
+Prt+Du2:i^WG^VBACK%>jd K ;
+Prt+Du3:i^WG^VBACK%>jn K ;
+Prt+Pl1:i^WG^VBACK%>jm K ;
+Prt+Pl2:i^WG^VBACK%>jd K ;
+Prt+Pl3:i^VBACK^RVSH%>i3 K ;

LEXICON EVEN_POT_UADDID !
+Sg1:e^WG%>em K ;
+Sg2:e^WG%>eh K ;
+Sg3:i^WG^VBACK%>š K ;
+Du1:i^WG^VBACK^RVSH%>žeen K ;
+Du2:i^WG^VBACK%>švettee K ;
+Du3:i^WG^VBACK^RVSH%>žává K ;
+Pl1:i^WG^VBACK^RVSH%>žep K ;
+Pl2:i^WG^VBACK%>švetteđ K ;
+Pl3:i^WG^VBACK^RVSH%>žeh K ;

LEXICON EVEN_IMPRT_UADDID   !
+Sg2:e^WG K ;
+Sg2+Use/NG:i^WG K ;
+Sg3:u^WG%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:u^CLEN%>s K ;
+Pl1:u^CLEN^VHIGH%>p K ;
+Pl2:i%>đ K ;
+Pl3:u^CLEN%>s K ;

LEXICON 2SYLL_UAINID_TV  !  5 verbs
+V+TV:  VINFINITES_UAINID ;
+V+TV+Ind: EVEN_IND_UAINID ;
+V+TV+Cond+Prs:á^WG%> EVEN_COND ;
+V+TV+Pot+Prs: EVEN_POT_UAINID ;
+V+TV+Imprt: EVEN_IMPRT_UAINID ;
+V+TV+Der4+Der/InchL:i^WG#škyett4 4SYLL_KYETTID_DER ;
+V+TV+Der1+Der/st:ist^WG 3_DERIVED ; !uáinistiđ
+V+TV+Der1+Der/tt:itt^WG 3_DERIVED ; !
!DERL+V+TV+Der1+Der/l:âl 3_DERIVED_L ;
+V+TV:á DER_MAS ;
+V+TV+Der3+Der/Pass:u2^CLEN C_PASS_SH ; ! poldum uástoo

LEXICON VINFINITES_UAINID  !
+Inf:i%>đ K ;
+Ind+Prs+ConNeg:i^WG K ;
+Ind+Prs+ConNeg+Err/Orth:e^WG K ;
+Ind+Prt+ConNeg:á%>m K ;
+Cond+Prs+ConNeg:á^WG%>ččii K ;
+Pot+Prs+ConNeg:á^WG%>á K ;
+Imprt+ConNeg: K ;
+PrsPrc:e%>e K ;
+PrfPrc:á%>m K ;
+PrfPrc+Err/Orth:â2%>m K ;
+Der2+Der/NomAg:e C_TAHHEE ;

+VAbess:i^WG VABESS ;
+VGen:i^WG%>n VGEN ;

+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i%>mân K ;
+Actio+Loc:i%>mist K ;
+Actio+Com:i%>máin K ;
+Actio+Ess:i%>min K ;
+Ger+PxSg1:i^WG%>dijnân K ;
+Ger+PxSg2:i^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:i^WG%>dijnes K ;
+Ger+PxSg3:i^WG%>dijnis K ;
+Ger:i^WG%>dijn K ;
+Ger:e^WG%>dijn K ;
+Der4+Der/NomAct:i%>m FLAG_3HUKSIM ;

LEXICON EVEN_IND_UAINID   !
+Prs+Sg1:á^WG^VHIGH^RLEN%>m K ;   ! uáinám
+Prs+Sg2:á^WG^VHIGH^RLEN%>h K ;   !
+Prs+Sg3:á^VHIGH K ;
+Prs+Du1:e^CLEN%>en K ;
+Prs+Du2:i%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i%>vetteđ K ;
+Prs+Pl3:i%>h K ;

+Prt+Sg1:i^VBACK^RVSH%>m K ; ! oinim
+Prt+Sg2:i^VBACK^RVSH%>h K ; !oinih
+Prt+Sg3:i^WG^VBACK%>j K ;
+Prt+Du1:i^WG^VBACK^RVSH%>jm K ;
+Prt+Du2:i^WG^VBACK^RVSH%>jd K ;
+Prt+Du3:i^WG^VBACK^RVSH%>jn K ;
+Prt+Pl1:i^WG^VBACK%>jm K ;
+Prt+Pl2:i^WG^VBACK%>jd K ;
+Prt+Pl3:i^VBACK^RVSH%>i3 K ;

LEXICON EVEN_POT_UAINID !
+Sg1:e^WG%>em K ;
+Sg2:e^WG%>eh K ;
+Sg3:i^WG^VBACK%>š K ;
+Du1:i^WG^VBACK^RVSH%>žeen K ;
+Du2:i^WG^VBACK%>švettee K ;
+Du3:i^WG^VBACK^RVSH%>žává K ;
+Pl1:i^WG^VBACK^RVSH%>žep K ;
+Pl2:i^WG^VBACK%>švetteđ K ;
+Pl3:i^WG^VBACK^RVSH%>žeh K ;

LEXICON EVEN_IMPRT_UAINID   !
+Sg2+Err/Orth:e^WG K ;
+Sg2:i^WG K ;
+Sg3:u^WG%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:u^CLEN%>s K ;
+Pl1:u^CLEN^VHIGH%>p K ;
+Pl2:i%>đ K ;
+Pl3:u^CLEN%>s K ;


LEXICON 2SYLL_CAALLID !  7 verbs
+V: 2SYLL_CAALLID_V ;
LEXICON 2SYLL_CAALLID_IV
+V+IV: 2SYLL_CAALLID_V ;
LEXICON 2SYLL_CAALLID_TV
+V+TV: 2SYLL_CAALLID_V ;

LEXICON 2SYLL_CAALLID_V  ! 7 verbs
:  VINFINITES_CAALLID ;
+Ind: EVEN_IND_CAALLID ;
+Cond+Prs:á^WG^VHIGH^RVSH%> EVEN_COND ;
+Pot+Prs: EVEN_POT_CAALLID ;
+Imprt: EVEN_IMPRT_CAALLID ;
+Der4+Der/InchL:i^WG#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/st:ist^WG 3_DERIVED ; !čälistiđ OBS! čä^RVlist vs čäällist
+Der1+Der/tt:itt^WG 3_DERIVED ; !čälittiđ OBS! čä^čä^RVlitt vs čäällist
!+V+Der1+Der/d:âd^WG 3_DERIVED ;  ! no Der/d for ID
!DERL+Der1+Der/l:il 3_DERIVED_L ;
:á^CSH^RVSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !

LEXICON VINFINITES_CAALLID   !
+Inf:i%>đ K ;
+Ind+Prs+ConNeg:i^WG^RLEN K ;
+Ind+Prs+ConNeg+Use/NG:e^WG^RVSH K ;
+Ind+Prt+ConNeg:á^VHIGH%>m K ;  !
+Cond+Prs+ConNeg:á^WG^VHIGH^RVSH%>čč%>ii K ;
+Pot+Prs+ConNeg:á^WG^VHIGH^RLEN%>á K ;
+Imprt+ConNeg: K ;
+PrsPrc:e^RVSH%>e K ;
+PrfPrc:á^VHIGH%>m K ;  !
+PrfPrc+Err/Orth:â^VHIGH%>m K ;  ! Perhaps for others as well
!+Der2+Der/NomAg:e^RVSH%> C_TAHHEE ;

+VAbess:i^WG^RVSH VABESS ;
+VGen:i^WG^RLEN%>n VGEN ;

+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i^CSH^RVSH%>mân K ;
+Actio+Loc:i^CSH^RVSH%>mist K ;
+Actio+Com:i^CSH^RVSH%>máin K ;
+Actio+Ess:i^CSH^RVSH%>min K ;
+Ger+PxSg1:i^WG^RVSH%>dijnân K ;
+Ger+PxSg2:i^WG^RVSH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:i^WG^RVSH%>dijnes K ;
+Ger+PxSg3:i^WG^RVSH%>dijnis K ;
+Ger:i^WG^RVSH%>dijn K ;
+Der4+Der/NomAct:i%>m FLAG_3HUKSIM ;


LEXICON EVEN_IND_CAALLID   !
+Prs+Sg1:á^WG^VHIGH^RVSH%>m K ;
+Prs+Sg2:á^WG^VHIGH^RVSH%>h K ;
+Prs+Sg3:á^CSH^VHIGH K ;
+Prs+Du1:e^CLEN^RVSH%>en K ;
+Prs+Du2:i^CSH^RVSH%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i^CSH^RVSH%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i^VBACK%>m K ;
+Prt+Sg2:i^VBACK%>h K ;
+Prt+Sg3:i^WG^VBACK%>j K ;        ! XX aä
+Prt+Du1:i^WG^VBACK%>jm K ;
+Prt+Du2:i^WG^VBACK%>jd K ;
+Prt+Du3:i^WG^VBACK%>jn K ;
+Prt+Pl1:i^WG^VBACK%>jm K ;
+Prt+Pl2:i^WG^VBACK%>jd K ;
+Prt+Pl3:i^VBACK^RVSH%>i3 K ;

LEXICON EVEN_POT_CAALLID !
+Sg1:e^WG%>em K ;
+Sg2:e^WG%>eh K ;
+Sg3:i^WG^VBACK%>š K ;
+Du1:i^WG^VBACK^RVSH%>žeen K ;
+Du2:i^WG^VBACK%>švettee K ;
+Du3:i^WG^VBACK^RVSH%>žává K ;
+Pl1:i^WG^VBACK^RVSH%>žep K ;
+Pl2:i^WG^VBACK%>švetteđ K ;
+Pl3:i^WG^VBACK^RVSH%>žeh K ;

LEXICON EVEN_IMPRT_CAALLID !
+Sg2:i^WG K ;
+Sg2+Use/NG:e^WG^RVSH K ;
+Sg3:u^WG^VHIGH%>s K ;
+Du1:o^VHIGH^RVSH%>on K ;
+Du2:e^RVSH%>e K ;
+Du3:u^VHIGH%>s K ;
+Pl1:u^VHIGH%>p K ;
+Pl2:i%>đ K ;
+Pl3:u^VHIGH%>s K ;

!LEXICON JUAVVID !  **@CODE@** incomplete paradigm, to be fixed
!! as 2SYLL_ID, but only 3 person
!+V+Inf:i%>đ K ;
!+V+Ind+Prs+ConNeg: K ;
!+V+Ind+Prt+ConNeg:ám K ; ! XXX fix
!+V+Ind+Prt+ConNeg+Err/Orth:âm K ; ! XXX fix
!+V+Cond+Prs+ConNeg:ččii K ;
!+V+Pot+Prs+ConNeg:á%>á K ;
!+V+Imprt+ConNeg: K ;
!
!+V+Ind+Prs+Sg3:á^CSH^VHIGH K ;
!+V+Ind+Prt+Sg3:â^WG%>i K ;
!+V+Cond+Prs:i^WG%> EVEN_COND ;
!+V+Pot+Prs+Sg3:i%>š K ;
!+V+Imprt: EVEN_IMPRT_ID ;

!! #### 2SYLL\_ID celkkiđ
LEXICON 2SYLL_ID
+V: 2SYLL_ID_V ;
LEXICON 2SYLL_ID_IV
+V+IV: 2SYLL_ID_V ;
LEXICON 2SYLL_ID_TV
+V+TV: 2SYLL_ID_V ;

LEXICON 2SYLL_ID_V
: VINFINITES_ID ;
+Ind: EVEN_IND_ID ;
+Cond+Prs:á^WG^VHIGH%> EVEN_COND ; !
+Pot+Prs: EVEN_POT_ID ;
+Imprt: EVEN_IMPRT_ID ;
+Der4+Der/InchL:i^WG^RVSH#škyett4 4SYLL_KYETTID_DER ; !vyelgi#škuođij kevti#škyettiđ rähti#škyettiđ
+Der1+Der/st:ist^WG 3_DERIVED ; !
+Der1+Der/tt:itt^WG 3_DERIVED ; !
!+Der1+Der/d:âd^WG 3_DERIVED ; !juovâd vs jyeh^RCâd  ! no Der/d for ID
!DERL+Der1+Der/l:il 3_LEKKASID ; !vyerdiliđ vyerd väzziliđ
:á^CSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !lovdum  jyeh^RC: juohhuđ ! juohhuđ

LEXICON VINFINITES_ID  !
+Inf:i%>đ K ;
+Ind+Prs+ConNeg:i^WG^RLEN K ;
+Ind+Prt+ConNeg:á^VHIGH%>m K ;  !
+Cond+Prs+ConNeg:á^WG^VHIGH%>ččii K ;  !
+Pot+Prs+ConNeg:á^WG^CLEN^VHIGH%>á K ;  !
+Imprt+ConNeg:i K ;
+PrfPrc:á^VHIGH%>m K ;  !
+PrfPrc+Err/Orth:â2^VHIGH%>m K ;  !
+PrsPrc:e^CLEN^RVSH%>e K ;
+Der2+Der/NomAg:e^CLEN^RVSH%> C_TAHHEE ; !vuástáväldee, oovdânpyehtee ok

+VAbess:i^WG^RVSH VABESS ;
+VGen:i^WG^RLEN%>n VGEN ; !vääzin

+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i^RVSH%>mân K ;
+Actio+Loc:i^RVSH%>mist K ;
+Actio+Com:i^RVSH%>máin K ;
+Actio+Ess:i^RVSH%>min K ;
+Der4+Der/NomAct:i^RVSH%>m FLAG_3HUKSIM ;
+Ger:i^WG%>dijn K ;
+Ger:i^WG^RVSH%>dijn K ;
+Ger+PxSg1:i^WG%>dijnân K ;
+Ger+PxSg2:i^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:i^WG%>dijnes K ;
+Ger+PxSg3:i^WG%>dijnis K ; !väzidijnis


LEXICON EVEN_IND_ID  !
+Prs+Sg1:á^WG^VHIGH^RLEN%>m K ;   !
+Prs+Sg2:á^WG^VHIGH^RLEN%>h K ;   !
+Prs+Sg3:á^VHIGH K ;              !
+Prs+Du1:e^CLEN^RVSH%>en K ;
+Prs+Du2:i^RVSH%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i^RVSH%>vetteđ K ;
+Prs+Pl3:i%>h K ;

+Prt+Sg1:i^CLEN^VBACK^RVSH%>m K ;  !uo juohim ! ^VBACK
+Prt+Sg2:i^CLEN^VBACK^RVSH%>h K ;	!uo	juohih
+Prt+Sg3:i^WG^VBACK^RLEN%>i K ;
+Prt+Du1:i^WG^CLEN^VBACK^RVSH%>im K ;
+Prt+Du2:i^WG^CLEN^VBACK^RVSH%>id K ;
+Prt+Du3:i^WG^CLEN^VBACK^RVSH%>in K ;
+Prt+Pl1:i^WG^VBACK^RLEN%>im K ;
+Prt+Pl2:i^WG^VBACK^RLEN%>id K ;
+Prt+Pl3:i^CLEN^VBACK^RVSH%>i3 K ; !uo


!! #### 2SYLL\_EELLID
LEXICON 2SYLL_EELLID
!! * 2SYLL_EELLID: iälám iälá eelih ij ele
+V: 2SYLL_EELLID_V ;

LEXICON 2SYLL_EELLID_IV
+V+IV: 2SYLL_EELLID_V ;

LEXICON 2SYLL_EELLID_V  ! iälám iälá eelih ij ele. 4 verbs
: VINFINITES_EELLID ;
+Ind: EVEN_IND_EELLID ;
+Cond+Prs:á^WG^VHIGH%> EVEN_COND ; !
+Pot+Prs: EVEN_POT_TIETTID ;
+Imprt: EVEN_IMPRT_EELLID ;
+Der4+Der/InchL:e^WG#škyett4 4SYLL_KYETTID_DER ; !eele#škyettiđ
+Der1+Der/st:ist^WG 3_DERIVED ;
+Der1+Der/tt:itt^WG 3_DERIVED ;
!DERL+Der1+Der/l:il 3_DERIVED_L ;
:á^CSH^RVSH DER_MAS ;
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; !eellum

LEXICON VINFINITES_EELLID !  !!≈ ** **@CODE@**
+Inf:i%>đ K ;
+Ind+Prs+ConNeg:e^WG^RVSH K ;  !
+Ind+Prs+ConNeg+Err/Orth:i^WG K ;
+Ind+Prt+ConNeg:á^VHIGH%>m K ;  !
+Cond+Prs+ConNeg:á^WG^VHIGH%>ččii K ;  !
+Pot+Prs+ConNeg:á^WG^CLEN^VHIGH%>á K ;  !
+Imprt+ConNeg:i K ;
+PrsPrc:e^CLEN^RVSH%>e K ;
+PrfPrc:á^VHIGH%>m K ;  !
+PrfPrc+Err/Orth:â2^VHIGH%>m K ;  !
+Der2+Der/NomAg:e^CLEN^RVSH%> C_TAHHEE ; !vuástáväldee, oovdânpyehtee ok

+VAbess:e^WG^RVSH VABESS ;
+VGen:e^WG^RVSH%>n VGEN ;

+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i^CSH^RVSH%>mân K ;
+Actio+Loc:i^CSH^RVSH%>mist K ;
+Actio+Com:i^CSH^RVSH%>máin K ;
+Actio+Ess:i^CSH^RVSH%>min K ;
+Ger:e^WG^RVSH%>dijn K ;
+Der4+Der/NomAct:i^RVSH%>m FLAG_3HUKSIM ;

LEXICON EVEN_IND_EELLID !
+Prs+Sg1:á^WG^VHIGH^RLEN%>m K ;   !
+Prs+Sg2:á^WG^VHIGH^RLEN%>h K ;   !
+Prs+Sg3:á^CSH^VHIGH K ;              !
+Prs+Du1:e^CLEN^RVSH%>en K ;
+Prs+Du2:i^CSH^RVSH%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i^CSH^RVSH%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i%>m K ;
+Prt+Sg2:i%>h K ;
+Prt+Sg3:i^WG^RLEN%>i K ;
+Prt+Du1:i^WG%>im K ;
+Prt+Du2:i^WG%>id K ;
+Prt+Du3:i^WG%>in K ;
+Prt+Pl1:i^WG^RLEN%>im K ;
+Prt+Pl2:i^WG^RLEN%>id K ;
+Prt+Pl3:i^CLEN^RVSH%>i3 K ;

LEXICON EVEN_IMPRT_EELLID !
+Sg2:e^WG^RVSH K ;  !
+Sg3:u^WG^VHIGH^RLEN%>s K ;  !
+Du1:o^CLEN^VHIGH%>on K ;
+Du2:e^CLEN^RVSH%>e K ;
+Du3:u^VHIGH%>s K ;         !
+Pl1:u^CLEN^VHIGH%>p K ;   !
+Pl2:i%>đ K ;
+Pl3:u^VHIGH%>s K ;       !

LEXICON 2SYLL_KEESSID
+V: 2SYLL_KEESSID_V ;

!LEXICON 2SYLL_KEESSID_IV
!+V+IV: 2SYLL_KEESSID_V ;

LEXICON 2SYLL_KEESSID_TV
+V+TV: 2SYLL_KEESSID_V ;

LEXICON 2SYLL_KEESSID_V  ! like EELLID except from Prs+ConNeg. 4 verbs
: VINFINITES_KEESSID ;
+Ind: EVEN_IND_KEESSID ;
+Cond+Prs:á^WG^VHIGH%> EVEN_COND ; !
+Pot+Prs: EVEN_POT_ID ;
+Imprt: EVEN_IMPRT_KEESSID ;
+Der4+Der/InchL:i^WG^RVSH#škyett4 4SYLL_KYETTID_DER ; !kesi#škuáđám
+Der1+Der/st:ist^WG 3_DERIVED ;
+Der1+Der/tt:itt^WG 3_DERIVED ;
!DERL+Der1+Der/l:il 3_DERIVED_L ;
:á^CSH^VHIGH^RLEN DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; ! keessum

LEXICON VINFINITES_KEESSID !
+Inf:i%>đ K ;
+Ind+Prs+ConNeg:i^WG K ;  !
+Ind+Prt+ConNeg:á^VHIGH%>m K ;  !
+Cond+Prs+ConNeg:á^WG^VHIGH%>ččii K ;  !
+Pot+Prs+ConNeg:á^WG^CLEN^VHIGH%>á K ;  !
+Imprt+ConNeg:i K ;
+PrsPrc:e^CLEN^RVSH%>e K ; ! pehhee
+PrfPrc:á^VHIGH%>m K ;  !
+PrfPrc+Err/Orth:â2^VHIGH%>m K ;  !
+Der2+Der/NomAg:e^CLEN^RVSH%> C_TAHHEE ; !vuástáväldee, oovdânpyehtee ok
+Ind+Prs+ConNeg:i^WG K ;

+VAbess:i^WG^RVSH VABESS ;
+VGen:i^WG%>n VGEN ;


+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i^CSH^RVSH%>mân K ;
+Actio+Loc:i^CSH^RVSH%>mist K ;
+Actio+Com:i^CSH^RVSH%>máin K ;
+Actio+Ess:i^CSH^RVSH%>min K ;
+Ger:i^WG^RVSH%>dijn K ;
+Der4+Der/NomAct:i^RVSH%>m FLAG_3HUKSIM ;

LEXICON EVEN_IND_KEESSID  !
+Prs+Sg1:á^WG^VHIGH^RLEN%>m K ;   !
+Prs+Sg2:á^WG^VHIGH^RLEN%>h K ;   !
+Prs+Sg3:á^CSH^VHIGH K ;              !
+Prs+Du1:e^CLEN^RVSH%>en K ;
+Prs+Du2:i^CSH^RVSH%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i^CSH^RVSH%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i%>m K ;
+Prt+Sg2:i%>h K ;
+Prt+Sg3:i^WG^RLEN%>i K ;
+Prt+Du1:i^WG^CLEN^RVSH%>im K ;
+Prt+Du2:i^WG^CLEN^RVSH%>id K ;
+Prt+Du3:i^WG^CLEN^RVSH%>in K ;
+Prt+Pl1:i^WG^RLEN%>im K ;
+Prt+Pl2:i^WG^RLEN%>id K ;
+Prt+Pl3:i^CLEN^RVSH%>i3 K ;

LEXICON EVEN_IMPRT_KEESSID !
+Sg2:i^WG K ;  !
+Sg3:u^WG^VHIGH^RLEN%>s K ;  !
+Du1:o^CLEN^VHIGH%>on K ;
+Du2:e^CLEN^RVSH%>e K ;
+Du3:u^VHIGH%>s K ;         !
+Pl1:u^CLEN^VHIGH%>p K ;   !
+Pl2:i%>đ K ;
+Pl3:u^VHIGH%>s K ;       !


!LEXICON 2SYLL_PAACCID
!! * 2SYLL_PAACCID pääcciđ
!!     - Ind+Prs+Sg1: páásám
!!     - Ind+Prs+Sg3: páácá
!!     - Ind+Prs+Pl3: pääcih NB! pääccih?
!+V: 2SYLL_PAACCID_V ;
LEXICON 2SYLL_PAACCID_IV
+V+IV: 2SYLL_PAACCID_V ;
LEXICON 2SYLL_PAACCID_TV
+V+TV: 2SYLL_PAACCID_V ;

LEXICON 2SYLL_PAACCID_V  ! 5 verbs
VINFINITES_PAACCID ;
+Ind: EVEN_IND_PAACCID ;
+Cond+Prs:á^WG^VHIGH^RVSH%> EVEN_COND ; !
+Pot+Prs: EVEN_POT_PAACCID ;
+Imprt: EVEN_IMPRT_PAACCID ;
+Der4+Der/InchL:e^WG^RVSH#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/st:ist^WG 3_DERIVED ;
+Der1+Der/tt:itt^WG 3_DERIVED ;
!DERL+Der1+Der/l:il 3_DERIVED_L ;
:á^CSH^RVSH DER_MAS ;
+Der3+Der/Pass:u2^CLEN C_PASS_SH_RVSH ; !

LEXICON VINFINITES_PAACCID !
+Inf:i%>đ K ;
+Ind+Prs+ConNeg:i^WG K ;
+Ind+Prt+ConNeg:á^VHIGH%>m K ;
+Cond+Prs+ConNeg:á^WG^VHIGH^RVSH%>ččii K ;
+Pot+Prs+ConNeg:i^WG^VBACK%>i3 K ;
+Imprt+ConNeg:i K ;
+PrfPrc:á^VHIGH%>m K ;  !
+PrfPrc+Err/Orth:â2^VHIGH%>m K ;  !
+PrsPrc:e^RVSH%>e K ;
+Der2+Der/NomAg:e^RVSH%> C_TAHHEE ;

+VAbess:i^WG^RVSH VABESS ;
+VAbess+Err/Orth:i^WG%>hennáá K ;
+VAbess+Err/Orth:i^WG%>hinnáá K ;
+VGen:i^WG%>n VGEN ;

+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i^CSH^RVSH%>mân K ;
+Actio+Loc:i^CSH^RVSH%>mist K ;
+Actio+Com:i^CSH^RVSH%>máin K ;
+Actio+Ess:i^CSH^RVSH%>min K ;
+Ger:i^WG^RVSH%>dijn K ;
+Ger+PxSg1:i^WG%>dijnân K ;
+Ger+PxSg2:i^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:i^WG%>dijnes K ;
+Ger+PxSg3:i^WG%>dijnis K ;
+Ger+Err/Orth:e^WG%>dijn K ;
+Der4+Der/NomAct:i%>m FLAG_3HUKSIM ;


LEXICON EVEN_IND_PAACCID !
+Prs+Sg1:á^WG^VHIGH%>m K ;
+Prs+Sg2:á^WG^VHIGH%>h K ;   !
+Prs+Sg3:á^CSH^VHIGH K ;
+Prs+Du1:e^CLEN^RVSH%>en K ;
+Prs+Du2:i^CSH^RVSH%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i^CSH^RVSH%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i^VBACK%>m K ;
+Prt+Sg2:i^VBACK%>h K ;
+Prt+Sg3:i^WG^VBACK%>i K ;
+Prt+Du1:i^WG^CLEN^VBACK^RVSH%>im K ; !pääc^RC
+Prt+Du2:i^WG^CLEN^VBACK^RVSH%>id K ;
+Prt+Du3:i^WG^CLEN^VBACK^RVSH%>in K ;
+Prt+Pl1:i^WG^VBACK%>im K ;
+Prt+Pl2:i^WG^VBACK%>id K ;
+Prt+Pl3:i^VBACK^RVSH%>i3 K ;

LEXICON EVEN_IMPRT_PAACCID !
+Sg2:i^WG K ;  !
+Sg3:u^WG^VHIGH^RLEN%>s K ;
+Du1:o^CLEN^RVSH%>on K ;
+Du2:e^CLEN^RVSH%>e K ;
+Du3:u^CLEN^VHIGH^RLEN%>s K ;
+Pl1:u^CLEN^VHIGH^RLEN%>p K ;
+Pl2:i^CLEN%>đ K ;
+Pl3:u^CLEN^VHIGH^RLEN%>s K ;

LEXICON EVEN_POT_PAACCID !
+Sg1:e^WG^CLEN^RVSH%>em K ;
+Sg2:e^WG^CLEN^RVSH%>eh K ;
+Sg3:i^WG^VBACK%>š K ;
+Du1:i^WG^VBACK^RVSH%>žeen K ;
+Du2:i^WG^VBACK%>švettee K ;
+Du3:i^WG^VBACK^RVSH%>žává K ;
+Pl1:i^WG^VBACK^RVSH%>žep K ;
+Pl2:i^WG^VBACK%>švetteđ K ;
+Pl3:i^WG^VBACK^RVSH%>žeh K ;


!! #### 2SYLL_VYELGID like VYEIJID, but -i for reduced forms. 7 verbs
LEXICON 2SYLL_VYELGID_IV
+V+IV: 2SYLL_VYELGID_V ;
LEXICON 2SYLL_VYELGID_TV
+V+TV: 2SYLL_VYELGID_V ;

LEXICON 2SYLL_VYELGID_V  
! common with vyejid
2SYLL_VYEIJID_VYELGID_COMMON ;
! different from vyeijid
+Ind+Prs+ConNeg:i^WG^RLEN K ;
+Imprt+Sg2:i^WG^RLEN K ;  !
+Imprt+ConNeg:i K ;
+VGen:i^WG^RLEN%>n VGEN ;

+Ind: EVEN_IND_VYELGID ;
+Der4+Der/InchL:i^CSH#škyett4 4SYLL_KYETTID_DER ; !myetiš kyettip
!DERL+Der1+Der/l:l 3_DERIVED_L ;
:á^VHIGH DER_MAS ;
+Ger+PxSg1:i^WG^RVSH%>dijnân K ;
+Ger+PxSg2:i^WG^RVSH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:i^WG^RVSH%>dijnes K ;
+Ger+PxSg3:i^WG^RVSH%>dijnis K ;
+Ger+Err/Orth:i^WG^RVSH%>dijn K ;
+Ger:i^WG%>dijn K ;

LEXICON EVEN_IND_VYELGID  !
+Prs+Sg1:á^WG^VHIGH^RLEN%>m K ;   !
+Prs+Sg2:á^WG^VHIGH^RLEN%>h K ;   !
+Prs+Sg3:á^VHIGH K ;              !
+Prs+Du1:e^CLEN^RVSH%>en K ;
+Prs+Du2:i^RVSH%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i^RVSH%>vetteđ K ;
+Prs+Pl3:i%>h K ;

+Prt+Sg1:i^VBACK^RLEN%>m K ;
+Prt+Sg2:i^VBACK^RLEN%>h K ;
+Prt+Sg3:i^WG^VBACK^RLEN%>i K ;
+Prt+Du1:i^WG^CLEN^VBACK^RVSH%>im K ;
+Prt+Du2:i^WG^CLEN^VBACK^RVSH%>id K ;
+Prt+Du3:i^WG^CLEN^VBACK^RVSH%>in K ;
+Prt+Pl1:i^WG^VBACK^RLEN%>im K ;
+Prt+Pl2:i^WG^VBACK^RLEN%>id K ;
+Prt+Pl3:i^CLEN^VBACK^RLEN%>i3 K ;


LEXICON 2SYLL_VYEIJID_IV
+V+IV: 2SYLL_VYEIJID_V ;
LEXICON 2SYLL_VYEIJID_TV
+V+TV: 2SYLL_VYEIJID_V ;

LEXICON 2SYLL_VYEIJID_V  !  5 verbs
! common with vyelgid
2SYLL_VYEIJID_VYELGID_COMMON ;

! Different from vyelgid
+Ind+Prs+ConNeg:e^WG^RVSH K ;
+Imprt+Sg2:e^WG^RVSH K ;  !
+Imprt+ConNeg:e K ;
+VGen:e^WG^RVSH%>n VGEN ;

+Ind: EVEN_IND_VYEIJID ;
+Der4+Der/InchL:e^CSH#škyett4 4SYLL_KYETTID_DER ;
!DERL+Der1+Der/l:il 3_DERIVED_L_CLEN ; ! vyeijiliđ
:á^CSH DER_MAS ;
+Ger:e^WG%>dijn K ;
+Ger+PxSg1:e^WG^RVSH%>dijnân K ;
+Ger+PxSg2:e^WG^RVSH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:e^WG^RVSH%>dijnes K ;
+Ger+PxSg3:e^WG^RVSH%>dijnis K ;
+Ger+Err/Orth:e^WG^RVSH%>dijn K ;

LEXICON EVEN_IND_VYEIJID !
+Prs+Sg1:á^WG^VHIGH%>m K ;   !
+Prs+Sg2:á^WG^VHIGH%>h K ;   !
+Prs+Sg3:á^CSH^VHIGH K ;              !
+Prs+Du1:e^CLEN^RVSH%>en K ;
+Prs+Du2:i^CSH^RVSH%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i^CSH^RVSH%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i^VBACK^RLEN%>m K ;
+Prt+Sg2:i^VBACK^RLEN%>h K ;
+Prt+Sg3:i^WG^VBACK^RLEN%>i K ;
+Prt+Du1:i^WG^VBACK^RLEN%>im K ;
+Prt+Du2:i^WG^VBACK^RLEN%>id K ;
+Prt+Du3:i^WG^VBACK^RLEN%>in K ;
+Prt+Pl1:i^WG^VBACK^RLEN%>im K ;
+Prt+Pl2:i^WG^VBACK^RLEN%>id K ;
+Prt+Pl3:i^CLEN^VBACK^RVSH%>i3 K ;


! start 3
LEXICON 2SYLL_JYEHID_IV ! Still not in use, comment in when needed.
+V+IV: 2SYLL_JYEHID_V ;

LEXICON 2SYLL_JYEHID_TV
+V+TV: 2SYLL_JYEHID_V ;

LEXICON 2SYLL_JYEHID_V  !  5 verbs
! common with vyelgid
2SYLL_VYEIJID_VYELGID_COMMON ;

! Different from vyelgid and from vyeijid
+Ind+Prs+ConNeg:i^WG K ;
+Imprt+Sg2:i^WG K ;  !
+Imprt+ConNeg:i^WG K ;
+Ind: EVEN_IND_JYEHID ;
+Der4+Der/InchL:i^WG#škyett4 4SYLL_KYETTID_DER ;
:á^CSH DER_MAS ;
+Ger:i^WG%>dijn K ;
+Ger+PxSg1:i^WG^RVSH%>dijnân K ;
+Ger+PxSg2:i^WG^RVSH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:i^WG^RVSH%>dijnes K ;
+Ger+PxSg3:i^WG^RVSH%>dijnis K ;
+Ger+Err/Orth:i^WG^RVSH%>dijn K ;
+VGen:i^WG^RVSH%>n VGEN ;

LEXICON EVEN_IND_JYEHID !
+Prs+Sg1:á^WG^VHIGH%>m K ;   !
+Prs+Sg2:á^WG^VHIGH%>h K ;   !
+Prs+Sg3:á^CSH^VHIGH K ;              !
+Prs+Du1:e^CLEN^RVSH%>en K ;
+Prs+Du2:i^CSH^RVSH%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i^CSH^RVSH%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i^VBACK^RLEN%>m K ;
+Prt+Sg2:i^VBACK^RLEN%>h K ;
+Prt+Sg3:i^WG^VBACK^RLEN%>i K ;
+Prt+Du1:i^WG^CLEN^VBACK^RLEN%>im K ; ! Should have -vv- juovvijm
+Prt+Du2:i^WG^CLEN^VBACK^RLEN%>id K ; ! Should have -vv- juovvijd
+Prt+Du3:i^WG^CLEN^VBACK^RLEN%>in K ; ! Should have -vv- juovvijn
+Prt+Pl1:i^WG^VBACK^RLEN%>im K ;
+Prt+Pl2:i^WG^VBACK^RLEN%>id K ;
+Prt+Pl3:i^CLEN^VBACK^RVSH%>i3 K ;


LEXICON 2SYLL_VYEIJID_VYELGID_COMMON  !
VINFINITES_VYEIJID_VYELGID ;
+Cond+Prs:á^WG^VHIGH%> EVEN_COND ; !
+Pot+Prs: EVEN_POT_VYEIJID ;
+Imprt: EVEN_IMPRT_VYEIJID ;
+Der1+Der/st:ist^WG 3_DERIVED ;
+Der1+Der/tt:itt^WG 3_DERIVED ;
+Der3+Der/Pass:u2 C_PASS_SH_RLEN ; !


LEXICON VINFINITES_VYEIJID_VYELGID  !
+Inf:i%>đ K ;
+Ind+Prt+ConNeg:á^VHIGH%>m K ;  !
+Cond+Prs+ConNeg:á^WG^VHIGH%>ččii K ;  !
+Pot+Prs+ConNeg:á^WG^CLEN^VHIGH%>á K ;  !
+PrsPrc:e^CLEN^RVSH%>e K ;
+PrfPrc:á^VHIGH%>m K ;  !
+PrfPrc+Err/Orth:â2^VHIGH%>m K ;  !
+Der2+Der/NomAg:e^CLEN^RVSH%> C_TAHHEE ;

+VAbess:e^WG^RVSH VABESS ;
+VAbess+Err/Orth:e^WG^RVSH%>hennáá K ;
+VAbess+Err/Orth:e^WG^RVSH%>hinnáá K ;

+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i^CSH%>mân K ;
+Actio+Loc:i^CSH%>mist K ;
+Actio+Com:i^CSH%>máin K ;
+Actio+Ess:i^CSH%>min K ;
+Der4+Der/NomAct:i%>m FLAG_3HUKSIM ;

LEXICON EVEN_POT_VYEIJID !
+Sg1:e^WG^VBACK^RLEN%>em K ;
+Sg2:e^WG^VBACK^RLEN%>eh K ;
+Sg3:i^WG^VBACK^RLEN%>š K ;
+Du1:i^WG^VBACK%>žeen K ;
+Du2:i^WG^VBACK^RLEN%>švettee K ;
+Du3:i^WG^VBACK^RLEN%>žává K ;
+Pl1:i^WG^VBACK^RLEN%>žep K ;
+Pl2:i^WG^VBACK^RLEN%>švetteđ K ;
+Pl3:i^WG^VBACK^RLEN%>žeh K ;

LEXICON EVEN_IMPRT_VYEIJID !
+Sg3:u^WG^VHIGH^RLEN%>s K ;  !
+Du1:o^CLEN^VHIGH%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:u^CLEN^VHIGH%>s K ;         !
+Pl1:u^CLEN^VHIGH%>p K ;   !
+Pl2:i%>đ K ;
+Pl3:u^CLEN^VHIGH%>s K ;       !


LEXICON 2SYLL_KASTID
+V: 2SYLL_KASTID_V ;
LEXICON 2SYLL_KASTID_IV
+V+IV: 2SYLL_KASTID_V ;
LEXICON 2SYLL_KASTID_TV
+V+TV: 2SYLL_KASTID_V ;

LEXICON 2SYLL_KASTID_V  ! 9 verbs
:  VINFINITES_KASTID ;
+Ind: EVEN_IND_KASTID ;
+Cond+Prs:á^VHIGH%> EVEN_COND ;
+Pot+Prs: EVEN_POT_KASTID ;
+Imprt: EVEN_IMPRT_KASTID ;
+Der4+Der/InchL:i^WG#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/st:ist^WG 3_DERIVED ;
+Der1+Der/tt:itt^WG 3_DERIVED ;
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:á^CSH DER_MAS ;
+Der3+Der/Pass:u2 C_PASS_SH_RVSH ; !

LEXICON VINFINITES_KASTID  ! kä^RVst
+Inf:i%>đ K ;

+Ind+Prs+ConNeg:i^WG^RLEN K ;
+Ind+Prt+ConNeg:á^VHIGH%>m K ;
+Cond+Prs+ConNeg:á^WG^VHIGH%>ččii K ;
+Pot+Prs+ConNeg:á^WG^VHIGH%>á K ;
+PrsPrc:e%>e K ;
+PrfPrc:á^VHIGH%>m K ;
+PrfPrc+Err/Orth:â2^VHIGH%>m K ;
+Der2+Der/NomAg:e C_TAHHEE ;
+VAbess:i^WG VABESS ;
+VGen:i^WG^RLEN%>n VGEN ;


+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i%>mân K ;
+Actio+Loc:i%>mist K ;
+Actio+Com:i%>máin K ;
+Actio+Ess:i%>min K ;
+Ger:i%>dijn K ;
+Der4+Der/NomAct:i%>m FLAG_3HUKSIM ;


LEXICON EVEN_IND_KASTID !
+Prs+Sg1:á^VHIGH^RLEN%>m K ;
+Prs+Sg2:á^VHIGH^RLEN%>h K ;
+Prs+Sg3:á^VHIGH K ;
+Prs+Du1:e^CLEN^RVSH%>en K ;
+Prs+Du2:i%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i%>vetteđ K ;
+Prs+Pl3:i%>h K ;

+Prt+Sg1:i^VBACK%>m K ;
+Prt+Sg2:i^VBACK%>h K ;
+Prt+Sg3:i^WG^RLEN%>i K ;
+Prt+Du1:i^WG%>im K ;
+Prt+Du2:i^WG%>id K ;
+Prt+Du3:i^WG%>in K ;
+Prt+Pl1:i^WG^RLEN%>im K ;
+Prt+Pl2:i^WG^RLEN%>id K ;
+Prt+Pl3:i^CLEN^VBACK%>i3 K ;

LEXICON EVEN_POT_KASTID !
+Sg1:i^WG^VBACK%>žeem K ;
+Sg2:i^WG^VBACK%>žeeh K ;
+Sg3:i^WG^VBACK^RLEN%>š K ;
+Du1:i^WG^VBACK%>žeen K ;
+Du2:i^WG^VBACK^RLEN%>švettee K ;
+Du3:i^WG^VBACK%>žává K ;
+Pl1:i^WG^VBACK%>žep K ;
+Pl2:i^WG^VBACK^RLEN%>švetteđ K ;
+Pl3:i^WG^VBACK%>žeh K ;

LEXICON EVEN_IMPRT_KASTID  !
+Sg2:i^WG^RLEN K ;
+Sg3:u^WG^VHIGH^RLEN%>s K ;
+Du1:o^VHIGH%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:u^CLEN^VHIGH%>s K ;
+Pl1:u^CLEN^VHIGH%>p K ;
+Pl2:i%>đ K ;
+Pl3:u^CLEN^VHIGH%>s K ;


LEXICON 2SYLL_TIETTID_TV
+V+TV: 2SYLL_TIETTID_V ;

LEXICON 2SYLL_TIETTID_V  ! only 1 verb: tiettiđ. Ind+Prs+ConNeg: tieđe vs. Ind+Prs+ConNeg: kieldi 2SYLL_ID
VINFINITES_TIETTID ;
+Ind: EVEN_IND_TIETTID ;
+Cond+Prs:á^WG^VHIGH%> EVEN_COND ;
+Pot+Prs: EVEN_POT_TIETTID ;
+Imprt: EVEN_IMPRT_TIETTID ;
+Der4+Der/InchL:e^WG#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/st:est^WG 3_DERIVED ;
+Der1+Der/tt:ett^WG 3_DERIVED ;  !tieđettiđ
+Der1+Der/d:âd^WG 3_DERIVED ; !
:á^CSH^VHIGH DER_MAS ;
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; !
! No Der/l for tiettiđ

LEXICON VINFINITES_TIETTID !
+Inf:i%>đ K ;
+Ind+Prs+ConNeg:e^WG^RVSH K ;
+Ind+Prs+ConNeg+Err/Orth:e^RVSH K ;
+Ind+Prt+ConNeg:á^VHIGH%>m K ;
+Cond+Prs+ConNeg:á^WG^VHIGH%>ččii K ;
+Pot+Prs+ConNeg:á^WG^VHIGH%>á K ;
+PrsPrc:e^RVSH%>e K ;
+PrfPrc:á^VHIGH%>m K ;
+PrfPrc+Err/Orth:â2^VHIGH%>m K ;
+Der2+Der/NomAg:e^RVSH%> C_TAHHEE ;

+VAbess:e^WG^RVSH VABESS ;
+VGen:e^WG^RVSH%>n VGEN ;

+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i^CSH%>mân K ;
+Actio+Loc:i^CSH%>mist K ;
+Actio+Com:i^CSH%>máin K ;
+Actio+Ess:i^CSH%>min K ;
+Ger+PxSg1:e^WG%>dijnân K ;
+Ger+PxSg2:e^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:e^WG%>dijnes K ;
+Ger+PxSg3:e^WG%>dijnis K ;
+Ger:e^WG%>dijn K ;
+Der4+Der/NomAct:i%>m FLAG_3HUKSIM ;


LEXICON EVEN_IND_TIETTID !
+Prs+Sg1:á^WG^VHIGH%>m K ;
+Prs+Sg2:á^WG^VHIGH%>h K ;
+Prs+Sg3:á^CSH^VHIGH K ;
+Prs+Du1:e^CLEN^RVSH%>en K ;
+Prs+Du2:i^CSH%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;
+Prs+Pl2:i^CSH%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;
+Prs+Pl3+Err/Orth:i%>h K ;

+Prt+Sg1:i%>m K ;
+Prt+Sg2:i%>h K ;
+Prt+Sg3:i^WG%>j K ;
+Prt+Du1:i^WG%>jm K ;
+Prt+Du2:i^WG%>jd K ;
+Prt+Du3:i^WG%>jn K ;
+Prt+Pl1:i^WG%>jm K ;
+Prt+Pl2:i^WG%>jd K ;
+Prt+Pl3:i^RVSH%>i3 K ;

LEXICON EVEN_POT_TIETTID !
+Sg1:e^WG^RLEN%>em K ;
+Sg2:e^WG^RLEN%>eh K ;
+Sg3:i^WG%>š K ;
+Du1:i^WG^RVSH%>žeen K ;
+Du2:i^WG%>švettee K ;
+Du3:i^WG^RVSH%>žává K ;
+Pl1:i^WG^RVSH%>žep K ;
+Pl2:i^WG%>švetteđ K ;
+Pl3:i^WG^RVSH%>žeh K ;

LEXICON EVEN_IMPRT_TIETTID !
+Sg2:e^WG K ;
+Sg3:u^WG^VHIGH%>s K ;
+Du1:o^CLEN^VHIGH%>on K ;
+Du2:e^CLEN%>e K ;
+Du3:u^CLEN^VHIGH%>s K ;
+Pl1:u^CLEN^VHIGH%>p K ;
+Pl2:i%>đ K ;
+Pl3:u^CLEN^VHIGH%>s K ;


! Fixing Pot bug
LEXICON EVEN_POT_ID !
+Sg1:e^WG^VBACK%>em K ; ! keeseem peeveem
+Sg2:e^WG^VBACK%>eh K ; ! keeseem peeveem
+Sg3:i^WG^VBACK^RLEN%>š K ;
+Du1:i^WG^VBACK^RVSH%>žeen K ;
+Du2:i^WG^VBACK^RLEN%>švettee K ;
+Du3:i^WG^VBACK^RVSH%>žává K ;
+Pl1:i^WG^VBACK^RVSH%>žep K ;
+Pl2:i^WG^VBACK^RLEN%>švetteđ K ;
+Pl3:i^WG^VBACK^RVSH%>žeh K ;

! LEXICON EVEN_POT_ID !!≈ ** **@CODE@**
! +Sg1:e^WG^VBACK^RLEN%>em K ; ! keeseem peeveem
! +Sg2:e^WG^VBACK^RLEN%>eh K ; ! keeseem peeveem
! +Sg3:i^WG^VBACK^RLEN%>š K ;
! +Du1:i^WG^VBACK^RVSH%>žeen K ;
! +Du2:i^WG^VBACK^RLEN%>švettee K ;
! +Du3:i^WG^VBACK^RVSH%>žává K ;
! +Pl1:i^WG^VBACK^RVSH%>žep K ;
! +Pl2:i^WG^VBACK^RLEN%>švetteđ K ;
! +Pl3:i^WG^VBACK^RVSH%>žeh K ;


LEXICON EVEN_IMPRT_ID !
!+Sg2:i^WG^VHIGH^RLEN K ;  !
+Sg2:i^WG^RLEN K ;
+Sg3:u^WG^VHIGH^RLEN%>s K ;  !
+Du1:o^CLEN^VHIGH%>on K ;
+Du2:e^CLEN^RVSH%>e K ;
+Du3:u^VHIGH%>s K ;         !
+Pl1:u^CLEN^VHIGH%>p K ;   !
+Pl2:i%>đ K ;
+Pl3:u^VHIGH%>s K ;       !



!! ### OD verbs
!   --------

LEXICON 2SYLL_HILGOD
+V: 2SYLL_HILGOD_V ;
LEXICON 2SYLL_HILGOD_IV
+V+IV: 2SYLL_HILGOD_V ;
LEXICON 2SYLL_HILGOD_TV
+V+TV: 2SYLL_HILGOD_V ;

LEXICON 2SYLL_HILGOD_V  ! this as the only OD verb(s) with passive 7 verbs
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; !TEST hilgojii, passive for this one
2SYLL_OD_V ; ! now pointing to the rest of the _OD paradigm

LEXICON 2SYLL_OD
+V: 2SYLL_OD_V ;
LEXICON 2SYLL_OD_IV
+V+IV: 2SYLL_OD_V ;
LEXICON 2SYLL_OD_TV
+V+TV: 2SYLL_OD_V ;

LEXICON 2SYLL_OD_V  ! OD paradigm, no passive here. 130 verbs
VINFINITES_OD ;
+Ind: EVEN_IND_OD ;
+Cond+Prs:o^WG%> EVEN_COND ;
+Pot+Prs: EVEN_POT_OD ;
+Imprt: EVEN_IMPRT_OD ;
+Der4+Der/InchL:o^WG#škyett4 4SYLL_KYETTID_DER ; !hu#ško#škyettiđ jalo#škyettiđ
+Der1+Der/st:ost^WG 3_DERIVED ;
+Der1+Der/tt:ott^WG 3_DERIVED ;
+Der1+Der/d:o^SVd^WG 3_DERIVED_CLEN ; !
!DERL+Der1+Der/l:ol 3_DERIVED_L ;
:o DER_MAS ;


LEXICON VINFINITES_OD !
+Inf:o%>đ K ;
+Ind+Prs+ConNeg:o^WG K ;
+Ind+Prt+ConNeg:om K ;
+Cond+Prs+ConNeg:o^WG%>ččii K ;
+Pot+Prs+ConNeg:u^VHIGH%>u K ; ! kuččuu
+Imprt+ConNeg: K ;
+PrsPrc:o%>o K ;
+PrfPrc:om K ;

+VAbess:o^WG VABESS ;
+VGen:o^WG%>n VGEN ;

+Actio+Nom:o%>m NOMACT ;
+Actio+Ill:o%>mân K ;
+Actio+Loc:o%>mist K ;
+Actio+Com:o%>máin K ;
+Actio+Ess:o%>min K ;
+Ger+PxSg1:o^WG%>dijnân K ;
+Ger+PxSg2:o^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:o^WG%>dijnes K ;
+Ger+PxSg3:o^WG%>dijnis K ;
+Ger:o^WG^RVSH%>dijn K ;
+Der4+Der/NomAct:o%>m FLAG_3LITTER ;


LEXICON EVEN_IND_OD
+Prs+Sg1:o^WG^RLEN%>m K ;
+Prs+Sg2:o^WG^RLEN%>h K ;
+Prs+Sg3:o K ;
+Prs+Du1:o^CLEN^RLEN%>on K ;
+Prs+Du2:o%>vettee K ;
+Prs+Du3:o^CLEN%>v K ;
+Prs+Pl1:o^CLEN%>p K ;
+Prs+Pl2:o%>vetteđ K ;
+Prs+Pl3:o%>h K ;

+Prt+Sg1:u^VHIGH%>m K ;
+Prt+Sg2:u^VHIGH%>h K ;
+Prt+Sg3:o^WG%>i K ;
+Prt+Du1:o^WG%>im K ;
+Prt+Du2:o^WG%>id K ;
+Prt+Du3:o^WG%>in K ;
+Prt+Pl1:o^WG%>im K ;
+Prt+Pl2:o^WG%>id K ;
+Prt+Pl3:u^VHIGH%>u K ;

LEXICON EVEN_POT_OD !
+Sg1:^WG^CLENo%>om K ;	! lihhoom
+Sg2:^WG^CLENo%>oh K ;	! lihhooh
+Sg3:^WGo%>oš K ;	! lihoš added o
+Du1:o^WG%>žeen K ; ! lihožeen added o
+Du2:o^WG^CLENo%>švettee K ;	! lihhoošvettee
+Du3:o^WG%>žává K ; ! lihožává
+Pl1:o^WG%>žep K ;	! lihožeh
+Pl2:o^WG^CLEN%>ošvetteđ K ; ! lihhoošvetteđ
+Pl3:o^WG^WG%>žeh K ; ! lihožeh

LEXICON EVEN_IMPRT_OD !
+Sg1:o^CLEN%>om K ;
+Sg2:o^WG K ;
+Sg3:o^WG%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:o^CLEN%>o K ;
+Du3:o^CLEN%>os K ;
+Pl1:o^CLEN%>op K ;
+Pl2:o^RLEN%>đ K ;
+Pl3:o^CLEN%>os K ;



!! ### OOD verbs
LEXICON 2SYLL_OOD
!! * 2SYLL_OOD
!!     - Prt+Du1 njivvoim WG CLEN
+V: 2SYLL_OOD_V ;
LEXICON 2SYLL_OOD_IV
+V+IV: 2SYLL_OOD_V ;
LEXICON 2SYLL_OOD_TV
+V+TV: 2SYLL_OOD_V ;

LEXICON 2SYLL_OOD_V  ! 31 verbs
VINFINITES_OOD ;
+Ind: EVEN_IND_OOD ;
+Cond+Prs:o^WG%> EVEN_COND ;
+Pot+Prs:o EVEN_POT_OOD ;
+Imprt:o EVEN_IMPRT_OOD ;
+Der4+Der/InchL:o^WG#škyett4 4SYLL_KYETTID_DER ;
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; !TEST hilgojii
+Der1+Der/st:o^SVst^WG 3_DERIVED ;
+Der1+Der/tt:o^SVtt^WG 3_DERIVED ;
+Der1+Der/d:o^SVd^WG 3_DERIVED ; !
!DERL+V+Der1+Der/l:ol 3_DERIVED_L ;
:o DER_MAS ;

LEXICON VINFINITES_OOD !
+Inf:o^CLEN%>ođ K ;
+Ind+Prs+ConNeg:o^WG K ;
+Ind+Prt+ConNeg:o^CLEN%>om K ;
+Cond+Prs+ConNeg:o^WG%>ččii K ;
+Pot+Prs+ConNeg:u^WG^CLEN^VHIGH%>u K ;
+Imprt+ConNeg:o^WG K ;
+PrsPrc:o^CLEN%>o K ;
+PrfPrc:o^CLEN%>om K ;
+VAbess:o^WG VABESS ;
+VGen:o^WG%>n VGEN ;


+Actio+Nom:o^CLEN%>om NOMACT ;
+Actio+Ill:o^CSH%>mân K ;
+Actio+Loc:o^CSH%>mist K ;
+Actio+Com:o^CSH%>máin K ;
+Actio+Ess:o^CSH%>min K ;
+Ger+PxSg1:o^WG%>dijnân K ;
+Ger+PxSg2:o^WG%>dijnâđ K ;
+Ger+PxSg3+Err/Orth:o^WG%>dijnes K ;
+Ger+PxSg3:o^WG%>dijnis K ;
+Ger:o^WG%>dijn K ;
+Der4+Der/NomAct:o^CLEN%>om FLAG_3EEMEED ;

LEXICON EVEN_IND_OOD  !
+Prs+Sg1:o^WG%>m K ;    ! vah^RCo^WG>m
+Prs+Sg2:o^WG%>h K ;
+Prs+Sg3:o^CSH K ;
+Prs+Du1:o^CLEN%>on K ;
+Prs+Du2:o^CSH%>vettee K ;
+Prs+Du3:o^CLEN%>ov K ;
+Prs+Pl1:o^CLEN%>op K ;
+Prs+Pl2:o^CSH%>vetteđ K ;
+Prs+Pl3:o^CSH%>h K ;

+Prt+Sg1:u^VHIGH^RLEN%>m K ;
+Prt+Sg2:u^VHIGH^RLEN%>h K ;
+Prt+Sg3:o^WG%>i K ;
+Prt+Du1:o^WG^CLEN%>im K ;
+Prt+Du2:o^WG^CLEN%>id K ;
+Prt+Du3:o^WG^CLEN%>in K ;
+Prt+Pl1:o^WG^CLEN%>im K ;
+Prt+Pl2:o^WG^CLEN%>id K ;
+Prt+Pl3:u^CLEN^VHIGH%>u K ;

LEXICON EVEN_POT_OOD !
+Sg1:^WG^CLEN%>om K ;
+Sg2:^WG^CLEN%>oh K ;
+Sg3:^WG^CLEN%>oš K ;
+Du1:^WG%>žeen K ;
+Du2:^WG^CLEN%>ošvettee K ;
+Du3:^WG%>žává K ;
+Pl1:^WG%>žep K ;
+Pl2:^WG^CLEN%>ošvetteđ K ;
+Pl3:^WG%>žeh K ;

LEXICON EVEN_IMPRT_OOD !
+Sg1:^CLEN%>om K ;
+Sg2:^WG K ;
+Sg3:^WG%>s K ;
+Du1:^CLEN%>on K ;
+Du2:^CLEN%>o K ;
+Du3:^CLEN%>os K ;
+Pl1:^CLEN%>op K ;
+Pl2:^CLEN%>ođ K ;
+Pl3:^CLEN%>os K ;


!! #### 2SYLL\_ORROOD
LEXICON 2SYLL_ORROOD
!! * 2SYLL_ORROOD  like 2SYLL_OOD, but different triggers here and there
!!     - Prt+Du1 oroim WG
+V: 2SYLL_ORROOD_V ;
LEXICON 2SYLL_ORROOD_IV
+V+IV: 2SYLL_ORROOD_V ;
LEXICON 2SYLL_ORROOD_TV
+V+TV: 2SYLL_ORROOD_V ;

LEXICON 2SYLL_ORROOD_V  ! like njihhood, but different triggers here and there. 24 verbs
:  VINFINITES_ORROOD ;
+Ind: EVEN_IND_ORROOD ;
+Cond+Prs:o^WG%> EVEN_COND ;
+Pot+Prs:o^WG EVEN_POT_ORROOD ;
+Imprt:o EVEN_IMPRT_ORROOD ;
+Der4+Der/InchL:o^WG#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/st:o^SVst^WG 3_DERIVED ;
+Der1+Der/tt:o^SVtt^WG 3_DERIVED ;
+Der1+Der/d:o^SVd^WG 3_DERIVED ; !
!DERL+V+Der1+Der/l:ol 3_DERIVED_L ;
:o^CSH DER_MAS ;
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; !TEST hilgojii

LEXICON VINFINITES_ORROOD
+Inf:o^CLEN%>ođ K ;
+Ind+Prs+ConNeg:o^WG K ;
+Ind+Prt+ConNeg:o^WG^CLEN%>om K ;
+Cond+Prs+ConNeg:o^WG%>ččii K ;
+Pot+Prs+ConNeg:u^VHIGH%>u K ; !urruu
+Imprt+ConNeg:o^WG K ;
+PrsPrc:o^CLEN%>o K ;
+PrfPrc:o^CLEN%>om K ;
+VAbess:o^WG VABESS ;
+VGen:o^WG%>n VGEN ;


+Actio+Nom:o^CLEN%>om NOMACT ;
+Actio+Ill:o^CSH%>mân K ;
+Actio+Loc:o^CSH%>mist K ;
+Actio+Com:o^CSH%>máin K ;
+Actio+Ess:o^CSH%>min K ;
+Ger+PxSg1:o^WG%>dijnân K ;
+Ger+PxSg2:o^WG%>dijnâđ K ;
+Ger+PxSg3+Err/Orth:o^WG%>dijnes K ;
+Ger+PxSg3:o^WG%>dijnis K ;
+Ger:o^WG%>dijn K ;
+Der4+Der/NomAct:o^CLEN%>om FLAG_3EEMEED ;


LEXICON EVEN_IND_ORROOD   !
+Prs+Sg1:o^WG%>m K ; ! vah^RCo^WG>m
+Prs+Sg2:o^WG%>h K ;
+Prs+Sg3:o^CSH K ;
+Prs+Du1:o^CLEN%>on K ;
+Prs+Du2:o^CSH%>vettee K ;
+Prs+Du3:o^CLEN%>ov K ;
+Prs+Pl1:o^CLEN%>op K ;
+Prs+Pl2:o^CSH%>vetteđ K ;
+Prs+Pl3:o^CSH%>h K ; ! oroh

+Prt+Sg1:u^VHIGH^RLEN%>m K ;
+Prt+Sg2:u^VHIGH^RLEN%>h K ; !uurruh
+Prt+Sg3:o^WG%>i K ;
+Prt+Du1:o^WG%>im K ;
+Prt+Du2:o^WG%>id K ;
+Prt+Du3:o^WG%>in K ;
+Prt+Pl1:o^WG%>im K ;
+Prt+Pl2:o^WG%>id K ;
+Prt+Pl3:u^VHIGH%>u K ; ! urruu

LEXICON EVEN_POT_ORROOD !
+Sg1:^WG^RLEN%>om K ;
+Sg2:^WG^RLEN%>oh K ;
+Sg3:^WG^RLEN%>oš K ;
+Du1:^WG%>žeen K ;
+Du2:^WG^RLEN%>ošvettee K ;
+Du3:^WG%>žává K ;
+Pl1:^WG%>žep K ;
+Pl2:^WG^RLEN%>ošvetteđ K ;
+Pl3:^WG%>žeh K ;

LEXICON EVEN_IMPRT_ORROOD  !
+Sg2:^WG K ;
+Sg3:^WG%>s K ;
+Du1:^CLEN%>on K ;
+Du2:^CLEN%>o K ;
+Du3:^CLEN%>os K ;
+Pl1:^CLEN%>op K ;
+Pl2:%>ođ K ; !orroođ
+Pl3:^CLEN%>os K ;


!! ### UD verbs

!! #### 2SYLL\_KUARRUD
LEXICON 2SYLL_KUARRUD
!! * 2SYLL_KUARRUD  long dipht => -o
!!     - Inf: kuárruđ
!!     - Ind+Prs+Sg3: kuáru
!!     - Ind+Prs+Pl3: kuáruh
!!     - ConNeg: kuáru, kuáro
!!     - Ind+Prt+Sg1: koorrum
+V: 2SYLL_KUARRUD_V ;
LEXICON 2SYLL_KUARRUD_IV
+V+IV: 2SYLL_KUARRUD_V ;
LEXICON 2SYLL_KUARRUD_TV
+V+TV: 2SYLL_KUARRUD_V ;

LEXICON 2SYLL_KUARRUD_V  ! long dipht => -o . 56 verbs
VINFINITES_KUARRUD ; ! pákkuđ has a PASS according to this contlex
+Ind: EVEN_IND_KUARRUD ;
+Pot+Prs: EVEN_POT_KUARRUD ;
+Cond+Prs:u^WG^RVSH%> EVEN_COND ;
+Cond+Prs:o^WG^RVSH%> EVEN_COND ;
+Imprt: EVEN_IMPRT_KUARRUD ;
+Der4+Der/InchL:u^WG^RVSH#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/st:ust^WG^RVSH 3_DERIVED ; ! čiärustiđ či5ärr
+Der3+Der/Pass:u2 C_PASS_SH ; !  ?? CLEN?
+Der1+Der/tt:utt^WG 3_DERIVED ;
+Der1+Der/d:ud^WG 3_DERIVED ; !
:u^CSH DER_MAS ;

LEXICON VINFINITES_KUARRUD !
+Inf:u%>đ K ;

+Ind+Prs+ConNeg:u^WG^RLEN K ;
+Ind+Prs+ConNeg+Use/NG:o^WG^RVSH K ;
+Ind+Prt+ConNeg:um K ;
+Cond+Prs+ConNeg:u^WG^RVSH%>ččii K ;
+Cond+Prs+ConNeg+Use/NG:o^WG^RVSH%>ččii K ;
+Pot+Prs+ConNeg:u^VBACK^RVSH%>u K ;
+Imprt+ConNeg:u K ;
+PrsPrc:o^RVSH%>o K ;
+PrfPrc:u%>m K ;
+Der2+Der/NomAg:o%> C_TAHHEE ;
+VAbess:u^WG^RVSH VABESS ;
+VAbess+Use/NG:o^WG^RVSH VABESS ;
+VGen:u^WG^RLEN%>n VGEN ;


+Actio+Nom:u%>m NOMACT ;
+Actio+Ill:u^CSH^RVSH%>mân K ;
+Actio+Loc:u^CSH^RVSH%>mist K ;
+Actio+Com:u^CSH^RVSH%>máin K ;
+Actio+Ess:u^CSH^RVSH%>min K ;
+Ger+PxSg1:u^WG^RVSH%>dijnân K ;
+Ger+PxSg1+Use/NG:o^WG^RVSH%>dijnân K ;
+Ger+PxSg2:u^WG^RVSH%>dijnâd K ;
+Ger+PxSg2+Use/NG:o^WG^RVSH%>dijnâd K ;
+Ger+PxSg3+Err/Orth:u^WG^RVSH%>dijnes K ;
+Ger+PxSg3:u^WG^RVSH%>dijnis K ;
+Ger+PxSg3+Use/NG:o^WG^RVSH%>dijnis K ;
+Ger:u^WG^RVSH%>dijn K ;
+Ger+Use/NG:o^WG^RVSH%>dijn K ;
+Der4+Der/NomAct:u^SV%>m FLAG_3HUKSIM ;


LEXICON EVEN_IND_KUARRUD !
+Prs+Sg1:u^WG^RLEN%>m K ;
+Prs+Sg1+Err/Orth:o^WG^RLEN%>m K ;
+Prs+Sg2:u^WG^RLEN%>h K ;
+Prs+Sg2+Err/Orth:o^WG^RLEN%>h K ;
+Prs+Sg3:u^CSH K ;
+Prs+Du1:o^CLEN^RVSH%>on K ;
+Prs+Du2:u^CSH^RVSH%>vettee K ; ! CSH
+Prs+Du3:u%>v K ;
+Prs+Pl1:u%>p K ;
+Prs+Pl2:u^CSH^RVSH%>vetteđ K ; ! CSH
+Prs+Pl3:u^CSH%>h5 K ; ! reusing h5 to prevent á to a !CSH
+Prs+Pl3+Err/Orth:u%>h5 K ; !

+Prt+Sg1:u^VBACK^RLEN%>m K ;
+Prt+Sg2:u^VBACK^RLEN%>h K ;
+Prt+Sg3:u^WG^RLEN%>i K ;
+Prt+Sg3+Use/NG:o^WG^RVSH%>i K ;
+Prt+Du1:u^WG^RLEN%>im K ;
+Prt+Du1+Use/NG:o^WG^RVSH%>im K ;
+Prt+Du2:u^WG^RLEN%>id K ;
+Prt+Du2+Use/NG:o^WG^RVSH%>id K ;
+Prt+Du3:u^WG^RLEN%>in K ;
+Prt+Du3+Use/NG:o^WG^RVSH%>in K ;
+Prt+Pl1:u^WG^RLEN%>im K ;
+Prt+Pl1+Use/NG:o^WG^RVSH%>im K ;
+Prt+Pl2:u^WG^RLEN%>id K ;
+Prt+Pl2+Use/NG:o^WG^RVSH%>id K ;
+Prt+Pl3:u^CLEN^VBACK^RVSH%>u K ; !

LEXICON EVEN_POT_KUARRUD !
+Sg1:o^WG%>om K ;
+Sg2:o^WG%>oh K ;
+Sg3:u^WG^RLEN%>š K ;
+Du1:u^WG^RVSH%>žeen K ;
+Du1+Use/NG:o^WG^RVSH%>žeen K ;
+Du2:u^WG^RLEN%>švettee K ;
+Du2+Use/NG:o^WG%>švettee K ;
+Du3:u^WG^RVSH%>žává K ;
+Du3+Use/NG:o^WG^RVSH%>žává K ;
+Pl1:u^WG^RVSH%>žep K ;
+Pl1+Use/NG:o^WG^RVSH%>žep K ;
+Pl2:u^WG^RLEN%>švetteđ K ;
+Pl2+Use/NG:o^WG^RVSH%>švetteđ K ;
+Pl3:u^WG^RVSH%>žeh K ;
+Pl3+Use/NG:o^WG^RVSH%>žeh K ;

LEXICON EVEN_IMPRT_KUARRUD  !
+Sg2:u^WG^RLEN K ;
+Sg2+Use/NG:o^WG^RVSH K ;
+Sg3:u^WG^RLEN%>s K ;
+Du1:o^CLEN^RVSH%>on K ;
+Du2:o^CLEN^RVSH%>o K ;
+Du3:u^CLEN^RLEN%>s K ;
+Pl1:u^CLEN^RLEN%>p K ;
+Pl2:u%>đ K ;
+Pl3:u^CLEN^RLEN%>s K ;


!! #### 2SYLL\_UD
LEXICON 2SYLL_UD
!! * 2SYLL_UD
!!     - Inf: ruábbuđ
!!     - Ind+Prs+Sg3: ruábbu
!!     - Ind+Prs+Pl3: ruábbuh
!!     - ConNeg: ruábu
!!     - Ind+Prt+Sg1: ruábbum
+V: 2SYLL_UD_V ;
LEXICON 2SYLL_UD_IV
+V+IV: 2SYLL_UD_V ;
LEXICON 2SYLL_UD_TV
+V+TV: 2SYLL_UD_V ;


LEXICON 2SYLL_UD_V  ! 175 verbs
VINFINITES_UD ; ! pákkuđ has a PASS according to this contlex
+Ind: EVEN_IND_UD ;
+Pot+Prs: EVEN_POT_UD ;
+Cond+Prs:u^WG%> EVEN_COND ;
+Imprt: EVEN_IMPRT_UD ;
+Der4+Der/InchL:u^WG#škyett4 4SYLL_KYETTID_DER ; !kuáivu#škyettiđ
+Der1+Der/d:ud^WG 3_DERIVED ; !lávludiđ
+Der1+Der/st:ust^WG 3_DERIVED ;
+Der1+Der/tt:utt^WG 3_DERIVED ;
+Der2+Der/NomAg:o%> C_TAHHEE ;

!DERL+V+Der1+Der/l:ol 3_DERIVED_L ;
:u DER_MAS ;
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; ! u2

LEXICON VINFINITES_UD !
+Inf:u%>đ K ;
+Ind+Prs+ConNeg:u^WG^RLEN K ;
+Ind+Prt+ConNeg:u%>m K ; ! u2
+Cond+Prs+ConNeg:u^WG%>ččii K ;
+Pot+Prs+ConNeg:u^VBACK%>u K ; ! u2
+Imprt+ConNeg:u K ;
+PrsPrc:o%>o K ;
+PrfPrc:u%>m K ;
+VAbess:u^WG VABESS ;
+VGen:u^WG^RLEN%>n VGEN ;

+Actio+Nom:u%>m NOMACT ;
+Actio+Ill:u%>mân K ;
+Actio+Loc:u%>mist K ;
+Actio+Com:u%>máin K ;
+Actio+Ess:u%>min K ;
+Ger+PxSg1:u^WG%>dijnân K ;
+Ger+PxSg2:u^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:u^WG%>dijnes K ;
+Ger+PxSg3:u^WG%>dijnis K ;
+Ger:u^WG%>dijn K ;
+Der4+Der/NomAct:u^SV%>m FLAG_3HUKSIM ;


LEXICON EVEN_IND_UD !
+Prs+Sg1:u^WG^RLEN%>m K ;
+Prs+Sg2:u^WG^RLEN%>h K ;
+Prs+Sg3:u K ;             ! CSH
+Prs+Du1:o^CLEN^RVSH%>on K ;
+Prs+Du2:u%>vettee K ; ! CSH
+Prs+Du3:u%>v K ;
+Prs+Pl1:u%>p K ;
+Prs+Pl2:u%>vetteđ K ; ! CSH
+Prs+Pl3:u%>h5 K ; ! reusing h5 to prevent á to a !CSH
+Prs+Pl3+Err/Orth:u^CSH%>h5 K ; !

+Prt+Sg1:u^VBACK^RVSH%>m K ; ! u2 5.2.22 Added ^RVSH
+Prt+Sg2:u^VBACK%>h K ; ! u2
+Prt+Sg3:u^WG^RLEN%>i K ;
+Prt+Du1:o^WG^CLEN%>im K ; ! čuárvoim
+Prt+Du2:o^WG^CLEN%>id K ; ! čuárvoid
+Prt+Du3:o^WG^CLEN%>in K ; ! čuárvoin
+Prt+Pl1:u^WG^RLEN%>im K ;
+Prt+Pl2:u^WG^RLEN%>id K ;
+Prt+Pl3:u^CLEN^VBACK^RVSH%>u K ; ! u2

LEXICON EVEN_POT_UD !
+Sg1:o^CLEN%>om K ;
+Sg2:o^CLEN%>oh K ;
+Sg3:u^WG^RLEN%>š K ;
+Du1:u^WG%>žeen K ;
+Du2:u^WG^RLEN%>švettee K ;
+Du3:u^WG%>žává K ;
+Pl1:u^WG%>žep K ;
+Pl2:u^WG^RLEN%>švetteđ K ;
+Pl3:u^WG%>žeh K ;

LEXICON EVEN_IMPRT_UD !
+Sg2:u^WG^VHIGH^RLEN K ;
+Sg3:u^WG^RLEN%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:o^CLEN%>o K ;
+Du3:u^CLEN%>s K ;
+Pl1:u^CLEN^VHIGH%>p K ;
+Pl2:u^VHIGH%>đ K ;
+Pl3:u^CLEN%>s K ;

!! #### 2SYLL\_UAZZUID
LEXICON 2SYLL_UAZZUD
!! * 2SYLL_UAZZUD
!!     - Inf: uážžuđ
!!     - Ind+Prs+Sg3: uážžu
!!     - Ind+Prs+Pl3: uážžuh
!!     - ConNeg: uážu
!!     - Ind+Prt+Sg1: ožžum
+V: 2SYLL_UAZZUD_V ;
LEXICON 2SYLL_UAZZUD_IV
+V+IV: 2SYLL_UAZZUD_V ;
LEXICON 2SYLL_UAZZUD_TV
+V+TV: 2SYLL_UAZZUD_V ;

LEXICON 2SYLL_UAZZUD_V  ! 59 verbs
VINFINITES_UAZZUD ; ! pákkuđ has a PASS according to this contlex
+Ind: EVEN_IND_UAZZUD ;
+Cond+Prs:u^WG%> EVEN_COND ;
+Pot+Prs: EVEN_POT_UAZZUD ;
+Imprt: EVEN_IMPRT_UAZZUD ;
+Der4+Der/InchL:u^WG#škyett4 4SYLL_KYETTID_DER ;
+Der1+Der/d:ud^WG 3_DERIVED ; !lávludiđ
+Der1+Der/st:ust^WG 3_DERIVED ; !uágustiđ
+Der1+Der/tt:utt^WG 3_DERIVED ;
!DERL+Der1+Der/l:ul 3_LEKKASID ; !liä#škuliđ
:u DER_MAS ;
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; !

LEXICON VINFINITES_UAZZUD !
+Inf:u%>đ K ;
+Ind+Prs+ConNeg:u^WG^RLEN K ;
+Ind+Prt+ConNeg:um K ;
+Cond+Prs+ConNeg:u^WG%>ččii K ;
+Pot+Prs+ConNeg:u^VBACK^RVSH%>u K ;
+Imprt+ConNeg:u K ;
+PrsPrc:o%>o K ;
+PrfPrc:u%>m K ;
+Der2+Der/NomAg:o%> C_TAHHEE ;
+VAbess:u^WG VABESS ;
+VGen:u^WG^RLEN%>n VGEN ;

+Actio+Nom:u%>m NOMACT ;
+Actio+Ill:u%>mân K ;
+Actio+Loc:u%>mist K ;
+Actio+Com:u%>máin K ;
+Actio+Ess:u%>min K ;
+Ger+PxSg1:u^WG%>dijnân K ;
+Ger+PxSg2:u^WG%>dijnâd K ;
+Ger+PxSg3+Err/Orth:u^WG%>dijnes K ;
+Ger+PxSg3:u^WG%>dijnis K ;
+Ger:u^WG%>dijn K ;
+Der4+Der/NomAct:u^SV%>m FLAG_3HUKSIM ;

LEXICON EVEN_IND_UAZZUD !
+Prs+Sg1:u^WG%>m K ;
+Prs+Sg2:u^WG%>h K ;
+Prs+Sg3:u^CLEN K ;             ! CSH
+Prs+Du1:o^CLEN%>on K ;
+Prs+Du2:u%>vettee K ; ! CSH
+Prs+Du3:u%>v K ;
+Prs+Pl1:u%>p K ;
+Prs+Pl2:u%>vetteđ K ; ! CSH
+Prs+Pl3:u%>h5 K ; ! reusing h5 to prevent á to a !CSH
+Prs+Pl3+Err/Orth:u^CSH%>h5 K ; !

+Prt+Sg1:u^VBACK^RVSH%>m K ;
+Prt+Sg2:u^VBACK^RVSH%>h K ;
+Prt+Sg3:u^WG%>i K ;
+Prt+Du1:o^WG^CLEN%>im K ;
+Prt+Du2:o^WG^CLEN%>id K ;
+Prt+Du3:o^WG^CLEN%>in K ;
+Prt+Pl1:u^WG%>im K ;
+Prt+Pl2:u^WG%>id K ;
+Prt+Pl3:u^VBACK^RVSH%>u K ;

LEXICON EVEN_POT_UAZZUD !
+Sg1:o^CLEN%>om K ;
+Sg2:o^CLEN%>oh K ;
+Sg3:u^WG^RLEN%>š K ;
+Du1:u^WG%>žeen K ;
+Du2:u^WG^RLEN%>švettee K ;
+Du3:u^WG%>žává K ;
+Pl1:u^WG%>žep K ;
+Pl2:u^WG^RLEN%>švetteđ K ;
+Pl3:u^WG%>žeh K ;

LEXICON EVEN_IMPRT_UAZZUD !
+Sg2:u^WG^VHIGH^RLEN K ;
+Sg3:u^WG^RLEN%>s K ;
+Du1:o^CLEN%>on K ;
+Du2:o^CLEN%>o K ;
+Du3:u^CLEN%>s K ;
+Pl1:u^CLEN^VHIGH%>p K ;
+Pl2:u^VHIGH%>đ K ;
+Pl3:u^CLEN%>s K ;

!! ###  Common even lexica

LEXICON EVEN_COND !
+Sg1:čč%>im K ;
+Sg2:čč%>ih K ;
+Sg3:čč%>ij K ;
+Du1:čč%>áim K ;
+Du2:čč%>áid K ;
+Du3:čč%>áin K ;
+Pl1:čč%>ijm K ;
+Pl2:čč%>ijd K ;
+Pl3:čč%>ii K ;

! Probably more lexica down here.





!! ## Odd-syllable stems
! ------------------



!! * 3_KUIKETTID = 3_LEKKASID. TODO: Unify (?)
LEXICON 3_KUIKETTID
+V: 3_KUIKETTID_V ;
LEXICON 3_KUIKETTID_IV
+V+IV: 3_KUIKETTID_V ;
LEXICON 3_KUIKETTID_TV
+V+TV: 3_KUIKETTID_V ;

LEXICON 3_KUIKETTID_V ! this has lengthening of ^RV for Cns-initial suff
3_LEKKASID_V ;

LEXICON 3_LEKKASID
!! * 3_LEKKASID (no stem change, but going to ODDLEX)
!!     - Sg1: %>âm, Sg3: ^CLEN^RLEN (note: ODDLEX :-(
+V: 3_LEKKASID_V ;
LEXICON 3_LEKKASID_IV
+V+IV: 3_LEKKASID_V ;
LEXICON 3_LEKKASID_TV
+V+TV: 3_LEKKASID_V ;

LEXICON 3_LEKKASID_V  ! SM51, no length change in stem
ODD_INFINITES ;
ODD_PRS_CONNEG ;
+Ind+Prs: ODD_PRS ;
+Ind+Prt: ODD_PRT ;
+Ind+Prt: ODD_DU_ERRORTH ;
+Cond+Prs: ODD_COND ;
+Pot+Prs: ODD_POT ;
+Imprt: ODD_IMPRT ;

! 3-derpakke-a
+Der4+Der/InchL:i6^WG#škyett4 4SYLL_KYETTID_DER ; !muštâl#škuođij
+Der1+Der/st:ist 4_ADELISTID ;
:^SLEN DER_MAS ; ! kuikeetmâš
+Der1+Der/Caus:itt 4_ADELISTID ;
+Der2+Der/alla:â%>i6ll 4_KAVNATTATTAD ; !ravviistâllâđ varriistâllâđ purâstâllâđ
+Der2+Der/adda:â%>i6dd 4_KAVNATTATTAD ; !ráigánâddâđ
+Der3+Der/Pass: C_MERIDUD ; !ok teddiluđ paradigm

LEXICON 3_CIELATTID
!! * 3_CIELATTID (stem-final tt shortening) cielâttiđ: cielât Length change in stem: Consonant change only
!!     - Sg1: %>âm, Sg3: ^CLEN^RLEN
+V: 3_CIELATTID_V ;
LEXICON 3_CIELATTID_IV
+V+IV: 3_CIELATTID_V ;
LEXICON 3_CIELATTID_TV
+V+TV: 3_CIELATTID_V ;

LEXICON 3_CIELATTID_V  ! SM57, consonant and vowel change
 ODD_INFINITES ;
 ODD_PRS_CONNEG_rlen ;

+Ind+Prs: ODD_PRS ;
+Ind+Prt: ODD_PRT ;
+Cond+Prs: ODD_COND ;
+Pot+Prs: ODD_POT ;
+Imprt: ODD_IMPRT ;

! 3-derpakke-a
+Der4+Der/NomAct:em FLAG_3LITTER ;
+Der4+Der/NomAct+Err/Orth:im FLAG_3LITTER ; ! Normed
+Der4+Der/InchL:CLEN^RLEN^SLEN#škyett4 4SYLL_KYETTID_DER ; ! huolât#škuođij
+Der1+Der/st:ist 4_ADELISTID ;
: DER_MAS ; ! cielâtmâš
+Der1+Der/Caus:itt 4_ADELISTID ;
+Der2+Der/alla:â%>i6ll 4_KAVNATTATTAD ; !
+Der2+Der/adda:â%>i6dd 4_KAVNATTATTAD ; !ráigánâddâđ
+Der3+Der/Pass: C_MERIDUD ;



LEXICON 3_VYEJETTID
!! * 3_VYEJETTID (2syll vow short in Inf, long in Sg3, 1st syll V lengthening) vyejettiđ vyejeet
!!     - Sg1: %>âm, Sg3: ^RLEN^SLEN
+V: 3_VYEJETTID_V ;
LEXICON 3_VYEJETTID_IV
+V+IV: 3_VYEJETTID_V ;
LEXICON 3_VYEJETTID_TV
+V+TV: 3_VYEJETTID_V ;

LEXICON 3_VYEJETTID_V  ! SM53. short V in Inf
: ODD_VINFINITES_VYEJETTID ;
+Ind+Prs: ODD_PRS_VYEJETTID ;
+Ind+Prt:^CSH ODD_PRT ;
+Ind+Prt: ODD_DU_ERRORTH ;
+Cond+Prs: ODD_COND ;
+Pot+Prs: ODD_POT ;
+Imprt: ODD_IMPRT_VYEJETTID ;

! 3-derpakka-a
+Der4+Der/InchL:i6^WG#škyett4 4SYLL_KYETTID_DER ; !joođeet#škuođij hmm
+Der1+Der/st:ist 4_ADELISTID ;
:^SLEN DER_MAS ; ! vyejeetmâš
+Der1+Der/Caus:itt 4_ADELISTID ;
+Der2+Der/alla:â%>i6ll 4_KAVNATTATTAD ; ! XXX check
+Der2+Der/adda:â%>i6dd 4_KAVNATTATTAD ; !ráigánâddâđ
+Der3+Der/Pass: C_MERIDUD ;


LEXICON ODD_VINFINITES_VYEJETTID
+Inf:%>iđ K ;
+PrsPrc:%> IJJE_PRSPRC ;
+PrfPrc:%>âm K ;
+Ind+Prs+ConNeg:^RLEN^SLEN K ;
+Ind+Prt+ConNeg:%>âm K ;
+Cond+Prs+ConNeg:%>iččii K ;
+Pot+Prs+ConNeg:%>ižžii K ;
+Imprt+ConNeg:^RLEN^SLEN K ;
+VAbess:^RLEN^SLEN VABESS ;
+Actio+Nom:%>em NOMACT ;
+Actio+Ill:^RLEN^SLEN%>mân K ;
+Actio+Loc:^RLEN^SLEN%>mist K ;
+Actio+Com:^RLEN^SLEN%>máin K ;
+Actio+Ess:^RLEN^SLEN%>min K ;
+Ger:^RLEN^SLEN%>dijn K ;
+Ger+PxSg1:^RLEN^SLEN%>dijnân K ;
+Ger+PxSg2:^RLEN^SLEN%>dijnâd K ;
+Ger+PxSg3:^RLEN^SLEN%>dijnis K ;
+Der4+Der/NomAct: FLAG_3KEPIDEM ;
+Der2+Der/NomAg:%> IJJE ;


LEXICON ODD_PRS_VYEJETTID  !
+Sg1:^CSH%>âm K ; ! csh for vatâlâm
+Sg2:^CSH%>ah K ;
+Sg2+Err/Orth:^CSH%>âh K ;
+Sg3:^RLEN^SLEN    K ;
+Du1:^CSH%>een K ;
+Du2:^RLEN^SLEN%>vettee K ;
+Du3:^CSH%>ává   K ;
+Pl1:^CSH%>ep K ;
+Pl2:^RLEN^SLEN%>vetteđ K ;
+Pl3:^CSH%>eh K ;

LEXICON ODD_IMPRT_VYEJETTID  !
+Sg2:^RLEN^SLEN K ;
+Sg3:%>us K ;
+Du1:%>oon K ;
+Du2:%>ee K ;
+Du3:%>us K ;
+Pl1:%>op K ;
+Pl2:%>iđ K ;
+Pl3:%>us K ;


!! * 3_ADELID
!!     - Sg1: %>âm, Sg3: ^CLEN
LEXICON ADELID_TV  ! only for adeliđ, to get adde as default ConNeg, others are 3_ADELID
+V+TV+Ind+Prs+ConNeg:adde K ;
+V+TV+Ind+Prs+ConNeg+Use/NG:addel K ; ! addel
+V+TV+Imprt+Sg2:adde K ;
+V+TV+Imprt+Sg2+Use/NG:addel # ; ! addel
+V+TV+Imprt:adel ODD_IMPRT_REST ;
+V+TV:ad^RCel ADELID_COMMON ;


LEXICON 3_ADELID
+V: 3_ADELID_V ;
LEXICON 3_ADELID_IV
+V+IV: 3_ADELID_V ;
LEXICON 3_ADELID_TV
+V+TV: 3_ADELID_V ;

LEXICON 3_ADELID_V  ! SM53. short V in Inf
!+Ind+Prs+ConNeg:^RLEN K ; !
+Ind+Prs+ConNeg:^CLEN^RLEN K ; !
+Imprt: ODD_IMPRT ;
ADELID_COMMON ;

LEXICON ADELID_COMMON !
ODD_VINFINITES_ADELID ;
+Ind+Prs: ODD_PRS_ADELID ;
+Ind+Prt: ODD_PRT ;
+Ind+Prt: ODD_DU_ERRORTH ;
+Cond+Prs: ODD_COND ;
+Pot+Prs: ODD_POT ;

+Der2+Der/NomAg:%> IJJE ;
+Der1+Der/st:ist 4_ADELISTID ; !adelistiđ lahtâdistiđ lu#škâdistiđ
+Der1+Der/Caus:itt 4_ADELISTID ; !adelistiđ lahtâdistiđ lu#škâdistiđ
+Der4+Der/InchL:i6^WG#škyett4 4SYLL_KYETTID_DER ; ! huolât#škuođij
:^CLEN DER_MAS ; ! addelmâš
+Der2+Der/alla:â%>i6ll 4_KAVNATTATTAD ; !
+Der2+Der/adda:â%>i6dd 4_KAVNATTATTAD ; !ráigánâddâđ
+Der3+Der/Pass: C_MERIDUD ;

LEXICON ODD_VINFINITES_ADELID !
+Inf:%>iđ K ;
+PrsPrc:%> IJJE_PRSPRC ;
+PrfPrc:%>âm K ;
+Ind+Prt+ConNeg:%>âm K ;
+Cond+Prs+ConNeg:%>iččii K ;
+Pot+Prs+ConNeg:%>ižžii K ;
+Imprt+ConNeg:^RLEN^CLEN K ; !cuáŋul should be cuáŋŋul
+VAbess:^CLEN VABESS ;
+Actio+Nom:%>em NOMACT ;
+Actio+Nom+Err/Orth:%>im NOMACT ;
+Actio+Ill:^CLEN%>mân K ;
+Actio+Ess:^CLEN%>min K ;
+Actio+Loc:^CLEN%>mist K ;
+Actio+Com:^CLEN%>máin K ;
+Ger:^CLEN%>dijn K ;
+Ger+PxSg1:^CLEN%>dijnân K ;
+Ger+PxSg2:^CLEN%>dijnâd K ;
+Ger+PxSg3:^CLEN%>dijnis K ;
+Der4+Der/NomAct: FLAG_3KEPIDEM ;

LEXICON ODD_PRS_ADELID !
+Sg1:%>âm K ;
+Sg2:%>ah K ;
+Sg2+Err/Orth:%>âh K ;
+Sg3:^CLEN K ; ! addel
+Du1:%>een K ;
+Du2:^CLEN%>vettee K ; ! addelvettee
+Du3:%>ává   K ;
+Pl1:%>ep K ;
+Pl2:^CLEN%>vetteđ K ; ! addelvetteđ
+Pl3:%>eh K ;



LEXICON 3_MERIDID
!! * 3_MERIDID
!!     - Sg1: %>âm, Sg3: ^CLEN^RLEN
+V: 3_MERIDID_V ;
LEXICON 3_MERIDID_IV
+V+IV: 3_MERIDID_V ;
LEXICON 3_MERIDID_TV
+V+TV: 3_MERIDID_V ;

LEXICON 3_MERIDID_V  ! SM53. short V in Inf
ODD_INFINITES_MERIDID ;
+Ind+Prs: ODD_PRS ;
+Ind+Prt: ODD_PRT ;
+Ind+Prt: ODD_DU_ERRORTH ;
+Cond+Prs: ODD_COND ;
+Pot+Prs: ODD_POT ;
+Imprt+Sg2:^CLEN^RLEN%> # ; ! meerrid
+Imprt: ODD_IMPRT_REST ;

+Der4+Der/InchL:i^CLEN^RLEN#škyett4 4SYLL_KYETTID_DER ; ! huolât#škuođij
+Der1+Der/st:ist 4_ADELISTID ; !sačalistiđ
:^CLEN DER_MAS ; ! meerridmâš
+Der1+Der/Caus:itt 4_ADELISTID ;
+Der2+Der/alla:â%>i6ll 4_KAVNATTATTAD ; !ráđádâllâđ (rä^RVđ^RCid)
+Der2+Der/adda:â%>i6dd 4_KAVNATTATTAD ; !ráigánâddâđ
+Der3+Der/Pass: C_MERIDUD ;


LEXICON ODD_INFINITES_MERIDID !
+Inf:%>iđ K ;
+PrsPrc:%> IJJE_PRSPRC ;
+PrfPrc:%>âm K ;
+Ind+Prs+ConNeg:^CLEN^RLEN K ;
+Ind+Prt+ConNeg:%>âm K ;
+Cond+Prs+ConNeg:%>iččii K ;
+Pot+Prs+ConNeg:%>ižžii K ;
+Imprt+ConNeg:^CLEN^RLEN K ; !!tt added
+VAbess:^CLEN^RLEN VABESS ;
+Actio+Nom:%>em NOMACT ;
+Actio+Nom+Err/Orth:%>im NOMACT ;
+Actio+Ill:^CLEN^RLEN%>mân K ;
+Actio+Ess:^CLEN^RLEN%>min K ;
+Actio+Loc:^CLEN^RLEN%>mist K ;
+Actio+Com:^CLEN^RLEN%>máin K ;
+Ger:^CLEN^RLEN%>dijn K ;
+Ger+PxSg1:^CLEN^RLEN%>dijnân K ;
+Ger+PxSg2:^CLEN^RLEN%>dijnâd K ;
+Ger+PxSg3:^CLEN^RLEN%>dijnis K ;
+Der4+Der/NomAct: FLAG_3KEPIDEM ;
+Der2+Der/NomAg:%> IJJE ;
!+Der3+Der/Pass: C_PASS_LONG ; ! C_MERIDUD instead


LEXICON 3_PUTESTID
!! * 3_PUTESTID (cns and vow lengthening) putestiđ: putteest Length change in stem: Short V in Inf (before V)
!!     - Sg1: %>âm, Sg3: ^CLEN^SLEN
+V: 3_PUTESTID_V ;
LEXICON 3_PUTESTID_IV
+V+IV: 3_PUTESTID_V ;
LEXICON 3_PUTESTID_TV
+V+TV: 3_PUTESTID_V ;

LEXICON 3_PUTESTID_V  ! SM53. short V in Inf

 ODD_VINFINITES_PUTESTID ; ! Diacriticn to shorten V
+Ind+Prs: ODD_PRS_PUTESTID ;
+Ind+Prt: ODD_DU_ERRORTH ;
+Ind+Prt: ODD_PRT ;
+Cond+Prs: ODD_COND ;
+Imprt+Sg2:^CLEN^SLEN%> # ;
+Imprt: ODD_IMPRT_REST ;
+Pot+Prs: ODD_POT ;

+Der4+Der/InchL:i6^CLEN^SLEN#škyett4 4SYLL_KYETTID_DER ; ! putteest#škuođij
+Der1+Der/st:ist 4_ADELISTID ;
:^CLEN^SLEN DER_MAS ; ! putteestmâš
+Der1+Der/Caus:itt 4_ADELISTID ;
+Der2+Der/alla:â%>i6ll 4_KAVNATTATTAD ; !
+Der2+Der/adda:â%>i6dd 4_KAVNATTATTAD ; !ráigánâddâđ
+Der3+Der/Pass: C_MERIDUD ;

LEXICON ODD_VINFINITES_PUTESTID
+Inf:%>iđ K ;
+PrsPrc:%> IJJE_PRSPRC ;
+PrfPrc:%>âm K ;
+Ind+Prs+ConNeg:^CLEN^SLEN K ; ! jiem putteest
+Ind+Prt+ConNeg:%>âm K ;
+Cond+Prs+ConNeg:%>iččii K ;
+Pot+Prs+ConNeg:%>ižžii K ;
+Imprt+ConNeg:^CLEN^SLEN K ;
+VAbess:^CLEN^SLEN VABESS ; ! putteesthánnáá
+Actio+Nom:%>em NOMACT ;
+Actio+Nom+Err/Orth:%>im NOMACT ;
+Actio+Ill:^CLEN^SLEN%>mân K ; ! Sofia: putteestmân
+Actio+Ess:^CLEN^SLEN%>min K ; ! Sofia: putteestmin
+Actio+Loc:^CLEN^SLEN%>mist K ; ! Sofia: putteestmist
+Actio+Com:^CLEN^SLEN%>máin K ; !
+Ger:^CLEN^SLEN%>dijn K ; ! MLO: putteestdijn; Sofia: id.
+Ger+PxSg1:%>dijnân K ;
+Ger+PxSg2:%>dijnâd K ;
+Ger+PxSg3:%>dijnis K ;
+Der4+Der/NomAct: FLAG_3KEPIDEM ;
+Der2+Der/NomAg:%> IJJE ;

LEXICON ODD_PRS_PUTESTID  !
+Sg1:%>âm K ;
+Sg2:%>ah K ;
+Sg2+Err/Orth:%>âh K ;
+Sg3:^CLEN^SLEN K ; ! putteest
+Du1:%>een K ;
+Du2:^CLEN^SLEN%>vettee K ; ! putteestvettee
+Du3:%>ává   K ;
+Pl1:%>ep K ;
+Pl2:^CLEN^SLEN%>vetteđ K ; ! putteestvetteđ
+Pl3:%>eh K ;


LEXICON 3_COKKIITTID
!! * 3_COKKIITTID (stem-final tt shortening + 2syll vow shortening cokkiittiđ cokkit.
!!     - Sg1: %>âm, Sg3: ^SVSH
!!     - difference in negation + Action Ess, Loc.. compared to 3_COKKIITTID)
!!     - Length change in stem: Long V in Inf (before C#).
+V: 3_COKKIITTID_V ;
LEXICON 3_COKKIITTID_IV
+V+IV: 3_COKKIITTID_V ;
LEXICON 3_COKKIITTID_TV
+V+TV: 3_COKKIITTID_V ;

LEXICON 3_COKKIITTID_V  ! SM52, long V in Inf
ODD_VINFINITES_COKKIITTID ;
+Ind+Prs: ODD_PRS_COKKIITTID ;
+Ind+Prt: ODD_PRT ;
+Ind+Prt: ODD_DU_ERRORTH ;
+Cond+Prs: ODD_COND ;
+Pot+Prs: ODD_POT ;
+Imprt+Sg2:^SVSH K ; ! cokkit
+Imprt: ODD_IMPRT_REST ;

+Ind+Prs+ConNeg:^SVSH K ;
+Der4+Der/InchL:i6^WG^SVSH#škyett4 4SYLL_KYETTID_DER ; ! huolât#škuođij
+Der1+Der/st:ist 4_ADELISTID ;
:^SVSH DER_MAS ; ! cokkitmâš
+Der1+Der/Caus:itt 4_ADELISTID ;
+Der2+Der/alla:â%>i6ll 4_KAVNATTATTAD ; !
+Der2+Der/adda:â%>i6dd 4_KAVNATTATTAD ; !ráigánâddâđ
+Der3+Der/Pass: C_MERIDUD ;

LEXICON ODD_VINFINITES_COKKIITTID  !
+Inf:%>iđ K ;
+PrsPrc:%> IJJE_PRSPRC ;
+PrfPrc:%>âm K ;
+Ind+Prt+ConNeg:%>âm K ;
+Cond+Prs+ConNeg:%>iččii K ;
+Pot+Prs+ConNeg:%>ižžii K ;
+Imprt+ConNeg: K ;
+Der2+Der/NomAg:%> IJJE ;
+VAbess:^SVSH VABESS ;
+Actio+Nom:%>em NOMACT ;
+Actio+Nom+Err/Orth:%>im NOMACT ;
+Actio+Ill:^SVSH%>mân K ;
+Actio+Loc:^SVSH%>mist K ;
+Actio+Com:^SVSH%>máin K ;
+Actio+Ess:^SVSH%>min K ;
+Ger:^SVSH%>dijn K ;
+Ger+PxSg1:^SVSH%>dijnân K ;
+Ger+PxSg2:^SVSH%>dijnâd K ;
+Ger+PxSg3:^SVSH%>dijnis K ;
+Der4+Der/NomAct: FLAG_3KEPIDEM ;

LEXICON ODD_PRS_COKKIITTID  !
+Sg1:%>âm K ;
+Sg2:%>ah K ;
+Sg2+Err/Orth:%>âh K ;
+Sg3:^SVSH    K ;
+Du1:%>een K ;
+Du2:^SVSH%>vettee K ;
+Du3:%>ává   K ;
+Pl1:%>ep K ;
+Pl2:^SVSH%>vetteđ K ;
+Pl3:%>eh K ;



!! ### Common lexicons inflecting odd-syllabic verbs
! -----------------------------------------------



LEXICON ODD_INFINITES   !
+Inf:%>iđ K ;
+PrsPrc:%> IJJE_PRSPRC ;
+PrfPrc:%>âm K ;
+Imprt+ConNeg:^CLEN^RLEN K ; ! tt added
!+Ind+Prs+ConNeg:^RLEN K ;
!+Imprt+ConNeg:^RLEN K ; ! tt added

+Ind+Prt+ConNeg:%>âm K ;
+Cond+Prs+ConNeg:%>iččii K ;
+Pot+Prs+ConNeg:%>ižžii K ;

+VAbess:^RLEN VABESS ;

+Actio+Nom:%>em NOMACT ;
+Actio+Ill:^RLEN%>mân K ;
+Actio+Ess:^RLEN%>min K ;
+Actio+Loc:^RLEN%>mist K ;
+Actio+Com:^RLEN%>máin K ;
+Ger:^RLEN%>dijn K ;
+Ger+PxSg1:^RLEN%>dijnân K ;
+Ger+PxSg2:^RLEN%>dijnâd K ;
+Ger+PxSg3:^RLEN%>dijnis K ;
+Der2+Der/NomAg:%> IJJE ;
+Der4+Der/NomAct: FLAG_3KEPIDEM ;

LEXICON ODD_PRS_CONNEG    !
+Ind+Prs+ConNeg+Use/NG:^RLEN K ;
+Ind+Prs+ConNeg:^CLEN^RLEN K ;

LEXICON ODD_PRS_CONNEG_rlen    !
+Ind+Prs+ConNeg:^RLEN K ;

!LEXICON ODD_PRS_CONNEG_wg    ! * **@CODE@**
!+Ind+Prs+ConNeg:^WG^RLEN K ;             ! ceegât
!+Ind+Prs+ConNeg+Use/NG:^WG^RLEN^CLEN K ; ! ceeggât



LEXICON ODD_PRS   !
+Sg1:%>âm K ;
+Sg2:%>ah K ;
+Sg2+Err/Orth:%>âh K ;
+Sg3:^CLEN^RLEN^SLEN    K ;
+Du1:%>een K ;
+Du2:^CLEN^RLEN^SLEN%>vettee K ;
+Du3:%>ává   K ;
+Pl1:%>ep K ;
+Pl2:^CLEN^RLEN^SLEN%>vetteđ K ;
+Pl3:%>eh K ;

LEXICON ODD_PRT  !
+Sg1:%>im K ;
+Sg2:%>ih K ;
+Sg3:%>ij    K ;
+Du1:%>áim K ;
+Du2:%>áid K ;
+Du3:%>áin  K ;
+Pl1:%>ijm K ;
+Pl2:%>ijd K ;
+Pl3:%>ii K ;

LEXICON ODD_COND   !
+Sg1:%>iččim K ;
+Sg2:%>iččih K ;
+Sg3:%>ičij K ;
+Du1:%>iččijm K ;
+Du1+Err/Orth:%>iččiijm K ;
+Du2:%>iččijd K ;
+Du2+Err/Orth:%>iččiijd K ;
+Du3:%>iččijn K ;
+Du3+Err/Orth:%>iččiijn K ;
+Pl1:%>iččijm K ;
+Pl2:%>iččijd K ;
+Pl3:%>iččii K ;

LEXICON ODD_POT   !
+Sg1:%>ižžeem K ;
+Sg2:%>ižžeeh K ;
+Sg3:%>iš K ;
+Du1:%>ižžeen K ;
+Du2:%>išvettee K ;
+Du3:%>ižává K ;
+Pl1:%>ižžep K ;
+Pl2:%>išvetteđ K ;
+Pl3:%>ižeh K ;


LEXICON ODD_IMPRT   !
!+Sg2+Use/NG:^RLEN K ; !čuolâl wrong
+Sg2:^CLEN^RLEN K ;    !čuollâl ok
ODD_IMPRT_REST ;

LEXICON ODD_IMPRT_REST   !
+Sg3:%>us K ;
+Du1:%>oon K ;
+Du2:%>ee K ;
+Du3:%>us K ;
+Pl1:%>op K ;
+Pl2:%>iđ K ;
+Pl3:%>us K ;



LEXICON ODD_DU_ERRORTH  !
+Du1+Err/Orth:%>ááim K ; ! these separate, perhaps skip
+Du2+Err/Orth:%>ááid K ; ! only á ?
+Du3+Err/Orth:%>ááin  K ;



!! ### Derivational extentions to 3-syllabic verbs

LEXICON 3_DERIVED_LOW  ! lexicon to be determined
+V+Ind+Prs+Sg3:^RLEN^SLEN    K ; ! no ^VHIGH
3_DERIVED_REST ; ! the rest

LEXICON 3_DERIVED  ! lexicon
+V+Ind+Prs+Sg3:^VHIGH^RLEN^SLEN    K ; ! ^VHIGH
3_DERIVED_REST ; ! the rest

LEXICON 3_DERIVED_SLEN  ! lexicon
+V+Ind+Prs+Sg3:^SLEN    K ; ! ^VHIGH
3_DERIVED_REST ; ! the rest


LEXICON 3_DERIVED_REST  ! lexicon

+V+Inf:^RVSH%>iđ K ;
+V+Der4+Der/NomAct: FLAG_3KEPIDEM ;
+V+Der2+Der/NomAg:%> IJJE ;
+V+Der4+Der/InchL:i6^WG#škyett4 4SYLL_KYETTID_DER ; !joođeet#škuođij hmm
!+V+Der1+Der/st:ist 4_ADELISTID ; ! double st?
+V+Der1+Der/Caus:itt 4_ADELISTID ; !
+V+Der3+Der/Pass: C_MERIDUD ;

+V+Ind+Prs+Sg1:^RVSH%>âm K ; ! csh for vatâlâm
+V+Ind+Prs+Sg2:^RVSH%>ah K ;
+V+Ind+Prs+Sg2+Err/Orth:^RVSH%>âh K ;
+V+Ind+Prs+Du1:^RVSH%>een K ;
+V+Ind+Prs+Du2:^RLEN^SLEN%>vettee K ;
+V+Ind+Prs+Du3:^RVSH%>ává   K ;
+V+Ind+Prs+Pl1:^RVSH%>ep K ;
+V+Ind+Prs+Pl2:%>vetteđ K ;
+V+Ind+Prs+Pl3:^RVSH%>eh K ;

+V+Ind+Prt+Sg1:^RVSH%>im K ;
+V+Ind+Prt+Sg2:^RVSH%>ih K ;
+V+Ind+Prt+Sg3:^RVSH%>ij    K ;
+V+Ind+Prt+Du1:^RVSH%>áim K ;
+V+Ind+Prt+Du2:^RVSH%>áid K ;
+V+Ind+Prt+Du3:^RVSH%>áin  K ;
+V+Ind+Prt+Pl1:^RVSH%>ijm K ;
+V+Ind+Prt+Pl2:^RVSH%>ijd K ;
+V+Ind+Prt+Pl3:^RVSH%>ii K ;

+V+Cond+Prs+Sg1:^RVSH%>iččim K ;
+V+Cond+Prs+Sg2:^RVSH%>iččih K ;
+V+Cond+Prs+Sg3:^RVSH%>ičij K ;
+V+Cond+Prs+Du1:^RVSH%>iččijm K ;
+V+Cond+Prs+Du2:^RVSH%>iččijd K ;
+V+Cond+Prs+Du3:^RVSH%>iččijn K ;
+V+Cond+Prs+Pl1:^RVSH%>iččijm K ;
+V+Cond+Prs+Pl2:^RVSH%>iččijd K ;
+V+Cond+Prs+Pl3:^RVSH%>iččii K ;
+V+Cond+Prs+Du1+Err/Orth:%>iččiijm K ;
+V+Cond+Prs+Du2+Err/Orth:%>iččiijd K ;
+V+Cond+Prs+Du3+Err/Orth:%>iččiijn K ;

+V+Pot+Prs+Sg1:^RVSH%>ižžeem K ;
+V+Pot+Prs+Sg2:^RVSH%>ižžeeh K ;
+V+Pot+Prs+Sg3:^RVSH%>iš K ;
+V+Pot+Prs+Du1:^RVSH%>ižžeen K ;
+V+Pot+Prs+Du2:^RVSH%>išvettee K ;
+V+Pot+Prs+Du3:^RVSH%>ižává K ;
+V+Pot+Prs+Pl1:^RVSH%>ižžep K ;
+V+Pot+Prs+Pl2:^RVSH%>išvetteđ K ;
+V+Pot+Prs+Pl3:^RVSH%>ižeh K ;

+V+Imprt+Sg1:%>um K ;
+V+Imprt+Sg2:^RLEN^SLEN K ;
+V+Imprt+Sg3:%>us K ;
+V+Imprt+Du1:%>oon K ;
+V+Imprt+Du2:%>ee K ;
+V+Imprt+Du3:%>us K ;
+V+Imprt+Pl1:%>op K ;
+V+Imprt+Pl2:%>iđ K ;
+V+Imprt+Pl3:%>us K ;

+V+PrsPrc:%> IJJE_PRSPRC ;
+V+PrfPrc:^RVSH%>âm K ;

+V+Ind+Prs+ConNeg:^RLEN^SLEN K ;
+V+Ind+Prt+ConNeg:^RVSH%>âm K ; !tojâdâm ^RVSH
+V+Cond+Prs+ConNeg:%>iččii K ;
+V+Pot+Prs+ConNeg:^RVSH%>ižžii K ; !tojâdižžii ^RVSH
+V+Imprt+ConNeg: K ;

+V+VAbess:^RLEN^SLEN VABESS ;
+V+VAbess+Err/Orth:^RLEN^SLEN%>hinnáá K ;
+V+VAbess+Err/Orth:^RLEN^SLEN%>hennáá K ;

+V+Actio+Nom:^RVSH%>em NOMACT ;
+V+Actio+Ill:^RLEN^SLEN%>mân K ;
+V+Actio+Ess:^RLEN^SLEN%>min K ;
+V+Actio+Loc:^RLEN^SLEN%>mist K ;
+V+Actio+Com:^RLEN^SLEN%>máin K ;
+V+Ger:^RLEN^SLEN%>dijn K ;
+V+Ger+PxSg1:^RLEN^SLEN%>dijnân K ;
+V+Ger+PxSg2:^RLEN^SLEN%>dijnâd K ;
+V+Ger+PxSg3:^RLEN^SLEN%>dijnis K ;


LEXICON 3_DERIVED_CLEN  ! lexicon

+V+Inf:%>iđ K ;

+V+Ind+Prs+Sg1:^RVSH%>âm K ; ! csh for vatâlâm
+V+Ind+Prs+Sg2:^RVSH%>ah K ;
+V+Ind+Prs+Sg2+Err/Orth:^RVSH%>âh K ;
+V+Ind+Prs+Sg3:^CLEN^RLEN^SLEN    K ;
+V+Ind+Prs+Du1:^RVSH%>een K ;
+V+Ind+Prs+Du2:^RLEN^SLEN%>vettee K ;
+V+Ind+Prs+Du3:^RVSH%>ává   K ;
+V+Ind+Prs+Pl1:^RVSH%>ep K ;
+V+Ind+Prs+Pl2:%>vetteđ K ;
+V+Ind+Prs+Pl3:^RVSH%>eh K ;

+V+Ind+Prt+Sg1:^RVSH%>im K ;
+V+Ind+Prt+Sg2:^RVSH%>ih K ;
+V+Ind+Prt+Sg3:^RVSH%>ij    K ;
+V+Ind+Prt+Du1:^RVSH%>áim K ;
+V+Ind+Prt+Du2:^RVSH%>áid K ;
+V+Ind+Prt+Du3:^RVSH%>áin  K ;
+V+Ind+Prt+Pl1:^RVSH%>ijm K ;
+V+Ind+Prt+Pl2:^RVSH%>ijd K ;
+V+Ind+Prt+Pl3:^RVSH%>ii K ;

+V+Cond+Prs+Sg1:^RVSH%>iččim K ;
+V+Cond+Prs+Sg2:^RVSH%>iččih K ;
+V+Cond+Prs+Sg3:^RVSH%>ičij K ;
+V+Cond+Prs+Du1:^RVSH%>iččijm K ;
+V+Cond+Prs+Du2:^RVSH%>iččijd K ;
+V+Cond+Prs+Du3:^RVSH%>iččijn K ;
+V+Cond+Prs+Pl1:^RVSH%>iččijm K ;
+V+Cond+Prs+Pl2:^RVSH%>iččijd K ;
+V+Cond+Prs+Pl3:^RVSH%>iččii K ;

+V+Cond+Prs+Du1+Err/Orth:%>iččiijm K ;
+V+Cond+Prs+Du2+Err/Orth:%>iččiijd K ;
+V+Cond+Prs+Du3+Err/Orth:%>iččiijn K ;


+V+Pot+Prs+Sg1:%>ižžeem K ;
+V+Pot+Prs+Sg2:%>ižžeeh K ;
+V+Pot+Prs+Sg3:%>iš K ;
+V+Pot+Prs+Du1:%>ižžeen K ;
+V+Pot+Prs+Du2:%>išvettee K ;
+V+Pot+Prs+Du3:%>ižává K ;
+V+Pot+Prs+Pl1:%>ižžep K ;
+V+Pot+Prs+Pl2:%>išvetteđ K ;
+V+Pot+Prs+Pl3:%>ižeh K ;

+V+Imprt+Sg1:%>um K ;
+V+Imprt+Sg2:^RLEN^SLEN K ;
+V+Imprt+Sg3:%>us K ;
+V+Imprt+Du1:%>oon K ;
+V+Imprt+Du2:%>ee K ;
+V+Imprt+Du3:%>us K ;
+V+Imprt+Pl1:%>op K ;
+V+Imprt+Pl2:%>iđ K ;
+V+Imprt+Pl3:%>us K ;

+V+PrsPrc:%> IJJE_PRSPRC ;

+V+PrfPrc:%>âm K ;

+V+Ind+Prs+ConNeg:^CLEN^RLEN^SLEN K ;
+V+Ind+Prt+ConNeg:%>âm K ;
+V+Cond+Prs+ConNeg:%>iččii K ;
+V+Pot+Prs+ConNeg:%>ižžii K ;
+V+Imprt+ConNeg: K ;

+V+VAbess:^CLEN^RLEN^SLEN VABESS ;
+V+VAbess+Err/Orth:^RLEN^SLEN%>hinnáá K ;
+V+VAbess+Err/Orth:^RLEN^SLEN%>hennáá K ;

+V+Actio+Nom:%>em NOMACT ;
+V+Actio+Ill:^CLEN^RLEN^SLEN%>mân K ;
+V+Actio+Ess:^CLEN^RLEN^SLEN%>min K ;
+V+Actio+Loc:^CLEN^RLEN^SLEN%>mist K ;
+V+Actio+Com:^CLEN^RLEN^SLEN%>máin K ;
+V+Ger:^CLEN^RLEN^SLEN%>dijn K ;
+V+Ger+PxSg1:^CLEN^RLEN^SLEN%>dijnân K ;
+V+Ger+PxSg2:^CLEN^RLEN^SLEN%>dijnâd K ;
+V+Ger+PxSg3:^CLEN^RLEN^SLEN%>dijnis K ;

+V+Der4+Der/NomAct: FLAG_3KEPIDEM ;
+V+Der2+Der/NomAg:%> IJJE ;
+V+Der4+Der/InchL:i6^WG#škyett4 4SYLL_KYETTID_DER ; !joođeet#škuođij hmm
+V+Der3+Der/Pass: C_MERIDUD ;
+V+Der1+Der/st:ist 4_ADELISTID ; !
+V+Der1+Der/Caus:itt 4_ADELISTID ; !



LEXICON 3_DERIVED_VBACK   

+V+Inf:^VBACK%>iđ K ;

+V+Ind+Prs+Sg1:^VBACK%>âm K ; !
+V+Ind+Prs+Sg2:^VBACK%>ah K ;
+V+Ind+Prs+Sg2+Err/Orth:^VBACK%>âh K ;
+V+Ind+Prs+Sg3:^VBACK^RLEN K ; ! ^RLEN^SLEN    K ;
+V+Ind+Prs+Du1:^VBACK%>een K ;
+V+Ind+Prs+Du2:^VBACK%>vettee K ;
+V+Ind+Prs+Du3:^VBACK%>ává   K ;
+V+Ind+Prs+Pl1:^VBACK%>ep K ;
+V+Ind+Prs+Pl2:^VBACK%>vetteđ K ;
+V+Ind+Prs+Pl3:^VBACK%>eh K ;

+V+Ind+Prt+Sg1:^VBACK%>im K ;
+V+Ind+Prt+Sg2:^VBACK%>ih K ;
+V+Ind+Prt+Sg3:^VBACK%>ij    K ;
+V+Ind+Prt+Du1:^VBACK%>áim K ;
+V+Ind+Prt+Du2:^VBACK%>áid K ;
+V+Ind+Prt+Du3:^VBACK%>áin  K ;
+V+Ind+Prt+Pl1:^VBACK%>ijm K ;
+V+Ind+Prt+Pl2:^VBACK%>ijd K ;
+V+Ind+Prt+Pl3:^VBACK%>ii K ;

+V+Cond+Prs+Sg1:^VBACK%>iččim K ;
+V+Cond+Prs+Sg2:^VBACK%>iččih K ;
+V+Cond+Prs+Sg3:^VBACK%>ičij K ;

+V+Cond+Prs+Du1:^VBACK%>iččijm K ;
+V+Cond+Prs+Du1+Err/Orth:^VBACK%>iččiijm K ;
+V+Cond+Prs+Du2:^VBACK%>iččijd K ;
+V+Cond+Prs+Du2+Err/Orth:^VBACK%>iččiijd K ;
+V+Cond+Prs+Du3:^VBACK%>iččijn K ;
+V+Cond+Prs+Du3+Err/Orth:^VBACK%>iččiijn K ;

+V+Cond+Prs+Pl1:^VBACK%>iččijm K ;
+V+Cond+Prs+Pl2:^VBACK%>iččijd K ;
+V+Cond+Prs+Pl3:^VBACK%>iččii K ;

+V+Pot+Prs+Sg1:^VBACK%>ižžeem K ;
+V+Pot+Prs+Sg2:^VBACK%>ižžeeh K ;
+V+Pot+Prs+Sg3:^VBACK%>iš K ;
+V+Pot+Prs+Du1:^VBACK%>ižžeen K ;
+V+Pot+Prs+Du2:^VBACK%>išvettee K ;
+V+Pot+Prs+Du3:^VBACK%>ižává K ;
+V+Pot+Prs+Pl1:^VBACK%>ižžep K ;
+V+Pot+Prs+Pl2:^VBACK%>išvetteđ K ;
+V+Pot+Prs+Pl3:^VBACK%>ižeh K ;

+V+Imprt+Sg1:^VBACK%>um K ;
+V+Imprt+Sg2:^VBACK K ;
+V+Imprt+Sg3:^VBACK%>us K ;
+V+Imprt+Du1:^VBACK%>oon K ;
+V+Imprt+Du2:^VBACK%>ee K ;
+V+Imprt+Du3:^VBACK%>us K ;
+V+Imprt+Pl1:^VBACK%>op K ;
+V+Imprt+Pl2:^VBACK%>iđ K ;
+V+Imprt+Pl3:^VBACK%>us K ;

+V+PrsPrc:^VBACK%> IJJE_PRSPRC ;
+V+PrfPrc:^VBACK%>âm K ;

+V+Ind+Prs+ConNeg:^VBACK^RLEN K ;
+V+Ind+Prt+ConNeg:^VBACK%>âm K ;
+V+Cond+Prs+ConNeg:^VBACK%>iččii K ;
+V+Pot+Prs+ConNeg:^VBACK%>ižžii K ;
+V+Imprt+ConNeg: K ;

+V+VAbess:^VBACK VABESS ;
+V+VAbess+Err/Orth:^VBACK%>hinnáá K ;
+V+VAbess+Err/Orth:^VBACK%>hennáá K ;

+V+Actio+Nom:^VBACK%>em NOMACT ;
+V+Actio+Ill:^VBACK^RLEN^SLEN%>mân K ;
+V+Actio+Loc:^VBACK^RLEN^SLEN%>mist K ;
+V+Actio+Com:^VBACK^RLEN^SLEN%>máin K ;
+V+Actio+Ess:^VBACK^RLEN^SLEN%>min K ;
+V+Ger:^VBACK^RLEN^SLEN%>dijn K ;
+V+Ger+PxSg1:^VBACK^RLEN^SLEN%>dijnân K ;
+V+Ger+PxSg2:^VBACK^RLEN^SLEN%>dijnâd K ;
+V+Ger+PxSg3:^VBACK^RLEN^SLEN%>dijnis K ;
+V+Der4+Der/NomAct:^VBACK FLAG_3KEPIDEM ;
+V+Der2+Der/NomAg:^VBACKei4je C_TAHHEE ;
+V+Der4+Der/InchL:i6^WG^VBACK#škyett4 4SYLL_KYETTID_DER ; !joođeet#škuođij hmm
+V+Der1+Der/st:^VBACKist 4_ADELISTID ; !
+V+Der1+Der/Caus:^VBACKitt 4_ADELISTID ; !
+V+Der3+Der/Pass:^VBACK C_MERIDUD ;


!DERL LEXICON 3_DERIVED_L_RLEN_CLEN   !!≈ * **@CODE@**
!DERL 
!DERL +V+Inf:^CSH%>iđ K ;	! viirrâđ > virâliđ
!DERL 
!DERL +V+Ind+Prs+Sg1:^CSH%>âm K ; ! virâlâm
!DERL +V+Ind+Prs+Sg2:^CSH%>ah K ; ! virâlâm
!DERL +V+Ind+Prs+Sg3:^RLEN K ; ! ^RLEN^SLEN    K ; ! viirrâl
!DERL +V+Ind+Prs+Du1:^CSH%>een K ;
!DERL +V+Ind+Prs+Du2:^RLEN%>vettee K ;
!DERL +V+Ind+Prs+Du3:^CSH%>ává   K ;
!DERL +V+Ind+Prs+Pl1:^CSH%>ep K ;
!DERL +V+Ind+Prs+Pl2:^RLEN%>vetteđ K ;
!DERL +V+Ind+Prs+Pl3:^CSH%>eh K ;
!DERL 
!DERL +V+Ind+Prt+Sg1:^CSH%>im K ;
!DERL +V+Ind+Prt+Sg2:^CSH%>ih K ;
!DERL +V+Ind+Prt+Sg3:^CSH%>ij    K ;
!DERL +V+Ind+Prt+Du1:^CSH%>áim K ;
!DERL +V+Ind+Prt+Du2:^CSH%>áid K ;
!DERL +V+Ind+Prt+Du3:^CSH%>áin  K ;
!DERL +V+Ind+Prt+Pl1:^CSH%>ijm K ;
!DERL +V+Ind+Prt+Pl2:^CSH%>ijd K ;
!DERL +V+Ind+Prt+Pl3:^CSH%>ii K ;
!DERL 
!DERL +V+Cond+Prs+Sg1:^CSH%>iččim K ;
!DERL +V+Cond+Prs+Sg2:^CSH%>iččih K ;
!DERL +V+Cond+Prs+Sg3:^CSH%>ičij K ;
!DERL 
!DERL +V+Cond+Prs+Du1:^CSH%>iččijm K ;
!DERL +V+Cond+Prs+Du1+Err/Orth:^CSH%>iččiijm K ;
!DERL +V+Cond+Prs+Du2:^CSH%>iččijd K ;
!DERL +V+Cond+Prs+Du2+Err/Orth:^CSH%>iččiijd K ;
!DERL +V+Cond+Prs+Du3:^CSH%>iččijn K ;
!DERL +V+Cond+Prs+Du3+Err/Orth:^CSH%>iččiijn K ;
!DERL 
!DERL +V+Cond+Prs+Pl1:^CSH%>iččijm K ;
!DERL +V+Cond+Prs+Pl2:^CSH%>iččijd K ;
!DERL +V+Cond+Prs+Pl3:^CSH%>iččii K ;
!DERL 
!DERL +V+Pot+Prs+Sg1:^CSH%>ižžeem K ;
!DERL +V+Pot+Prs+Sg2:^CSH%>ižžeeh K ;
!DERL +V+Pot+Prs+Sg3:^CSH%>iš K ;
!DERL +V+Pot+Prs+Du1:^CSH%>ižžeen K ;
!DERL +V+Pot+Prs+Du2:^CSH%>išvettee K ;
!DERL +V+Pot+Prs+Du3:^CSH%>ižává K ;
!DERL +V+Pot+Prs+Pl1:^CSH%>ižžep K ;
!DERL +V+Pot+Prs+Pl2:^CSH%>išvetteđ K ;
!DERL +V+Pot+Prs+Pl3:^CSH%>ižeh K ;
!DERL 
!DERL +V+Imprt+Sg1:^CSH%>um K ;
!DERL +V+Imprt+Sg2:^RLEN K ;
!DERL +V+Imprt+Sg3:^CSH%>us K ;
!DERL +V+Imprt+Du1:^CSH%>oon K ;
!DERL +V+Imprt+Du2:^CSH%>ee K ;
!DERL +V+Imprt+Du3:^CSH%>us K ;
!DERL +V+Imprt+Pl1:^CSH%>op K ;
!DERL +V+Imprt+Pl2:^CSH%>iđ K ;
!DERL +V+Imprt+Pl3:^CSH%>us K ;
!DERL 
!DERL +V+PrsPrc:^CSH%>eijjee K ;
!DERL +V+PrsPrc+Use/NG:^CSH%>ijjee K ;
!DERL +V+PrfPrc:^CSH%>âm K ;
!DERL 
!DERL +V+Ind+Prs+ConNeg:^RLEN K ; ! ^SLEN
!DERL +V+Ind+Prt+ConNeg:^CSH%>âm K ;
!DERL +V+Cond+Prs+ConNeg:^CSH%>iččii K ;
!DERL +V+Pot+Prs+ConNeg:^CSH%>ižžii K ;
!DERL +V+Imprt+ConNeg:^RLEN K ;
!DERL 
!DERL +V+VAbess:^RLEN VABESS ;
!DERL +V+VAbess+Err/Orth:^RLEN%>hinnáá K ;
!DERL +V+VAbess+Err/Orth:^RLEN%>hennáá K ;
!DERL 
!DERL +V+Actio+Nom:^CSH%>em K ;
!DERL +V+Actio+Ill:^CSH%>mân K ;
!DERL +V+Actio+Loc:^CSH%>mist K ;
!DERL +V+Actio+Com:^CSH%>máin K ;
!DERL +V+Actio+Ess:^CSH%>min K ;
!DERL +V+Ger:^WG%>dijn K ;
!DERL +V+Ger+PxSg1:^WG%>dijnân K ;
!DERL +V+Ger+PxSg2:^WG%>dijnâd K ;
!DERL +V+Ger+PxSg3:^WG%>dijnis K ;
!DERL +V+Der4+Der/NomAct: FLAG_3KEPIDEM ;
!DERL +V+Der2+Der/NomAg:^WGei4je C_TAHHEE ;
!DERL +V+Der4+Der/InchL:i6^WG#škyett4 4SYLL_KYETTID_DER ; !joođeet#škuođij hmm
!DERL +V+Der1+Der/st:^WGist 4_ADELISTID ; !
!DERL +V+Der1+Der/Caus:^WGitt 4_ADELISTID ; !
!DERL +V+Der3+Der/Pass:%> C_MERIDUD ;
!DERL 


!! ### 4-syllabic

!! * 4v
!! * 4_ADELISTID
!! * 4_KAVNATTATTAD
!! * 4_TUHHID


!! ## Contracted stems
! ----------------

!! ###  j stems
!! * Contracted j-stems
!!     - C_COKKAD (áj-contracted)
!!         - Ind Prs Pl3 čokkájeh
!!     - C_PALLAD (aj-contracted)
!!     - C_TUHHID (ej-contracted)
!!     - C_RAMMUD (oj-contracted)


LEXICON C_COKKAD
+V: C_COKKAD_V ;
LEXICON C_COKKAD_IV
+V+IV: C_COKKAD_V ;
LEXICON C_COKKAD_TV
+V+TV: C_COKKAD_V ;

LEXICON C_COKKAD_V  !
 VINF_SHORT_VOW ; ! Trond: Fix
:á VINF_LONG_VOW ;
+Der4+Der/InchL:á#škyett4 4SYLL_KYETTID_DER ; !kulluu#škuođij
+Der1+Der/tt:átt 3_COKKIITTID ; !rahhiittiđ ruvviittiđ
+Der1+Der/st:ást 3_COKKIITTID ; !ruvviistiđ
!DERL+Der1+Der/l:âl 3_DERIVED_L ;
:á^SLEN DER_MAS ; ! čokkáámâš
+Der3+Der/Pass: C_PASS_LONG ;


+Cond+Prs:á EVEN_COND ;
+Pot+Prs:á CONTR_POT ;
+Imprt: CONTR_IMPRT ;

+PrsPrc:%>j IJJE_PRSPRC ;

+Ind+Prs+Sg1:%>ám K ;
+Ind+Prs+Sg2:%>áh K ;
+Ind+Prs+Sg3:%>á K ;
+Ind+Prs+Du1:%>jeen K ;
+Ind+Prs+Du2:%>ávettee K ;
+Ind+Prs+Du3:%>v K ;
+Ind+Prs+Pl1:%>p K ;
+Ind+Prs+Pl2:%>ávetteđ K ;
+Ind+Prs+Pl3:%>jeh K ;

+Ind+Prt+Sg1:%>jim K ;
+Ind+Prt+Sg2:%>jih  K ;
+Ind+Prt+Sg3:%>i  K ;
+Ind+Prt+Du1:%>im  K ;
+Ind+Prt+Du2:%>id K ;
+Ind+Prt+Du3:%>in  K ;
+Ind+Prt+Pl1:%>im  K ;
+Ind+Prt+Pl2:%>id  K ;
+Ind+Prt+Pl3:%>jii  K ;

LEXICON C_PASS_LONG  !
+V+IV+Inf:ju%>đ K ;

!+V+IV+Der4+Der/NomAct:

+V+IV+Ind+Prs+Sg1:juu%>m K ;
+V+IV+Ind+Prs+Sg2:juu%>h K ;
+V+IV+Ind+Prs+Sg3:juvvo%>o K ;
+V+IV+Ind+Prs+Du1:juvvoj%>een K ;
+V+IV+Ind+Prs+Du2:juu%>vettee K ;
+V+IV+Ind+Prs+Du3:ju%>v K ;
+V+IV+Ind+Prs+Pl1:ju%>p K ;
+V+IV+Ind+Prs+Pl2:juu%>vetteđ K ;
+V+IV+Ind+Prs+Pl3:juvvo%>jeh K ;

+V+IV+Ind+Prt+Sg1:juvvojim K ;
+V+IV+Ind+Prt+Sg2:juvvojih K ;
+V+IV+Ind+Prt+Sg3:jui K ;
+V+IV+Ind+Prt+Du1:juim K ;
+V+IV+Ind+Prt+Du2:juid K ;
+V+IV+Ind+Prt+Du3:juin K ;
+V+IV+Ind+Prt+Pl2:juim K ;
+V+IV+Ind+Prt+Pl2:juid K ;
+V+IV+Ind+Prt+Pl3:juvvo%>jii K ;


+V+IV+Ind+Prs+ConNeg:juu	     K ;
+V+IV+Ind+Prt+ConNeg:jum	     K ;
+V+IV+Cond+Prs+ConNeg:juuččii	     K ;
+V+IV+Pot+Prs+ConNeg:južžii	     K ;

+V+IV+PrsPrc:juvvee		     K ;
+V+IV+PrfPrc:jum			     K ;
+V+IV+VAbess:juu VABESS ;
+V+IV+Actio+Nom:jume			     K ;
+V+IV+Actio+Gen:jume			     K ;
+V+IV+Actio+Loc:juumeest	     K ;
+V+IV+Actio+Com:juumáin	     K ;
+V+IV+Actio+Ill:juumán	     K ;
+V+IV+Actio+Ess:jummeen	     K ;
+V+IV+Ger:juudijn	     K ;
+V+IV+Der4+Der/NomAct:j#u^RVm^RCe 2NJUNE ; !TEST


LEXICON C_PALLAD
+V: C_PALLAD_V ;
LEXICON C_PALLAD_IV
+V+IV: C_PALLAD_V ;
LEXICON C_PALLAD_TV
+V+TV: C_PALLAD_V ;

LEXICON C_PALLAD_V !

 VINF_SHORT_VOW ;
:a VINF_LONG_VOW ;
+Cond+Prs:a EVEN_COND ;
+Pot+Prs:a CONTR_POT ;
+Imprt: CONTR_IMPRT ;
+PrsPrc:%>j IJJE_PRSPRC ;
+Der4+Der/InchL:aš%>kyett4 4SYLL_KYETTID_DER ; !kulluu#škuođij
+Der1+Der/tt:att 3_COKKIITTID ; !rahhiittiđ ruvviittiđ
+Der1+Der/st:ast 3_COKKIITTID ; !ruvviistiđ
!DERL+Der1+Der/l:al 3_DERIVED_L ;
:a^SLEN DER_MAS ; ! pallaamâš
+Der3+Der/Pass: C_PASS_LONG ;


+Ind+Prs+Sg1:%>am K ;
+Ind+Prs+Sg2:%>ah K ;
+Ind+Prs+Sg3:%>a K ;
+Ind+Prs+Du1:%>jeen K ;
+Ind+Prs+Du2:%>avettee K ;
+Ind+Prs+Du3:%>v K ;
+Ind+Prs+Pl1:%>p K ;
+Ind+Prs+Pl2:%>avetteđ K ;
+Ind+Prs+Pl3:%>jeh K ;

+Ind+Prt+Sg1:%>jim K ;
+Ind+Prt+Sg2:%>jih  K ;
+Ind+Prt+Sg3:%>i  K ;
+Ind+Prt+Du1:%>im  K ;
+Ind+Prt+Du2:%>id K ;
+Ind+Prt+Du3:%>in  K ;
+Ind+Prt+Pl1:%>im  K ;
+Ind+Prt+Pl2:%>id  K ;
+Ind+Prt+Pl3:%>jii  K ;


LEXICON C_HOLHOD !

+V: VINF_SHORT_VOW ;
+V:o VINF_LONG_VOW ;
+V+Cond+Prs:o EVEN_COND ;
+V+Pot+Prs:o CONTR_POT ;
+V+Imprt: CONTR_IMPRT ;
+V+PrsPrc:%>j IJJE_PRSPRC ;
+V+Der4+Der/InchL:oš%>kyett4 4SYLL_KYETTID_DER ; !kulluu#škuođij
+V+Der1+Der/tt:ott 3_COKKIITTID ; !rahhiittiđ ruvviittiđ
+V+Der1+Der/st:ost 3_COKKIITTID ; !ruvviistiđ
+V:o^SLEN DER_MAS ; ! holhoomâš
+V+Der3+Der/Pass: C_PASS_LONG ;


+V+Ind+Prs+Sg1:%>om K ;
+V+Ind+Prs+Sg2:%>oh K ;
+V+Ind+Prs+Sg3:%>o K ;
+V+Ind+Prs+Du1:%>jeen K ;
+V+Ind+Prs+Du2:%>ovettee K ;
+V+Ind+Prs+Du3:%>v K ;
+V+Ind+Prs+Pl1:%>p K ;
+V+Ind+Prs+Pl2:%>ovetteđ K ;
+V+Ind+Prs+Pl3:%>jeh K ;

+V+Ind+Prt+Sg1:%>jim K ;
+V+Ind+Prt+Sg2:%>jih  K ;
+V+Ind+Prt+Sg3:%>i  K ;
+V+Ind+Prt+Du1:%>im  K ;
+V+Ind+Prt+Du2:%>id K ;
+V+Ind+Prt+Du3:%>in  K ;
+V+Ind+Prt+Pl1:%>im  K ;
+V+Ind+Prt+Pl2:%>id  K ;
+V+Ind+Prt+Pl3:%>jii  K ;


LEXICON C_TUHHID
+V: C_TUHHID_V ;
LEXICON C_TUHHID_IV
+V+IV: C_TUHHID_V ;
LEXICON C_TUHHID_TV
+V+TV: C_TUHHID_V ;

LEXICON C_TUHHID_V !

:i2 VINF_SHORT_VOW ;
:i2%>i3 VINF_LONG_VOW ;
+Cond+Prs:i2%>i EVEN_COND ;
+Der4+Der/InchL:i2%>i3#škyett4 4SYLL_KYETTID_DER ; !kulluu#škuođij, staavii#škuát (VBACK)
+Der1+Der/tt:i2%>i3tt 3_COKKIITTID ; !rahhiittiđ ruvviittiđ  ruvviđ:ruvv C_TUHHID ;   i2%>i3tt ruvviittiđ:ruvviitt 3_COKKIITTID
+Der1+Der/st:i2%>i3st 3_COKKIITTID ; !ruvviistiđ  lohhiđ:luáhh C_TUHHID
:i^SLEN DER_MAS ; ! tuhhiimâš
+Der3+Der/Pass:e C_PASS_LONG ;

+PrsPrc:e%>j IJJE_PRSPRC ;

+Ind+Prs+Sg1:i2%>i3m K ;
+Ind+Prs+Sg2:i2%>ih K ;
+Ind+Prs+Sg3:i2%>e K ;
+Ind+Prs+Du1:i2%>jeen K ;
+Ind+Prs+Du2:i2%>ivettee K ;
+Ind+Prs+Du3:i2%>v K ;
+Ind+Prs+Pl1:i2%>p K ;
+Ind+Prs+Pl2:i2%>ivetteđ K ;
+Ind+Prs+Pl3:i2%>jeh K ;

+Ind+Prt+Sg1:i2%>jim K ;
+Ind+Prt+Sg2:i2%>jih  K ;
+Ind+Prt+Sg3:i2%>j  K ;
+Ind+Prt+Du1:i2%>jm  K ;
+Ind+Prt+Du2:i2%>jd K ;
+Ind+Prt+Du3:i2%>jn  K ;
+Ind+Prt+Pl1:i2%>jm  K ;
+Ind+Prt+Pl2:i2%>jd  K ;
+Ind+Prt+Pl3:i2%>jii  K ;

+Pot+Prs+Sg1:i2%>ižeem K ;
+Pot+Prs+Sg2:i2%>ižeeh K ;
+Pot+Prs+Sg3:i2%>š K ;
+Pot+Prs+Du1:i2%>ižeen K ;
+Pot+Prs+Du2:i2%>švettee K ;
+Pot+Prs+Du3:i2%>ižává K ;
+Pot+Prs+Pl1:i2%>ižep K ;
+Pot+Prs+Pl2:i2%>švetteđ K ;
+Pot+Prs+Pl3:i2%>ižeh K ;

+Imprt+Sg1:i2%>jum K ;
+Imprt+Sg2:i2%>i3 K ; ! to avoid -ij
+Imprt+Sg3:i2%>jus K ;
+Imprt+Du1:i2%>joon K ;
+Imprt+Du2:i2%>jee K ;
+Imprt+Du3:i2%>jus K ;
+Imprt+Pl1:i2%>jop K ;
+Imprt+Pl2:i2%>đ K ;
+Imprt+Pl3:i2%>jus K ;


LEXICON C_SLOOVID !
+V: C_SLOOVID_V ;


LEXICON C_SLOOVID_V

+Inf:i^VBACK%>đ K ;
+Ind+Prt+ConNeg:i^VBACK%>m K ;
+PrfPrc:i^VBACK%>m K ;
+Actio+Nom:i^VBACK%>m NOMACT ;
+Der2+Der/NomAg:i^VBACK%>j IJJE ;
+Der4+Der/NomAct:i^VBACK%>m FLAG_3HUKSIM ; !

:i^VBACK%>i3 VINF_LONG_VOW ;
+Cond+Prs:i2%>i EVEN_COND ;
+Der4+Der/InchL:i2%>i3#škyett4 4SYLL_KYETTID_DER ; !kulluu#škuođij, staavii#škuát (VBACK)
+Der1+Der/tt:i2%>i3tt 3_COKKIITTID ; !rahhiittiđ ruvviittiđ  ruvviđ:ruvv C_TUHHID ;   i2%>i3tt ruvviittiđ:ruvviitt 3_COKKIITTID
+Der1+Der/st:i2%>i3st 3_COKKIITTID ; !ruvviistiđ  lohhiđ:luáhh C_TUHHID
:i^SLEN DER_MAS ; ! tuhhiimâš
+Der3+Der/Pass:e C_PASS_LONG ;

+PrsPrc:e%>j IJJE_PRSPRC ;

+Ind+Prs+Sg1:i^VBACK%>i3m K ;
+Ind+Prs+Sg2:i^VBACK%>ih K ;
+Ind+Prs+Sg3:i2%>e K ;
+Ind+Prs+Du1:i2%>jeen K ;
+Ind+Prs+Du2:i^VBACK%>ivettee K ;
+Ind+Prs+Du3:i^VBACK%>v K ;
+Ind+Prs+Pl1:i^VBACK%>p K ;
+Ind+Prs+Pl2:i^VBACK%>ivetteđ K ;
+Ind+Prs+Pl3:i2%>jeh K ;

+Ind+Prt+Sg1:i2%>jim K ;
+Ind+Prt+Sg2:i2%>jih  K ;
+Ind+Prt+Sg3:i^VBACK%>j  K ;
+Ind+Prt+Du1:i^VBACK%>jm  K ;
+Ind+Prt+Du2:i^VBACK%>jd K ;
+Ind+Prt+Du3:i^VBACK%>jn  K ;
+Ind+Prt+Pl1:i^VBACK%>jm  K ;
+Ind+Prt+Pl2:i^VBACK%>jd  K ;
+Ind+Prt+Pl3:i2%>jii  K ;

+Pot+Prs+Sg1:i^VBACK%>ižeem K ;
+Pot+Prs+Sg2:i^VBACK%>ižeeh K ;
+Pot+Prs+Sg3:i^VBACK%>š K ;
+Pot+Prs+Du1:i^VBACK%>ižeen K ;
+Pot+Prs+Du2:i^VBACK%>švettee K ;
+Pot+Prs+Du3:i^VBACK%>ižává K ;
+Pot+Prs+Pl1:i^VBACK%>ižep K ;
+Pot+Prs+Pl2:i^VBACK%>švetteđ K ;
+Pot+Prs+Pl3:i^VBACK%>ižeh K ;

+Imprt+Sg1:i2%>jum K ;
+Imprt+Sg2:i^VBACK%>i3 K ; ! to avoid -ij
+Imprt+Sg3:i2%>jus K ;
+Imprt+Du1:i2%>joon K ;
+Imprt+Du2:i2%>jee K ;
+Imprt+Du3:i2%>jus K ;
+Imprt+Pl1:i2%>jop K ;
+Imprt+Pl2:i^VBACK%>đ K ;
+Imprt+Pl3:i2%>jus K ;


LEXICON C_PASS_SH_RVSH ! shortens vowel
+V+IV+Inf:^CLEN^VBACK^RVSH%>đ K ; !kavnuđ

+V+IV+Der4+Der/InchL:^CLEN#škyett4 4SYLL_KYETTID_DER ; !kulluu#škuođij
+V+IV+Der1+Der/st:^CLEN^VBACK^RVSH%>ust 3_DERIVED ; ! sirduustiđ
+V+IV+Der2+Der/NomAg:^CLEN^VHIGH^RVSH%>j IJJE ;
+V+IV+Der4+Der/NomAct:^CLEN^VBACK^RVSH%>m FLAG_3KEPIDEM ;

+V+IV+Ind+Prs+Sg1:^CLEN^VBACK^RVSH%>um K ; ! čahhuum
+V+IV+Ind+Prs+Sg2:^CLEN^VBACK^RVSH%>uh K ;  !čahhuuh
+V+IV+Ind+Prs+Sg3:^CLEN^VHIGH^RVSH%>o K ; ! čáhhoo
+V+IV+Ind+Prs+Du1:^CLEN^VHIGH^RVSH%>jeen K ; !čáhhojeen
+V+IV+Ind+Prs+Du2:^CLEN^VBACK^RVSH%>uvettee K ; !čahhuuvettee
+V+IV+Ind+Prs+Du3:^CLEN^VBACK^RVSH%>v K ; !čahhuv
+V+IV+Ind+Prs+Pl1:^CLEN^VBACK^RVSH%>p K ; !čahhup
+V+IV+Ind+Prs+Pl2:^CLEN^VBACK^RVSH%>uvetteđ K ;
+V+IV+Ind+Prs+Pl3:^CLEN^VHIGH^RVSH%>jeh K ; !čáhhojeh

+V+IV+Ind+Prt+Sg1:^CLEN^VHIGH^RVSH%>jim K ;
+V+IV+Ind+Prt+Sg2:^CLEN^VHIGH^RVSH%>jih  K ;
+V+IV+Ind+Prt+Sg3:^CLEN^VBACK^RVSH%>i  K ;
+V+IV+Ind+Prt+Du1:^CLEN^VBACK^RVSH%>im  K ;
+V+IV+Ind+Prt+Du2:^CLEN^VBACK^RVSH%>id K ;
+V+IV+Ind+Prt+Du3:^CLEN^VBACK^RVSH%>in  K ;
+V+IV+Ind+Prt+Pl1:^CLEN^VBACK^RVSH%>im  K ;
+V+IV+Ind+Prt+Pl2:^CLEN^VBACK^RVSH%>id  K ;
+V+IV+Ind+Prt+Pl3:^CLEN^VHIGH^RVSH%>jii  K ; !čáhhojii

+V+IV+Cond+Prs:^CLEN^VBACK^RVSH%>u EVEN_COND ;
+V+IV:^CLEN^VBACK^RVSH C_RAMMUD_POT ;

+V+IV+Ind+Prs+ConNeg:^CLEN^VBACK^RVSH%>u K ; !čahhuu
+V+IV+Ind+Prt+ConNeg:^CLEN^VBACK^RVSH%>m K ; !čahhum
+V+IV+Cond+Prs+ConNeg:^CLEN^VBACK^RVSH%>uččii K ;  ! juttuuččii
+V+IV+Pot+Prs+ConNeg:^CLEN^VBACK^RVSH%>užii K ;

+V+IV+PrfPrc:^CLEN^VBACK^RVSH%>m FLAG_K ; !čahhum
+V+IV+PrfPrc+Err/Orth:^CLEN^VBACK^RLEN%>m FLAG_K ; !čaallum  toohum XXXX Trond testing, commented in again; MLO: Norm 7.6.2016: all lang vowels should be shortened => Err/Orth.

+V+IV+PrsPrc:^CLEN^VHIGH^RVSH%>j IJJE_PRSPRC ;

+V+IV+VAbess:^CLEN^VBACK^RVSH%>uhánnáá K ; !
+V+IV+VAbess+Err/Orth:^CLEN^VBACK^RLEN%>uhinnáá K ;
+V+IV+VAbess+Err/Orth:^CLEN^VBACK^RLEN%>uhennáá K ;

+V+IV+Actio+Nom:^CLEN^VBACK^RVSH%>m NOMACT ;
+V+IV+Actio+Ill:^CLEN^VBACK^RVSH%>umân K ;
+V+IV+Actio+Loc:^CLEN^VBACK^RVSH%>umist K ;
+V+IV+Actio+Com:^CLEN^VBACK^RVSH%>umáin K ;
+V+IV+Actio+Ess:^CLEN^VBACK^RVSH%>umin K ;
+V+IV+Ger:^CLEN^VBACK^RVSH%>udijn K ;
+V+IV+Ger+PxSg1:^CLEN^VBACK^RVSH%>udijnân K ; ! XXX
+V+IV+Ger+PxSg2:^CLEN^VBACK^RVSH%>udijnâd K ;
+V+IV+Ger+PxSg3:^CLEN^VBACK^RVSH%>udijnis K ;
+V+IV+Ger:^CLEN^VBACK^RVSH%>udijn K ; ! tohhuudijn


LEXICON C_PASS_SH_RLEN ! does not shorten vowel
+V+IV+Inf:^CLEN^VBACK^RLEN%>đ K ;

+V+IV+Der4+Der/InchL:^CLEN#škyett4 4SYLL_KYETTID_DER ; !kulluu#škuođij
+V+IV+Der1+Der/st:^CLEN^VBACK^RLEN%>ust 3_DERIVED ; !
+V+IV+Der2+Der/NomAg:^CLEN^VHIGH%>j IJJE ;
+V+IV+Der4+Der/NomAct:^CLEN^VBACK^RLEN%>m FLAG_3KEPIDEM ;

+V+IV+Ind+Prs+Sg1:^CLEN^VBACK^RLEN%>um K ; ! vuoššuum
+V+IV+Ind+Prs+Sg2:^CLEN^VBACK^RLEN%>uh K ;  !vuoššuuh
+V+IV+Ind+Prs+Sg3:^CLEN^VHIGH%>o K ; ! vuáššoo
+V+IV+Ind+Prs+Du1:^CLEN^VHIGH%>jeen K ; !vuáššojeen
+V+IV+Ind+Prs+Du2:^CLEN^VBACK^RLEN%>uvettee K ; !vuoššuuvettee
+V+IV+Ind+Prs+Du3:^CLEN^VBACK^RLEN%>v K ; !vuoššuv
+V+IV+Ind+Prs+Pl1:^CLEN^VBACK^RLEN%>p K ; !vuoššup
+V+IV+Ind+Prs+Pl2:^CLEN^VBACK^RLEN%>uvetteđ K ; !vuoššuuvetteđ
+V+IV+Ind+Prs+Pl3:^CLEN^VHIGH%>jeh K ; !vuáššojeh

+V+IV+Ind+Prt+Sg1:^CLEN^VHIGH%>jim K ; ! vuáššojim
+V+IV+Ind+Prt+Sg2:^CLEN^VHIGH%>jih  K ; !vuáššojih
+V+IV+Ind+Prt+Sg3:^CLEN^VBACK^RLEN%>i  K ; !vuoššui
+V+IV+Ind+Prt+Du1:^CLEN^VBACK^RLEN%>im  K ; ! vuoššuim
+V+IV+Ind+Prt+Du2:^CLEN^VBACK^RLEN%>id K ; !vuoššuid
+V+IV+Ind+Prt+Du3:^CLEN^VBACK^RLEN%>in  K ;
+V+IV+Ind+Prt+Pl1:^CLEN^VBACK^RLEN%>im  K ;
+V+IV+Ind+Prt+Pl2:^CLEN^VBACK^RLEN%>id  K ;
+V+IV+Ind+Prt+Pl3:^CLEN^VHIGH%>jii  K ; !vuáššojii

+V+IV+Cond+Prs:^CLEN^VBACK^RLEN%>u EVEN_COND ;

! Deviates from normal POT
!pp!+V+IV+Pot+Prs+Sg1:^CLEN^VBACK^RLEN%>užeem K ;
!pp!+V+IV+Pot+Prs+Sg2:^CLEN^VBACK^RLEN%>užeeh K ;
+V+IV+Pot+Prs+Sg3:^WG^VBACK^RLEN%>š K ;
!pp!+V+IV+Pot+Prs+Du1:^CLEN^VBACK^RLEN%>užeen K ;
!pp!+V+IV+Pot+Prs+Du2:^CSH^VBACK^RLEN%>švettee K ;
!pp!+V+IV+Pot+Prs+Du3:^CLEN^VBACK^RLEN%>užává K ;
!pp!+V+IV+Pot+Prs+Pl1:^CLEN^VBACK^RLEN%>užep K ;
!pp!+V+IV+Pot+Prs+Pl2:^CSH^VBACK^RLEN%>švetteđ K ;
!pp!+V+IV+Pot+Prs+Pl3:^CLEN^VBACK^RLEN%>užeh K ;

+V+IV+Ind+Prs+ConNeg:^CLEN^VBACK^RLEN%>u K ; !
+V+IV+Ind+Prt+ConNeg:^CLEN^VBACK^RLEN%>m K ; !
+V+IV+Cond+Prs+ConNeg:^CLEN^VBACK^RLEN%>uččii K ;  !^CLEN^VHIGH  uápuuččii
+V+IV+Pot+Prs+ConNeg:^CLEN^VBACK^RLEN%>užii K ;
+V+IV+PrfPrc:^CLEN^VBACK^RLEN%>m FLAG_K ; !puohtum
+V+IV+PrsPrc:^CLEN^VHIGH%>j IJJE_PRSPRC ;

+V+IV+VAbess:^VBACK^RLEN%>uhánnáá K ; !
+V+IV+VAbess+Err/Orth:^VBACK^RLEN%>uhinnáá K ;
+V+IV+VAbess+Err/Orth:^VBACK^RLEN%>uhennáá K ;

+V+IV+Actio+Nom:^VBACK^RLEN%>m NOMACT ;
+V+IV+Actio+Ill:^VBACK^RLEN%>umân K ;
+V+IV+Actio+Loc:^VBACK^RLEN%>umist K ;
+V+IV+Actio+Com:^VBACK^RLEN%>umáin K ;
+V+IV+Actio+Ess:^VBACK^RLEN%>umin K ;
+V+IV+Ger+Err/Orth:^VBACK^RLEN%>dijn K ; !+Err/Orth?
+V+IV+Ger+PxSg1:^VBACK^RLEN%>dijnân K ; ! XXX
+V+IV+Ger+PxSg2:^VBACK^RLEN%>dijnâd K ;
+V+IV+Ger+PxSg3:^VBACK^RLEN%>dijnis K ;
+V+IV+Ger:^VBACK^RLEN%>udijn K ; !aasâttijn asât%>dijn 


LEXICON C_PASS_SH_ALTERNATE ! toohum: does not shorten vowel, does not lengthen consonant, this is a Use/NG lexicon
+V+IV+Inf:^VBACK^RLEN%>đ K ; !toohuđ

+V+IV+Ind+Prs+Du3:^VBACK^RLEN%>v K ; !toohuv
+V+IV+Ind+Prs+Pl1:^VBACK^RLEN%>p K ; !toohup

+V+IV+Ind+Prt+Sg3:^VBACK^RLEN%>i  K ;  ! toohui
+V+IV+Ind+Prt+Du1:^VBACK^RLEN%>im  K ;
+V+IV+Ind+Prt+Du2:^VBACK^RLEN%>id K ;
+V+IV+Ind+Prt+Du3:^VBACK^RLEN%>in  K ;
+V+IV+Ind+Prt+Pl1:^VBACK^RLEN%>im  K ;
+V+IV+Ind+Prt+Pl2:^VBACK^RLEN%>id  K ;

+V+IV+Pot+Prs+Sg3:^VBACK^RLEN%>š K ;
+V+IV+Pot+Prs+Du2:^VBACK^RLEN%>švettee K ;
+V+IV+Pot+Prs+Pl2:^VBACK^RLEN%>švetteđ K ;

+V+IV+Ind+Prt+ConNeg:^VBACK^RLEN%>m K ; !toohum
+V+IV+PrfPrc:^VBACK^RLEN%>m FLAG_K ; !toohum
+V+IV+Actio+Nom:^VBACK^RLEN%>m NOMACT ; ! toohum






LEXICON C_RAMMUD
+V: C_RAMMUD_V ;
LEXICON C_RAMMUD_IV
+V+IV: C_RAMMUD_V ;
LEXICON C_RAMMUD_TV
+V+TV: C_RAMMUD_V ;

LEXICON C_RAMMUD_V ! does not shorten vowel

VINF_SHORT_VOW ;
:%>u VINF_LONG_VOW ;
+Cond+Prs:%>u EVEN_COND ;
: C_RAMMUD_POT ;
+Imprt: CONTR_IMPRT ;
+Der4+Der/InchL:%>u#škyett4 4SYLL_KYETTID_DER ; !kulluu#škuođij
+Der1+Der/tt:%>utt 3_COKKIITTID ; !rahhiittiđ ruvviittiđ
+Der1+Der/st:%>ust 3_COKKIITTID ; !ruvviistiđ
:u^SLEN DER_MAS ; ! rammuumâš
+Der3+Der/Pass: C_PASS_LONG ;

+PrsPrc:%>j IJJE_PRSPRC ;

+Ind+Prs+Sg1:%>um K ; !^VBACK?
+Ind+Prs+Sg3:%>o K ; ! jf. C_TUHHID
+Ind+Prs+Du1:%>jeen K ;
+Ind+Prs+Pl3:%>jeh K ;
+Ind+Prt+Pl3:%>jii  K ; !a-

+Ind+Prs+Sg2:%>uh K ;
+Ind+Prs+Du2:%>uvettee K ;
+Ind+Prs+Du3:%>v K ;
+Ind+Prs+Pl1:%>p K ;
+Ind+Prs+Pl2:%>uvetteđ K ;

+Ind+Prt+Sg1:%>jim K ;
+Ind+Prt+Sg2:%>jih  K ;
+Ind+Prt+Sg3:%>i  K ;
+Ind+Prt+Du1:%>im  K ;
+Ind+Prt+Du2:%>id K ;
+Ind+Prt+Du3:%>in  K ;
+Ind+Prt+Pl1:%>im  K ;
+Ind+Prt+Pl2:%>id  K ;


LEXICON C_RAMMUD_POT  ! umify this and next
+Pot+Prs+Sg1:%>užeem K ;
+Pot+Prs+Sg2:%>užeeh K ;
+Pot+Prs+Sg3:%>š K ;
+Pot+Prs+Du1:%>užeen K ;
+Pot+Prs+Du2:%>švettee K ;
+Pot+Prs+Du3:%>užává K ;
+Pot+Prs+Pl1:%>užep K ;
+Pot+Prs+Pl2:%>švetteđ K ;
+Pot+Prs+Pl3:%>užeh K ;


LEXICON CONTR_POT ! unify this and previous
+Sg1:%>žeem K ;
+Sg2:%>žeeh K ;
+Sg3:^SVSH%>š K ;
+Du1:%>žeen K ;
+Du2:%>švettee K ;
+Du3:%>žává K ;	
+Pl1:%>žep K ;
+Pl2:%>švetteđ K ;
+Pl3:%>žeh K ;

LEXICON CONTR_IMPRT
+Sg1:%>jum K ;
+Sg2:%>^VO K ;
+Sg3:%>jus K ;
+Du1:%>joon K ;
+Du2:%>jee K ;
+Du3:%>jus K ;
+Pl1:%>jop K ;
+Pl2:%>đ K ;
+Pl3:%>jus K ;




LEXICON VINF_SHORT_VOW

+Inf:%>đ K ;
+Ind+Prt+ConNeg:%>m K ;
+PrfPrc:%>m K ;
+Actio+Nom:%>m NOMACT ;
+Der2+Der/NomAg:%>j IJJE ;
+Der4+Der/NomAct:^SVm FLAG_3HUKSIM ; !#škuvlim, *#škuávlim
!+Der4+Der/NomAct:^VBACK%>m FLAG_3HUKSIM ;

LEXICON VINF_LONG_VOW

+Ind+Prs+ConNeg: K ;
+Imprt+ConNeg: K ;
+Cond+Prs+ConNeg:%>ččii K ;
+Pot+Prs+ConNeg:%>žii K ;
+VAbess: VABESS ;
+Actio+Ill:%>mân K ;
+Actio+Loc:%>mist K ;
+Actio+Com:%>máin K ;
+Actio+Com+Err/Orth:%>mijn K ;
+Actio+Ess:%>min K ;
+Ger:%>dijn K ;
+Ger+PxSg1:%>dijnân K ;
+Ger+PxSg2:%>dijnâd K ;
+Ger+PxSg3+Err/Orth:%>dijnes K ;
+Ger+PxSg3:%>dijnis K ;


LEXICON C_PASS_SH_POHTED  ! shortens long vow in certain forms
:^CLEN C_PASS_SH_COMMON ;
+V+IV+Cond+Prs:^WG%> EVEN_COND ;
+V+IV+Pot+Prs+Sg1:^WG%>žeem K ;
+V+IV+Pot+Prs+Sg2:^WG%>žeeh K ;
+V+IV+Pot+Prs+Sg3:^WG%>š K ;
+V+IV+Pot+Prs+Du1:^WG%>žeen K ;
+V+IV+Pot+Prs+Du2:^WG^RLEN%>švettee K ;
+V+IV+Pot+Prs+Du3:^WG%>žává K ;
+V+IV+Pot+Prs+Pl1:^WG%>žep K ;
+V+IV+Pot+Prs+Pl2:^WG^RLEN%>švetteđ K ;
+V+IV+Pot+Prs+Pl3:^WG%>žeh K ;

LEXICON C_PASS_SH  ! shortens long vow in certain forms
 C_PASS_SH_COMMON ;
+V+IV+Cond+Prs:%>u EVEN_COND ;
!pp!+V+IV+Pot+Prs+Sg1:%>užeem K ;
!pp!+V+IV+Pot+Prs+Sg2:%>užeeh K ;
+V+IV+Pot+Prs+Sg3:%>š K ;
!pp!+V+IV+Pot+Prs+Du1:%>užeen K ;
!pp!+V+IV+Pot+Prs+Du2:^RLEN%>švettee K ;
!pp!+V+IV+Pot+Prs+Du3:%>užává K ;
!pp!+V+IV+Pot+Prs+Pl1:%>užep K ;
!pp!+V+IV+Pot+Prs+Pl2:^RLEN%>švetteđ K ;
!pp!+V+IV+Pot+Prs+Pl3:%>užeh K ;

LEXICON C_PASS_SH_COMMON  ! shortens long vow in certain forms
+V+IV+Inf:^VBACK%>đ K ; ! especially kalgâđ in this contlex; VBACK and VHIGH according to this verb
+V+IV+Der4+Der/InchL:%>u#škyett4 4SYLL_KYETTID_DER ; !
+V+IV+Der1+Der/st:%>ust 3_DERIVED ; ! sirduustiđ
+V+IV+PrsPrc:^RVSH%>j IJJE_PRSPRC ;
+V+IV+Der2+Der/NomAg:^RVSH%>j IJJE ;
+V+IV+Der4+Der/NomAct:^VBACK%>m FLAG_3KEPIDEM ;

+V+IV+Ind+Prs+Sg1:^VBACK%>um K ;
+V+IV+Ind+Prs+Sg2:^VBACK%>uh K ;
+V+IV+Ind+Prs+Sg3:^VHIGH^RVSH%>o K ; ! jf. C_TUHHID čálloo
+V+IV+Ind+Prs+Du1:^VHIGH%>jeen K ;
+V+IV+Ind+Prs+Du2:^VBACK%>uvettee K ; !čalluuvettee
+V+IV+Ind+Prs+Du3:^VBACK%>v K ;
+V+IV+Ind+Prs+Pl1:^VBACK%>p K ;
+V+IV+Ind+Prs+Pl2:^VBACK%>uvetteđ K ; !čalluuvetteeđ
+V+IV+Ind+Prs+Pl3:^VHIGH^RVSH%>jeh K ; !čállojeh

+V+IV+Ind+Prt+Sg1:^VHIGH^RVSH%>jim K ;
+V+IV+Ind+Prt+Sg2:^VHIGH^RVSH%>jih  K ;
+V+IV+Ind+Prt+Sg3:^VBACK%>i  K ;
+V+IV+Ind+Prt+Du1:^VBACK%>im  K ;
+V+IV+Ind+Prt+Du2:^VBACK%>id K ;
+V+IV+Ind+Prt+Du3:^VBACK%>in  K ;
+V+IV+Ind+Prt+Pl1:^VBACK%>im  K ;
+V+IV+Ind+Prt+Pl2:^VBACK%>id  K ;
+V+IV+Ind+Prt+Pl3:^VHIGH^RVSH%>jii  K ; !čállojii

+V+IV+Ind+Prs+ConNeg:^VBACK%>u K ;
+V+IV+Ind+Prt+ConNeg:^VBACK%>m K ;
+V+IV+Cond+Prs+ConNeg:^VBACK%>uččii K ;
+V+IV+Pot+Prs+ConNeg:^VBACK%>užii K ;
+V+IV+Imprt+ConNeg:^VBACK%>u K ;

+V+IV+PrfPrc:^VBACK%>m FLAG_K ; ! now changing all the others
+V+IV+PrfPrc:^RLEN%>m FLAG_K ; ! Temp. Err/Orth
+V+IV+VAbess:%>u VABESS ;
+V+IV+Actio+Nom:^VBACK%>m NOMACT ;
+V+IV+Actio+Ill:^VBACK%>umân K ;
+V+IV+Actio+Loc:^VBACK%>umist K ;
+V+IV+Actio+Com:^VBACK%>umáin K ;
+V+IV+Actio+Ess:^VBACK%>umin K ;
+V+IV+Ger:^VBACK%>udijn K ;
+V+IV+Ger+PxSg1:^VBACK%>udijnân K ;
+V+IV+Ger+PxSg2:^VBACK%>udijnâd K ;
+V+IV+Ger+PxSg3+Err/Orth:^VBACK%>udijnes K ;
+V+IV+Ger+PxSg3:^VBACK%>udijnis K ;
+V+IV+Der2+Der/NomAg:%>j IJJE ;
+V+IV+Der4+Der/NomAct:u^SVm FLAG_3HUKSIM ;
+V+IV+Ger:^VBACK%>udijn K ; ! pehhuudijn



!! ###  v stems

!! * Contracted v-stems
!!     - C_TABAHTUD (Sg3 -uvá)
!!     - C_MERIDUD (Sg3 uvvoo)


LEXICON C_TABAHTUD !!≈ * **@CODE@** Sg3 -uvá
+V: C_TABAHTUD_V ;
LEXICON C_TABAHTUD_IV
+V+IV: C_TABAHTUD_V ;
LEXICON C_TABAHTUD_TV ! XXX check
+V+TV: C_TABAHTUD_V ;


LEXICON C_TABAHTUD_V  ! Sg3 -vá
+Inf:uđ			     K ;

+Ind+Prs+Sg1:uum	     K ;
+Ind+Prs+Sg2:uuh	     K ;
+Ind+Prs+Sg3:uvá	     K ;
+Ind+Prs+Du1:uvveen     K ;
+Ind+Prs+Du2:uuvettee   K ;
+Ind+Prs+Du3:uv	  K ;  !
+Ind+Prs+Pl1:up	     K ;
+Ind+Prs+Pl2:uuvetteđ   K ;
+Ind+Prs+Pl3:uveh	     K ;

+Ind+Prt+Sg1:uvvim	     K ;
+Ind+Prt+Sg2:uvvih	     K ;
+Ind+Prt+Sg3:ui	     K ;
+Ind+Prt+Du1:uim	     K ;
+Ind+Prt+Du2:uid	     K ;
+Ind+Prt+Du3:uin	     K ;
+Ind+Prt+Pl1:uim	     K ;
+Ind+Prt+Pl2:uid	     K ;
+Ind+Prt+Pl3:uvvii	     K ;

+Cond+Prs+Sg1:uuččim	     K ;
+Cond+Prs+Sg2:uuččih	     K ;
+Cond+Prs+Sg3:uuččij	     K ;
+Cond+Prs+Du1:uuččáim	     K ;
+Cond+Prs+Du2:uuččáid	     K ;
+Cond+Prs+Du3:uuččáin	     K ;
+Cond+Prs+Pl1:uuččijm	     K ;
+Cond+Prs+Pl2:uuččijd	     K ;
+Cond+Prs+Pl3:uuččii	     K ;

+Pot+Prs+Sg1:užžeem	     K ;
+Pot+Prs+Sg2:užžeeh	     K ;
+Pot+Prs+Sg3:uš             K ;
+Pot+Prs+Du1:užžeen	     K ;
+Pot+Prs+Du2:ušvettee       K ;
+Pot+Prs+Du3:užžuv		     K ;
+Pot+Prs+Pl1:užžep		     K ;
+Pot+Prs+Pl2:ušvetteđ       K ;
+Pot+Prs+Pl3:užeh		     K ;

+Imprt+Sg1:uvvum        K ;
+Imprt+Sg2:uu           K ;
+Imprt+Sg3:uvvus        K ;
+Imprt+Du1:uvvoon       K ;
+Imprt+Du2:uvvee        K ;
+Imprt+Du3:uvvus        K ;
+Imprt+Pl1:uvvop        K ;
+Imprt+Pl2:uđ           K ;
+Imprt+Pl3:uvvus        K ;

+Ind+Prs+ConNeg:uu	     K ;
+Ind+Prt+ConNeg:um	     K ;
+Cond+Prs+ConNeg:uččii	     K ;
+Pot+Prs+ConNeg:užžii	     K ;

+PrsPrc:uvvee		     K ;
+PrfPrc:um			     FLAG_K ;
+VAbess:uuhánnáá	     K ;
+Actio+Nom:um			NOMACT ;
+Actio+Loc:uumist	     K ;
+Actio+Com:uumáin	     K ;
+Actio+Ill:uumân	     K ;
+Ger:uudijn	     K ;
+Actio+Ess:uumin	     K ;
+Der4+Der/NomAct:#u^RVm^RCe 2NJUNE ; !TEST
+VGen:un VGEN ; ! huolâstun


LEXICON C_MERIDUD !!≈ * **@CODE@** Sg3 -uvvoo
+V: MERIDUD ;
LEXICON C_MERIDUD_IV
+V+IV: MERIDUD ;
!LEXICON C_MERIDUD_V  
!+V+IV: MERIDUD ;

LEXICON MERIDUD
+Inf:uđ				 K ;

+Ind+Prs+Sg1:uum		 K ;
+Ind+Prs+Sg2:uuh		 K ;
+Ind+Prs+Sg3:uvvoo	 K ;
+Ind+Prs+Du1:uvvoon	 K ;
+Ind+Prs+Du2:uuvettee	 K ;
+Ind+Prs+Du3:uvvov	 K ;
+Ind+Prs+Pl1:up		 K ;
+Ind+Prs+Pl2:uuvetteđ	 K ;
+Ind+Prs+Pl3:uvvojeh	 K ;

+Ind+Prt+Sg1:uvvim	 K ;
+Ind+Prt+Sg2:uvvih	 K ;
+Ind+Prt+Sg3:ui		 K ;
+Ind+Prt+Du1:uim		 K ;
+Ind+Prt+Du2:uid		 K ;
+Ind+Prt+Du3:uin		 K ;
+Ind+Prt+Pl1:uim		 K ;
+Ind+Prt+Pl2:uid		 K ;
+Ind+Prt+Pl3:uvvojii	 K ;

+Cond+Prs+Sg1:uuččim		 K ;
+Cond+Prs+Sg2:uuččih		 K ;
+Cond+Prs+Sg3:uuččij		 K ;
+Cond+Prs+Du1:uuččáim		 K ;
+Cond+Prs+Du2:uuččáid		 K ;
+Cond+Prs+Du3:uuččáin		 K ;
+Cond+Prs+Pl1:uuččijm		 K ;
+Cond+Prs+Pl2:uuččijd		 K ;
+Cond+Prs+Pl3:uuččii		 K ;

+Pot+Prs+Sg1:užžeem		 K ;
+Pot+Prs+Sg2:užžeeh		 K ;
+Pot+Prs+Sg3:uš            K ;
+Pot+Prs+Du1:užžeen		 K ;
+Pot+Prs+Du2:ušvettee      K ;
+Pot+Prs+Du3:užžuv		 K ;
+Pot+Prs+Pl1:užžep		 K ;
+Pot+Prs+Pl2:ušvetteđ      K ;
+Pot+Prs+Pl3:užeh			 K ;

+Imprt+Sg1:uvvum        K ;
+Imprt+Sg2:uu           K ;
+Imprt+Sg3:uvvus        K ;
+Imprt+Du1:uvvoon       K ;
+Imprt+Du2:uvvee        K ;
+Imprt+Du3:uvvus        K ;
+Imprt+Pl1:uvvop        K ;
+Imprt+Pl2:uđ           K ;
+Imprt+Pl3:uvvus        K ;

+Ind+Prs+ConNeg:uu	 K ;
+Ind+Prt+ConNeg:um	 K ;
+Cond+Prs+ConNeg:uččii	 K ;
+Pot+Prs+ConNeg:užžii		 K ;

+PrsPrc:uvvee			 K ;
+PrfPrc:um			FLAG_K ;
+Actio+Nom:um			NOMACT ;
+Actio+Ess:uumin		 K ;
+Actio+Loc:uumist		 K ;
+Actio+Com:uumáin		 K ;
+Actio+Ill:uumân		 K ;
+Ger:uudijn		 K ;
+VAbess:uuhánnáá		 K ;
+Der4+Der/upmi:#u^RVm^RCe FLAG_2NJUNE ; !TEST
+Der4+Der/InchL:uu#škyett4 4SYLL_KYETTID_DER ; ! Inch for 3syll.




!! ## 4-syllabic

LEXICON 4SYLL_KYETTID
!! **LEXICON @LEXNAME@** 
+V: 4SYLL_KYETTID_V ;
LEXICON 4SYLL_KYETTID_IV
+V+IV: 4SYLL_KYETTID_V ;
LEXICON 4SYLL_KYETTID_TV
+V+TV: 4SYLL_KYETTID_V ;
LEXICON 4SYLL_KYETTID_DER
+V: 4SYLL_KYETTID_V ;

LEXICON 4SYLL_KYETTID_V  !
+Ind: EVEN_IND_KYETTID ;
+Pot+Prs: KYETTID_POT_ID ;
+Cond+Prs:á^WG^VHIGH%> EVEN_COND ; !
+Imprt: EVEN_IMPRT_VYEIJID ;

+Imprt+Sg2:e^WG K ;  !

+Inf:i%>đ K ;
+Ind+Prs+ConNeg:e^WG K ;
+Ind+Prt+ConNeg:á^VHIGH%>m K ;  !
+Cond+Prs+ConNeg:á^WG^VHIGH%>ččii K ;  !
+Pot+Prs+ConNeg:á^WG^VHIGH%>á K ;  !kuáđáá
+Imprt+ConNeg:i K ;

+PrfPrc:á^VHIGH%>m K ;  !
+PrfPrc+Err/Orth:â2^VHIGH%>m K ;  !
+PrsPrc:e^CLEN^RVSH%>e K ;
+VAbess:i^WG^RVSH VABESS ;
+VAbess+Err/Orth:i^WG%>hennáá K ;
+VAbess+Err/Orth:i^WG%>hinnáá K ;
+Actio+Nom:i%>m NOMACT ;
+Actio+Ill:i6^CSH%>mân K ;
+Actio+Loc:i6^CSH%>mist K ;
+Actio+Com:i6^CSH%>máin K ;
+Ger:i6^CSH%>dijn K ;
+Actio+Ess:i6^CSH%>min K ; !kyetmin
+Der4+Der/NomAct:i^RVSH%>m FLAG_3HUKSIM ;
+Der2+Der/NomAg:e^CLEN^RVSH%> C_TAHHEE ; !vuástáväldee, oovdânpyehtee ok


LEXICON EVEN_IND_KYETTID   !
+Prs+Sg1:á^WG^VHIGH%>m K ;   ! -kuáđám
+Prs+Sg2:á^WG^VHIGH%>h K ;   ! -kuáđáh
+Prs+Sg3:i6^VHIGH K ; ! -kuát  OBS           !
+Prs+Du1:e%>en K ;
+Prs+Du2:%>vettee K ;
+Prs+Du3:i%>v K ;
+Prs+Pl1:i%>p K ;   !-kyettip
+Prs+Pl2:%>vetteđ K ;
+Prs+Pl3:i^CSH%>h K ;   !-kyetih
+Prs+Pl3:e^CSH%>h K ;   !-kyeteh
+Prs+Pl3+Err/Orth:i%>h K ;

! #škyett4i^VBACK^RLEN%>m
! #škyett4i^VBACK^RLEN%>i3
! #škyett4i^VBACK%>i3
! #škyett4i^VBACK^WG%>i
! #škyett4i^WG%>i
+Prt+Sg1:i^VBACK%>m K ; !škuottim
+Prt+Sg2:i^VBACK%>h K ; !škuottih
+Prt+Sg3:i^WG%>i K ;    !škuođij
+Prt+Du1:i^WG%>im K ;   !škuođijm
+Prt+Du2:i^WG%>id K ;   !...
+Prt+Du3:i^WG%>in K ;
+Prt+Pl1:i^WG%>im K ;
+Prt+Pl2:i^WG%>id K ;
+Prt+Pl3:i^VBACK%>i3 K ; !škuottii

LEXICON KYETTID_POT_ID  !
+Sg1:e^WG%>em K ; !-kyeđeem
+Sg2:e^WG%>eh K ;
+Sg3:i^WG%>š K ;
+Du1:i^WG%>žeen K ;
+Du2:i^WG%>švettee K ;
+Du3:i^WG%>žává K ;
+Pl1:i^WG%>žep K ;
+Pl2:i^WG%>švetteđ K ;
+Pl3:i^WG%>žeh K ;


LEXICON 4_ADELISTID
!! **LEXICON @LEXNAME@** 
+V: 4_ADELISTID_V ;
LEXICON 4_ADELISTID_IV
+V+IV: 4_ADELISTID_V ;
LEXICON 4_ADELISTID_TV
+V+TV: 4_ADELISTID_V ;

LEXICON 4_ADELISTID_V   !

+Inf:%>iđ K ;
+PrsPrc:e%>e K ;
+PrfPrc:á%>m K ;
+PrfPrc+Err/Orth:â%>m K ;
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; !we need a spec 4 contlex
+Ind+Prt+ConNeg:á^VHIGH%>m K ;  !
+Cond+Prs+ConNeg:á^WG^VHIGH%>ččii K ;  !
+Pot+Prs+ConNeg:á^WG^VHIGH%>á K ;  !
+Imprt+ConNeg:i K ;
+Ind+Prs+ConNeg: K ;

+Ind+Prs+Sg1:á^WG%>m K ;
+Ind+Prs+Sg2:á^WG%>h K ;
+Ind+Prs+Sg3:    K ;
+Ind+Prs+Du1:e%>en K ;
+Ind+Prs+Du2:%>vettee K ;
+Ind+Prs+Du3:e%>v   K ;
+Ind+Prs+Pl1:e%>p K ;
+Ind+Prs+Pl2:%>vetteđ K ;
+Ind+Prs+Pl3:e%>h K ;

+Ind+Prt+Sg1:%>im K ;
+Ind+Prt+Sg2:%>ih K ;
+Ind+Prt+Sg3:%>ij K ;
+Ind+Prt+Du1:%>ijm K ;
+Ind+Prt+Du2:%>ijd K ;
+Ind+Prt+Du3:%>ijn  K ;
+Ind+Prt+Pl1:%>ijm K ;
+Ind+Prt+Pl2:%>ijd K ;
+Ind+Prt+Pl3:%>ii K ;

+Cond+Prs+Sg1:%>áččim K ;
+Cond+Prs+Sg2:%>áččih K ;
+Cond+Prs+Sg3:%>áččij K ;
+Cond+Prs+Du1:%>áččáim K ;
+Cond+Prs+Du2:%>áččáid K ;
+Cond+Prs+Du3:%>áččáin K ;
+Cond+Prs+Pl1:%>áččijm K ;
+Cond+Prs+Pl2:%>áččijd K ;
+Cond+Prs+Pl3:%>áččii K ;

+Pot+Prs+Sg1:%>eem K ;
+Pot+Prs+Sg2:%>eeh K ;
+Pot+Prs+Sg3:%>iš K ;
+Pot+Prs+Du1:%>ižeen K ;
+Pot+Prs+Du2:%>išvettee K ;
+Pot+Prs+Du3:%>ižává K ;
+Pot+Prs+Pl1:%>ižep K ;
+Pot+Prs+Pl2:%>išvetteđ K ;
+Pot+Prs+Pl3:%>ižeh K ;

+Imprt+Sg1:%>um K ;
+Imprt+Sg2: K ;
+Imprt+Sg3:%>us K ;
+Imprt+Du1:%>oon K ;
+Imprt+Du2:%>ee K ;
+Imprt+Du3:%>us K ;
+Imprt+Pl1:%>op K ;
+Imprt+Pl2:%>iđ K ;
+Imprt+Pl3:%>us K ;

+Actio+Nom:%>em NOMACT ;
+Actio+Ill:%>mân K ;
+Actio+Loc:%>mist K ;
+Actio+Com:%>máin K ;
+Actio+Ess:%>min K ;
+Der4+Der/NomAct: FLAG_3KEPIDEM ;
+Der4+Der/NomAct+Err/Orth:im FLAG_3KEPIDEM ; ! Normed
+Der2+Der/NomAg:e C_TAHHEE ;
+Der4+Der/InchL:#škyett4 4SYLL_KYETTID_DER ; !suopâlist#škuát


LEXICON 4_ITTID  ! for verbs without transitivty marking
!! **LEXICON @LEXNAME@** 
+V: 4_ITTID_V ;
LEXICON 4_ITTID_IV ! for verbs with IV marking, when they come
+V+IV: 4_ITTID_V ;
LEXICON 4_ITTID_TV ! for verbs with TV marking, when they come
+V+TV: 4_ITTID_V ;

LEXICON 4_ITTID_V   ! temporarilly, we need a yaml for this
+Inf:%>iđ K ;
+Inf+Err/Orth:%>eđ K ;
+Ind+Prs+ConNeg:  K ; ! 
+Ind+Prt+ConNeg:%>âm  K ; ! 
+Cond+Prs+ConNeg:â^WG%>ččii  K ; ! 

+PrsPrc:e%>e K ;
+PrfPrc:á%>m K ;
+PrfPrc+Err/Orth:â%>m K ;

+Actio+Ill:^CSH%>mân K ;
+Actio+Loc:^CSH%>mist K ;
+Actio+Com:^CSH%>máin K ;
+Actio+Ess:^CSH%>min K ;
+Der4+Der/NomAct:em FLAG_3LITTER ;
+Der4+Der/NomAct+Err/Orth:im FLAG_3LITTER ; ! Normed
+Der3+Der/Pass:u2^CLEN C_PASS_SH ;
+Der2+Der/NomAg:e C_TAHHEE ;

+Ind+Prs: 4_ITTID_V_PRS ;
+Ind+Prt: 4_ITTID_V_PRT ;
+Cond+Prs: 4_ITTID_V_COND ;
+Pot+Prs: 4_ITTID_V_POT ;
+Imprt: 4_ITTID_V_IMPRT ;

LEXICON 4_ITTID_V_PRS
+Sg1:á^CSH%>m K ;	
+Sg2:á^CSH%>h K ;	! almostitáh
+Sg3:^CSH%> K ;		! almostit 
+Du1:e%>en K ;		! almostitteen
+Du2:^CSH%>vettee K ;	! almostitvettee  
+Du3:e%>v K ;		! almostittev
+Pl1:e%>p K ;		! almostittep
+Pl2:^CSH%>vetteđ K ;	! almostitvetteđ  
+Pl3:e^CSH%>h K ;	! almostiteh 
+Pl3+Err/Orth:e%>h K ;	! olásutteh 
+Pl3+Err/Orth:e%>h K ;	! almostitteh (common error)

LEXICON 4_ITTID_V_PRT 
+Sg1:i%>m K ;
+Sg2:i%>h K ;
+Sg3:i^CSH%>j K ; ! 
+Du1:i^CSH%>jm K ;
+Du2:i^CSH%>jd K ;
+Du3:i^CSH%>jn K ;
+Pl1:i^CSH%>jm K ;
+Pl2:i^CSH%>jd K ;
+Pl3:i%>i3 K ;

LEXICON 4_ITTID_V_COND 
+Sg1:á^CSH%>ččim K ; 
+Sg2:á^CSH%>ččih K ;
+Sg3:^CSH%>áččij K ;
+Du1:^CSH%>áččáim K ;
+Du2:^CSH%>áččáid K ;
+Du3:^CSH%>áččáin K ;
+Pl1:^CSH%>áččijm K ;
+Pl2:^CSH%>áččijd K ;
+Pl3:á^CSH%>ččii K ;

LEXICON 4_ITTID_V_POT 
+Sg1:%>eem K ;
+Sg2:%>eeh K ;
+Sg3:i^CSH%>š K ;
+Du1:i^CSH%>žeen K ;
+Du2:i^CSH%>švettee K ;
+Du3:i^CSH%>žává K ;
+Pl1:i^CSH%>žep K ;
+Pl2:i^CSH%>švetteđ K ;
+Pl3:i^CSH%>žeh K ;

LEXICON 4_ITTID_V_IMPRT 
+Sg1:%>um K ;
+Sg2: K ;
+Sg3:%>us K ;
+Du1:%>oon K ;
+Du2:%>ee K ;
+Du3:%>us K ;
+Pl1:%>op K ;
+Pl2:%>iđ K ;
+Pl3:%>us K ;



LEXICON 4_UHCAD
!! **LEXICON @LEXNAME@** 
+V+TV: 4_UHCAD_V ;
LEXICON 4_UHCAD_TV
+V+TV: 4_UHCAD_V ;

LEXICON 4_UHCAD_V
!:u^RVhč 2SYLL_KAVNAD ;
+Inf:%>uhčâđ K ;
+Inf+Use/NG:%>âhčâđ K ;
+PrsPrc:%>uhčee K ;
+PrfPrc:%>uhčâm K ;
+Der3+Der/Pass+V+PrfPrc:%>uhčum K ; ! pusaluhčum (more forms?)
+Ind+Prt+ConNeg:%>uhčâm K ;  !
+Cond+Prs+ConNeg:uvčá%>ččii K ;  !
+Pot+Prs+ConNeg:uvžá%>á K ;  !
+Ind+Prs+ConNeg:%>uš K ;

+Ind+Prs+Sg1:%>uuvčâm K ;
+Ind+Prs+Sg2:%>uuvčah K ;
+Ind+Prs+Sg3:uš K ;
+Ind+Prs+Sg3+Use/NG:âš K ;
+Ind+Prs+Du1:%>uhčeen K ;
+Ind+Prs+Du2:%>ušvettee K ;
+Ind+Prs+Du3:%>uhčâv K ;
+Ind+Prs+Pl1:%>uhčâp K ;
+Ind+Prs+Pl2:%>ušvetteđ K ;
+Ind+Prs+Pl3:%>uhčeh K ;

+Ind+Prt+Sg1:%>uhčim K ;
+Ind+Prt+Sg2:%>uhčih K ;
+Ind+Prt+Sg3:%>uuvčâi K ;
+Ind+Prt+Du1:%>uvččáim K ;
+Ind+Prt+Du2:%>uvččáid K ;
+Ind+Prt+Du3:%>uvččáin K ;
+Ind+Prt+Pl1:%>uuvčâim K ;
+Ind+Prt+Pl2:%>uuvčâid K ;
+Ind+Prt+Pl3:%>uhčii K ;


+Inf+Err/Orth:%>âhčâđ K ;
+Ind+Prs+Sg3+Err/Orth:%>âš        K ;
+Ind+Prs+Du1+Err/Orth:%>âhčeen    K ;
+Ind+Prs+Du2+Err/Orth:%>âšvettee  K ;
+Ind+Prs+Du3+Err/Orth:%>âhčâv     K ;
+Ind+Prs+Pl1+Err/Orth:%>âhčâp     K ;
+Ind+Prs+Pl2+Err/Orth:%>âšvetteđ  K ;
+Ind+Prs+Pl3+Err/Orth:%>âhčeh     K ;
+Ind+Prt+Sg1+Err/Orth:%>âhčim     K ;
+Ind+Prt+Sg2+Err/Orth:%>âhčih 	 K ;


+Cond+Prs+Sg1:%>uvčâččim K ;
+Cond+Prs+Sg2:%>uvčâččih K ;
+Cond+Prs+Sg3:%>uvčâččij K ;
+Cond+Prs+Du1:%>uvčâččáim K ;
+Cond+Prs+Du2:%>uvčâččáid K ;
+Cond+Prs+Du3:%>uvčâččáin K ;
+Cond+Prs+Pl1:%>uvčâččijm K ;
+Cond+Prs+Pl2:%>uvčâččijd K ;
+Cond+Prs+Pl3:%>uvčâččii K ;

+Imprt+Sg2:uš K ;
+Imprt+Sg3:uš K ;

+VGen:ušâ^WG%>n VGEN ; 
+VAbess:uš%>hánnáá K ;
+Ger:uš^CSH%>tijn K ;
+Ger+PxSg1:uš^CSH%>tijnân K ;
+Ger+PxSg2:uš^CSH%>tijnâd K ;
+Ger+PxSg3:uš^CSH%>tijnis K ;
+Actio+Nom:uššâ%>m NOMACT ; 
+Actio+Ill:uš%>mân K ; 
+Actio+Loc:uš%>mist K ;
+Actio+Com:uš%>máin K ;
+Actio+Ess:uš%>min K ; 
+Der4+Der/NomAct:uš FLAG_3KIEDAVUSSAM ;
+Der4+Der/InchL:uš^WG#škyett4 4SYLL_KYETTID_DER ;
+Der3+Der/Pass:uhču2^CLEN C_PASS_SH ; 
+Der2+Der/NomAg:uš%>e C_TAHHEE ;



!pres
!s valastâlâm valastâlah valastâl 
!d valastâlleen/valastelleen valastâlvettee valastâllav 
!p valastâllâp valastâlvetteđ valastâleh/valasteleh
!pret
!s valastâllim/valastellim valastâllih/valastellih valastâlâi 
!d X X X
!p X X valastâllii/valastellii******
!
!s posâdâđâm X X
!d posâdâtteen/posâdetteen X X
!p X X posâlâddeh/posâleddeh
!
!s adelâttâđ
!d adelâtteen/adeletteen  
!---------  
!hámiin prs d1 (een), p3 (eh)
!       prt s1 (im), s2 (ih), p3 (ii)
!galgá leat sihke e ja â 3. stávvalis
!--------

LEXICON 4_DATTAD_IV
+V+IV:  4_DATTADD_V ;

LEXICON 4_DATTAD_TV
+V+TV:  4_DATTADD_V ;

LEXICON 4_DATTAD
+V:  4_DATTADD_V ;


LEXICON 4_DATTADD_V
:dâtt4 4_KAVNATTATTAD_V ;
+Err/Orth:đâtt4 4_KAVNATTATTAD_V ;



LEXICON 4_KAVNATTATTAD
+V: 4_KAVNATTATTAD_V ;
LEXICON 4_KAVNATTATTAD_IV
+V+IV: 4_KAVNATTATTAD_V ;
LEXICON 4_KAVNATTATTAD_TV
+V+TV: 4_KAVNATTATTAD_V ;

LEXICON 4_KAVNATTATTAD_V
+Inf:%>âđ K ;
+Ind+Prs+ConNeg:  K ; ! kavnâttât
+Ind+Prt+ConNeg:%>âm  K ; ! kavnâttâttâm
+Cond+Prs+ConNeg:â^WG%>ččii  K ; ! kavnâttâđâččii 

+PrfPrc:%>âm K ; ! kavnâttâttâm
+PrsPrc:%>ee K ; !kavnâttâttee

+Ind+Prs+Sg1:â^WG%>m K ;
+Ind+Prs+Sg2:â^WG%>h K ;
+Ind+Prs+Sg3:    K ;
+Ind+Prs+Du1:e%>en K ; ! â:e
+Ind+Prs+Du1+Use/NG:e^IUML%>en K ; ! â:e %^IUML
+Ind+Prs+Du2:%>vettee K ;
+Ind+Prs+Du3:%>âv   K ;
+Ind+Prs+Pl1:%>âp K ;
+Ind+Prs+Pl2:%>vetteđ K ;
+Ind+Prs+Pl3:e^CSH%>h K ; ! â:e
+Ind+Prs+Pl3+Err/Orth:e%>h K ; ! kieđâvuššeh
!+Ind+Prs+Pl3+Use/NG:e^CSH%>h K ; ! â:e
+Ind+Prs+Pl3+Use/NG:e^CSH^IUML%>h K ; ! â:e
!+Ind+Prs+Pl3+Use/NG:e^CSH^SVLOW%>h K ; ! â:e

+Ind+Prt+Sg1:i%>m K ; ! â:e
+Ind+Prt+Sg2:i%>h K ; ! â:e
+Ind+Prt+Sg1+Use/NG:i^IUML%>m K ; ! â:e
+Ind+Prt+Sg2+Use/NG:i^IUML%>h K ; ! â:e
+Ind+Prt+Sg3:â^WG%>i K ;
+Ind+Prt+Du1:á^WG%>im K ;
+Ind+Prt+Du2:á^WG%>id K ;
+Ind+Prt+Du3:á^WG%>in  K ;
+Ind+Prt+Pl1:â^WG%>im K ;
+Ind+Prt+Pl2:â^WG%>id K ;
+Ind+Prt+Pl3:i%>i3 K ; ! â:e
+Ind+Prt+Pl3+Use/NG:i^IUML%>i3 K ; ! â:e
 
+Cond+Prs+Sg1:â^WG%>ččim K ;
+Cond+Prs+Sg2:â^WG%>ččih K ;
+Cond+Prs+Sg3:â^WG%>ččij K ;
+Cond+Prs+Du1:â^WG%>ččáim K ;
+Cond+Prs+Du2:â^WG%>ččáid K ;
+Cond+Prs+Du3:â^WG%>ččáin K ;
+Cond+Prs+Pl1:â^WG%>ččijm K ;
+Cond+Prs+Pl2:â^WG%>ččijd K ;
+Cond+Prs+Pl3:â^WG%>ččii K ;

! No pot for these

+Imprt+Sg2: K ;
+Imprt+Sg3:i6^WG%>os K ;
+Imprt+Du1:%>oon K ;
+Imprt+Du2:%>ee K ;
+Imprt+Du3:%>os K ;
+Imprt+Pl1:%>op K ;
+Imprt+Pl2:%>âđ K ;
+Imprt+Pl3:%>os K ;

+VGen:â^WG%>n VGEN ; ! imâštâlân
+VAbess:%>hánnáá K ;
+Ger:i6^CSH%>dijn K ; !savâstâldijn
+Ger+PxSg1:i6^CSH%>dijnân K ;
+Ger+PxSg2:i6^CSH%>dijnâd K ;
+Ger+PxSg3:i6^CSH%>dijnis K ; ! savâstâldijnis
+Actio+Nom:â%>m NOMACT ; !kavnâttâttâm
+Actio+Ill:%>mân K ; !kavnâttâtmân
+Actio+Loc:%>mist K ; !kavnâttâtmin
+Actio+Com:%>máin K ; !kavnâttâtmáin
+Actio+Ess:%>min K ; !kavnâttâtmin
+Der4+Der/NomAct: FLAG_3KIEDAVUSSAM ;
+Der4+Der/InchL:i6^WG#škyett4 4SYLL_KYETTID_DER ; !hárjuttâl#škyettiđ
+Der3+Der/Pass:u2^CLEN C_PASS_SH ; !miäruštâllui, miäruštâllum, miäruštâlloo,
+Der2+Der/NomAg:%>e C_TAHHEE ;


!! # Other lexica
!! Here come the case variation for VAbess, and flag for VGen, they are invariant above and thus collected here.

!! ## Case lexica

LEXICON VABESS !!≈ * **@CODE@** to handle Abessive variation, hánnáá, hennáá, hinnáá.
         :%>hánnáá K ;
+Err/Orth:%>hennáá K ;
+Err/Orth:%>hinnáá K ;
LEXICON VGEN  !!≈ * **@CODE@**  flag for VGen
@R.Vgen.add@ K ;

!! ## Derivation lexica
!! These point to different nominal paradigms.

LEXICON DER_MAS  !!≈ * **@CODE@** 
+Der4+Der/mas:%>mâšš 4KUNAGAS ;
+Der4+Der/mas+Use/NG:%>mušš 4KUNAGAS ;
LEXICON IJJE  !!≈ * **@CODE@** 
+Use/NG:ei4je C_TAHHEE ;
:ijje C_TAHHEE ;
LEXICON IJJE_PRSPRC  !!≈ * **@CODE@** 
+Use/NG:ei4jee K ;
:ijjee K ;
LEXICON NOMACT  !!≈ * **@CODE@**  for -náál suffixation.
+Cmp#náál:# NAAL ; 
 K ;


!! ## Flag section
!    ------------

!! The lexica in this section add the *@C.NeedNoun@* flag, thereby allowing them to 
!! become the second part of N + (V > N) compounds.

LEXICON FLAG_3HUKSIM  !!≈ **@CODE@** should not be disallowed by ENDLEX @D.NeedNoun.ON@
@C.NeedNoun@ 3HUKSIM ;

LEXICON FLAG_3KIEDAVUSSAM !!≈ **@CODE@** should not be disallowed by ENDLEX @D.NeedNoun.ON@
@C.NeedNoun@ 3KIEDAVUSSAM ;

LEXICON FLAG_CTAHHEE !!≈ **@CODE@** should not be disallowed by ENDLEX @D.NeedNoun.ON@
@C.NeedNoun@ K ;

LEXICON FLAG_3AARRAN != **@CODE@** should not be disallowed by ENDLEX @D.NeedNoun.ON@
@C.NeedNoun@ 3AARRAN ;


LEXICON FLAG_3LITTER != **@CODE@** should not be disallowed by ENDLEX @D.NeedNoun.ON@
@C.NeedNoun@ 3LITTER ;
!:náál ADV ; !what kind of tag?

LEXICON FLAG_3KEPIDEM != **@CODE@** should not be disallowed by ENDLEX @D.NeedNoun.ON@
@C.NeedNoun@ 3KEPIDEM ;

LEXICON FLAG_3EEMEED != **@CODE@** should not be disallowed by ENDLEX @D.NeedNoun.ON@
@C.NeedNoun@ 3EEMEED ;

LEXICON FLAG_2NJUNE != **@CODE@** should not be disallowed by ENDLEX @D.NeedNoun.ON@
@C.NeedNoun@ 2NJUNE ;

LEXICON FLAG_K !!≈ **@CODE@** should not be disallowed by ENDLEX @D.NeedNoun.ON@
@C.NeedNoun@ K ;






! Obsolete??

!LEXICON 4C_ISTID  temporarilly, we need a yaml for this
!
!+V: VINF_SHORT_VOW ;
!+V:%>i3 VINF_LONG_VOW ;
!+V+Cond+Prs:%>i EVEN_COND ;
!
!+V+Ind+Prs+Sg1:%>i3m K ;
!+V+Ind+Prs+Sg2:%>ih K ;
!+V+Ind+Prs+Sg3:%>e K ;
!+V+Ind+Prs+Du1:%>jeen K ;
!+V+Ind+Prs+Du2:%>ivettee K ;
!+V+Ind+Prs+Du3:%>v K ;
!+V+Ind+Prs+Pl1:%>p K ;
!+V+Ind+Prs+Pl2:%>ivetteđ K ;
!+V+Ind+Prs+Pl3:%>jeh K ;
!
!+V+Ind+Prt+Sg1:%>jim K ;
!+V+Ind+Prt+Sg2:%>jih  K ;
!+V+Ind+Prt+Sg3:%>j  K ;
!+V+Ind+Prt+Du1:%>jm  K ;
!+V+Ind+Prt+Du2:%>jd K ;
!+V+Ind+Prt+Du3:%>jn  K ;
!+V+Ind+Prt+Pl1:%>jm  K ;
!+V+Ind+Prt+Pl2:%>jd  K ;
!+V+Ind+Prt+Pl3:%>jii  K ;
!
!+V+Pot+Prs+Sg1:%>ižeem K ;
!+V+Pot+Prs+Sg2:%>ižeeh K ;
!+V+Pot+Prs+Sg3:%>š K ;
!+V+Pot+Prs+Du1:%>ižeen K ;
!+V+Pot+Prs+Du2:%>švettee K ;
!+V+Pot+Prs+Du3:%>ižává K ;
!+V+Pot+Prs+Pl1:%>ižep K ;
!+V+Pot+Prs+Pl2:%>švetteđ K ;
!+V+Pot+Prs+Pl3:%>ižeh K ;
!
!+V+Imprt+Sg1:%>jum K ;
!+V+Imprt+Sg2:%>i3 K ; ! to avoid -ij
!+V+Imprt+Sg3:%>jus K ;
!+V+Imprt+Du1:%>joon K ;
!+V+Imprt+Du2:%>jee K ;
!+V+Imprt+Du3:%>jus K ;
!+V+Imprt+Pl1:%>jop K ;
!+V+Imprt+Pl2:%>đ K ;
!+V+Imprt+Pl3:%>jus K ;





!DERL! Der/l lexicons

!DERLTable for 3_DERIVED contlexes.
!DERLThe columns give contlexes, the rows give key forms, and the cells show the triggers.

!DERL|| Form || L             || L_VERSION2 || L_VERSION3 || L_CLEN         || VBACK || RLEN
! | --- | --- | --- | --- | --- | --- | --- 
!DERL| Inf    | CSH VBACK RVSH | RVSH        | CSH RVSH    | CSH  VBACK      | VBACK  |  RLEN
!DERL| Sg3    | VBACK RLEN     | CLEN RVSH   | CLEN RVSH   | CLEN VBACK      | VBACK  |  -
!DERL| ConNeg | VBACK          | -           | VBACK       | CLEN VBACK RLEN | VBACK  |  RLEN

!DERL LEXICON 3_DERIVED_L  !!≈ * **@CODE@**
!DERL +V+Ind+Prt+Du1+Err/Orth:^VBACK%>ááim K ; ! these separate, perhaps skip
!DERL +V+Ind+Prt+Du2+Err/Orth:^VBACK%>ááid K ; ! only á ?
!DERL +V+Ind+Prt+Du3+Err/Orth:^VBACK%>ááin  K ;
!DERL 
!DERL +V+Inf:^CSH^VBACK^RVSH%>iđ K ; ! moonnâđ > monâliđ, vaattâđ > vatâliđ, aassâđ > asâliđ
!DERL 
!DERL +V+Ind+Prs+Sg1:^CSH^VBACK^RVSH%>âm K ; ! csh for vatâlâm
!DERL +V+Ind+Prs+Sg2:^CSH^VBACK^RVSH%>ah K ;
!DERL !+V+Ind+Prs+Sg3:^CLEN^VBACK^RLEN K ;  ! vaattâl
!DERL +V+Ind+Prs+Sg3:^VBACK^RLEN K ;  ! vaattâl
!DERL +V+Ind+Prs+Du1:^CSH^VBACK^RVSH%>een K ;
!DERL +V+Ind+Prs+Du2:^CLEN^VBACK^RLEN^SLEN%>vettee K ;
!DERL +V+Ind+Prs+Du3:^CSH^VBACK^RVSH%>ává   K ;
!DERL +V+Ind+Prs+Pl1:^CSH^VBACK^RVSH%>ep K ;
!DERL +V+Ind+Prs+Pl2:^CLEN^VBACK^RLEN^SLEN%>vetteđ K ;
!DERL +V+Ind+Prs+Pl3:^CSH^VBACK^RVSH%>eh K ;
!DERL 
!DERL +V+Ind+Prt+Sg1:^CSH^VBACK^RVSH%>im K ;
!DERL +V+Ind+Prt+Sg2:^CSH^VBACK^RVSH%>ih K ;
!DERL +V+Ind+Prt+Sg3:^CSH^VBACK^RVSH%>ij    K ;
!DERL +V+Ind+Prt+Du1:^CSH^VBACK^RVSH%>áim K ;
!DERL +V+Ind+Prt+Du2:^CSH^VBACK^RVSH%>áid K ;
!DERL +V+Ind+Prt+Du3:^CSH^VBACK^RVSH%>áin  K ;
!DERL +V+Ind+Prt+Pl1:^CSH^VBACK^RVSH%>ijm K ;
!DERL +V+Ind+Prt+Pl2:^CSH^VBACK^RVSH%>ijd K ;
!DERL +V+Ind+Prt+Pl3:^CSH^VBACK^RVSH%>ii K ;
!DERL 
!DERL +V+Cond+Prs+Sg1:^CSH^VBACK^RVSH%>iččim K ;
!DERL +V+Cond+Prs+Sg2:^CSH^VBACK^RVSH%>iččih K ;
!DERL +V+Cond+Prs+Sg3:^CSH^VBACK^RVSH%>ičij K ;
!DERL +V+Cond+Prs+Du1:^CSH^VBACK^RVSH%>iččijm K ;
!DERL +V+Cond+Prs+Du1+Err/Orth:^CSH^VBACK^RVSH%>iččiijm K ;
!DERL +V+Cond+Prs+Du2:^CSH^VBACK^RVSH%>iččijd K ;
!DERL +V+Cond+Prs+Du2+Err/Orth:^CSH^VBACK^RVSH%>iččiijd K ;
!DERL +V+Cond+Prs+Du3:^CSH^VBACK^RVSH%>iččijn K ;
!DERL +V+Cond+Prs+Du3+Err/Orth:^CSH^VBACK^RVSH%>iččiijn K ;
!DERL +V+Cond+Prs+Pl1:^CSH^VBACK^RVSH%>iččijm K ;
!DERL +V+Cond+Prs+Pl2:^CSH^VBACK^RVSH%>iččijd K ;
!DERL +V+Cond+Prs+Pl3:^CSH^VBACK^RVSH%>iččii K ;
!DERL 
!DERL +V+Pot+Prs+Sg1:^VBACK%>ižžeem K ;
!DERL +V+Pot+Prs+Sg2:^VBACK%>ižžeeh K ;
!DERL +V+Pot+Prs+Sg3:^VBACK%>iš K ;
!DERL +V+Pot+Prs+Du1:^VBACK%>ižžeen K ;
!DERL +V+Pot+Prs+Du2:^VBACK%>išvettee K ;
!DERL +V+Pot+Prs+Du3:^VBACK%>ižává K ;
!DERL +V+Pot+Prs+Pl1:^VBACK%>ižžep K ;
!DERL +V+Pot+Prs+Pl2:^VBACK%>išvetteđ K ;
!DERL +V+Pot+Prs+Pl3:^VBACK%>ižeh K ;
!DERL 
!DERL +V+Imprt+Sg1:^VBACK%>um K ;
!DERL +V+Imprt+Sg2:^VBACK^RLEN^SLEN K ;
!DERL +V+Imprt+Sg3:^VBACK%>us K ;
!DERL +V+Imprt+Du1:^VBACK%>oon K ;
!DERL +V+Imprt+Du2:^VBACK%>ee K ;
!DERL +V+Imprt+Du3:^VBACK%>us K ;
!DERL +V+Imprt+Pl1:^VBACK%>op K ;
!DERL +V+Imprt+Pl2:^VBACK%>iđ K ;
!DERL +V+Imprt+Pl3:^VBACK%>us K ;
!DERL 
!DERL +V+PrsPrc:^VBACK%>ijjee K ;
!DERL +V+PrsPrc+Use/NG:^VBACK%>eijee K ;
!DERL +V+PrfPrc:^VBACK%>âm K ;
!DERL 
!DERL +V+Ind+Prs+ConNeg:^VBACK^RLEN K ; ! ^SLEN
!DERL +V+Ind+Prt+ConNeg:^VBACK%>âm K ;
!DERL +V+Cond+Prs+ConNeg:^VBACK%>iččii K ;
!DERL +V+Pot+Prs+ConNeg:^VBACK%>ižžii K ;
!DERL +V+Imprt+ConNeg: K ;
!DERL 
!DERL +V+VAbess:^VBACK^RLEN^SLEN VABESS ;
!DERL +V+VAbess+Err/Orth:^VBACK^RLEN^SLEN%>hinnáá K ;
!DERL +V+VAbess+Err/Orth:^VBACK^RLEN^SLEN%>hennáá K ;
!DERL 
!DERL +V+Actio+Nom:^VBACK%>em K ;
!DERL +V+Actio+Ill:^VBACK^RLEN^SLEN%>mân K ;
!DERL +V+Actio+Ess:^VBACK^RLEN^SLEN%>min K ;
!DERL +V+Actio+Loc:^VBACK^RLEN^SLEN%>mist K ;
!DERL +V+Actio+Com:^VBACK^RLEN^SLEN%>máin K ;
!DERL +V+Ger:^VBACK^RLEN^SLEN%>dijn K ;
!DERL +V+Ger+PxSg1:^VBACK^RLEN^SLEN%>dijnân K ;
!DERL +V+Ger+PxSg2:^VBACK^RLEN^SLEN%>dijnâd K ;
!DERL +V+Ger+PxSg3:^VBACK^RLEN^SLEN%>dijnis K ;
!DERL +V+Der4+Der/NomAct:^VBACK FLAG_3KEPIDEM ;
!DERL +V+Der2+Der/NomAg:^VBACKei4je C_TAHHEE ;
!DERL +V+Der4+Der/InchL:i6^WG^VBACK#škyett4 4SYLL_KYETTID_DER ; !joođeet#škuođij hmm
!DERL +V+Der1+Der/st:^VBACKist 4_ADELISTID ; !
!DERL +V+Der1+Der/Caus:^VBACKitt 4_ADELISTID ; !
!DERL +V+Der3+Der/Pass:^VBACK C_MERIDUD ;
!DERL 
!DERL 
!DERL LEXICON 3_DERIVED_L_VERSION2  !!≈ * **@CODE@**
!DERL +V+Inf:^RVSH%>iđ K ; !
!DERL 
!DERL +V+Ind+Prs+Sg1:^RVSH%>âm K ; !  toideđ > toideliđ
!DERL +V+Ind+Prs+Sg2:^RVSH%>ah K ;
!DERL +V+Ind+Prs+Sg3:^CLEN^RVSH K ;  ! spellâl
!DERL +V+Ind+Prs+Du1:^RVSH%>een K ;
!DERL +V+Ind+Prs+Du2:^CLEN^RVSH%>vettee K ;
!DERL +V+Ind+Prs+Du3:^RVSH%>ává   K ;
!DERL +V+Ind+Prs+Pl1:^RVSH%>ep K ;
!DERL +V+Ind+Prs+Pl2:^CLEN^SLEN%>vetteđ K ;
!DERL +V+Ind+Prs+Pl3:^RVSH%>eh K ;
!DERL 
!DERL +V+Ind+Prt+Sg1:^RVSH%>im K ;
!DERL +V+Ind+Prt+Sg2:^RVSH%>ih K ;
!DERL +V+Ind+Prt+Sg3:^RVSH%>ij    K ;
!DERL +V+Ind+Prt+Du1:^RVSH%>áim K ;
!DERL +V+Ind+Prt+Du2:^RVSH%>áid K ;
!DERL +V+Ind+Prt+Du3:^RVSH%>áin  K ;
!DERL +V+Ind+Prt+Pl1:^RVSH%>ijm K ;
!DERL +V+Ind+Prt+Pl2:^RVSH%>ijd K ;
!DERL +V+Ind+Prt+Pl3:^RVSH%>ii K ;
!DERL 
!DERL +V+Cond+Prs+Sg1:^RVSH%>iččim K ;
!DERL +V+Cond+Prs+Sg2:^RVSH%>iččih K ;
!DERL +V+Cond+Prs+Sg3:^RVSH%>ičij K ;
!DERL +V+Cond+Prs+Du1:^RVSH%>iččijm K ;
!DERL +V+Cond+Prs+Du1+Err/Orth:^RVSH%>iččiijm K ;
!DERL +V+Cond+Prs+Du2:^RVSH%>iččijd K ;
!DERL +V+Cond+Prs+Du2+Err/Orth:^RVSH%>iččiijd K ;
!DERL +V+Cond+Prs+Du3:^RVSH%>iččijn K ;
!DERL +V+Cond+Prs+Du3+Err/Orth:^RVSH%>iččiijn K ;
!DERL +V+Cond+Prs+Pl1:^RVSH%>iččijm K ;
!DERL +V+Cond+Prs+Pl2:^RVSH%>iččijd K ;
!DERL +V+Cond+Prs+Pl3:^RVSH%>iččii K ;
!DERL 
!DERL ! addition starts here
!DERL 
!DERL +V+PrsPrc:^VBACK%>ijjee K ;
!DERL +V+PrsPrc+Use/NG:^VBACK%>eijee K ;
!DERL +V+PrfPrc:^VBACK%>âm K ;
!DERL 
!DERL !+V+Ind+Prs+ConNeg:^VBACK^RLEN K ; ! ^SLEN
!DERL +V+Ind+Prs+ConNeg:^CLEN^RVSH K ; ! if Imprt ConNeg works
!DERL +V+Ind+Prt+ConNeg:^VBACK%>âm K ;
!DERL +V+Cond+Prs+ConNeg:^VBACK%>iččii K ;
!DERL +V+Pot+Prs+ConNeg:^VBACK%>ižžii K ;
!DERL +V+Imprt+ConNeg:^CLEN^RVSH K ;
!DERL 
!DERL +V+VAbess:^VBACK^RLEN^SLEN VABESS ;
!DERL +V+VAbess+Err/Orth:^VBACK^RLEN^SLEN%>hinnáá K ;
!DERL +V+VAbess+Err/Orth:^VBACK^RLEN^SLEN%>hennáá K ;
!DERL 
!DERL +V+Actio+Nom:^VBACK%>em K ;
!DERL +V+Actio+Ill:^VBACK^RLEN^SLEN%>mân K ;
!DERL +V+Actio+Ess:^VBACK^RLEN^SLEN%>min K ;
!DERL +V+Actio+Loc:^VBACK^RLEN^SLEN%>mist K ;
!DERL +V+Actio+Com:^VBACK^RLEN^SLEN%>máin K ;
!DERL +V+Ger:^VBACK^RLEN^SLEN%>dijn K ;
!DERL +V+Ger+PxSg1:^VBACK^RLEN^SLEN%>dijnân K ;
!DERL +V+Ger+PxSg2:^VBACK^RLEN^SLEN%>dijnâd K ;
!DERL +V+Ger+PxSg3:^VBACK^RLEN^SLEN%>dijnis K ;
!DERL +V+Der4+Der/NomAct:^VBACK FLAG_3KEPIDEM ;
!DERL +V+Der2+Der/NomAg:^VBACKei4je C_TAHHEE ;
!DERL +V+Der4+Der/InchL:i6^WG^VBACK#škyett4 4SYLL_KYETTID_DER ; !joođeet#škuođij hmm
!DERL +V+Der1+Der/st:^VBACKist 4_ADELISTID ; !
!DERL +V+Der1+Der/Caus:^VBACKitt 4_ADELISTID ; !
!DERL +V+Der3+Der/Pass:^VBACK C_MERIDUD ;

! addition stops here

!LEXICON 3_DERIVED_L_VERSION3   !!≈ * **@CODE@** not used, check
!+V+Inf:^CSH^RVSH%>iđ K ; !
!
!+V+Ind+Prs+Sg1:^CSH^RVSH%>âm K ; ! csh for vatâlâm
!+V+Ind+Prs+Sg2:^CSH^RVSH%>ah K ;
!+V+Ind+Prs+Sg3:^CLEN^RVSH K ;  ! spellâl	viššâl
!+V+Ind+Prs+Du1:^CSH^RVSH%>een K ;
!+V+Ind+Prs+Du2:^CLEN^RVSH%>vettee K ;
!+V+Ind+Prs+Du3:^CSH^RVSH%>ává   K ;
!+V+Ind+Prs+Pl1:^CSH^RVSH%>ep K ;
!+V+Ind+Prs+Pl2:^CLEN^SLEN%>vetteđ K ;
!+V+Ind+Prs+Pl3:^CSH^RVSH%>eh K ;
!
!+V+Ind+Prt+Sg1:^CSH^RVSH%>im K ;
!+V+Ind+Prt+Sg2:^CSH^RVSH%>ih K ;
!+V+Ind+Prt+Sg3:^CSH^RVSH%>ij    K ;
!+V+Ind+Prt+Du1:^CSH^RVSH%>áim K ;
!+V+Ind+Prt+Du2:^CSH^RVSH%>áid K ;
!+V+Ind+Prt+Du3:^CSH^RVSH%>áin  K ;
!+V+Ind+Prt+Pl1:^CSH^RVSH%>ijm K ;
!+V+Ind+Prt+Pl2:^CSH^RVSH%>ijd K ;
!+V+Ind+Prt+Pl3:^CSH^RVSH%>ii K ;
!
!+V+Cond+Prs+Sg1:^CSH^RVSH%>iččim K ;
!+V+Cond+Prs+Sg2:^CSH^RVSH%>iččih K ;
!+V+Cond+Prs+Sg3:^CSH^RVSH%>ičij K ;
!+V+Cond+Prs+Du1:^CSH^RVSH%>iččijm K ;
!+V+Cond+Prs+Du1+Err/Orth:^CSH^RVSH%>iččiijm K ;
!+V+Cond+Prs+Du2:^CSH^RVSH%>iččijd K ;
!+V+Cond+Prs+Du2+Err/Orth:^CSH^RVSH%>iččiijd K ;
!+V+Cond+Prs+Du3:^CSH^RVSH%>iččijn K ;
!+V+Cond+Prs+Du3+Err/Orth:^CSH^RVSH%>iččiijn K ;
!+V+Cond+Prs+Pl1:^CSH^RVSH%>iččijm K ;
!+V+Cond+Prs+Pl2:^CSH^RVSH%>iččijd K ;
!+V+Cond+Prs+Pl3:^CSH^RVSH%>iččii K ;
!
!+V+Pot+Prs+Sg1:^VBACK%>ižžeem K ;
!+V+Pot+Prs+Sg2:^VBACK%>ižžeeh K ;
!+V+Pot+Prs+Sg3:^VBACK%>iš K ;
!+V+Pot+Prs+Du1:^VBACK%>ižžeen K ;
!+V+Pot+Prs+Du2:^VBACK%>išvettee K ;
!+V+Pot+Prs+Du3:^VBACK%>ižává K ;
!+V+Pot+Prs+Pl1:^VBACK%>ižžep K ;
!+V+Pot+Prs+Pl2:^VBACK%>išvetteđ K ;
!+V+Pot+Prs+Pl3:^VBACK%>ižeh K ;
!
!+V+Imprt+Sg1:^VBACK%>um K ;
!+V+Imprt+Sg2:^VBACK^RLEN^SLEN K ;
!+V+Imprt+Sg3:^VBACK%>us K ;
!+V+Imprt+Du1:^VBACK%>oon K ;
!+V+Imprt+Du2:^VBACK%>ee K ;
!+V+Imprt+Du3:^VBACK%>us K ;
!+V+Imprt+Pl1:^VBACK%>op K ;
!+V+Imprt+Pl2:^VBACK%>iđ K ;
!+V+Imprt+Pl3:^VBACK%>us K ;
!
!+V+PrsPrc:^VBACK%>ijjee K ;
!+V+PrsPrc+Use/NG:^VBACK%>eijee K ;
!+V+PrfPrc:^VBACK%>âm K ;
!
!+V+Ind+Prs+ConNeg:^VBACK K ;
!+V+Ind+Prt+ConNeg:^VBACK%>âm K ;
!+V+Cond+Prs+ConNeg:^VBACK%>iččii K ;
!+V+Pot+Prs+ConNeg:^VBACK%>ižžii K ;
!+V+Imprt+ConNeg: K ;
!
!+V+VAbess:^VBACK^RLEN^SLEN VABESS ;
!+V+VAbess+Err/Orth:^VBACK^RLEN^SLEN%>hinnáá K ;
!+V+VAbess+Err/Orth:^VBACK^RLEN^SLEN%>hennáá K ;
!
!+V+Actio+Nom:^VBACK%>em K ;
!+V+Actio+Ill:^VBACK^RLEN^SLEN%>mân K ;
!+V+Actio+Ess:^VBACK^RLEN^SLEN%>min K ;
!+V+Actio+Loc:^VBACK^RLEN^SLEN%>mist K ;
!+V+Actio+Com:^VBACK^RLEN^SLEN%>máin K ;
!+V+Ger:^VBACK^RLEN^SLEN%>dijn K ;
!+V+Ger+PxSg1:^VBACK^RLEN^SLEN%>dijnân K ;
!+V+Ger+PxSg2:^VBACK^RLEN^SLEN%>dijnâd K ;
!+V+Ger+PxSg3:^VBACK^RLEN^SLEN%>dijnis K ;
!+V+Der4+Der/NomAct:^VBACK FLAG_3KEPIDEM ;
!+V+Der2+Der/NomAg:^VBACKei4je C_TAHHEE ;
!+V+Der4+Der/InchL:i6^WG^VBACK#škyett4 4SYLL_KYETTID_DER ; !joođeet#škuođij hmm
!+V+Der1+Der/st:^VBACKist 4_ADELISTID ; !
!+V+Der1+Der/Caus:^VBACKitt 4_ADELISTID ; !
!+V+Der3+Der/Pass:^VBACK C_MERIDUD ;


!DERLLEXICON 3_DERIVED_L_CLEN   !!≈ * **@CODE@**
!DERL+V+Ind+Prt+Du1+Err/Orth:^VBACK%>ááim K ; ! these separate, perhaps skip
!DERL+V+Ind+Prt+Du2+Err/Orth:^VBACK%>ááid K ; ! only á ?
!DERL+V+Ind+Prt+Du3+Err/Orth:^VBACK%>ááin  K ;
!DERL
!DERL+V+Inf:^CSH^VBACK%>iđ K ; ! jutâliđ
!DERL
!DERL+V+Ind+Prs+Sg1:^VBACK^RVSH%>âm K ; !
!DERL+V+Ind+Prs+Sg2:^VBACK^RVSH%>ah K ;
!DERL!+V+Ind+Prs+Sg3:^CLEN^VBACK^RLEN K ; !
!DERL+V+Ind+Prs+Sg3:^CLEN^VBACK K ; ! spellâl
!DERL+V+Ind+Prs+Du1:^VBACK^RVSH%>een K ;
!DERL+V+Ind+Prs+Du2:^CLEN^VBACK^SLEN%>vettee K ;
!DERL+V+Ind+Prs+Du3:^VBACK^RVSH%>ává   K ;
!DERL+V+Ind+Prs+Pl1:^VBACK^RVSH%>ep K ;
!DERL+V+Ind+Prs+Pl2:^CLEN^VBACK^SLEN%>vetteđ K ;
!DERL+V+Ind+Prs+Pl3:^VBACK^RVSH%>eh K ;
!DERL
!DERL+V+Ind+Prt+Sg1:^VBACK^RVSH%>im K ;
!DERL+V+Ind+Prt+Sg2:^VBACK^RVSH%>ih K ;
!DERL+V+Ind+Prt+Sg3:^VBACK^RVSH%>ij    K ;
!DERL+V+Ind+Prt+Du1:^VBACK^RVSH%>áim K ;
!DERL+V+Ind+Prt+Du2:^VBACK^RVSH%>áid K ;
!DERL+V+Ind+Prt+Du3:^VBACK^RVSH%>áin  K ;
!DERL+V+Ind+Prt+Pl1:^VBACK^RVSH%>ijm K ;
!DERL+V+Ind+Prt+Pl2:^VBACK^RVSH%>ijd K ;
!DERL+V+Ind+Prt+Pl3:^VBACK^RVSH%>ii K ;
!DERL
!DERL+V+Cond+Prs+Sg1:^CLEN^VBACK%>iččim K ;
!DERL+V+Cond+Prs+Sg2:^CLEN^VBACK%>iččih K ;
!DERL+V+Cond+Prs+Sg3:^CLEN^VBACK%>ičij K ;
!DERL+V+Cond+Prs+Du1:^CLEN^VBACK%>iččijm K ;
!DERL+V+Cond+Prs+Du1+Err/Orth:^CLEN^VBACK%>iččiijm K ;
!DERL+V+Cond+Prs+Du2:^CLEN^VBACK%>iččijd K ;
!DERL+V+Cond+Prs+Du2+Err/Orth:^CLEN^VBACK%>iččiijd K ;
!DERL+V+Cond+Prs+Du3:^CLEN^VBACK%>iččijn K ;
!DERL+V+Cond+Prs+Du3+Err/Orth:^CLEN^VBACK%>iččiijn K ;
!DERL+V+Cond+Prs+Pl1:^CLEN^VBACK%>iččijm K ;
!DERL+V+Cond+Prs+Pl2:^CLEN^VBACK%>iččijd K ;
!DERL+V+Cond+Prs+Pl3:^CLEN^VBACK%>iččii K ;
!DERL
!DERL+V+Pot+Prs+Sg1:^CLEN^VBACK%>ižžeem K ;
!DERL+V+Pot+Prs+Sg2:^CLEN^VBACK%>ižžeeh K ;
!DERL+V+Pot+Prs+Sg3:^CLEN^VBACK%>iš K ;
!DERL+V+Pot+Prs+Du1:^CLEN^VBACK%>ižžeen K ;
!DERL+V+Pot+Prs+Du2:^CLEN^VBACK%>išvettee K ;
!DERL+V+Pot+Prs+Du3:^CLEN^VBACK%>ižává K ;
!DERL+V+Pot+Prs+Pl1:^CLEN^VBACK%>ižžep K ;
!DERL+V+Pot+Prs+Pl2:^CLEN^VBACK%>išvetteđ K ;
!DERL+V+Pot+Prs+Pl3:^CLEN^VBACK%>ižeh K ;
!DERL
!DERL+V+Imprt+Sg1:^CLEN^VBACK%>um K ;
!DERL+V+Imprt+Sg2:^CLEN^VBACK^RLEN^SLEN K ;
!DERL+V+Imprt+Sg3:^CLEN^VBACK%>us K ;
!DERL+V+Imprt+Du1:^CLEN^VBACK%>oon K ;
!DERL+V+Imprt+Du2:^CLEN^VBACK%>ee K ;
!DERL+V+Imprt+Du3:^CLEN^VBACK%>us K ;
!DERL+V+Imprt+Pl1:^CLEN^VBACK%>op K ;
!DERL+V+Imprt+Pl2:^CLEN^VBACK%>iđ K ;
!DERL+V+Imprt+Pl3:^CLEN^VBACK%>us K ;
!DERL
!DERL+V+PrsPrc:^CLEN^VBACK%>ijjee K ;
!DERL+V+PrsPrc+Use/NG:^CLEN^VBACK%>eijee K ;
!DERL+V+PrfPrc:^CLEN^VBACK%>âm K ;
!DERL
!DERL+V+Ind+Prs+ConNeg:^CLEN^VBACK K ; ! ^SLEN
!DERL+V+Ind+Prt+ConNeg:^CLEN^VBACK%>âm K ;
!DERL+V+Cond+Prs+ConNeg:^CLEN^VBACK%>iččii K ;
!DERL+V+Pot+Prs+ConNeg:^CLEN^VBACK%>ižžii K ;
!DERL+V+Imprt+ConNeg: K ;
!DERL
!DERL+V+VAbess:^CLEN^VBACK^RLEN^SLEN VABESS ;
!DERL+V+VAbess+Err/Orth:^CLEN^VBACK^RLEN^SLEN%>hinnáá K ;
!DERL+V+VAbess+Err/Orth:^CLEN^VBACK^RLEN^SLEN%>hennáá K ;
!DERL
!DERL+V+Actio+Nom:^CLEN^VBACK%>em K ;
!DERL+V+Actio+Ill:^CLEN^VBACK^RLEN^SLEN%>mân K ;
!DERL+V+Actio+Loc:^CLEN^VBACK^RLEN^SLEN%>mist K ;
!DERL+V+Actio+Com:^CLEN^VBACK^RLEN^SLEN%>máin K ;
!DERL+V+Actio+Ess:^CLEN^VBACK^RLEN^SLEN%>min K ;
!DERL+V+Ger:^CLEN^VBACK^RLEN^SLEN%>dijn K ;
!DERL+V+Ger+PxSg1:^CLEN^VBACK^RLEN^SLEN%>dijnân K ;
!DERL+V+Ger+PxSg2:^CLEN^VBACK^RLEN^SLEN%>dijnâd K ;
!DERL+V+Ger+PxSg3:^CLEN^VBACK^RLEN^SLEN%>dijnis K ;
!DERL+V+Der4+Der/NomAct:^CLEN^VBACK FLAG_3KEPIDEM ;
!DERL+V+Der2+Der/NomAg:^CLEN^VBACKei4je C_TAHHEE ;
!DERL+V+Der4+Der/InchL:i6^CLEN^WG^VBACK#škyett4 4SYLL_KYETTID_DER ; !joođeet#škuođij hmm
!DERL+V+Der3+Der/Pass:^CLEN^VBACK C_MERIDUD ;
!DERL+V+Der1+Der/st:^CLEN^VBACKist 4_ADELISTID ; !
!DERL+V+Der1+Der/Caus:^CLEN^VBACKitt 4_ADELISTID ; !
