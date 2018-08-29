<?php
include_once'controle_painel.php';
?>
<!DOCTYPE html>
<html>
<body>
<div id="menu">
		

		<li><a href="../index.php">Início</a></li>
		<li><a href="empresa.php">Empresa</a>
		<li><a>Produtos</a>
		
		<ul>
				<li><a href="Paginas/produtos/violao.php">Violão</a></li>
				<li><a href="Paginas/produtos/guitarra.php">Guitarra</a></li>
				<li><a href="Paginas/produtos/bateria.php">Bateria</a></li>
				<li><a href="Paginas/produtos/teclado.php">Teclado</a></li>
		</ul>
	
		</li>
		
                <li><a href="cadastrarCliente.php">Cliente</a></li>
                <li><a href="login.php">Área Restrita</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
		<li><a href="endereco.php">Endereço</a></li>
		</div>
<?php
print_r($_SESSION);
?>
    <a href="index.php?desconectar">Desconectar</a>
</body>
</html>