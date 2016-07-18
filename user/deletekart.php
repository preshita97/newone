<?php
	session_start();
	$o_id=$_REQUEST["o_id"];
	require '../database.php';
	$obj=new database();
	$res=$obj->deletekart($o_id);

	if($res==1)
	{
	header('location:kart.php');
	}
	else
	{
	echo "Not delete";
	}

?>