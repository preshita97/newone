
<?php
	if(isset($_POST["btninsert"]))
	{
	//	$pid=$_POST["txtid"];
		$pname=$_POST["txtname"];
		$price=$_POST["txtprice"];
		$soh=$_POST["txtsoh"];
		$mfg=$_POST["txtmfg"];
		$war=$_POST["txtwar"];
		$color=$_POST["txtcolor"];
		$des=$_POST["txtdes"];
		$cat=$_POST["txtcatid"];
		//$img=$_POST["txtimg"];
		$path="../images/".$_FILES["txtphoto"]["name"];

		

		$ext=pathinfo($path,PATHINFO_EXTENSION);
		if($ext=="png" || $ext=="jpg" || $ext=="jpeg")
		{
			move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$path);
			require '../database.php';
			$obj=new database();
			$res=$obj->pro_insert("insert into pro_tbl values(Null,'$pname','$price','$soh','$mfg','$war','$color','$des','$path','$cat')");
			if($res==1)
			{
				header('Location:p_prodisplay.php');
			}
			else
			{
				echo "wrong";
			}
		
	
	}
		else
		{
		echo "not allowed";
		}
}
?>
		
		
		