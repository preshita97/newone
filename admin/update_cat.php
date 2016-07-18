<?php
			$cid=$_POST["txtid"];
			$cname=$_POST["txtname"];
			$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
				$res=mysql_query("update cat_tbl set cat_name='$cname' where cat_id='$cid' ",$con);
 		if($res==1)
		{
			
			Header('location:p_catdisplay.php');
		}
		else
		{
			echo "Not";
		}
		
?>