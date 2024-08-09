# Documentação da API

## Visão Geral
**Nome**: Car Shop

**Descrição**: Esta API tem o intuito de representar um catálogo de venda de carros 




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


