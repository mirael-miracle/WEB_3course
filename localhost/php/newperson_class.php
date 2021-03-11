<?php 
require_once("person_class.php");
class NewPerson extends Registration
{
	var $martial;
	var $place_work;

	function newperson(){
		
		$this->martial = $_POST["martial"];
		$this->place_work= $_POST["place_work"];
	}
	
	function show_new_person(){
		if(isset($_POST['martial']))
		{
    	$martial = $_POST['martial'];
		}
		$m = $this->martial;
		$pw = $this->place_work;
		echo "Положение: $martial <br>";
		echo "Место работы: $pw";
	}
}
 ?>
 <?php 
$new_usr = new NewPerson();
$new_usr->show_new_person(); 
?>