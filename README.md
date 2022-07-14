# Prova CBMSE 2022

Para concorrer a vaga o candidato terá que desenvolver uma aplicação api-rest 
## Em qualquer framework/linguagem.


# Tecnologias Recomendadas
- PHP
- Laravel
- Cakephp


## Instruções da prova

- O candidato deve fazer um **fork** desse repositório e criar sua estrutura de pastas.
- Existe uma pasta **db** onde existe o DER do banco e o SQL com o schema e os inserts.
- Após o projeto pronto o candidato deve fazer o *commit e push* para o seu repositório **não sendo necessário** solicitar um **pull-request** basta apenas responder o email _[lima.silva@sergipetec.org.br]()_ com assunto prova finalizada e o link do git


## Projeto

- O Candidato deve criar uma API REST com as seguintes rotas
  - /signos  - GET
  - /tipo-sanguineos - GET
  - /instituicoes - GET
  - /competencias - GET
  - /perfis - GET
  - /perfis - POST
  - /perfis - DELETE
  - /perfis - PUT
- Regras do request:
  - **CPF** deve conter válidição e quando mandado com mascara deve ser retirada.
  - **Data de Nascimento** não pode permitir pessoas menores de 18 anos
  - **E-mail** deve ter validação de tipo
  - **Formação** pode ser mais de uma
  - **Experiência** pode ser mais de uma
  - **Competencia** pode ser mais de uma
  - **Sobre** é campo texto livre
  - **Todos os campos são obrigatórios !!!!!**



## Oque será avaliado?
O desafio será avaliado através dos seguintes critérios.

- Código bem estruturado
- Habilidade com framework(se utilizar)
- Habilidade em documentação(swagger)
- Arquitetura do projeto
- Migrations
- Utilização de componentes,libs
- Testes unitários

## Oque seria um plus
- Teste de integração (cypress)
- Docker
- Docker-compose

## Boas Práticas

- O código está bem estruturado?
- O código está fluente na linguagem?
- O código faz o uso correto de Design Patterns?

## Documentação

- O código foi entregue com um arquivo de README claro de como se guiar?
- O código possui comentários pertinentes?
- Os commits são pequenos e consistentes?
- As mensagens de commit são claras?

## Código Limpo

- O código possibilita expansão para novas funcionalidades?
- O código é Don't Repeat Yourself?
- O código é fácil de compreender?

## Links úteis

- [Design Patterns](https://refactoring.guru/pt-br/design-patterns/php)
- [Laravel](https://laravel.com/)
- [Swagger](https://editor.swagger.io/)
- [Testes unitarios](https://pestphp.com/)
- [PHP+Docker](https://blog.impulso.network/docker-e-docker-compose-com-php/)
- [Git-flow](https://medium.com/trainingcenter/utilizando-o-fluxo-git-flow-e63d5e0d5e04)
- [Semantic Commits](https://www.conventionalcommits.org/en/v1.0.0/)
