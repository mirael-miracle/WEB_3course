<!DOCTYPE html>
<html>
<head>
	<title>ЛБ8 Салютин 8.3</title>
</head>
<body>
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
<hr>
<?php
 $arr = array (
  '5:'=>$a5,
  '4:'=>$a4,
  '3:'=>$a3,
  '2:'=>$a2,
  '1:'=>$a1
 ); 
 require_once('SimplePlot.php'); //Подключить скрипт
 $plot = new SimplePlot($arr); //Создать диаграмму
 $plot->show(); //И показать её
?>
<hr>
<?php 
$arr = array($a5,$a4,$a3,$a2,$a1);
$max = max($arr);
echo "Максимум = $max";
 ?>
</body>
</html>