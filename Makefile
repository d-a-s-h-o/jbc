build:
	docker-compose build

deploy:
	docker-compose up -d

run:
	docker-compose up -d

stop:
	docker-compose stop

redeploy:
	docker-compose down
	docker image rm -a
	docker-compose up -d