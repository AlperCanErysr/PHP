<head>
<meta charset="UTF-8"/>
</head>
<?php
	/* Matematiksel Fonksiyonlar*/
	$mutlak = abs(-4.2); 
	echo "Mutlak değeri:". $mutlak."<br><hr>";
	echo "floor kullanımı","<br>";
	echo floor(14.68),"<br>"; // ekrana 14 yazar
	echo floor(14.12),"<br>"; // ekrana 14 yazar
	echo floor(-14.9),"<br>"; // ekrana -15 yazar
	echo floor(-14.1),"<br><hr>"; // ekrana -15 yazar
	echo "ceil kullanımı","<br>";
	echo ceil(14.68),"<br>"; // ekrana 15 yazar
	echo ceil(14.12),"<br>"; // ekrana 15 yazar
	echo ceil(-14.9),"<br>"; // ekrana -14 yazar
	echo ceil(-14.1),"<br><hr>"; // ekrana -14 yazar
	echo "round kullanımı","<br>";
	echo round(14.68),"<br>"; // ekrana 15 yazar
	echo round(14.12),"<br>"; // ekrana 14 yazar
	echo round(1.95583, 3),"<br><hr>";//ekrana 1.956 yazar
	echo "pow kullanımı","<br>";
	echo pow(4, 3),"<br>";
	echo pow(2, 3),"<br><hr>";
	echo "sqrt kullanımı","<br>";
	echo sqrt(4),"<br>";
	echo sqrt(100),"<br><hr>";
	echo "max kullanımı","<br>";
	echo max(9,3,15,6,7),"<br><hr>";
	echo "min kullanımı","<br>";
	echo min(9,3,15,6,7),"<br><hr>";
	echo "log10 kullanımı","<br>";
	echo log10(100),"<br><hr>";	
	echo "fmod kullanımı mod ile aynıdır","<br>";
	echo fmod(10,4),"<br><hr>";	
	echo "deg2rad kullanımı- dereceden radyana dönüştürme yapar","<br>";
	echo deg2rad(10),"<br><hr>";
	echo "sin(), cos(), tan() kullanımı","<br>";
	echo "sin(30)=",sin(30),"<br>";
	echo "cos(30)=",cos(30),"<br>";
	echo "tan(30)=",tan(30),"<br><hr>";	
?>



