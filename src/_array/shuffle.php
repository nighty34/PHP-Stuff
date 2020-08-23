<?php
/*
# Arrays 
# 18.06.2019
*/
header('Content-Type: text/html; charset=utf-8');
?>
<!Doctype html>
<html lang="de-CH">
	<head>
		<meta charset="utf-8">
		
		<title>GetBild</title>
		<link rel="stylesheet" href="array.css">
	</head>
	<body>
		<?php
			$orte = array("New York", "Berlin", "Prag", "Stuttgart", "Zug", "Zürich", "Bern", "München"); 
			shuffle($orte);
			for($i = 1; $i < 4; $i++){
				foreach($orte as $ort){
					echo $ort . ' ';
					
				}
				echo "</br>";
				shuffle($orte);
			}
			sort($orte);
			echo "</br></br>";
			foreach($orte as $ort){
				echo $ort . " ";
			}
		?>
	</body>
	
</html>