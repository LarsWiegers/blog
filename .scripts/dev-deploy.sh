#!/bin/bash
set -e

sudo apt update
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.38.0/install.sh | bash
source ~/.bashrc

export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"  # This loads nvm
[ -s "$NVM_DIR/bash_completion" ] && \. "$NVM_DIR/bash_completion"  # This loads nvm bash_completion

nvm --version
nvm install v12.14.1

echo "Deployment started ..."

cd /var/www/html/src

# Enter maintenance mode or return true
# if already is in maintenance mode
(php artisan down) || true

# Pull the latest version of the app
git reset --hard
git clean -fd
git pull origin dev

# Install composer dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Install
npm install

# Clear the old cache
php artisan clear-compiled

# Run ziggy
php artisan ziggy:generate

# Recreate cache
php artisan optimize

# Compile npm assets
npm run dev

# Run database migrations
php artisan migrate --force

# Exit maintenance mode
php artisan up

echo "Deployment finished!"
