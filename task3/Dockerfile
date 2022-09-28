FROM php

RUN mkdir /projects        && \
    cd /projects           && \
    apt-get update         && \
    apt-get install -y git && \
    git clone https://github.com/nicolasff/phpredis && \
    cd phpredis            && \
    phpize                 && \
    ./configure            && \
    make                   && \
    make install           && \
    docker-php-ext-enable redis
