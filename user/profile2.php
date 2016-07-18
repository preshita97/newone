<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	.r{
		float:right;
	}
	
</style>
	<title>profile</title>

<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <title></title>
</head>

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


<body class="container">


<form method="post" action="login1.php">
    
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
        <li>
                            <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Launch demo modal
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                                                     <h6 align="left">Email-id</h6>
                                  <div class="input-group">
                                       <input type="text" class="form-control" name="txtemail" placeholder="Recipient's Email-Id" aria-describedby="basic-addon2">
                                           <span class="input-group-addon" id="basic-addon2">@example.com</span>
                                      </div>
                                     <h6 align="left">User Name</h6>
                                      <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">@</span>
                                           <input type="text" class="form-control" name="txtname" placeholder="Username" aria-describedby="basic-addon1">
                                      </div>
                                     
                                      <h6 align="left">Mobile No</h6>
                                      <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">+91</span>
                                           <input type="text" class="form-control" name="txtmob" placeholder="Mobile No" aria-describedby="basic-addon1">
                                      </div>
                        </div>
                         <div class="table">
                            <tr>
                                <td>City:</td>
                                        <td><select name="txtcity" required>
                                        <option>ahmedabad</option>
                                        <option>surat</option>
                                        </select>
                                        </td>
                                        &nbsp;
                                        &nbsp;
                                        &nbsp;
                                        &nbsp;
                                        &nbsp;
                                        &nbsp;
                                        &nbsp;
                                        &nbsp;
                                
                                <td>Gender:</td>
                                <td><input type="radio" name="txtgen"  checked value="male">Male
                                <input type="radio" name="txtgen" value="female">Female</td>

                            </tr>
                         </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
        </li>
        <li><a href="changepassdes.php">Change Password</a></li>
        
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
  </div><!-- /.container-fluid -->
</nav>
			</div>
		</div>
		
		<div class="row">
    		<div class="col-md-3 col-sm-3">
    		<div class="list-group">
							  <a href="#" class="list-group-item active">
							    Category
							  </a>
							  <?php
							  	require '../database.php';
							  	$obj=new database();
							  	$res=$obj->cat_display();
							  	while ($row=mysql_fetch_assoc($res))
							  	 {
							  	
							  		echo'<a href="#" class="list-group-item">'.$row["cat_name"].'</a>';
							  	}
							  
							  ?>
				</div></div>
    			<div class="col-md-9 col-sm-9">
    					<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
   

<div class="row">

<?php
							  	
							  	$obj=new database();
							  	$res=$obj->displaypro();
							  	while ($row=mysql_fetch_assoc($res))
							  	 {
							  	
echo '
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" >
      <img  src="'.$row["photo"].'" alt="...">
      <div class="caption">
        <h3>'.$row["pro_name"].'</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>';
}
?>
</div>


  </div>
</div>
    			
				</div>
			</div>
		<div class="row">
    		<div class="col-md-12 col-sm-12">
    			CopyRight to Shopping Kart.com
			</div>
    	</div>
    
    
    </form>
    </body>
</html>