WS-Gestor Didático
==================

![PHP](https://www.bryanmarshall.com/wp-content/uploads/php_mysql_logo.jpg)


Site em PHP para aprendizagem da linguagem e prática em laboratório.
-------------------------------------------------------

**Autor:**  Wanderlei Silva do Carmo  <wander.silva@gmail.com>

>Com este projeto simples você aprenderá as bases do desenvolvimento web com PHP,HTML,CSS e Javascript, utilizando também as libs e frameworks populares como o FontAwesome, JQuery e Bootstrap.  

**Versão:** 0.1-2705.2019

Requisitos mínimos:
------------------

PHP-5.6.37 ou superior  
Bootstrap-4.3.1  
JQuery-4.3.1  
FontAwesome-5.x  


Como instalar
-------------

* Baixe os arquivos clicando no botão **_Clone ou Download_** neste repositório
* No MS-Windows, Descompacte o arquivo na raiz de seu servidor Web
  + Se estiver usando o **__xampp__** ou o **__wamp__** descompacte no diretorio htdocs ou www da instalação respectivamente dos webcontainers informados. Geralmente c:\xampp\htdocs ou c:\wamp\www.
* No Linux, descompacte no diretório do servidor web Apache em /var/www
* Deve-se configurar o servidor Web para que a pasta public deste projeto seja a pasta raiz o site.

Alterações realizadas nesta versão
-----------------------------------

Imagens agora ficam no diretório assets junto com os frameworks e libs de terceiros  
A altura para exibição dos slides no carrossel agora estão com 180px. Para isso eu  
criei uma classe css com o nome de **.h-180px**. Os arquivos **_css_** e **_js_** também estão  
no diretório **assets** para separar o que for de domínio público dos arquivos internos do sistema.  

Onde baixar as bibliotecas necessárias para desenvolvimento do site
-----------------------------------------------------------


[FontAwesome](https://use.fontawesome.com/releases/v5.8.2/fontawesome-free-5.8.2-web.zip)


[Bootstrap](https://github.com/twbs/bootstrap/releases/download/v4.3.1/bootstrap-4.3.1-dist.zip)


[JQuery](https://code.jquery.com/jquery-3.4.1.min.js)


[MySQL](https://dev.mysql.com/downloads/windows/)


[Mysql Workbench](https://dev.mysql.com/downloads/workbench/)



Inclusão de arquivos para conexão com o banco de dados
------------------------------------------------------

* Agora no diretório configs encontram-se arquivos de configurações gerais do site.
* Um arquivo de configuração **config.ini** foi criado para configuração de acesso ao banco de dados

Inclusão de uma camada para autenticação de usuários
----------------------------------------------------

1. Agora tem um formulário de login
2. Na pasta includes foi incluído o arquivo validar_sessao.php que deverá ser colocado no início de cada script php para validar a sessão do usuário.  
3. Foi criado o arquivo na raiz do site **auticar.php** que será invocado pelo formulário de login (login.php) para realizar a autenticação usuário para permitir o acesso à área do sistema.
4. Foi criado banco de dados para o site
5. O diretório __docs__ do site agora contém também os arquivos gerados pelo [Mysql Workbench](https://dev.mysql.com/downloads/workbench/) para a criação do banco de dados.


Inclusão do script para listagem de usuarios
--------------------------------------------

* Foi criado o script **includes/listar_usuarios.php** para listagem de usuários cadastrados na tabela **usuarios**.


Inclusão do script para listagem de usuarios
--------------------------------------------

* Foi criado o script **includes/listar_usuarios.php** para listagem de usuários cadastrados na tabela **usuarios**.


Inclusão de foto no cadastro de usuário
---------------------------------------

* Nesta versão é possível incluir fotos no cadastro de usuário

1. Deve-se alterar a estrutura da tabela usuários para receber a foto. A foto é gravada em codificação base64. 
2. Para adicionar uma nova coluna execute o seguinte script sql na ferramenta de administração do sgbd:  

  alter table gestor.usuarios add column foto medumtext
  

>Campo ou coluna senha agora pode receber senha criptografa. Para tanto foi modificado a estrutura do campo para suportar até 255 caracteres.
>Execute o seguinte script para aumentar o tamanho do campo senha:

>alter table gestor.usuarios modify senha varchar(255)




>Este projeto está em constante evolução e é para uso didático apenas e não deverá ser utilizado em um ambiente comercial até sua versão de produção definitiva. Todo o conteúdo poderá ser atualizado sem a prévia informação por parte do autor.














