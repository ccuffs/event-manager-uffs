# Gerenciador de eventos UFFS 
Esse repositório hospeda o código do sistema gerenciador de eventos da Universidade Federal da Fronteira Sul. Tal projeto está sendo desenvolvido pela célula web da [FronteiraTec](http://fronteiratec.com/) empresa júnior do curso de [Ciência da Computação](https://cc.uffs.edu.br/).

O gerenciador de eventos é um sistema cujo objetivo é facilitar a criação, gerenciamento e divulgação de eventos associados à UFFS. Inicialmente ele irá criar e estruturar sites voltados para as semanas acadêmicas, futuramente para eventos em geral.

## Começando
### 1. Instalando dependências do projeto no Linux  

#### 1.1 Pré-requisitos
Antes de tudo você precisa ter o [git](https://git-scm.com/) instalado na sua máquina e um editor de texto como o [Atom](https://atom.io/) ou o [Visual Studio Code](https://code.visualstudio.com/) por exemplo.

>***IMPORTANTE:*** nesse passo a passo é considerado que sua distro linux é baseada em Debian.
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
Após instalado o PHP será preciso instalar o Composer, o gerenciador de dependências do PHP, para isso utilize o seguinte comando:

`
sudo apt install composer
`
#### 1.5 NodeJS e NPM
Ainda será necessário instalar o node e o node package manager devido as dependêcias de _frontend_ do projeto, assim execute:

`
sudo apt install nodejs && sudo apt install npm
`

#### 2.6 MySQL Server
to be continued...
### 2. Manuseando e execuntando o projeto
#### 2.1 Clone do repositório
Antes de fazer o clone certifique-se de ter feito o _fork_ do repositório só então execute:

`
git clone https://github.com/your-github-user/event-manager-uffs && cd event-manager-uffs
`


