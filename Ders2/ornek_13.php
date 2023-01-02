<head>
<meta charset="UTF-8"/>
</head>
<?php
   /* Aldığı dizideki sayıların en büyüğünü, en küçüğünü ve ortalamasını gönderen fonksiyon*/
	function isle($sayilar){
	   $eb=$sayilar[0];
	   $ek=$sayilar[0];
	   $toplam=0;
	   $sayac=0;
	   foreach($sayilar as $deger){
		  $ek=($deger<$ek)?$deger:$ek;
		  $eb=($deger>$eb)?$deger:$eb;
		  $toplam+=$deger;
		  $sayac++;
	   }
	   return array("ek"=>$ek,"eb"=>$eb,"ort"=>$toplam/$sayac);
	}
	 
	$degerler=array(43,6,15,41,97,65,84,68,45,64,94,72,56);
	echo "Dizi değerleri: ";
	foreach($degerler as $goster){
	  echo $goster." ";
	}
	echo ('<br>');
	$sonuc=isle($degerler);
	echo "En küçük sayı=",$sonuc["ek"],"<br>";
	echo "En büyük sayı=",$sonuc["eb"],"<br>";
	echo "Ortalama=",$sonuc["ort"],"<br>";
?>



