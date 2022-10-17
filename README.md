Instalação das tecnologias utilizadas
## PHP
$ sudo apt install php php-xml php-pgsql

## Composer
$ sudo apt install composer

## Docker Compose(Opcional)
$ sudo apt install docker-compose

# Sistema
## Clone
$ git clone https://github.com/gregordrebes/alucar

## Depois de baixar o projeto, acesse a pasta e instale as dependências necessárias
$ composer install

Para acessar o banco, crie uma cópia do arquivo .env e configure a conexão.\
Utilizei migration para o banco de dados, mas caso seja necessário, o script com o sql está na pasta <i>database</i>.

## Executar as migrations(Opcional)
$ php artisan migrate

## Gerar chave necessária para executar o sistema
$ php artisan key:generate

## Executar o sistema 
$ sudo php artisan serve

# Observações
Para acessar o sistema, utilize o caminho //localhost/alucar/public que apresenta uma opção de login ou um novo registro no canto superior direito da tela.

