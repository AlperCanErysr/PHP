<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
if(@$_GET["no"]) // eğer no geldi ise
   echo "<b>Numarası</b>: ",$_GET["no"],"<br>";
elseif(@$_GET["ad"]) // eğer ad geldi ise
   echo "<b>Adı</b>: ",$_GET["ad"],"<br>";
?>
</body>
</html>