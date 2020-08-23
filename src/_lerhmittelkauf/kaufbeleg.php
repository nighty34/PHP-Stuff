<?php
/*
# Formular (Kaufen)
# 18.06.2019
*/
header('Content-Type: text/html; charset=utf-8');
?>
<!Doctype html>
<html lang="de-CH">
	<head>
		<meta charset="utf-8">
		
		<title>Kaufen sie teure Laden dinga von mir!</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Ihr Kaufbeleg</h1>
		<br />
			<?php
				$i = 1;
				$_GET['error'] = 0;
				
				echo "<h2>Email</h2>";
				if(isset($_GET['mailadress'])){
					echo $_GET['mailadress'];
				}else{
					$_GET['error'] = 1;
				}
				echo "<br /><br />";
				
				echo "<h2>Gewählte(s) Objekt(e): </h2>";
				if(isset($_GET['objekt']) && isset($_GET['sprache']) && isset($_GET['filetype'])){
					foreach($_GET['objekt'] as $aktobjekt){
						$aktobjekt = str_replace("HTML", "HTML5 Handbuch", $aktobjekt);
						$aktobjekt = str_replace("PHP", "PHP 5.5", $aktobjekt);
						$aktobjekt = str_replace("MySQL", "MySQL 5.6", $aktobjekt);
						echo "Nr." . $i . "<br /> Lehrmittel: " . $aktobjekt . "<br />" . "Produktsprache: " . $_GET['sprache'] . "<br /> Typ: " . $_GET['filetype'] ."<br /> <br />";
						$i++;
					}
				}else{
					$_GET['error'] = 1;
					
				}
				
				
				
				if(isset($_GET['Zahlungsmethode'])){
					echo "<h2>Zahlungsmethode: </h2>";
					
					if($_GET['Zahlungsmethode'] == "Bar" || $_GET['Zahlungsmethode'] == "Kreditkarte"){
						echo $_GET['Zahlungsmethode'] . " (Im Sekretäriat)";
					}else{
						echo $_GET['Zahlungsmethode'];
					}
				}else{
					$_GET['error'] = 1;
				}
				echo "<br /> <br />";
				
				if($_GET['error'] == 1){
					echo '<script type="text/javascript">
						window.location.href = "http://localhost/_lerhmittelkauf/kaufformular.php?error=1";
					</script>';
				}
				
				
				//echo '<p>' 
				
			?>
	</body>
</html>