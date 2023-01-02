<head>
<meta charset="UTF-8"/>
</head>
<?php 
	$fiyat=85; 
	$kdv=$fiyat*18/100; 
	$toplam=$fiyat+$kdv; 
	echo "Tutar=".$toplam."<br>"; 
	if($toplam>=100)
		   echo "Kargo Bedava!";
 
?>