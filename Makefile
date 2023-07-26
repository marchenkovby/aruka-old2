CONTAINER_NAME ?= aruka-app

docker-up:
	docker-compose up -d
	make composer-install
	make install

docker-build:
	docker-compose up -d --build
	make composer-install
	make install

docker-down:
	docker-compose down
	rm composer.lock
	rm -rf vendor

composer-install:
	docker exec $(CONTAINER_NAME) composer install

composer-update:
	docker exec $(CONTAINER_NAME) composer dump-autoload

composer-dump-autoload:
	docker exec -it $(CONTAINER_NAME) composer dump-autoload

sh:
	docker exec -it $(CONTAINER_NAME) sh

install:
	docker exec -it $(CONTAINER_NAME) php bin/install.php
