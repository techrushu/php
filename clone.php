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
$obj->deposit(100);

//$obj1 = $obj;

$obj1= clone $obj;

$obj1->withdraw(20);
?>