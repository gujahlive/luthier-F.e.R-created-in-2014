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
		<li><a href="registro.php">Endereço</a></li>
		</div>
		<div id="cadastrarCliente" >
		<ul id="cadastrar">
		<?php
		include('bd.php')	;
			$listagem = query("SELECT * FROM cliente;");
				while ($item = mysql_fetch_assoc($listagem)){
				echo '<a href="modificarcliente.php?id='.$item['id'].'">'. $item['id']. ' Cliente: '. $item['nome'] .'-'.' RG: '. $item['registro'].'-'.' telefone: '. $item['telefone'] . '</a>  <a href="listagemcliente.php?id='.$item['id'].'">Deletar Cliente!</a> <br/>';
				if(isset ($_GET['id'])){
				$query = "
				DELETE  FROM cliente				
				WHERE id = ".$_GET['id'].";
				";	
				query($query);
				header('Location: listagemcliente.php');
				}
				}
				?>
				
				Clique No Cliente para modificar 
				<br><a href="cadastrarCliente.php">Voltar a Cadastrar Cliente</a></br>
			<br><a href="area_restrita.php"><img src="cadastros.png" width="20%" /></a></br>
				</center>
				</ul></div>
	</body>
</html>