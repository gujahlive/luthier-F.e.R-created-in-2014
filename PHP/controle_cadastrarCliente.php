<?php
include_once 'classe_bancodedados.php';
include_once 'classe_cliente.php';
$GLOBALS['bd'] = new bancodedados();
$GLOBALS['bd']->conectar();

if(isset($_POST['nome']) && isset($_POST['registro']) && isset($_POST['telefone'])){
$cliente = new cliente();
$cliente->setNome($_POST['nome']);
$cliente->setRegistro($_POST['registro']);
$cliente->setTelefone($_POST['telefone']);
$cliente->cadastrar();
	header('Location: listagemcliente.php');
}

$GLOBALS['bd']->desconectar();
?>