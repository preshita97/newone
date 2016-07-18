
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
			
			if(isset($_POST["btnadd"]))
			{	
				$cat_name=$_POST["txtadd"];
					require '../database.php';
				$obj=new database();
				$res=$obj->cat_add($cat_name);
				if($res==1)
				{
					Header('location:p_catdisplay.php');
					echo "hy";
				}
				
			}
			
?>	
<form action="add.php" method="post">
<table>
<tr>
	<td><label>Category Name<label></td>
	<td><input type="text" required name="txtadd"/></td>
</tr>	
<tr>
	<td><input type="submit" name="btnadd" value="ADD"></td>
</tr>	
</table>
</form>
</body>
</html>