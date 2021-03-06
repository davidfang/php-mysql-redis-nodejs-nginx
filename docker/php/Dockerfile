FROM php:5.6-fpm

# Install modules
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libicu-dev \
                --no-install-recommends

RUN docker-php-ext-install mcrypt intl mbstring pdo_mysql exif \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd


RUN pecl install -o -f xdebug \
    && rm -rf /tmp/pear

COPY redis.tgz /home/redis.tgz
RUN pecl install /home/redis.tgz && echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini

COPY ./php.ini /usr/local/etc/php/
COPY ./www.conf /usr/local/etc/php/

COPY ./composer.phar /usr/local/bin/composer
RUN chmod 755 /usr/local/bin/composer


RUN apt-get purge -y g++ \
    && apt-get autoremove -y \
    && rm -r /var/lib/apt/lists/* \
    && rm -rf /tmp/*

RUN usermod -u 1000 www-data

WORKDIR /opt

EXPOSE 9000
CMD ["php-fpm"]

