<?php
	$nome =$_POST["nome"];
	$email= $_POST["email"];
	$sexo=$_POST["sexo"];
	$cidade_sigla = $_POST["cidade_sigla"];
	

	if(!file_exists('cadastros.xml') ){

				$xml3 = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
				
					<cadastros>
						<cadastro>
							<nome>$nome</nome>
							<email>$email</email>
							<sexo>$sexo</sexo>
							<cidade_sigla>$cidade_sigla</cidade_sigla>
						</cadastro>
					</cadastros>
					";
					file_put_contents("cadastros.xml", $xml3);
		}
	
	
	else{
			
			$xml3 = simplexml_load_file("cadastros.xml");
	
				$cadastro= $xml3->addChild('cadastro');
				$cadastro -> addChild('nome', $nome);
				$cadastro -> addChild('email', $email);
				$cadastro -> addChild('sexo',$sexo);
				$cadastro -> addChild('cidade_sigla', $cidade_sigla);
	
			file_put_contents("cadastros.xml",$xml3->asXML());
			
		}	
		header("Location:index.php");
	
		
?>

		