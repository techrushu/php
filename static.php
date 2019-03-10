<?php
function vstatic()
{
STATIC $x = 0;
echo $x."<br>";
$x++;
}
vstatic();
vstatic();
vstatic();
?>