<head>
<meta charset="UTF-8"/>
</head>
<?php
/* 1 ocak 2011 ile şimdiki zaman arasında kaç gün, kaç saat, 
kaç dakika ve kaç saniye olduğunu bulalım.*/
$simdi=time();
$zaman=mktime(0,0,0,1,1,2011);
$fark=abs($simdi-$zaman); // geçmiş zaman ihtimaline karşılık mutlak değeri alınıyor.
$gun=floor($fark/(24*60*60));
$saat=floor(($fark-$gun*24*60*60)/(60*60));
$dakika=floor(($fark-($gun*24*60*60+$saat*60*60))/60);
$saniye=$fark-($gun*24*60*60+$saat*60*60+$dakika*60);
 
echo "1 Ocak 2011 ile aramızda $gun gün $saat saat $dakika dakika $saniye saniye vardır.";

?>



