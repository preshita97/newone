<?php
	session_start();
$id=$_SESSION["email_id"];
require '../database.php';
$obj=new database();
$res=$obj->finalpay($id);
if($res==1)
{
	echo '<script langauge="javascript">;
	alert("Amount has been paid successfully");
	window.location.href="profile1.php";
	</script>';
	
}
else
{
	echo '<script langauge="javascript">;
	alert("somthing went wrong amount  has not been paid succesfully");
	window.location.href="profile1.php";
	</script>';
	

}
?>