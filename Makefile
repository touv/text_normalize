PEAR=pear
PHPUNIT=phpunit
XSLTPROC=xsltproc
CP=cp
MKDIR=mkdir
RM=rm

all : test

test :
	$(PHPUNIT) Text_NormalizeTest Text/NormalizeTest.php

push:
	git push
	git push --tags

release: Text_Normalize-`./extract-version.sh`.tgz

Text_Normalize-`./extract-version.sh`.tgz: package.xml
	$(PEAR) package package.xml
	git tag -a -m "Version `./extract-version.sh`"  v`./extract-version.sh`
