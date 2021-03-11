<?php  

class Articles
{//Класс статей

	var $heading = "Город смерти";
	var $author = "Салютин Максим";
	var $description = "Город, наполненный мучениями вновь проснулся и теперь никого не спасти...";

	function articles(){
		$this->heading = $_POST["heading"];
		$this->author = $_POST["author"];
		$this->description = $_POST["description"];
	}

	function show_article()
	{
		//использование get_class
		echo "Вывод из класса: ".get_class($heading);
		$art = $this->heading;
		$author = $this->author;
		$description = $this->description;
		echo "<br>Heading: $art<br>";
		echo "Author: $author<br>";
		echo "Description: $description<br>";
	}
	function get_default_values(){

		//get_class_vars выводит значения по умолчанию
		$class_vars = get_class_vars(get_class($this));
		foreach ($class_vars as $name => $value){
		echo "<br>$name : $value";
		}

	}
}
?>
<?php 
$art = new Articles;
$art->show_article();
 ?>
 
 <?php
 class Personality
{//Класс статей

	var $f_name = "Вася";
	var $l_name = "Пупкин";
	var $email = "pupkinv@gmail.com";

	function personality(){
		$this->f_name = $_POST["f_name"];
		$this->l_name = $_POST["l_name"];
		$this->email  = $_POST["email"];
	}

	function show_personality()
	{
		//использование get_class
		echo "<br>Вывод из класса: ".get_class($heading);
		$f_name= $this->f_name;
		$l_name = $this->l_name;
		$email = $this->email;
		echo "<br>First name: $f_name<br>";
		echo "Author: $l_name<br>";
		echo "Description: $email<br>";
	}
	function get_default_values(){

		//get_class_vars выводит значения по умолчанию
		$class_vars = get_class_vars(get_class($this));
		foreach ($class_vars as $name => $value){
		echo "<br>$name : $value";
		}

	}
}
 ?>
 <?php
$man = new Personality();
$man->show_personality();
 ?>