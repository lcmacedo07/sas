
# Setup Docker Para Projetos Laravel 9 com PHP 8

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/lcmacedo07/sas.git
```

```sh
cd sas/
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Acesse o projeto
```sh
code .
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=sas
APP_URL=http://localhost:8955

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=sas
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Rode a migration com as seeders
```sh
php artisan migrate --seed
```

Acesse o projeto via postman ou outro serviços de api
```sh
rota de login: http://localhost:8955/api/v1/auth/login

rota do crud: http://localhost:8955/api/v1/books

roda do logout: http://localhost:8955/api/v1/auth/logout
```

Para acessar os usuarios para login, ele estara dentro das seeders

