<head>
<meta charset="UTF-8"/>
</head>
<?php
	//Çift tırnak ile tanımlanan karakter dizileri
	$okul="Maltepe Ünv. ";
	$okul1="$okul Bilgisayar Müh.";
	echo $okul1;     // Maltepe Ünv. Bilgisayar Müh. yazar.
	
	echo ('<br>');
	//Tek tırnak ile tanımlanan karakter dizileri
	$okul="Maltepe Ünv.";
	$okul1='$okul Bilgisayar Müh.';
	echo $okul1;     // $okul Bilgisayar Müh. yazar.

?>
