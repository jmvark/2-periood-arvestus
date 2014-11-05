<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
  </head>

  <body>
  	<?php
      $page_link = "result.php";
  		$username = "jmvark";
  		$age = 71;
  	?>
     <a href="<?php echo $page_link . '?username=' . $username . '&age=' . $age; ?>">Teisele lehele</a>

  </body>
</html>
