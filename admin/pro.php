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
    <title></title>
<script type="text/javascript">
  function checkboxes(){
    var inputElems = document.getElementsByTagName("input"),
    count = 0,count1=0;
    for (var i=0; i<inputElems.length; i++) {
    if (inputElems[i].type === "checkbox"  && inputElems[i].checked === false){
        count++;
       
    }
    
    }


 return count;
 }
 function check(cb)
{
   
    if($(cb).is(":checked"))
    {
      
         /* //var all = document.getElementById("chkhead"),
       var group = document.getElementById("chk[]");
    if(cb.checked == true){
        group.checked = true;
    }
    else{
        group.checked = false;
    }
    //alert ("hello");*/
   var count=checkboxes();

    for(var i=0; i<count; i++)
    {

       var chk = document.getElementsByName('chk');
    if(cb.checked == true){
        chk[i].checked = true;
    }
    else if(cb.checked == false)
    {
        chk[i].checked = false;
    }
    }
    }
}
</script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style="
    background-color: rgba(191, 6, 6, 0.27);
">
                    <h1>ShoppingKart<small>.com</small></h1>
                </div>
            </div>
        </div>
        <div class="row">   
            <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">ShoppingKart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="productdetail.php">Product</a></li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catagory <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="catupdate1.php">Catagory Update</a></li>
            <li><a href="catdelete.php">Catagory Delete</a></li>
          </ul>
        </li>
           <li><a href="userdetail.php">User</a></li>
           <li><a href="#">Bill</a></li>
       
      </ul>
     <ul class="nav navbar-right">
        <li><a href="../Login.php">Sign Out</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["name"]?><span class="caret"></span></a>
         <ul class="dropdown-menu">
          <div class="container">
            <li><img src="" class="img-circle"/></li>
            <li><label><?php echo $_SESSION["name"]; ?></label></li> 
            <li role="separator" class="divider"></li>
            <li>Welcome to the ShoppingKart</li>
            </div>
          </ul>
          </li>
          </div>
        </li>-->
     </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        </div>

	<form method="post" action="procreate.php">
	<div class="container">
  <a href="procreate.php"><button class=" btn btn-success">+</button></a>
    


<!--<div class="panel panel-default table-responsive">
        <div class="panel-heading">
            Data Table
            <span class="label label-info pull-right"> Items</span>
        </div>
        <div class="padding-md clearfix">-->
    <table class="table table-striped" id="dataTable">
      <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Product price</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
  $con=mysql_connect('localhost','root','');
       mysql_select_db('shopping',$con);

  $res=mysql_query("select p.*,c.cat_name from pro_tbl as p,cat_tbl as c
            where p.fk_cat_id=c.cat_id",$con);
      
  while($row=mysql_fetch_array($res,MYSQL_ASSOC))
  {
   echo '<tr>';
    echo " <td>".$row['pro_id']."</td>";
    echo " <td>".$row['pro_name']."</td>";
    echo " <td>".$row['pro_price']."</td>";
    echo"</tr>";
  }
  
?>
    </tbody>
      
  </table>

        <!--</div>-->
        	</div>
</body>
</html>
