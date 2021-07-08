#!/bin/bash

mkdir etc/nginx/ssl_certs
openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl_certs/private.pem -keyout /etc/nginx/ssl_certs/public.key -subj '/C=RU/ST=Tatarstan/L=Kazan/O=Scholl_21/OU=jmarian'

service nginx start
service mysql start
service php7.3-fpm start

# create database
echo "create database wordpress default character set utf8 collate utf8_unicode_ci" | mysql
echo "grant all on wordpress.* to 'MimikUser'@'localhost' identified by '12345'" | mysql
echo "flush privileges" | mysql

bash