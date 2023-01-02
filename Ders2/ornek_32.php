<head>
<meta charset="UTF-8"/>
</head>
<?php
	$adres = "erdalguvenoglu@maltepe.edu.tr";
	$konu = "Mail konusu";
	$mesaj = "PHP Mail() Fonksiyonu";
	mail("$adres","$konu","$mesaj");
	echo "mail gönderildi";
?>



