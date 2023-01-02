<head>
<meta charset="UTF-8"/>
</head>
<?php
   /* Girilen operatöre göre dört işlem yapmak*/
	function islemYap($islem,$sayi1,$sayi2){
		switch($islem){
			case "+":
				$sonuc=$sayi1+$sayi2;
				break;
			case "-":
				$sonuc=$sayi1-$sayi2;
				break;
			case "*":
				$sonuc=$sayi1*$sayi2;
				break;
			case "/":
				$sonuc=$sayi1/$sayi2;
				break;
			default:
				$sonuc=0;
				break;
		}
		
		return $sonuc;
	}
	 
	$toplam=islemYap("+",5,7); 
	echo "Toplam sonucu:".$toplam;
	 
	echo "<br/>";
	 
	echo "Çarpım sonucu:".islemYap("*",3,5);
?>



