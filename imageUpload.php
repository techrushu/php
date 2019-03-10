<html>
<head><title>Upload an Image</title></head>
<body>
<form action="imageUpload.php" method="POST" enctype="multipart/form-data">

File : <input type="file" name="image"/>
<input type="submit" name="send" value="Upload "/>
</form> 


<?php 
mysql_connect('localhost','root','test123') or die(mysql_error());
mysql_select_db('phpdemodb')or die(mysql_error());

//file properties

$file=$_FILES['image']['tmp_name'];

if(!isset($file))
{
	echo "Please select an image.";
}
else
{
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name=addslashes($_FILES['image']['name']);
	$image_size=getimagesize($_FILES['image']['tmp_name']);
	

	if($image_size==FALSE)
		echo "That's not an image";
	else
	{
		if(!$insert= mysql_query("insert into store values('','$image_name','$image')"))
			echo "Problem uploading image.";
		else
		{
			$lastid = mysql_insert_id();
			echo "Image Uploading.<p/>Your Image<p/><img src=geti.php?id=$lastid>";
		}
	}
} 

?>

</body>
</html>