<html>
<head>
<title>Report of Student</title>
<style>
td {
width:200px;
}
</style>
</head>
<body>
<center><h2>Report of Student</h2></center>
<form>
<table align="center" cellspacing="5" cellpadding="10" border="2">
<tr align="center">
	<th>First Name</th>
	<th>Middle Name</th>
	<th>Last Name</th>
	<th>email</th>
	<th>mobile</th>
	<th>Selected Course</th>
	<th>address</th>
</tr>
<tr align="center">
	<td>  <?php echo $_POST['firstname'];  ?></td>
	<td>  <?php echo $_POST["middlename"];  ?></td>
	<td> <?php echo $_POST["lastname"];  ?></td>
	<td> <?php echo $_POST["email"];  ?></td>
	<td> <?php echo $_POST["mobile"];  ?></td>
	<td> <?php echo $_POST["course"];  ?></td>
	<td> <?php echo $_POST["address"];  ?></td>
</tr>
</table>
</form>
</body>
</html>