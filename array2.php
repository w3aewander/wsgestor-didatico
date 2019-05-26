<?php
/**
 *Outras formas de declarar e atribuir valores à um array
 * $aAlunos = [];   O mesmo que $aAlunos = array();
 * $aAlunos = ["Lucas","Bianca","Jorge","Maurício"];
 */

//  $aAlunos  = array([
//     array ([ "matricula" => 1, "nome" => "Lucas" ]) ,
//     array ([ "matricula" => 2, "nome" => "Bianca" ]) ,
//     array ([ "matricula" => 3, "nome" => "Jorge" ]) ,
//     array ([ "matricula" => 4, "nome" => "Maurício" ]) ,
//     array ([ "matricula" => 5, "nome" => "Wanderlei" ])
//  ]);

echo "<link rel='stylesheet' type='text/css' href='css/estilo.css'>";

$aAlunos = [
    [
        "matricula" => 1,
        "nome" => "Lucas",
        "email" => "lucas@email.com",
    ],
    [
        "matricula" => 2,
        "nome" => "Bianca",
        "email" => "bianca@email.com",
    ],
    [
        "matricula" => 3,
        "nome" => "Jorge",
        "email" => "jpassos@email.com",
    ],
    [
        "matricula" => 4,
        "nome" => "Maurício",
        "email" => "msilva@email.com",
    ],
    [
        "matricula" => 5,
        "nome" => "Wanderlei",
        "email" => "wander.silva@gmail.com",
    ],
];

echo "<table border='1'>
      <thead>
      <tr>
         <th>Matrícula</th>
         <th>Nome</th>
         <th>E-mail</th>
      </tr>
      </thead>";
echo "<tbody>";

foreach ($aAlunos as $aluno) {
    printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>",
        $aluno["matricula"], $aluno["nome"], $aluno["email"]);
}

echo "</tbody></table>";



