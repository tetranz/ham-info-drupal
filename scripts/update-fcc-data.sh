#!/bin/sh

cd /srv/haminfo/web

../vendor/bin/drush fcc_ham_data:import hd ../haminfo-data/HD.dat
../vendor/bin/drush fcc_ham_data:import en ../haminfo-data/EN.dat
../vendor/bin/drush fcc_ham_data:import am ../haminfo-data/AM.dat
../vendor/bin/drush fcc_ham_data:update-hash

../vendor/bin/drush ham_station:import-fcc-update
../vendor/bin/drush ham_station:import-fcc-new
../vendor/bin/drush ham_station:import-fcc-new-addresses
../vendor/bin/drush ham_station:delete-fcc-inactive
../vendor/bin/drush ham_station:delete-fcc-inactive-addresses
../vendor/bin/drush ham_station:delete-fcc-inactive-locations

../vendor/bin/drush fcc_ham_data:truncate hd
../vendor/bin/drush fcc_ham_data:truncate en
../vendor/bin/drush fcc_ham_data:truncate am
