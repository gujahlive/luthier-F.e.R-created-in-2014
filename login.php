<?php include_once'controle_index.php';?>
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
            <body>
<div id="topo">
<center><img src="banner.png"></center>
</div>
            <center><div id="login">
 <form method="POST">
            Login : <input type="text" name="login" maxlength="50"/>
            Senha : <input type="password" name="senha" maxlength="32"/>
 <input type="submit" value="Logar"/>
            <center><?php 
            
                if(isset($erro) && $erro) {
                    echo 'Login ou Senha invalidos por favor tente Novamente !';
                }
                ?> Faça O Login Para Continuar</center>
 </form></div></center>
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

</body>
       </html>
