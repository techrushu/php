<?php 

class account
{
	var $balance;
	
	function deposit($amt)
	{
		$this->balance =$this->balance + $amt;
		echo $this->balance."<br>";
	}
}

class account2 extends account
{
	var $balance=50;
		
	function withdraw($amt)
	{
		$this->balance= $this->balance - $amt;
		echo $this->balance."<br>";
	}
}

$obj = new account2();

$obj->withdraw(25);
$obj->deposit(50);
?>


