<!DOCTYPE html>
<html>
<head>
	<title>LB4 Салютин 4.6</title>
</head>
<body>
<center>
	<?php  
	//Рекурсивная функция факториала
	function fact($n) {
    if ($n <= 0) return 1;
    return $n * fact ($n-1);
}
echo fact(5);
	?>
</center>
</body>
</html>