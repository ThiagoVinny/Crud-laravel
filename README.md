# CRUD de Produtos com Relacionamento de Categoria

Este projeto é um sistema simples de gerenciamento de produtos, onde cada produto pertence a uma categoria. O objetivo é demonstrar a implementação de um CRUD completo (Create, Read, Update, Delete) com relacionamentos entre modelos no Laravel.

## 🚀 Tecnologias Utilizadas

- **Laravel 10** - Framework PHP para desenvolvimento web.
- **Docker** - Containerização do ambiente de desenvolvimento.
- **PostgreSQL** - Banco de dados relacional utilizado no projeto.
- **Keycloak** - Gerenciamento de autenticação e autorização.
- **Node.js e NPM** - Utilizados para a compilação dos assets do frontend.

---

## 📋 Como Usar

### 1️⃣ Clone o repositório
```bash
 git clone https://github.com/ThiagoVinny/Crud-laravel.git
 cd Crud-laravel
```

### 2️⃣ Gere as imagens do Docker e inicie os containers
```bash
docker-compose up -d --build
```
Isso criará e iniciará os serviços necessários, como a aplicação Laravel, PostgreSQL e Keycloak.

### 3️⃣ Instale as dependências do frontend
```bash
npm install && npm run build
```

### 4️⃣ Acesse o Bash do container Laravel
```bash
docker exec -it laravel_app bash
```
Isso permitirá que você execute comandos dentro do ambiente Laravel.

### 5️⃣ Instale as dependências do Laravel
```bash
composer install
```

### 6️⃣ Configure o ambiente
Crie o arquivo de configuração `.env`:
```bash
cp .env.example .env
```

### 7️⃣ Gere a chave da aplicação Laravel
```bash
php artisan key:generate
```

### 8️⃣ Configure o banco de dados
Edite o arquivo `.env` e altere as configurações do banco de dados para:
```
DB_CONNECTION=pgsql
DB_HOST=postgres_db
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

### 9️⃣ Execute as migrações
```bash
php artisan migrate
```
Isso criará as tabelas no banco de dados.

### 🔟 Inicie o servidor Laravel
```bash
php artisan serve
```
O servidor estará disponível em `http://localhost:8077`.

---

## 🔑 Acesso ao Keycloak

Após subir os containers, acesse o Keycloak em `http://localhost:8080/` com as credenciais:
- **Usuário:** admin
- **Senha:** admin

Caso queira configurar autenticação para sua aplicação, crie um novo realm e configure um client OAuth2 para integração com Laravel.

---

## 📌 Rotas Disponíveis

### Produtos (Products)
- **GET /products** - Lista todos os produtos.
- **GET /products/{id}** - Exibe detalhes de um produto específico.
- **POST /products** - Cria um novo produto.
- **PUT /products/{id}** - Atualiza um produto existente.
- **DELETE /products/{id}** - Remove um produto.

### Categorias (Categories)
- **GET /categories** - Lista todas as categorias.
- **GET /categories/{id}** - Exibe detalhes de uma categoria específica.
- **POST /categories** - Cria uma nova categoria.
- **PUT /categories/{id}** - Atualiza uma categoria existente.
- **DELETE /categories/{id}** - Remove uma categoria.

---

## 📜 Licença
Este projeto está licenciado sob a **MIT License**.

Desenvolvido por [Thiago Vinny](https://github.com/ThiagoVinny).

