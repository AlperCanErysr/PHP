<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
 
	<?php
	//Gizli form elemanı kullanarak sayı tahmin sayfası
	if(!$_POST){// POST olayı yoksa yani sayfa ilk kez açılıyorsa
	   $sayi=rand(1,100); // bulunması gereken sayı rastgele üretiliyor
	   $mesaj="Bir sayı tuttuk bilin bakalım kaç!";
	}
	else{ // POST olayı varsa yani sayı tamin edildiyse
	   $tahmin=$_POST["tahmin"];
	   $sayi=$_POST["sayi"];
	   if($tahmin>$sayi)
		  $mesaj="Daha küçük bir sayı giriniz.";
	   elseif($tahmin<$sayi)
		  $mesaj="Daha BÜYÜK bir sayı giriniz.";
	   else{
		  $mesaj="Tebrikler bildiniz!";
		  $mesaj.="<br><a href='ilk_sayfa.php'>Tekrar denemek için tıklayınız.</a>";
	   }
	}
	?>
 
   <form name="form1" method="post" action="ilk_sayfa.php">
      Tahmin: <input type="text" name="tahmin"><br>
      <input type="hidden" name="sayi" value="<?php echo $sayi;?>">
      <input type="submit" name="tahminet" value="Tahmin Et">
   </form>
 
<?php
echo $mesaj;
?>
</body>
</html>
