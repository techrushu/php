<?php
$x=2;
$y=4;
$total=0;
function add()
{
GLOBAL $x,$y,$total;
$total=$x+$y;
echo $total;
}
echo "Addition is ";
add();
?>