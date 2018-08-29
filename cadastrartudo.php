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
	<?php
			include('bd.php');
		if(isset($_GET['id_cliente']) && isset($_GET['id_produto'])){
				query("	INSERT INTO compra (id_cliente, id_produto)	VALUES ('" .$_GET['id_cliente']. "', '". $_GET['id_produto']. "');");
				header('Location: listartudo.php');
			}
		?>
		
				<h2>Comprar Produtos</h2>
		<form name="form" onsubmit="return validarTudo();" method="get">
		Cliente : 
		<select name="id_cliente" />
			<?php $query = "
					SELECT * FROM cliente;
				";
				$listagem = query($query);
				while($item = mysql_fetch_assoc($listagem)){
					echo '<option value ="' . $item['id'] . '">' . $item['nome']. '</option>';
				}
				
			?>
		</select><br/>
		Produto & Preço :  
		<select name="id_produto" />
			<?php $query = "
						SELECT * FROM produto;
					";
					$listagem = query($query);
					while($item = mysql_fetch_assoc($listagem)){
						echo '<option value ="' . $item['id'] . '">' . $item['nome']. ' / ' . $item['valor']. '</option>';
					}
					
				?>
		</select><br/>
		<form method="get">
		<input type="submit" value="Efetuar Compra"/><br/>
		<br><a href="listartudo.php"><img src="verc.png" width="15%"/></a><a href="area_restrita.php"><img src="cadastros.png" width="20%" /></a>
		
		
		
		</form>
		</center>
		
		</div>
		</body>
</html>
	</div></center>


	</body>
</html>