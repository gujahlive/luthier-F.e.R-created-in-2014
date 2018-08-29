<?php include_once 'controle_contato.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title> Luthier F&R </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="jquery-1.11.1.min.js"> </script>
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
		<li><a href="login.php">Área Restrita</a></li>
		<li><a href="contato.php">Contato</a></li>
		<li><a href="endereco.php">Endereço</a></li>
		</div>

		
		<div id="cadastrarCliente">
		<form name="contato" method="POST" onsubmit="return validarContato();"  />
		
		<h2> Enviar Contato </h2>
		nome : <input type="text" name="nome"  placeholder="Joãozinho" /></br>
		e-mail: <input type="text" name="email" placeholder="example@domain.com"/></br>
		dados : <textarea name="dados" id="dados" cols="30" rows="7" placeholder=" Mensagem, Motivo, Pedido, Estado,Genero, Telefone, Rg." ></textarea></br></li>
	
			<input type="submit" value="Cadastrar" /></br>
        
		</form>
		
		</div></center>	
<div id="rodape">
<center>&copy; Copyright  &reg; - 2014 </center> 
</div>
	</body>
</html>