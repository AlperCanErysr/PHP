<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	if( $_GET["name"] || $_GET["email"] || $_GET["contact"]){
		echo "Hoşgeldiniz: ". $_GET['name']. "<br />";
		echo "E-mail: ". $_GET["email"]. "<br />";
		echo "GSM No: ". $_GET["contact"];
	}
?>

</body>
</html>