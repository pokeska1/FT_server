
mv /etc/nginx/sites-available/localhost /nginx.conf
mv /nginx_copy.conf /etc/nginx/sites-available/localhost
mv /nginx.conf /nginx_copy.conf

service nginx restart
service mysql restart
service php7.3-fpm restart
bash