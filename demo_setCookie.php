<?php 
error_reporting(0);
$userName = $_POST['username'];
$password = $_POST['password'];
setcookie('TestCookie',$userName);
setcookie('Test',$password);
?>


<html>
<center>
<form method="POST">

<h2>Please Fill Form</h2> 
<table align="center">
<tr>
<td>
Username : <input type="text" name="username"/>
</td>
</tr>

<tr>
<td>
Password : <input type="password" name="password" />
</td>
</tr>
     
<tr>
<td>
<input type="submit" name="submit" value="submit"/>
</td>
</tr>
</table>
</form>

<a href="demo_readCookie.php">Read Cookie</a>
<a href="demo_deleteCookie.php">Delete Cookie</a>
</center>
</html>
