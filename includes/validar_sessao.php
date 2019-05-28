<?php
/**
 * Validar a sessão de usuários
 * 
 */

 session_start();

 if ( !isset( $_SESSION['logado'] ) || !$_SESSION['logado'] ) {
     header('location: login.php',true);
     die ("Necessário estar logado no sistema");
 }