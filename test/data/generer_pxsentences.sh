# shellscript for generating sentences with Px, for proofreading



cat pxnouns.txt | sed 's/$/+N+Sg+Nom+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2 |grep -v Px |grep -v '^$' > genpx 
sed 's/$/ koijâdij must/' genpx | uniq > generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Sg+Nom+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/$/ koijâdij tust/' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Sg+Nom+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/$/ koijâdij sust/' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt



cat pxnouns.txt | sed 's/$/+N+Sg+Com+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2 |grep -v Px |grep -v '^$' > genpx 
sed 's/^/Mun sáárnum /' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Com+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2 |grep -v Px |grep -v '^$' > genpx 
sed 's/^/Mun sáárnum /' genpx | grep guin  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Sg+Com+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Tun sáárnuh /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Com+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Tun sáárnuh /' genpx  |  grep guin  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Sg+Com+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Sun sárnu /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Com+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Sun sárnu /' genpx  |  grep guin | uniq >> generated_sentences.txt
see generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt

cat pxnouns.txt | sed 's/$/+N+Sg+Acc+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2 |grep -v Px |grep -v '^$' > genpx 
sed 's/^/Mun oinim /' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Acc+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2 |grep -v Px |grep -v '^$' > genpx 
sed 's/^/Mun oinim /' genpx   | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Sg+Acc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Tun oinih /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Acc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Tun oinih /' genpx   | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Sg+Acc+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Sun ooinij /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Acc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Tun oinih /' genpx   | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Acc+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Sun ooinij /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt

cat pxnouns.txt | sed 's/$/+N+Sg+Ill+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2 |grep -v Px |grep -v '^$' > genpx 
sed 's/^/Mun koolgâm adeliđ /' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Ill+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2 |grep -v Px |grep -v '^$' > genpx 
sed 's/^/Mun koolgâm adeliđ /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Sg+Ill+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Tun koolgah adeliđ tom /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Ill+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Tun koolgah adeliđ tom /' genpx   | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Sg+Ill+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Sun kalga adeliđ tom /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Ill+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Sun kalga adeliđ tom /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt

cat pxnouns.txt | sed 's/$/+N+Sg+Loc+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2 |grep -v Px |grep -v '^$' > genpx 
sed 's/^/Mun ožžum tom /' genpx | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Loc+PxSg1/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst | cut -f2 |grep -v Px |grep -v '^$' > genpx 
sed 's/^/Mun ožžum tom  /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Sg+Loc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Tun uážžuh tom /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Loc+PxSg2/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Tun uážžuh tom /' genpx    | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Sg+Loc+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Sun uážui tom /' genpx  | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
cat pxnouns.txt | sed 's/$/+N+Pl+Loc+PxSg3/' | $LOOKUP $GTHOME/langs/smn/src/generator-gt-norm.xfst |cut -f2 | grep -v Px |grep -v '^$' > genpx 
sed 's/^/Sun uážui tom /' genpx   | uniq >> generated_sentences.txt
echo '' >> generated_sentences.txt
echo '' >> generated_sentences.txt


