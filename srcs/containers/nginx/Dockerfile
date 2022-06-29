FROM debian:buster
RUN apt-get -y update && apt-get -y install nginx
COPY /conf/default /etc/nginx/sites-available/default
EXPOSE 443:443
CMD ["/usr/sbin/nginx", "-g", "daemon off;"]