<?php
/*
 * Estrutura condicional simples com IF, ELSE
*/

// $idade = 18; //sinal de atribuição

// if ( $idade <= 12 ){
//     echo "Criança";
// } else {
//     echo "Não é uma criança";
// }

/*
 * Estrutura condicional composta com IF, ELSE IF, ELSE
*/

$idade = 2; //sinal de atribuição

if ( $idade <= 0 || $idade >= 120  ){
    echo "Por favor, digite uma idade entre 1 e 120";
    die();
}

if ( $idade <= 12 ){
    echo "Criança";
} else if (  $idade <= 18) {
    echo "Adolescente";
} else if ( $idade <= 59) {
    echo "Adulto";
} else {
    echo "Idoso";
}

