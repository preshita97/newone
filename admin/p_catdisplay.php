<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
      
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

  <title>category</title>
  <style>
  .f
  {
    font-style:Times New Roman;
    
  }
  </style>

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
        <li><a href="p_prodisplay.php">PRODUCT DISPLAY<span class="sr-only"></span></a></li>
        
        <li>
                    <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            CATEGORY ADD
          </button>

          <!-- Modal -->
          <form action="add.php" method="post">

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
                                </div>-->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit"  name="btnadd" class="btn btn-primary" >Save changes</button>
                </div>
                </form>
              </div>
            </div>
          </div><!--</form>-->
        </li>
        
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
<div class="col-md-12 col-sm-12"> 
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">CATEGORY DISPLAY</div>

  <!-- Table -->
  <form action="delmulcat.php" method="post">
  <table class="table" id="dataTable">

<thead>
<th><input type="checkbox" name="chkhead" /></th>
<th>Id</th>
<th>Name</th>
<th>Action</th>
</thead>
<tbody>
<?php

  require '../database.php';
      $obj=new database();
      $res=$obj->cat_display();
  
  while($row=mysql_fetch_array($res,MYSQL_ASSOC))
  {
    echo "<tr>";
    echo '<td>'.'<input type="checkbox" style="opacity:1;" name="chk[]" value='.$row["cat_id"].'>'.'</td>';
    echo '<td>'.$row["cat_id"].'</td>';
    echo '<td>'.$row["cat_name"].'</td>';
    echo '<td>'.'<a href="catupdate.php?cat_id='.$row["cat_id"].'">update</a>';
    echo '<a href="cat_delete.php?cat_id='.$row["cat_id"].'">   delete</a>'.'</td>';
    echo "</tr>";
  }
?>
</tbody>
</table>

</div>
</div>
</div>
<input type="submit" name="btndel" value="Delete"/>
</form>
</body>
</html>