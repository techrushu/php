<?php
error_reporting(0);
session_start();

session_destroy();

if(empty($_SESSION["user"]))
{
	header("Location:SESSION_new1.php");
}

?>