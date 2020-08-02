# Criar CRUD-VEICULOS - Desenvolvedor API



## Instruções
criar db.sql também disponível no pasta.

## Backend
O backend foi feito em PHP como uma API que recebe métodos POST, GET, PUT e DELETE para CRUD básico de itens. 
Testes foram realizados usando o Postman.(Online)

## Frontend
Foi clonado o uso de Bootstrap 4 para mais agilidade na produção, e um pouco de CSS personalizado para ajustes adicionais. 

###Especificação

Monte uma base de veículo com a seguinte estrutura:

veiculo:   string
marca:     string
ano:       integer
descricao: text
vendido:   bool
created:   datetime
updated:   datetime

API Endpoint

GET /veiculos

Retorna todos os veículos

