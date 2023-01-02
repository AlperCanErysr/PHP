<head>
<meta charset="UTF-8"/>
</head>
<?php
	$bugun = getdate();
	echo "$bugun[weekday], $bugun[month] $bugun[mday], $bugun[year]";
//print_r($bugun);
 
 /* getdate bir dizi olarak tüm değerleri vermektedir.
	
	/*
    [seconds] - saniye
    [minutes] - dakika
    [hours] - saat
    [mday] - ayın kaçı
    [wday] - haftanın kaçıncı günü
    [mon] - ay
    [year] - yıl
    [yday] - yılın kaçıncı günü
    [weekday] - haftanın hangi günü
    [month] - hangi ay
    [0] - Unix Epoch'tan bu yana geçen toplam saniye

	Array(
        [seconds] => 53 
        [minutes] => 7 
        [hours] => 22 
        [mday] => 7 
        [wday] => 6 
        [mon] => 12 
        [year] => 2013 
        [yday] => 340 
        [weekday] => Saturday 
        [month] => December 
        [0] => 1386450473
    )
    */ 
?>



