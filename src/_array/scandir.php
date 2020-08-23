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
		<form action="scandir.php" method="get">
			<p>Zu durchsuchender Ordner: <input type="text" name="adress" /></p>
			<p>Durch nummerieren:        <p/><input type="checkbox" name="keybool" value="1"/>
										 <input type="submit">
		</form>
	
	
	
	
	
		<?php
			$files = array();
			$dir = "";
			
			
			$dir = htmlspecialchars($_GET['adress']);
			
			$files1 = scandir($dir);
			
			
			if (isset($_POST['keybool'])){
				printarray($files1, True);
			}else{
				printarray($files1, False);
			}
		
			
			function printarray($info, $boolkey){
				echo "<ul>";
				foreach($info as $key => $wert){
					echo "<li>";
					if ($boolkey == True){
						echo $key . ": ";
						echo "test";
					}
					echo $wert;
				}
				echo "</ul>";
			}
		
		?>
	</body>
</html>