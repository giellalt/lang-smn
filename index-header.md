# Inari Saami documentation

[![Maturity: Production](https://img.shields.io/badge/Maturity-Production-brightgreen.svg)](https://giellalt.github.io/MaturityClassification.html)
[![License](https://img.shields.io/github/license/giellalt/lang-smn)](https://github.com/giellalt/lang-smn/blob/main/LICENSE)
[![Issues](https://img.shields.io/github/issues/giellalt/lang-smn)](https://github.com/giellalt/lang-smn/issues)
[![Build Status](https://divvun-tc.thetc.se/api/github/v1/repository/giellalt/lang-smn/main/badge.svg)](https://github.com/giellalt/lang-smn/actions)

This page documents the work on the [Inari Saami grammatical analyser](http://github.com/giellalt/lang-smn). 



## Lingustic documentation of the language model

-   [Lyhyt kuvaus inarinsaamen kielestä (Marja-Liisa Olthuis)](LyhytKuvausInarinsaamesta.pdf)
-   [Documentation on Inari Saami hyphenation](docu-hyphenation.txt)
-   [Twolc kaksitavuiset
    substantiivit](TwolcKaksitavuisetSubstantiivit.html)
-   [Handling variation in lexc: Err/Orth, Err/Lex, +v1 and
    others.](/lang/common/Variation_in_lexc.html)
-   [Verbal inflection (active)](VerbalInflection.html)
-   [Verbal inflection (passive)](PassiveVerbs.html)
-   [Table showing vowel change in passive](PassiveVowelChange.html)

## Testing and development of the language model

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



## The Inari Saami grammar checker project (2021-)

The idea is to make a grammarchecker for Inari Saami L2 writers.


- [Documentation](https://giellalt.github.io/lang-smn/tools-grammarcheckers-grammarchecker.cg3.html) of the [grammarchecker file](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/grammarchecker.cg3)
- [Test files](https://github.com/giellalt/lang-smn/tree/main/tools/grammarcheckers/tests)




## The Inari Saami MT project (2014-2016)

-   [Background information on the Inari Saami grammarchecker
    project](docu-smn-background.html)
-   [MT project pages + all meeting
    memos](/mt/smesmn/NorthSaamiInariSaamiMachineTranslation.html)
-   [Plan for our team work (2015)](TeamWorkPlan.html)

(See also the in-source documentation under `tools/grammarchecker` below)

# In-source documentation

Here's a list of documentation pages built from structured comments in the source code. All pages are concatenated and can be read as one long text [here](smn.md).
