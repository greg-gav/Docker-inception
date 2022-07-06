FROM debian:buster
RUN apt-get -y update && apt-get -y \
        install vsftpd
EXPOSE 21100
EXPOSE 21

COPY ./conf/vsftpd.conf /etc/vsftpd.conf
COPY ./conf/run.sh /

RUN chmod +x /run.sh

ENTRYPOINT ["/run.sh"]
CMD ["vsftpd", "/etc/vsftpd.conf"]
# CMD ["tail", "-f", "/dev/null"]

