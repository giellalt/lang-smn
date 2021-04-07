# General tasks 2015
In the autumn we will make a plan for the MT work. In this document is only for dictionary and FST


* Project leader (**Trond**)
* Linguistic work coordination (**ML**)
* Dictionary coordination (**Trond**)
* FST coordination (**Lene**)
* MT implementation (**Francis**)
* Dictionary transfer (**Ciprian**)
* Data for NDS dictionaries in both directions (**Ciprian**)
* SMN Korp (**Ciprian**)


##  August
Workers in August
* Trond
* Lene 
* ML
* Erika
* Ciprian partly


## Works to be done:


### Time allocation
* Bidix
* Twolc
* Verbs
* Nouns
* Oulu presentation


## Tasks
###  verbs
* linguistics: 
    - [Finish the verbal inflection overview](VerbalInflection.html)
    - (yamls as needed)
* Principles for yamls:
* Following the grouping in the grammar
    - Bisyllabics: all stem vowels + root vowels in order to cope with lowering
    - Trisyllabics:  types are there already
    - Contracted: in principle as for the bi/tri above
* lexc + twolc <== thereafter do analysis


###  nouns
* Finish the fst to let yamls through
* Lexicon:
    - Appr 200 **nounstems** left


###  adjectives <== get the landscape clear
* Linguistics:
    - attr forms
    - map the stems to the nominal classes, prefix A_contlex
    - Allocate 1122 **adjstems**


###  other, closed POS <== get the POS right
* check fst up against grammar


### Lexicon
* Work with missing lists 
    - situation 7.8.15: coverage = 68%, including names, corpus = 1,1 mill)


```
For reference: Command:
cat misc/boundsmn.txt |preprocess|grep '[a-z]'|wc -l
cat misc/boundsmn.txt |preprocess|grep '[a-z]'|usmn|grep '?'|wc -l
```


### Dictionaries: 
* Finish bidix (Cip, Miina)
* Redo finsmn NDS
* Oulu presentation




##  smn-fin-smn dictionary launching
* Present the dictionary to the users (**ML, Miina**)
    - Present the dictionary at the schools and universities
        - Ivalo, Inari, Oulun Yliopisto, Helsingin Yliopisto 
* Present the dictionary to the public (**ML, Miina**) in September
    - Saami parliament
    - Press: YLE, Ávvir, Inarilainen, Lapinkansa, Helsingin Saanomat (make a happening!)


##  Dictionary: smn-fin-smn - deadline August 25?
A test version of the dictionary is online


TODO:
* improve the dictionary interface
    - localisation in Inari Saami (**ML**)
    - improve information in the interface (**Erika**)
    - improve presentation of paradigms and morphological information (**Erika**)
    - add context to paradigms  (**Erika**)
    - look at homonyms (get the correct translation and the correct paradigm) (**Erika**)
* Improve the columns (**Ciprian, Miina, ML, Trond**)


##  Dictionary: sme-smn transfer - deadline for 1-2 is August 5?, for the cifu presentation


The tool itself could be launched much later, as another tool than smn-fin-smn 


TODO:
1. correct columns in input excel dict files (**Ciprian; ML, Miina, Trond**)
1. make transfer sme-fin + fin-smn (**Ciprian**)
1. improve coverage
    1. Find holes (lacunas) in the dictionary (**Trond**)
    1. add missing translations  (**ML, Miina**)
1. put the dictionary online (**Ryan**)
1. improve the interface  (**ML**)
1. launch the dictionary, when? how?


# Testing FST
1. Automatic testing (make check)
    1. yaml-files
    1. generating of lemmas
    1. generating of miniparadigms
1. Analysis
    1. Analysis of texts (**Erika**)
    1. Coverage: creating missing lists, adding words to analyser 
1. Testing of analysator and dictonary (**ML, Miina**)




# Morphology
## nouns.lexc - first priority


TODO:
* test setup
    - make yaml-files (**ML, Miina**)
    - add mini-paradigms in the stem file (**ML, Miina**)
