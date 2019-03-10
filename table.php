<html>
<head>
</head>
<body>
<form method="POST">
<center>
<table border="2" width="100%">
<tr>
<th>NAME</th>
<th>PASSWORD</th>
<th>MOBILE NO</th>
<th>EMAIL-ID</th>
</tr>
<tr>
<td><input type="text" name="name"/></td>
<td><input type="password" name="pass"/></td>
<td><input type="text" name="mb"/></td>
<td><input type="text" name="email"/></td>
</tr>
<tr>
<td><input type="submit" name="send" value="Submit"/></td>
<td><input type="reset" name="clear" value="Reset"/></td>
</tr>
</table>
</form>
</center>
</body>
</html>
<center>
<?php
error_reporting(0);
$con=mysql_connect('localhost','root','test123');
mysql_select_db('phplogin');
if($_POST['send'])
{
$name=$_POST['name'];
$password=$_POST['pass'];
$mobile=$_POST['mb'];
$email=$_POST['email'];
$que="insert into register(name,password,mb,email) values('$name','$password','$mobile','$email')";
$var=mysql_query($que);
if($var)
{
echo "inserted";
}
$query="select * from register";
$result=mysql_query($query);
echo "<table border='2' width='100%'>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>"."<td>".$row[3]."</td>";
echo "</tr>";
}
echo "</table>";
}
mysql_close();
?>
</center>