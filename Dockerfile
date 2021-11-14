FROM ubuntu/nginx:1.18-20.04_beta 

# PHP 5.6
RUN apt update && apt install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt update && apt install -y php5.6 php5.6-fpm php5.6-mysql php5.6-xml

# Nginx config
COPY ./docker/default.nginx /etc/nginx/sites-available/default

# PHP code
COPY ./src /var/www/dacoustie

# Entrypoints
COPY ./docker/fpm.sh /docker-entrypoint.d/fpm.sh
COPY ./docker/secrets.sh /docker-entrypoint.d/secrets.sh
RUN chmod +x /docker-entrypoint.d/fpm.sh
RUN chmod +x /docker-entrypoint.d/secrets.sh

# Volume for images
VOLUME /var/www/dacoustie/images

EXPOSE 80