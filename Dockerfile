# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: jmarian <jmarian@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/02/20 12:45:06 by jmarian           #+#    #+#              #
#    Updated: 2021/02/26 21:30:47 by jmarian          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install openssl -y
RUN apt-get install -y php7.3-fpm php7.3-mysql php7.3-mbstring php7.3-xml
RUN apt-get install -y default-mysql-server
RUN apt-get install wget -y
RUN apt-get install vim -y
RUN apt-get install rename -y

RUN mkdir downloads

RUN apt-get install nginx -y
COPY ./srcs/nginx.conf /etc/nginx/sites-available/localhost
COPY ./srcs/nginx_copy.conf ./nginx_copy.conf 
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
RUN rm -rf /etc/nginx/sites-enabled/default

RUN mkdir /var/www/html/phpmyadmin
RUN mkdir /var/www/html/phpmyadmin/tmp
RUN wget -P /downloads https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.tar.gz
RUN tar xvzf downloads/phpMyAdmin-5.1.0-all-languages.tar.gz -C /downloads
RUN mv /downloads/phpMyAdmin-5.1.0-all-languages/* /var/www/html/phpmyadmin
RUN rm /downloads/phpMyAdmin-5.1.0-all-languages.tar.gz
COPY ./srcs/config.inc.php /var/www/html/phpmyadmin


RUN wget -P /downloads https://wordpress.org/latest.tar.gz
RUN tar xvzf downloads/latest.tar.gz -C /downloads
RUN mv /downloads/wordpress /var/www/html/
RUN rm /downloads/latest.tar.gz
COPY ./srcs/wp-config.php /var/www/html/wordpress
RUN rm -rf /var/www/html/wordpress/wp-config-sample.php

RUN chown -R www-data /var/www/html
RUN chmod -R 755 /var/www/html



COPY ./srcs/change_autoindex.sh ./change_autoindex.sh
COPY ./srcs/start.sh /

EXPOSE 80 443

ENTRYPOINT sh start.sh && bash