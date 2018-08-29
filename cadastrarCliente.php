 <?php include_once 'controle_cadastrarCliente.php'; ?>
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
		<li><a href="endereco.php">Endereço</a></li>
		</div>

		<br><br><br><br><br><br><br><br>
		<center>
		<div id="cadastrarCliente">
		<h2> Cadastrar Cliente</h2>
		<form method="get" onsubmit="return validarCadastroCliente();" name="cacl"> 
		Cliente : <input type="text" name="nome" placeholder="Joãozinho"/></br>
		RG: <input type="text" name="registro" placeholder="4002.8922-190"/></br>
		telefone : <input type="text" name="telefone" placeholder="1234-5678"/></br>
		<input type="submit" value="Cadastrar" /></br>
		<a href="listagemcliente.php"/><img src="listc.png" width="15%"/></a><a href="area_restrita.php"><img src="cadastros.png" width="20%" /></a></br>
		
	   
		
		</form>
		<div>
		</center>
	</body>
</html>