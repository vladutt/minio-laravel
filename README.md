<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Docker
Config the docker as you wish. All settings can be found in `docker-compose.yml`. Docker has the next services: 

- nginx (config can be found in root as 'nginx.sample.conf')
- php7.4-fpm (About libs & ext in Dockerfile)
- mysql (CHANGE EVERY ENVIRONMENT)
- minio (CHANGE ACCESS & SECRET KEY)

## About Laravel
Create your ENV based on configurations from `docker-compose.yml`

## Run projects
1. Run `docker-compose build` OR `docker build .` to build the images
2. Run `docker-compose up -d` to start the container
3. Run `docker exec -it storage-app bash` to access the machine terminal
4. Run `composer install` from machine terminal
5. Done. Access: `http://localhost:8080`

<h3 align="center">
DO WANT YOU WANT :D
</h3>
