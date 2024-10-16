

# Testing is important, before you check in your work


The essence of testing: With testing, we want to check **3 things**:


1. that the fst is not broken: (`make`)
1. that what we want to achieve is achieved: (analyse / generate the form(s) you want)
1. that our work has not made the FST worse: (yaml tests + check_lemmas.sh & ensure numbers are not worse)




## make
With `make` you check that there are no technical issues. Read the report.


### Typical issues:
* `ERROR: Sublexicon is mentioned but not defined. (PYERRI)`
    - there is a sublexicon PYERRI, probably in a stem-file, which is not in the affixfile. 
        - a typo?
        - you are planning a new lexicon?
* `ERROR: Sublexicon is mentioned but not defined. (muvgâ PUIGA)`
    - there is an unbreakable whitespace between muvgâ and PUIGA
* `ERROR: Compilation aborted because of 1 parse error. line 11634: syntax error at "suoraan" `
    - look at line 11634 in src/fst/lexicon.lexc, but you must correct the error in the sourcefile!
* `Segmentation fault: 11, Error 139`
    - can be e.g. that there is in lexc the symbol > instead of %>  . Look at what you have done yourself, or at the last svn-log-mail, if it is not your own work.




##  make check
With `make check` you also check the morphology:


### yaml-tests
* These are static and test the same lemmas every time.
* yaml tests are good for testing changes in twolc and in the paradigms in lexc 


### genererating of all stems - get list of missing lemmas: nouns, adjectives, verbs, propernouns 
* These are dynamic tests, and tests all the lemmas in the stem files, also the new lemmas you just added. 
* Tests if it is possible to generate the lemmas as base form. This test does not test the inflection, but very often the testing still reveal if a lemma has got the wrong continuation lexicon.


##  Test only yaml-tests
Test only yaml-tests with this command: 


`sh test/yaml-check.sh`






##  Test only generating of all stems
Test only genererating of nouns, adjectives, verbs, propernouns (no yaml-tests) with this command:


`sh test/check_lemmas.sh`


##  Test if you have achieved what you were trying to achieve
Analyse the forms:


`usmn` and  `usmnNorm` 


analyse e.g. `nieidáin`


If you don't get any analysis, only `?`, then you should generate the word:


`dsmn` and  `dsmnNorm` 


generate the forms, e.g. `nieidâ+N+Sg+Com`


Are you not quite sure that you you have a new analyser and generator? How to check the date/time for when you analyser/generator was compiled:


` ll src/`


##  Scripts as a help to look at the generated forms


When you are in langs/smn - the quick commands:


`sh devtools/noun_minip.sh nieidâ `


`sh devtools/adj_minip.sh uánehâš ` 


`sh devtools/prop_minip.sh Aanaar ` 


Get only the correct lemma and not compounds:


```
sh devtools/noun_minip.sh '^nieidâ[:+]' 
```


Look at all lemmas going to the same continuation lexicon:


```
sh devtools/noun_minip.sh PIIVTAS | less 
```


```
sh devtools/adj_minip.sh KOOIDAS | less 
```


##  Test the miniparadigms in the stem files
Look at all forms:


```
grep '¢' src/fst/stems/nouns.lexc | cut -d '¢' -f2 | cut -d '!' -f1 |preprocess |grep '[a-z]' |usmnNorm |less 
```


Get the forms which are not recognized by the analyser:


```
grep '¢' src/fst/stems/nouns.lexc | cut -d '¢' -f2 | cut -d '!' -f1 |preprocess |grep '[a-z]' |usmnNorm |grep '\?' | less 
```


