<?php
			function query($query) {
				$servidor = 'localhost';
				$usuario = 'root';
				$senha = '';
				$conexao = mysql_connect($servidor, $usuario, $senha);
				if($conexao) {
					$selecao = mysql_select_db('sistema', $conexao);
					mysql_set_charset('utf8');
					if($selecao) {
						return mysql_query($query);
						mysql_close($conexao);
					} else {
						die(mysql_error()); 
					} 
				} else {
					die(mysql_error()); 
				}
			}
			
		?>