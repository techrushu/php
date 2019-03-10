<center>

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
	var $balance;

	function withdraw($amt)
	{
		$this->balance= $this->balance -$amt;
		echo $this->balance."<br>";
	}

}

class account3 extends account2
{
	var $balance;

	function withdraw($amt)
	{
		$this->balance= $this->balance -$amt;
		echo $this->balance."<br>";
	}

}

$obj = new account2();

$obj->deposit(100);
$obj->withdraw(50);

$obj2 = new account3();

$obj2->deposit(1000);
$obj2->withdraw(500);
?>
</center>




