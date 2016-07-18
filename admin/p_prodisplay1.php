<!DOCTYPE html>
<html>
<head>
 	<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />

    <script>
    	function del()
    	{
    		return confirm("Are You Sure You Want To Delete?")
    	}
    </script>
</head>
<body class="container">
<center>
<form action="pro_display.php" method="post">
<div class="panel panel-default">
  <!-- Default panel contents -->
  	</br>
  	</br>
  <div class="panel-heading"><h2>PRODUCTS AVAILABLE</h2></div>
  <div class="panel-body">
  

  <!-- Table -->
  <table class="table">
    
    
<tr>
<th>pro_id</th>
<th>pro_name</th>
<th>price</th>
<th>stock</th>
<th>mfg</th>
<th>warranty</th>
<th>color</th>
<th>description</th>
<th>category</th>
<th>action</th>
</tr>
<?php
	require '../database.php';
	$obj=new database();
	$res=$obj->displaypro();
	while($row=mysql_fetch_assoc($res))
	{
		echo '<tr>';
		echo '<td>'.$row["pro_id"].'</td>';
		echo '<td>'.$row["pro_name"].'</td>';
		echo '<td>'.$row["pro_price"].'</td>';
		echo '<td>'.$row["soh"].'</td>';
		echo '<td>'.$row["mfg"].'</td>';
		echo '<td>'.$row["warranty"].'</td>';
		echo '<td>'.$row["color"].'</td>';
		echo '<td>'.$row["description"].'</td>';
		echo '<td>'.$row["fk_cat_id"].'</td>';
		echo '<td>'.'<a href="pro_update.php?pro_id='.$row["pro_id"].'">update  </a>';
		echo '<a href="pro_delete.php?pro_id='.$row["pro_id"].'" onClick="return del()">  delete</a>'.'</td>';
		echo '</tr>';
		
	}
?>
  
</div>
</center>
</table>
</form>
</body>
</html>
  
