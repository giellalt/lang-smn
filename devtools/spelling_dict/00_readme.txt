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



