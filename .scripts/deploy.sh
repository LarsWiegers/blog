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
git pull origin production

# Install composer dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Clear the old cache
php artisan clear-compiled

# Recreate cache
php artisan optimize

# NPM install
npm install

# Compile npm assets
npm run prod

# Run database migrations
php artisan migrate --force

# Exit maintenance mode
php artisan up

# Install the cli
curl -sL https://sentry.io/get-cli/ | SENTRY_CLI_VERSION="2.2.0" bash
# Setup configuration values
SENTRY_AUTH_TOKEN=5f1abf9338e249188f6b3f94a5246f722a3757022d6f4ab19d8339e08aadc385 # From internal integration: Release management
SENTRY_ORG=humblebid
SENTRY_PROJECT=humblebid
VERSION=`sentry-cli releases propose-version`
# Workflow to create releases
sentry-cli releases new "$VERSION"
sentry-cli releases set-commits "$VERSION" --auto
sentry-cli releases finalize "$VERSION"

echo "Deployment finished!"
