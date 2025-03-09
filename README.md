# Web Service FAQI

![Faculdade QI Logo](https://qi.edu.br/wp-content/uploads/2023/09/faqi-300x116-1.png)

Este é um projeto desenvolvido em **Laravel** para gerenciamento de clientes, criado **para fins acadêmicos**. O sistema permite o cadastro, atualização, remoção e consulta de clientes, com a validação dos dados de endereço e integração com a API ViaCEP para consulta de CEP.

## Funcionalidades

-   **Cadastro de Clientes**: Adiciona um cliente com informações como nome, endereço, cidade, estado e CEP.
-   **Atualização de Clientes**: Permite atualizar as informações de um cliente existente.
-   **Exclusão de Clientes**: Remove um cliente do banco de dados.
-   **Consulta de CEP**: Utiliza a API ViaCEP para consultar informações de um CEP.

## Dados Aceitos

Os seguintes dados são aceitos para o cadastro e atualização dos clientes:

-   **Nome** (string) - Nome do cliente.
-   **Logradouro** (string) - Rua, avenida ou outra via.
-   **Número** (string) - Número do endereço.
-   **Complemento** (string, opcional) - Informações adicionais sobre o endereço.
-   **Bairro** (string) - Bairro do endereço.
-   **Cidade** (string) - Cidade do endereço.
-   **UF** (string) - Unidade federativa (estado) com 2 caracteres.
-   **CEP** (string) - Código postal no formato `xxxxxxxx`.

## Como o Sistema Funciona

O sistema exibe os clientes cadastrados diretamente na página inicial (`/`). A seguir estão as principais ações que podem ser realizadas:

### 1. **Cadastrar Novo Cliente**

Na página de índice, você pode cadastrar um novo cliente fornecendo os dados:

-   Nome
-   Logradouro
-   Número
-   Complemento (opcional)
-   Bairro
-   Cidade
-   UF
-   CEP

### 2. **Atualizar Cliente**

Na lista de clientes, há uma opção para editar os dados de um cliente. Após realizar as alterações, o sistema atualizará as informações no banco de dados.

### 3. **Excluir Cliente**

Você também pode excluir um cliente diretamente da página inicial. Ao confirmar, o cliente será removido do banco de dados.

### 4. **Consultar CEP**

A consulta de um CEP pode ser realizada na página, onde será possível preencher o campo de CEP, e o sistema irá buscar as informações relacionadas ao CEP fornecido.

## Como Rodar o Projeto Localmente

1. Clone o repositório:

    ```bash
    git clone https://github.com/jonathan-laco/web-service-FAQI.git
    ```

2. Acesse o diretório do projeto:

    ```bash
    cd web-service-FAQI
    ```

3. Instale as dependências:

    ```bash
    composer install
    ```

4. Copie o arquivo `.env.example` para `.env`:

    ```bash
    cp .env.example .env
    ```

5. Gere a chave de aplicação:

    ```bash
    php artisan key:generate
    ```

6. Execute as migrações para criar as tabelas no banco de dados:

    ```bash
    php artisan migrate
    ```

7. Inicie o servidor:

    ```bash
    php artisan serve
    ```

8. O projeto estará disponível em `http://127.0.0.1:8000`.

## Tecnologias Usadas

-   **Laravel** (Framework PHP)
-   **MySQL** (Banco de dados)
-   **API ViaCEP** (Consulta de CEP)
