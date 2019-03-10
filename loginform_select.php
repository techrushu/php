<html>
<head>
<title>Welcome to login</title>
<style>
body{
background-image:url("06.jpg");
}
form{
background-color:white;
width:350px;
height:260px;
text-align:center;
padding:3px;
box-shadow: 0 0 200px;
position:absolute;
left:40%;
right:45%;
top:30%;

}
h1{
color:#66cccc;
text-shadow:1px 1px blue;
}

input[type=text], input[type=password] {
margin: 5px;
padding: 0 10px;
width: 300px;
height: 34px;
color: #404040;
background: white;
border: 1px solid;
border-color: #c4c4c4 #d1d1d1 #d4d4d4;
border-radius: 2px;
outline: 5px solid #eff4f7;
-moz-outline-radius: 3px;
-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}

input[type=submit] {
padding: 0 20px;
height: 30px;
font-size: 18px;
font-weight: bold;
color: #527881;
text-shadow: 0 1px #e3f1f1;
background: #cde5ef;
border: 1px solid;
border-color: #b4ccce #b3c0c8 #9eb9c2;
border-radius: 16px;
outline: 0;
box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
}
h3{
color:blue;
margin-top:38%;
}
</style>
</head>
<body>

<form method="POST">
<h1>Welcome to Login!</h1>
<input type="text" name="user" placeholder="Username"><br/>
<br/>
<input type="password" name="pass" placeholder="Password"><br/>
<br>
<div class="submit">
<input type="submit" name="submit" value="Login">
</div>
</form>

</body>
</html>

<?php
error_reporting(0);
$conn=mysql_connect('localhost','root','test123');
mysql_select_db('login');
$usern=$_POST['user'];
$passw=$_POST['pass'];
$query="select * from loginform where username='$usern' and password='$passw'";
$result=mysql_query($query);
$count= mysql_num_rows($result);
if($count==1)
{
	echo "<center><h3>"."You have successfully login"."</h3></center>";
	//header('Location:default.php'); //Redirecting To Other Page
}
else
{
	echo "<center><h3>"."Write correct username and password to login"."</h3></center>";
}
mysql_close($conn);
?>