<?php 

class account
{
	var $accno;
	var $balance;
	
	function deposit($amt)
	{
		$this->balance =$this->balance + $amt;
		echo $this->balance."<br>";
	}
	
	function withdraw($amt)
	{
		$this->balance= $this->balance -$amt;
		echo $this->balance."<br>";
	}
}

$obj = new account();

$obj->deposit(500);
$obj->withdraw(100);

$obj1 = new account();
$obj1->deposit(200);
$obj1->withdraw(100);
?>


