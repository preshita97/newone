
<?php
session_start();
?>
<?php 
			$email=$_SESSION["email_id"];
			$name=$_POST["txtname"];
			$mob=$_POST["txtmob"];
			$city=$_POST["txtcity"];
			$gen=$_POST["txtgen"];
				$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
				$res=mysql_query("update user_tbl set name='$name',mobile_no='$mob',city='$city',gender='$gen' where email_id='$email' ",$con);
 		if($res==1)
		{
			Header('location:profile1.php');
		}
		else
		{
			echo "Not";
		}
	
?>