<!DOCTYPE html>
<html>
<head>
	<title>LB3 Салютин 3.4</title>
</head>
<body>
<center>
	<?php 
	$arr = array(0 => "PS5",
	1 => "XBox1",
	2 => "PS4",
	3 => "Dendi",
	4 => "Gameboy", );
	$arr[5] = "PS1";
	$arr[6] = "Xbox 360";
	echo "Вывод кол-ва элементов в массиве:";
	
	var_dump(count($arr));

	echo "<br>Вывод элементов массива:<br/>";
	for ($i=0; $i <count($arr); $i++) { 
		echo $arr[$i]."<br/>";
	}
	echo "<br>Исходный массив выше.<br/>";
	echo "</br>Отсортированный массив:</br>";
	sort($arr);
	for ($i=0; $i <count($arr); $i++) { 
		echo $arr[$i]."<br/>";
	}
	 ?>
</center>
</body>
</html>