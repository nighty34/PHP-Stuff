<?php
/*
# Formular (Primzahlen)
# 18.06.2019
*/
header('Content-Type: text/html; charset=utf-8');
?>
<!Doctype html>
<html lang="de-CH">
	<head>
		<meta charset="utf-8">
		
		<title>Fläche</title>
		<link rel="stylesheet" href="array.css">
		<style>
			body {
				padding: 10px;
				margin: 20px;
				width: 500px;
				border-style: solid;
				border-width: 1px;
			}
		
		</style>
	</head>
	<body>
		<?php
			$zahl = $_GET['testzahl'];
			
			$primzahlen = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);
			//foreach($primzahlen ) {
			if(in_array($zahl, $primzahlen)){
				echo "ist eine Primzahl";
				
				
			}else{
				echo "keine Primzahl";
				
			}
			
			
		?>
		<a href="localhost/_primzahlen/primforumal.php>Zurück</a>
	
	</body>
</html>