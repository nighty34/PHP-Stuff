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
			$i = 0;
			
			$primzahlen = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);
			//foreach($primzahlen ) {
			while(in_array($zahl, $primzahlen)){
				while(is_numeric($zahl / $primzahlen[$i])){
					$zahl = $zahl / $primzahlen[$i];
					
					/*if(in_array($zahl, $primzahlen)){*/
						echo "Klappt";
						
					
					echo $primzahlen[$i] . " ";
				}
				$i++;
			}
			//}
			
			
		?>
		<form method="get" action="primauswertung.php" accept=">
			<p>Zahl zwischen 0-100: <input type="number" name="testzahl" placeholder="0" /></p>
		</form>
	
	</body>
</html>