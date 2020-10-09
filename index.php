<!DOCTYPE html>
<html>
<head>
	<title> Belajar OOP dengan PHP</title>
</head>
<body>
	<?php
		include_once "Corolla.php";
		include_once "Mesin.php";

		$msn = new Mesin("Non Diesel","1500cc","Pertamax","1234567ABC");
		$mbl = new Corolla($msn);
		echo $mbl->infoCorolla();
		$mesin = $mbl->getMesin();
		echo "<br>";

		echo "Spesifikasi Mesin";
	?>
	<table border="1">
		<tr>
			<th>Tipe Mesin</th>
			<th>Isi Silinder</th>
			<th>BBM</th>
			<th>No Mesin</th>
		</tr>
		<tr>
			<td><?php echo $mesin->getTipeMesin();?></td>
			<td><?php echo $mesin->getIsiSilinderMesin();?></td>
			<td><?php echo $mesin->getBbmMesin();?></td>
			<td><?php echo $mesin->getNoMesin();?></td>
		</tr>
	</table>
</body>
</html>