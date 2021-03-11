<!DOCTYPE html>
<html>
<head>
	<title>LB5 Салютин 5.1</title>
</head>
<body>
<center>
	<h2 align="center">Магазин продуктов</h2>
	<?php  
	$price_food = array("Мясо" => 140.00,
	"Рыба" => 181.00,
	"Масло" => 134.00, );
	$dollar = 28.50;
	$euro = 31.00;
	foreach ($price_food as $key => $value) {
		//Получаем цену в долларах на товар
		$value_dollar = $value/$dollar;
		$value_euro = $value/$euro;
		echo $key, " - ", $value," грн = ", round($value_dollar,2), " $ = ", round($value_euro, 2), " €<br>";
	}
	?>

</center>
</body>
</html>