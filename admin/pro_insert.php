<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="post" action="insert.php">
<table border="2">
<tr>
	<td>pro_id</td>
	<td><input type="textbox" name="txtid"/></td>
</tr>
<tr>
	<td>pro_name</td>
	<td><input type="textbox" name="txtname"/></td>
</tr>
<tr>
	<td>price</td>
	<td>
		<input type="text" name="txtprice"/>
	</td>
</tr>
<tr>
	<td>stock on hand</td>
	<td><input type="number" name="txtsoh"/></td>
</tr>
<tr>
	<td>mfg</td>
	<td><input type="text" name="txtmfg"/></td>
</tr>
<tr>
	<td>warranty</td>
	<td><input type="text" name="txtwar"/></td>
<tr>
<tr>
	<td>color</td>
	<td><select name="txtcolor">
	<option value="red">red</option>
	<option value="blue">blue</option>
	</select>
	</td>
</tr>
<tr>
	<td>description</td>
	<td>
		<input type="text" name="txtdes"/>
	</td>
</tr>
<tr>
	<td>catogery</td>
	<td><select name="txtcatid">
	<?php
		require '../database.php';
		$obj=new database();
		$res=$obj->cat_display();
		while($row=mysql_fetch_assoc($res))
		{
			echo '<option value="'.$row['cat_id'].'" >'.$row['cat_name'].'</option>';
		}
	?>
	</select>
</tr>

		<input type="submit" value="Insert" name="btninsert"/>
</form>	
	
</html>