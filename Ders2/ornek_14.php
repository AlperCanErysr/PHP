<head>
<meta charset="UTF-8"/>
</head>
<?php
   /* Bir sayının tam bölünüp bölünmediğinin bulunması*/
	function bolunur_mu($bu, $buna) {
	   $kalan = $bu % $buna;
	   if($kalan == 0) {
		  echo $bu . ' sayısı ' . $buna . ' sayısına bölünür! <br>';
	   } else {
		  echo $bu . ' sayısı ' . $buna . ' sayısına bölünmez! (kalan: '.$kalan.')';
	   }
	}
	 
	bolunur_mu(10, 2);
	bolunur_mu(25, 10);
?>



