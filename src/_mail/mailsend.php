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
	<!--	<form method="get" action="mailform.php" accept-charset="utf-8"> -->
		<?php
			$inhalt = "Error: Inhalt konnte nicht gefunden werden";
			$i = 1;
			$mymail = "info@webpubli.ch";
			$header = "From: " . $mymail . "\r\nContent-type:text/plain; charset=UTF-8," . "-f" . $mymail ;

//String formats
			
			$formatmail = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
			$formatname = '/^[a-zA-Z]+$/i';
			$errcount = 0;
			
			session_start();
			
			
			

			if(preg_match($formatmail, $_GET['email'])){
				$_SESSION['errormail'] = false;
			}else{
				$_SESSION['errormail'] = true;
				$errcount++;
				echo "1";
			}
			$_SESSION['mail'] = $_GET['email'];			
			if(preg_match($formatname, $_GET['name'])){
				$_SESSION['errorname'] = false;
			}else{
				$_SESSION['errorname'] = true;
				$errcount++;
				echo "2";
			}
			$_SESSION['name'] = $_GET['name'];
			
			if(isset($_GET['infos[0]'])){
			$infos = $_GET['infos'];
			}
			
			if(isset($_GET['infos'])){
				$_SESSION['errorinfos'] = false;
			}else{
				$_SESSION['errorinfos'] = true;
				$errcount++;
				echo "3";
			}
			if(preg_match($formatname, $_GET['vorname'])){
				$_SESSION['errorvname'] = false;
			}else{
				$_SESSION['errorvname'] = true;
				$errcount++;
				echo "5";
			}
			$_SESSION['vorname'] = $_GET['vorname'];
			
			
			if(isset($_GET['Newsletter'])){
				$_SESSION['errornewsletter'] = false;
			}else{
				$_SESSION['errornewsletter'] = true;
				$errcount++;
				echo "4";
			}
			$_SESSION['newsletter'] = $_GET['Newsletter'];
			
			
			if($errcount < 1){
				inhaltsprint(true);
				
				$bestellung = implode("\n \n>Bestellung: \n", $_GET['infos']) ;
				$inhalt = "Personalien: \n" . "Name: " . $_GET['vorname'] . " " . $_GET['name'] . "\n" . "Email: " . $_GET['email'] . "\n \n Bestellung(en): \n \n" . "Bestellung: \n" . $bestellung;  
				
				mail($_GET['email'], "Bestellung", $inhalt, $header);
			}else{
				//var_dump ($_SESSION['error']); 
			}
			echo $errcount;
			

			
			
			
			function inhaltsprint($start){
				$i = 1;
				
				$vorname = htmlspecialchars($_GET['vorname']);
				$name = htmlspecialchars($_GET['name']);
				$email = htmlspecialchars($_GET['email']);
				//$infos[] = htmlspecialchars($_GET['infos:']);
				$infos = arrayumschreiben($_GET['infos']);
				if($start == true){
					echo "<h2>Personalien: </h2><br />";
					echo "Name: " . $vorname . " " . $name . "<br />" . "Email: " . $email . "<br /> <br />";
					echo "<h2>Bestellung(en): </h2><br />";
					foreach($infos as $info){
						echo "Nr. " . $i . " " . $info . "<br /><br />";
						$i++;
					}
					echo "<br />";
					if($_GET['Newsletter'] == 1){
						echo "<h2>Newsletter:</h2>" . /*"<br />" .*/ "Der Newsletter wurde abonniert";
					}else{
						echo "<h2>Newsletter:</h2>" . /*"<br />" .*/ "Der Newsletter wurde nicht abonniert";
					}
				}
				
			}
			function arrayumschreiben($infos){
				$in = [];
				$j = 0;
				foreach($infos as $inf){
					$in[$j] = htmlspecialchars($inf);
					$j++;
				}
				return $in;	
			}
			
			
			
			
			
			echo '<p><a href="mailform.php?' . SID . '">Zurück</a> </p>';	
		?>
			
			

	<!--	</form> -->
	</body>
</html>