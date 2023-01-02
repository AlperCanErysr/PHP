<head>
<meta charset="UTF-8"/>
</head>
<?php
	/* Tarihin türkçe gösterlmesi */
	$tarih="2010-04-26";
	@setlocale(LC_ALL, "turkish");
	echo strftime("%d %B %Y, %A",strtotime("$tarih"));
?>



