<?php
	
	$nome = $_POST["nome_atividade"];
	$link = $_POST["link"];
	$data = $_POST["data"];
	
	if(isset($_FILES['arquivo'])){
		   
		  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

		  $ext = strtolower(substr($_FILES['arquivo']['name'],-4)); //Pegando extensão do arquivo
		  $arq = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
		  $dir = 'uploads/'; //Diretório para uploads

		  move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$arq); //Fazer upload do arquivo
		  
	   }	
	
	if(!file_exists("portfolio.xml")){
		
		$xml = "<?xml version = '1.0' encoding = 'UTF-8'?>
				<portfolio>
					<arquivos>
						<nome>$nome</nome>
						<link>$link</link>
						<data>$data</data>
						<arquivo>$arq</arquivo>
					</arquivos>
				</portfolio>
		";
		
		file_put_contents("portfolio.xml",$xml);
		
	}else{
		
		$xml = simplexml_load_file("portfolio.xml");
		
		$arquivo = $xml->addChild('arquivos');
		
		$arquivo->addChild('nome',$nome);
		$arquivo->addChild('link',$link);
		$arquivo->addChild('data',$data);
		$arquivo->addChild('arquivo',$arq);
		
		file_put_contents("portfolio.xml",$xml->asXML());
		
	}
	
	header("Location: listar.php");

?>