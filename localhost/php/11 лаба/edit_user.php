<?php 
	session_start();
	require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
	$name = htmlentities(mysqli_real_escape_string($link, $_POST["login"]));
	$role = htmlentities(mysqli_real_escape_string($link, $_POST["role"]));
	$query ="UPDATE lab11 SET role='$role' WHERE name='$name'";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	 if($result){
        echo "<span style='color:blue;'>Данные обновлены</span>";
    }
    mysqli_close($link);
 ?>