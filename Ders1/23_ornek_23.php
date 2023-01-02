<head>
<meta charset="UTF-8"/>
</head>
<H1>Örnek Faiz Hesaplama</h1><br>
<?php 
	$ay=10;
	$para=1000;
	 
	if ($ay>12){
		$faiz=0.1;
		$odenecek=$para+$para*$faiz;
	}else if ($ay>24){
			$faiz=0.2;
			$odenecek=$para+$para*$faiz;
		  }else if ($ay>48){
					$faiz=0.3;
					$odenecek=$para+$para*$faiz;
				}else if ($ay>60){
						$faiz=0.4;
						$odenecek=$para+$para*$faiz;
					  }else{
						$faiz=0.05;
						$odenecek=$para+$para*$faiz;
					   }
	 echo "ÖDENECEK PARA=".$odenecek."TL";
?>