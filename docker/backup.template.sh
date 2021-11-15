CURRENT_DATE=`date +%Y-%m-%d"_"%H_%M_%S`

mysqldump  -h ${DB_HOST} -u ${DB_USER} -p${DB_PASSWORD} ${DB_NAME} | gzip > /var/backup/database-${CURRENT_DATE}.sql.zip