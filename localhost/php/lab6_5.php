<?php  
$usr_input = $_REQUEST["password"];
	if(isset($_REQUEST["password"])){
		print check_pswd($usr_input);
	}
	function check_pswd($usr_input){
		$password = "SalutinLB6";
		if($usr_input == $password){
			return "<center><h2>Вы успешно вошли в систему!</h2><br>
			Вот и мои обещанные поздравления :)</center>";
		}
		else {
			require_once 'lab6_5.html';
			echo "<center>Wrong password! Please, try again...</center>";
		}
}
?>