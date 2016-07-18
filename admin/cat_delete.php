
<?php
$cat_id=$_REQUEST["cat_id"];

require '../database.php';
$obj=new database();
$res=$obj->deletecat($cat_id);
if($res==1)
{
	header('location:catdisplayadmin.php');
}
else
{
	echo "something went wrong";
}



?>