
<?php
	$sigla = $_POST["sigla"];
	$nome_estado = $_POST["nome_estado"];
	

	if(!file_exists('estados.xml') ){
		
		$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
		
			<estados>
				<estado>
					<sigla>$sigla</sigla>
					<nome_estado>$nome_estado</nome_estado>
				</estado>
			</estados>
			";
			file_put_contents("estados.xml", $xml);
	} 
	
	else{
			
			$xml = simplexml_load_file("estados.xml");
			$estado = $xml->addChild('estado');
			$estado -> addChild('sigla', $sigla);
			$estado -> addChild('nome_estado', $nome_estado);
		
	
			file_put_contents("estados.xml",$xml->asXML());
			
		}	
		header("Location:index.php");
		
			;
		
?>

		
	
		