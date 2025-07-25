#!/bin/bash

MAXTIME=0.8
HFST_OSPELL=false
LANG=smn
ZHFSTFILE=../../../../../../tools/spellcheckers/${LANG}.zhfst

if test -x ${HFST_OSPELL} ; then
  if test -f ${ZHFSTFILE} ; then
    mytime="$(time -p ( echo nuvviDspeller \
            | ${HFST_OSPELL} -S ${ZHFSTFILE} ) 2>&1 1>/dev/null )"
    suggtime="$(printf "$mytime" | fgrep 'real' | cut -d' ' -f2 )"

    # Use bc to calculate the truth condition, since we are comparing reals:
    below_limit=$(bc <<< "$suggtime < $MAXTIME")

    # If the condition above evaluates to false, $below_limit is zero:
    if [ $below_limit -eq 0 ] ; then
        echo "Suggestion time too long: ${suggtime}s, longer than the \
upper limit ${MAXTIME}s."
        exit 1
    fi
  else
      echo ${ZHFSTFILE} not found
      exit 77
  fi
else
    echo ${HFST_OSPELL} not found
    exit 77
fi

