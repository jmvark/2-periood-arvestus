   <?php
    	$validUsername = "Jason";
    	$validPassword = "asdfg";
    	if ($_SESSION["username"] = $validUsername && $_SESSION ["password"] = $validPassword){
    		echo "Kasutajanimi ja parool on õiged";
    	}else if ($_SESSION["username"] = FALSE && $_SESSION["password"] = FALSE) {
			echo "Kasutajanimi / parool on vale";
    	} 
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 5 - Sessiooni tagasiside</title>
  </head>

  <body>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_SESSION); ?></pre>

    <a href="index.php">Mine tagasi</a>

 
  </body>
</html>
