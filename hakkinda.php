<?php


session_start();
if($_SESSION['giris']!="başarılı")
{
header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkında</title>
    <link rel="stylesheet" href="style.css">
    <style></style>
</head>
<body>

<ul class="menu1 menu2 menu3 menu4 menu5 menu6 menu7">

<li><a href="hakkinda.html">Hakkında</a></li>

<li><a href="ilgialanlarim.html">İlgi alanlarım</a></li>

<li>
  <a href="sehrim.html">Şehrim</a>
  <ul>
    <li><a href="sehrim.html">Coğrafya</a></li>

    <li><a href="sehrim.html">Tarihçe</a></li>

    <li><a href="sehrim.html">Ekonomik yapı</a></li>

    <li><a href="sehrim.html">Etkinlikler</a></li>

    <li><a href="sehrim.html">Galeri</a></li>

  </ul>

</li>

<li><a href="mirasimiz.html">Mirasımız</a></li>

<li><a href="Ozgecmis.html">Öz geçmişim</a></li>

<li><a href="iletisim.html">İletişim</a></li>

<li><a><?php echo "Hoşgeldin ".$_SESSION["a_kullaniciadi"]; ?></a></li>
</ul>
<br><br>
<ul>
<div>
  <h3>Merhaba ben Ahmet Göçmen,</h3>
</div>

<p>Rize'de doğdum.Aslen memleketim Afyon Çay.Annem ve Babamın işleri gereği 12 yıl Rize'de yaşadım.<br>
  İlk okulumu Çay ilköğretim okulunda okudum.Daha sonra Antaylaya taşındık.Güvenlik orta okulunu ve Çağlayan Anadolu
  lisesinde okudum ve mezun oldum.<br>
  Sakarya Üniversitesinde Bilgisayar Mühendisliğini kazandım.Halihazırda okumaya devam etmekteyim.Okulu şuanda
  Antalyadan uzaktan ilerletmekteyim.</p>

<div>
  <h3>Hobilerim,</h3>
</div>
<ul>
  <li>Bilgisayar oynamak</li>
  <li>Film izlemek</li>
  <li>c</li>
  <li>d</li>
  <li>e</li>
</ul>
</ul>
</body>
</html>