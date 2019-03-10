
<?php 
error_reporting(0);
session_start();
if($_SESSION["user"])
{
echo "<center>";
echo "Welcome"." ".$_SESSION["user"]."<a href='logout_SESSION.php'>Logout</a>";
echo "</center>";
}
else
{
?>




<html>
<form method="POST">
<center>
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
</center>
</form>
</html>




<?php
 error_reporting(0);
//session_start();

$_SESSION["user"]= $_POST['username'];
$_SESSION["pass"]= $_POST['password'];
 }

?>