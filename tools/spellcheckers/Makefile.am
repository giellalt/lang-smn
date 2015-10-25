## Process this file with automake to produce Makefile.in
## Copyright: Sámediggi/Divvun/UiT
## Licence: GPL v3+

# The current dir must be built first.
SUBDIRS = . fstbased listbased

#########################################
# BEGIN: Local processing
#
# Target template:
#
# generator-speller-gt-norm.hfst: generator-speller-gt-norm.tmp.hfst
#	build rules
#
# analyser-speller-gt-norm.xfst: analyser-speller-gt-norm.tmp.xfst
#	build rules

analyser%.hfst: analyser%.tmp.hfst \
			$(top_builddir)/src/filters/remove-halflong-dotbelow.hfst   \
			$(top_builddir)/src/filters/remove-letter-acute-accent.hfst \
			$(top_builddir)/src/filters/remove-hyphenation-marks.hfst   \
			$(top_builddir)/src/filters/remove-infl_deriv-borders.hfst
	$(AM_V_HXFST)$(PRINTF) "read regex                                       \
			@\"$<\"                                                          \
		.o. @\"$(top_builddir)/src/filters/remove-letter-acute-accent.hfst\" \
		.o. @\"$(top_builddir)/src/filters/remove-halflong-dotbelow.hfst\"   \
		.o. @\"$(top_builddir)/src/filters/remove-hyphenation-marks.hfst\"   \
		.o. @\"$(top_builddir)/src/filters/remove-infl_deriv-borders.hfst\"  \
		; \n\
		invert \n\
		save stack $@\n\
		quit\n" | $(HFST_XFST) -p $(VERBOSITY)

generator-speller-gt-norm.hfst: analyser-speller-gt-norm.tmp.hfst       \
			$(top_builddir)/src/filters/remove-halflong-dotbelow.hfst   \
			$(top_builddir)/src/filters/remove-letter-acute-accent.hfst
	$(AM_V_HXFST)$(PRINTF) "read regex                                   \
	@\"$<\"                                                              \
	.o. @\"$(top_builddir)/src/filters/remove-letter-acute-accent.hfst\" \
	.o. @\"$(top_builddir)/src/filters/remove-halflong-dotbelow.hfst\"   \
	;\n\
		save stack $@\n\
		quit\n" | $(HFST_XFST) $(VERBOSITY)

analyser-speller-gt-norm.xfst: analyser-speller-gt-norm.tmp.xfst        \
			$(top_builddir)/src/filters/remove-halflong-dotbelow.xfst   \
			$(top_builddir)/src/filters/remove-letter-acute-accent.xfst \
			$(top_builddir)/src/filters/remove-hyphenation-marks.xfst   \
			$(top_builddir)/src/filters/remove-infl_deriv-borders.xfst
	$(AM_V_XFST)$(PRINTF) "read regex                                        \
			@\"$<\"                                                          \
		.o. @\"$(top_builddir)/src/filters/remove-letter-acute-accent.xfst\" \
		.o. @\"$(top_builddir)/src/filters/remove-halflong-dotbelow.xfst\"   \
		.o. @\"$(top_builddir)/src/filters/remove-hyphenation-marks.xfst\"   \
		.o. @\"$(top_builddir)/src/filters/remove-infl_deriv-borders.xfst\"  \
			;\n\
		save stack $@\n\
		quit\n" | $(XFST) $(VERBOSITY)

generator-speller-gt-norm.xfst: analyser-speller-gt-norm.tmp.xfst     \
			$(top_builddir)/src/filters/remove-halflong-dotbelow.xfst  \
			$(top_builddir)/src/filters/remove-letter-acute-accent.xfst
	$(AM_V_XFST)$(PRINTF) "read regex                                        \
			@\"$<\"                                                          \
		.o. @\"$(top_builddir)/src/filters/remove-letter-acute-accent.xfst\" \
		.o. @\"$(top_builddir)/src/filters/remove-halflong-dotbelow.xfst\"   \
			;\n\
		invert net\n\
		save stack $@\n\
		quit\n" | $(XFST) $(VERBOSITY)

analyser-speller-gt-norm.foma: analyser-speller-gt-norm.tmp.foma        \
			$(top_builddir)/src/filters/remove-halflong-dotbelow.foma   \
			$(top_builddir)/src/filters/remove-letter-acute-accent.foma \
			$(top_builddir)/src/filters/remove-hyphenation-marks.foma   \
			$(top_builddir)/src/filters/remove-infl_deriv-borders.foma
	$(AM_V_XFST)$(PRINTF) "read regex                                        \
			@\"$<\"                                                          \
		.o. @\"$(top_builddir)/src/filters/remove-letter-acute-accent.foma\" \
		.o. @\"$(top_builddir)/src/filters/remove-halflong-dotbelow.foma\"   \
		.o. @\"$(top_builddir)/src/filters/remove-hyphenation-marks.foma\"   \
		.o. @\"$(top_builddir)/src/filters/remove-infl_deriv-borders.foma\"  \
			;\n\
		save stack $@\n\
		quit\n" | $(XFST) $(VERBOSITY)

generator-speller-gt-norm.foma: analyser-speller-gt-norm.tmp.foma     \
			$(top_builddir)/src/filters/remove-halflong-dotbelow.foma  \
			$(top_builddir)/src/filters/remove-letter-acute-accent.foma
	$(AM_V_XFST)$(PRINTF) "read regex                                        \
			@\"$<\"                                                          \
		.o. @\"$(top_builddir)/src/filters/remove-letter-acute-accent.foma\" \
		.o. @\"$(top_builddir)/src/filters/remove-halflong-dotbelow.foma\"   \
			;\n\
		invert net\n\
		save stack $@\n\
		quit\n" | $(XFST) $(VERBOSITY)

# END: Local processing
#########################################

include $(top_srcdir)/am-shared/tools-spellcheckers-dir-include.am
