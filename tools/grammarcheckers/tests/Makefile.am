## Process this file with automake to produce Makefile.in
## Copyright: Sámediggi/Divvun/UiT
## Licence: GPL v3+

######## Test targets: ###########

if WANT_GRAMCHECK

# List here (space separated) all yaml files to be run as part of make check:
TESTS=\
	interferens_celkkuuh2-FAIL.yaml \
	interferens_celkkuuh2-PASS.yaml \
	interferens_celkkuuh3-FAIL.yaml \
	interferens_celkkuuh3-PASS.yaml \
	interferens_celkkuuh4-FAIL.yaml \
	interferens_celkkuuh4-PASS.yaml \
	interferens_celkkuuh5-FAIL.yaml \
	interferens_celkkuuh6-FAIL.yaml \
	interferens_celkkuuh6-PASS.yaml \
	msyn-adj-attr-acc-FAIL.yaml \
	msyn-adj-attr-gen-FAIL.yaml \
	msyn-adj-attr-gen-PASS.yaml \
	msyn-adj-attr-pred-PASS.yaml \
	msyn-adj-gen-nom-FAIL.yaml \
	msyn-adj-pred-attr-FAIL.yaml \
	msyn-adj-sg-pl-FAIL.yaml \
	msyn-adj-sg-pl-PASS.yaml \
	msyn-advl-plgen-sgill-PASS.yaml \
	msyn-advl-plloc-sgcom-FAIL.yaml \
	msyn-advl-plloc-sgcom-PASS.yaml \
	msyn-advl-plloc-sgill-PASS.yaml \
	msyn-agr-imprt-sg3-PASS.yaml \
	msyn-agr-other-pl3-PASS.yaml \
	msyn-agr-pl3-sg3-PASS.yaml \
	msyn-agr-sg1-sg3-PASS.yaml \
	msyn-agr-sg2-sg3-PASS.yaml \
	msyn-agr-sg3-du3-PASS.yaml \
	msyn-agr-sg3-pl3-FAIL.yaml \
	msyn-agr-sg3-pl3-PASS.yaml \
	msyn-attr-com-gen-PASS.yaml \
	msyn-det-nom-acc-FAIL.yaml \
	msyn-det-nom-acc-PASS.yaml \
	msyn-dynamic-compounds-FAIL.yaml \
	msyn-ext-pl3-sg3-PASS.yaml \
	msyn-extneg-sg3-pl3-PASS.yaml \
	msyn-extsubj-acc-nom-FAIL.yaml \
	msyn-extsubj-acc-nom-PASS.yaml \
	msyn-extsubj-gen-nom-FAIL.yaml \
	msyn-extsubj-gen-nom-PASS.yaml \
	msyn-extsubj-ill-nom-FAIL.yaml \
	msyn-extsubj-ill-nom-PASS.yaml \
	msyn-extv-sg3-pl3-FAIL.yaml \
	msyn-extv-sg3-pl3-PASS.yaml \
	msyn-imp-nom-acc-PASS.yaml \
	msyn-ncompl-acc-ill-FAIL.yaml \
	msyn-ncompl-acc-ill-PASS.yaml \
	msyn-ncompl-ess-sgill-FAIL.yaml \
	msyn-ncompl-ess-sgill-PASS.yaml \
	msyn-ncompl-placc-plill-FAIL.yaml \
	msyn-ncompl-placc-plill-PASS.yaml \
	msyn-negcompl-sg3-conneg-FAIL.yaml \
	msyn-num-acc-par-PASS.yaml \
	msyn-num-nom-par-PASS.yaml \
	msyn-num-par-gen-PASS.yaml \
	msyn-obj-acc-ill-FAIL.yaml \
	msyn-obj-acc-ill-PASS.yaml \
	msyn-obj-plnom-placc-FAIL.yaml \
	msyn-obj-plnom-placc-PASS.yaml \
	msyn-obj-sgnom-sgacc-FAIL.yaml \
	msyn-obj-sgnom-sgacc-PASS.yaml \
	msyn-pass-accsubj-nomsubj-FAIL.yaml \
	msyn-pass-accsubj-nomsubj-PASS.yaml \
	msyn-plobj-nom-acc-PASS.yaml \
	msyn-po-acc-gen-FAIL.yaml \
	msyn-po-nom-gen-FAIL.yaml \
	msyn-po-nom-gen-PASS.yaml \
	msyn-posspl-acc-gen-FAIL.yaml \
	msyn-posspl-acc-gen-PASS.yaml \
	msyn-pred-acc-nom-FAIL.yaml \
	msyn-pred-acc-nom-PASS.yaml
	msyn-pred-ill-nom-PASS.yaml \
	msyn-predagr-pl3-sg3-PASS.yaml \
	msyn-quant-gen-nom-FAIL.yaml \
	msyn-quant-nom-gen-PASS.yaml \
	msyn-refl-sg-pl-FAIL.yaml \
	msyn-rel-sg-pl-FAIL.yaml \
	msyn-rel-sg-pl-PASS.yaml \
	msyn-subj-gen-nom-PASS.yaml \
	msyn-top-nom-acc-FAIL.yaml \
	msyn-top-nom-acc-PASS.yaml \
	msyn-v-actio-sg1-FAIL.yaml \
	msyn-v-prfprc-sg1-PASS.yaml \
	myn-imp-pl3-sg3-PASS.yaml \
	neg-adj-attr-pred-PASS.yaml \
	neg-adj-gen-nom-FAIL.yaml \
	neg-advl-plgen-sgill-PASS.yaml \
	neg-advl-plloc-sgcom-FAIL.yaml \
	neg-advl-plloc-sgcom-PASS.yaml \
	neg-agr-imprt-sg3-PASS.yaml \
	neg-agr-other-pl3-FAIL.yaml \
	neg-agr-other-pl3-PASS.yaml \
	neg-agr-other-sg3-PASS.yaml \
	neg-agr-sg3-pl3-FAIL.yaml \
	neg-agr-sg3-pl3-PASS.yaml \
	neg-det-nom-acc-FAIL.yaml \
	neg-det-nom-acc-PASS.yaml \
	neg-extsubj-acc-nom-FAIL.yaml \
	neg-extsubj-acc-nom-PASS.yaml \
	neg-extsubj-ill-nom-PASS.yaml \
	neg-extv-sg3-pl3-FAIL.yaml \
	neg-extv-sg3-pl3-PASS.yaml \
	neg-interferens_celkkuuh-PASS.yaml \
	neg-ncomple-ess-sgill-FAIL.yaml \
	neg-negcompl-sg3-conneg-FAIL.yaml \
	neg-obj-acc-ill-FAIL.yaml \
	neg-obj-plnom-placc-FAIL.yaml \
	neg-obj-sgnom-sgacc-PASS.yaml \
	neg-orrood-inf-actioess-PASS.yaml \
	neg-pass-accsubj-nomsubj-PASS.yaml \
	neg-plobj-nom-acc-FAIL.yaml \
	neg-po-nom-gen-PASS.yaml \
	neg-po-placc-plgen-PASS.yaml \
	neg-posspl-acc-gen-PASS.yaml \
	neg-posspl-ill-gen-PASS.yaml \
	neg-quant-nom-gen-PASS.yaml \
	neg-subj-gen-nom-PASS.yaml \
	neg-top-nom-acc-PASS.yaml \
	neg-v-actio-sg1-PASS.yaml \
	neg-v-prfprc-sg1-PASS.yaml \
	neg-v-sg1-prfprc-FAIL.yaml \
	ovdamearkkat-FAIL.yaml \
	science-FAIL.yaml \
	syn-OVS-OSV-FAIL.yaml \
	typos-FAIL.yaml \
	wikipedia-FAIL.yaml

