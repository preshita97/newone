
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
  <title>category</title>
  <style>
  .f
  {
    font-style:Times New Roman;
    
  }
  </style>
   <link href="../Content/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="../css/endless.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <script src="../js/jquery-1.10.2.min.js"></script>
  <script src="../Scripts/bootstrap.min.js"></script>
  <script src='../js/jquery.dataTables.min.js'></script>

<script>
        $(function () {
            $('#dataTable').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            });

            $('#chk-all').click(function () {
                if ($(this).is(':checked')) {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', true);
                        $(this).parent().parent().parent().addClass('selected');
                    });
                }
                else {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', false);
                        $(this).parent().parent().parent().removeClass('selected');
                    });
                }
            });
        });
    </script>

<script>
function del()
{
  return confirm("Are you sure you want to delete");

}
</script>
<!--<script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />-->

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
        <li><a href="p_userlist.php">USER DISPLAY<span class="sr-only"></span></a></li>
        <li>
                    <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            PRODUCT ADD
          </button>

          <!-- Modal -->
          <form action="insert.php" enctype="multipart/form-data" method="post">

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
                               <input type="text" name="txtname" class="form-control" placeholder="Enter Product Name:" aria-describedby="basic-addon1">
                                   
                         </div>    
                                 </br>
                                    
                                <div class="input-group">
                                    <span class="input-group-addon" id="Span1">*</span>
                                     <input type="text" name="txtprice" class="form-control" placeholder="Enter Product Price:" aria-describedby="basic-addon1">
                                </div>
                                </br>
                                    
                                <div class="input-group">
                                    <span class="input-group-addon" id="Span1">*</span>
                                     <input type="text" name="txtsoh" class="form-control" placeholder="Enter Stock-On-Hand:" aria-describedby="basic-addon1">
                                </div></br>

                                 <div class="input-group">
                                    <span class="input-group-addon" id="Span1">*</span>
                                     <input type="text" name="txtmfg" class="form-control" placeholder="Enter Mfg:" aria-describedby="basic-addon1">
                                </div></br>

                                <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">*</span>
                               <input type="text" name="txtwar" class="form-control" placeholder="Enter Warranty:" aria-describedby="basic-addon1">
                                   </div>   </br>


                           <div class="input-group">
                               <span class="input-group-addon" id="basic-addon1">*</span>
                                 <select  name="txtcolor" class="form-control" placeholder="Enter Color:" aria-describedby="basic-addon1">
                                 <option value="red">Red</option>
                                 <option value="blue">Blue</option>
                                 </select>

                                     
                           </div></br>


         


                           <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">*</span>
                               <input type="text" name="txtdes" class="form-control" placeholder="Enter Description:" aria-describedby="basic-addon1">
                                   
                         </div></br>   

                            <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">Enter File</span>
                               <input type="file" name="txtphoto" class="form-control" aria-describedby="basic-addon1">
                                   
                         </div></br> 
                         <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">*</span>
                               <input type="text" name="txtcatid" class="form-control" placeholder="Enter Category_id:" aria-describedby="basic-addon1">
                                   
                         </div></br>   





                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="submit"  name="btninsert" class="btn btn-primary" >Save changes</button>
                </div>
              </div>
            </div>
          </div></form>
        </li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php  echo $name;?><img src="../images/received_1084390448291718.jpeg" height="30px" width="30px"><span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li style="margin-left:10px"><?php  echo $email;?></li>
             <li role="separator" class="divider">
            <li style="margin-left:10px"><?php  echo $mob;?></li></li>
             <li role="separator" class="divider">
            <li style="margin-left:10px"><?php  echo $gen;?></li></li>
             <li role="separator" class="divider">
            <li style="margin-left:10px"><?php  echo $city;?></li></li>
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
<div class="col-md-12 col-sm-12"> 
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">PRODUCT DISPLAY</div>

  

  <!-- Table -->
  <form action="delmulpro.php" method="post">
  <table class="table" id="dataTable">
    
  <thead>  
<tr>
<th><input type="checkbox" name="chkhead" /></th>
<th>pro_id</th>
<th>pro_name</th>
<th>price</th>
<th>stock</th>
<th>mfg</th>
<th>warranty</th>
<th>color</th>
<th>description</th>
<th>images</th>
<th>category</th>
<th>action</th>
</tr>
</thead>
<tbody>
<?php
	require '../database.php';
	$obj=new database();
	$res=$obj->displaypro();
	while($row=mysql_fetch_assoc($res))
	{
		echo '<tr>';
    echo '<td>'.'<input type="checkbox" style="opacity:1;" name="chk[]" value='.$row["pro_id"].'>'.'</td>';
		echo '<td>'.$row["pro_id"].'</td>';
		echo '<td>'.$row["pro_name"].'</td>';
		echo '<td>'.$row["pro_price"].'</td>';
		echo '<td>'.$row["soh"].'</td>';
		echo '<td>'.$row["mfg"].'</td>';
		echo '<td>'.$row["warranty"].'</td>';
		echo '<td>'.$row["color"].'</td>';
		echo '<td>'.$row["description"].'</td>';
    echo '<td><img src="'.$row["photo"].'" style="height:50px;width:50px;"</td>';
		echo '<td>'.$row["cat_name"].'</td>';
		echo '<td>'.'<a href="p_proupdate1.php?pro_id='.$row["pro_id"].'">update  </a>';
		echo '<a href="pro_delete.php?pro_id='.$row["pro_id"].'" onClick="return del()">  delete</a>'.'</td>';
		echo '</tr>';
		
	}
?>
  </tbody>
</div>
</center>
</table>
<input type="submit" name="btndel" value="Delete"/>
</form>
</body>
</html>
  
