<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	
</head>
<?php
	if(isset($_POST["btnlog"]))
	{
		$password=$_POST["txtpass"];
		$email=$_POST["txtemail"];
			require 'database.php';
			$obj=new database();
			$cnt=$obj->login($email,$password);
			if($cnt==1)
			{
				$_SESSION["email_id"]=$email;
				
				Header('location:user/profile.php');
			}
			else
			{
				echo "wrong";
			}
			
	}
	if(isset($_POST["btnhome"]))
	{
		Header('location:main.php');
	}
	

?>
<body bgcolor="orange">
<center><h1>LOGIN</h1></center>
<form action="login.php" method="post">
<center>
<table>
<tr>
	<td>Email Id:</td>
	<td><input type="email" name="txtemail" placeholder="Enter Email"></td>
</tr>

<tr>
	<td>Password:</td>
	<td><input type="password" name="txtpass" placeholder="Enter Password"</td>
</tr>
<tr>
	<td><input type="submit" name="btnlog" value="LOGIN"/></td>
	<td><input type="submit" name="btnhome" value="HOME"/></td>
	</tr>
</table>
<h4><a href="forget.php"/>Forget password?</h4>
</center>

</body>	
</html>