WS-Gestor Didático
==================

![PHP](https://alexandrebbarbosa.files.wordpress.com/2016/01/php-elephant.png)


Site em PHP para aprendizagem da linguagem e prática em laboratório.
-------------------------------------------------------

**Autor:**  Wanderlei Silva do Carmo  <wander.silva@gmail.com>

>Com este projeto simples você aprenderá as bases do desenvolvimento web com PHP,HTML,CSS e Javascript, utilizando também as libs e frameworks populares como o FontAwesome, JQuery e Bootstrap.
versão: 0.1-2705.2019

Requisitos mínimos:
------------------

php-5.6.37 ou superior
Bootstrap-4.3.1
JQuery-4.3.1
FontAwesome-5.x

Como instalar
-------------

* Baixe os arquivos clicando no botão **_Clone ou Download_** neste repositório
* No MS-Windows, Descompacte o arquivo na raiz de seu servidor Web
  + Se estiver usando o **__xampp__** ou o **__wamp__** descompacte no diretorio htdocs ou www da instalação respectivamente dos webcontainers informados. Geralmente c:\xampp\htdocs ou c:\wamp\www.
* No Linux, descompacte no diretório do servidor web Apache em /var/www


Alterações feitas nesta atualização
-----------------------------------
Imagens agora ficam no diretório assets junto com os frameworks e libs de terceiros  
A altura para exibição dos slides no carrossel agora estão com 120px. Para isso eu  
criei uma classe css com o nome de **.h-120px**. Os arquivos **_css_** e **_js_** também estão  
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

* Agora no diretório configs encontra-se arquivos de configurações gerais do site.

Inclusão de uma camada para autenticação de usuários
----------------------------------------------------

1. Agora tem um formulário de login
2. Na pasta includes foi incluído o arquivo validar_sessao.php que deverá ser colocado no início de cada script php para validar a sessão do usuário.  
3. Foi criado o arquivo na raiz do site **auticar.php** que será invocado pelo formulário de login (login.php) para realizar a autenticação usuário para permitir o acesso à área do sistema.
4. Foi criado banco de dados para o site
5. O diretório __docs__ do site agora contém também os arquivos gerados pelo [Mysql Workbench](https://dev.mysql.com/downloads/workbench/) para a criação do banco de dados.


>Este projeto está em constante evolução e é para uso didático apenas e não deverá ser utilizado em um ambiente comercial até sua versão de produção definitiva. Todo o conteúdo poderá ser atualizado sem a prévia informação por parte do autor.



