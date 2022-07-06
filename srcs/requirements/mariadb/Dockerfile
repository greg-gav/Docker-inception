FROM debian:buster
RUN apt-get -y update && apt-get -y \
        install mariadb-server
RUN	mkdir -p /run/mysqld && mkdir -p /var/lib/mysql
RUN	chown -R mysql:mysql /run/mysqld && chown -R mysql:mysql /var/lib/mysql

EXPOSE 3306
COPY /conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./conf/run.sh /
RUN chmod +x /run.sh

ENTRYPOINT ["/run.sh"]
CMD ["mysqld"]

