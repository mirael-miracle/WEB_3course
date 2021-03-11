<?php 
class Registration
{//Класс статей

	var $name;
	var $full_name;
	var $year_born;

	function registration(){
		$this->name = $_POST["name"];
		$this->full_name = $_POST["full_name"];
		$this->year_born = $_POST["year_born"];
	}

	function show_person()
	{
		$name = $this->name;
		$fn = $this->full_name;
		$yb = $this->year_born;
		echo "<br>Имя: $name<br>";
		echo "Полное имя: $fn<br>";
		echo "Год рождения: $yb<br>";
	}
}

$usr = new Registration();
$usr->show_person();
 ?>