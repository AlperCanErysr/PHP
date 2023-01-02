<head>
<meta charset="UTF-8"/>
</head>
<?php
   //Girilen iki notun ortalaması
	function ortalama($not1,$not2){
	   return ($not1+$not2)/2;
	}
	 
	$y1=65;
	$y2=88;
	echo "<b>Not1</b>=$y1 <b>Not2</b>=$y2 <b>Ortalama</b>=",ortalama($y1,$y2);
?>



