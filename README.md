# PROJETO ESTÁGIO - RECUPERA COMPRA

Neste projeto, foi desenvolvido um sistema utilizando o framework Laravel para criar uma aplicação web com funcionalidades de registro de usuários, login e um painel de controle para gerenciamento dos usuários cadastrados. O objetivo principal era permitir que apenas usuários registrados tivessem acesso à plataforma, enquanto fornecia aos administradores a capacidade de editar informações dos usuários, bem como pesquisar por nome e email.

**Descrição do Projeto:** O projeto foi implementado utilizando o Laravel, um framework PHP popular e robusto, conhecido por sua facilidade de uso e recursos poderosos. A estrutura MVC (Model-View-Controller) do Laravel foi adotada para garantir uma separação clara das preocupações e facilitar a manutenção e escalabilidade do código.

**Como executar o projeto:** Para executa-lo é bem simples, primeiro abra o terminal e digite 'php artisan serve', feito isso, abra outro terminal e digite 'npm run dev'. Assim, pode registrar seu usuário e entrar no dashboard para conferir o projeto. 

## Linguagem utilizada:
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

## Framework utilizado:
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)

## Banco de dados utilizado:
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)

## Controle de versão:
![GitHub](https://img.shields.io/badge/github-%23121011.svg?style=for-the-badge&logo=github&logoColor=white)

## Tela de Registro

A tela de registro foi projetada para permitir que novos usuários se cadastrem no sistema. Nela, foram solicitadas informações como nome, email e senha. Utilizando recursos do Laravel, foi possível validar e armazenar os dados do usuário de forma segura no banco de dados.

![registro](https://github.com/BrunoLima19/Projeto_Estagio/assets/70240811/d460db94-4419-479b-9881-5d5704f9a334)

## Tela de Login

A tela de login foi desenvolvida para autenticar os usuários registrados no sistema. Os dados fornecidos pelos usuários foram verificados em relação às informações armazenadas no banco de dados. Utilizei o mecanismo de autentificação do Laravel, o que tornou a implementação dessa funcionalidade rápida e segura.

![login](https://github.com/BrunoLima19/Projeto_Estagio/assets/70240811/d230d132-590d-42c2-8b10-2d98063a57e9)

## Painel de Controle - Dashboard

Após o login, os usuários autorizados são redirecionados para o painel de controle. Essa área é restrita aos usuários autenticados e possui recursos para gerenciar os dados dos usuários cadastrados. Na lista de usuários, os administradores têm a opção de editar o nome e o email dos usuários, além de poder excluí-los do sistema. Para facilitar a localização de usuários específicos, foi implementada uma funcionalidade de pesquisa por nome e email, permitindo filtrar rapidamente os resultados.

![dashboard](https://github.com/BrunoLima19/Projeto_Estagio/assets/70240811/a5a5b662-7108-4504-aeb6-f8c46382ebdb)

![pesquisa1](https://github.com/BrunoLima19/Projeto_Estagio/assets/70240811/cedf219e-9842-473a-b8f5-150da32b584e)

![pesquisa3](https://github.com/BrunoLima19/Projeto_Estagio/assets/70240811/9487ffb9-4a84-444a-9558-176f48a2078e)

## Tabelas criadas no banco de dados

![bd](https://github.com/BrunoLima19/Projeto_Estagio/assets/70240811/e327f308-0bd5-4a28-9034-9538c24326a3)

## CONCLUSÃO

Por mais que tenha sido uma linguagem e framework que nunca havia trabalhado, o projeto de desenvolvimento Laravel foi bem-sucedido na criação de um sistema de registro e login, além de um painel de controle para gerenciamento de usuários. O uso do Laravel proporcionou um desenvolvimento eficiente, aproveitando as funcionalidades prontas do framework, como autenticação, validação de dados e manipulação do banco de dados. Com esse projeto, foi possível oferecer uma experiência segura aos usuários registrados, enquanto os administradores têm controle total sobre as informações dos usuários cadastrados. A implementação da pesquisa por nome e email no painel de controle adicionou uma funcionalidade valiosa ao sistema, facilitando a localização de usuários específicos. Em resumo, o projeto demonstrou as capacidades do Laravel em fornecer uma solução completa e eficiente para o gerenciamento de usuários em uma aplicação web.
