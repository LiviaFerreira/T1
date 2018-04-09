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
		$xml = simplexml_load_file("estados.xml");
			echo"
				<table>
					  <tr>
						<th>Sigla</th>
						<th>Estado</th> 
						
					  </tr>
			";
			foreach($xml->estado as $contador_estado){													
					  echo"
						  <tr>
							<td>$contador_estado->sigla</td>
							<td>$contador_estado->nome_estado</td> 
						  </tr>
						 ";
			}
			echo"
				</table>
			";
		}else{
			echo"<h3>Você não cadastrou nenhum estado</h3>";
		}
	if(file_exists('cidades.xml') ){
		$xml2 = simplexml_load_file("cidades.xml");
					echo"
				<table>
					  <tr>
						<th>Cidade</th> 
						<th>Estado</th>						
					  </tr>
			";
			foreach($xml2->cidade as $contador_cidade){													
					  echo"
						  <tr>
							<td>$contador_cidade->nome_cidade</td> 
							<td>$contador_cidade->sigla_cidade</td>
						  </tr>
						 ";
			}
			echo"
				</table>
			";
	}else{
			echo"<h3>Você não cadastrou nenhuma cidade</h3>
				
			";
	}
	if(file_exists('cadastros.xml')){
			$xml3 = simplexml_load_file("cadastros.xml");
					echo"
				<table>
					  <tr>
						<th>Nome</th> 
						<th>Email</th>	
						<th>Sexo</th>	
						<th>Cidade/Estado</th>	
					  </tr>
			";
			foreach($xml3->cadastro as $contador_cadastro){													
					  echo"
						  <tr>
							<td>$contador_cadastro->nome</td> 
							<td>$contador_cadastro->email</td>
							<td>$contador_cadastro->sexo</td>
							<td>$contador_cadastro->cidade_sigla</td>
						  </tr>
						 ";
			}
			echo"
				</table>
			";
	}else{
			echo"<h3>Você não cadastrou nenhum usuário</h3>
				
			";
	}
	
		
	?>
	</body>
</html>