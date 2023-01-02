<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	// İstenen kullanıcı adını ve şifreyi sabit değişkenler olarak tanımlayalım.
	define("username","erdal");
	define("password","erd123");
	 
	if($_POST["k_adi"]==username and $_POST["sifre"]==password)
	   echo "Giriş izni verildi. Hoşgeldiniz.";
	else{
	   echo "Kullanıcı adını yada şifreyi yanlış girdiniz. Tekrar deneyiniz!<br>";
	   echo "<a href='ilk_sayfa.php'>Geri</a>";
	}
?>
</body>
</html>