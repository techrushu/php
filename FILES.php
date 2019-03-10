<?php
error_reporting(0);
echo "<center>"; 
$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
if(empty($name))
{
	echo "Please Choose File";
}
else
{
	echo "Wait File Processing !";
}
echo "</center>";
?>

<center>
<form method="POST" enctype="multipart/form-data">
<h1>Upload your File </h1>
<input type="file" name="file"/>

<input type="submit" name="submit" value="Upload File"/>
</form>
</center>

<table border="2" align="center" width="35%">
<tr>
<th> File Name</th>
<th> File Size</th>
<th> File Format</th>
</tr>
<tr align="center">
<td> <?php echo $name ?></td>
<td> <?php echo $size ?></td>
<td> <?php echo $type ?></td>
</tr>
</table>