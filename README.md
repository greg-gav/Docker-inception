# inception


TODO:
***subject v

srcs folder is mandatory
Makefile is mandatory


docker-compose

Containers:
1. nginx with tls v1.2 or v1.3 at port 443
2. wordpress and php-fpm at port 9000
3. mariadb at port 3306
4. redis cache for wordpress
5. ftp server: pointing to wordpress volume
6. Static site with my resume
7. adminer
8. service of my choice

Volumes:
1. wordpress database: avaliable to mariadb
2. wordpress website files: avaliable to wp and nginx
-> volumes at /home/bteak/data

Docker-network

Auto-restart containers


Wordpress database: two users. administrator + user
domain name pointing to localhost: bteak.42.fr