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
<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />

</head>


<body bgcolor="orange" class="container">
<center>

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
        <li><a href="p_catdisplay.php">CATEGORY DISPLAY<span class="sr-only"></span></a></li>
        
        <li>
                    <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            CATEGORY ADD
          </button>

          <!-- Modal -->
          <form action="p_catupdate.php" method="post">

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Product Add</h4>
                </div>
                <div class="modal-body">
                      <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">*</span>
                               <input type="text" name="txtpasso" class="form-control" placeholder="Enter Product Name:" aria-describedby="basic-addon1">
                                   
                         </div> 
                         </div>
                         </div>
                         </div>   
                         </div>

                         <div class="row"> 
                         <div class="col-md-12 col-sm-12">
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
</div>
</div>
</body>
</html>