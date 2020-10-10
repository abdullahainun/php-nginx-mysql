FROM alpine:3.11

# Install basic depedency
RUN apk --update add curl git unzip

RUN echo "https://dl.bintray.com/php-alpine/v3.11/php-7.3" >> /etc/apk/repositories

# Install php7 package
RUN apk --update add \
        php7 \
        php7-bcmath \
        php7-dom \
        php7-ctype \
        php7-curl \
        php7-fpm \
        php7-gd \
        php7-iconv \
        php7-intl \
        php7-json \
        php7-mbstring \
        php7-mcrypt \
        php7-mysqlnd \
        php7-opcache \
        php7-openssl \
        php7-pdo \
        php7-mysqli \
        php7-pdo_mysql \
        php7-pdo_pgsql \
        php7-pdo_sqlite \
        php7-phar \
        php7-posix \
        php7-session \
        php7-soap \
        php7-xml \
        php7-zip \
        php7-fileinfo \
        php7-tokenizer \
        php7-xmlwriter \
    && rm -rf /var/cache/apk/*

WORKDIR /application

# php composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

#MAKE PHP-FPM LISTEN TO REQUESTS COMING FROM DOCKER NETWORK
RUN sed -i -e 's/listen = 127.0.0.1:9000/listen = 0.0.0.0:9000/g' /etc/php7/php-fpm.d/www.conf

#PHP FPM PROCESS MUST RUN ON USER FOR LOG FILE WRITING PERMISSION
# RUN adduser -S php
# USER php

EXPOSE 9000

CMD ["php", "-S", "0.0.0.0:9000", "-t", "."]