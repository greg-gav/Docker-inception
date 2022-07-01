FROM debian:buster
RUN apt-get -y update && apt-get -y \
        install mariadb-server
RUN	mkdir -p /run/mysqld && mkdir -p /var/lib/mysql
RUN	chown -R mysql:mysql /run/mysqld && chown mysql:mysql /var/lib/mysql

COPY /conf/conf.cnf /etc/mysql/mariadb.conf.d/
RUN service mysql start && echo \
"CREATE DATABASE IF NOT EXISTS wordpress; \
CREATE USER IF NOT EXISTS 'bteak'@'%' IDENTIFIED BY 'bteak'; \
GRANT ALL PRIVILEGES ON wordpress.* TO 'bteak'@'%'; \
FLUSH PRIVILEGES; \
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root';" | mysql

EXPOSE 3306
# ENTRYPOINT ["tail", "-f", "/dev/null"]
CMD ["mysqld"]

