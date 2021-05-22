

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login - 1</title>
  </head>
  <body>
  
  <?php
  
  if (isset($_GET['u'])) {
	  $u=$_GET['u'];
  } else {
	  $u="";
  }
  
  ?>
  
  <form action="dogrulama.php" method="post">
  
	  <input type="text" value="<?php echo $u;?>" placeholder="Kullanıcı adı" name="u" />
	  <input type="text" value="" placeholder="Parola" name="p" />
	  <input type="submit" value="Giriş Yap" />
	  
  </form>
  
  
  </body>
</html>