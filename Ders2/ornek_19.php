<head>
<meta charset="UTF-8"/>
</head>
<?php
 /* 100 üzerinden aldığı notun 5 üzerinden karşılığını sayı olarak 
 yada yazı olarak gönderen fonksiyon*/
function karne($notu,$bicimi="sayi"){
   $sayi=array(0,1,2,3,4,5);
   $yazi=array("Başarısız","Kalır","Geçer","Orta","İyi","Pekiyi");
   switch ($notu){
      case ($notu>=85 and $notu<=100): 
			$sonuc=($bicimi=="sayi")?$sayi[5]:$yazi[5]; 
			break;
      case ($notu>=70 and $notu<=84): 
			$sonuc=($bicimi=="sayi")?$sayi[4]:$yazi[4]; 
			break;
      case ($notu>=55 and $notu<=69): 
			$sonuc=($bicimi=="sayi")?$sayi[3]:$yazi[3]; 
			break;
      case ($notu>=45 and $notu<=54): 
			$sonuc=($bicimi=="sayi")?$sayi[2]:$yazi[2]; 
			break;
      case ($notu>=25 and $notu<=44): 
			$sonuc=($bicimi=="sayi")?$sayi[1]:$yazi[1]; 
			break;
      case ($notu>=0 and $notu<=24): 
			$sonuc=($bicimi=="sayi")?$sayi[0]:$yazi[0]; 
			break;
      default: $sonuc="Hata: Geçersiz not!";
   }
   return $sonuc;
}
 
echo "Karne notunuz = ".karne(62)." ( ".karne(62,"yazi")." ) ";
echo "<br>";
echo "Karne notunuz = ".karne(-5)." ( ".karne(-5,"yazi")." ) ";
?>



