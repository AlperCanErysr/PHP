<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
$liste=array(74=>"Onur",64=>"Samet",85=>"Can",16=>"Raşit",80=>"Mert",14=>"Aziz");
foreach($liste as $indis=>$deger)
   echo "$indis <a href='yaz.php?no=$indis'>$deger</a><br>";
?>
</body>
</html>