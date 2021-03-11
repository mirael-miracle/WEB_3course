<!DOCTYPE html>
<html>
<head>
	<title>ЛБ8 Салютин 8.2</title>
</head>
<body>
<center>
	<h2>Результаты голосования</h2>
	<?php 
	$f5 = "5.txt";
	$a5 = file_get_contents($f5);
		echo "5 - $a5 чел.<br>";
	$f4 = "4.txt";
	$a4 = file_get_contents($f4);
		echo "4 - $a4 чел.<br>";
	$f3 = "3.txt";
	$a3 = file_get_contents($f3);
		echo "3 - $a3 чел.<br>";
	$f2 = "2.txt";
	$a2 = file_get_contents($f2);
		echo "2 - $a2 чел.<br>";
	$f1 = "1.txt";
	$a1 = file_get_contents($f1);
		echo "1 - $a1 чел.";
	 ?>
</center>
</body>
</html>