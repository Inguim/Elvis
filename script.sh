#!/bin/bash
cd /home/terceirocefetvga/www/elvisgabriella
composer install && yarn install && yarn prod
php artisan migrate