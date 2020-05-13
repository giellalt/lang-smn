This directory contains the changed version of the lexc files
as a result of generating and compiling the spelling dictionary.

Due to major changes of the lexc files, this version has to be kept
separately but in sync with the current version of the lexc.


======
sharing data for comparisong in these temp directories:

 - to check the changes issue a diff between here (locally changes on Cip's machine)
   and there (the generated data using the regular lexc file)

Ex.:

diff 06s_KIRKKO/here_ut_dir/output_2KIRKKO_fb.csv 06s_KIRKKO/there_ut_dir/output_2KIRKKO_fb.csv

57c57
< 5     Sg+Loc   haŋkmoost
---
> 5     Sg+Loc   haŋkmost
125c125
< 5     Sg+Loc   saŋkoost
---
> 5     Sg+Loc   saŋkkoost

NB: for the compilation of a spelling dict, please correct the here-file.

=============================

 TODO: added comments from MLs email as todo issue


I see now that the pärni-words are in 2AIGI. These are kind of exceptions, though. 

The biblical máttááttâspärni should be inflected:
sg gen. + acc máttááttâspárnáá  (!)
ill. máttááttâspáárnán
loc máttááttâspäärnist
com máttááttâspárnáin (!)

pl nom máttááttâspárnááh (!)
pl gen máttááttâspárnái
pl acc máttááttâspárnáid
pl ill máttááttâspárnáid
pl loc máttááttâspárnáin
pl com máttááttâspárnáiguin


Normally:
pärni should be inflected:
sg gen. + acc päärni (or párnáá)  (!)
ill. páárnán
loc päärnist
com párnáin (!)

pl nom párnááh (!)
pl gen párnái
pl acc párnáid
pl ill párnáid
pl loc párnáin
pl com párnáiguin



Pls don't ask me why but this seems to be a mixed paradigm. This should be fixed. 


