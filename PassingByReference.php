<?php
function test(&$var)
{
	$var += 5;
}
$x = 3;
test($x);
echo $x;
?>
