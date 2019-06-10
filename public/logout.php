<?php
session_start();


$_SESSION["logado"] = false;
$_SESSION["nome"] = "";
$_SESSION["email"] = "";
$_SESSION["accessToken"] = "";

session_destroy();
header('location: index.php');