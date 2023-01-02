<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
$ad = $_GET ["ad"];
$soyad = $_GET ["soyad"];
$cinsiyet = $_GET ["Cinsiyet"]; 
$egitim = $_GET ["egitim"]; 
$ozgecmis = $_GET ["ozgecmis"];
?>
 
Merhaba : <?php echo $ad . " " . $soyad ; ?> <br> 
Cinsiyetiniz : <?php echo $cinsiyet ; ?> <br>
Eğitim Durumu : <?php echo $egitim ; ?> <br>
Özgeçmiş dosyası : <?php echo $ozgecmis ; ?> <br>

</body>
</html>