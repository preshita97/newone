<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<style >
	.f
	{
		
		font-size:250%;
		
	}
	.c
	{
		color:red;
	}
	
	</style>
</head>

<body bgcolor="yellow">
<font color="royalblue">

<?php
	
			$email=$_SESSION["email_id"];
			$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
			$res=mysql_query("select * from user_tbl where email_id='$email'",$con);
 			while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			{
				$name=$row["name"];
				$mob=$row["mobile_no"];
				$city=$row["city"];
				$gen=$row["gender"];
			}
			
	
			
?>
<center><h1>Welcome  <?php  echo $name;?></h1></center>
<form action="pofile.php" method="post">
<center>
<table border="1">
	<tr>
		<td>
			<label class="f"><?php echo "Email id:".$email."<br>";?></label>
		</td>
	</tr>
<tr>
	<td>
		<label class="f"><?php echo "Name:".$name."<br>"; ?></label>
	</td>
</tr>
<tr>
	<td>
		<label class="f"><?php echo "mob:".$mob."<br>";?></label>
	</td>
</tr>
<tr>
	<td>
		<label class="f"><?php echo "City:".$city."<br>";?></label>
	</td>
</tr>
<tr>
	<td>
		<label class="f"><?php echo "Gender:".$gen."<br>";?></label>
	</td>
</tr>
</table>
<h2><a href="editprofile.php" class="c">Edit Profile</a></h2>

<h2 ><a href="../login.php" class="c"/>Logout</h2>
<h2><a href="changepassdes.php" class="c"/>Change Password</h2>
<h2><a href="../admin/catdisplay.php" class="c"/>Categories Available</h2>
</form>

</center>

</body>
</html>