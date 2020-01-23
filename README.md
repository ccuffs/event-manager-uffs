# Gerenciador de eventos UFFS 
Esse repositório hospeda o código do sistema gerenciador de eventos da Universidade Federal da Fronteira Sul. Tal projeto está sendo desenvolvido pela célula web da [FronteiraTec](http://fronteiratec.com/) empresa júnior do curso de [Ciência da Computação](https://cc.uffs.edu.br/).

O gerenciador de eventos é um sistema cujo objetivo é facilitar a criação, gerenciamento e divulgação de eventos associados à UFFS. Inicialmente ele irá criar e estruturar sites voltados para as semanas acadêmicas, futuramente para eventos em geral.

## Começando
### 1. Instalando dependências do projeto no Linux  

#### 1.1 Pré-requisitos
Antes de tudo você precisa ter o [git](https://git-scm.com/) instalado na sua máquina e um editor de texto como o [Atom](https://atom.io/) ou o [Visual Studio Code](https://code.visualstudio.com/) por exemplo.

>***IMPORTANTE:*** nesse passo a passo é considerado que sua distro linux seja baseada em Debian.
#### 1.2 Atualizando o sistema
Primeiramente é preciso que seu ambiente esteja com todos os pacotes atualizados, para isso execute:

```
sudo apt update && sudo apt upgrade
``` 
    
#### 1.3 PHP
Em seguida será necessário instalar o interpretador do PHP, a versão sugerida é a `7.2` ou mais recente e isso é feito da seguinte forma:

`
sudo apt install php7.2 php7.2-cli php7.2-common
`

Para verificar se a instalação foi bem sucedida execute `php -v`, isso irá mostrar algumas informações dentre elas a versão do php instalada.

#### 1.4 Composer
Após instalado o PHP será preciso instalar o [Composer](https://getcomposer.org/), o gerenciador de dependências do PHP, para isso utilize o seguinte comando:

`
sudo apt install composer
`
#### 1.5 NodeJS e NPM
Ainda será necessário instalar o node e o _node package manager_ devido as dependêcias de _frontend_ do projeto, assim execute:

`
sudo apt install nodejs && sudo apt install npm
`

>***IMPORTANTE:*** A versão do nodejs utilizada é a `12.13.1` e a do npm é `6.13.1`
#### 2.6 MySQL Server
Para proceder com a instação do MySQL Server verifique esse [artigo](https://support.rackspace.com/how-to/install-mysql-server-on-the-ubuntu-operating-system/)

### 2. Manuseando e execuntando o projeto
#### 2.1 Clone do repositório
Antes de fazer o clone certifique-se de ter feito o [_fork_](https://help.github.com/pt/github/getting-started-with-github/fork-a-repo) do repositório só então execute:

`git clone https://github.com/your-github-user/event-manager-uffs && cd event-manager-uffs`

#### 2.2 Baixando as dependências
Em seguida faça com que o composer baixe as dependências do projeto executando:

`
composer install
`

feito isso baixe as dependências do _frontend_ do projeto com `npm install` e então execute `npm run dev` para fazer o _build_ desses frameworks.

#### 2.3 Configuração do banco de dados
Primeiramente acesse o MySQL Server através do comando `sudo mysql -u root -p`, digite seu login e então execute:`create database event_manager` para criar a base de dados. Após isso sua base estará criada basta estabelecer a conexão com a aplicação.

#### 2.4 Configurações Finais
Abra o projeto no seu editor e modifique o arquivo `.env.example` definindo os "campos" `DB_DATABASE`, `DB_USERNAME` e `DB_PASSWORD` para o nome do seu banco dados e seu login no MySQL Server respectivamente, depois renomeie esse arquivo para `.env`. Por fim execute as migrations: `php artisan migrate`, gere a chave de autenticação da aplicação: `php artisan key:generate` e então rode o servidor: `php artisan serve` e acesse http://localhost:8000 se nenhum erro aparecer meus parabéns \o/, você está pronto para começar a contribuir com o projeto.

