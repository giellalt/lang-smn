#!/usr/bin/env perl -w

use utf8;

# TSV fields to convert:
# SgNom	SgGen	SgIll	SgLoc	SgCom	SgAbe	Ess	PlNom	PlGen	PlAcc	PlIll	PlLoc	PlCom	PlAbe					

# Variable definitions:
my $Vow = "aâáeiouyäö";
my $UCVow = "AÂÁEIOUYÄÖ";
my $Cns = "bcčdđfghjklmnŋprsštvz";
my $UCCns = "BCČDĐFGHJKLMNŊPRSŠTVZ";

# gt-norm or dict-gt-norm? Default is dict:
my $gtnorm = "";

# Print yaml header:
print "Config:\n";
print "  hfst:\n";
print "    Gen: ../../../src/generator-dict-gt-norm.hfst\n";
print "    Morph: ../../../src/analyser-dict-gt-norm.hfst\n";
print "  xerox:\n";
print "    Gen: ../../../src/generator-dict-gt-norm.xfst\n";
print "    Morph: ../../../src/analyser-dict-gt-norm.xfst\n";
print "\n";
print "Tests:\n";

while (<>) {
    chomp;
    ### Convert upper case letters as follows: ###
    # V -> vˊ || ~V _ C:
    s/([^$UCVow])([$UCVow])([$Cns$UCCns])/$1\l$2ˊ$3/g;
    # V1 V2 -> v1 v2:
    s/([$UCVow])([$UCVow])/\l$1\l$2/g;
    # C -> c || v i _ v:
    s/([$Vow]i)([$UCCns])([$Vow])/$1\l$2$3/g;
    # C -> c̣ || [ v-i ] _ v:
    s/([$Vow])([$UCCns])([$Vow])/$1\l$2̣$3/g;
    # C -> cˊ || v _ c:
    s/([$Vow])([$UCCns])([$Cns])/$1\l$2ˊ$3/g;
    # C -> c:
    s/([$UCCns])/\l$1/g;

    # If we convert for gtnorm, remove dot under and apostrophe:
    s/[ˊ̣]//g if $gtnorm ne "";

    # Split the input string in the relevant fields:
    (my $SgNom, $SgGen, $SgIll, $SgLoc, $SgCom, $SgAbe, $Ess, $PlNom,
        $PlGen, $PlAcc, $PlIll, $PlLoc, $PlCom, $PlAbe, $rest) =
        split /\t/ ;
    (my $lemma = $SgNom ) =~ s/[ˊ̣]//g ;
    $rest = "";
    print "  Noun - $lemma:\n";
    print "    $lemma+N+Sg+Nom:   $SgNom\n";
    print "    $lemma+N+Sg+Gen:   $SgGen\n";
    print "    $lemma+N+Sg+Ill:   $SgIll\n";
    print "    $lemma+N+Sg+Loc:   $SgLoc\n";
    print "    $lemma+N+Sg+Com:   $SgCom\n";
    if ( $SgAbe =~ / / ) {
        $SgAbe =~ s/ /, /g;
        print "    $lemma+N+Sg+Abe:  [$SgAbe]\n";
    } else {
        print "    $lemma+N+Sg+Abe:   $SgAbe\n";
    }
    print "    $lemma+N+Ess:      $Ess\n";
    print "    $lemma+N+Pl+Nom:   $PlNom\n";
    if ( $PlGen =~ / / ) {
        $PlGen =~ s/ /, /g;
        print "    $lemma+N+Pl+Gen:  [$PlGen]\n";
    } else {
        print "    $lemma+N+Pl+Gen:   $PlGen\n";
    }
    print "    $lemma+N+Pl+Acc:   $PlAcc\n";
    print "    $lemma+N+Pl+Ill:   $PlIll\n";
    print "    $lemma+N+Pl+Loc:   $PlLoc\n";
    print "    $lemma+N+Pl+Com:   $PlCom\n";
    print "    $lemma+N+Pl+Abe:   $PlAbe\n";
    print "\n";
}
