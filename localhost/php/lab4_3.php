<!DOCTYPE html>
<html>
<head>
	<title>LB4 Салютин 4.3</title>
</head>
<body>
<center>
<form name="a" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
Введите пароль:<br>
<input type="text" name="a">
<input type="submit">
</form>
<?php 
	$usr_input = $_GET["a"];
	if(isset($_GET["a"])){
		check_pswd($usr_input);
	}
	function check_pswd($usr_input){
		$pswd = "qwerty";
		if($usr_input == $pswd)
			echo "Пароль введён верно";
		else
			echo "Пароль введён неверно!";
	}
 ?>
</center>
</body>
</html>