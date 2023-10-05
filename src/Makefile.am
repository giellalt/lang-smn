## Process this file with automake to produce Makefile.in
## Copyright: Sámediggi/Divvun/UiT
## Licence: GPL v3+

# always build . last here, and tagsets have to be built after morphology
SUBDIRS = fst filters phonetics hyphenation orthography cg3 transcriptions tagsets .

####### Automake targets: ########

# Define target variables first, before assigning to them:
GT_ANALYSERS=
GT_GENERATORS=
CUSTOM_FSTS=

#### Local modifications in *fst processing: ####
####
#### Copy the fallback targets, and rename them to the desired targets. Then:
#### Replace the 'cp' command (Xerox) / Prepend the hfst-invert command (Hfst -
#### remember to move the $<) with whatever you need to complete
#### the processing to get the final target transducer.
#### Remember to add the dependencies as well.
#### Also make sure that HFST and Xerox processing are the same.
####
#### If you add new transducers to be built, you need to add them to the
#### relevant variable, e.g.:
####
#### if CAN_HFST
#### GT_GENERATORS+=generator-oahpa-gt-norm.hfst
#### endif
####
#### NB!!!! The HFST targets should get a hyphen after 'analyser'/'generator'
#### respectively, to make the local targets minimally different from and
#### slightly more specific than the fallback targets. This is to avoid warnings
#### about duplicate targets. That is, the local targets should looke like:
####
#### analyser-%.hfst: analyser-%.tmp.hfst
#### generator-%.hfst: generator-%.tmp.hfst

##################################################################
#### BEGIN: Add local processing instructions BELOW this line ####
##################################################################

########################################################
#### Add language-specific transducer targets here: ####

#### Xerox transducers:
if CAN_XFST
GT_ANALYSERS+=
GT_GENERATORS+=

if WANT_CUSTOM_FSTS
CUSTOM_FSTS+=
endif # WANT_CUSTOM_FSTS

endif # CAN_XFST

#### HFST transducers
if CAN_HFST
GT_ANALYSERS+=
GT_GENERATORS+=

if WANT_CUSTOM_FSTS
CUSTOM_FSTS+=
endif # WANT_CUSTOM_FSTS

endif # CAN_HFST

#### FOMA transducers
if CAN_FOMA
GT_ANALYSERS+=
GT_GENERATORS+=

if WANT_CUSTOM_FSTS
CUSTOM_FSTS+=
endif # WANT_CUSTOM_FSTS

endif # CAN_FOMA

#################################################
#### Add language-specific build rules here: ####


# Hfst - add weights to compounds if using tropical-semiring fst format:
if WITH_OFST_TROPICAL
generator-raw-gt-desc.hfst: generator-raw-gt-desc.tmp.hfst
	$(AM_V_REWEIGHT)$(HFST_REWEIGHT) $(MORE_VERBOSITY) $(HFST_FLAGS) \
			-S '+Cmp' -a 10 --arcs-only -i $< \
		> $@
endif


# We need to specify -gt- to avoid applying the filters to the raw fst:
analyser-gt-desc.hfst \
analyser-gt-desc.foma \
analyser-gt-desc.xfst: \
analyser-gt-desc.%: analyser-gt-desc.tmp.%                    \
					filters/remove-derivation-position-tags.% \
					filters/remove-norm-comp-tags.% \
					filters/remove-usage-tags.%
	$(AM_V_XFST_TOOL)$(PRINTF) "read regex \
				@\"filters/remove-usage-tags.$*\"               \
			.o. @\"filters/remove-derivation-position-tags.$*\" \
			.o. @\"filters/remove-norm-comp-tags.$*\"           \
			.o. @\"$<\"                                         \
			;\n\
		 $(INVERT_HFST)\
		 save stack $@\n\
		 quit\n" | $(XFST_TOOL)

