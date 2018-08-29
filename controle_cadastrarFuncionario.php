<?php
include_once 'classe_bancodedados.php';
include_once 'classe_funcionario.php';
$GLOBALS['bd'] = new bancodedados();
$GLOBALS['bd']->conectar();

if(isset($_POST['nome']) && isset($_POST['login']) && isset($_POST['senha'])){
$funcionario = new funcionario();
$funcionario->setNome($_POST['nome']);
$funcionario->setLogin($_POST['login']);
$funcionario->setSenha($_POST['senha']);
$funcionario->cadastrar();
	header('Location: area_restrita.php');
}

$GLOBALS['bd']->desconectar();
?>