<?php
mysql_connect('localhost','root','test123') or die(mysql_error());
mysql_select_db('phpdemodb')or die(mysql_error());

$id =addslashes($_REQUEST['id']);
$image=mysql_query("select * from store where id=$id");
$image=mysql_fetch_assoc($image);
$image=$image['image'];

echo $image;
?>