<?php
  error_reporting(0);
  
  $adi=$_POST["Ad"];
  $soyadi=$_POST["Soyad"];
  $emaili=$_POST["email"];
  $Dogumtarihi=$_POST["Dogumtarih"];
  $Cinsiyeti1=$POST["Erkek"];
  $Cinsiyeti2=$POST["Kadın"];
  $Cinsiyeti3=$POST["Belirsiz"];
  $option1=$_POST["idareeder"];
  $option1=$_POST["Gayetguzel"];
  $option1=$_POST["Kotu"];
  $option1=$_POST["bilemedim"];
  $gelengonderi=$_POST["gonderme"];

  echo "<b>adiniz:</b>$adi";
  echo "<br></br>";
  echo "<b>soyadiniz::</b>$soyadi";
  echo "<br></br>";
  echo "<b>e-maliniz:</b>$emaili";
  echo "<br></br>";
  echo "<b>Dogum tarihiniz:</b>$Dogumtarihi";
  echo "<br></br>";
  echo "<b>Cinsiyetiniz:</b>$Cinsiyeti1".$Cinsiyeti2.$Cinsiyeti3;
  echo "<br></br>";
  echo "<b>seçiminiz:</b>$option1";
  echo "<br></br>";
  echo "<b>öneri gönderiniz:</b>$gelengonderi";

  ?>