
# Inari Saami documentation
<div class="twocolumn map" markdown="1">

{% include_relative language-map.md %}

<div class="badges" markdown="1">
[![Maturity](https://img.shields.io/endpoint?url=https%3A%2F%2Fraw.githubusercontent.com%2Fgiellalt%2Flang-smn%2Fgh-pages%2Fmaturity.json)](https://giellalt.github.io/MaturityClassification.html) <br/>
![Lemma count](https://img.shields.io/endpoint?url=https%3A%2F%2Fraw.githubusercontent.com%2Fgiellalt%2Flang-smn%2Fgh-pages%2Flemmacount.json) <br/>
[![License](https://img.shields.io/github/license/giellalt/lang-smn)](https://github.com/giellalt/lang-smn/blob/main/LICENSE) <br/>
[![Issues](https://img.shields.io/github/issues/giellalt/lang-smn)](https://github.com/giellalt/lang-smn/issues) <br/>
[![Build Status](https://builds.giellalt.org/api/badge/lang-smn?label=CI)](https://builds.giellalt.org/pipelines/lang-smn/builds/latest) <br/>
[![Glottolog](https://img.shields.io/badge/Glottolog-green)](https://glottolog.org/resource/languoid/id/inar1241)
</div>

Center location data taken from [Glottolog](https://glottolog.org/). Area extent is local data. Both can be adjusted if wrong - file a pull request!

</div>

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
        * `morphology/`
            * `affixes/`
                * [abbreviations.lexc](src-fst-morphology-affixes-abbreviations.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/abbreviations.lexc))
                * [acronyms.lexc](src-fst-morphology-affixes-acronyms.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/acronyms.lexc))
                * [adjectives.lexc](src-fst-morphology-affixes-adjectives.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/adjectives.lexc))
                * [nouns.lexc](src-fst-morphology-affixes-nouns.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/nouns.lexc))
                * [numerals.lexc](src-fst-morphology-affixes-numerals.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/numerals.lexc))
                * [possessive-suffixes.lexc](src-fst-morphology-affixes-possessive-suffixes.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/possessive-suffixes.lexc))
                * [propernouns.lexc](src-fst-morphology-affixes-propernouns.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/propernouns.lexc))
                * [symbols.lexc](src-fst-morphology-affixes-symbols.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/symbols.lexc))
                * [verbs.lexc](src-fst-morphology-affixes-verbs.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/affixes/verbs.lexc))
            * [compounding.lexc](src-fst-morphology-compounding.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/compounding.lexc))
            * [phonology.twolc](src-fst-morphology-phonology.twolc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/phonology.twolc))
            * [root.lexc](src-fst-morphology-root.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/root.lexc))
            * `stems/`
                * [adjectives.lexc](src-fst-morphology-stems-adjectives.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/adjectives.lexc))
                * [adpositions.lexc](src-fst-morphology-stems-adpositions.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/adpositions.lexc))
                * [adverbs.lexc](src-fst-morphology-stems-adverbs.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/adverbs.lexc))
                * [conjunctions.lexc](src-fst-morphology-stems-conjunctions.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/conjunctions.lexc))
                * [interjections.lexc](src-fst-morphology-stems-interjections.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/interjections.lexc))
                * [nouns.lexc](src-fst-morphology-stems-nouns.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/nouns.lexc))
                * [numerals.lexc](src-fst-morphology-stems-numerals.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/numerals.lexc))
                * [particles.lexc](src-fst-morphology-stems-particles.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/particles.lexc))
                * [pronouns.lexc](src-fst-morphology-stems-pronouns.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/pronouns.lexc))
                * [smn-abbreviations.lexc](src-fst-morphology-stems-smn-abbreviations.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/smn-abbreviations.lexc))
                * [smn-acronyms.lexc](src-fst-morphology-stems-smn-acronyms.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/smn-acronyms.lexc))
                * [smn-propernouns.lexc](src-fst-morphology-stems-smn-propernouns.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/smn-propernouns.lexc))
                * [subjunctions.lexc](src-fst-morphology-stems-subjunctions.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/subjunctions.lexc))
                * [verbs.lexc](src-fst-morphology-stems-verbs.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/morphology/stems/verbs.lexc))
        * `phonetics/`
            * [txt2ipa.xfscript](src-fst-phonetics-txt2ipa.xfscript.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/phonetics/txt2ipa.xfscript))
        * `transcriptions/`
            * [transcriptor-abbrevs2text.lexc](src-fst-transcriptions-transcriptor-abbrevs2text.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/transcriptions/transcriptor-abbrevs2text.lexc))
            * [transcriptor-date-digit2text.lexc](src-fst-transcriptions-transcriptor-date-digit2text.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/transcriptions/transcriptor-date-digit2text.lexc))
            * [transcriptor-numbers-digit2text.lexc](src-fst-transcriptions-transcriptor-numbers-digit2text.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/transcriptions/transcriptor-numbers-digit2text.lexc))
            * [transcriptor-ttsdate-digit2text.lexc](src-fst-transcriptions-transcriptor-ttsdate-digit2text.lexc.html) ([src](https://github.com/giellalt/lang-smn/blob/main/src/fst/transcriptions/transcriptor-ttsdate-digit2text.lexc))
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
    * `tts/`
        * [valency.cg3](tools-tts-valency.cg3.html) ([src](https://github.com/giellalt/lang-smn/blob/main/tools/tts/valency.cg3))
