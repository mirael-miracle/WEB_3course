<!DOCTYPE html>
<html>
<head>
	<title>LB5 Салютин 5.2</title>
</head>
<body>
<center>
	<h1>Проверка на корректность введённой почты</h1>
	<i>Введите в форму свой e-mail и нажмите кнопку проверить.</i>
	<form name="email" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
Введите Вашу почту:<br>
<input type="text" name="email">
<input type="submit">
</form>
<?php 
	$usr_input = $_GET["email"];
	if(isset($_GET["email"])){
		print check_pswd($usr_input);
	}
	function check_pswd($usr_input){
		if(filter_var($usr_input, FILTER_VALIDATE_EMAIL) !== false) {
   			return "Адрес указан корректно.<br>";
}
else if (stristr($usr_input, '.') === FALSE) {
	return "Адрес указан некорректо!<br>"."Вы забыли '.' в указании почты";
	}
else if (stristr($usr_input, '@') === FALSE) {
	return "Адрес указан некорректо!<br>"."Вы забыли '@' в указании почты";
	}
else if (stristr($usr_input, ' ') == true) {
	return "Адрес указан некорректо!<br>"."Вы оставили пробел при вводе!";
	}
else {
	return "Адрес указан неверно!";
	}
}

?>
</center>
</body>
</html>