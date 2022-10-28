<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel 8 Crud de usuários, permissionamento e produtos


Downlaod the project from github

set database config at .env file

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lavavel
DB_USERNAME=root
DB_PASSWORD=
```
php artisan migrate

##Instalar dependências
apt-get install php-pgsql php php-xml

acesso admin
```
email: admin@admin.com
password: 12345678
```
## Composer
$ sudo apt install composer

# Sistema
## Clone
$ git clone https://github.com/douglasvargas1995/alucarmaster.git

## Depois de baixar o projeto, acesse a pasta e instale as dependências necessárias
$ composer install

Para acessar o banco, crie uma cópia do arquivo .env e configure a conexão.\
Utilizei migration para o banco de dados, mas caso seja necessário, o script com o sql está na pasta <i>database</i> e também estou anexando o arquivo no email.


## Executar as migrations(Opcional)
$ php artisan migrate

## Executar as seeders
$php artisan db:seed

## Gerar chave necessária para executar o sistema
$ php artisan key:generate

## Executar o sistema 
$ sudo php artisan serve

# Observações
Para acessar o sistema, utilize o caminho //localhost/alucarmaster/public que apresenta uma opção de login ou um novo registro no canto superior direito da tela.

