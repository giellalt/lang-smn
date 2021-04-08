

Tässä on lista analysaattorin työtehtävistä ja niiden sisäisistä
riippuvuuksista. Jokainen numeroitu lista on riippumaton muista
listoista.  Jokaisen listan kohdat ovat riippuvaisia toisistaan, niin
että tehtävät ovat järjestyksessä




# Testaustiedostot


* Muista 0-yaml! Ylläpidä sitä!!



# Lemmat


## Avointen sanaluokkien - substantiivien, verbien ja adjektiivien - lemmalistojen korjaus


Yaml-paradigmat voivat toimia mallivartaloina myös lemmalistan stems/nouns.lexc muille vartaloille.


* Valitse toimiva leksikko, esim. 3EEMEED
* Valitse kaikki 3EEMEED-tapaukset stems-tiedostosta
    -  `grep 3EEMEED src/fst/stems/nouns.lexc|see`
* Tarkista, että niiden vartalo on samanlainen kuin esimerkkisanojen vartalot
* jos ei, tarkista, toimiiko sana
* katso stems/nouns.lexc
* jokainen yamlissa toimiva sana voi toimia mallina muille
  sanoille, esim yhdyssanoille. 

  
### nounstems-sanojen klassifiointi


Jokaiselle sanalle on annettava oikea contlex.


### Muotojen tarkistaminen


Seuraavilla kahdella esimerkkikomennolla saadaan kaikki toimimattomat lokatiivimuodot, ja 3POTTAAK-leksikon kaikki monikon abessiivimuodot.


```
cat src/fst/stems/nouns.lexc | grep ";"| cut -d ';' -f1 | grep -v PUUVSAH|cut -d":" -f1|sed 's/$/+N+Sg+Loc/'|dsmnDict|grep '?'
cat src/fst/stems/nouns.lexc |  grep ";"| cut -d ';' -f1 | grep "3POTTAAK"|cut -d":" -f1|sed 's/$/+N+Pl+Abe/'|dsmnDict
```


## Puuttuvien nominatiivien muodot


Komento `make check` antaa listan substantiiveista, joille ei 
voi generoida nominatiivia
(`test/src/fst/missing_nouns_lemmas.xfst.txt `) ja
muodot, jotka saadaan nominatiivia generoitaessa.
(`test/src/fst/generated-nouns.xfst.txt`)



# Taivutusmorfologia




## Omistusliitteet

Edelleen puutteellinen.


## Verbit



## Adjektiivit

Tarkista attribuutit! Niissä voi olla virheitä. 


# Johdosmorfologian laatiminen


1. Ymmärtää xxxx
1. Laatia xxx


# Jatkuvaa huomiota vaativa työ


## make check
1. make check
1. tarkistaminen
1. korjaaminen
1. make check
1. ...


## Leksikon tarkistus


* Väärät sanaluokat?
* Väärät jatkoleksikot?
* Väärä vartalomuoto?






