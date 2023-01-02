<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<form action = "islem.php" method="get">
	Adınız:<input type="text" name="ad"><br>
	Soyadınız:<input type="text" name="soyad"><br>
	Cinsiyet: <input type="radio" name="Cinsiyet" value="Erkek"> Erkek
			  <input type="radio" name="Cinsiyet" value="Kadın"> Kadın
	<br>
	Eğitim Durumu:
		<select name="egitim">
                  <option value="ilkogretim">İlköğretim</option>
                  <option value="lise" selected>Lise</option>
                  <option value="yuksekokul">Yüksek Okul</option>
                  <option value="universite">Üniversite</option>
                  <option value="master">Master</option>
                  <option value="doktora">Doktora</option>
		</select> <br>
	Özgeçmiş: <input type="file" name="ozgecmis"><br>
	
	<input type="submit" value="Gönder">
</form>
</body>
</html>
