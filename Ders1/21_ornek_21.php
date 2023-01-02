<head>
<meta charset="UTF-8"/>
</head>
<?php
	$vize=45; 
	$final=60; 
	$ort=($vize*40/100)+($final*60/100); 
	echo "Ortalama:".$ort."<br>";
	 
	if($ort>=50) 
		echo "Durum:Geçti";
	else 
		echo "Durum:Kaldı" 
?>