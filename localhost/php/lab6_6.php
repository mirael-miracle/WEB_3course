<?php  
	print"<h2>Ваше письмо успешно отправлено!</h2>";
	echo "<img src=https://bureau.ru/projects/galochki/verdana.png width=115 height=111><br>";
	$str = "To: ".$_REQUEST["to"]."<br>";
	$to = $_REQUEST["to"];
	if(isset($_REQUEST["to"])){
		print check_pswd($to);
	}
	function check_pswd($to){
		if(filter_var($to, FILTER_VALIDATE_EMAIL) !== false) {
   			echo "To:$to<br>";
}
else if (stristr($to, '.') === FALSE) {
	require_once 'lab6_6.html';
	return "Адрес указан некорректо!<br>"."Вы забыли '.' в указании почты";
	}
else if (stristr($to, '@') === FALSE) {
	require_once 'lab6_6.html';
	return "Адрес указан некорректо!<br>"."Вы забыли '@' в указании почты";
	}
else if (stristr($to, ' ') == true) {
	require_once 'lab6_6.html';
	return "Адрес указан некорректо!<br>"."Вы оставили пробел при вводе!";
	}
else {
	require_once 'lab6_6.html';
	return "Адрес указан неверно!";
	}
	echo "Subject: ".$_REQUEST["subject"]."<br>";
	echo "Message: ".$_REQUEST["message"]."<br>";
}

?>