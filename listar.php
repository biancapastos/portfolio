<!DOCTYPE html>

<?php
	include"cabecalho.php";
?>

<html>

	<head>
	
		<title></title>
		<meta charset = "UTF-8" />
		
		<style>
		
			body{
				
				background-color: #efa2f2;
				
			}
			table, p{
				
				background-color: #fff;
				text-align: center;
				margin: 100px auto;
				padding: 2%;
				border: 2px solid purple;
				width: 50%;
				
			}
			table tr th{
				
				background-color: #f3bef5;
				
			}
			input{
				
				margin: 1%;
				
			}
			
		</style>

	
	</head>

	<body>
	
	<?php
		if(file_exists("portfolio.xml")){
	?>
		
		<table border = "2">

             <tr>
			 
				<th>Atividade</th>
				<th>Data</th>
				<th>Download</th>
			
			</tr>


<?php
		$xml = simplexml_load_file("portfolio.xml");
        foreach($xml -> Children() as $portfolio){
?>
			<tr>
			
				<td><?php echo "<a href = '$portfolio->link'>$portfolio->nome</a>"; ?></td>
				<td><?php echo "$portfolio->data"; ?></td>
				<td><?php echo "<a href = 'uploads/$portfolio->arquivo'>Download</a>"; ?></td>
			
			</tr>
<?php
		}
?>

        </table>
		
	<?php
		}else{
			echo "<p>Ainda não há registros</p>";
		}
	?>

	</body>

</html>				