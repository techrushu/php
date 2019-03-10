<!Doctype html>
<html lang="en">
<head>
<title>Form</title>
<meta charset="UTF-8">
<style>
td
{
	font-size:25px;
	color:royalblue;
	font-family:cursive;
}
table
{
	border:2px solid white;
	background-color:lightblue;
	margin:30px 0px 0px 0px;
}
input[type=text],input[type=password],input[type=email]
{
	border-radius:20px;
	width:400px;
	height:50px;
	border-top-color:yellow;
	border-bottom-color:green;
	
}
.button
{
	background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
p
{
	color:red;
	
}
</style>
</head>
<body bgcolor="">
	<form action="" method="POST" enctype="multipart/form-data">
		<center>
		<table cellspacing="8" cellpadding="5">
			<tr>
				<td>
					Full name
				</td>
				<td>
					<input type="text" placeholder="Enter your full name" name="f_name" size="30"/> 
				</td>
				<td>
					<?php
						$name=$_POST['f_name'];
						if(empty($name))
						{
							echo"<p>";
							echo "Field should not be empty ";
							echo"</p>";
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					Email-Id
				</td>
				<td>
					<input type="email" placeholder="Enter your valid email" name="email" size="30"/>
				</td>
			</tr>
			<tr>
				<td>
					Mobile no
				</td>
				<td>
					<input type="text" placeholder="enter your mobile number" name="mob_no" size="30"/>				
				</td>
			</tr>
			
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="pass1" placeholder="password" size="30"/>
				</td>
			</tr>
			<tr>
				<td>
					Confirm Password
				</td>
				<td>
					<input type="password" name="pass2" placeholder="confirm password" size="30"/>
				</td>
				<td>
				<?php
					//condition for php
						$password1=$_POST['pass1'];
						$password2=$_POST['pass2'];
					if($password1!=$password2)
				{
					echo "<p>";
					echo "password does not match";
					echo "</p>";
				}
				else
				{
					echo "password matches ";
				}
				?>
				</td>
			</tr>
			<tr>
				<td>
					Address
				</td>
				<td>
					<input type="text" placeholder="Enter your residential address" maxlength="40" name="address" size="30"/><br/>
				</td>
			</tr>
			<tr>
				<td>
					Select Skills
				</td>
				<td>
					<input type="checkbox" value="C language" name="c" checked="checked" />C language<br/>
					<input type="checkbox" value="C++ language" name="c++" />C++ language<br/>
					<input type="checkbox" value="Java" name="java" />Java <br/>
					<input type="checkbox" value="Python" name="python" />Python<br/>
					<input type="checkbox" value="Ruby" name="ruby" />Ruby<br/>
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<td>
					<input type="radio" name="gender" value="Male" selected="selected" />Male
					<input type="radio" name="gender" value="Female" />Female
				</td>
			</tr>
			<tr>
				<td>	
					Resume
				</td>
				<td>
					<input type="file" name="n_file" />
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Register" name="register" class="button"/>
					<input type="reset" value="Clear" name="clear" class="button"/>
				</td>
			</tr>
		</table>
		</center>
	</form>
</body>