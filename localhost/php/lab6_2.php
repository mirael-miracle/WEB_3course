<?php 
	print("Данные о ".$_REQUEST["first_name"]."<br>");
	$str = "Имя: ".$_REQUEST["first_name"]."<br>";
	$str.="Фамилия: ".$_REQUEST["last_name"]."<br>"; 
	$str.="Отчество: ".$_REQUEST["patronymic"]."<br>"; 
	$str.="Адресс: ".$_REQUEST["adress"]."<br>"; 
	$str.="Почта: ".$_REQUEST["email"]."<br>"; 
	$str.="Пароль: ".$_REQUEST["password"]."<br>"; 
	echo $str;
 ?>