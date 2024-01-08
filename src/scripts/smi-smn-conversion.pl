#!/usr/bin/perl -w
#
# smi-smn-conversion.pl
# Convert names in the SMI propernoun lexicon to smn.
# $Id: smi-smn-conversion.pl 91035 2014-03-24 22:56:01Z sjur $

use strict;
use utf8;
use feature 'unicode_strings';
BEGIN {
       $| = 1;
       binmode(STDIN, ':encoding(UTF-8)');
       binmode(STDOUT, ':encoding(UTF-8)');
}
use open qw( :encoding(UTF-8) :std );

while(<>) {
	# Continuation lexicon substitutions:
	s/SUND/BERN/g ;
	s/HEIM/BERN/g ;
	s/BALAK/LONDON/g ;
	s/Run^way BERN/Run^way ACCRA/g ;
	s/Friday LONDON/Friday ACCRA/g ;
	
	s/ACCRA-Y/ACCRA/g ;
	s/NYSTØ/ACCRA/g ;
	s/ACCRA-LOAN/ACCRA/g ;
	s/NIKOSIIJA/ACCRA/g ;
	s/SIJTE/ACCRA/g ;
	s/HAWAII/ACCRA/g ;
	s/PERU/ACCRA/g ;

	s/SKANIK/SULLOT/g ;
#	s/RONDANE-LOAN/BERN/g ;
	s/BETFAGE/BERN/g ;
	s/DUORTNUS/BERN/g ;
#	s/DUBAI/BERN/g ;
	s/GIRUNA/HANNOLA/g ;
	s/fkagK/K/g ;
# loanwords with compound border over identical vowels,
#	s/Hjarteelva/Hjarte-elva/g ;
#	s/Indreeide/Indre-eide/g ;
#	s/Lilleeng/Lille-eng/g ;
#	s/Simleelva/Simle-elva/g ;
	s/\+CmpNP\/None//g ;
	
# sme or other names we do not want
	s/^Ruošša\+/!ruošša+/g ;
	
# names with Inari Saami inflection
	s/^Aanaar\+/!Aanaar+/g ;
	s/^Aanaar:/!Aanaar:/g ;
	s/^Avveel\+/!Avveel+/g ;
	s/^Anssi\+/!Anssi+/g ;
	s/^Antti\+/!Antti+/g ;
	s/^Elli\+/!Elli+/g ;
	s/^Ella\+/!Ella+/g ;
	s/^Hannu\+/!Hannu+/g ;
	s/^Hetta\+/!Hetta+/g ;
	s/^Jussi\+/!Jussi+/g ;
	s/^Lappi\+/!Lappi+/g ;
	s/^Lotto\+/!Lotto+/g ;
	s/^Lyeme\+/!Lyeme+/g ;
	s/^Maarit\+/!Maarit+/g ;
	s/^Markku\+/!Markku+/g ;
	s/^Matti\+/!Matti+/g ;
	s/^Mikko\+/!Mikko+/g ;
	s/^Pertti\+/!Pertti+/g ;
	s/^Saksa\+/!Saksa+/g ;
	s/^Salla\+/!Salla+/g ;
	s/^Tanska\+/!Tanska+/g ;
	s/^Turku\+/!Turku+/g ;
	s/^Turkki\+/!Turkki+/g ;
	s/^Veikko\+/!Veikko+/g ;
	s/^Vävli\+/!Vävli+/g ;
	s/^England\+/!England+/g ;
	s/^Egypt\+/!Egypt+/g ;
	s/^World\+/!World+/g ;
	
# changing to WG inflection
	s/Valle ACCRA/Va^RVlle MOKKE/g ;
	s/Ville ACCRA/Vi4^RVlle MOKKE/g ;
	s/Maarit LONDON/Maarit MAARIT/g ;

# sme special symbols
#	s/\^//g ;
	s/tt9 /tt5 /g;
	s/dd9 /dd5 /g;
	s/á /á5 /g ; # final á would otherwise be a in smn
	s/m9/m5/g ;
	s/æ7/æ/g ;
	s/tt /tt5 /g ;
	s/mn /m5n /g ;
	s/d /d5 /g ;
	s/ll /ll5 /g ;
        s/b9 /b /g ;
        s/d9 /d /g ;
        s/e9 /e /g ;
        s/g9 /g /g ;
        s/h9 /h /g ;
        s/j9/j/g ;
        s/k9 /k /g ;
        s/m9 /m /g ;
        s/n9 /n /g ;
        s/o9 /o /g ;
        s/p9 /p /g ;
        s/r9 /r /g ;
        s/s9 /s /g ;
        s/t9 /t /g ;
        s/t9d/td/g ;
        s/z9 /z /g ;

        s/b9-/b-/g ;
        s/d9-/d-/g ;
        s/e9-/e-/g ;
        s/g9-/g-/g ;
        s/h9-/h-/g ;
        s/j9-/j-/g ;
        s/k9-/k-/g ;
        s/m9-/m-/g ;
        s/n9-/n-/g ;
        s/o9-/o-/g ;
        s/p9-/p-/g ;
        s/r9-/r-/g ;
        s/s9-/s-/g ;
        s/t9-/t-/g ;
        s/z9-/z-/g ;



	my $line = $_;

	print $line;
}

