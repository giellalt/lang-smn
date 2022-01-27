## Process this file with automake to produce Makefile.in
## Copyright: Sámediggi/Divvun/UiT
## Licence: GPL v3+

######## Test targets: ###########

if WANT_GRAMCHECK

# List here (space separated) all yaml files to be run as part of make check:
TESTS=\
	interferens_celkkuuh2.yaml \
	interferens_celkkuuh3.yaml \
	interferens_celkkuuh4.yaml \
	msyn-adj-gen-nom.yaml \
	msyn-agr-sg3-pl3.yaml \
	msyn-ext-pl3-sg3.yaml \
	msyn-ext-sg3-pl3.yaml \
	msyn-ncompl-acc-ill.yaml \
	msyn-ncompl-ess-sgill.yaml \
	msyn-ncompl-placc-plill.yaml \
	msyn-obj-acc-ill.yaml \
	msyn-pass-accsubj-nomsubj.yaml \
	msyn-po-nom-gen.yaml \
	msyn-posspl-acc-gen.yaml \
	msyn-pred-acc-nom.yaml \
	msyn-quant-gen-nom.yaml \
	msyn-refl-sg-pl.yaml \
	msyn-v-actio-sg1.yaml 

# List tests that are presently (expected) failures here, ie things that should
# be fixed *later*, but is not critical at the moment:
XFAIL_TESTS=\
	interferens_celkkuuh2.yaml \
	interferens_celkkuuh3.yaml \
	interferens_celkkuuh4.yaml \
	msyn-adj-gen-nom.yaml \
	msyn-ext-pl3-sg3.yaml \
	msyn-ext-sg3-pl3.yaml \
	msyn-ncompl-acc-ill.yaml \
	msyn-ncompl-placc-plill.yaml \
	msyn-obj-acc-ill.yaml \
	msyn-pass-accsubj-nomsubj.yaml \
	msyn-po-nom-gen.yaml \
	msyn-posspl-acc-gen.yaml \
	msyn-pred-acc-nom.yaml \
	msyn-quant-gen-nom.yaml \
	msyn-refl-sg-pl.yaml \
	msyn-v-actio-sg1.yaml

endif # WANT_GRAMCHECK

# These actually pass:
#	msyn-agr-sg3-pl3.yaml 
#	msyn-ncompl-ess-sgill.yaml 



#### Do NOT edit below here: ####
include $(top_srcdir)/../giella-core/am-shared/tools-grammarcheckers-tests-dir-include.am
