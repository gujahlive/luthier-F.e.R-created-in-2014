<?php
include_once 'classe_bancodedados.php';
include_once 'controle_compra.php';
include_once 'classe_compra.php';
$GLOBALS['bd'] = new bancodedados();
$GLOBALS['bd']->conectar();

if(isset($_POST['id_cliente']) && isset($_POST['id_produto']) && isset($_POST['id_funcionario'])){
$compra = new compra();
$compra->setId_cliente($_POST['id_cliente']);
$compra->setId_produto($_POST['id_produto']);
$compra->setId_funcionario($_POST['id_funcionario']);
$compra->cadastrar();
$GLOBALS['bd']->desconectar();


}



?>