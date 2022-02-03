# Inari Saami documentation

[![Maturity: Experiment](https://img.shields.io/badge/Maturity-Experiment-black.svg)](https://giellalt.github.io/MaturityClassification.html)
[![License](https://img.shields.io/github/license/giellalt/lang-smn)](https://raw.githubusercontent.com/giellalt/lang-smn/main/LICENSE)
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

[Test](Test.md)

The Inari Saami MT project (2014-2016)
--------------------------------------


-   [Background information on the Inari Saami
    project](docu-smn-background.html)
-   [MT project pages + all meeting
    memos](/mt/smesmn/NorthSaamiInariSaamiMachineTranslation.html)
-   [Plan for our team work (2015)](TeamWorkPlan.html)


# In-source documentation

Here's a list of documentation pages built from structured comments in the source code. All pages are concatenated and can be read as one long text [here](smn.md).


* [src-cg3-disambiguator.cg3.md](src-cg3-disambiguator.cg3.md)
* [src-cg3-valency.cg3.md](src-cg3-valency.cg3.md)
* [src-cg3-coredisambiguation.cg3.md](src-cg3-coredisambiguation.cg3.md)
* [src-cg3-introdisambiguation.cg3.md](src-cg3-introdisambiguation.cg3.md)
* [src-fst-compounding.lexc.md](src-fst-compounding.lexc.md)
* [src-fst-phonology.twolc.md](src-fst-phonology.twolc.md)
* [src-fst-stems-nouns.lexc.md](src-fst-stems-nouns.lexc.md)
* [src-fst-stems-adpositions.lexc.md](src-fst-stems-adpositions.lexc.md)
* [src-fst-stems-smn-acronyms.lexc.md](src-fst-stems-smn-acronyms.lexc.md)
* [src-fst-stems-particles.lexc.md](src-fst-stems-particles.lexc.md)
* [src-fst-stems-adverbs.lexc.md](src-fst-stems-adverbs.lexc.md)
* [src-fst-stems-interjections.lexc.md](src-fst-stems-interjections.lexc.md)
* [src-fst-stems-pronouns.lexc.md](src-fst-stems-pronouns.lexc.md)
* [src-fst-stems-subjunctions.lexc.md](src-fst-stems-subjunctions.lexc.md)
* [src-fst-stems-numerals.lexc.md](src-fst-stems-numerals.lexc.md)
* [src-fst-stems-adjectives.lexc.md](src-fst-stems-adjectives.lexc.md)
* [src-fst-stems-verbs.lexc.md](src-fst-stems-verbs.lexc.md)
* [src-fst-stems-smn-propernouns.lexc.md](src-fst-stems-smn-propernouns.lexc.md)
* [src-fst-stems-smn-abbreviations.lexc.md](src-fst-stems-smn-abbreviations.lexc.md)
* [src-fst-stems-conjunctions.lexc.md](src-fst-stems-conjunctions.lexc.md)
* [src-fst-affixes-possessive-suffixes.lexc.md](src-fst-affixes-possessive-suffixes.lexc.md)
* [src-fst-affixes-nouns.lexc.md](src-fst-affixes-nouns.lexc.md)
* [src-fst-affixes-acronyms.lexc.md](src-fst-affixes-acronyms.lexc.md)
* [src-fst-affixes-numerals.lexc.md](src-fst-affixes-numerals.lexc.md)
* [src-fst-affixes-propernouns.lexc.md](src-fst-affixes-propernouns.lexc.md)
* [src-fst-affixes-adjectives.lexc.md](src-fst-affixes-adjectives.lexc.md)
* [src-fst-affixes-verbs.lexc.md](src-fst-affixes-verbs.lexc.md)
* [src-fst-affixes-symbols.lexc.md](src-fst-affixes-symbols.lexc.md)
* [src-fst-affixes-abbreviations.lexc.md](src-fst-affixes-abbreviations.lexc.md)
* [src-fst-root.lexc.md](src-fst-root.lexc.md)
* [src-phonetics-txt2ipa.xfscript.md](src-phonetics-txt2ipa.xfscript.md)
* [src-transcriptions-transcriptor-ttsdate-digit2text.lexc.md](src-transcriptions-transcriptor-ttsdate-digit2text.lexc.md)
* [src-transcriptions-transcriptor-numbers-digit2text.lexc.md](src-transcriptions-transcriptor-numbers-digit2text.lexc.md)
* [src-transcriptions-transcriptor-date-digit2text.lexc.md](src-transcriptions-transcriptor-date-digit2text.lexc.md)
* [src-transcriptions-transcriptor-abbrevs2text.lexc.md](src-transcriptions-transcriptor-abbrevs2text.lexc.md)
* [tools-grammarcheckers-spellchecker.cg3.md](tools-grammarcheckers-spellchecker.cg3.md)
* [tools-grammarcheckers-grammarchecker.cg3.md](tools-grammarcheckers-grammarchecker.cg3.md)
* [tools-tokenisers-tokeniser-disamb-gt-desc.eighties.pmscript.md](tools-tokenisers-tokeniser-disamb-gt-desc.eighties.pmscript.md)
* [tools-tokenisers-tokeniser-gramcheck-gt-desc.pmscript.md](tools-tokenisers-tokeniser-gramcheck-gt-desc.pmscript.md)
* [tools-tokenisers-tokeniser-disamb-gt-desc.pmscript.md](tools-tokenisers-tokeniser-disamb-gt-desc.pmscript.md)
