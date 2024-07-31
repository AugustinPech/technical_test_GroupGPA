#!/bin/bash
projectName=$1

cd /var/www/"$projectName" || exit
git clone https://github.com/AugustinPech/technical_test_GroupGPA.git .

composer install
