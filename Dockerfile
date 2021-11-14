FROM ubuntu/nginx:1.18-20.04_beta 

# PHP
RUN apt update && apt install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt update && apt install -y php5.6 php5.6-fpm php5.6-mysql php5.6-xml

# Nginx
# RUN apt-get update
# RUN apt install -y nginx
# RUN nginx -s reload

COPY ./nginx/default /etc/nginx/sites-available
# RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# RUN apt-get install php5 php5-fpm php5-mysql
# RUN apt-get install nginx

COPY ./src /var/www/dacoustie
COPY ./nginx/fpm.sh /docker-entrypoint.d/fpm.sh
COPY ./nginx/secrets.sh /docker-entrypoint.d/secrets.sh
RUN chmod +x /docker-entrypoint.d/fpm.sh
RUN chmod +x /docker-entrypoint.d/secrets.sh

# ENTRYPOINT [ "sh", "./entry.sh" ]

EXPOSE 80