<?php if (isset($_FILES['foto'])) {
    $foto = $_FILES['foto'];
    //die(print_r($foto));
    $destino = dirname(__DIR__) . "/tmp/" . $foto['name'];

    //die($destino);

    if (move_uploaded_file($foto['tmp_name'], $destino)) {
        $fotobin = base64_encode(file_get_contents($destino));
        $fotoParaBanco = sprintf("data:%s;base64,%s", $foto['type'], $fotobin);

        $stm = $pdo->prepare("update usuarios set foto = :foto where id = :id");
        $stm->bindParam(":foto", $fotoParaBanco);
        $stm->bindParam(":id", $row->id);
        $stm->execute();

        header('Location: /editar_usuario.php?id='.$_POST['id']);
    }
}
?>

<script>
 function atualizaFoto(){

    var imgtmp  = document.getElementsByName('submitfoto')[0];
    imgtmp.click();
 }

 function resetForm(){
    $('input').each((i,e)=>{ 
         $(e).attr("value","");
      });
 }

</script>

<div class="row">
    <div class="col-6">

        <fieldset>
            <legend>Lista de Usuários</legend>
            <form class="form m-3  " style="padding: 20px;" action="salvar_usuario.php" method="post">
                <label for="id">ID</label><br>
                <input class="form-control col-2" type="number" name="id" id="id" size="5" value="<?=$row->id?>">

                <label for="nome">Nome</label><br>
                <input class="form-control col-6" type="text" name="nome" id="nome" size="35" value="<?=$row->nome?>">

                <label for="email">E-mail</label><br>
                <input class="form-control col-5" type="email" name="email" id="email" size="35"
                    value="<?=$row->email?>">

                <label for="login">Login</label><br>
                <input class="form-control col-5" type="login" name="login" id="login" size="15"
                    value="<?=$row->login?>">


                <label for="senha">Senha</label><br>
                <input class="form-control col-5" type="password" name="senha" id="senha" size="255"
                    value="<?=$row->senha?>">

                <hr>

               <button  class="btn btn-sm btn-secondary" type="reset" onclick="resetForm();">
                    <i class='far fa-2x fa-file'></i>
               </button>

                <button class="btn btn-sm btn-success"   type="submit">
                   <i class="far fa-2x fa-save"></i>
                </button>
            </form>
        </fieldset>
    </div>

    <div class="col-6 mt-5 pt-5">

      

      <div style="width:240px">

            <img src='<?=$row->foto?>' name='foto' alt='foto' class='img-thumbnail'>
            
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$row->id?>">
                <input type="file" onchange="atualizaFoto();" name="foto">
                <button type="submit" name='submitfoto'>Alterar foto</button>
                
             </form>

        </div>

    </div>
</div>
