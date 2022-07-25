init:
	cd src
	composer install
	npm install
	vendor/bin/sail up -d
	sail ps
up:
	cd src && vendor/bin/sail up -d
	cd src && vendor/bin/sail ps
share:
	expose share 127.0.0.1 --subdomain=humblebit
test:
	cd src && vendor/bin/sail artisan test --parallel
ecs:
	./src/vendor/bin/ecs check src --config dev/ecs/ecs.php
ecs-fix:
	./src/vendor/bin/ecs check src --config dev/ecs/ecs.php --fix
translations:
	cd src && vendor/bin/sail artisan translations:check --directory=lang
test-coverage:
	cd src && vendor/bin/sail artisan test --parallel --coverage-html=public/coverage
