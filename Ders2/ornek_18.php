<head>
<meta charset="UTF-8"/>
</head>
<?php
   /* bir sayının üssünün hesaplanması*/
	function us_al($sayi,$üs=2){
	   $sonuc=1;
	   for($i=1;$i<=$üs;$i++)
		  $sonuc*=$sayi;
	   return $sonuc;
	}
	 
	echo "5<sup>3</sup>=",us_al(5,3);
	echo "<br>";
	echo "4<sup>5</sup>=",us_al(4,5);
	echo "<br>";
	echo "4<sup>2</sup>=",us_al(4); // üs 2 kabul edildi 
?>