* stems file  (**ML, Miina, Erika**)
    - correct stems and give correct contlex
    - classify *nounstems*  (over 1750 unclassified entries)
* affix-file (**Lene, ML**)
* twolc work (**Lene**)


## verbs.lexc - second priority
TODO:
* test setup
    - make yaml-files (**ML, Miina, Trond**)
    - add mini-paradigms in the stem file (**ML, Miina**)
* affix-file (**Trond, ML**)


## adjectives.lexc - third priority
TODO:
* test setup
    - make yaml-files (**ML, Miina?, Trond**)
    - add mini-paradigms in the stem file (**ML, Miina?**)
    - ensure nom sg test routines
* affix-file (**Lene, ML, Trond**)
* twolc work (**Lene**)
* correct stems and give correct contlex (**ML, Miina?**)




## smn-propernouns.lexc:
TODO:
* Classifisy the place names in the file, and make new lexicons (copy from nouns) (**Erika**)
    - jävri AIGI > JAVRI, N+Prop+Sem/Plc
* Add smn person names (ask Mattus) (**Lene**)
* Classifisy person names and make lexicons (**Erika**)
* Redirect smi-propernouns.lexc to smn  (**Lene**)
* Adjust affixes/propernouns.lexc (**Lene, Erika**)


##  abbreviations, acronyms - copy from sme
* Adjust to smn (**Erika**)


##  numerals, pronouns
* Test and correct (**Erika**)
* add more pronouns (take from text books, analysis) (**Erika**)


##  adverbs, adpositions, conjunctions, subjunctions, particles, interjections
* Check PoS (**Erika**)
    - move words to other files
    - add more lemmas (take from text books, analysis)


##  punctuation.lexc - should be ok


# Dependencies


## POS internal dependencies


For all FST work the following dependencies hold
(for words without morphology several steps may be skipped):


1. Linguistic ground work
1. Yaml files and other test setup
1. Plan of attack
1. lexc and twolc work for the words in the yamlfiles
1. yaml testing and refinement until yamlfiles are 100%
1. go through lexicon file for all members of the contlex


## Dependencies between POS within the FST


* N before A
* N before Prop
* N, V, A before derivation
* N before Px


Otherwise there are no dependencies between the POS.


## Dependencies between FST and dict and MT


1. FST good enough to generate a substantial part of N, V, A paradigms
1. an useful Neahttadigisánit with click-in-text
1. FST with all POS done (but errors and holes here and there)
1. good NDS with paradigm generation


## Dependencies between FST and MT




1. FST good enough to generate a substantial part of N, V, A paradigms
1. alpha version of MT
1. FST with all POS done (but errors and holes here and there)
1. start working on MT transfer rules


Bidix and FST are not dependent upon each other, but it is easier to 
collect data to bidix with a good FST for text analysis.


# General tasks 2015
In the autumn we will make a plan for the MT work. In this document is only dictionary and FST


* Project leader (**Trond**)
* Linguistic work coordination (**ML**)
* Dictionary coordination (**Trond**)
* FST coordination (**Lene**)
* MT implementation (**Francis**)
* Dictionary transfer and other pipelines, ja smn Korp (**Cip**)




#  smn-fin-smn dictionary launching
* Present the dictionary to the users (**ML, Miina**)
    - Present the dictionary at the schools and universities
        - Ivalo, Inari, Oulun Yliopisto, Helsingin Yliopisto 
* Present the dictionary to the public (**ML, Miina**) in September
    - Saami parliament
    - Press: YLE, Ávvir, Inarilainen, Lapinkansa, Helsingin Saanomat (make a happening!)


##  Dictionary: smn-fin-smn - deadline August 25?
A test version of the dictionary is online


TODO:
* improve the dictionary interface
    - localisation in Inari Saami (**ML**)
    - improve information in the interface (**Erika**)
    - improve presentation of paradigms and morphological information (**Erika**)
    - add context to paradigms  (**Erika**)
    - look at homonyms (get the correct translation and the correct paradigm) (**Erika**)
