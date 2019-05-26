<?php
/**
 * Adicionar dados no arquivo CSV.
 * Master-Detail
 */

ini_set("display_errors", 1);

echo "<link rel='stylesheet'
             href='assets/fontawesome-free-5.8.1-web/css/all.css'>";

echo '<link rel="stylesheet"
   href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css"> ';

echo '<link rel="stylesheet" type="text/css" href="css/default.css">';

require_once "includes/navbar.inc.php";
require_once "includes/request.inc.php";
//require "includes/form.inc.php";
require_once "includes/importarcsv.php";
//require_once "includes/downloads.inc.php";
require_once "includes/rodape.inc.php";

echo "<script src='assets/jquery-3.4.1/jquery-3.4.1.min.js'></script>";
echo "<script src='assets/bootstrap-4.3.1-dist/js/bootstrap.min.js'></script>";
