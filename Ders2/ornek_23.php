<head>
<meta charset="UTF-8"/>
</head>
<?php
	$simdi=time();
	echo "Bugün:".date('d.m.Y H:i:s', $simdi). "<br>";
	$gelecek_hafta=$simdi+7*24*60*60;
	echo "Gelecek hafta:".date('d.m.Y H:i:s', $gelecek_hafta). "<br>";
	$dun=$simdi-24*60*60;
	echo "Dün:".date('d.m.Y H:i:s', $dun). "<br>";
	$yarin=$simdi+24*60*60;
	echo "Yarın:".date('d.m.Y H:i:s', $yarin). "<br>";
?>



