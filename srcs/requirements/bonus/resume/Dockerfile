FROM debian:buster
RUN apt-get -y update && apt-get -y \
        install nginx

COPY /conf/nginx.conf /etc/nginx/sites-available/default

EXPOSE 4000
RUN mkdir -p /var/www/html
COPY /web /var/www/html

RUN chown -R www-data:www-data /var/www/html

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]