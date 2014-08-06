## Process this file with automake to produce Makefile.in

## Copyright (C) 2011 Samediggi

## This program is free software: you can redistribute it and/or modify
## it under the terms of the GNU General Public License as published by
## the Free Software Foundation, either version 3 of the License, or
## (at your option) any later version.

## This program is distributed in the hope that it will be useful,
## but WITHOUT ANY WARRANTY; without even the implied warranty of
## MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
## GNU General Public License for more details.

## You should have received a copy of the GNU General Public License
## along with this program.  If not, see <http://www.gnu.org/licenses/>.

# Set this to name of lexc file containing Multichar_Symbols and LEXICON Root
GT_LEXC_ROOT=root.lexc

# Set this to the names of all other source lexc files
GT_LEXC_SRCS=\
			clitics.lexc			   \
			root.lexc				   \
			affixes/nouns.lexc		   \
			affixes/propernouns.lexc   \
			affixes/verbs.lexc		   \
			stems/adpositions.lexc	   \
			stems/adverbs.lexc		   \
			stems/conjunctions.lexc	   \
			stems/interjections.lexc   \
			stems/nouns.lexc		   \
			stems/numerals.lexc		   \
			stems/particles.lexc	   \
			stems/pronouns.lexc		   \
			stems/punctuation.lexc	   \
			stems/subjunctions.lexc	   \
			stems/verbs.lexc

# Set this to the names of all generated lexc files, if any
GENERATED_LEXC_SRCS=generated_files/smi-$(GTLANG)-propernouns.lexc

# Set this to the names of all source xml files, if any
GT_XML_SRCS=

generated_files/smi-propernouns.lexc: \
			$(GTCORE)/gtdshared/smi/src/morphology/stems/smi-propernouns.lexc
	$(AM_V_GEN)cp -f $< $@

generated_files/smi-$(GTLANG)-propernouns.lexc: \
		generated_files/smi-propernouns.lexc \
		$(srcdir)/stems/$(GTLANG)-propernouns.lexc
	$(AM_V_GEN)rm -f $@ && \
	cp -f $(srcdir)/stems/$(GTLANG)-propernouns.lexc $@ && \
	echo "" >> $@ && \
	echo "! <--- Dump from SMI -->" >> $@ && \
	echo "" >> $@ && \
	$(top_srcdir)/src/scripts/smi-$(GTLANG)-conversion.pl $< >> $@

include $(top_srcdir)/am-shared/src-morphology-dir-include.am

# vim: set ft=automake:
