#!/usr/bin/env sh
set -eu

FTP_USER="${FTP_USER:-changeme}" \
FTP_PASSWORD="${FTP_PASSWORD:-changeme}" \
DB_HOST="${DB_HOST:-db}" \
DB_USER="${DB_USER:-dac}" \
DB_PASSWORD="${DB_PASSWORD:-changeme}" \
DB_NAME="${DB_NAME:-dacoustie}" \
SECRET="${SECRET:-changeme}" \
envsubst '${FTP_USER} ${FTP_PASSWORD} ${DB_HOST} ${DB_USER} ${DB_PASSWORD} ${DB_NAME} ${SECRET}' < /var/www/dacoustie/configuration.php.template > /var/www/dacoustie/configuration.php
