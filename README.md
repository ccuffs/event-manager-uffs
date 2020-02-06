# Gerenciador de eventos UFFS
Esse repositório hospeda o código do sistema gerenciador de eventos da Universidade Federal da Fronteira Sul. O projeto está sendo desenvolvido pela célula web da [FronteiraTec](http://fronteiratec.com/) empresa júnior do curso de [Ciência da Computação](https://cc.uffs.edu.br/).

O gerenciador de eventos é um sistema cujo objetivo é facilitar a criação, gerenciamento e divulgação de eventos associados à UFFS. Inicialmente ele irá criar e estruturar sites voltados para as semanas acadêmicas, futuramente para eventos em geral.

## Funcionalidades
 - Facilita a criação de eventos como as semanas acadêmicas;
 - Gerencia seus inscritos;

## Instalação
### Dependências
Para executar o projeto será necessário a instalação das seguintes dependências:
 - [PHP](https://www.php.net/downloads);
 - [Composer](https://getcomposer.org/download/);
 - [MySQL](https://www.mysql.com/downloads/);
 - [Nodejs](https://nodejs.org/en/)
 - [NPM](https://www.npmjs.com/package/npm);
### Configurando o projeto
Primeiramente você deve clonar o repositório.
#### Configuração do banco de dados
O SGBD utilizado é o MySQL. primeiramente você precisa acessá-lo e criar um novo banco de dados (é recomendado criar um usuário diferente do root, embora não seja estritamente necessário):
```mysql
CREATE DATABASE <nome-do-banco>
```

#### Configuração do Laravel
Crie um arquivo `.env` utilizando como base o arquivo já existente `.env_example`:
```bash
cp .env_example .env
```

Em seguida, edite o campo `DB_DATABASE` para `<nome-do-banco>` que foi criado anteriormente.
Edite também os campos `DB_USERNAME` para o usuário do MySQL e `DB_PASSWORD` para sua senha.

Após, crie os esquemas rodando o comando:
```bash
php artisan migrate
```

Finalmente, é necessário criar uma chave para a aplicação:
```bash
php artisan key:generate
```

#### Configuração do php
Algumas dependências do php precisam ser instaladas. Para isso execute o comando:
```bash
composer install
```

#### Configuração do Node
Também é necessário que todas as dependências do JavaScript estejam prontas:
```bash
npm install
```

#### Executando o projeto
Agora está tudo pronto para rodar o projeto. Primeiro compile o JavaScript, css, e demais recursos:
```bash
npm run dev
```

Em seguide inicie o servidor Laravel:
```bash
php artisan serve
```

A aplicação estará rodando na porta 8000 e pode ser acessada em [localhost:8000](http://127.0.0.1:8000).


## Contribuindo
Sinta-se a vontade quanto a sugerir mudanças, novas funcionalidades, reportar bugs ou enviar um pull request, para isso basta verificar o arquivo [CONTRIBUTING](CONTRIBUTING.md) para conhecer mais sobre esse processo.

## Licença
Esse projeto é licenciado nos termos da licença [MIT](https://choosealicense.com/licenses/mit/).

