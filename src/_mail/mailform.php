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
		
		<title>Lehrmittelkauf</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		
		
		
		
		
		mainrun();
		$fillname = $_SESSION['name'];
		$fillvname = $_SESSION['vorname'];
		$fillmail = $_SESSION['mail'];
		
		
		
		
		echo <<<END_FORM
		<form method="get" action="mailsend.php" accept-charset="utf-8">
			<fieldset>
				<legend>Personalien</legend>
				<label>
					<p>Name <input type="text" name="name" value="$fillname" /></p>
					<p>Vorname <input type="text" name="vorname" value="$fillvname" /></p>
					<p>Email <input type="text" name="email" value="$fillmail" /></p>
				</label>
			</fieldset>
			<fieldset>
				<legend>Ich bestelle Informationen zu</legend>
			<!--			<label> -->
					<p><input type="checkbox" name="infos[]" value="PHP" /> PHP </p>
					<p><input type="checkbox" name="infos[]" value="JavaScript" /> JavaScript</p>
					<p><input type="checkbox" name="infos[]" value="CSS" /> CSS</p> 
			<!--	</label> -->
			</fieldset>
			<fieldset>
				<legend>Ich abonniere den Newsletter</legend>
			<!--	<label>	-->
					<p><input type="radio" name="Newsletter" value="1" /> Ja </p>
					<p><input type="radio" name="Newsletter" value="0" /> Nein </p>
			<!--	</label> -->
			</fieldset>
			<fieldset>
				<label>
					<p><input type="Submit" value="Bestätigen" /> </p>
				</label>
			</fieldset>
		</form>
END_FORM;
		?>
		
		<?php
			function mainrun(){
				session_start();
				echo "<fieldset>";
				if($_SESSION['errorname'] == true){
					echo "Name invalid ";
				}
				if($_SESSION['errorvname'] == true){
					echo "Vorname invalid ";
				}
				if($_SESSION['errormail'] == true){
					echo "Mailadresse invalid ";
				}

				if($_SESSION['errorinfos'] == true){
					echo "Auswahl invalid ";
				}
				if($_SESSION['errornewsletter'] == true){
					echo "Newsletterauswahl invalide ";
				}
				echo "</fieldset>";
			}
			
			
			
		?>
	</body>
</html>