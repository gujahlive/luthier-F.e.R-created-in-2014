<?php
include_once 'classe_bancodedados.php';
include_once 'classe_contato.php';
$GLOBALS['bd'] = new bancodedados();
$GLOBALS['bd']->conectar();

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['dados'])){
$contato = new contato();
$contato->setNome($_POST['nome']);
$contato->setEmail($_POST['email']);
$contato->setDados($_POST['dados']);
$contato->cadastrar();
	header('Location: index.php');
}

$GLOBALS['bd']->desconectar();
?>