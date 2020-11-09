
# Base image from dockerhub
FROM debian:buster

# Add label to image
LABEL maintainer="mazor@student.21-school.ru"

WORKDIR /var/www/mazor
COPY /srcs .
# Update package and install necessary programs
RUN apt-get update && apt-get install -y \
	nginx \
	mariadb-server \
	php-fpm php-mysql \
	php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip \
	vim wget \
# Dowload and extract wordpress and phpmyadmin
	&& wget https://wordpress.org/latest.tar.gz \
	&& wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz \
	&& tar -xzvf latest.tar.gz \
	&& tar -xzvf phpMyAdmin-5.0.4-all-languages.tar.gz \
	&& mv phpMyAdmin-5.0.4-all-languages phpmyadmin \
	&& rm *.tar.gz \
	&& openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-subj "/C=RU/ST=Moscow/L=Moscow/O=21-school/OU=no/CN=mazor" \
		-keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt\
	&& chown -R www-data:www-data /var/www/mazor

EXPOSE 80 443

CMD bash start.sh



