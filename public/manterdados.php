<?php
/**
 * Adicionar dados no arquivo CSV.
 * Master-Detail
 */

 session_start();

require  __DIR__  . "/../includes/validar_sessao.php";

require  __DIR__  ."/../includes/header.inc.php";
require __DIR__  ."/../includes/navbar.inc.php";
require __DIR__  ."/../includes/request.inc.php";
//require "includes/form.inc.php";
require_once __DIR__  . "/../includes/importarcsv.php";
//require_once "includes/downloads.inc.php";
require __DIR__  ."/../includes/footerbar.inc.php";
require __DIR__  ."/../includes/footer.inc.php";