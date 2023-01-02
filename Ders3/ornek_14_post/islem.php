<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	$sayi=$_POST["sayi"];
	$islem=$_POST["islem"];
	 
	if($islem=="kare"){
	   $sonuc=pow($sayi,2);
	   echo "$sayi<sup>2</sup>=$sonuc";
	}
	elseif($islem=="kup"){
	   $sonuc=pow($sayi,3);
	   echo "$sayi<sup>3</sup>=$sonuc";
	}
	elseif($islem=="karekok"){
	   $sonuc=sqrt($sayi);
	   echo "karekök($sayi)=$sonuc";
	}
	else{ // faktoriyel hesaplanıyor
	   $sonuc=1;
	   for($i=1;$i<=$sayi;$i++)
		  $sonuc*=$i;
	   echo "$sayi!=$sonuc";
	}
?>
</body>
</html>