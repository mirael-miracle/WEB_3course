<!DOCTYPE html>
<html>
<head>
	<title>LB4 Салютин 4.5</title>
</head>
<body>
<center>
	<?php
	function fact($num){
		$current_num = $num;
		$factorial = 1;
		if ($num == 0)
			return 1;
		while ($num > 1) {
			$factorial *= $num;
			$num -=1;
		}
	return "Факториал числа $current_num = $factorial";
}
print fact(5);
	?>
</center>
</body>
</html>