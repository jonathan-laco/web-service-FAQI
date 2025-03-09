# viaCep

Este projeto é uma API simples desenvolvida em **Laravel** para realizar consultas de CEP através da API **ViaCEP**, com funcionalidades de cadastro, edição e exclusão de usuários. Este é um **projeto acadêmico da Faculdade QI (FAQI)**.

## Tecnologias utilizadas

-   **Laravel**: Framework PHP
-   **Tailwind CSS**: Framework CSS para estilização
-   **API ViaCEP**: Para consulta de endereços via CEP
-   **PHP 8.x**: Versão do PHP utilizada no desenvolvimento

## Requisitos

Antes de rodar o projeto, você precisa ter os seguintes requisitos instalados em sua máquina:

-   [PHP 8.x ou superior](https://www.php.net/downloads)
-   [Composer](https://getcomposer.org/download/)
-   [Laravel 10.x](https://laravel.com/docs/10.x)
-   [MySQL](https://www.mysql.com/downloads/) ou outro banco de dados relacional de sua escolha

## Instalação

### 1. Clonar o repositório

Clone este repositório para sua máquina local utilizando o comando:

```bash
git clone https://github.com/usuário/viaCep.git
```

### 2. Instalar as dependências

Acesse o diretório do projeto e execute o comando abaixo para instalar as dependências do Laravel:

```bash
cd viaCep
composer install
```

### 3. Configurar o arquivo `.env`

Copie o arquivo `.env.example` para um novo arquivo `.env`:

```bash
cp .env.example .env
```

Abra o arquivo `.env` e configure suas credenciais de banco de dados:

```bash
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 4. Gerar a chave de aplicação

Execute o comando para gerar a chave da aplicação:

```bash
php artisan key:generate
```

### 5. Rodar as migrações

Se o projeto utilizar banco de dados, execute as migrações para criar as tabelas necessárias:

```bash
php artisan migrate
```

### 6. Rodar o servidor

Agora você pode rodar o servidor de desenvolvimento do Laravel:

```bash
php artisan serve
```

O servidor estará rodando em [http://localhost:8000](http://localhost:8000).

## Funcionalidades

-   **Cadastro de usuários**: Adiciona novos usuários ao sistema com informações de nome, e-mail e CEP.
-   **Consulta de CEP**: Através da API ViaCEP, consulta os dados do endereço baseado no CEP informado.
-   **Edição de usuários**: Permite editar informações de usuários cadastrados.
-   **Exclusão de usuários**: Remove usuários do banco de dados.
-   **Interface amigável**: Utiliza o Tailwind CSS para uma interface limpa e funcional.

## Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
