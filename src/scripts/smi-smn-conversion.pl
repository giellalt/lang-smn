#!/usr/bin/perl -w
#
# smi-sma-conversion.pl
# Convert names in the SMI propernoun lexicon to smn.
# $Id: smi-sma-conversion.pl 91035 2014-03-24 22:56:01Z sjur $

use strict;
use utf8;

while(<>) {
	# Continuation lexicon substitutions:
#	s/ C-FI-NEN/nen LONDON/g ;
	s/SUND/BERN/g ;
	s/HEIM/BERN/g ;
	s/NIKOSIIJA/ACCRA/g ;
	s/SIJTE/ACCRA/g ;
	s/BALAK/ANAR/g ;
	s/HAWAII/ACCRA/g ;
	s/SKANIK/SULLOT/g ;
	s/RONDANE-LOAN/BERN/g ;
	s/BETFAGE/BERN/g ;
	s/DUORTNUS/BERN/g ;
#	s/DUBAI/BERN/g ;
	s/BETFAGE/BERN/g ;
	s/fkagK/K/g ;


	s/\^//g ;
	s/b9/b/g ;
	s/e9/e/g ;
	s/d9/d/g ;
	s/g9/g/g ;
	s/h9/h/g ;
	s/j9/j/g ;
	s/k9/k/g ;
	s/m9/m5/g ;
	s/n9/n/g ;
	s/p9/p/g ;
	s/r9/r/g ;
	s/s9/s/g ;
	s/t9/t/g ;
	s/z9/z/g ;
	s/æ9/æ/g ;
	s/7 / /g ;
	s/8 / /g ;
	s/tt /tt5 /g ;
	s/mn /m5n /g ;
	s/9 / /g ;

	# SMJ escape char insertion:
#	s/ss /ss9 /g ;
#	s/st /st9 /g ;

	# Substitutions due to orthographic differences between SMJ and SME:
#	s/čč/ttj/g ;
	# Andreevič -> Andreevitj:
#	s/č/tj/g ;

	my $line = $_;

	print $line;
}

