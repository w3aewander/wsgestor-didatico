
<fieldset>
 <legend>Lista de Alunos</legend>
    <form class="form" style="padding: 20px;" action="editar_usuario.php" method="post">
         <label for="id">ID</label><br>
         <input class="form-control col-2" type="number" name="id" id="id" size="5"><br>
        
         <label for="nome">Nome</label><br>
         <input class="form-control col-6" type="text" name="nome" id="nome" size="35"><br>
        
         <label for="email">E-mail</label><br>
         <input class="form-control col-5" type="email" name="email" id="email" size="35"><br>     
         
         <label for="login">Login</label><br>
         <input class="form-control col-5" type="login" name="login" id="login" size="15"><br>     
        

         <label for="senha">Senha</label><br>
         <input class="form-control col-5" type="password" name="senha" id="senha" size="255"><br>     
        
          <hr>      

         <button class="btn btn-sm btn-secondary" type="reset"><i class='far fa-3x fa-file'></i></button>
         <button class="btn btn-sm btn-success" type="submit"><i class="far fa-3x fa-save"></i></button>
    </form>
 </fieldset>