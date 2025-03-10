

Here are some tips for efficient testing:


# Using ./configure


In order to test only the analysers you want, you may get rid of the other ones,
by deleting all generated files, with the command:


```
make clean
```


Then configure the system as you want it. The following command
gives you the analysers and generators for xfst.




```
./configure
```


Then compile by writing


```
make
```


Now, the command `make check` will test both the yaml files and the lemma generation.


# Comparing the yaml reports


You may want to know exactly which yaml files are 
affected by your last file changes, and which are not. It may e.g. be
important to check whether something (and if so: what)
has become worse. The following procedure will tell you just that:


1. Write *make check* in a **new** terminal window.
1. copy the whole output (*cmd A cmd C*) in a SubEthaEdit document
1. In SubEthaEdit, select all text, press *ctrl alt cmd P* and type
  `grep YAML | cut -d '/' -f2`
1. The result is the result of all tests (see example below).
  This file may now be saved, as *test1*, or something
1. After some work, repeat the procedure, save as *test2*
1. compare the to by the command `diff test1 test2`


This is what the file looks like:


```
N-aarran_dict-gt-norm.gen.yaml - 16/0/16 PASS
N-caallim_dict-gt-norm.gen.yaml - 15/1/16 FAIL
N-caskes_dict-gt-norm.gen.yaml - 13/3/16 FAIL
...
```


Advice: Intermediate files like test1, test2 may just be deleted. If you
want to save them for reference, give them a date, and save them in the
`misc` folder. There they will be invisible to the `svn status` command.
