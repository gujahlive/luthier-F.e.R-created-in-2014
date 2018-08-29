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
		<?php
		include('bd.php')	;	
		if(isset($_GET['nome']) && isset($_GET['registro'])&& isset($_GET['telefone'])){
		$query = "
			UPDATE cliente 
			SET  nome ='".$_GET['nome']."', 
			registro = ". $_GET['registro']." ,
			telefone = '". $_GET['telefone']."' 
			WHERE id = ".$_GET['id'].";
			";	
			query($query);
			header('Location: listagemcliente.php');
		} else if (isset($_GET['id'])) {
			$query = "
		SELECT * FROM cliente
			WHERE id=".$_GET['id'].";
		";
			$item = query($query);	
			$item = mysql_fetch_assoc($item);	
			}	

		?>
			<center>
	<br><br><br><br><br><br><br><br>
		<div id="cadastrarCliente" >
		<h2> Modificar Cliente </h2>
		<form method="get" onsubmit="return validarModificarCliente();" name="modificarcliente">
		ID:<?php echo $item['id'];?><br />
		Cliente: <input type="text" name="nome" value="<?php echo $item['nome'];?>" placeholder="Exemplo:Ricardão"/><br />
		Registro: <input type="text" name="registro" value="<?php echo $item['registro'];?>"placeholder="Exemplo:34863204-021"/><br/> 
		telefone : <input type="text" name="telefone" value="<?php echo $item['telefone'];?>" placeholder="Exemplo:Quente"/><br/> 
		<input type="hidden"  name="id" value="<?php echo $item['id'];?>"/>
		<input type="submit"  value="Modificar"/>
		</form></div>
		</center>
	</body>
</html>