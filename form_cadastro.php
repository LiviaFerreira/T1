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
	if(file_exists('cidades.xml')){
					echo"
						<form method='post' action='cadastro.php' >
									<legend>Cadastro usuário</legend>
									<p>
										<label>Nome:</label>
										<input  type='text' required name='nome' id='nome' />
									</p>
									<p>
										<label>Email:</label>
										<input  type='email' required name='email' id='email' />
									</p>
									<p>
										<label>Sexo:</label><br>
										  <input type='radio' name='sexo' value='M'/> Masculino<br>
										  <input type='radio' name='sexo' value='F'/> Feminno<br>
										  <input type='radio' name='sexo' value='O'/> Outros
									</p>
						";
						echo"<p>Cidade/Estado:";
								$xml2 = simplexml_load_file("cidades.xml");
								echo"<select name='cidade_sigla'>";
											foreach($xml2->cidade as $contador2){
													echo"<option value='$contador2->nome_cidade.$contador2->sigla_cidade'>$contador2->nome_cidade/$contador2->sigla_cidade </option>";
											}
						echo"</select></p>"	;
						echo"
									<p>
										<input type='submit' value='Enviar'/>
										<input type='Reset' value='Apagar'/>
									</p>
						</form>
						";
		}else{
			echo"<h3>Você não cadastrou nenhuma cidade</h3>
			<p>
				Cadastre <a href='form_cidade.php'>aqui</a>
			</p>
			";
		}
	
		
		
	?>
	</body>
</html>
