<head>
<meta charset="UTF-8"/>
</head>
<?php
//100 ile 500 arasındaki sayıların toplamı
	function sayitopla($ilk,$son){
	  $toplam=0;
	 for ($i=$ilk; $i<=$son ;$i++){  
	   $toplam=$toplam + $i;
	 }
	 return ($toplam);
	}
	$num1=100; 
	$num2=500;
	$sonuc= sayitopla($num1, $num2 );
	echo "$num1-$num2 arası toplam =$sonuc";
?>
