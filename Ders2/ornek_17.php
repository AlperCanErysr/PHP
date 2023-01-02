<head>
<meta charset="UTF-8"/>
</head>
<?php
   /* Dairenin alanının hesaplanması*/
	function daire($r,$pi="3.14"){
	   $sonuc=$pi*$r*$r;
	   return $sonuc;
	}
	 
	echo "pi değeri 3 olunca alanı=",daire(4,3); 
	echo "<br>";
	echo "pi değeri 3.14 olunca alanı=",daire(4); 
?>



