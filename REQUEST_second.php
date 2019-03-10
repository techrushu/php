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
<center><h1>Report of Student</h2></center>
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
	<td>  <?php echo $_REQUEST['firstname'];  ?></td>
	<td>  <?php echo $_REQUEST["middlename"];  ?></td>
	<td> <?php echo $_REQUEST["lastname"];  ?></td>
	<td> <?php echo $_REQUEST["email"];  ?></td>
	<td> <?php echo $_REQUEST["mobile"];  ?></td>
	<td> <?php echo $_REQUEST["course"];  ?></td>
	<td> <?php echo $_REQUEST["address"];  ?></td>
</tr>

</table>
</form>
</body>
</html>