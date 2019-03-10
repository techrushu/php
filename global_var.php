<?php
$x=2;
$y=4;
function addition()
{
	$v= $_GLOBALS['x'] + $_GLOBALS['y']; 
	echo $v;
}
addition();

?>