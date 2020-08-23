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
			$infos = array(
			"Projektleiter" => "Sorg Hubert",
			"Datenbank-Spezalist" => "Horter Iris",
			"Programmierer" => "Friedlos Armin",
			"Tester" => "Bünzli Reto",
			"Grafik-Designerin" => "Schön Helen",
			);
			
			ksort($infos);
			printarray($infos);
			
			krsort($infos);
			printarray($infos);
			
			asort($infos);
			/*var_dump($infos);*/
			printarray($infos);
			
			arsort($infos);
			printarray($infos);
			
			
			function printarray($info){
				echo "<ul>";
				foreach($info as $key => $wert){
					echo "<li>";
					echo $key . ":   " . $wert;
				}
				echo "</ul>";
			}
		?>
	</body>
</html>