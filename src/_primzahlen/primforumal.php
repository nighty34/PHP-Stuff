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
		<form method="get" action="primauswertung.php" accept-charset="utf-8">
			<p>Zahl zwischen 0-100: <input type="number" name="testzahl" placeholder="0" /></p>
		</form>
	
	</body>
</html>