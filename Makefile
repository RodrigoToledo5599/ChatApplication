build:
	# docker-compose build --no-cache --force-rm
	docker-compose build app
	docker-compose build db

create-network:
	docker network create chat-app-network

up:
	docker-compose up app -d
	docker-compose up db -d

app-up:
	docker-compose up app -d

app2-up:
	docker-compose up app2 -d

down:
	docker-compose down app
	docker-compose down db

app-down:
	docker-compose down app

app-run:
	docker-compose exec app php artisan serve --host 0.0.0.0 --port 8000

app-run-2:
	docker-compose exec app2 php artisan serve --host 0.0.0.0 --port 8002

dependencies:
	docker exec ChatApp composer update
	docker exec ChatApp composer require predis/predis
	docker exec ChatApp composer require livewire/livewire
	docker exec ChatApp php artisan install:broadcasting
	docker exec ChatApp php artisan livewire:publish --config
	docker exec ChatApp composer install

dependencies2:
	docker exec ChatApp2 composer update
	docker exec ChatApp2 composer require predis/predis
	docker exec ChatApp2 composer require livewire/livewire
	docker exec ChatApp2 php artisan livewire:publish --config
	docker exec ChatApp2 composer install

db-create:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'DROP DATABASE IF EXISTS ChatAppDB;'"
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'CREATE DATABASE ChatAppDB;'"

db-migrate:
	docker exec ChatApp php artisan migrate
	# docker exec ChatApp php artisan passport:install

db-seed:
	# docker exec ChatApp php artisan db:seed --class=
	docker exec ChatApp php artisan db:seed

clear-all:
	docker exec ChatApp php artisan cache:clear
	docker exec ChatApp php artisan config:clear
	docker exec ChatApp php artisan route:clear
	docker exec ChatApp php artisan view:clear


redis-start:
	docker run -d --name redis-stack --network=chat-app-network -p 6379:6379 -p 8001:8001 redis/redis-stack:latest
	docker exec -it redis-stack redis-cli



download-ws:
	docker run -p 6001:6001 -p 9601:9601 -d --name=websocket --network=chat-app-network quay.io/soketi/soketi:1.4-16-debian
start-ws:
	docker start websocket
stop-ws:
	docker stop websocket




do-it-all: # build it all
	# @make build
	# @make create-network
	@make up
	@make dependencies
	@make db-create
	@make db-migrate
	@make db-seed


# db queries: ==============================================================================================================

see-all-dbs:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'SHOW DATABASES;'"

see-tables:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'USE ChatAppDB; SHOW TABLES;'"

see-users:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'USE ChatAppDB; SELECT * FROM users;'"

see-auth-tokens:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'USE ChatAppDB; SELECT * FROM personal_access_tokens;'"

delete-auth-tokens:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'USE ChatAppDB; DELETE FROM personal_access_tokens;'"

see-sessions:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'USE ChatAppDB; SELECT * FROM sessions;'"

delete-sessions:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'USE ChatAppDB; DELETE FROM sessions;'"

see-conversations:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'USE ChatAppDB; SELECT * FROM conversations;'"


see-messages:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'USE ChatAppDB; SELECT * FROM messages;'"