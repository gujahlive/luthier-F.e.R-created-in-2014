
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
                <center><img src="banner.png"></center>
 
            </div>


	<div id="menu">
			<br><br><br><br><br>

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
		
      <?php
				include('bd.php')	;
				if(isset($_GET['nome']) && isset($_GET['valor'])&& isset($_GET['tipo'])){
				query("INSERT INTO produto (nome, valor,tipo) VALUES ('".$_GET['nome']."',". $_GET['valor'].",'". $_GET['tipo']."');");
				header('Location: lis_produto.php');
				}
				//isset verifica se a os parametros que voce deseja na barra de endereço
		?>
		<br><br><br><br><br><br><br><br>
		<center>
		<div id="cadastrarProduto">
		<h2>Cadastro De Produtos</h2>
		<form method="get" onsubmit="return validarCadastroProdutos();" name="capr">
		Produto:<input type="text" name="nome" placeholder="Exemplo:Violão, Guitarra, Bateria & Teclado"/></br>
		     Valor:<input type="text" name="valor" placeholder="Exemplo:400,00"/></br>
		      Tipo:<input type="text" name="tipo" placeholder="Exemplo:Aucustico, Infantil, Adulto & etc."/></br>
			 <input type="submit" value="Cadastrar"  /></br>
	          <a href="lis_produto.php"/><img src="list.png" width="15%"/></a><a href="area_restrita.php"><img src="cadastros.png" width="20%" /></a></br>
	        
			  </form>
		</div>
		</center>
	</body>
</html>