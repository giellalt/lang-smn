# Distributed under the terms of the GNU General Public License version 2
#  or any later version.

# This is a makefile that builds the Inari Sami morphological parser
# *****************************************************************


# Here we build the final generator , an inverted transducer of the analyzer.
# It is dependent upon smn.save

ismn.fst: ../bin/ismn.fst

../bin/ismn.fst: smn.fst
	@echo
	@echo "*** Building the inverse ismn.fst ***"
	@echo
	@printf "load ../bin/smn.save \n\
	invert net \n\
	save stack ../bin/ismn.fst \n\
	quit \n" > ../../tmp/ismn-fst-script
	@xfst -utf8 < ../../tmp/ismn-fst-script
	@rm -f ../../tmp/ismn-fst-script


# This goal is to build the final analyser. It depends on all the files.

smn.fst: ../bin/smn.fst

../bin/smn.fst: ../bin/smn.save ../bin/caseconv.fst ../bin/tok.fst
	@echo
	@echo "*** Building smn.fst ***" ;
	@echo
	@printf "read regex @\"../bin/smn.save\" .o. \
	@\"../bin/caseconv.fst\"  ; \n\
	save stack ../bin/smn.fst \n\
	quit \n" > ../../tmp/smn-fst-script
	@xfst -utf8 < ../../tmp/smn-fst-script
	@rm -f ../../tmp/smn-fst-script


# The second goal is to build the caseconv.fst file
# This goal depends on case.regex


caseconv.fst: ../bin/caseconv.fst

../bin/caseconv.fst: case.regex
	@echo
	@echo "*** Building caseconv.fst ***" ;
	@echo
	@printf "read regex < case.regex \n\
	save stack ../bin/caseconv.fst \n\
	quit \n" > ../../tmp/caseconv-smn-script
	@xfst -utf8 < ../../tmp/caseconv-smn-script
	@rm -f ../../tmp/caseconv-smn-script


# Another goal is to build a preprocessor.This goal depends on tok.txt


tok.fst: ../bin/tok.fst

../bin/tok.fst: tok.txt
	@echo
	@echo "*** Building the tokenizer tok.fst ***" ;
	@echo
	@printf "source tok.txt \n\
	save stack ../bin/tok.fst \n\
	quit \n" > ../../tmp/tok-smn-script
	@xfst -utf8 < ../../tmp/tok-smn-script
	@rm -f ../../tmp/tok-smn-script


# The first goal is to build smn.save
# This goal depends on twol-smn.bin and a bunch of lexicon files

smn.save: ../bin/smn.save

../bin/smn.save: ../bin/twol-smn.bin smn-lex.txt noun-smn-lex.txt \
	adj-smn-lex.txt adv-smn-lex.txt verb-smn-lex.txt \
	closed-smn-lex.txt punct-smn-lex.txt pp-smn-lex.txt
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
	read-rules ../bin/twol-smn.bin \n\
	compose-result \n\
	save-result ../bin/smn.save \n\
	quit \n" > ../../tmp/smn-save-script
	@lexc -utf8 < ../../tmp/smn-save-script
	rm -f ../../tmp/smn-save-script

# The second goal is to build twol-smn.bin
# This goal depends on twol-smn.txt

twol-smn.bin: ../bin/twol-smn.bin

../bin/twol-smn.bin: twol-smn.txt
	@echo
	@echo
	@echo
	@echo "*** Building twol-smn.bin ***" ;
	@echo
	@echo
	@echo
	@printf "read-grammar twol-smn.txt \n\
	compile \n\
	save-binary ../bin/twol-smn.bin \n\
	quit \n" > ../../tmp/twol-smn-script
	@twolc -utf8 < ../../tmp/twol-smn-script
	@rm -f ../../tmp/twol-smn-script


# Removing all binary files:

clean:
	@rm -f ../bin/*


