<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
  	<?php
	$username = $_POST["username"];
	$sex = $_POST["sex"];

?>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_POST);
 		?></pre>
<?php
 		if ($username && $sex) {
     	echo "Tere {$username}! tundub et olete {$sex}";
  	}
  		else if (empty($sex)) {
  			echo "wassup {$username}, mine tagasi ja vali sugu";
  		}
  		else if (empty($username)) {
  			echo "wassup {$sex}, mine tagasi ja vali kasutajanimi";
  		}
  		else if (empty($sex) && empty($username)) {
  			echo "Sup lambi inimene, mine tagasi ja täida väljad";
  		}
     ?>

    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
