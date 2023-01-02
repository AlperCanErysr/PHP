<head>
<meta charset="UTF-8"/>
</head>
<?php
   /* Girilen sayı tek/çift mi*/
	function ciftMi($sayi){
		if($sayi % 2){
			return false;
		}else{
			return true;
		}
	}
	 
	if(ciftMi(6)){
		echo "Çift";
	}else{
		echo "Tek";
	}
?>



