<?php
/**
 * Acessar a tabela usuarios
 *
 */

$sql = "select * from usuarios";
$stmt = $pdo->prepare($sql);

$stmt->execute();

echo "<div class='bt-fab bg-success'><i class='fa fa-plus'></i></div>";
echo "<div class='card'>"; //card
echo "  <div class='card-heading'>";
echo "    <div class='card-title bg-primary p-1 color-white'>";
echo "      <h2>Usuários do Sistema</h2>";
echo "    </div>";
echo "  </div>";
echo "<div class='card-body'>";  
     
echo "<div style='display:block;height:500px;overflow: scroll'>";
echo "<table class='table table-bordered table-striped'>";
echo "<thead>
             <tr><th><i class='fa fa-hashtag'></i> ID</th>
             <th><i class='fa fa-user'></i> Nome</th>
             <th><i class='fa fa-envelope'></i> E-mail</th>
             <th class='text-center'><i class='fa fa-cog' ></i> Opções</th></tr>
         </thead>";
echo "<tbody>";

$i = 0;
while ( $result = $stmt->fetch(PDO::FETCH_OBJ ) ) { // enquanto não for final do arquivo

    printf("<tr><td>%d</td>
                       <td>%s</td>
                       <td>%s</td>
                       <td style='cursor: pointer;' align='center'>
                       <div class='btn btn-primary'>
                          <a href='editar_usuario.php?id=$result->id'>
                             <i class='fa fa-edit' title='editar id = %d'></i> 
                          </a>
                       </div>
                       <div class='btn btn-danger'>
                         <a href='excluir_usuario.php?id=$result->id'> 
                          <i class='fas fa-trash-alt' title='exluir id = %d'></i> 
                         </a>
                       </div>
                  </td></tr>",
        $result->id, $result->nome, $result->email, $result->id, $result->id);

}

echo "</tbody></table>";//fim da table
echo "</div>"; //fim do card-body 
echo "</div>"; //fim do cartão

$stmt = null;

echo "</div>";
