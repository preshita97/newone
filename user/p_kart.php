<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
		<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />

</head>
<body>

<table>
<th>order Id</th>
<th>Amount</th>
<th>Order Date</th>
<th>Product Id</th>
<th>Email Id</th>
<th>Qty</th>



<?php
	
			$email_id=$_SESSION["email_id"];
			$flag='kart';
			require '../database.php';
			$obj=new database();
			$res=$obj->viewkart($email_id,$flag);
			$cnt=mysql_num_rows($res);
			echo $email_id . "  --  items --   " . $cnt;
			while($row=mysql_fetch_array($res))
			{
				echo '<tr>';
				echo '<td><img src="'.$row["photo"].'" height="50px" width="50px"></img></td>';
				echo '<td>'.$row["amt"].'</td>';
				echo '<td>'.$row["o_date"].'</td>';
				echo '<td>'.$row["pro_name"].'</td>';
				echo '<td>'.$row["qty"].'</td>';
				echo '</tr>';

			}
?>
</table>
</body>
</html>