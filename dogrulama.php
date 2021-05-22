<?php


$username=$_POST['u'];
$pass=$_POST['p'];

if ($username=="soysal" && $pass=="tan") {
	echo "Doğru";

	header("Location: http://localhost/g201210061.html", true, 301);
exit();

} else {
	header("Location:login.php?u=$username");
}


?>