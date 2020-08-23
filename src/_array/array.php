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
			$jahreszahlen = array(2017, 2018, 2019);
			
			for($i = 0; $i < 3; $i++){
				
				echo '<p>Jahres Zahl: ' . $jahreszahlen[$i] . '</p>';
				
			}
			
			foreach($jahreszahlen as $wert){
				echo $wert . " ";
			}
		
			echo '<h1>Neu</h1>';
			print_r($jahreszahlen);
		
		
		
		?>
		
		
	</body>
</html>