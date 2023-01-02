<head>
<meta charset="UTF-8"/>
</head>
<?php
// Faktoriyel hesaplama
	function faktoriyel($sayi){
		 if ($sayi==0) 
			return(1);
		 $fakt=1;
		 for ($i=1; $i<=$sayi ; $i++){    
			$fakt= $fakt * $i;  
		 }
		  return ($fakt);
	}
	  $num =6;
	  $sonuc = faktoriyel ($num);
	  echo "Girdiğiniz $num sayısının faktoriyeli:".$sonuc;  
?>



