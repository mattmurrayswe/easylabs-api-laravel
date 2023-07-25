Crie o Arquivo .env
```sh
cp .env.example .env
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acesse o container app
```sh
docker-compose exec app bash
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

Doc de rotas
```sh
https://icy-summer-xir3wc6vqiim.vapor-farm-a1.com/manual/1.0/autenticacao
```

Deploy
```sh
rm -R node_modules
rm -R .docker
php vendor/bin/vapor deploy production
```

Auth
```sh
npm install
npm run dev
```