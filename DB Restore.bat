@echo off
mysql -u root  -e "CREATE DATABASE IF NOT EXISTS ankur";
mysql -u root -p ankur < .db.backup/db.sql --password=