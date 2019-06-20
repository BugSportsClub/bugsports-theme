FROM wordpress:latest
RUN mkdir /var/www/html/wp-content && chown -R www-data:www-data /var/www/html/wp-content