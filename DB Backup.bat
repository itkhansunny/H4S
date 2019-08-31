@echo off
if not exist ".db.backup" mkdir .db.backup
attrib +h ".db.backup"
mysqldump -u root -p ankur > .db.backup\db.sql --password=