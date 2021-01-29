#!/bin/bash
echo "Start update"
apt-get update
echo "Start install MYSQL"
apt-get install -y mysql-server-5.7
echo "CREATE USER"
mysql -e "create user 'phpuser'@'%' identified by 'pass';"
