<!DOCTYPE html>
<html>
<head>
	<title>LB4 Салютин 4.2</title>
</head>
<body>
<center>
	<?php 
	$arr = array("PS5"=>1650,
	"Xbox 360"=>985,
	"Dendi"=>650,
	"Gameboy"=>800,
	"PS4"=>1000, );
	function zad2($arr){
	$sum_arr =array_sum($arr);
	$count_arr = count($arr);
	$middle_price = $sum_arr/$count_arr;
	echo "Средняя цена товаров - $middle_price грн.<br>";
	$closer_val = $middle_price - $arr[0];
	foreach ($arr as $key => $value) {
		$min_price = 0;
		if($middle_price - $value < $closer_val)
			$closer_val = $value;
	}
	echo "<br>Ближайшая цена к среднему: $closer_val грн, товар - $key.";
}
	zad2($arr);
	?>

</center>
</body>
</html>