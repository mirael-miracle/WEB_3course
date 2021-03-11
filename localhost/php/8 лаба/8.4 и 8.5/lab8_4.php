<?php 

	$f5 = fopen("5.txt", 'w');
	$a = 0;
	$test = fwrite($f5, $a);
	$f4 = fopen("4.txt", 'w');
	$test = fwrite($f4, $a);
	$f3 = fopen("3.txt", 'w');
	$test = fwrite($f3, $a);
	$f2 = fopen("2.txt", 'w');
	$test = fwrite($f2, $a);
	$f1 = fopen("1.txt", 'w');
	$test = fwrite($f1, $a);
	echo "Файлы созданы!";

 ?>