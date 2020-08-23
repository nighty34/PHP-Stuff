<?php
/*
# Formular (Fläche)
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
		<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" accept-acherset="utf-8">
			<h1>Fläche berechnen</h1>
			
			<p>Länge: <input type="number" name="Länge" placeholder="0" autofocus /></p>
			<p>Breite: <input type="number" name="Breite" placeholder="0" /></p>
			<input type="submit"/><input type="reset"/>
			
			<?php
				echo $_SERVER['PHP_SELF'];
				$ergebnis = 0;
				
				if(isset($_POST['Länge']) && isset($_POST['Breite'])){
				$ergebnis = $_POST['Länge'] * $_POST['Breite'];
				echo "</br></br>";
				echo "Ergebnis: " . $ergebnis;
				}
			?>
		</form>
	</body>
</html>