<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Avaliação Dupla</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
	<?php

	include("cabecalho.php");
			echo"
				<form method='post' action='cadastra_estado.php' >
							<legend>Cadastro estado</legend>
							<p>
								<label>Sigla do estado:</label>
								<input  type='text' required name='sigla' id='sigla' />
							</p>
							<p>
								<label>Nome do estado:</label>
								<input  type='text' required name='nome_estado' id='nome_estado' />
							</p>
							<p>
								<input type='submit' value='Enviar'/>
								<input type='Reset' value='Apagar'/>
							</p>
				</form>
			";
		
		
		
	?>
	</body>
</html>


