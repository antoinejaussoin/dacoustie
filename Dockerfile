FROM nginx:1.19

ENV DEBIAN_FRONTEND noninteractive

# RUN apt update && apt -y install lsb-release apt-transport-https ca-certificates
# RUN apt update && apt install -y wget
# RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
# RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list && apt update

RUN apt update && apt install -y gnupg
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C
RUN echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu bionic main" > /etc/apt/sources.list.d/php.list

# PHP 5.6
# RUN apt update && apt install -y software-properties-common
# RUN uname --all
# RUN add-apt-repository ppa:ondrej/php
RUN apt update && apt install -y php5.6 php5.6-fpm php5.6-mysql php5.6-xml

# MySQL dump for backups
RUN apt update && apt install -y mariadb-client

# Nginx Config
COPY ./docker/default.nginx /etc/nginx/conf.d/default.conf

# PHP Code
COPY ./src /var/www/dacoustie

# Backup Script
COPY ./docker/backup.template.sh /var/configs/backup.template.sh

# Entrypoints
COPY ./docker/fpm.sh /docker-entrypoint.d/fpm.sh
COPY ./docker/secrets.sh /docker-entrypoint.d/secrets.sh
RUN chmod +x /docker-entrypoint.d/fpm.sh
RUN chmod +x /docker-entrypoint.d/secrets.sh

# Volume for images
VOLUME /var/www/dacoustie/images

EXPOSE 80