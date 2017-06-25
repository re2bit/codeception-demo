FROM php:7.1-apache

RUN apt-get update \
 && apt-get install -y git net-tools zlib1g-dev curl vim libssl-dev libicu-dev libxslt-dev graphviz \
 && docker-php-ext-install zip \
 && docker-php-ext-install pdo_mysql \
 && a2enmod rewrite \
 && sed -i 's!/var/www/html!/var/www/web!g' /etc/apache2/sites-enabled/000-default.conf \
 && mv /var/www/html /var/www/web \
 && curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install mongodb \
 && pecl install xdebug
RUN docker-php-ext-enable mongodb \
 && docker-php-ext-enable xdebug

COPY php/* /usr/local/etc/php/conf.d/
RUN cat /usr/local/etc/php/conf.d/.docker-php-ext-xdebug.ini >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

WORKDIR /var/www
