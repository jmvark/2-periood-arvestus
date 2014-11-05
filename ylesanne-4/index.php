<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsised</title>
  </head>

  <body>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_COOKIE); ?></pre>

    	<?php
		$name = "arvestus";
		$value = "Cookie on olemas";
		$expire = time() +20;
		setcookie($name, $value, $expire);
	
	?>
	<?php
		if (!isset($_COOKIE[$name])) {
			echo "Küpsis nimega {$name} pole saadaval";
		}else {
			echo "Küpsis nimega {$name} on saadaval";
		}
	?>
  </body>
</html>
