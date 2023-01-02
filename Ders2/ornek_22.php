<head>
<meta charset="UTF-8"/>
</head>
<?php
/*	
Harf 	Açıklaması 											Örnek
d 		İki haneli şeklinde günü verir 						27
m 		İki haneli şeklinde ayı verir 						07
Y 		Dört haneli şeklinde yılı verir 					2013
H 		İki haneli ve 24 saat formatında saati verir 		19
i 		İki haneli şeklinde dakikayı verir 					38
s 		İki haneli şeklinde saniyeyi verir 					59
l 		(küçük L) Haftanın gününün ingilizce adını verir 	Monday
F 		Ayın ingilizce adını verir 							July
*/	
	echo date('d.m.Y H:i:s'). "<br>";
	echo 'Saat: ' . date('H:i'). "<br>";
	echo date('d F Y l'). "<br>";
	echo date("d-m-Y");

?>



