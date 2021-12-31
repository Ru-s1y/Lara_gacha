FROM php:7.2-fpm
# install composer
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs

# RUN git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis && \
#     docker-php-ext-install redis

RUN npm install
RUN npm install --save vue-router bootstrap-vue bootstrap

COPY ./php.ini 	/usr/local/etc/php/

WORKDIR /var/www/html