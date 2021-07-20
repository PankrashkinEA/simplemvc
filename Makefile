up:
	docker-compose up -d

down:
	docker-compose down --remove-orphans

restart: down up

dbbash:
	docker-compose exec db bash