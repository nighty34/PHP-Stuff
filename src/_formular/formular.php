<?php
/*
# Formular
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
		<form method="get" action="formular_auswertung.php" accept-acherset="utf-8">
			<h1>Formular mit der GET-Methode</h1>
			
			<p>Vorname: <input type="text" name="Vorname" autofocus /></p>
			<p>Nachname: <input type="text" name="Nachname"/></p>
			<p>Wohnort: <input type="text" name="Wohnort"/></p>
			<input type="submit"/><input type="reset"/>
			
		</form>
	</body>
</html>