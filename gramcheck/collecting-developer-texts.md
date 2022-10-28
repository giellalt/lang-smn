Collecting developer texts
==========================

In order to test precision, we need texts for development. is described [here](https://giellalt.github.io/proof/gramcheck/GrammarCheckerDocumentation.html).

The Inari Saami development sentences should be taken from corpus texts not in use for gold corpus. The following texts are available (remove the newlines and collect the result as one file (`corpustext.txt`)). Then, analyse the file as explained [in this document](https://giellalt.github.io/proof/gramcheck/extracting-precision-sentences.html). The result will be files containing sentences with error alarms.

The files reserved for developer test corpus are listed here. These should **not** be used for gold corpus annotation. Gold corpus files are listed at the end of this document.

```
ccat -l smn
~/freecorpus/converted/smn/admin     
~/freecorpus/converted/smn/blogs     
~/freecorpus/converted/smn/facta     
~/freecorpus/converted/smn/science
~/boundcorpus/converted/smn
```

The goldcorpus is found in `~/freecorpus/orig/smn/speccorp`. All annotated files are taken from Wikipedia, which is not part of the deveoper corpus. Further goldcorpus text should be taken from corpus texts newer than these (28.10.22).


