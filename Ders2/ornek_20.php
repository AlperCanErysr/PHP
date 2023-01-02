<head>
<meta charset="UTF-8"/>
</head>
<?php
 /* Aldığı kullanıcı adı ve şifre bilgilerini tanımlı değerlerle karşılaştıran fonksiyon*/
	$kullanici_adi="maltepe";
	$sifre="mltp123";
	 
	function giris($user,$password){
	   global $kullanici_adi;
	   global $sifre;
	   if ($user==$kullanici_adi and $password==$sifre)
		  $login=true;
	   else
		  $login=false;
	   return $login;
	}
	 
	if (giris("hayr","h1845")==true)
	   echo "Giriş başarılı";
	else
	   echo "Hatalı kullanıcı yada şifre!";
	 
	echo "<br>";
	 
	if (giris("maltepe","mltp123")==true)
	   echo "Giriş başarılı.";
	else
	   echo "Hatalı kullanıcı yada şifre!";
?>



