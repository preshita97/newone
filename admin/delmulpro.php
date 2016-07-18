<?php
$all=implode(",",$_POST["chk"]);
echo $all;
 require '../database.php';
      $obj=new database();
      $res=$obj->delmulpro($all);

if($res==1)
{
	header('location:p_prodisplay.php');

}

?>