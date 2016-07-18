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
<table class="f" border="10">
<th>Id</th>
<th>Name</th>
<?php
	require '../database.php';
			$obj=new database();
			$res=$obj->cat_display();
	
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
		echo "<tr>";
		echo '<td>'.$row["cat_id"].'</td>';
		echo '<td>'.$row["cat_name"].'</td>';
		echo "</tr>";
	}
	
?>
</table>

</form>
</body>
</html>