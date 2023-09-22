Crie o Arquivo .env
```sh
cp .env.example .env
```

Suba os containers do projeto
```sh
./vendor/bin/sail up
```

Acesse o container app
```sh
docker-compose exec laravel.test bash
```

Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Permissão na pasta /storage
```sh
chmod -R 777 storage
```

Acesse o projeto
```sh
https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com
```

Doc de rotas (Deprecated) usou-se Postman
```sh
https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/manual/1.0/autenticacao
```

Images
```sh
Adicionar o docker dentro do sail para permitir deploy
/vendor/laravel/sail/runtimes/8.2/Dockerfile
Adicione as seguintes linhas 
RUN curl -fsSL https://get.docker.com | bash
RUN usermod -aG docker sail
```

Deploy
```sh
rm -R node_modules
rm -R .docker
php vendor/bin/vapor deploy prod-docker
```

Admin Login
```sh
npm install
npm run dev
```