FROM ubuntu/nginx:1.18-20.04_beta 

# PHP 5.6
RUN apt update && apt install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt update && apt install -y php5.6 php5.6-fpm php5.6-mysql php5.6-xml

# MySQL dump for backups
RUN apt update && apt install -y mariadb-client

# Cron & Backup
RUN apt update && apt install -y cron
COPY ./docker/backup.crontab /etc/cron.d/backup.crontab
RUN chmod 0644 /etc/cron.d/backup.crontab && crontab /etc/cron.d/backup.crontab
COPY ./docker/backup.template.sh /var/configs/backup.template.sh

# Nginx config
COPY ./docker/default.nginx /etc/nginx/sites-available/default

# PHP code
COPY ./src /var/www/dacoustie

# Entrypoints
COPY ./docker/startup-fpm.sh /docker-entrypoint.d/startup-fpm.sh
COPY ./docker/startup-secrets.sh /docker-entrypoint.d/startup-secrets.sh
COPY ./docker/startup-cron.sh /docker-entrypoint.d/startup-cron.sh
RUN chmod +x /docker-entrypoint.d/startup-fpm.sh
RUN chmod +x /docker-entrypoint.d/startup-secrets.sh
RUN chmod +x /docker-entrypoint.d/startup-cron.sh

# Volume for images
VOLUME /var/www/dacoustie/images

EXPOSE 80