<!DOCTYPE html>
<html>
	<head>
		<title> Luthier F&R </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" type="text/css"  href="fotorama.css"/>
		<script type="text/javascript" src="jquery-1.11.1.min.js"> </script>
		<script type="text/javascript" src="fotorama.js"></script>
		<script type="text/javascript" src="arquivo.js"></script>
		
	</head>
	<body>
	<div id="topo">
<center><img src="banner.png"></center>
 
</div>
	<div id="menu">
			<br><br><br><br><br><br><br><br><br><br>

		<li><a href="index.php">Início</a></li>
		<li><a href="empresa.php">Empresa</a>
		<li><a>Produtos</a>
		
		<ul>
		
				<li><a href="violao.php">Violão</a></li>
				<li><a href="guitarra.php">Guitarra</a></li>
				<li><a href="bateria.php">Bateria</a></li>
				<li><a href="teclado.php">Teclado</a></li>
		</ul>
	
		</li>
	
                <li><a href="login.php">Área Restrita</a></li>
               <li><a href="contato.php">Contato</a></li>
		<li><a href="endereco.php">Endereço</a></li>
		</div>
	
	<br><br><br><br><center><div id="area">
	<h2> Listagem das Compras </h2>
<?php
		include('bd.php')	;	
		$listagem = query("
					SELECT
			compra.id AS 'id',
			cliente.nome AS 'cliente',
			produto.nome AS 'produto',
			produto.valor AS 'valor'
			
		FROM
			compra
		JOIN
		cliente ON compra.id_cliente = cliente.id
		JOIN
		produto ON compra.id_produto = produto.id
					");

		while ($item = mysql_fetch_assoc($listagem)){
		echo $item['id']. ' - Nome do Cliente: ' . $item['cliente'] . ' / Nome do Produto: ' . $item['produto'] . ' / Valor do Produto: R$ ' . $item['valor'] . '<br/>';
		}

?>

<br><a href="area_restrita.php"><img src="cadastros.png" width="20%";/></a></br>
<br/><a href="cadastrartudo.php"><img src="voltar.png" /></a><br/>
</div>
</center>
		
	</div></center>


	</body>
</html>