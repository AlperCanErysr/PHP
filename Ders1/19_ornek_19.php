<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>

 <?php
	class Araba {
		function Araba() {
			$this->model = "Opel";
		}
	}

	// Önce obje oluşturulur
	$Nesne = new Araba();

	// Obje özellikleri gösterilir.
	echo $Nesne->model;
?> 

</body>
</html>