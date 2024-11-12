FROM php:8.1.17-apache

RUN docker-php-ext-install pdo_mysql

RUN apt-get update -y
RUN apt-get install -y git
RUN apt-get install -y unzip
RUN apt-get install -y libpng-dev libjpeg62-turbo-dev &&\
  docker-php-ext-configure gd --with-jpeg &&\
  docker-php-ext-install -j$(nproc) gd
