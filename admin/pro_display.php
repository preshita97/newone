<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="pro_display.php" method="post">
<table border="1">
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
		echo '<a href="pro_delete.php?pro_id='.$row["pro_id"].'">  delete</a>'.'</td>';
		echo '</tr>';
		
	}
?>
</table>
</form>
</body>
</html>