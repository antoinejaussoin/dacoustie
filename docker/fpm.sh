printf "listen.owner = nginx\nlisten.group = nginx\nlisten.mode = 0660\n" >> /etc/php/5.6/fpm/pool.d/www.conf

service php5.6-fpm start
