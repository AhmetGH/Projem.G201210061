<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <style>
    *{margin:0;padding:0;}
    body{
        color:#fff;
        background-image: url('Tüm-resimler/1889154.jpg');
        background-position:center;
        background-repeat:no-repeat;
        background-size: cover;
        height: 100vh;
    }
    .duzen{
        display:flex;
        flex-direction: column;
        align-items:center;
        text-align:center;
        margin:10%;
    }
    .renk{
        color:red;
    }
    </style>
</head>
<body>
    
    <form action ="" method="post" class="duzen">
        <h2>Siteme Hoşgeldiniz</h2>
        <br>
        <input type="email" name="a_kullaniciadi" placeholder="Kullanıcı Adı Giriniz">
        <br>
        <input type="password" name="a_sifre" placeholder="Şifrenizi Giriniz">
        <br>
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
            ?>
            <html><body><h2 class="duzen renk">Kullanıcı adı veya Şifre girilmesi zorunludur!</h2></body></html>
            <?php
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
            ?>
            <html><body><h2 class="duzen renk">Şifre Yanlış</h2></body></html>
            <?php
        }
    }
    else
    { 
        ?>
            <html><body><h2 class="duzen renk">Kullanıcı Adı Bulunamadı</h2></body></html>
            <?php
    }
    }
    }
?>