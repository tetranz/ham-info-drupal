#!/bin/sh

cd /srv/haminfo-data

rm l_amat.zip
rm HD.dat
rm EN.dat
rm AM.dat

wget http://wireless.fcc.gov/uls/data/complete/l_amat.zip

unzip l_amat.zip
