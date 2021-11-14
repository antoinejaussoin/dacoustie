#!/bin/sh

CURRENT_DATE=`date +%Y-%m-%d"_"%H_%M_%S`
BACKUP_DIR="/home/antoine/prep_backup"
SYNC_DIR="/home/antoine/backup"

mysqldump -u dac -pACTUALPASSWORD!!! dacoustie | gzip > $BACKUP_DIR/database.sql.zip
cp /etc/nginx/sites-available/default $BACKUP_DIR/nginx.default
cp /etc/nginx/sites-available/sync $BACKUP_DIR/nginx.sync
cp /etc/cron.daily/backup $BACKUP_DIR/backup-script
tar -zcvf $BACKUP_DIR/www.tar.gz /var/www/dacoustie/

tar -zcvf $SYNC_DIR/backup.$CURRENT_DATE.tar.gz $BACKUP_DIR/

rm -rf $BACKUP_DIR/*