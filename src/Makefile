# This is a makefile that builds the Inari Sami morphological parser
# *****************************************************************


# Here we build the final generator , an inverted transducer of the analyzer.
# It is dependent upon smn.save

ismn.fst: smn.fst
	@echo
	@echo "*** Building the inverse ismn.fst ***"
	@echo
	@printf "load smn.save \n\
	invert net \n\
	save stack ismn.fst \n\
	quit \n" > /tmp/ismn-fst-script
	@xfst < /tmp/ismn-fst-script
	@rm -f /tmp/ismn-fst-script


# This goal is to build the final analyser. It depends on all the files.

smn.fst: smn.save caseconv.fst tok.fst
	@echo
	@echo "*** Building smn.fst ***" ;
	@echo
	@printf "read regex @\"smn.save\" .o. @\"caseconv.fst\"  ; \n\
	save stack smn.fst \n\
	quit \n" > /tmp/smn-fst-script
	@xfst < /tmp/smn-fst-script
	@rm -f /tmp/smn-fst-script


# The second goal is to build the caseconv.fst file
# This goal depends on case.regex

caseconv.fst: case.regex
	@echo
	@echo "*** Building caseconv.fst ***" ;
	@echo
	@printf "read regex < case.regex \n\
	save stack caseconv.fst \n\
	quit \n" > /tmp/caseconv-script
	@xfst < /tmp/caseconv-script
	@rm -f /tmp/caseconv-script


# Another goal is to build a preprocessor.This goal depends on tok.txt

tok.fst: tok.txt
	@echo
	@echo "*** Building the tokenizer tok.fst ***" ;
	@echo
	@printf "source tok.txt \n\
	save stack tok.fst \n\
	quit \n" > /tmp/tok-script
	@xfst < /tmp/tok-script
	@rm -f /tmp/tok-script


# The first goal is to build smn.save
# This goal depends on twol-smn.bin and a bunch of lexicon files

smn.save: twol-smn.bin smn-lex.txt noun-smn-lex.txt adj-smn-lex.txt \
	adv-smn-lex.txt verb-smn-lex.txt closed-smn-lex.txt punct-smn-lex.txt \
	pp-smn-lex.txt
	@echo
	@echo
	@echo
	@echo "*** Building smn.save ***" ;
	@echo
	@echo
	@echo
	printf "compile-source smn-lex.txt noun-smn-lex.txt \
	adj-smn-lex.txt verb-smn-lex.txt closed-smn-lex.txt \
	adv-smn-lex.txt pp-smn-lex.txt punct-smn-lex.txt \n\
	read-rules twol-smn.bin \n\
	compose-result \n\
	save-result smn.save \n\
	quit \n" > /tmp/smn-save-script
	@lexc < /tmp/smn-save-script
	rm -f /tmp/smn-save-script

# The second goal is to build twol-smn.bin
# This goal depends on twol-smn.txt

twol-smn.bin: twol-smn.txt
	@echo
	@echo
	@echo
	@echo "*** Building twol-smn.bin ***" ;
	@echo
	@echo
	@echo
	@printf "read-grammar twol-smn.txt \n\
	compile \n\
	save-binary twol-smn.bin \n\
	quit \n" > /tmp/twol-smn-script
	@twolc < /tmp/twol-smn-script
	@rm -f /tmp/twol-smn-script




