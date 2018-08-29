<?php
session_start();
include_once'classe_bancodedados.php';
include_once'classe_loginFuncionario.php';


$GLOBALS['bd'] = new BancoDeDados();
$GLOBALS['bd']->conectar();

$funcionario = new funcionario($_SESSION['login'], $_SESSION['senha']);
if(!($funcionario->getId()> 0)){
      $GLOBALS['bd']->desconectar();
      header('Location: index.php');
}     
   

$GLOBALS['bd']->desconectar();
?>