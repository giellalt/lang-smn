

Tässä on lista analysaattorin työtehtävistä ja niiden sisäisistä
riippuvuuksista. Jokainen numeroitu listä on riippumaton muista
listoista.  Jokaisen listan kohdat ovat riippuvaisia toisistaan, niin
että tehtävät ovat järjestyksessä




# Testaustiedostot


* [Tarkistaa substantiivien yaml-tiedostot](TarkistaaYaml-tiedostot.html)
* Kirjoitta yaml-tiedostoja verbeihin




# Lemmat


## Korjata substantiivien lemmalistat


Nyt suurin osaa yamltiedostoista menee läpi. Se tarkoittaa,
että yaml-paradigmat jotka menevät läpi, voivat toimia 
mallivartaloina myös lemmalistan stems/nouns.lexc muille 
vartaloille.


* tee make check
* ota leksikko, joka toimii, esim. EEMEED
* ota kaikki EEMEED-tapaukset stems-tiedostosta
    -  `grep EEMEED src/fst/stems/nouns.lexc|see`
* tarkista, että niiden vartalo on samanlainen kuin esimerkkisanojen vartalot
* jos ei, katso toimiiko
* katso stems/nouns.lexc
* jokainen yamlissa toimiva sana voi toimia mallina muille
  sanoille, esim yhdyssanoille. 

  
### nounstems-sanojen klassifiointi


Tänään on 1983 nounstems. Jokaiselle pitää antaa oikea contlex.


### Muotojen tarkistaminen


Seuraavat kaksi esimerkkikomento antaa kaikki lokatiivit, jotka eivät toimi, 
ja POTTAAK-leksikon kaikki monikon abessiivit.


```
cat src/fst/stems/nouns.lexc | grep ";"| cut -d ';' -f1 | grep -v PUUVSAH|cut -d":" -f1|sed 's/$/+N+Sg+Loc/'|dsmnDict|grep '?'
cat src/fst/stems/nouns.lexc |  grep ";"| cut -d ';' -f1 | grep "POTTAAK"|cut -d":" -f1|sed 's/$/+N+Pl+Abe/'|dsmnDict
```


## Korjata puuttuvat nominatiivit


Komento `make check` antaa listan substantiiveista, joille emme 
pysty generoimaan nominatiivia
(`test/src/fst/missing_nouns_lemmas.xfst.txt `) ja
muodot, jotka saadaan yrittäessä.
(`test/src/fst/generated-nouns.xfst.txt`)
Tavoite: Tänään puutuu 98 nominatiivia, luku pitää olla 0.


## Suljetut luokat, joilla morfologia

 
1. Lisätä puuttuvat pronominit + sijapäätteet


## Suljetut luokat, joilla ei ole morfologiaa

 
1. Lisätä puuttuvat sanat sanakirjasta analysaattoriin.
    1. adverbit, subjunktiot, postpositiot, jne.


## Lyhyet sanat missing-listasta


Tiedostosta `smn/misc/missing_shortwords.freq`
löytyy lyhyet sanat, järjestetty taajuuden mukaan. Ne 
voi olla suljettujen luokien edustajia, ne pitää




# Taivutusmorfologia




## Omistusliitteet


Nämä voidaan nyt lisätä. Ks. 






## Verbit


Parittomat ensin, sitten parilliset.


## Adjektiivit


Odottavat substantiiveja.


# Johdosmorfologian tekeminen


1. Ymmärtää
1. Laatia


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





