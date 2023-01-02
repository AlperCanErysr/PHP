<head>
<meta charset="UTF-8"/>
</head>
<?php
// Dört işlem ve mod işlemi
	$sayi1=5;
	$sayi2=3;
	$bolsonuc=$sayi1/$sayi2;
	$cikarsonuc=$sayi1 - $sayi2;
	$modsonuc= $sayi1 % $sayi2;
	$carpsonuc =$sayi1 * $sayi2;

	printf("bölüm sonucu:%d <br>", $bolsonuc);
	printf("çıkarım sonucu:%d <br>", $cikarsonuc);
	printf("mod sonucu:%d <br>", $modsonuc);
	printf("çarpim sonucu:%d <br>", $carpsonuc);
	
?>
