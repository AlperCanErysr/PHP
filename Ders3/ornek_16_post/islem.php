<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	$metin=$_POST["metin"];
	$tip=$_POST["tip"];
	$boyut=$_POST["boyut"];
	$renk=$_POST["renk"];
	 
	$etiket_acilisi="<font face='$tip' size='$boyut' color='$renk'>";
	$etiket_kapanisi="</font>";
	 
	if(@$_POST["kalin"]){ // kalın seçili ise
	   $etiket_acilisi.="<b>"; // sonuna ekler
	   $etiket_kapanisi="</b>".$etiket_kapanisi; // başına ekler
	}
	 
	if(@$_POST["egik"]){ // egik seçili ise
	   $etiket_acilisi.="<i>"; // sonuna ekler
	   $etiket_kapanisi="</i>".$etiket_kapanisi; // başına ekler
	}
	 
	if(@$_POST["alticizili"]){ // altı çizili seçili ise
	   $etiket_acilisi.="<u>"; // sonuna ekler
	   $etiket_kapanisi="</u>".$etiket_kapanisi; // başına ekler
	}
	 
	echo $etiket_acilisi.$metin.$etiket_kapanisi;
?>
</body>
</html>