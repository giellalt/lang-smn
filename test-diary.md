Test diary
==========

This document writes down test statistics

The overal test command: `make check`

## yaml

The command:

`sh test/yaml-check.sh` 

(data forthcoming)

## Lexical coverage 

Number of words (standing in `lang-smn`):

```
cat test/data/freecorpus.txt |\
hfst-tokenise tools/tokenisers/tokeniser-disamb-gt-desc.pmhfst |wc -l
```

Number of unknown words:

```
cat test/data/freecorpus.txt |\
 hfst-tokenise tools/tokenisers/tokeniser-disamb-gt-desc.pmhfst |\
 preprocess --corr=test/data/typos.txt|\
 hfst-tokenise -cg tools/tokenisers/tokeniser-disamb-gt-desc.pmhfst |\
 grep " ?"|cut -d'"' -f2|wc -l
```

Test with the full corpus (free + bound):



### Lexical coverage of freecorpus

The file is `test/data/freecorpus.txt`.

Coverage:

- 240405: 1-(61694/921807) = 0.9331


### Lexical coverage of free + bound

Coverage:




## Speller suggestions

The table shows the number of typos tested, as well as some data for suggestions.

To test: Clone [divvunspell](https://github.com/divvun/divvunspell/blob/main/README.md) and install **divvunspell** and **acceracy**. Then stand in `divvunspell` and do:

```
accuracy -o support/accuracy-viewer/public/report.json ../../giellalt/lang-smn/test/data/ typos.txt ../../giellalt/lang-smn/tools/spellcheckers/smn.zhfst

cd support/accuracy-viewer

npm i && npm run dev
```

At the end the report says (for example) `port: 35729`. Take the 5-digit number and open (the parallel to) http://localhost:35729  in your browser.

Test results with divvunspell:
```
             typos      Avrg pos       % missp        % missp
             .txt       for corr       in 1st         in top-5     
-----------------------------------------------------------------
240521:       904                      56.64          72.35      
240522:       904                      68.14          84.96     
-----------------------------------------------------------------
```




