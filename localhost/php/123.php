<?php 
function beRef(&$dollars){
	$dollars++;
}
$dollars = 300;
$euros = 100;
beRef($euros);
echo "$dollars and $euros";
 ?>
