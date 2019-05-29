<?php
/**
 * Conexão com o banco de dados
 */

 $ini = parse_ini_file(__DIR__ . "/../configs/config.ini",true);
 
 $pdo = new PDO($ini["BANCO"]["dsn"],$ini["BANCO"]["dbuser"],$ini["BANCO"]["dbpass"]);

 if ( !$pdo){
     die("Não foi possível conectar o banco de dados.");
 }


 