<html>
<head>
<title>Registration Form</title>
</head>
<body>
<form method="POST" action="POST_second.php">
<br/>
<center>
<h1>Registration of Student's Application Form</h1>
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
	<td>Select Course</td>
	<td>  
		<select name="course">
			<option>C</option>
			<option>C++</option>
			<option>Java</option>
			<option>Advance Java</option>
			<option>C#</option>
			<option>.Net</option>
			<option>ASP</option>
			<option>PHP</option>
			<option>Web Designing</option>
		</select>
	</td>
</tr>
<tr>
	<td>Address</td>
	<td>  <input type="textarea" name="address" placeholder="Write Current Address"></td>
</tr>
</table>
<br/><br/>
<center><p>
<input type="submit" name="send" value="SUBMIT">
<input type="reset" name="clear" value="RESET">
</p>
</center>
</form>
</body>
</html>
