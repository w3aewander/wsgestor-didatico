<?php

//$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
$nome = isset($_REQUEST["nome"]) ? $_REQUEST["nome"] : "";
$peso = isset($_REQUEST["peso"]) ? $_REQUEST["peso"] : "0.00";
$altura = isset($_REQUEST["altura"]) ? $_REQUEST["altura"] : "0.00";

$imc = $peso / pow($altura, 2);
//$imc = $peso / ($altura * $altura);

//echo "O IMC de $nome  é  $imc";
printf("O IMC de %s é de %8.2f", $nome, $imc);

echo "<hr>";

echo "<div style='display: block;
            margin: 0 auto;
            border:1px solid red;
            width:500px'>";

// if ($imc <= 15) {
//     echo "Magreza mórbida";
// } else if ($imc <= 20) {
//     echo "Magro";
// } else if ($imc <= 25) {
//     echo "Peso ideal";
// } else if ($imc <= 30) {
//     echo "Acima do peso ou sobrepeso";
// } else if ($imc <= 35) {
//     echo "Obeso";
// } else if ($imc <= 40) {
//     echo "Obsidade mórbida";
// } else {
//     echo "Estado crítico e vegetativo..";
// }

if ($imc < 15 ){
    echo "Magreza mórbida";
} else if ($imc >= 15 && $imc <= 20 ) {
    echo "Magro";
} else if ($imc > 20 && $imc <= 25) {
    echo "Peso ideal";
} else if ($imc > 25 && $imc <= 30 ) {
    echo "Acima do peso ou sobrepeso";
} else if ($imc > 30 && $imc <= 35) {
    echo "Obeso";
} else if ($imc > 35 && $imc <= 45 ) {
    echo "Obsidade mórbida";
} else {
    echo "Estado crítico e vegetativo..";
}
echo "</div>";