<head>
<meta charset="UTF-8"/>
</head>
<?php
   /* Aldığı 3 basamaklı sayının birler, onlar ve yüzler basamağındaki rakamları 
	bir dizi olarak geriye gönderen fonksiyon*/
	function basamaklar($sayi){
	   $birler=$sayi%10;
	   $onlar=(($sayi-$birler)/10)%10;
	   $yuzler=(($sayi-$birler)-$onlar*10)/100;
	   return array("birler"=>$birler,"onlar"=>$onlar,"yüzler"=>$yuzler);
	}
	 
	$sayimiz=854;
	$donen_dizi=basamaklar($sayimiz);
	echo "Sayımız=$sayimiz<br>";
	echo "Birler=",$donen_dizi["birler"],"<br>";
	echo "Onlar=",$donen_dizi["onlar"],"<br>";
	echo "Yüzler=",$donen_dizi["yüzler"],"<br>";
?>



