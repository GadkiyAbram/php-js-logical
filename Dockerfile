FROM php:apache

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \
    && apt-get install -y nodejs

COPY frontend_tasks/script.js /var/www/html/

CMD ["apache2-foreground"]