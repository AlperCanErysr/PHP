<head>
<meta charset="UTF-8"/>
</head>
<?php
   /*Aldığı sayıya karşılık gelen ay adını kullanıcıya gönderen fonksiyon*/
	function ay_yaz($sayi){
	   $aylar=array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
	   return $aylar[$sayi-1];
	}
	 
	$gun=15;
	$ay=ay_yaz(7);
	$yil=2016;
	echo "<strong>Tarih</strong>: $gun $ay $yil";
?>



