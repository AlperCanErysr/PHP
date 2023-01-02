<head>
<meta charset="UTF-8"/>
</head>
<?php
/*gettype() fonksiyonu:
Belirtilen değişkenin türünü döndürür. */
	$virgullu=2.11;
	print ("Değişkenin türü: ".gettype($virgullu));
	
/* settype() fonksiyonu:
Belirtilen değişkenin türünü değiştirir. */
	echo ('<br>');
	settype($virgullu,'string');
	print ("Değişkenin yeni türü:" .gettype($virgullu));

?>
