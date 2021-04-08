

Tässä on lista analysaattorin työtehtävistä ja niiden sisäisistä
riippuvuuksista. Jokainen numeroitu lista on riippumaton muista
listoista.  Jokaisen listan kohdat ovat riippuvaisia toisistaan, niin
että tehtävät ovat järjestyksessä




# Testaustiedostot


* Muista 0-yaml! Ylläpidä sitä!!



# Lemmat


## Avointen sanaluokkien - Substantiivien, verbien ja adjektiivien - lemmalistojen korjaus


Yaml-paradigmat voivat toimia mallivartaloina myös lemmalistan stems/nouns.lexc muille vartaloille.


* Valitse toimiva leksikko, esim. EEMEED
* Valitse kaikki EEMEED-tapaukset stems-tiedostosta
    -  `grep EEMEED src/fst/stems/nouns.lexc|see`
* Tarkista, että niiden vartalo on samanlainen kuin esimerkkisanojen vartalot
* jos ei, tarkista, toimiiko sana
* katso stems/nouns.lexc
* jokainen yamlissa toimiva sana voi toimia mallina muille
  sanoille, esim yhdyssanoille. 

  
### nounstems-sanojen klassifiointi


Jokaiselle sanalle täytyy antaa oikea contlex.


### Muotojen tarkistaminen


Seuraavilla kahdella esimerkkikomennolla saadaan kaikki toimimattomat lokatiivimuodot, ja POTTAAK-leksikon kaikki monikon abessiivimuodot.


```
cat src/fst/stems/nouns.lexc | grep ";"| cut -d ';' -f1 | grep -v PUUVSAH|cut -d":" -f1|sed 's/$/+N+Sg+Loc/'|dsmnDict|grep '?'
cat src/fst/stems/nouns.lexc |  grep ";"| cut -d ';' -f1 | grep "POTTAAK"|cut -d":" -f1|sed 's/$/+N+Pl+Abe/'|dsmnDict
```


## Puuttuvien nominatiivien muodot


Komento `make check` antaa listan substantiiveista, joille ei 
voi generoida nominatiivia
(`test/src/fst/missing_nouns_lemmas.xfst.txt `) ja
muodot, jotka saadaan nominatiivia generoitaessa.
(`test/src/fst/generated-nouns.xfst.txt`)



# Taivutusmorfologia




## Omistusliitteet


Nämä voidaan nyt lisätä. Ks. 






## Verbit



## Adjektiivit



# Johdosmorfologian tekeminen


1. Ymmärtää xxxx
1. Laatia xxx


# Jatkuva työ


## make check
1. make check
1. tarkistaminen
1. korjaaminen
1. make check
1. ...


## Tarkistaa leksikko


* Väärät sanaluokat?
* Väärät jatkoleksikot?
* Väärä vartalomuoto?






