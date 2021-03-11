<?php 
require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $login = htmlentities(mysqli_real_escape_string($link, $_POST["login"]));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST["password"]));
   	
    $query = "SELECT password FROM lab11 WHERE name='$login'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
  	$data = mysqli_fetch_assoc($result);

  	$query2 = "SELECT role FROM lab11 WHERE password='$password'";
  	$result2 = mysqli_query($link, $query2) or die("Ошибка ".mysqli_error($link));
  	$data2 = mysqli_fetch_assoc($result2);
    // Сравниваем пароли
    if($data['password'] === $password and $data2['role'] == 0){
    	require_once("lab11_4.html");
    	session_start();
    	$test = "тут будет переменная сессии";
    	$_SESSION['test']=$test;
    	print_r($_SESSION);
    	echo session_id();
    }
    elseif ($data['password'] === $password and $data2['role'] == 1) {
        session_start();
        echo "Вы вошли под правами администратора!<br>";
        echo "<form action='show_all_users.php'>";
    	echo "<input type=submit name='show' value='Show all users'><br>";
        echo "</form>";
        echo "<form action='edit_user.html'>";
        echo "<input type=submit name='show' value='Edit user'><br>";
        echo "</form>";
        echo "<form action='delete_user.html'>";
        echo "<input type=submit value='Delete user'><br>";
        echo "</form>";
        echo "<form action='lab11_5.php'>";
        echo "<input type=submit value='Destroy session'><br>";
        echo "</form>";
    }
    else{
    	require_once("lab11_3.html");
    }
 ?>