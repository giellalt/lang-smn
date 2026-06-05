# Lemma-tests for *nouns* in ...`nouns.lexc`


**ápáilume** failures:

* `ápáilume+N+Pl+Nom` does not generate!
* `ápáilume+N+Sg+Nom` does not generate!
* `ápáilume` has no analyses either

**ráhtádâsrijkkâ** failures:

* `ráhtádâsrijkkâ+N+Pl+Nom` does not generate!
* `ráhtádâsrijkkâ+N+Sg+Nom` does not generate!
* `ráhtádâsrijkkâ` has following analyses:
  * `ráhtádâs+N+Cmp#rijkkâ+N+Sg+Nom`

**muusikfestivaal** failures:

* `muusikfestivaal+N+Pl+Nom` does not generate!
* `muusikfestivaal+N+Sg+Nom` does not generate!
* `muusikfestivaal` has following analyses:
  * `muusik+N+Cmp#festivaal+N+Sg+Gen`
  * `muusik+N+Der1+Der/Dimin+N+Cmp#festivaal+N+Sg+Gen`
  * `muusik+N+Der1+Der/Dimin+N+Cmp#festivaal+N+Sg+Nom`
  * `muusik+N+Cmp#festivaal+N+Sg+Nom`
  * `muusik+N+Der1+Der/Dimin+N+Cmp#festivaal+N+Sg+Acc`
  * `muusik+N+Cmp#festivaal+N+Sg+Acc`

**jieggilume** failures:

* `jieggilume+N+Pl+Nom` does not generate!
* `jieggilume+N+Sg+Nom` does not generate!
* `jieggilume` has no analyses either

**kiärdinhiärrá** failures:

* `kiärdinhiärrá+N+Pl+Nom` => `kärdinhiäráh`
* `kiärdinhiärrá+N+Sg+Nom` => `kärdinhiärrá`
* `kiärdinhiärrá` has no analyses either

**olgosväldim** failures:

* `olgosväldim+N+Pl+Nom` => `olgosnväldimeh`
* `olgosväldim+N+Sg+Nom` => `olgosnväldim`
* `olgosväldim` has no analyses either

**kyevtis** failures:

* `kyevtis+N+Sg+Nom` does not generate!
* `kyevtis+N+Pl+Nom` does not generate!
* `kyevtis` has following analyses:
  * `kyevtis+N+Coll+Sg+Nom`

**suhâtuávááš** failures:

* `suhâtuávááš+N+Pl+Nom` does not generate!
* `suhâtuávááš+N+Sg+Nom` does not generate!
* `suhâtuávááš` has following analyses:
  * `suuhâ+N+Cmp#tuávááš+N+Sg+Nom`

**panseksuaalvuotâ** failures:

* `panseksuaalvuotâ+N+Pl+Nom` => `panseksuaallâšvuođah`
* `panseksuaalvuotâ+N+Sg+Nom` => `panseksuaallâšvuotâ`
* `panseksuaalvuotâ` has following analyses:
  * `panseksuaallâšvuotâ+N+Sg+Nom`

**amfiáimuteatter** failures:

* `amfiáimuteatter+N+Sg+Nom` => `amfiteatter`
* `amfiáimuteatter+N+Pl+Nom` => `amfiteattereh`
* `amfiáimuteatter` has no analyses either

**alppâriijkâ** failures:

* `alppâriijkâ+N+Pl+Nom` does not generate!
* `alppâriijkâ+N+Sg+Nom` does not generate!
* `alppâriijkâ` has no analyses either

**luppi** failures:

* `luppi+N+Pl+Nom` does not generate!
* `luppi+N+Sg+Nom` does not generate!
* `luppi` has no analyses either

**sundášume** failures:

* `sundášume+N+Pl+Nom` does not generate!
* `sundášume+N+Sg+Nom` does not generate!
* `sundášume` has following analyses:
  * `sundášuđ+V+Der4+Der/NomAct+N+Sg+Acc`
  * `sundášuđ+V+Der4+Der/NomAct+N+Sg+Nom`
  * `sundášuđ+V+Der4+Der/NomAct+N+Sg+Gen`

**liggee** failures:

* `liggee+N+Sg+Nom` => `riggee`
* `liggee+N+Pl+Nom` => `riggeeh`
* `liggee` has no analyses either

**puddâšume** failures:

* `puddâšume+N+Sg+Nom` does not generate!
* `puddâšume+N+Pl+Nom` does not generate!
* `puddâšume` has no analyses either

**siirdâkodde** failures:

* `siirdâkodde+N+Sg+Nom` => `siirdâakodde`
* `siirdâkodde+N+Pl+Nom` => `siirdâakodeh`
* `siirdâkodde` has no analyses either

**astoääigikuálástus** failures:

* `astoääigikuálástus+N+Sg+Nom` does not generate!
* `astoääigikuálástus+N+Pl+Nom` does not generate!
* `astoääigikuálástus` has no analyses either

**panseksuaallâšvuotâ** failures:

* `panseksuaallâšvuotâ+N+Sg+Nom` => `panseksuaalvuotâ`
* `panseksuaallâšvuotâ+N+Pl+Nom` => `panseksuaalvuođah`
* `panseksuaallâšvuotâ` has following analyses:
  * `panseksuaalvuotâ+N+Sg+Nom`

## Lemma statistics
* 16708 lemmas
* 99.82643045247785 % success

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
