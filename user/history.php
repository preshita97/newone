<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>history</title>
</head>
<?php
	

      
	
			$email_id=$_SESSION["email_id"];
		
			require '../database.php';
			$obj=new database();
			$res=$obj->history($email_id);
			$cnt=mysql_num_rows($res);
			?>
			<table class="table" id="dataTable">
<thead>
<th>Product Photo</th>
<th>Amount</th>
<th>Order Date</th>
<th>Product Name</th>
<!--<th>Email Id</th>-->
<th>Qty</th>
<th>Action</th>
</thead>
<tbody>


<?php
			while($row=mysql_fetch_array($res))
			{
				echo '<tr>';
				//echo '<td><img src="'.$row["photo"].'" height="50px" width="50px"></img></td>';
				echo '<td>'.$row["amt"].'</td>';
				echo '<td>'.$row["o_date"].'</td>';
				//echo '<td>'.$row["pro_name"].'</td>';
				echo '<td>'.$row["qty"].'</td>';
			//	echo '<td><h4><a href="deletekart.php?o_id='.$row["o_id"].'" onClick="return del();" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></h4></td>';
				echo '</tr>';

			}
?>

		
		