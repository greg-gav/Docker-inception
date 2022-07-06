NAME = inception

SRC = ./srcs/docker-compose.yml

all : ${NAME}

${NAME}:
	docker-compose -f ${SRC} build --parallel
	docker-compose -f ${SRC} up -d

re : fclean all

stop : 
	docker-compose -f ${SRC} down

clean :
	docker-compose -f ${SRC} down --rmi all

fclean : clean
	docker system prune -f

.PHONY: clean fclean all stop

