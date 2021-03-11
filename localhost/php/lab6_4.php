<!DOCTYPE html>
<html>
<head>
	<title>LB6 Салютин 6.4</title>
</head>
<body>
<center>
	<h2>Авторизация</h2>
	<form name="password" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
Введите ваш пароль:<br>
<input type="text" name="password">
<input type="submit">
</form>
<?php 
	$usr_input = $_GET["password"];
	if(isset($_GET["password"])){
		print check_pswd($usr_input);
	}
	function check_pswd($usr_input){
		$password = "SalutinLB6";
		if($usr_input == $password){
			return "Вы успешно вошли в систему!";
		}
		else {
			return "Неверный пароль!";
		}
}

?>

</center>
</body>
</html>