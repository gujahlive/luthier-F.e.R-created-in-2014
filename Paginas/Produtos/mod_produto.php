<!DOCTYPE html>
<html>
	<head>
		<title> Luthier F&R </title>
		<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../../assets/CSS/style.css" />
		<link rel="stylesheet" type="text/css"  href="../../assets/CSS/fotorama.css"/>
		<script type="text/javascript" src="../../assets/JavaScript/jquery-1.11.1.min.js"> </script>
		<script type="text/javascript" src="../../assets/JavaScript/fotorama.js"></script>
		<script type="text/javascript" src="../../assets/JavaScript/arquivo.js"></script>
		
	</head>
	<body>
	<div id="topo">
<center><img src="../../assets/Imagens/banner.png"></center>
 
</div>
	<div id="menu">
			<br><br><br><br><br><br><br><br><br><br>

		<li><a href="../../index.php">Início</a></li>
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
		include('bd.php')	;	
		if(isset($_GET['nome']) && isset($_GET['valor'])&& isset($_GET['tipo'])){
		$query = "
			UPDATE produto 
			SET  nome ='".$_GET['nome']."', 
			valor = ". $_GET['valor']." ,
			tipo = '". $_GET['tipo']."' 
			WHERE id = ".$_GET['id'].";
			";	
			query($query);
			header('Location: lis_produto.php');
		} else if (isset($_GET['id'])) {
			$query = "
		SELECT * FROM produto
			WHERE id=".$_GET['id'].";
		";
			$item = query($query);	
			$item = mysql_fetch_assoc($item);	
			}	

		?>
			<center>
	<br><br><br><br><br><br><br><br>
		<div id="cadastrarProduto">
		<h2> Modificar Produto</h2>
		<form method="get" onsubmit="return validarModificar();" name="modificar">
		ID:<?php echo $item['id'];?><br />
		Produto : <input type="text" name="nome" value="<?php echo $item['nome'];?>" placeholder="Exemplo:Soninha Catatau"/><br />
		Valor : <input type="text" name="valor" value="<?php echo $item['valor'];?>" placeholder="Exemplo:20"/><br/> 
		Tipo : <input type="text" name="tipo" value="<?php echo $item['tipo'];?>" placeholder="Exemplo:Quente"/><br/> 
		<input type="hidden"  name="id" value="<?php echo $item['id'];?>"/>
		<input type="submit"  value="Modificar"/>
</form>
</div>
		</center>
	</body>
</html>