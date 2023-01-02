<head>
<meta charset="UTF-8"/>
</head>
<?php
	/* Karakter Kümesi Fonksiyonları*/
	$okul = 'Maltepe Üniversitesi Mühendislik ve Doğa Bilimleri Fakültesi';
	$dizi = explode (' ',$okul); // boşluk ifadesine göre cümleyi böler
	echo '<pre>';
	print_r ($dizi);
	echo '</pre><hr>';
	echo "number_format kullanımı","<br>";
	/*Kullanım şekli:
	number_format($değer, ondalık hane sayısı, 'ondalık ayırıcı', 'binlik ayırıcı');
	*/
	$deger = 1234.56;
	$tl_formati = number_format($deger, 2, ',', '.');
	echo $tl_formati. "<br><hr>";
	echo "str_repeat kullanımı","<br>";
	echo str_repeat("=",10). "<br><hr>";
	echo "str_replace kullanımı","<br>";
	/*Kullanım Şekli:
		str_replace(bul, değiştir, dizi değişken, dizi sayısı)
	*/
	$veri = "İstanbul güzel bir şehir?";
	echo $veri, "<br>";
	echo str_replace("güzel","pahalı",$veri),"<br><hr>";
	echo "strcmp kullanımı","<br>";
	$isim1="Ali";
	$isim2="Ayşe";

	if(strcmp($isim1,$isim2)==0){
		print "iki isim aynıdır";   
	}else{
		print "isimler farklıdır";   
	}
	
	echo "<br><hr>";
	echo "strlen kullanımı","<br>";
	echo "Karakter sayısı:".strlen("maltepe universitesi"),"<br><hr>";
	echo "strtolower kullanımı","<br>";
	$str = "ISTANBUL ankara IZMIR";
	$str = strtolower($str);
	echo $str,"<br><hr>";
	echo "strtoupper kullanımı","<br>";
	$str2 = "ISTANBUL ankara IZMIR";
	$str2 = strtoupper($str2);
	echo $str2,"<br><hr>";
?>



