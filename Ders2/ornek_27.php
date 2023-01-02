<head>
<meta charset="UTF-8"/>
</head>
<?php
	/* Hangi gün doğduğumuzu ekrana yazdıralım. */
	$dogum_gunu=mktime(0,0,0,6,18,1983);
	$zaman=getdate($dogum_gunu); // unix epoch biçimindeki dogum gunumuzu verdik
	echo "18 Haziran 1983 günü : ",$zaman["weekday"];
?>



