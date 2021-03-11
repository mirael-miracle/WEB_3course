<!DOCTYPE html>
<html>
<head>
	<title>LB4 Салютин 4.1</title>
</head>
<body>
<center>
	<?php 
	function zad1($product1,$price1,$product2,$price2,$product3,$price3){
		if($price1 >= $price2){
		$maxprice = $price1;
		$maxitem = $product1;
		}
		elseif($price2 >= $price3) {
			$maxprice = $price2;
			$maxitem = $product2;
		}
		elseif ($price1>=$price3) {
			$maxprice = $price1;
			$maxitem = $product1;
		}
		else {
			$maxprice = $price3;
			$maxitem = $product3;
		}
 echo "<br>Самый дорогой товар - <strong>$maxitem</strong>,его цена - $maxprice"." грн.<br>";
	}
	zad1("Чайник",1000,"Холодильник",1500,"Утюг", 2500);
	zad1("PS1",1892,"PS5",4985,"XBox One", 1100);
	?>
</center>
</body>
</html>