<!DOCTYPE html>
<html>
<head>
	<title>LB3 Салютин 3.5</title>
</head>
<body>
<center>
	<?php 
	$arr = array("PS5"=>1650,
	"Xbox 360"=>985,
	"Dendi"=>650,
	"Gameboy"=>800,
	"PS4"=>1000, );
	$arr["PS1"] = 1250;
	$arr["Xbox One"] = 1850;
	foreach($arr as $key => $value)
{
  echo "{$key}  {$value}<br>";
}

echo "Вывод количества товара и подсчёт их цены:<br>";
echo "Количество приставок:".count($arr)."<br>";
echo "Сумма всех приставок:".array_sum($arr);
echo "<br>Сортировка по возрастанию:<br>";
asort($arr);
foreach($arr as $key => $value)
{
  echo "{$key}  {$value}<br>";
}

echo "<br>Сортировка по убыванию:<br>";
arsort($arr);
foreach($arr as $key => $value)
{
  echo "{$key}  {$value}<br>";
}

echo "<br>Сортировка по условию ksort:<br>";
ksort($arr);
foreach($arr as $key => $value)
{
  echo "{$key}  {$value}<br>";
}
echo "<br>Сортировка по условию krsort:<br>";
krsort($arr);
foreach($arr as $key => $value)
{
  echo "{$key}  {$value}<br>";
}
	?>
</center>
</body>
</html>