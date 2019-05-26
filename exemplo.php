<?php

$arq = fopen("/tmp/arquivo.txt", "w+");

fwrite($arq, "Gravando no arquivo...");
fclose($arq);

//$exibir = file_get_contents("/tmp/arquivo.txt");
echo $exibir;
