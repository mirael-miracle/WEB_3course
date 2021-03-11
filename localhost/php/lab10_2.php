<?php 
	require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $last_name = htmlentities(mysqli_real_escape_string($link, $_POST["last_name"]));
    $query = "SELECT * FROM lab10 WHERE last_name = '$last_name';";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result){
    	$rows = mysqli_num_rows($result); // количество полученных строк
    	echo "<table><tr><th>ID</th><th>First name</th><th>Last name</th><th>Patronymic</th>";
    	for ($i = 0;$i < $rows;++$i){
    		$row = mysqli_fetch_row($result);
    		echo "<tr>";
    		 for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
    		 echo "</tr>";
    	}
    	echo "</table>";

    mysqli_free_result($result);
	}
	mysqli_close($link);
 ?>