<?php

error_reporting(0);
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
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
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
      <h4>Yapmayı sevdiğim şeyler ve hobilerim,</h4>
    </div>
    <p>
      Genel yaşantımın yarısından fazlası isteristemez bilgisayarda geçiyor.Kendimi bildim bileli bilgisayar oyunlarıyla
      oynuyorum.
      Onun dışında elektroniğe büyük ilgim var.Son yıllarda oyunları oynamaktan daha çok modlamayı sever oldum ve oyuna
      harcadığım sürenin kat ve katını oyunları modlamaya harcamaya başladım.
      Buna benzer şekilde liseye giriş senelerimde bilgisayar donanımlarında da aynı şekilde bilgisayarı açıp kullanmak
      yerine bilgisayar donanımını açıp kurcalamayı parça yükseltmeyi ve değişiklik yapmayıda aynı oyun modlamakta
      olduğu gibi sevmeye başladım.
      Son 2 yılda kendime yeni bilgisayar sistemi kurdum vaktimin çoğu burda geçiyor.
      Korona döneminden önce ve bu dönemde vakit buldukça yazlıkta atv sürmeyi çok seviyorum.
      Antalya'dada arkadaşlarla bisiklet grubumuz var.Gezilicek yerlere ve genel olarak denize çok gidiyoruz.
      Kiraz ve badem hasat zamanlarında Afyon Çaya ve Isparta Uluborlu'ya kiraz ve badem toplamaya gidiyorum.
      haziranın sonlarında kiraz hasadı bittikten sonra eylül vakti badem hasadı başlıyor.Bu sürelerde o bölgelerde
      oluyorum.Film izlemeyi çok severim.Kitap okumaya fazla vakit ayırmasamda ayda minimum 3-4 kitap okurum.
      Filmlerde genelde tarihi ve bilim kurgu konularını severim.Kitaplardada yazarın oluşturduğu ütopik dünyaya ayak
      uydurmaktan çok zevk alırım.
    </p>
    <h4>Kısaca</h4>
    <ul>
      <li>Bilgisayar oynamak,</li>
      <li>Araç kullanmak(bisiklet,araba,vs),</li>
      <li>Elektronik aletlerle uğraşmak,</li>
      <li>yukardada anlattığım gibi bir nesnenin veya olayın bileşenleriyle uğraşmayı severim.</li>
    </ul>
  </ul>
  
  <div class="owl-carousel owl-theme pad">
    <div class="item">
      <img src="Tüm-resimler/2021-05-23 at 14.56.21.jpeg" style="width:500px">
    </div>
    <div class="item">
      <img src="Tüm-resimler/IMG_20180619_071212.jpg" style="width:500px">
    </div>
    <div class="item">
      <img src="Tüm-resimler/2018-08-21 20-31-40.JPG" style="width:650px">
    </div>
    <div class="item">
      <img src="Tüm-resimler/2018-06-12 17-56-47.JPG" style="width:650px">
    </div>
  </div>

  <ul class="pad">
    <iframe width="960" height="540" src="https://www.youtube.com/embed/eIcLDzutR2o" title="YouTube video player"
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
  </ul>
  <script src="owlcarousel/jquery.min.js"></script>
  <script src="owlcarousel/owl.carousel.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoWidth: true,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>
</body>
</html>