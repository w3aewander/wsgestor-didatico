<?php
session_start();


$_SESSION["logado"] = false;
$_SESSION["nome"] = "";

session_destroy();
header('location: index.php');