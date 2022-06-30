FROM debian:buster
RUN apt-get -y update && apt-get -y \
        install mariadb-server
# RUN         echo "lower_case_table_names=2" >> /etc/mysql/my.cnf
RUN			mkdir -p /run/mysqld && mkdir -p /var/lib/mysql
RUN			chown -R mysql:mysql /run/mysqld && chown mysql:mysql /var/lib/mysql
RUN echo "@TODO: Create DB, User and grant access"
EXPOSE 3306
# ENTRYPOINT ["tail", "-f", "/dev/null"]
CMD ["mysqld"]