# And also for the normative analyser (foma and hfst):
analyser-gt-norm.hfst\
analyser-gt-norm.foma \
analyser-gt-norm.xfst: \
analyser-gt-norm.%: analyser-gt-norm.tmp.% \
					filters/remove-illegal-derivation-strings-flagbased.%  \
					filters/remove-MinusSpell-strings.%                    \
					filters/insert-default-compounding-tags.%              \
					filters/insert-default_left_compounding-tags.%         \
					filters/block-illegal_compound-strings.%               \
					filters/split-CmpN-tags.%                              \
					filters/convert_to_flags-CmpNP-tags.%                  \
					filters/split-CmpNP-tags.% \
					filters/remove-usage-tags.%
	$(AM_V_XFST_TOOL)$(PRINTF) "read regex \
				@\"filters/remove-usage-tags.$*\"               \
			.o. @\"filters/block-illegal_compound-strings.$*\"              \
			.o. @\"filters/split-CmpN-tags.$*\"                             \
			.o. @\"filters/insert-default_left_compounding-tags.$*\"        \
			.o. @\"filters/insert-default-compounding-tags.$*\"             \
			.o. @\"filters/remove-illegal-derivation-strings-flagbased.$*\" \
			.o. @\"filters/convert_to_flags-CmpNP-tags.$*\"                 \
			.o. @\"filters/split-CmpNP-tags.$*\"                            \
			.o. @\"filters/remove-MinusSpell-strings.$*\"                   \
			.o. @\"$<\"                                                     \
			;\n\
		 twosided flag-diacritics\n\
		 $(INVERT_HFST)\
		 save stack $@\n\
		 quit\n" | $(XFST_TOOL)

# The operation 'twosided flag-diacritics" crashes Xerox badly, so we do with
# a simpler, less restrictive normative fst when building with Xerox:
analyser-gt-norm.xfst: analyser-gt-norm.tmp.xfst \
					filters/remove-norm-comp-tags.xfst             \
					filters/remove-derivation-position-tags.xfst   \
					filters/remove-illegal-derivation-strings.xfst \
					filters/remove-usage-tags.xfst
	$(AM_V_XFST)$(PRINTF) "read regex \
				@\"filters/remove-usage-tags.xfst\"                    \
			.o. @\"filters/remove-norm-comp-tags.xfst\"                \
			.o. @\"filters/remove-derivation-position-tags.xfst\"      \
			.o. @\"filters/remove-illegal-derivation-strings.xfst\"    \
			.o. @\"$<\"                                                \
			;\n\
		 save stack $@\n\
		 quit\n" | $(XFST) $(VERBOSITY)





# Special case for the disamb analyser, since it follows the same filename
# pattern as the raw fst:
analyser-pmatchdisamb-gt-desc.hfst: analyser-pmatchdisamb-gt-desc.tmp.hfst      \
					filters/remove-orig_lang-tags.hfst           \
					filters/remove-derivation-position-tags.hfst \
					filters/remove-homonymy-tags.hfst            \
					filters/remove-norm-comp-tags.hfst           \
					filters/rename-POS_before_Der-tags.hfst      \
					filters/remove-usage-tags.hfst
	$(AM_V_XFST)$(PRINTF) "read regex                             \
				@\"filters/remove-usage-tags.hfst\"               \
			.o. @\"filters/remove-derivation-position-tags.hfst\" \
			.o. @\"filters/remove-orig_lang-tags.hfst\"           \
			.o. @\"filters/remove-homonymy-tags.hfst\"            \
			.o. @\"filters/remove-norm-comp-tags.hfst\"           \
			.o. @\"filters/rename-POS_before_Der-tags.hfst\"      \
			.o. @\"$<\"                                           \
			;\n\
		 $(INVERT_HFST)\
		 save stack $@\n\
		 quit\n" | $(HFST_XFST) -p $(MORE_VERBOSITY)




