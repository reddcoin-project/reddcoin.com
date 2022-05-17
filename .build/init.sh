#!/bin/sh

apt update
apt install git unzip -y

curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
composer install

# then run the CMD passed as command-line arguments
exec "$@"
