FROM debian:buster
RUN apt-get -y update && apt-get -y \
        install nginx openssl
RUN mkdir -p /etc/nginx/ssl
RUN openssl req -newkey rsa:2048 -x509 -nodes \
        -out /etc/nginx/ssl/bteak.crt \
        -keyout /etc/nginx/ssl/bteak.key \
        -subj "/C=IT/ST=Moscow/L=Moscow/O=21 School/OU=bteak/CN=bteak/"
COPY /conf/nginx.conf /etc/nginx/sites-available/default
EXPOSE 443
CMD ["/usr/sbin/nginx", "-g", "daemon off;"]