# Special case for the disamb analyser, since it follows the same filename
# pattern as the raw fst:
analyser-disamb-gt-desc.hfst\
analyser-disamb-gt-desc.foma\
analyser-disamb-gt-desc.xfst:\
analyser-disamb-gt-desc.%: analyser-disamb-gt-desc.tmp.%      \
					filters/remove-orig_lang-tags.%           \
					filters/remove-derivation-position-tags.% \
					filters/remove-homonymy-tags.%            \
					filters/remove-norm-comp-tags.%           \
					filters/rename-POS_before_Der-tags.%      \
					filters/remove-usage-tags.%
	$(AM_V_XFST)$(PRINTF) "read regex                           \
				@\"filters/remove-usage-tags.$*\"               \
			.o. @\"filters/remove-derivation-position-tags.$*\" \
			.o. @\"filters/remove-orig_lang-tags.$*\"           \
			.o. @\"filters/remove-homonymy-tags.$*\"            \
			.o. @\"filters/remove-norm-comp-tags.$*\"           \
			.o. @\"filters/rename-POS_before_Der-tags.$*\"      \
			.o. @\"$<\"                                         \
			;\n\
		 $(INVERT_HFST)\
		 save stack $@\n\
		 quit\n" | $(XFST_TOOL)

# The HFST Grammar Checker analyser (keep the Err/SpaceCmp strings):
analyser-gramcheck-gt-desc.hfst: analyser-gramcheck-gt-desc.tmp.hfst \
				filters/remove-dialect-tags.hfst             \
				filters/remove-norm-comp-tags.hfst           \
				filters/remove-derivation-position-tags.hfst \
				filters/rename-POS_before_Der-tags.hfst      \
				filters/remove-word-boundary.hfst            \
				filters/remove-usage-tags.hfst               \
				orthography/spellrelax-with-flagtags.compose.hfst
	$(AM_V_HXFST)$(PRINTF) "\
	set encode-weights ON\n\
	read regex \
			@\"filters/remove-usage-tags.hfst\"               \
		.o. @\"filters/remove-dialect-tags.hfst\"             \
		.o. @\"filters/remove-norm-comp-tags.hfst\"           \
		.o. @\"filters/remove-derivation-position-tags.hfst\" \
		.o. @\"filters/rename-POS_before_Der-tags.hfst\"      \
		.o. @\"$<\"                                           \
		.o. @\"orthography/spellrelax-with-flagtags.compose.hfst\" \
		.o. @\"filters/remove-word-boundary.hfst\"            \
		;\n\
	twosided flag-diacritics\n\
	invert net\n\
	save stack $@\n\
	quit\n" | $(HFST_XFST) -p $(MORE_VERBOSITY)

# This filter should either be removed or rewritten: halflong below etc is out
# Special case for the dict analyser, since it follows the same filename
# pattern as the raw fst:
analyser-dict-gt-desc.hfst\
analyser-dict-gt-desc.foma\
analyser-dict-gt-desc.xfst:\
analyser-dict-gt-desc.%: analyser-dict-gt-desc.tmp.% \
					filters/remove-norm-comp-tags.%           \
					filters/remove-derivation-position-tags.% \
					filters/remove-usage-tags.%
	$(AM_V_XFST)$(PRINTF) "read regex                           \
				@\"filters/remove-usage-tags.$*\"               \
			.o. @\"filters/remove-norm-comp-tags.$*\"           \
			.o. @\"filters/remove-derivation-position-tags.$*\" \
			.o. @\"$<\"                                         \
			;\n\
		 $(INVERT_HFST)\
		 save stack $@\n\
		 quit\n" | $(XFST_TOOL)

