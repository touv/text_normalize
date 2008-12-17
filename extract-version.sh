#!/bin/sh

grep 'release' ./package.xml | head -1 | sed -e 's/<[\/a-z]*>//g;' | xargs echo
