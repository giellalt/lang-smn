# shellscript for generating sentences with Px, for proofreading

# mostly kinship terms in Sg+Nom

cat px_min_kin.txt | sed 's/$/+N+Sg+Nom+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/$/ koijâdij must/' genpx | uniq > generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
#cat px_min_kin.txt | sed 's/$/+N+Sg+Nom+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/$/ koijâdij tust/' genpx | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#echo '' >> generated_sentences.txt
cat px_min_kin.txt | sed 's/$/+N+Sg+Nom+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/$/ koijâdij sust/' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt


# mostly kinship terms in Comitative

cat px_min_kin.txt | sed 's/$/+N+Sg+Com+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun sáárnum /' genpx | uniq > generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_kin.txt | sed 's/$/+N+Pl+Com+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun sáárnum /' genpx | grep in  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
#cat px_min_kin.txt | sed 's/$/+N+Sg+Com+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun sáárnuh /' genpx  | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#cat px_min_kin.txt | sed 's/$/+N+Pl+Com+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun sáárnuh /' genpx  |  grep in  | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#echo '' >> generated_sentences.txt
cat px_min_kin.txt | sed 's/$/+N+Sg+Com+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun sárnu /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_kin.txt | sed 's/$/+N+Pl+Com+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun sárnu /' genpx  |  grep in | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt


# animals in Comitative

cat px_min_animals.txt | sed 's/$/+N+Sg+Com+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun poottim /' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_animals.txt | sed 's/$/+N+Pl+Com+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun poottim /' genpx | grep in  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
#cat px_min_animals.txt | sed 's/$/+N+Sg+Com+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun poottih /' genpx  | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#cat px_min_animals.txt | sed 's/$/+N+Pl+Com+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun poottih /' genpx  |  grep in  | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#echo '' >> generated_sentences.txt
cat px_min_animals.txt | sed 's/$/+N+Sg+Com+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun poođij /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_animals.txt | sed 's/$/+N+Pl+Com+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun poođij /' genpx  |  grep in | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt


# all kinds in Accusative

cat px_min_kin.txt pxanimals.txt  pxobjects.txt | sed 's/$/+N+Sg+Acc+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun oinim /' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_kin.txt pxanimals.txt  pxobjects.txt | sed 's/$/+N+Pl+Acc+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun oinim /' genpx   | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
#cat px_min_kin.txt pxanimals.txt  pxobjects.txt | sed 's/$/+N+Sg+Acc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun oinih /' genpx  | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#cat px_min_kin.txt pxanimals.txt  pxobjects.txt | sed 's/$/+N+Pl+Acc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun oinih /' genpx   | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#echo '' >> generated_sentences.txt
cat px_min_kin.txt pxanimals.txt  pxobjects.txt | sed 's/$/+N+Sg+Acc+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun ooinij /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_kin.txt pxanimals.txt  pxobjects.txt | sed 's/$/+N+Pl+Acc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Tun oinih /' genpx   | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_kin.txt pxanimals.txt  pxobjects.txt | sed 's/$/+N+Pl+Acc+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun ooinij /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt

# Kins and animals in Illative


cat px_min_kin.txt pxanimals.txt | sed 's/$/+N+Sg+Ill+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun koolgâm adeliđ tom /' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_kin.txt pxanimals.txt | sed 's/$/+N+Pl+Ill+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun koolgâm adeliđ tom /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
#cat px_min_kin.txt pxanimals.txt | sed 's/$/+N+Sg+Ill+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun koolgah adeliđ tom /' genpx  | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#cat px_min_kin.txt pxanimals.txt | sed 's/$/+N+Pl+Ill+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun koolgah adeliđ tom /' genpx   | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#echo '' >> generated_sentences.txt
cat px_min_kin.txt pxanimals.txt | sed 's/$/+N+Sg+Ill+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun kalga adeliđ tom /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_kin.txt pxanimals.txt | sed 's/$/+N+Pl+Ill+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun kalga adeliđ tom /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt

# mostly kins in Locative

cat px_min_kin.txt | sed 's/$/+N+Sg+Loc+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun ožžum tom /' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_kin.txt | sed 's/$/+N+Pl+Loc+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun ožžum tom /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
#cat px_min_kin.txt | sed 's/$/+N+Sg+Loc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun ožžuh tom /' genpx  | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#cat px_min_kin.txt | sed 's/$/+N+Pl+Loc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun ožžuh tom /' genpx    | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#echo '' >> generated_sentences.txt
cat px_min_kin.txt | sed 's/$/+N+Sg+Loc+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun uážui tom /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_kin.txt | sed 's/$/+N+Pl+Loc+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun uážui tom /' genpx   | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt


# all kinds, except Kins, in Locative

cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Sg+Loc+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun poolâm /' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Pl+Loc+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun poolâm  /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
#cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Sg+Loc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun poolah /' genpx  | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Pl+Loc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun poolah /' genpx    | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#echo '' >> generated_sentences.txt
cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Sg+Loc+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun pala /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Pl+Loc+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun pala /' genpx   | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt

# all kinds, except Kins, in Illative

cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Sg+Ill+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun lijkkuum /' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Pl+Ill+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2  |grep -v '^$' > genpx 
sed 's/^/Mun lijkkuum /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
#cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Sg+Ill+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun lijkkuuh /' genpx  | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Pl+Ill+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
#sed 's/^/Tun lijkkuuh /' genpx    | uniq >> generated_sentences.txt
#echo '' >> generated_sentences.txt
#echo '' >> generated_sentences.txt
cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Sg+Ill+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun lijkkoo /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat px_min_animals.txt pxobjects.txt | sed 's/$/+N+Pl+Ill+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2  |grep -v '^$' > genpx 
sed 's/^/Sun lijkkoo /' genpx   | uniq >> generated_sentences.txt


rm genpx

see generated_sentences.txt


