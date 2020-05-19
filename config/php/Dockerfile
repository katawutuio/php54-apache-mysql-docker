FROM php:5.4-apache
RUN apt-get update \
	&& docker-php-ext-install mysql \
	&& an2enmod rewrite \
	&& /etc/init.d/apache2 reload