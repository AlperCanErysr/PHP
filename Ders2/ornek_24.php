<head>
<meta charset="UTF-8"/>
</head>
<?php
 /* mktime($saat, $dakika, $saniye, $ay, $gun, $yil)
 Tam olarak belirtilen zamana gitmeyi sağlar. 
 Başka bir ifadeyle belirtilen zamanı unix epoch biçimine dönüştürür. 
 Eğer zaman belirtilmezse şimdiki zaman bilgisini unix epoch biçiminde verir.
 Buraki sıralamaya dikkat ediniz. (saat, dakika, saniye, ay, gün, yıl)
*/

//18 Haziran 1983 tarihinde doğan birinin doğum gününü ekrana unix epoch biçiminde yazdıralım.
// dogum gününün ilk anları. Saat,dakika ve saniye sıfırdır.
	$dogum=mktime(0,0,0,6,18,1983);
	echo "Doğum tarihiniz : ",$dogum;
?>



