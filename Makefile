up:
	docker-compose up -d

down:
	docker-compose down

exec:
	docker-compose exec workspace bash

test:
	docker-compose exec workspace vendor/bin/phpunit
