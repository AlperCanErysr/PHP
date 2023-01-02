<head>
<meta charset="UTF-8"/>
</head>
<?php
	function topla($a, $b) {  
		return ($a + $b); 
	}
	function carp($a, $b) { 
		return ($a*$b);  
	}
	function mod_al($a, $b) { 
		return ($a % $b); 
	}
	$num1 = 8; 
	$num2 = 3;
	$sonuctoplam = topla($num1, $num2);
	$sonuccarpim = carp($num1, $num2);
	$sonucmod =    mod_al($num1, $num2);
	echo "Toplam sonucu: $sonuctoplam<br>";
	echo "Çarpim sonucu: $sonuccarpim<br>";
	echo "Mod sonucu: $sonucmod<br>";
?>

