<?php


require __DIR__ . "/../includes/conexao.inc.php";

$id = isset($_POST['id']) ? $_POST['id'] : 0;



if ($id > 0) {
    atualizar($_POST);
} else {
    incluir();
}



function atualizar($arr_dados)
{
    global $pdo;

    $sql = " update usuarios 
             set nome = :nome, email = :email,
             login = :login, senha = :senha 
             where id = :id ";

    $stm = $pdo->prepare($sql);
 
    
    $stm->bindParam(":nome",  $arr_dados['nome']);
    $stm->bindParam(":email", $arr_dados['email']);
    $stm->bindParam(":login", $arr_dados['login']);
    $stm->bindParam(":senha", $arr_dados['senha']);

    $stm->bindParam(":id", $arr_dados['id']);

    $stm->execute();

    header('Location: manterdados.php');
}

function incluir()
{
    global $pdo;

    $sql = "insert into usuarios (nome,email,login,senha)
              values (:nome,:email,:login,:senha) ";

    $stm = $pdo->prepare($sql);

    $stm->bindParam(":nome", $_POST['nome']);
    $stm->bindParam(":email", $_POST['email']);
    $stm->bindParam(":login", $_POST['login']);
    $stm->bindParam(":senha", $_POST['senha']);

    $stm->execute();

    header('Location: manterdados.php');
}


