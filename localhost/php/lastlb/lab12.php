<?php 
	require_once("D:\openserver\OSPanel\domains\localhost\lastlb\smarty-3.1.35\libs\Smarty.class.php");
	$smarty = new Smarty;
	$smarty->template_dir = 'views';
	$smarty->compile_dir = 'tmp'; 

	$array = array('Max' =>10,
	'Jenya'=>11,
	'Daniel'=>12);

	$smarty->assign('people',$array);

	$a = "Hello!";
	$smarty->assign('shock',$a);
	$b->assing("index.tpl")//считываем шаблон

	require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $query = "SELECT * FROM users";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    
    if($result){
    	$rows = mysqli_num_rows($result); // количество полученных строк
    	for ($i = 0;$i < $rows;++$i){
    		$curr .= $b;
    		$curr = assign('first_name',$first_name);
    		$curr = assign('last_name',$last_name);
    		$curr = assign('email',$email);
    		$curr = assign('phone',$phone);
    		$curr = assign('city',$city);
    	}
    	echo $curr;
	}
	mysqli_close($link);

	$smarty->display('index.tpl');
 ?>