* Improve the columns (**Cip, Miina, ML, Trond**)


##  Dictionary: sme-smn transfer - deadline for 1-2 is August 5?, for the cifu presentation


The tool itself could be launched much later, as another tool than smn-fin-smn 


TODO:
1. correct columns in input excel dict files (**Ciprian; ML, Miina, Trond**)
1. make transfer sme-fin + fin-smn (**Ciprian**)
1. improve coverage
    1. Find holes (lacunas) in the dictionary (**Trond**)
    1. add missing translations  (**ML, Miina**)
1. put the dictionary online (**Ryan**)
1. improve the interface  (**ML**)
1. launch the dictionary, when? how?


# Testing FST
1. Automatic testing (make check)
    1. yaml-files
    1. generating of lemmas
    1. generating of miniparadigms
1. Analysis
    1. Analysis of texts (**Erika**)
    1. Coverage: creating missing lists, adding words to analyser 
1. Testing of analysator and dictonary (**ML, Miina**)




# Morphology
## nouns.lexc - first priority


TODO:
* test setup
    - make yaml-files (**ML, Miina**)
    - add mini-paradigms in the stem file (**ML, Miina**)
* stems file  (**ML, Miina, Erika**)
    - correct stems and give correct contlex
    - classify *nounstems*  (over 1750 unclassified entries)
* affix-file (**Lene, ML**)
* twolc work (**Lene**)


## verbs.lexc - second priority
TODO:
* test setup
    - make yaml-files (**ML, Miina, Trond**)
    - add mini-paradigms in the stem file (**ML, Miina**)
* affix-file (**Trond, ML**)


## adjectives.lexc - third priority
TODO:
* test setup
    - make yaml-files (**ML, Miina?, Trond**)
    - add mini-paradigms in the stem file (**ML, Miina?**)
    - ensure nom sg test routines
* affix-file (**Lene, ML, Trond**)
* twolc work (**Lene**)
* correct stems and give correct contlex (**ML, Miina?**)




## smn-propernouns.lexc:
TODO:
* Classifisy the place names in the file, and make new lexicons (copy from nouns) (**Erika**)
    - jävri AIGI > JAVRI, N+Prop+Sem/Plc
* Add smn person names (ask Mattus) (**Lene**)
* Classifisy person names and make lexicons (**Erika**)
* Redirect smi-propernouns.lexc to smn  (**Lene**)
* Adjust affixes/propernouns.lexc (**Lene, Erika**)


##  abbreviations, acronyms - copy from sme
* Adjust to smn (**Erika**)


##  numerals, pronouns
* Test and correct (**Erika**)
* add more pronouns (take from text books, analysis) (**Erika**)


##  adverbs, adpositions, conjunctions, subjunctions, particles, interjections
* Check PoS (**Erika**)
    - move words to other files
    - add more lemmas (take from text books, analysis)


##  punctuation.lexc - should be ok


# Dependencies


## POS internal dependencies


For all FST work the following dependencies hold
(for words without morphology several steps may be skipped):


1. Linguistic ground work
1. Yaml files and other test setup
1. Plan of attack
1. lexc and twolc work for the words in the yamlfiles
1. yaml testing and refinement until yamlfiles are 100%
1. go through lexicon file for all members of the contlex


## Dependencies between POS within the FST


* N before A
* N before Prop
* N, V, A before derivation
* N before Px


Otherwise there are no dependencies between the POS.


## Dependencies between FST and dict and MT


1. FST good enough to generate a substantial part of N, V, A paradigms
1. an useful Neahttadigisánit with click-in-text
1. FST with all POS done (but errors and holes here and there)
1. good NDS with paradigm generation


## Dependencies between FST and MT




1. FST good enough to generate a substantial part of N, V, A paradigms
1. alpha version of MT
1. FST with all POS done (but errors and holes here and there)
1. start working on MT transfer rules


Bidix and FST are not dependent upon each other, but it is easier to 
collect data to bidix with a good FST for text analysis.
