

Yaml-tiedostot ovat kolmessa hakemistossa:


* test/src/dict-gt-yamls (sanakirja-ortografialle)
* test/src/gt-norm-yamls (viralliselle ortografialle)
* test/src/gt-desc-yamls (deskriptiiviselle analyysiohjelmalle, ei vielä käytössä)


Tässä vaiheessa käytetään ainoastaan dict-gt-yamls.






# Tehtäviä


## Yaml-tiedostojen laatiminen


Jokaiselle jatkoleksikolle pitää olla oma yaml-tiedosto


## Sisällön tarkistaminen


On erittäin tärkeä, että yaml-tiedostoihin voi luottaa. Ne pitää siis tarkistaa.
Jokaisen hakemiston svn-lokissa käy ilmi, missä tilassa tiedosto on.


Tehokas tapa tarkistaa on ajaa "make check" ja katsoa FAIL-rivit. Monesti fst 
on oikeassa, ja yaml väärässä.


## Kuuluvatko paradigmat kyseiseen yaml-tiedostoon?


Jokaiselle jatkoleksikolle pitää olla oma yaml-tiedosto. Kyseessä yaml-tiedostossa
pitää vastaavasti olla vain oman jatkoleksikon sanoja. Työn aikana siirretään sanat
leksikosta toiseen, eli on tärkeä pitää yaml-tiedostot ajan tasalla. Se tehdään näin
(tässä esimerkkinä jatkoleksikko KISSA):


```
cat N-lex_kissa_dict-gt-norm.gen.yaml|grep Ess|cut -d"+" -f1|tr -d ' '|sed 's/^/^/'|sed 's/$/:/' > lista
grep -f lista ../../../src/fst/stems/nouns.lexc|grep -v KISSA
```


Ensimmäinen komento poimii kaikki perusmuodot, laittaa symboolit ^ ja : eteen ja taakse, ja
tallentaa listan tiedostoon "lista". Toinen komento poimii saman listan avulla kaikki
jatkoleksikot stems-tiedostosta. Tässä katsotaan grep -v -kommennon avulla, onko sanoja, 
jotka eivät kuulu tiedostoon.








## Dublettien poisto


Ei haluta samasta sanasta kahta paradigmaa. Dubletit löytyvät esim näillä komennolla:


```
cat test/src/dict-gt-yamls/*l|grep '+Sg+Nom'|sort|uniq -d
cat test/src/dict-gt-yamls/*l|grep '+Ess'|sort|uniq -d
``` 


Näiten komentojan vastaus pitää olla nolla ("ei dubletteja"). Dublettien pitää etsiä,
ja sitten vertailla.


* jos ne eivät ole identtisiä, niin tarkistetaan kumpi on oikein, korjaa, ja säilyttää 
  oikean
* jos ne ovat identtisia, niin poistetaan se paradigma, joka on väärässä tiedostossa)

  


```
grep immeel test/src/gt-norm-yamls/*
```


Silloin ilmestyy kaksi paradigmaa. Tarkista, että ne ovat identtisiä, ja poista
toisen.


## Leksikon parantaminen yamlin avulla


Idea on seuraava:


Jos perussana, esim. *äigi*, menee läpi yamlista, niin kaikki leksikon yhdyssanat, joiden 
viimeinen osa on *äigi*, menevät myös läpi, mikäli niiden vartalon muoto on sama kuin itse
*äigi*-sanan. Tarkistus tapahtuu esim. näin, yksi yaml-tiedosto kerrallaan:


### Kerää kaikki yaml-tiedoston sanat


```
grep Ess test/src/dict-gt-yamls/N-lex_aigi_dict-gt-norm.gen.yaml |cut -d"+" -f1|tr -d ' '|sed 's/$/:/'|sed 's/^/^/' > basewords
grep -f basewords src/fst/stems/nouns.lexc |grep -v AIGI
grep -f basewords src/fst/stems/nouns.lexc |cut -d " " -f1|sort|see
```

  
Ensimmäinen komento kerää kaikki sanat. Toinen tarkistaa, että kaikki kuuluvat samaan leksikkoon, ja kolmas antaa jokaisen sanan vartalon.


### Kerää kaikki sanat, joilla on yaml-tiedoston sanat viimeisenä osana


```
grep Ess test/src/dict-gt-yamls/N-lex_aigi_dict-gt-norm.gen.yaml |cut -d"+" -f1|tr -d ' '|sed 's/$/:/' > allwords
grep -f allwords src/fst/stems/nouns.lexc |grep -v AIGI
grep -f allwords src/fst/stems/nouns.lexc |cut -d " " -f1|rev|sort|rev|see
```


Ensimmäinen komento kerää kaikki yaml-tiedoston sanat, mutta tällä kertaa ilman ^-merkkiä. 
Näin saadaan kaikki sanat, jotka **loppuvat** yaml-tiedoston sanoihin. Toinen komento
tarkistaa, onko muu leksikko kuin yaml-tiedoston leksikko käytössä (tässä: AIGI). 
Kolmas komento listaa kaikki sanat, mutta käänteisjärjestyksessä. Näin on helpompaa tarkistaa,
että kaikki vartalot ovat samanlaisia.


### Korjaa mahdolliset virheet


Jos joku vartalo poikkeaa yaml-tiedoston vartalosta, sen on korjattava, 
**mutta stems/nouns.lexc-tiedostossa**, eikä näissä generoiduissa tiedostoissa.


Muista kääntää (kirjoittamalla "make") ennen sisääntsekkausta, varmistakseesi, ettei mitään 
ole mennyt teknisesti pieleen.


### Seuraava yaml-tiedosto


Samat komennot toimivat myös seuraavalle yaml-tiedostolle, kun vaan muistaa laittaa
uusi tiedostonnimi ja uusi leksikonnimi (alga, ALGA, ... jne).
Kirjoittamalla "> allwords" luodaan uusi allwords-tiedosto, ja vanhat sanat ovat sitten poissa.




