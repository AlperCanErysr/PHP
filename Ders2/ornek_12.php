<head>
<meta charset="UTF-8"/>
</head>
<?php
   /* Çağrıldığında içerisinde 1 ile 100 arasında rastgele 10 sayı 
   bulunan bir dizi gönderen fonksiyon*/
	function secilenler(){
	   for($i=1;$i<=10;$i++)
		  $dizi[]=rand(1,100);
	   return $dizi;
	}
	 
	$donen_dizi=secilenler();
	foreach($donen_dizi as $deger)
		echo $deger," ";
?>



