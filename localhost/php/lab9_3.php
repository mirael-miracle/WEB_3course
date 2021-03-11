<!DOCTYPE html>
<html>
<head>
	<title>Salyutin LB9</title>
</head>
<body>
<?php 
$today = date("Y-m-d H:i:s"); 
echo $today;
 ?>
 <form method="POST">
 <p><input type="submit" name = "a" value="Що за день сьогоднi?"></p>
 <?php 
 	function getDayUkr(){
    $days = array(
        'Недiля', 'Понедiлок', 'Вiвторок', 'Середа',
        'Четвер', 'П`ятниця', 'Субота'
    );
    return $days[(date('w'))];
}
if (isset($_POST["a"])){
	echo "Сьогоднi - ".getDayUkr();
}
else{
	echo "Щось пiшло не так :(";
}

  ?>
</form>	
</body>
</html>
