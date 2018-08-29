<!DOCTYIPE html>
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
	<?php
			include('classe_bancodedados.php');
		if(isset($_GET['id_cliente']) && isset($_GET['id_produto']) && isset($_GET['id_funcionario'])){
				query("	INSERT INTO compra (id_cliente, id_produto, id_funcionario)	VALUES ('" .$_GET['id_cliente']. "', '". $_GET['id_produto']. "', '". $_GET['id_funcionario']. "');");
			
			}
		?>
		
				<h2>Comprar Produtos</h2>
		<form name="form" method="POST">
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
		Produto :  
		<select name="id_produto" />
			<?php $query = "
						SELECT * FROM produto;
					";
					$listagem = query($query);
					while($item = mysql_fetch_assoc($listagem)){
						echo '<option value ="' . $item['id'] . '">' . $item['nome']. ' / ' . $item['valor']. ' / ' . $item['descricao']. '</option>';
					}
					
				?>
		</select><br/>
			Funcionário :  
		<select name="id_funcionario" />
			<?php $query = "
						SELECT * FROM funcionario;
					";
					$listagem = query($query);
					while($item = mysql_fetch_assoc($listagem)){
						echo '<option value ="' . $item['id'] . '">' . $item['nome']. '</option>';
					}
					
				?>
		</select><br/>
		</select><br/>
		<form method="POST">
		<input type="submit" value="Comprar"/><br/>
		<a href="index.php"> 		
		</form>
		</center>
		
		</div>
		</body>
</html>