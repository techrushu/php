<?php
$department=array("civil","mechanical","electronics","computer"=>array("1"=>"network","2"=>"software","3"=>"hardware"));

echo "branches of college is ";
echo"<br/>";
for ($i=1;$i<=3;$i++)
{
	echo $department["computer"]["$i"];
	echo"<br/>";
}
for($i=0;$i<=2;$i++)
{
echo "all departments of college are " . $department[$i];
echo "<br/>";
}
?>