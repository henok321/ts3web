FROM php:7.0-apache
COPY ts3web /var/www/html
RUN chown -R www-data:www-data /var/www/html
WORKDIR /var/www/html
ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
