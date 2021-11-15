CURRENT_DATE=`date +%Y-%m-%d"_"%H_%M_%S`

mysqldump -u ${DB_USER} –p${DB_PASSWORD} ${DB_NAME} > /var/backup/database-${CURRENT_DATE}.sql