# We need to add processing of language-specific tags in the generator:
# We need to specify -gt- to avoid applying the filters to the raw fst:
define giella_generators
generator-gt-%.$(1): generator-gt-%.tmp.$(1)                     \
					filters/remove-norm-comp-tags.$(1)           \
					filters/remove-derivation-position-tags.$(1) \
					filters/make-optional-lang_hom-tags.$(1)     \
					filters/remove-usage-tags.$(1)
	$$(AM_V_XFST_TOOL)$$(PRINTF) "read regex                      \
				@\"filters/remove-usage-tags.$(1)\"               \
			.o. @\"filters/make-optional-lang_hom-tags.$(1)\"     \
			.o. @\"filters/remove-norm-comp-tags.$(1)\"           \
			.o. @\"filters/remove-derivation-position-tags.$(1)\" \
			.o. @\"$$<\"                                          \
			;\n\
		 $$(INVERT_XFST)$$(INVERT_FOMA)\
		 save stack $$@\n\
		 quit\n" | $$(XFST_TOOL)
endef
$(foreach fst,hfst xfst foma,$(eval $(call giella_generators,$(fst))))

# Do NOT apply the accent removal filters to the normative
# dictionary generator (both hfst and xfst):
generator-dict-gt-norm.hfst\
generator-dict-gt-norm.foma\
generator-dict-gt-norm.xfst: \
generator-dict-gt-norm.%: generator-dict-gt-norm.tmp.% \
					filters/remove-norm-comp-tags.%           \
					filters/remove-derivation-position-tags.% \
					filters/make-optional-variant-tags.%      \
					filters/remove-usage_except_NGminip-tags.%
	$(AM_V_XFST_TOOL)$(PRINTF) "read regex \
			    @\"filters/remove-usage_except_NGminip-tags.$*\"               \
			.o. @\"filters/remove-derivation-position-tags.$*\" \
			.o. @\"filters/remove-norm-comp-tags.$*\"           \
			.o. @\"filters/make-optional-variant-tags.$*\"      \
			.o. @\"$<\"                                         \
			;\n\
		 $(INVERT_XFST)$(INVERT_FOMA)\
		 save stack $@\n\
		 quit\n" | $(XFST_TOOL)

# Also the HFST Grammar Checker generator needs special treatment:
generator-gramcheck-gt-norm.hfst: generator-gramcheck-gt-norm.tmp.hfst \
				filters/remove-norm-comp-tags.hfst           \
				filters/remove-derivation-position-tags.hfst \
				filters/make-optional-grammatical-tags.hfst  \
				filters/rename-POS_before_Der-tags.hfst      \
				filters/insert-default-compounding-tags.hfst \
				filters/insert-default_left_compounding-tags.hfst \
				filters/block-illegal_compound-strings.hfst  \
				filters/split-CmpN-tags.hfst                 \
				filters/convert_to_flags-CmpNP-tags.hfst     \
				filters/split-CmpNP-tags.hfst                \
				filters/remove-usage-tags.hfst
	$(AM_V_HXFST)$(PRINTF) "\
	set encode-weights ON\n\
	read regex \
			@\"filters/remove-usage-tags.hfst\"               \
		.o. @\"filters/remove-norm-comp-tags.hfst\"           \
		.o. @\"filters/remove-derivation-position-tags.hfst\" \
		.o. @\"filters/make-optional-grammatical-tags.hfst\"  \
		.o. @\"filters/rename-POS_before_Der-tags.hfst\"      \
		.o. @\"filters/block-illegal_compound-strings.hfst\"         \
		.o. @\"filters/split-CmpN-tags.hfst\"                        \
		.o. @\"filters/insert-default_left_compounding-tags.hfst\"   \
		.o. @\"filters/insert-default-compounding-tags.hfst\"        \
		.o. @\"filters/remove-illegal-derivation-strings-flagbased.hfst\" \
		.o. @\"filters/convert_to_flags-CmpNP-tags.hfst\"            \
		.o. @\"filters/split-CmpNP-tags.hfst\"                       \
		.o. @\"$<\"                                           \
		;\n\
	twosided flag-diacritics\n\
	save stack $@\n\
	quit\n" | $(HFST_XFST) -p $(MORE_VERBOSITY)

##################################################################
#### END: Add local processing instructions ABOVE this line ######
##################################################################

include $(top_srcdir)/../giella-core/am-shared/src-dir-include.am
