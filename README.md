# dacoustie

## Backup & Restore

https://support.hostway.com/hc/en-us/articles/360000220190-How-to-backup-and-restore-MySQL-databases-on-Linux

mysql -u [username] –p[password] [database_name] < [dump_file.sql]

## Restoring a backup
cat database.sql | docker exec -i DOCKER_CONTAINER_NAME_OR_ID mysql -u dac -pDAC_ACCOUNT_PASSWORD dacoustie