<!DOCTYPE html>
<html>
<head>
	<title>LB3 Салютин 3.1</title>
</head>
<body>
<center>
	<?php  
	//стоимость товара
	$price_item = 100;
	//процент инфляции текущего года
	$percent_curr_year = 0.1;
	// увеличение процента по прогнозам
	$percent_per_year = $percent_curr_year + 0.035;
	
	echo "<h2>Прогнозируемая цена на 2020 и последующие годы</h2>";
	
	//текущий год - 2020
	$year = 2020;
	$price_new_item = $price_item + $price_item * $percent_curr_year;
	echo "На $year год цена составляет $price_new_item руб.";

	while ($price_new_item < 150) {
		$year++;
		if($price_new_item>=150)
			break;
		$price_new_item += $price_new_item * $percent_per_year;
		//вывод информации
		echo "<br>В $year цена будет $price_new_item руб.";
	}


	?>
</center>
</body>
</html>