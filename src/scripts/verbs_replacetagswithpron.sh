#sh devtools/verb_minip.sh '(iä|uá).(|.|..)uđ:' > genudverbs.txt
# cat genudverbs.txt |sh src/scripts/verbs_replacetagswithpron.sh | cut -d ' ' -f2- | grep -v '^$' | tr '¢' '\n' > output.txt 



sed 's/+V+Inf/ ¢infinitiivi:/' |sed 's/+V+Ind+Prs+Sg1/ Onne mun/' |sed 's/+V+Ind+Prs+Sg2/ Onne tun/' | sed 's/+V+Ind+Prs+Sg3/ Onne sun/'| sed 's/+V+Ind+Prs+Du1/ Onne muoi/'|sed 's/+V+Ind+Prs+Du2/ Onne tuoi/' | sed 's/+V+Ind+Prs+Du3/ Onne suoi/' | sed 's/+V+Ind+Prs+Pl1/ Onne mij/'|sed 's/+V+Ind+Prs+Pl2/ Onne tij/'|sed 's/+V+Ind+Prs+Pl3/ Onne sij/'| sed 's/+V+Ind+Prt+Sg1/ Jieht mun/' | sed 's/+V+Ind+Prt+Sg2/ Jieht tun/' | sed 's/+V+Ind+Prt+Sg3/ Jieht sun/'| sed 's/+V+Ind+Prt+Du1/ Jieht muoi/'|sed 's/+V+Ind+Prt+Du2/ Jieht tuoi/' | sed 's/+V+Ind+Prt+Du3/ Jieht suoi/' | sed 's/+V+Ind+Prt+Pl1/ Jieht mij/'|sed 's/+V+Ind+Prt+Pl2/ Jieht tij/'|sed 's/+V+Ind+Prt+Pl3/ Jieht sij/'| sed 's/+V+Ind+Prs+ConNeg/ Onne ij/'


