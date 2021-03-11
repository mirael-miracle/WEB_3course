<!DOCTYPE html>
<html>
<head>
	<title>LB6 Salutin 6.3</title>
</head>
<body>
<h2>Registration</h2>
<form action="lab6_3.php" method="POST">
Hey,bro, please, input info :) !<br>
First name:<br><input type="text" name="first_name"><br>
Last name:<br><input type="text" name="last_name"><br>
Patronymic:<br><input type = "text" name="patronymic"><br>
Adress:<br><input type= "text" name="adress"><br>
E-mail:<br><input type = "text" name="email"><br>
Password:<br><input type = "text" name="password"><br>
<input type=submit name="submit" value="Send"><input type=reset value="Cancel">
</form>
<?php 
	if(isset($_REQUEST["submit"])){
		print("Данные о ".$_REQUEST["first_name"]."<br>");
	$str = "Имя: ".$_REQUEST["first_name"]."<br>";
	$str.="Фамилия: ".$_REQUEST["last_name"]."<br>"; 
	$str.="Отчество: ".$_REQUEST["patronymic"]."<br>"; 
	$str.="Адресс: ".$_REQUEST["adress"]."<br>"; 
	$str.="Почта: ".$_REQUEST["email"]."<br>"; 
	$str.="Пароль: ".$_REQUEST["password"]."<br>"; 
	echo $str;
	}
	
 ?>
</body>
</html>
