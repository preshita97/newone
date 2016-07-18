<?php
  session_start(); 
  if($_SESSION['email_id']=='')
  {
    header('location:../login1.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />

<title>Payment</title>
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
      <a class="navbar-brand" href="profile1.php">Shopping Kart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="editprofile.php">Edit Profile<span class="sr-only"></span></a></li>

        <li>
                    <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Change Password
          </button>

          <!-- Modal -->
          <form action="changepass.php" method="post">

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Change Password</h4>
                </div>
                <div class="modal-body">
                      <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">*</span>
                               <input type="text" name="txtpasso" class="form-control" placeholder="Enter Old Password" aria-describedby="basic-addon1">
                                   
                         </div>    
                                 </br>
                                    
                                <div class="input-group">
                                    <span class="input-group-addon" id="Span1">*</span>
                                     <input type="password" name="txtpass1" class="form-control" placeholder="Enter New Password" aria-describedby="basic-addon1">
                                </div>
                                </br>
                                    
                                <div class="input-group">
                                    <span class="input-group-addon" id="Span1">*</span>
                                     <input type="password" name="txtpass2" class="form-control" placeholder="Re-enter New Password" aria-describedby="basic-addon1">
                                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="submit"  name="btnchange" class="btn btn-primary" >Save changes</button>
                </div>
              </div>
            </div>
          </div></form>
        </li>
        
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
      <li>
        
      </li>

      <?php
  
      $email_id=$_SESSION["email_id"];
      $flag='kart';
      require '../database.php';
      $obj=new database();
      $res=$obj->viewkart($email_id,$flag);
      $cnt=mysql_num_rows($res);
      
    
      ?>
        <li><a href="kart.php" class="btn btn-primary" role="Button"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="color:white"></span><?php echo '<span class="badge" style="font-size:8px;margin-top:-12px;margin-left:-5px;background:yellow">'.$cnt.'</span>'; ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php  echo $name;?><img src="../images/3.jpg" height="30px" width="30px"><span class="caret"></span></a>
          <ul class="dropdown-menu" >

            <li style="margin-left:10px"><?php  echo $email;?></li>
             <li role="separator" class="divider">
            <li style="margin-left:10px"><?php  echo $mob;?></li></li>
             <li role="separator" class="divider">
            <li style="margin-left:10px"><?php  echo $gen;?></li></li>
             <li role="separator" class="divider">
            <li style="margin-left:10px"><?php  echo $city;?></li></li>
            <li role="separator" class="divider"></li>
            <li style="margin-left:10px"><a href="../login1.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      </div>
    </div>
    <div class="row">
    <div class="col-md-3 col-sm-3"
    <div class="list-group">
  <a href="#" class="list-group-item active">
    For Payment Mode
  </a>
  <a href="#" class="list-group-item">For Debit Card</a>
  <a href="#" class="list-group-item">For Credit Card</a>
  
</div>
<div class="col-md-9 col-sm-9">


      <div class="panel panel-default">
  <div class="panel-heading ">
    <h3 class="panel-title ">For Cash-On-Delivery</h3>
  </div>
  <div class="panel-body">
      <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">For Address </span>
  <input type="text" class="form-control" placeholder="For Address" aria-describedby="basic-addon1">
</div>
<br>
<br>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">For Zip-Code</span>
  <input type="text" class="form-control" placeholder="For Zip-Code" aria-describedby="basic-addon1">
</div>
<br>
<br>
<form action="finalpay.php" method="post">
<center><button type="submit" class="btn btn-primary" name="btnpay">pay</button></center>
</form>

  </div>
</div>



</div>
</div>
</div>
    
<?php
$id=$_SESSION["email_id"];
//echo "welcome    ".$id;

?>

</body>
</head>
</html>