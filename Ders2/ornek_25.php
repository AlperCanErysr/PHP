<head>
<meta charset="UTF-8"/>
</head>
<?php
	//18 Haziran 1983 tarihinde doğan birinin kaç gündür yaşadığını bulalım.
	$dogum=mktime(0,0,0,12,18,1983);
	$simdi=time();
	$fark=$simdi-$dogum; // yaşadığı zamanın saniye karşılığı
	$gun=$fark/(24*60*60); // fark'ın kaç güne karşılık geldiği bulunuyor
	$gun=floor($gun); // ondalıklı gün aşağıya yuvarlanıyor.
	echo "Siz $gun gündür yaşamaktasınız."
?>



