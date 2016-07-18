
<?php
$pro_id=$_REQUEST["pro_id"];

require '../database.php';
$obj=new database();
$res=$obj->deletepro($pro_id);
if($res==1)
{
	header('location:pro_display.php');
}
else
{
	echo "something went wrong";
}



?>