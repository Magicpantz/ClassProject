FROM php:8.2-cli
WORKDIR /usr/src/app
COPY . .
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
EXPOSE 3030
CMD ["php", "-S", "0.0.0.0:3030"]
