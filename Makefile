up:
	docker-compose up -d
ps:
	docker-compose ps
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
down:
	docker-compose down
restart:
	docker-compose restart
logs-watch:
	docker-compose logs --follow
celiacity:
	docker-compose exec app bash
migrate:
	docker-compose exec app php artisan migrate
rollback:
	docker-compose exec app php artisan migrate:rollback
seeders:
	cd docker && docker-compose exec app php artisan db:seed
autoload:
	cd docker && docker-compose exec app composer dump-autoload
install:
	cd docker && docker-compose exec app composer install
