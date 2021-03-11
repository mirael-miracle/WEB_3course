<?php 
session_start();
require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $query = "SELECT * FROM lab11;";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result){
    	$rows = mysqli_num_rows($result); // количество полученных строк
    	echo "<table><tr><th>Name</th><th>Password</th><th>Role</th><th>First name</th><th>Last name</th><th>Patronymic</th><th>Email</th><th>Phone</th><th>City</th><th>Country</th>";
    	for ($i = 0;$i < $rows;++$i){
    		$row = mysqli_fetch_row($result);
    		echo "<tr>";
    		 for ($j = 0 ; $j < 10 ; ++$j) echo "<td>$row[$j]</td>";
    		 echo "</tr>";
    	}
    	echo "</table>";

    mysqli_free_result($result);
	}
	mysqli_close($link);
 ?>