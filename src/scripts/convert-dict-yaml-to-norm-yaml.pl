#!/usr/bin/perl -w

#
# convert-dict-yaml-to-norm-yaml.pl
# 
# usage:
# cat test/src/dict-gt-yamls/N-subst-2tav-a_dict-gt-norm.gen.yaml |perl src/scripts/convert-dict-yaml-to-norm-yaml.pl |l

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
	s/generator-dict-gt/generator-gt/g ;
	s/analyser-dict-gt/analyser-gt/g ;
	s/ˊ//g ; # remove accent letter
	s/̣//g ;  # remove half-long dot


	print ;
}

