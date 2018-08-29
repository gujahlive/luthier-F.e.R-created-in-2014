<?php include_once'controle_compra.php';?>
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
		
                <li><a href="cadastrarCliente.php">Cliente</a></li>
                <li><a href="login.php">Área Restrita</a></li>
                <li><a href="compra.php">Carrinho</a></li>
		<li><a href="endereco.php">Endereço</a></li>
		</div>
			<center><div id="compra">
				<form method="POST">
					Cliente : 
					<?php echo  $compraCliente ?> <br/>
					Produto :  
					<?php echo $compraProduto ?> <br/>
					Funcionario :  
					<?php echo $compraFuncionario ?> <br/>
					<input type="submit" value="Comprar"/><br/>
				</form>				
			</div>	</center>
			
			<div id="rodape">
<center>&copy; Copyright  &reg; - 2014 </center> 
</div>
		</div>	
	</body>
</html>