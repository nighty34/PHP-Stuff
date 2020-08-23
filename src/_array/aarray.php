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
			$info = array(
				"nachname" => "Deubelbeiss",
				"vorname" => "Isabella",
				"ort" => "Zürich",
			);
			
			
			echo "<ul>";
			foreach($info as $key => $wert){
				echo "<li>";
				echo "{$key} => {$wert} ";
				
				
			}
			echo "</ul>";
		?>
	</body>
</html>