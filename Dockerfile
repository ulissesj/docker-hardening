FROM php:7.4-apache
RUN groupadd -r ulisses && useradd -r -g ulisses ulisses
RUN docker-php-ext-install mysqli
USER ulisses