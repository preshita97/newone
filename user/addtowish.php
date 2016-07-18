<?php
	session_start();
	if($_SESSION['email_id']=='')
	{
		header('location:../login1.php');
	}
?>

<?php

							  	$id=$_REQUEST["pro_id"];
							  	require '../database.php';
							  	$email_id=$_SESSION["email_id"];
							  	$obj=new database();
	
							  	$cnt=$obj->checkwish($id,$email_id);

							  	if($cnt==0)
							  	{

							  			$res=$obj->displaypro_wish($id);
							  			while ($row=mysql_fetch_assoc($res))
							  	 {
							  	 	$amt=$row["pro_price"];
							  	 }
							  	 $date=date("d/m/y");
							  	 
							  	 $qty=1;
							  	 $flag='wish';

							  	 $res1=new database();
							  	 $res1=$res1->addtowish($amt,$date,$id,$email_id,$qty,$flag);

							  	 if($res1==1)
							  	 {
							  	 	echo "Added";
							  	 	header('location:wish.php');
							  	 } 
							  	 else
							  	 {
							  	 	echo "Not Added";
							  	 }
							  	}
							  	else
							  	{

							  	 	echo '<script langauge="javascript">;
							  	 	alert("already added");
							  	 	window.location.href="profile1.php";
							  	 	</script>';

							 	}
?>




