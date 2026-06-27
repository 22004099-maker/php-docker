FROM php:8.2-apache

WORKDIR /var/www/html

COPY . .

RUN apt-get update && \
    apt-get install -y \
    vim \
    nano \
    unzip \
    zip \
    wget \
    curl \
    git \
    tree \
    net-tools \
    iputils-ping

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 80