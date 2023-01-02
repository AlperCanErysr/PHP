<head>
<meta charset="UTF-8"/>
</head>
<?php
   /*Aldığı satır ve sütun sayısına göre her sütunun genişliği 80px 
   olacak şekilde bir tablo oluşturan fonksiyon*/
	function tablo($satir,$sutun){
	   echo "<table border=\"1\" width=\"",$sutun*80,"\">";
	   for($i=1;$i<=$satir;$i++){
		  echo "<tr>";
		  for($j=1;$j<=$sutun;$j++)
			 echo "<td>&nbsp;</td>";
		  echo "</tr>";
	   }
	   echo "</table>";
	}
	//ilk tablo oluşturuluyor 
	tablo(5,8);
	echo "<br>";
	//ikinci tablo oluşturuluyor
	$row=9;
	$col=12;
	tablo($row,$col);
?>



