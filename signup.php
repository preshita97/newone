
<?php
	session_start();
	if($_SESSION['email_id']=='')
	{
		header('location:../login1.php');
	}
?>
<?php
	
	
	
	if(isset($_POST["btnsub"]))
	{
		 if($_POST["captcha_code"]==$_SESSION["captcha_code"])
		 {


		$password=$_POST["txtpass"];
		$cpassword=$_POST["txtpass1"];
		$email=$_POST["txtemail"];
			$name=$_POST["txtname"];
			$mob=$_POST["txtmob"];
			$city=$_POST["txtcity"];
			$gender=$_POST["txtgen"];
			$type="user";
		if($password==$cpassword)
		{
			
			$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
			$res=mysql_query("insert into user_tbl values('$email','$name','$password','$mob','$city','$gender')",$con);
			header('Location:login1.php');
		}	
		else
		{
			echo 'wrong pass';
		}
	}
	else
	{
		echo '<script langauge="javascript">;
		alert("plzz enter correct captcha code");
		window.location.href="login1.php";
		</script>';
		
		
	}
	}
	
	
?>	
