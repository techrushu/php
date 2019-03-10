<?php

$DemoArr = array("11", "12", "13");
print_r($DemoArr) ;
echo "<br/>";

foreach($DemoArr as $v)
{
	$v=$v+2;
	echo $v."<br/>";
}
print_r($DemoArr);
echo "<br/>";

foreach($DemoArr as $k=>&$v)
{
	$v=$v+2;
	echo $v."<br/>";
}
print_r($DemoArr);
echo "<br/>";



?>