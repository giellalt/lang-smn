# Lemma-tests for *verbs* in ...`verbs.lexc`


## Lemma statistics
* 5214 lemmas
* 100.0 % success

## Settings used

```json
{
    "adjectives": {
        "lemmatags": [
            "+A+Sg+Nom",
            "+A+Attr",
            "+A+Superl+Sg+Nom",
            "+A+Comp+Sg+Nom"
        ],
        "lexcfile": ".../adjectives.lexc"
    },
    "analyser": ".../analyser-gt-norm.hfstol",
    "generator": ".../generator-gt-norm.hfstol",
    "nouns": {
        "exclusions": [
            "(ShCmp|RCmpnd|COLL|\\+CmpNP/Suff|\\+Use/MT)"
        ],
        "lemmatags": [
            "+N+Sg+Nom",
            "+N+Pl+Nom"
        ],
        "lexcfile": ".../nouns.lexc"
    },
    "propernouns": {
        "exclusions": [
            "(FirstTag|Proper_infix|\\+Use/MT)"
        ],
        "lemmatags": [
            "+N+Prop+Sg+Nom",
            "+N+Prop+Pl+Nom",
            "+N+Prop+Attr"
        ],
        "lexcfile": ".../smn-propernouns.lexc"
    },
    "verbs": {
        "exclusions": [
            "(LE|IJ|ij\\+V|\\+Use/MT)"
        ],
        "lemmatags": [
            "+V+Inf"
        ],
        "lexcfile": ".../verbs.lexc"
    }
}
```
