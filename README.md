# Gerenciador de eventos UFFS
Esse repositório hospeda o código do sistema gerenciador de eventos da Universidade Federal da Fronteira Sul. Tal projeto está sendo desenvolvido pela célula web da [FronteiraTec](http://fronteiratec.com/) empresa júnior do curso de [Ciência da Computação](https://cc.uffs.edu.br/).

O gerenciador de eventos é um sistema cujo objetivo é facilitar a criação, gerenciamento e divulgação de eventos associados à UFFS. Inicialmente ele irá criar e estruturar sites voltados para as semanas acadêmicas, futuramente para eventos em geral.

## Funcionalidades
 - Facilita a criação de eventos como as semanas acadêmicas;
 - Gerencia seus inscritos;

## Instalação
Para executar o projeto será necessário a instalação das seguintes dependências:
 - [PHP](https://www.php.net/downloads);
 - [Composer](https://getcomposer.org/download/);
 - [MySQL](https://www.mysql.com/downloads/);
 - [Nodejs](https://nodejs.org/en/)
 - [NPM](https://www.npmjs.com/package/npm);

### 2. Manuseio
#### 2.1 Clone do repositório
Antes de fazer o clone certifique-se de ter feito o [_fork_](https://help.github.com/pt/github/getting-started-with-github/fork-a-repo) do repositório só então execute:

#### 2.3 Configuração do banco de dados
Primeiramente acesse o MySQL Server através do comando `sudo mysql -u root -p`, digite seu login e então execute:`create database event_manager` para criar a base de dados. Após isso sua base estará criada basta estabelecer a conexão com a aplicação.

#### 2.4 Configurações Finais
Abra o projeto no seu editor e modifique o arquivo `.env.example` definindo os "campos" `DB_DATABASE`, `DB_USERNAME` e `DB_PASSWORD` para o nome do seu banco dados e seu login no MySQL Server respectivamente, depois renomeie esse arquivo para `.env`. Por fim execute as migrations: `php artisan migrate`, gere a chave de autenticação da aplicação: `php artisan key:generate` e então rode o servidor: `php artisan serve` e acesse http://localhost:8000 se nenhum erro aparecer meus parabéns \o/, você está pronto para começar a contribuir com o projeto.

