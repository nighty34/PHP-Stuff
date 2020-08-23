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
	<div class="cool">
	<header>
		<h1>Lehrmittel kaufen</h1>
	</header>
	</div>
	<div class="main">
		
		
		<br />
		<form method="get" action="kaufbeleg.php" accept-charset="utf-8">
			<label>
				<div class="cat">
					<p>EMAIL-Adresse: <input type="text" name="mailadress" autofocus /></p>
				</div>
			</label>
			<br />
			<label>
				<div class="cat">
					<h2>Lehrmittel</h2>
					<p><input type="checkbox" name="objekt[]" value="HTML"/> HTML Handbuch</p>
					<p><input type="checkbox" name="objekt[]" value="PHP"/> Einstieg in PHP 5.5 <p>
					<p><input type="checkbox" name="objekt[]" value="MySQL"/> MySQL 5.6</p>
				</div>
			</label>
			<br />
			<label>
				<div class="cat">
					<h2>Sprache: </h2>
					<p><input type="radio" id="de" name="sprache" value="deutsch"/> Deutsch    </p>
					<p><input type="radio" id="en" name="sprache" value="englisch"/> Englisch   </p>
					<p><input type="radio" id="fr" name="sprache" value="französisch"/> Französisch</p>
				</div>
			</label>
			<br />
			<label>
				<div class="cat">
					<h2>Datei-Format</h2>
					<p><input type="radio" id="pd" name="filetype" value="PDF" /> PDF </p>
					<p><input type="radio" id="ep" name="filetype" value="ePUB" /> ePUB </p>
				</div>
			</label>
			<br />
			<label>
				<div class="cat">
					<h2>Zahlungsmethode</h2>
					<select name="Zahlungsmethode">
						<option value="Bar">Barzahlung</option>
						<option value="Kreditkarte">Kreditkarte</option>
						<option value="Rechnung">Rechnung</option>
					</select>
				</div>
			</label>
			<br />
			<label>
				<div class="cat">
					<h2>Senden</h2>
					<p>Wollen sie eine Kopie per Mail bekommen?</p>
					<br />
					<p><input type="checkbox" name="senden" value="mail" /></p>
				</div
			</label>
			<label>
				<p>
					<input type="submit" value="Bestellen"/>
					<input type="reset" />
				</p>
			</label>
		</form>
		<?php
			if (isset($_GET['error'])){
				if($_GET['error'] == 1){
					echo '<div class="error"><p>Die Eingabe ist nicht vollständig</p></div>';
				}
			}
			
			
			if($senden == "mail"){
				
				$Name = "Da Duder"; 
				$email = "email@adress.com";
				$recipient = "mc.nightfury34@gmail.com";
				$mail_body = "The text";
				$subject = "Subject for reviever";  

				mail($recipient, $subject, $mail_body);
				
			}
		?>
		</div
	</body>
</html>