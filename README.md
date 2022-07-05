# inception


CHECK:
openssl s_client -connect localhost:443
docker container ls --format "table {{.ID}}\t{{.Names}}\t{{.Ports}}" -a

Containers:
1. nginx with tls v1.2 or v1.3 at port 443 (v)
2. wordpress and php-fpm at port 9000
3. mariadb at port 3306
4. redis cache for wordpress
5. ftp server: pointing to wordpress volume
6. adminer
7. Static site with my resume
8. service of my choice

Volumes:
1. wordpress database: avaliable to mariadb
2. wordpress website files: avaliable to wp and nginx
-> volumes at /home/bteak/data

Docker-network

Auto-restart containers


Wordpress database: two users. administrator + user
domain name pointing to localhost: bteak.42.fr
The .env file should be located at the root of the srcs directory.