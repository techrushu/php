<?php 

class account
{
	var $accno;
	var $balance;
	
	
	function __construct()
	{
		$this->balance=20;
	}
	function __destruct()
	{
		echo "Object Deleted";
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

$obj = new account();
$obj->deposit(100);

//unset($obj);

//$obj->withdraw(10);
?>