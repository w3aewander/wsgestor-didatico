<?php

session_start();

require __DIR__ . "/../configs/config.inc.php";
require __DIR__ . "/../includes/conexao.inc.php";

$usuario = isset($_POST["usuario"]) && !empty($_POST["usuario"]) ? $_POST["usuario"] : "";
$senha = isset($_POST["senha"]) && !empty($_POST["senha"]) ? $_POST["senha"] : "";

//$conn = mysqli_connect('127.0.0.1','root','12qwaszx','gestor');
//$conn = new PDO($dsn, $dbuser, $dbpass);

// if (!$conn) {
//     die("Erro:" . $conn->errorInfo());
// }

$sql = "select * from usuarios where login = ? or email = ? and senha = ?";

$pstm = $pdo->prepare($sql);
$pstm->bindParam(1, $usuario);
$pstm->bindParam(2, $usuario);
$pstm->bindParam(3, $senha);

$pstm->execute();

if ($row = $pstm->fetch(PDO::FETCH_OBJ)) {

    if ($row->login == $usuario || $row->email == $usuario) {
        echo "Seja bem bindo";
        $_SESSION['logado'] = true; 
        $_SESSION['login'] = $row->login;
        $_SESSION['nome'] = $row->nome;
        
        header('location: index.php',true);
        die("Redirecionando para a página do sistema.");
    }

} else {

  require __DIR__ . "/../includes/acesso_negado.inc.php";

}

