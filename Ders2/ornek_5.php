<head>
<meta charset="UTF-8"/>
</head>
<?php
   //Bir dizinin fonksiyona gönderilmesi 
	function liste_yaz($gelendizi){
		for ($i=0;$i<count($gelendizi);$i++)
			echo $gelendizi[$i]."<br>";
	}
	$gelendizi=array(6,8,10,7);
	liste_yaz($gelendizi);
?>



