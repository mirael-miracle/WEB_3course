<?php 
	require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $id = htmlentities(mysqli_real_escape_string($link, $_POST["id"]));
    $first_name = htmlentities(mysqli_real_escape_string($link, $_POST["first_name"]));
    $last_name = htmlentities(mysqli_real_escape_string($link, $_POST["last_name"]));
    $patronymic = htmlentities(mysqli_real_escape_string($link, $_POST["patronymic"]));
    $email= htmlentities(mysqli_real_escape_string($link, $_POST["email"]));
    $phone = htmlentities(mysqli_real_escape_string($link, $_POST["phone"]));
    $city = htmlentities(mysqli_real_escape_string($link, $_POST["city"]));
    $country = htmlentities(mysqli_real_escape_string($link, $_POST["country"]));
     $query ="UPDATE lab10 SET first_name='$first_name', last_name='$last_name',patronymic='$patronymic',email='$email',phone='$phone',city='$city',country='$country' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
 
    if($result){
        echo "<span style='color:blue;'>Данные обновлены</span>";
    }
    mysqli_close($link);
?>