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
			$jahreszahlen = range(2017, 2020);
			
			foreach($jahreszahlen as $wert){
				echo $wert . " ";
			}
		
		
		
		?>
		
	</body>
</html>