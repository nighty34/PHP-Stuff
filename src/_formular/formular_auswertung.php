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
		<?php
			$vorname = strip_tags($_GET['Vorname']);
			$nachname = htmlspecialchars($_GET['Nachname']);
			$ort = htmlspecialchars($_GET['Wohnort']);
		
			echo $vorname . " ";
			echo $nachname . " " ;
			echo $ort . " " ;
		
			echo '<br/><a href="http://localhost/_formular/formular.php">Zurück!</a>';
		?>
	</body>
</html>