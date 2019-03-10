<html>
<head>
<title>Question Box</title>
<style>
table{
background-image:url(bg2.jpg);
}
td, th{
font-family:Times New Roman;
font-size:24px;
color:white;
}
table input{
width:300px;
}
p input{
width:100px;
color:blue;
font-size:18px;
}
#textarea{
height:100px;
width:300px;
}
</style>
</head>
<body>
<form method="POST">
<br/>
<center>
<h1> Its a Question time....?</h1>
</center>
<br/><br/>
<table align="center" cellspacing="14" cellpadding="14">
<tr>
	<td>First Name</td>
	<td>  <input type="text" name="firstname"></td>
</tr>
<tr>
	<td>Middle Name</td>
	<td>  <input type="text" name="middlename"></td>
</tr>
<tr>
	<td>Last Name</td>
	<td>  <input type="text" name="lastname"></td>
</tr>
<tr>
	<td>Email Id</td>
	<td>  <input type="text" name="email" ></td>
</tr>
<tr>
	<td>Mobile No.</td>
	<td>  <input type="text" name="mobile"></td>
</tr>
<tr>
	<td>Select Event</td>
	<td>  
		<select name="event">
			<option>select</option>
			<option>a</option>
			<option>b</option>
			<option>c</option>
			<option>d</option>
			<option>b</option>
			<option>b</option>
			<option>e</option>
			<option>f</option>
			<option>g</option>	
		</select>
	</td>
</tr>
<tr>
	<td>Write Your Query..</td>
	<td>  <input type="textarea" name="query" placeholder="Write Your Query... "></td>
</tr>
</table>
<br/><br/>
<center><p>
<input type="submit" name="send" value="INSERT">
<input type="submit" name="delete" value="DELETE">
<input type="submit" name="update" value="UPDATE">
<input type="submit" name="select" value="SELECT">
<input type="reset" name="clear" value="RESET">
</p>
</center>
</form>
</body>
</html>

<?php
error_reporting(0);
$conn=mysql_connect('localhost','root','test123');
mysql_select_db('register');

$fname=$_POST['firstname'];
$mname=$_POST['middlename'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$event=$_POST['event'];
$query=$_POST['query'];

//insert query...
if($_POST["send"])
{
$con="insert into queryform(firstName,middleName,lastName,email,mobile,event,query) values('$fname','$mname','$lname','$email','$mobile','$event','$query')";

$var=mysql_query($con);
if($var>0)
{
	echo "<h2><center>Record Submit";
}
else
{
	echo "<h2><center>Fill form Correctly";
}
}

//delete query..
if($_POST["delete"])
{
$query="delete from queryform where firstname='$fname' and email='$email' ";
$result=mysql_query($query);
if($result)
{
	echo "<h2><center>Record Deleted</center></h2>";
}
else
{
	echo "<h2><center>Delete form Correctly</center></h2>";
}
}

//update query
if($_POST["update"])
{
$queryup="update queryform set event='$event' where email='$email' ";
$resultup=mysql_query($queryup);
if($resultup)
{
	echo "<h2><center>Record Updated</center></h2>";
}
else
{
	echo "<h2><center>Updated form Correctly</center></h2>";
}
}

//select query..

if($_POST["select"])
{
$que="select * from queryform";
$res=mysql_query($que);

echo "<table border='2' width='100%'>";

echo "<tr>";
echo "<th>First Name</th>"."<th>Middle Name</th>"."<th>Last Name</th>"."<th>Email</th>"."<th>Mobile</th>"."<th>Event</th>"."<th>Query</th>";
echo "</tr>";

while($row=mysql_fetch_array($res))
{
echo "<tr>";

echo "<td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>"."<td>".$row[3]."</td>"."<td>".$row[4]."</td>"."<td>".$row[5]."</td>"."<td>".$row[6]."</td>";

echo "</tr>";
}
echo "</table>";
}

mysql_close($conn);
?>