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

<?php
	
			$email=$_SESSION["email_id"];
			$con=mysql_connect('presha.db.9462939.hostedresource.com','presha','Demo6@1212');
		mysql_select_db('presha',$con);
			$res=mysql_query("select * from user_tbl where email_id='$email'",$con);
 			while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			{
				$name=$row["name"];
				$mob=$row["mobile_no"];
				$city=$row["city"];
				$gen=$row["gender"];

			}
			
	
			
?>
<!DOCTYPE html>
<html>
<head>

<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />

</head>
<body class="container">

<form method="post" enctype="multipart/form-data" action="update.php?photo=<?php echo $photo; ?>">

<div class="row">
	<div class="col-md-12 col-sm-12">
		<nav class="navbar navbar-inverse">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Shopping Kart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="editprofile.php">Edit Profile<span class="sr-only"></span></a></li>
        <li>
					        	
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php  echo $name;?><span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><?php  echo $email;?></li>
             <li role="separator" class="divider">
            <li><?php  echo $mob;?></li></li>
             <li role="separator" class="divider">
            <li><?php  echo $gen;?></li></li>
             <li role="separator" class="divider">
            <li><?php  echo $city;?></li></li>
            <li role="separator" class="divider"></li>
            <li><a href="../login1.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  
</nav>
	
	</div>
</div>	

<div class="row">
	<div class="col-md-12 col-sm-12">

		<div class="panel panel-info">
  <div class="panel-heading">
    <h1 align="center"><class="panel-title">Update Form</h1>
  </div>
  <div class="panel-body">
   
  <div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Enter Name</span>
				                       <input type="text" value="<?php  echo $pid;?>" name="txtid" class="form-control" placeholder="Enter id= " aria-describedby="basic-addon1"></input>
				                           
				                 </div>    	</br>

					            <div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Enter Name</span>
				                       <input type="text" value="<?php  echo $pname;?>" name="txtname" class="form-control" placeholder="Enter Name" aria-describedby="basic-addon1"></input>
				                           
				                 </div>    	</br>

				                 <div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Enter Price</span>
				                       <input type="text" value="<?php echo $price;?>" name="txtprice" class="form-control" placeholder="Price" aria-describedby="basic-addon1"></input>
				                           
				                 </div>    	</br>

				                 <div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Enter Stock</span>
				                       <input type="number" value="<?php echo $soh;?>" name="txtsoh" class="form-control" placeholder="Stock Available" aria-describedby="basic-addon1"></input>
				                           
				                 </div>    	</br>

				                 <div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Manufacturer</span>
				                       <input type="text" value="<?php echo $mfg;?>" name="txtmfg" class="form-control" placeholder="Manufacturer" aria-describedby="basic-addon1"></input>
				                           
				                 </div>    	</br>

				                 <div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Warranty</span>
				                       <input type="text" value="<?php echo $war; ?>" name="txtwar" class="form-control" placeholder="warranty" aria-describedby="basic-addon1"></input>
				                           
				                 </div>    	</br>

				                 <div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Color</span>
				                           
														                           <tr>
							
											<td><select name="txtcolor">
											<option value="red" <?php if($color=="red") echo 'selected';?>>red</option>
											<option value="blue" <?php if($color=="blue") echo 'selected';?>>blue</option>
											</select>
											</td>
										</tr>
				                 </div>    	</br>

				                 <div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Description</span>
				                       <input type="text" value="<?php echo $des; ?>" name="txtdes" class="form-control" placeholder="Description" aria-describedby="basic-addon1"></input>
				                           
				                 </div>    	</br>

				                 <div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Category</span>
				                       <tr>
							
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

				                           
				                 </div>    	</br>

				                <div class="input-group">
				                     <span class="input-group-addon"r id="basic-addon1">Image</span>
				                       <img height="150px" width="150px" src="<?php echo $photo; ?>"/>  
				                       <input type="file" name="txtphoto"/>  
				                 </div>    	</br>



		<center><input type="submit" name="btnupdate" value="update"></center>
</div>
</div>
	</div>
</div>	
</form>	


		
</body>
</html>