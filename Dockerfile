FROM php:7.1-fpm
RUN apt-get update -y && apt-get install -y sendmail libpng-dev
RUN docker-php-ext-install gd
RUN docker-php-ext-install mysqli 
RUN docker-php-ext-enable mysqli
COPY . /code
RUN ls