docker stop $(docker ps -qa); docker rm $(docker ps -qa);
docker rmi -f $(docker images -qa); docker volume rm $(docker volume ls -q);
docker network rm $(docker network ls -q) 2>/dev/null
sudo rm -rf /home/bteak/data/*
sudo mkdir -p /home/bteak/data/wp && mkdir -p /home/bteak/data/db