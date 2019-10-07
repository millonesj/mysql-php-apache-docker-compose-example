FROM php:7.0.1-apache

RUN apt-get clean
RUN apt-get update && apt-get install -y mysql-client libmysqlclient-dev \
      && docker-php-ext-install mysqli mbstring
