<?php
include_once 'classe_bancodedados.php';
include_once 'classe_produto.php';
$GLOBALS['bd'] = new bancodedados();
$GLOBALS['bd']->conectar();

if(isset($_POST['nome']) && isset($_POST['valor']) && isset($_POST['tipo'])){
$produto = new produto();
$produto->setNome($_POST['nome']);
$produto->setValor($_POST['valor']);
$produto->setTipo($_POST['tipo']);
$produto->cadastrar();
	header('Location: list_produto.php');
}

$GLOBALS['bd']->desconectar();
?>