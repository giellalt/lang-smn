#!/bin/bash
pushd ../src/fst/test/ || exit 2
make devtest SUBDIRS=.
popd || exit 2
