FROM php:5.4-apache
RUN apt-get update \
	&& docker-php-ext-install mysql \
	&& a2enmod rewrite \
	&& /etc/init.d/apache2 start
COPY php.ini /usr/local/etc/php
