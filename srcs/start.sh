#!/bin/bash

cp nginx_autoindex_on.conf /etc/nginx/sites-enabled/
rm /etc/nginx/sites-enabled/default
mv wp-config.php wordpress/
mv config.inc.php phpmyadmin/
service mysql start
service nginx start
service php7.3-fpm start
mysql -u root < db_config.sql
bash
