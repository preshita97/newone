<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
td
{
	height:100%;
}
.c
{
	background-color:aqua;
}

</style>
<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <title></title>
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
        <li><a href="editprofile.php">
        Edit Profile<span class="sr-only"></span></a></li>
        <li>
	<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
					  Change Password
					</button>
					</nav>


<div class="jumbotron" style="height:100px">

 <h2><center>Edit Profile!</center></h2>
  
  <p></p>
  
</div>



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


<form action="x.php" method="post">
<center>
<div class="container">

<div class="row">
    	<div class="col-md-12 col-sm-12">

    		<div class="input-group">

  <span class="input-group-addon" id="sizing-addon2">Email id : </span>
  <input type="email"  readonly name="txtemail" value="<?php echo $email;?>"class="form-control" placeholder="Email id" aria-describedby="sizing-addon2">
</div>
</div>
</div>

<div class="row">
    	<div class="col-md-12 col-sm-12"><br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Name :</span>
  <input type="text"  name="txtname" value="<?php echo $name;?>" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
</div>
</div>
</div>

<div class="row">
    	<div class="col-md-12 col-sm-12"><br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Mobile no :</span>
  <input type="text"  name="txtmob" value="<?php echo $mob;?>" class="form-control" placeholder="Mobile no" aria-describedby="sizing-addon2">
</div>
</div>
</div>

<div class="row">
    	<div class="col-md-12 col-sm-12"><br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">City :</span>
  <select name="txtcity" class="form-control" placeholder="city" aria-describedby="sizing-addon2">
	<option value="ahmedabad" <?php if($city=="ahmedabad") {echo 'selected';}?>>ahmedabad</option>
	<option value="baroda" <?php if($city=="baroda") {echo 'selected';}?>>baroda</option>
	</select >
</div>
</div>
</div>


<div class="row">
    	<div class="col-md-12 col-sm-12"><br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Gender :</span>
  <label><input type="radio" name="txtgen" value="male" <?php if($gen=="male") {echo 'çhecked';} ?>  placeholder="gender" aria-describedby="sizing-addon2"> </label>Male

  <label><input type="radio" name="txtgen" value="female" <?php if($gen=="female") {echo 'çhecked';} ?>  placeholder="gender" aria-describedby="sizing-addon2"></label>feMale
 
</div>
</div>
</div>

<br>
<br>

</div>
<!--<table  height="80%">
<tr>
	<td>Email Id:</td>
	<td><input type="email" readonly name="txtemail" value="<?php echo $email;?>"></td>
</tr>

<tr>
	<td>Name:</td>
	<td><input type="text" name="txtname" value="<?php echo $name;?>"></td>
</tr>
<tr>
	<td>Mobile No:</td>
	<td><input type="text" name="txtmob" value="<?php echo $mob;?>"></td>
</tr>

<tr>
<td>City:</td>
 <td><select name="txtcity" class="form-control" placeholder="city" aria-describedby="sizing-addon2">
	<option value="ahmedabad" <?php if($city=="ahmedabad") {echo 'selected';}?>>ahmedabad</option>
	<option value="baroda" <?php if($city=="baroda") {echo 'selected';}?>>baroda</option>
	</select ></td>
</tr>
<tr>
	<td>Gender:</td>
	<td><input type="radio" name="txtgen" value="male" <?php if($gen=="male") {echo 'checked';} ?>>Male
	<input type="radio" name="txtgen" value="female" <?php if($gen=="female") {echo 'checked';} ?>>Female</td>
</tr>

<tr>

	<td><input type="submit" name="btnsub" value="Edit submit"/></td>
	<td><input type="submit" name="btnhome" value="HOME"/></td>
</tr>
</table>-->
</center>
</form>
<br>
</body>

<center><p><a class="btn btn-primary btn-lg" href="#" role="button">Edit Profile</a></p>
<p><a class="btn btn-primary btn-lg" href="../login1.php" role="button">Home</a></p></center>
</html>