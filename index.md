# Inari Saami documentation

[![Maturity: Experiment](https://img.shields.io/badge/Maturity-Experiment-black.svg)](https://giellalt.github.io/MaturityClassification.html)
[![License](https://img.shields.io/github/license/giellalt/lang-smn)](https://github.com/giellalt/lang-smn/blob/main/LICENSE)
[![Issues](https://img.shields.io/github/issues/giellalt/lang-smn)](https://github.com/giellalt/lang-smn/issues)
[![Build status](https://github.com/giellalt/lang-smn/workflows/Speller%20CI+CD/badge.svg)](https://github.com/giellalt/lang-smn/actions)

This page documents the work on the [Inari Saami grammatical analyser](http://github.com/giellalt/lang-smn). 

## Lingustic tools

- [Inari Saami speller for LibreOffice](https://github.com/giellalt/lang-smn/blob/main/docs/smn_LO-voikko-5.0.oxt) (press "Download" in the low-left corner, and open the file in LibreOffice) 


## Lingustic documentation

-   [Lyhyt kuvaus inarinsaamen kielestä (Marja-Liisa Olthuis)](LyhytKuvausInarinsaamesta.pdf)
-   [Documentation on Inari Saami hyphenation](docu-hyphenation.txt)
-   [Twolc kaksitavuiset
    substantiivit](TwolcKaksitavuisetSubstantiivit.html)
-   [Handling variation in lexc: Err/Orth, Err/Lex, +v1 and
    others.](/lang/common/Variation_in_lexc.html)
-   [Verbal inflection (active)](VerbalInflection.html)
-   [Verbal inflection (passive)](PassiveVerbs.html)
-   [Table showing vowel change in passive](PassiveVowelChange.html)

## Testing and development

### Testing
-   [Generation of Inari Saami
	  paradigms](http://giellatekno.uit.no/cgi/p-smn.eng.html) 
-   [About testing](Testing.html)
-   [Test configuration](TestConfiguration.html)
-   [Compare continuation lexicons](generatewordforms.html)
-   [Yaml-tiedostojen tarkistaminen](TarkistaaYaml-tiedostot.html)

### Development and use
-   [Analysaattorin tehtävälista](AnalysaattorinTehtavalista.html)
-   [How to use the morphological
    parsers](/tools/docu-sme-manual.html)
-   [How to work with non-language-specific
    propernouns](smi-propernouns-stems.html)
-   [Explanation about frequent commands (in North
    Saami)](/tools/unix_korpus_kursa.html)
-   [Tips for practical development work, made for
    Cree](/lang-crk/developingwork.html)
- [Automatic analysis of Inari Saami text](http://giellatekno.uit.no/cgi/d-smn.eng.html)

The Inari Saami MT project (2014-2016)
--------------------------------------


-   [Background information on the Inari Saami
    project](docu-smn-background.html)
-   [MT project pages + all meeting
    memos](/mt/smesmn/NorthSaamiInariSaamiMachineTranslation.html)
-   [Plan for our team work (2015)](TeamWorkPlan.html)


# In-source documentation

Here's a list of documentation pages built from structured comments in the source code. All pages are concatenated and can be read as one long text [here](smn.md).


* `src/`
    * `cg3/`
        * [coredisambiguation.cg3](src-cg3-coredisambiguation.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/cg3/coredisambiguation.cg3))
        * [disambiguator.cg3](src-cg3-disambiguator.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/cg3/disambiguator.cg3))
        * [introdisambiguation.cg3](src-cg3-introdisambiguation.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/cg3/introdisambiguation.cg3))
        * [valency.cg3](src-cg3-valency.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/cg3/valency.cg3))
    * `fst/`
        * `affixes/`
            * [abbreviations.lexc](src-fst-affixes-abbreviations.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/abbreviations.lexc))
            * [acronyms.lexc](src-fst-affixes-acronyms.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/acronyms.lexc))
            * [adjectives.lexc](src-fst-affixes-adjectives.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/adjectives.lexc))
            * [nouns.lexc](src-fst-affixes-nouns.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/nouns.lexc))
            * [numerals.lexc](src-fst-affixes-numerals.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/numerals.lexc))
            * [possessive-suffixes.lexc](src-fst-affixes-possessive-suffixes.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/possessive-suffixes.lexc))
            * [propernouns.lexc](src-fst-affixes-propernouns.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/propernouns.lexc))
            * [symbols.lexc](src-fst-affixes-symbols.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/symbols.lexc))
            * [verbs.lexc](src-fst-affixes-verbs.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/affixes/verbs.lexc))
        * [compounding.lexc](src-fst-compounding.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/compounding.lexc))
        * [phonology.twolc](src-fst-phonology.twolc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/phonology.twolc))
        * [root.lexc](src-fst-root.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/root.lexc))
        * `stems/`
            * [adjectives.lexc](src-fst-stems-adjectives.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/adjectives.lexc))
            * [adpositions.lexc](src-fst-stems-adpositions.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/adpositions.lexc))
            * [adverbs.lexc](src-fst-stems-adverbs.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/adverbs.lexc))
            * [conjunctions.lexc](src-fst-stems-conjunctions.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/conjunctions.lexc))
            * [interjections.lexc](src-fst-stems-interjections.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/interjections.lexc))
            * [nouns.lexc](src-fst-stems-nouns.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/nouns.lexc))
            * [numerals.lexc](src-fst-stems-numerals.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/numerals.lexc))
            * [particles.lexc](src-fst-stems-particles.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/particles.lexc))
            * [pronouns.lexc](src-fst-stems-pronouns.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/pronouns.lexc))
            * [smn-abbreviations.lexc](src-fst-stems-smn-abbreviations.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/smn-abbreviations.lexc))
            * [smn-acronyms.lexc](src-fst-stems-smn-acronyms.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/smn-acronyms.lexc))
            * [smn-propernouns.lexc](src-fst-stems-smn-propernouns.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/smn-propernouns.lexc))
            * [subjunctions.lexc](src-fst-stems-subjunctions.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/subjunctions.lexc))
            * [verbs.lexc](src-fst-stems-verbs.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/stems/verbs.lexc))
    * `phonetics/`
        * [txt2ipa.xfscript](src-phonetics-txt2ipa.xfscript.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/phonetics/txt2ipa.xfscript))
    * `transcriptions/`
        * [transcriptor-abbrevs2text.lexc](src-transcriptions-transcriptor-abbrevs2text.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/transcriptions/transcriptor-abbrevs2text.lexc))
        * [transcriptor-date-digit2text.lexc](src-transcriptions-transcriptor-date-digit2text.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/transcriptions/transcriptor-date-digit2text.lexc))
        * [transcriptor-numbers-digit2text.lexc](src-transcriptions-transcriptor-numbers-digit2text.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/transcriptions/transcriptor-numbers-digit2text.lexc))
        * [transcriptor-ttsdate-digit2text.lexc](src-transcriptions-transcriptor-ttsdate-digit2text.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/transcriptions/transcriptor-ttsdate-digit2text.lexc))
* `tools/`
    * `grammarcheckers/`
        * [grammarchecker.cg3](tools-grammarcheckers-grammarchecker.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/grammarchecker.cg3))
        * [spellchecker.cg3](tools-grammarcheckers-spellchecker.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/spellchecker.cg3))
    * `tokenisers/`
        * [tokeniser-disamb-gt-desc.eighties.pmscript](tools-tokenisers-tokeniser-disamb-gt-desc.eighties.pmscript.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-disamb-gt-desc.eighties.pmscript))
        * [tokeniser-disamb-gt-desc.pmscript](tools-tokenisers-tokeniser-disamb-gt-desc.pmscript.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-disamb-gt-desc.pmscript))
        * [tokeniser-gramcheck-gt-desc.pmscript](tools-tokenisers-tokeniser-gramcheck-gt-desc.pmscript.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-gramcheck-gt-desc.pmscript))
