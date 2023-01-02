<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	$s1=rand(1,100);
	$s2=rand(1,100);
	echo "<b>Üretilen sayılar:</b><br>";
	echo "Sayı 1=$s1<br>Sayı 2=$s2<br>";
	echo "<a href='yaz.php?sayi1=$s1&sayi2=$s2'>
	Bu linke tıklayarak sayıları gönderebilirsiniz</a>";
?>
</body>
</html>
