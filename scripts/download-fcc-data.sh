#!/bin/sh

cd /srv/haminfo/web

../vendor/bin/drush fcc_ham_data:truncate hd
../vendor/bin/drush fcc_ham_data:truncate en
../vendor/bin/drush fcc_ham_data:truncate am

cd /srv/haminfo-data

rm l_amat.zip
rm HD.dat
rm EN.dat
rm AM.dat

curl http://wireless.fcc.gov/uls/data/complete/l_amat.zip --remote-name

unzip l_amat.zip HD.dat EN.dat AM.dat
