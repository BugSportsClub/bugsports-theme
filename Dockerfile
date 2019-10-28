FROM wordpress:latest
<<<<<<< HEAD
ADD ./bugsports-theme /usr/src/wordpress/wp-content/themes/bugsports-theme
=======
RUN mkdir -p /var/www/html/wp-content && \
        chown -R 33:33 /var/www/html/wp-content
>>>>>>> WIP dockerizing
