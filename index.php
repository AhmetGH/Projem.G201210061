<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giriş</title>
</head>
<body>
    <form action ="" method="post">
        <input type="text" name="a_kullaniciadi" placeholder="Kullanıcı Adı Giriniz">
        <input type="password" name="a_sifre" placeholder="Şifrenizi Giriniz">
        <input type="submit" name="gonder" value="Giriş Yap">
</form>
</body>
</html>

<?php
session_start();
    error_reporting(0);
    $kullaniciadi="g201210061@sakarya.edu.tr";
    $sifre="g201210061";

    $a_kullaniciadi = htmlspecialchars($_POST['a_kullaniciadi']);
    $a_sifre = htmlspecialchars($_POST['a_sifre']);

    if($_POST['gonder'])
    {
        if(empty($a_kullaniciadi) or empty($a_sifre))
        {
        echo 'Kullanıcı adı veya Şifre girilmesi zorunludur!';
        }
    
    else{
        if($a_kullaniciadi==$kullaniciadi)
        {
            if($a_sifre==$sifre)
            {
                $_SESSION['giris'] = "başarılı";
                $_SESSION["a_kullaniciadi"]=$a_kullaniciadi;
                header("location:hakkinda.php");
            }
        else
        { 
            echo 'Sifre Yanlış';
        }
    }
    else
    { 
        echo 'Kullanıcı Adı Bulunamadı';
    }
    }
    }
?>