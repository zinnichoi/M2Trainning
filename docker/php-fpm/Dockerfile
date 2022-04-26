FROM phpdockerio/php:7.4-fpm
WORKDIR "/application"

RUN apt-get update && apt-get upgrade -y; \
    apt-get -y --no-install-recommends install \
        php7.4-gd \
        php7.4-imagick \
        php7.4-intl \
        php7.4-memcached \
        php7.4-mongodb \
        php7.4-mysql \
        php7.4-pgsql \
        php7.4-redis \
        php7.4-soap \
        php7.4-ssh2 \
        php7.4-xdebug \
        php7.4-xsl \
        php7.4-yaml \
        php7.4-xml \
        php7.4-bcmath \
        php7.4-mbstring \
        php7.4-iconv \
        php7.4-json \
        php7.4-ctype \
        php7.4-curl \
        php7.4-dom \
        php7.4-fileinfo \
        php7.4-gd \
        php7.4-simplexml \
        php7.4-soap \
        php7.4-sockets \
        php7.4-xmlwriter \
        php7.4-xsl \
        php7.4-zip \
        wget \
        git \
        php-pear; \
    pecl install xdebug \
    && docker-php-ext-enable xdebug \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*