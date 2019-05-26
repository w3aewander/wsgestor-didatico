<?php
/*
 *  Estrutura condicional utilizando o SWTICH
 */

$idade = 16;

switch ($idade) {
    case $idade <= 12:
        echo "Criança";
        break;

    case $idade <= 18:
        echo "Adolescente";
        break;

    case $idade <= 59:
        echo "Adulto";
        break;

    default:
        echo "Idoso";

}

echo "<br>";

switch ($idade) {
    case 15:
    case 16:
    case 17:
        echo "Ô faixa de idade difícil de lidar!!!";
        break;
    case 25:
        echo "Uma idade de ouro!";
        break;

    case 60:
        echo "Agora ferrou, me tornei idoso!!!";
        break;
    default:
        echo "To numa boa!";
}
