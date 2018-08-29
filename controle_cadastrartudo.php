<?php
session_start();
include_once 'classe_bancodedados.php';
include_once 'classe_cliente.php';
include_once 'classe_produto.php';
include_once 'classe_funcionario.php';

$GLOBALS['bd'] = new bancodedados();
$GLOBALS['bd']->conectar();

if(isset($_GET['id_cliente']) && isset($_GET['id_produto']) && isset($_GET['id_funcionario'])){
query("	INSERT INTO compra (id_cliente, id_produto)	VALUES ('" .$_GET['id_cliente']. "', '". $_GET['id_produto']. "', '". $_GET['id_funcionario']. "');");
header('Location: listartudo.php');
}
$query = "
    SELECT * FROM cliente;
	";
	$listagem = $GLOBALS['bd']->query($query);
    while($item = mysql_fetch_assoc($listagem)){
    echo '<option value ="' . $item['id'] . '">' . $item['nome']. '</option>';
	}
$query = "
    SELECT * FROM produto;
	";
	$listagem = $GLOBALS['bd']->query($query);
	while($item = mysql_fetch_assoc($listagem)){
        echo '<option value ="' . $item['id'] . '">' . $item['nome']. ' / ' . $item['preco']. '</option>';
	}	
        $query = "
	SELECT * FROM funcionario;
	";
	$listagem = $GLOBALS['bd']->query($query);
	while($item = mysql_fetch_assoc($listagem)){
	echo '<option value ="' . $item['id'] . '">' . $item['nome']. ' </option>';
	}
    $GLOBALS['bd']->desconectar();
	?>
		

