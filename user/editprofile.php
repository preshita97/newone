<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
td
{
	height:100%;
}
.c
{
	background-color:aqua;
}

</style>
</head>

<body class="c">
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
<form action="x.php" method="post">
<center>
<h1>Edit Profile</h1>
<table  height="80%">
<tr>
	<td>Email Id:</td>
	<td><input type="email" readonly name="txtemail" value="<?php echo $email;?>"></td>
</tr>

<tr>
	<td>Name:</td>
	<td><input type="text" name="txtname" value="<?php echo $name;?>"></td>
</tr>



<tr>
	<td>Mobile No:</td>
	<td><input type="text" name="txtmob" value="<?php echo $mob;?>"></td>
</tr>

<tr>
	<td>City:</td>
	<td><select name="txtcity">
	<option value="ahmedabad" <?php if($city=="ahmedabad") {echo 'selected';}?>>ahmedabad</option>
	<option value="baroda" <?php if($city=="baroda") {echo 'selected';}?>>baroda</option>
	</select>
	</td>
</tr>

<tr>
	<td>Gender:</td>
	<td><input type="radio" name="txtgen" value="male" <?php if($gen=="male") {echo 'checked';} ?>>Male
	<input type="radio" name="txtgen" value="female" <?php if($gen=="female") {echo 'checked';} ?>>Female</td>
</tr>

<tr>
	<td><input type="submit" name="btnsub" value="Edit submit"/></td>
	<td><input type="submit" name="btnhome" value="HOME"/></td>
</tr>
</table>
</center>
</form>
</body>
</html>