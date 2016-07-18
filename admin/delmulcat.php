<?php
$all=implode(",",$_POST["chk"]);
echo $all;
 require '../database.php';
      $obj=new database();
      $res=$obj->delmulcat($all);

if($res==1)
{
	header('location:p_catdisplay.php');

}

?>