# Documentação da API

## Visão Geral
**Nome**: Car Shop

**Descrição**: Esta API tem o intuito de representar um catálogo de venda de carros 


## Pré-requisitos

1. **Composer**
2. **PHP** Versão: >= 8.0
3. **Laravel** Versão: >=10
4. **Git**
6. **Banco de dados MongoDB**

## Como rodar
1. **Clonar o Repositório do GitHub e Selecionar Diretório**
   
   Abra o terminal e execute:

    ```sh
    git clone https://github.com/ranyesantos/Car-Shop-API.git
    ```

    Após clonar, para selecionar o diretório do projeto, execute:
    ```sh
    cd Car-Shop-Api
    ```

2. **Instalar Dependências do PHP**

    No diretório do projeto, execute:
    ```sh
    composer install
    ```
    
3. **Configurar Variáveis de Ambiente**

    Copie o arquivo `.env.example` para `.env` com o comando:
    ```sh
    cp .env.example .env
    ```

    Edite o arquivo .env com suas configurações de banco de dados e outras variáveis de ambiente necessárias. Por exemplo:
    ```sh
    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=carshop
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```


4. **Gerar a Chave da Aplicação**

    Execute o comando para gerar a chave da aplicação:
    ```sh
    php artisan key:generate
    ```

5. **Execute Migrations e Seeders**

    Execute as migrations para criar as tabelas no banco de dados
    ```sh
    php artisan migrate
    ```

    Após executar as migrations, popule o banco de dados com o comando:
    ```sh
    php artisan db:seed
    ```

6. **Iniciar o Servidor de Desenvolvimento**

    Para iniciar o servidor embutido do Laravel, execute o comando:
    ```sh
    php artisan serve
    ```




## Funcionalidades:

### Operações CRUD
1. **Adicionar Carro**
2. **Listar Carros**
3. **Atualizar Carro**
4. **Excluir Carro**

## Funcionalidades em Desenvolvimento:


### Filtragem e pesquisa
1. **Pesquisar por Marca**
2. **Pesquisar por Modelo**
3. **Filtrar por Faixa de Preço**
4. **Pesquisar por Placa**
   
### Análise e Relatórios
1. **Carros mais Caros**
2. **Carros mais Baratos**
3. **Contar Carros por Marca**



### Ordenação
1. **Ordenar Carros por Preço**
2. **Ordenar Carros por Data de Adição**

## Estrutura de dados
### Car

| Campo     | Tipo   | Descrição                  |
|-----------|--------|----------------------------|
| id        | int    | Identificador único do carro|
| brand     | string | Marca do carro             |
| model     | string | Modelo do carro            |
| value     | float  | Valor do carro             |
| license   | string | Placa do carro             |
| color     | string | Cor do carro               |





## Endpoints

### 1. [index]

**Descrição**: Retorna uma lista com todos os carros cadastrados 


**URL**: 'api/cars'

**Método HTTP**: 'GET'

**Exemplo de Requisição**:

```http
GET api/cars HTTP/1.1
Content-Type: application/json
```

**Exemplo da Resposta**:


```json
{
    "status": true,
    "cars": [
        {
            "_id": "66ad31ab6a84a29f5e027b62",
            "brand": "Chevrolet",
            "model": "Onix",
            "price": 70000,
            "license": "ABC1D23",
            "color": "azul",
        },
        {
            "_id": "66ad31ab6a84a29f5e027b63",
            "brand": "Chevrolet",
            "model": "Onix",
            "price": 71000,
            "license": "BCD2E34",
            "color": "Prata"
        },
        ...
    ]
}
```

### 2. [show]

**Descrição**: Retorna os dados de um carro em específico

**URL**: 'api/cars/{car}'

**Método HTTP**: 'GET'

**Exemplo de Requisição**:

```http
GET api/cars/66ad31ab6a84a29f5e027b62 HTTP/1.1
Content-Type: application/json
```

**Exemplo da Resposta**:


```json
{
    "status": true,
    "car": {
        "_id": "66ad31ab6a84a29f5e027b62",
        "brand": "Chevrolet",
        "model": "Onix",
        "price": 70000,
        "license": "ABC1D23",
        "color": "azul",
    }
}
```

### 3. [store]

**Descrição**: Cadastra um novo carro

**URL**: 'api/cars'

**Método HTTP**: 'POST'

**Exemplo de Requisição**:

```http
GET api/cars HTTP/1.1
Content-Type: application/json
```

**Exemplo da Resposta**:


```json
{
    "status": true,
    "car": {
        "_id": "66ad31ab6a84a29f5e027b62",
        "brand": "Chevrolet",
        "model": "Onix",
        "price": 70000,
        "license": "ABC1D23",
        "color": "azul",
    },
    "message": "cadastro realizado com sucesso"
}
```

### 4. [update]

**Descrição**: Atualiza os dados de um carro específico

**URL**: 'api/cars/{car}'

**Método HTTP**: 'PUT'

**Exemplo de Requisição**:

```http
GET api/cars/66ad31ab6a84a29f5e027b62 HTTP/1.1
Content-Type: application/json
```

**Exemplo da Resposta**:


```json
{
    "status": true,
    "car": {
        "_id": "66ad31ab6a84a29f5e027b62",
        "brand": "Chevrolet",
        "model": "Onix",
        "price": 70000,
        "license": "ABC1D23",
        "color": "azul",
    },
    "message": "dados atualizados com sucesso"
}

```

### 5. [destroy]

**Descrição**: Deleta um carro específico

**URL**: 'api/cars/{car}'

**Método HTTP**: 'DELETE'

**Exemplo de Requisição**:

```http
GET api/cars/66ad31ab6a84a29f5e027b62 HTTP/1.1
Content-Type: application/json
```

**Exemplo da Resposta**:


```json
{
    "status": true,
    "message": "apagado com sucesso"
}

```


