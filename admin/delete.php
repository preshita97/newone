
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
			//$nm=$_POST["txtname"];
			$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
			$res=mysql_query("select * from user_tbl where cat_id='$id'",$con);
 			while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			{
				$name=$row["name"];
				$mob=$row["mobile_no"];
				$city=$row["city"];
				$gen=$row["gender"];
			}
	
?>
<form>
</body>
</form>
</html>