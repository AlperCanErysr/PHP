<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
$no=$_GET["no"];
if($_GET["islem"]=="duzelt")
   echo "$no nolu kayıt düzeltilecektir.";
elseif($_GET["islem"]=="sil")
   echo "$no nolu kayıt silinecektir!";
?>
</body>
</html>