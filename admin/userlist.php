<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>users</title>
	<style>
	.f
	{
		font-style:Times New Roman;
		font-size:250%;
	}
	</style>
	<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />
 
</head>
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

<body bgcolor="orange">
<center>
<h1><i><b>users list</b></i></h1>
<form action="userlist.php" method="post">

<table class="f" border="10">
<th>emailId</th>
<th>Name</th>
<th>mob_no</th>
<th>city</th>
<th>gender</th>
<th colspan="4">Action</th>

<?php
	$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
			$res=mysql_query("select * from user_tbl");
	
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
		echo '<tr>';
		echo '<td>'.$row["email_id"].'</td>';
		echo '<td>'.$row["name"].'</td>';
		echo '<td>'.$row["mobile_no"].'</td>';
		echo '<td>'.$row["city"].'</td>';
		echo '<td>'.$row["gender"].'</td>';
		echo '<td><a href="delete.php">delete</a></td>';
		echo '<td><a href="update.php">update</a></td>';
		echo '</tr>';
	}
	
?>
</table>
</form>
</body>
</html>