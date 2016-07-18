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
	<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />

</head>
<body class="container">

<div class="row">
        <div class="col-md-12 col-sm-12">
          <nav class="navbar navbar-inverse">
  <div class="container-fluid">
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
        <li><a href="p_prodisplay.php">PRODUCT DISPLAY<span class="sr-only"></span></a></li>
        
        <li>
                    <!-- Button trigger modal -->
          <!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            CATEGORY ADD
          </button>-->

          <!-- Modal -->
          <!--<form action="add.php" method="post">

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Category Add</h4>
                </div>
                <div class="modal-body">
                      <!--<div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">*</span>
                               <input type="text" name="txtpasso" class="form-control" placeholder="Enter category id:" aria-describedby="basic-addon1">
                                   
                         </div>-->    
                                 </br>
                                    
                                <div class="input-group">
                                    <span class="input-group-addon" id="Span1">*</span>
                                     <input type="text" name="txtadd" class="form-control" placeholder="Enter Category Name:" aria-describedby="basic-addon1">
                                </div>
                                </br>
                                    
                               <!-- <div class="input-group">
                                    <span class="input-group-addon" id="Span1">*</span>
                                     <input type="password" name="txtpass2" class="form-control" placeholder="Re-enter New Password" aria-describedby="basic-addon1">
                                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit"  name="btnadd" class="btn btn-primary" >Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </li>
        
      </ul>-->
      
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
  </div><!-- /.container-fluid -->
</nav>
      </div>
    </div>


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