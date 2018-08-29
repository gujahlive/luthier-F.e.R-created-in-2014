<?php
session_start();
include_once 'classe_bancodedados.php';
include_once 'classe_loginFuncionario.php';
$GLOBALS['bd'] = new Bancodedados();
$GLOBALS['bd']->conectar();

if(isset($_GET['desconectar'])){
     $_SESSION['login'] = '';
     $_SESSION['senha'] = '';
     $GLOBALS['bd']->desconectar();
     header('Location: index.php');
}else if(isset($_POST['login']) && isset($_POST['senha'])){
    $funcionario = new funcionario($_POST['login'], $_POST['senha']);
    if($funcionario->getId()> 0){
        $_SESSION["login"] = $_POST['login'];
        $_SESSION["senha"] = $_POST['senha'];
        header('Location: area_restrita.php');
		
    }else {
        $erro = true;
		
    }

}  
      
    
    

$GLOBALS['bd']->desconectar();
?>
