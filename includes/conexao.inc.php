<?php
/**
 * Conexão com o banco de dados
 */

$ini = parse_ini_file(__DIR__ . "/../configs/config.ini", true);

$pdo = new PDO(
    $ini["BANCO"]["dsn"], //dsn
    $ini["BANCO"]["dbuser"], //usuário
    $ini["BANCO"]["dbpass"], //senha
    [PDO::ATTR_PERSISTENT => true]//define conexões persistentes
);

if (!$pdo) {
    die("Não foi possível conectar o banco de dados.");
}
