<?php 

class account
{
	var $accno;
	var $balance;
	
	/*
	function __construct()
	{
		$this->balance=15;
	}
	*/
	/*
	function account()
	{
		$this->balance=20;
	}
	*/
	
	function account($a,$b)
	{
		$this->balance=$a+$b;
	}
	
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

$obj = new account(2,4);
$obj->deposit(100);

?>


