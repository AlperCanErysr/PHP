<head>
<meta charset="UTF-8"/>
</head>
<?php
   /*Aldığı diziyi ekranda sırasız liste şeklinde gösteren fonksiyon*/
	function liste($elemanlar){
	   echo "<ul>";
	   foreach($elemanlar as $eleman)
		  echo "<li>$eleman</li>";
	   echo "</ul>";
	}
	 
	$ic_donanim=array("İşlemci","Anakart","RAM","Ekran Kartı","Sabitdisk");
	liste($ic_donanim);
	 
	liste(array("Klavye","Fare","Ekran","Yazıcı","Kasa","Hoparlör"));
?>



