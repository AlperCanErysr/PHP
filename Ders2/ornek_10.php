<head>
<meta charset="UTF-8"/>
</head>
<?php
   /* Aldığı dizinin değerlerini açılır listeye ekleyen fonksiyon*/
	function acilir_liste($secenekler){
	   echo "<select>";
	   foreach($secenekler as $secenek)
		  echo "<option>$secenek</option>";
	   echo "</select>";
	}
	 
	$merkezler=array("Ankara","İstanbul","İzmir","Adana","Erzincan");
	acilir_liste($merkezler);
?>



