# Para iniciar o projeto:

1. Acessar a pasta plan-marketing-api;

2. Utilizar o comando:

```
composer install
```

3. Alterar o .env para o banco de dados utilizado;

4. Utilizar o comando:

```

php artisan migrate
```

5. Iniciar a API:

```

php artisan serve para iniciar a API
```

6. Acessar a pasta teste-plan-marketing

7. Utilizar o comando:

```

npm install
```

8. Iniciar a página:

```

npm run serve
```

## Exemplo de requisição e retorno:

> /api/brands/ - Listar as Marcas
Retorno:

```

{
  [
		{
			"id": 1,
			"name": "Electrolux",
			"created_at": "2023-08-10T14:29:30.000000Z",
			"updated_at": "2023-08-10T14:29:30.000000Z"
		},
		{
			"id": 9,
			"name": "LG",
			"created_at": "2023-08-10T15:07:40.000000Z",
			"updated_at": "2023-08-10T15:07:40.000000Z"
		}
	]
}
```
