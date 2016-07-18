<?php
session_start();
?>

<?php

	$email=$_SESSION["email_id"];
	$pass=$_POST["txtpasso"];
	$pass1=$_POST["txtpass1"];
	$pass2=$_POST["txtpass2"];
	$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
	$res=mysql_query("select * from user_tbl where email_id='$email' and password='$pass' ",$con);
	$count=mysql_num_rows($res);
if($count==1)
{
	if($pass1==$pass2)
	{
		$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
		$res=mysql_query("update user_tbl set password='$pass2'  where email_id='$email'",$con);
		echo "chng";
		Header('location:profile1.php');
	}
	else
	{
		echo "password not match";
	}
}
else
{
	echo " old pass wrong";
}
?>