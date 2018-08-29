<!DOCTYPE html>
<html>
	<head>
		<title> Luthier F&R </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
			<script type="text/javascript" src="jquery-1.11.1.min.js"> </script>
	<script type="text/javascript" src="arquivo.js"></script>
	</head>
	<body>
            <div id="topo">
                <center><img src="banner.png"></center>
 
            </div>


	<div id="menu">
			<br><br><br><br><br>

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
		<div id="cadastrarProduto">
			<?php
		include('bd.php')	;
			$listagem = query("SELECT * FROM produto;");
				while ($item = mysql_fetch_assoc($listagem)){
				echo '<a href="mod_produto.php?id='.$item['id'].'">'. $item['id']. ' '. $item['nome'] .' R$ '. $item['valor'] .' '. $item['tipo'] .'</a>  <a href="lis_produto.php?id='.$item['id'].'">Deletar Produto!</a> <br/>';
				if(isset ($_GET['id'])){
				$query = "
				DELETE  FROM produto				
				WHERE id = ".$_GET['id'].";
				";	
				query($query);
				header('Location: lis_produto.php');
				}
				}
				?>
				Clique No produto para modificar
				<br><a href="cadastrarProduto.php">Voltar a Cadastrar Produto</a></br>
				<br><a href="area_restrita.php"><img src="cadastros.png" width="20%" /></a></br>
			</div>
			</center>
	</body>
</html>