# List tests that are presently (expected) failures here, ie things that should
# be fixed *later*, but is not critical at the moment:
XFAIL_TESTS=\
	interferens_celkkuuh2-FAIL.yaml \
	interferens_celkkuuh3-FAIL.yaml \
	interferens_celkkuuh4-FAIL.yaml \
	interferens_celkkuuh5-FAIL.yaml \
	interferens_celkkuuh6-FAIL.yaml \
	msyn-adj-attr-acc-FAIL.yaml \
	msyn-adj-attr-gen-FAIL.yaml \
	msyn-adj-attr-pred-FAIL.yaml \
	msyn-adj-gen-nom-FAIL.yaml \
	msyn-adj-pred-attr-FAIL.yaml \
	msyn-adj-sg-pl-FAIL.yaml \
	msyn-advl-plloc-sgcom-FAIL.yaml \
	msyn-agr-other-sg2-FAIL.yaml \
	msyn-agr-sg3-pl3-FAIL.yaml \
	msyn-det-nom-acc-FAIL.yaml \
	msyn-dynamic-compounds-FAIL.yaml \
	msyn-extsubj-acc-nom-FAIL.yaml \
	msyn-extsubj-gen-nom-FAIL.yaml \
	msyn-extsubj-ill-nom-FAIL.yaml \
	msyn-extv-pl3-sg3-FAIL.yaml \
	msyn-extv-sg3-pl3-FAIL.yaml \
	msyn-ncompl-acc-ill-FAIL.yaml \
	msyn-ncompl-ess-sgill-FAIL.yaml \
	msyn-ncompl-nom-loc-FAIL.yaml \
	msyn-ncompl-placc-plill-FAIL.yaml \
	msyn-negcompl-sg3-conneg-FAIL.yaml \
	msyn-num-gen-par-FAIL.yaml \
	msyn-num-par-nom-FAIL.yaml \
	msyn-obj-acc-ill-FAIL.yaml \
	msyn-obj-nom-acc-FAIL.yaml \
	msyn-obj-plnom-placc-FAIL.yaml \
	msyn-obj-sgnom-sgacc-FAIL.yaml \
	msyn-orrood-inf-actioess-FAIL.yaml \
	msyn-pass-accsubj-nomsubj-FAIL.yaml \
	msyn-po-acc-gen-FAIL.yaml \
	msyn-po-nom-gen-FAIL.yaml \
	msyn-posspl-acc-gen-FAIL.yaml \
	msyn-pred-acc-nom-FAIL.yaml \
	msyn-quant-gen-nom-FAIL.yaml \
	msyn-refl-sg-pl-FAIL.yaml \
	msyn-rel-sg-pl-FAIL.yaml \
	msyn-subj-gen-ill-FAIL.yaml \
	msyn-top-nom-acc-FAIL.yaml \
	msyn-v-actio-sg1-FAIL.yaml \
	msyn-v-sg1-prfprc-FAIL.yaml \
	msyn-v-sg3-conneg-FAIL.yaml \
	neg-adj-attr-plgen-FAIL.yaml \
	neg-adj-gen-nom-FAIL.yaml \
	neg-adj-gen-nom-PASS.yaml \
	neg-adj-pred-attr-FAIL.yaml \
	neg-advl-plloc-sgcom-FAIL.yaml \
	neg-agr-other-pl3-FAIL.yaml \
	neg-agr-other-sg2-FAIL.yaml \
	neg-agr-sg3-pl3-FAIL.yaml \
	neg-attr-com-gen-FAIL.yaml \
	neg-det-nom-acc-FAIL.yaml \
	neg-extsubj-acc-nom-FAIL.yaml \
	neg-extsubj-gen-nom-FAIL.yaml \
	neg-extv-numeral-sg3-pl3-FAIL.yaml \
	neg-extv-pl3-sg3-FAIL.yaml \
	neg-extv-sg3-pl3-FAIL.yaml \
	neg-ncomple-ess-sgill-FAIL.yaml \
	neg-negcompl-sg3-conneg-FAIL.yaml \
	neg-num-gen-par-FAIL.yaml \
	neg-obj-acc-ill-FAIL.yaml \
	neg-obj-plnom-placc-FAIL.yaml \
	neg-plobj-nom-acc-FAIL.yaml \
	neg-v-sg1-prfprc-FAIL.yaml \
	nodalida_extsubj-acc-nom-FAIL.yaml \
	nodalida_extsubj-gen-nom-FAIL.yaml \
	nodalida_extv-pl3-sg3-FAIL.yaml \
	nodalida_extv-sg3-pl3-FAIL.yaml \
	nodalida_obj-plnob-placc-FAIL.yaml \
	ovdamearkkat-FAIL.yaml \
	real-keesi-keessiv-FAIL.yaml \
	real-keessiv-keesi-FAIL.yaml \
	real-love-lope-FAIL.yaml \
	real-pele-peeli-FAIL.yaml \
	science-FAIL.yaml \
	syn-OVS-OSV-FAIL.yaml \
	typos-200a-FAIL.yaml \
	typos-FAIL.yaml \
	wikipedia-FAIL.yaml

endif # WANT_GRAMCHECK

# These actually pass:
#	msyn-agr-sg3-pl3-FAIL.yaml 
#	msyn-ncompl-ess-sgill-FAIL.yaml 



#### Do NOT edit below here: ####
include $(top_srcdir)/../giella-core/am-shared/tools-grammarcheckers-tests-dir-include.am
