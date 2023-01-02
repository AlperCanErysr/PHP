<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style type="text/css">
<!--
.baslik {
text-align:right;
vertical-align:top;
}
-->
</style>
</head>
<body>
<form name="mail" method="post" action="index.php">
   <table border="0">
      <tr>
         <td class="baslik">Mail Adresiniz:</td>
         <td><input type="text" name="email"></td>
      </tr>
      <tr>
         <td class="baslik">Adınız Soyadınız:</td>
         <td><input type="text" name="adsoyad"></td>
      </tr>
      <tr>
         <td class="baslik">Tarih:</td>
         <td><input type="text" name="tarih" value="<?php echo date("d.m.Y");?>" readonly></td>
      </tr>
      <tr>
         <td class="baslik">Konu:</td>
         <td><input type="text" name="konu"></td>
      </tr>
      <tr>
         <td class="baslik">Mesajınız:</td>
         <td><textarea name="mesaj" rows="5" cols="25"></textarea></td>
      </tr>
      <tr>
         <td class="baslik">&nbsp;</td>
         <td><input type="submit" name="gonder" value="Gönder"></td>
      </tr>
   </table>
</form>
<?php
	if($_POST){
	// formlardan gelen bilgiler sırasıyla alınıyor
	$kimden=$_POST["email"];
	$adsoyad=$_POST["adsoyad"];
	$tarih=$_POST["tarih"];
	$konu=$_POST["konu"];
	$mesaj="<p><b>$adsoyad - $tarih</b></p><p>".$_POST["mesaj"]."</p>";
	$kime="erdalguvenoglu@maltepe.edu.tr";
	$basliklar="from: $kimden\r\n";
	$basliklar.="bcc: deneme@hotmail.com\r\n";
	$basliklar.="Content-type: text/html; charset=utf-8";
	 
	if(@mail($kime,$konu,$mesaj,$basliklar))
	   echo "<p><font color=\"green\">Mesajınız başarı ile gönderilmiştir.</font></p>";
	else
	   echo "<p><font color=\"red\">Hata: Mesajınız gönderilemedi. Tekrar deneyiniz.</font></p>";
	}
?>
</body>
</html>

