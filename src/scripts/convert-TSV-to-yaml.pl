#!/usr/bin/env perl -w

use utf8;
use feature 'unicode_strings';
BEGIN {
       $| = 1;
       binmode(STDIN, ':encoding(UTF-8)');
       binmode(STDOUT, ':encoding(UTF-8)');
}
use open qw( :encoding(UTF-8) :std );

# TSV fields to convert:
# SgNom	SgGen	SgIll	SgLoc	SgCom	SgAbe	Ess	PlNom	PlGen	PlAcc	PlIll	PlLoc	PlCom	PlAbe					

# Variable definitions:
my $Vow = "aâáeiouyäö";
my $UCVow = "AÂÁEIOUYÄÖ";
my $Cns = "bcčdđfghjklmnŋprsštvz";
my $UCCns = "BCČDĐFGHJKLMNŊPRSŠTVZ";

# gt-norm or dict-gt-norm? Default is dict:
my $gtnorm = "";

my $fst="dict-gt-norm";
$fst = "gt-norm" if $gtnorm ne "";

my @WordForms = ("+Sg+Nom",
                 "+Sg+Gen",
                 "+Sg+Ill",
                 "+Sg+Loc",
                 "+Sg+Com",
                 "+Sg+Abe",
                    "+Ess",
                 "+Pl+Nom",
                 "+Pl+Gen",
                 "+Pl+Acc",
                 "+Pl+Ill",
                 "+Pl+Loc",
                 "+Pl+Com",
                 "+Pl+Abe");

# Print yaml header:
print "Config:\n";
print "  hfst:\n";
print "    Gen: ../../../src/generator-$fst.hfst\n";
print "    Morph: ../../../src/analyser-$fst.hfst\n";
print "  xerox:\n";
print "    Gen: ../../../src/generator-$fst.xfst\n";
print "    Morph: ../../../src/analyser-$fst.xfst\n";
print "\n";
print "Tests:\n";

while (<>) {
    chomp;
    ### Convert upper case letters as follows: ###
    # V -> vˊ || ~V _ C:
    s/([^$UCVow])([$UCVow])([i$Cns$UCCns])/$1\l$2ˊ$3/g;
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
    my @testentries = split /\t/ ;
    # Get the lemma from the first field:
    (my $lemma = $testentries[0]) =~ s/[ˊ̣]//g ;
    # ... but if it is empty, get it from PlNom instead:
    if ( $lemma eq "" ) {
        ($lemma = $testentries[7]) =~ s/[ˊ̣]//g ;
    }
    print "  Noun - $lemma:\n";
    for my $i (0 .. $#WordForms) {
        if ( $testentries[$i] eq "" ) {
            next;
        }
        elsif ( $testentries[$i] =~ / / ) {
            $testentries[$i] =~ s/ /, /g;
            print "    $lemma+N$WordForms[$i]: [$testentries[$i]]\n";
        } else {
            print "    $lemma+N$WordForms[$i]:  $testentries[$i]\n";
        }
    }
    print "\n";
}
