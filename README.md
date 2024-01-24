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
Homolog
https://aged-oasis-di8qclo59nbp.vapor-farm-f1.com

Prod
https://frosty-geyser-f6gyi7hxpw0a.vapor-farm-g1.com
```

Doc de rotas (Deprecated) usou-se Postman
```sh
https://aged-oasis-di8qclo59nbp.vapor-farm-f1.com/manual/1.0/autenticacao
```

Images
```sh
Adicionar o docker dentro do sail para permitir deploy
/vendor/laravel/sail/runtimes/8.2/Dockerfile
Adicione as seguintes linhas 
RUN curl -fsSL https://get.docker.com | bash
RUN usermod -aG docker sail
```

Deploy Homolog
```sh
rm -R node_modules
rm -R .docker
php vendor/bin/vapor deploy prod-docker
```

Deploy Prod
```sh
rm -R node_modules
rm -R .docker
php vendor/bin/vapor deploy prod-docker-1
```

Deploy
```sh
npm run dev
```

Doc. de Envs Vapor
```
https://docs.vapor.build/projects/environments.html
```

Admin Login
```sh
npm install
npm run dev
```