<?php 
session_start();
require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST["login"]));
    $query ="DELETE FROM lab11 WHERE name = '$name';";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	 if($result){
        echo "<span style='color:red;'>Данные $name удалены</span>";
    }
    mysqli_close($link);
 ?>