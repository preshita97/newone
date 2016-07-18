<?php 
	
			$photo=$_REQUEST["photo"];
			echo "$photo";
			if($_FILES["txtphoto"]["name"]!="")
			{

				unlink($photo);
				$photo="../images/".$_FILES["txtphoto"]["name"];
				move_uploaded_file($_FILES["txtphoto"]["tmp_name"], $photo);

			}
			$pro_id=$_POST["txtid"];
			$name=$_POST["txtname"];
			$price=$_POST["txtprice"];
			$soh=$_POST["txtsoh"];
			$mfg=$_POST["txtmfg"];
			$war=$_POST["txtwar"];
			$color=$_POST["txtcolor"];
			$des=$_POST["txtdes"];
			$catid=$_POST["txtcatid"];
			echo $pro_id;
				$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
				$res=mysql_query("update pro_tbl set pro_name='$name',pro_price='$price',soh='$soh',mfg='$mfg',warranty='$war',color='$color',description='$des',photo='$photo',fk_cat_id='$catid' where pro_id='$pro_id' ",$con);
 		if($res==1)
		{
			
			Header('location:p_prodisplay.php');
		}
		else
		{
			echo "Not";
		}
	
?>