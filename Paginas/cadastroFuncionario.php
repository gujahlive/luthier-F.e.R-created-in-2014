<?php include_once 'controle_cadastrarFuncionario.php'; ?>
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
        <center> <br><br><br><br><br><div id="cadastrarFuncionario">
             <h3> Cadastrar Funcionário </h3>
			 <form name="cafu" method="post" onsubmit="return validarCadastroFuncionario();"> 
			Nome: <input type="text" name="nome"> <br />
			Login: <input type="text" name="login"> <br />
			Senha: <input type="password" name="senha"> <br />
			<input type="submit" value="Cadastrar">
             </form></center></div>
	</body>
</html>

