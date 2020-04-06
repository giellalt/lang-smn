## Process this file with automake to produce Makefile.in
## Copyright: Sámediggi/Divvun/UiT
## Licence: GPL v3+

# Process subdirs first:
SUBDIRS = filters tagsets .

##################################################################
#### Specify target languages and corresponding file names:   ####
##################################################################

# Specify the list of target languages and their corresponding
# Apertium directory names in these two variables (replace und):
APERTIUM_TARGET_LANGS=sme und
APERTIUM_TARGET_LANG_NAME=apertium-und apertium-sme-smn 

##################################################################
#### Specify CG3 source files, main and included ones:        ####
##################################################################
APERTIUM_CG_SRC=disambiguation-mt-gt.cg3

APERTIUM_CG_INCLUDE_SRC=\
                introdisambiguation.cg3 \
                coredisambiguation.cg3

##################################################################
#### BEGIN: Add local processing instructions BELOW this line ####
##################################################################

# We want to make semantic tags optional for the apertium-targeted analyser:
analyser-mt-gt-desc.%.hfst: analyser-mt-gt-desc.%.tmp.hfst \
			$(top_builddir)/src/filters/make-optional-semantic-tags.hfst
	$(AM_V_FST2FST)$(HFST_FST2FST) $(HFSTFLAGS) $(HFST_FORMAT) $< -o $<.tmp
	$(AM_V_RGX2FST)$(PRINTF) "\
		@\"$(top_builddir)/src/filters/make-optional-semantic-tags.hfst\" \
   	.o. @\"$<.tmp\" \
    	;" \
		| $(HFST_REGEXP2FST) $(HFST_FLAGS) $(HFST_FORMAT) \
			-S --xerox-composition=ON \
		| hfst-compose-intersect -1 - -2 $(top_builddir)/src/orthography/spellrelax.compose.hfst \
		| $(HFST_INVERT) $(HFSTFLAGS) \
		| $(HFST_FST2FST) $(HFSTFLAGS) -t \
		-o $@
	$(AM_V_at)rm -f $<.tmp

##################################################################
#### END: Add local processing instructions ABOVE this line ######
##################################################################

####### Other targets: ###########

# cleaning
clean-local:
	-rm -f *.hfst *.gz *.cg3 *.bin *.hfstol

##########################################
# General build rules included from here:#

include $(top_srcdir)/am-shared/tools-mt-apertium-dir-include.am
