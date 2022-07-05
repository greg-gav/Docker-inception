FROM debian:buster
RUN apt-get -y update && apt-get -y \
        install vsftpd
EXPOSE 21100

COPY ./conf/vsftpd.conf /etc/vsftpd.conf
RUN adduser bteak --disabled-password
RUN echo "bteak:bteak" | chpasswd
RUN echo bteak >> /etc/vsftpd.userlist
RUN mkdir -p /var/www/html
RUN mkdir -p /var/ftp
RUN chown -R bteak:bteak /var/www/html


CMD ["vsftpd", "/etc/vsftpd.conf"]

# CMD ["tail", "-f", "/dev/null"]
