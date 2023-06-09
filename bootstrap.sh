#!/bin/bash

PROJECTFOLDER="Cinema-app"

MODULES="pgsql"

cd $PROJECTFOLDER || exit

docker run --rm --interactive --tty \
  --volume "$(pwd)":/app \
  composer \
  bash -c "composer require laravel/sail --dev"

cp .env.example .env

docker run --rm \
    -v "$(pwd)":/opt \
    -w /opt \
    laravelsail/php82-composer:latest \
    bash -c "php artisan key:generate"

docker run --rm \
    -v "$(pwd)":/opt \
    -w /opt \
    laravelsail/php82-composer:latest \
    bash -c "php artisan sail:install --with=$(echo $MODULES | tr ',' ',')"

./vendor/bin/sail build
./vendor/bin/sail pull $MODULES

if sudo -n true 2>/dev/null; then
    sudo chown -R $USER: .
    echo -e "${BOLD}Get started with:${NC} cd $PROJECTFOLDER && ./vendor/bin/sail up"
else
    echo -e "${BOLD}Please provide your password so we can make some final adjustments to your application's permissions.${NC}"
    echo ""
    sudo chown -R $USER: .
    echo ""
    echo -e "${BOLD}Thank you! We hope you build something incredible. Dive in with:${NC} cd $PROJECTFOLDER && ./vendor/bin/sail up"
fi