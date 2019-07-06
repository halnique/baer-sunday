up:
	docker-compose up -d

down:
	docker-compose down

exec:
	docker-compose exec workspace bash

test:
	circleci local execute --job build
