<!DOCTYPE html>
<html>
<head>
	<title>LB3 Салютин 3.3</title>
</head>
<body>
<center>
<link rel='stylesheet' href='style.css'>
	<?php 
	//стоимость товара
	$price_item = 100;
	//процент инфляции текущего года
	$percent_curr_year = 0.1;
	// увеличение процента по прогнозам
	$percent_per_year = $percent_curr_year + 0.035;
	//уменьшение
	$min_per_year = $percent_curr_year - 0.035;
	echo "<h2>Прогнозируемая цена на 2020 и последующие годы</h2>";
	
	//текущий год - 2020
	$year = 2020;
	$price_new_item = $price_item + $price_item * $percent_curr_year;
	echo "На $year год цена составляет $price_new_item руб.";
	
	echo "<table border=2>";
	echo "<tr><td>Год</td><td>Цена</td></tr>";
	
	for($i = 0;$i<10;$i++){
		$year++;
		if($price_new_item>=170)
			$price_new_item -= $min_per_year;
			
			
		$price_new_item += $price_new_item * $percent_per_year;
		echo"<tr><td>",$year, "</td><td>", round($price_new_item), "</td></tr>";
		
	}
	echo "</table>";

	?>
	
</center>
</body>
</html>

