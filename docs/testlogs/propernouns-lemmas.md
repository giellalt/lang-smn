# Lemma-tests for *propernouns* in ...`smn-propernouns.lexc`


**Ođđasat** failures:

* `Ođđasat+N+Prop+Sg+Nom` => `ođđasat`
* `Ođđasat` has following analyses:
  * `Ođđasat+N+Prop+Sem/Org+Sg+Nom`

## Lemma statistics
* 18459 lemmas
* 99.99458258843924 % success

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
