<?php

include_once 'classe_bancodedados.php';
include_once 'classe_cliente.php';
include_once 'classe_funcionario.php';
include_once 'classe_produto.php';

$bd = new bancodedados();
$bd->conectar();

$compraCliente = '<select name="id_cliente">' .
        $query = "
					SELECT id FROM cliente;
				";
$clientes = $bd->query($query);
while ($cliente = mysql_fetch_assoc($clientes)) {
    $item =  new cliente($cliente['id']);
    $compraCliente .=  '<option value ="' . $item->getId() . '">' . $item->getNome() . '</option>';
    
}
$compraCliente .= '</select><br/>';   



$compraProduto = '<select name="id_produto" />' .
        $query = "
						SELECT id FROM produto;
					";
    $produtos = $bd->query($query);
while ($produto = mysql_fetch_assoc($produtos)) {
    $item = new produto($produto['id']);
    $compraProduto .=  '<option value ="' . $item->getId() . '">' . $item->getNome() . '</option>';
    }
    $compraProduto.= '</select><br/>';
    
    
    
   $compraFuncionario = '<select name="id_funcionario" />' .
        $query = "
						SELECT id FROM funcionario;
					";
    $funcionarios = $bd->query($query);
while ($funcionario = mysql_fetch_assoc($funcionarios)) {
    $item = new funcionario($funcionario['id']);
    $compraFuncionario .=  '<option value ="' . $item->getId() . '">' . $item->getNome() . ' </option>';
    }
    $compraFuncionario .= '</select><br/>  ';

?>