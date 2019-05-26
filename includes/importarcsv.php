<?php
 /**
  * importar dados de um arquivo de dados
  * separados por um delimitador (;)
  */
 
  ini_set('display_errors',1); //exibir os erros, caso ocorram

  $arq = fopen("lista_alunos.csv","r"); //abre o arquivo para leitura


   echo "<div style='display:block;height:500px;overflow: scroll'>";
   echo "<table class='table table-bordered table-striped'>";
   echo "<thead>
             <tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Opções</th></tr>
         </thead>";
   echo "<tbody>";
   
   $i = 0;
   while ( !feof($arq) ){ // enquanto não for final do arquivo
       
       $linha = fgets($arq, 256); //pega a linha atual e armazena na 
                                  //variável $linha
       $arr_linha = explode(";",$linha);

       //se $i for maior que 0 e $linha não estiver vazia
       if ( $i > 0 && !empty($linha) ) { 
                                             
       //escreva na linha da tabela os
       //dados armazenados no vetor                                  
           printf("<tr><td>%d</td>
                       <td>%s</td>
                       <td>%s</td>
                       <td style='cursor: pointer;' align='center'>
                       <div class='btn btn-primary'><i class='fa fa-edit' title='editar id = %d'></i> </div>
                       <div class='btn btn-danger'><i class='fas fa-trash-alt' title='exluir id = %d'></i> </div>
                  </td></tr>",
                  $arr_linha[0], $arr_linha[1], $arr_linha[2], $arr_linha[0],$arr_linha[0] );
                  
       }
       $i++; //incrementa $i
   }
   echo "</tbody></table>";
   
   fclose($arq); //fecha o arquivo
   echo "</div>";
 

