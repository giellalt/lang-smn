#!/usr/bin/perl -w

#
# convert-dict-yaml-to-norm-yaml.pl
# 
# usage:
# cat test/src/dict-gt-yamls/N-subst-2tav-a_dict-gt-norm.gen.yaml |perl src/scripts/convert-dict-yaml-to-norm-yaml.pl |l

use strict;
use utf8;

while(<>) {
	s/generator-dict-gt/generator-gt/g ;
	s/ˊ//g ; # remove accent letter
	s/̣//g ;  # remove half-long dot


	print ;
}

