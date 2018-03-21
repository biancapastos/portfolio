<!DOCTYPE html>

<?php
	include("cabecalho.php");
?>

<html>

	<head>
	
		<title></title>
		<meta charset = "UTF-8" />
		
		<style>
		
			body{
				
				background-color: #efa2f2;
				
			}
			div{
				
				background-color: #fff;
				text-align: center;
				width: 45%;
				margin: 100px auto;
				padding: 3%;
				border: 3px solid purple;
				
			}
			input{
				
				margin: 1%;
				
			}
			input[type = submit]{
				
				border-radius: 5px;
				padding: 1%;
				width: 25%;
				
			}
			label{
				
				font-weight: bold;
				
			}
			
		</style>

	
	</head>

	<body>
	
		<div>
		
			<form method = "post" action = "registro.php" enctype="multipart/form-data">
			
				<label>Nome atividade: </label>
				<input type = "text" name = "nome_atividade" />
				
				<br />
				
				<label>Link: </label>
				<input type = "text" name = "link" />
				
				<br />
				
				<label>Data: </label>
				<input type = "date" name = "data" />
				
				<br />
				
				<label>Arquivo: </label>
				<input type = "file" name = "arquivo" />
				
				<br />

				<input type = "submit" name = "Enviar" />
				
				<br />
			
			</form>
		
		</div>
	
	</body>

</html>