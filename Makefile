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

down:
	docker-compose down app
	docker-compose down db

app-down:
	docker-compose down app

app-run:
	docker-compose exec app php artisan serve --host 0.0.0.0 --port 8000

dependencies:
	docker exec ChatApp composer update
	docker exec ChatApp composer require predis/predis
	docker exec ChatApp composer require livewire/livewire
	docker exec ChatApp php artisan livewire:publish --config
	# docker exec ChatApp composer require laravel/reverb
	# docker exec ChatApp php artisan reverb:install
	docker exec ChatApp composer install

db-create:
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'DROP DATABASE IF EXISTS ChatAppDB;'"
	docker-compose exec db sh -c "mysql -u root -p'password' -e 'CREATE DATABASE ChatAppDB;'"

db-migrate:
	# docker exec ChatApp php artisan migrate
	# docker exec ChatApp php artisan passport:install

db-seed:
	# docker exec ChatApp php artisan db:seed --class=
	docker exec ChatApp php artisan db:seed
	
redis-start:
	docker run -d --name redis-stack --network=chat-app-network -p 6379:6379 -p 8001:8001 redis/redis-stack:latest
	docker exec -it redis-stack redis-cli



do-it-all: # build it all
	@make build
	@make create-network
	@make up
	@make dependencies
	@make db-create
	@make db-migrate
	@make db-seed



# utils for docker and mysql

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