<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Avaliação Dupla</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
	<?php
	include "cabecalho.php";
	if(file_exists('estados.xml') ){
			echo"
				<form method='post' action='cadastra_cidade.php' >
							<legend>Cadastro cidade</legend>
							
				";
			echo"<p>Estado:";
								$xml = simplexml_load_file("estados.xml");
								echo"<select name='sigla_cidade'>";
											foreach($xml->estado as $contador1){
													echo"<option value='$contador1->sigla'>$contador1->sigla</option>";
											}	
								echo"</select>";
			echo"</p>";	
			echo"
							<p>
								<label>Nome da cidade:</label>
								<input  type='text' required name='nome_cidade' id='nome_cidade' />
							</p>
							<p>
								<input type='submit' value='Enviar'/>
								<input type='Reset' value='Apagar'/>
							</p>
				</form>
			";
		
	}else{
			echo"<h3>Você não cadastrou nenhum estado</h3>
				<p>
					Cadastre <a href='form_estado.php>aqui</a>
				</p>
			";
		}
	
		
	?>
	</body>
</html>