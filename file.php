<?php
/**
 * Acessando arquivos com o PHP
 */

ini_set("display_errors", 1);

$assunto = isset($_REQUEST["assunto"]) ? $_REQUEST["assunto"]:"Sem assunto";
$descricao = isset($_REQUEST["descricao"]) ? $_REQUEST["descricao"]:"Sem sugestão..";
try {

   $arq = fopen("tmp/sugestoes.txt", "a+");
   fwrite($arq, $assunto . "\r\n");
   fwrite($arq, $descricao . "\r\n");

   fclose($arq);
   
   $arquivo = file_get_contents("tmp/sugestoes.txt");
   echo $arquivo;

   echo "<hr>";
   echo "<a href='sugestoes.html'>Voltar</a>";
/*
$arq = fopen("tmp/arq1.txt","r");

while ( $line = fread($arq,256) ) {
echo $line . "<br>";
}
fclose($arq);*/

//echo "<h2>Arquivo lido com o file_get_contents</h2>";
    //$arq = file_get_contents("tmp/arq1.txt");
    //echo $arq;

    //$frase = "Esta turma vai deixar saudade..";

    //$arq = fopen("tmp/arq1.txt", "w");
    //$arq = fopen("tmp/arq1.txt", "a");
    //fwrite($arq, $frase);

    //fclose($arq);

    //$frase2 = "Esta frase será gravada com o file_put_contents de novo";

    //file_put_contents("tmp/arq1.txt", $frase2, FILE_APPEND );

} catch (Exception $ex) {
    echo $ex->getMessage();
}
