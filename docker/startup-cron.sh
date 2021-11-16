#!/usr/bin/env sh
set -eu

DB_HOST="${DB_HOST:-db}" \
DB_USER="${DB_USER:-dac}" \
DB_PASSWORD="${DB_PASSWORD:-changeme}" \
DB_NAME="${DB_NAME:-dacoustie}" \
envsubst '${DB_HOST} ${DB_USER} ${DB_PASSWORD} ${DB_NAME}' < /var/configs/backup.template.sh > /var/configs/backup.sh

chmod +x /var/configs/backup.sh

service cron start