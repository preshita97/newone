<?php
	session_start();
?>
<?php
		$cat_id=$_REQUEST["cat_id"];
		require '../database.php';
		$res=new database();
		$res=$res->view_cat($cat_id);
			while($row=mysql_fetch_assoc($res))
		{
			$cid=$row["cat_id"];
			$cname=$row["cat_name"];
		}
		
	
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Update  category form</h1>
<form method="post" action="update_cat.php">
<center>
<table border="1">

<tr>
	<td>pro_id</td>
	<td><input type="text" value="<?php  echo $cid;?>" readonly name="txtid"/></td>
</tr>
<tr>
	<td>pro_name</td>
	<td><input type="text" value="<?php  echo $cname;?>" name="txtname"/></td>
</tr>

</table>
<input type="submit" value="Update" name="btnupdate"/> 
</center>

</form>
</body>
</html>