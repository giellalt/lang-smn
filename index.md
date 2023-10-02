# Inari Saami documentation

[![Maturity](https://img.shields.io/endpoint?url=https%3A%2F%2Fraw.githubusercontent.com%2Fgiellalt%2Flang-smn%2Fgh-pages%2Fmaturity.json)](https://giellalt.github.io/MaturityClassification.html)
![Lemma count](https://img.shields.io/endpoint?url=https%3A%2F%2Fraw.githubusercontent.com%2Fgiellalt%2Flang-smn%2Fgh-pages%2Flemmacount.json)
[![License](https://img.shields.io/github/license/giellalt/lang-smn)](https://github.com/giellalt/lang-smn/blob/main/LICENSE)
[![Issues](https://img.shields.io/github/issues/giellalt/lang-smn)](https://github.com/giellalt/lang-smn/issues)
[![Build Status](https://divvun-tc.giellalt.org/api/github/v1/repository/giellalt/lang-smn/main/badge.svg)](https://github.com/giellalt/lang-smn/actions)

This page documents the work on the [Inari Saami grammatical analyser](http://github.com/giellalt/lang-smn). 


## Documentation pages

- [Lingustic documentation of the language model](lingustic-documentation.md)
- [Testing and development of the language model](testing-and-development.md)


## Project pages

- [The Inari Saami grammar checker project (2021-)](gramcheck/index.md)
- [The Inari Saami MT project (2014-2016)](mt.md)


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
        * [grammarchecker-release.cg3](tools-grammarcheckers-grammarchecker-release.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/grammarchecker-release.cg3))
        * [grammarchecker.cg3](tools-grammarcheckers-grammarchecker.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/grammarchecker.cg3))
        * [grc-disambiguator.cg3](tools-grammarcheckers-grc-disambiguator.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/grc-disambiguator.cg3))
        * [spellchecker.cg3](tools-grammarcheckers-spellchecker.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/grammarcheckers/spellchecker.cg3))
    * `tokenisers/`
        * [tokeniser-disamb-gt-desc.eighties.pmscript](tools-tokenisers-tokeniser-disamb-gt-desc.eighties.pmscript.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-disamb-gt-desc.eighties.pmscript))
        * [tokeniser-disamb-gt-desc.pmscript](tools-tokenisers-tokeniser-disamb-gt-desc.pmscript.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-disamb-gt-desc.pmscript))
        * [tokeniser-gramcheck-gt-desc.pmscript](tools-tokenisers-tokeniser-gramcheck-gt-desc.pmscript.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-gramcheck-gt-desc.pmscript))
        * [tokeniser-tts-cggt-desc.pmscript](tools-tokenisers-tokeniser-tts-cggt-desc.pmscript.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/tokenisers/tokeniser-tts-cggt-desc.pmscript))
