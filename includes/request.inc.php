<?php
/**
 * Script que recebe os requests...
 */

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
$nome = isset($_REQUEST['nome']) ? $_REQUEST['nome'] : "";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";

if (!empty($id) && !empty($nome) && !empty($email)) {

    $arq1 = fopen("lista_alunos.csv", "a+");
    fwrite($arq1, "$id;$nome;$email\r\n");
    fclose($arq1);
}
