<!DOCTYPE html>
<html lang="es">

<body>
	<?php
		$aleatorio=rand(1,10);
		switch (true){
			case ($aleatorio < 5):
				echo "<h1>ESTAS SUSPENSO. NOTA: $aleatorio.</h1>";
			break;
			case ($aleatorio>=5 && $aleatorio<6):
				echo "<h1>ESTAS APROBADO. SUFICIENTE. NOTA: $aleatorio.</h1>";
			break;
			case ($aleatorio>=6 && $aleatorio<7):
				echo "<h1>ESTAS APROBADO. BIEN. NOTA: $aleatorio.</h1>";
			break;
			case ($aleatorio>=7 && $aleatorio<9):
				echo "<h1>ESTAS APROBADO. NOTABLE. NOTA: $aleatorio.</h1>";
			break;
			case ($aleatorio>=9 && $aleatorio<=10):
				echo "<h1>ESTAS APROBADO. SOBRESALIENTE. NOTA: $aleatorio.</h1>";
			break;
		}
	?>
</body>

<footer>
<br><h4>@Juan José Gil Luna</h4></br>
</footer>

</html>
