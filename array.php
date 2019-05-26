<?php
/**
 * Estrutura de dados: array
 */

 $aAlunos = array();
 
 $aAlunos[0] = "Lucas";
 $aAlunos[1] = "Bianca";
 $aAlunos[2] = "Jorge";
 $aAlunos[3] = "Maurício";

 echo "<h3>Lista de Alunos</h3>";

//echo $aAlunos[1];
$iTamanhoVetor = count($aAlunos);

echo "<table border='1' 
             style='border: 1px solid gray; 
             width: 100%;'>";
echo "<thead style='background-color: blue;
             color: white;'>
             <tr><th>Nome</th></tr></thead>";
echo "<tbody>";

for($i=0;$i<$iTamanhoVetor;$i++){
   printf("<tr><td>%s</td></tr>", $aAlunos[$i]);
}

echo "</tbody></table>";




