<head>
<meta charset="UTF-8"/>
</head>
<?php
	/* sonraki yılbaşına kaç gün var */
	$simdi=getdate();
	$sonraki_yil=$simdi["year"]+1;
	$yilbasi=mktime(0,0,0,1,1,$sonraki_yil);
	$gun=floor(($yilbasi-time())/(24*60*60));
	echo "Yılbaşına $gun gün vardır.";
?>



