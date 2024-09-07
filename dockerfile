FROM php:8.3.10-apache

COPY ./index.php ./ 

EXPOSE 3000

CMD [ "php", "-S", "0.0.0.0:3000" ]
