<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
  //Önemli bir adres
  //http://www.phpdefteri.com/icerik/42/dosya_yukleme.html
	$gecici_ad=$_FILES["dosya"]["tmp_name"];
	$kalici_yol_ad="upload/".$_FILES["dosya"]["name"]; // dosya kendi adıyla upload dizinine kaydedilecek
	 
	if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
	   echo "Dosya başarı ile yüklendi.";
	else
	   echo "Yükleme başarısız!";
?>
</body>
</html>