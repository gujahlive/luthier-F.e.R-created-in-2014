<?php
include('mobile_device_detect.php');
//mobile_device_detect(true,true,true,true,true,true,'http://luthierfer.url.ph',false);
?>
<?php //include_once'controle_index.php';?>
<!DOCTYIPE html>
<html>
	<head>
	
		<title> Luthier F&R </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assets/CSS/style.css" />
		<link rel="stylesheet" type="text/css"  href="assets/CSS/fotorama.css"/>
		<script type="text/javascript" src="assets/JavaScript/jquery-1.11.1.min.js"> </script>
		<script type="text/javascript" src="assets/JavaScript/fotorama.js"></script>
		<script type="text/javascript" src="assets/JavaScript/arquivo.js"></script>
		
	</head>
<body>
<div id="topo">
<center><img src="assets/Imagens/banner.png"></center>
 
</div>


	<div id="menu">
		

		<li><a href="#">Início</a></li>
		<li><a href="Paginas/empresa.php">Empresa</a>
		<li><a>Produtos</a>
		
		<ul>
		
				<li><a href="Paginas/produtos/violao.php">Violão</a></li>
				<li><a href="Paginas/produtos/guitarra.php">Guitarra</a></li>
				<li><a href="Paginas/produtos/bateria.php">Bateria</a></li>
				<li><a href="Paginas/produtos/teclado.php">Teclado</a></li>
		</ul>
	
		</li>
		
                <li><a href="Paginas/login.php">Área Restrita</a></li>
               <li><a href="Paginas/contato.php">Contato</a></li>
		<li><a href="Paginas/endereco.php">Endereço</a></li>
		</div>

<center><div  id="centro" class="fotorama" data-loop ="true" data-autoplay="3000" data-width="70%" data-ratio="2" data-nav="thumbs">
			
		    <img src="cfoto/p1.png">
			<img src="cfoto/p2.png">
			<img src="cfoto/3.png">
			<img src="cfoto/4.png">
			<img src="cfoto/5.png">
			<img src="cfoto/6.png">
			<img src="cfoto/7.png">
			<img src="cfoto/8.png">
	        <img src="cfoto/9.png">
			<img src="cfoto/10.png">
			<img src="cfoto/11.png">
			<img src="cfoto/12.png">
            <img src="cfoto/13.png">
			<img src="cfoto/14.png">
			<img src="cfoto/15.png">
			<img src="cfoto/16.png">			
			
			
</div>		</center>
<div id="rodape">
<center>&copy; Copyright  &reg; - 2014 </center> 
</div>
</body>

</html>