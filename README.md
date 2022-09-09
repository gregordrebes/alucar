# Instalação das tecnologias utilizadas
## PHP
$ sudo apt install php php-xml php-pgsql

## Composer
$ sudo apt install composer

## Docker Compose(Opcional)
$ sudo apt install docker-compose

# Sistema
## Clone
$ git clone https://gitlab.com/patrick.scheibel/crud-laravel.git

## Depois de baixar o projeto, acesse a pasta e instale as dependências necessárias
$ composer install

Para acessar o banco, crie uma cópia do arquivo .env e configure a conexão.\
Utilizei migration para o banco de dados, mas caso seja necessário, o script com o sql está na pasta <i>database</i> e também estou anexando o arquivo no email.

## Criar e executar o banco pelo docker-compose(Opcional)
$ sudo docker-compose up -d

## Executar as migrations(Opcional)
$ php artisan migrate

## Gerar chave necessária para executar o sistema
$ php artisan key:generate

## Executar o sistema 
$ sudo php artisan serve

# Observações
Acabei utilizando o “sudo” em alguns comandos, por causa do usuário não ter as permissões necessárias, portanto pode ocorrer erros caso não seja usado.\
Para acessar o CRUD, utilize o caminho <i>localhost:8000/users</i> ou <i>localhost:8000/</i> que apresenta uma opção para redirecionar para a listagem.\
As datas estão em formato "mês/dia/ano", como não consegui alterar o formato exibido no input date, acabei padronizando desta maneira, para assim não confundir o usuário. 
