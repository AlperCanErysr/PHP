<head>
<meta charset="UTF-8"/>
</head>
	
	<form action="index.php" method="post">
	 İsim: <br/>
	 <input type="text" name="isim" /><br/>
	 Soyisim: <br/>
	 <input type="text" name="soyisim" /><br/>
	 Şifre: <input type="password" name="sifre"><br>
	 E-mail: <br/>
	 <input type="text" name="mail" /><br/>
	 Cinsiyet: <br/>
	 <input type="radio" name="cinsiyet" value="e" /> Erkek<br/>
	 <input type="radio" name="cinsiyet" value="k" /> Kadın<br/>
	 Eğitim Durumu:
	 <select name="egitim">
                  <option value="ilkogretim">İlköğretim</option>
                  <option value="lise" selected>Lise</option>
                  <option value="yuksekokul">Yüksek Okul</option>
                  <option value="universite">Üniversite</option>
                  <option value="master">Master</option>
                  <option value="doktora">Doktora</option>
    </select><br/>
	 Mesaj: <br/>
	 <textarea name="mesaj"></textarea><br/>
	 <input type="submit" value="Formu gönder" />
	</form>

