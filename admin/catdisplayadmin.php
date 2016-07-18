<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>category</title>
	<style>
	.f
	{
		font-style:Times New Roman;
		font-size:250%;
	}
	</style>
</head>

<body bgcolor="orange">
<center>
<h1><i><b>Categories Available</b></i></h1>
<form>
<h2><a href="add.php">add</a></h2>
<table class="f" border="10">
<th>Id</th>
<th>Name</th>
<th colspan="4">Action</th>

<?php

	require '../database.php';
			$obj=new database();
			$res=$obj->cat_display();
	
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
		echo "<tr>";
		echo '<td>'.$row["cat_id"].'</td>';
		echo '<td>'.$row["cat_name"].'</td>';
		echo '<td>'.'<a href="p_catupdate.php?cat_id='.$row["cat_id"].'">update      </a>';
		echo '<a href="cat_delete.php?cat_id='.$row["cat_id"].'">   delete</a>'.'</td>';
		echo "</tr>";
	}
?>
</table>
</form>
</body>
</html>