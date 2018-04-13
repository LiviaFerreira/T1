<?php
	$sigla_cidade= $_POST["sigla_cidade"];
	$nome_cidade = $_POST["nome_cidade"];
	

	if(!file_exists('cidades.xml') ){
				$xml2 = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
				
					<cidades>
						<cidade>
							<sigla_cidade>$sigla_cidade</sigla_cidade>
							<nome_cidade>$nome_cidade</nome_cidade>
						</cidade>
					</cidades>
					";
					file_put_contents("cidades.xml", $xml2);
		}
	else{
			
			$xml2 = simplexml_load_file("cidades.xml");
				$cidade = $xml2->addChild('cidade');
				$cidade -> addChild('sigla_cidade', $sigla_cidade);
				$cidade -> addChild('nome_cidade', $nome_cidade);
		
	
			file_put_contents("cidades.xml",$xml2->asXML());
			
		}	
		header("Location:index.php");
	
		
?>

		