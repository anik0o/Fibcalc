FROM php:8.0-apache
# Copy application source
COPY ./php/src /var/www/html/
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

EXPOSE  80