<?php
session_start();
?>
<?php
		$pro_id=$_REQUEST["pro_id"];
		require '../database.php';
		$res=new database();
		$res=$res->view_product($pro_id);
	while($row=mysql_fetch_assoc($res))
	{
		$pid=$row["pro_id"];
		$pname=$row["pro_name"];
		$price=$row["pro_price"];
		$soh=$row["soh"];
		$mfg=$row["mfg"];
		$war=$row["warranty"];
		$color=$row["color"];
		$des=$row["description"];
		$cat=$row["fk_cat_id"];	
		$photo=$row["photo"];
			
		
	
	}

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>


<h1>Update form</h1>
<form method="post" enctype="multipart/form-data" action="update.php?photo='.<?php echo $photo; ?>'">
<table border="1">

<tr>
	<td>pro_id</td>
	<td><input type="text" value="<?php  echo $pid;?>" name="txtid"/></td>
</tr>
<tr>
	<td>pro_name</td>
	<td><input type="text" value="<?php  echo $pname;?>" name="txtname"/></td>
</tr>
<tr>
	<td>pro_price</td>
	<td>
		<input type="text" value="<?php echo $price;?>" name="txtprice"/>
	</td>
</tr>
<tr>
	<td>stock on hand</td>
	<td><input type="number" value="<?php echo $soh;?>" name="txtsoh"/></td>
</tr>
<tr>
	<td>mfg</td>
	<td><input type="text" value="<?php echo $mfg;?>" name="txtmfg"/></td>
</tr>
<tr>
	<td>warranty</td>
	<td><input type="text" value="<?php echo $war; ?>" name="txtwar"/></td>
<tr>
<tr>
	<td>color</td>
	<td><select name="txtcolor">
	<option value="red" <?php if($color=="red") echo 'selected';?>>red</option>
	<option value="blue" <?php if($color=="blue") echo 'selected';?>>blue</option>
	</select>
	</td>
</tr>
<tr>
	<td>Description</td>
	<td>
		<input type="text" value="<?php echo $des; ?>" name="txtdes"/>
	</td>
</tr>

<tr>
	<td>catogery</td>
	<td><select name="txtcatid">
	<?php
		//require '../database.php';
		$obj=new database();
		$res=$obj->displaycat1();
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
			echo '<option value="'.$row["cat_id"].'"';
				if($row["cat_id"]==$cat)
				echo 'selected';
				echo '>'.$row["cat_name"].'</option>';
		}
	?>
	</select>
</tr>

		<input type="submit" name="btnupdate" value="update">
</form>	
	</body>
</html>