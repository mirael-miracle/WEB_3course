<!DOCTYPE html>
<html>
<head>
	<title>ЛБ8 Салютин 8.1</title>
</head>
<body>
	<form method="POST">
		<p>Как вы оцениваете наши услуги?</p>
  			<input type="radio" name="score" value="5" />Отлично <br>
			<input type="radio" name="score" value="4" />Хорошо <br>
			<input type="radio" name="score" value="3" />Нормально <br>
			<input type="radio" name="score" value="2" />Так себе<br>
			<input type="radio" name="score" value="1" />Ужасно<br>
    	<p><input type="submit" name = "a" value="Отправить"></p>
	</form>
	<?php 
		$score = $_POST["score"];
		echo "Вы выбрали $score!<br>Спасибо за Ваш выбор!";
		if($score == 5){
			$f5 = "5.txt";
			$a = file_get_contents($f5);
			$a++;
			$fp = fopen($f5, "w+");
			$fw = fwrite($fp, $a);
			fclose($fp);
		}
		elseif ($score == 4) {
			$f4 = "4.txt";
			$a = file_get_contents($f4);
			$a++;
			$fp = fopen($f4, "w+");
			$fw = fwrite($fp, $a);
			fclose($fp);
		}
		elseif ($score == 3) {
			$f3 = "3.txt";
			$a = file_get_contents($f3);
			$a++;
			$fp = fopen($f3, "w+");
			$fw = fwrite($fp, $a);
			fclose($fp);
		}
		elseif ($score == 2) {
			$f2 = "2.txt";
			$a = file_get_contents($f2);
			$a++;
			$fp = fopen($f2, "w+");
			$fw = fwrite($fp, $a);
			fclose($fp);
		}
		elseif ($score == 1) {
			$f1 = "1.txt";
			$a = file_get_contents($f1);
			$a++;
			$fp = fopen($f1, "w+");
			$fw = fwrite($fp, $a);
			fclose($fp);
		}
		else{
			echo "Не удалось записать данные в файл! :(";
		}
	 ?>
</body>
</html>