<head>
<meta charset="UTF-8"/>
</head>
<?php
/*Değişken kontrol fonksiyonları
	is_string() --> String olup olmadığını kontrol eder
	is_int()  --> Tamsayı olup olmadığını kontrol eder
	is_float()  --> Kayan noktalı sayı olup olmadığını kontrol eder
	strval()  --> Sayısal değişkeni stringe çevirir.
	intval()  --> String (alfasayısal) bir değeri sayısal bir değere dönüştürür.
	floatval()  --> String (alfasayısal) bir değeri float bir değere dönüştürür.
*/

	if (is_string("23")) {
		echo "dizgedir\n";
		echo ('<br>');
	} else {
		echo "dizge değildir\n";
		echo ('<br>');
	}
	
	if (is_int(23)) {
		echo "tamsayıdır\n";
		echo ('<br>');
	} else {
		echo "tamsayı değildir\n";
		echo ('<br>');
	 }
	  
	if (is_float(27.25)) {
		echo "float türünde\n";
		echo ('<br>');
	} else {
		echo "float türünde değil\n";
		echo ('<br>');
	}
	
	$sayi=90; 
	echo "Önceki veri tipi: "; 	
	echo gettype($sayi);
	echo " Sonraki veri tipi: ";
	echo gettype(strval($sayi));
	echo ('<br>');
	
	$deyim = "42a55bc4t";  //sol başta rakam yoksa  sıfır değeri olur.
	$sayi = intval( $deyim );
	echo $sayi; // 42 olacaktır.
	echo ('<br>');
	
    $deyim = "60.34asd";
    $sayi = floatval( $deyim );
    echo $sayi; // 60.34 olacaktır.
	
?>
