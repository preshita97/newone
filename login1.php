<?php
    session_start();
?>

    
<!DOCTYPE html>
<html>
<head>
     <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />
  <?php
 
    if(isset($_POST["btnlog"]))
    {
        $password=$_POST["txtpass"];
        $email=$_POST["txtemail"];
            require 'database.php';
            $obj=new database();
            $cnt=$obj->login($email,$password);
            if($cnt==1)
            {
                $_SESSION["email_id"]=$email;
                if($email=="preshu@gmail.com")
                {
                    header('location:admin/p_prodisplay.php');
                }
                else
                {
                     Header('location:user/profile1.php');
                }
               
            }
            else
            {
                echo "wrong";
            }
            
    }
    if(isset($_POST["btnhome"]))
    {
        Header('location:main.php');
    }
    

?>

    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <title></title>
</head>
<body>
<form method="post" action="login1.php">
    <div  class="container">
       
         <div class="row">
                     <div class="col-md-12 col-sm-12">
                         <div class="jumbotron">
                            <h1 align="center">Shopping Kart</h1>
  
                            </div>
                     </div> 
        </div>
         <div class="row">
                <div class="col-md-6 col-sm-6 col-md-offset-2">
             <div class="panel panel-default">
                <div class="panel-heading">LOGIN</div>
                    <div class="panel-body">
                        <div class="input-group">
                     <span class="input-group-addon" id="basic-addon1">@</span>
                       <input type="text" name="txtemail" class="form-control" placeholder="Email Id" aria-describedby="basic-addon1">
                           
                 </div>    
                         </br>
                            </br>
                            </br>
                        <div class="input-group">
                            <span class="input-group-addon" id="Span1">@</span>
                             <input type="password" name="txtpass" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                        </div>
                   </div>
                        <center><div class="btn-group">
                            <input type="submit" name="btnlog" value="Login" class="btn btn-primary"></div></input>
                    </div></center>


                       
                </div>

         </div>     
        </div>
                 
        </div>
        <div class="row">
                      
        </div>
    </div>

    </form>
    <form action="signup.php" method="post">
   

    <div align="center" class="container">
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  NEW USER!!!!!
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">SIGN UP FORM</h4>
      </div>
      <div class="modal-body">
      <h6 align="left">Email-id</h6>
        ...<div class="input-group">
             <input type="text" class="form-control" name="txtemail" placeholder="Recipient's Email-Id" aria-describedby="basic-addon2">
                 <span class="input-group-addon" id="basic-addon2">@example.com</span>
            </div>
           <h6 align="left">User Name</h6>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                 <input type="text" class="form-control" name="txtname" placeholder="Username" aria-describedby="basic-addon1">
            </div>
            <h6 align="left">Password</h6>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                 <input type="password" class="form-control" name="txtpass" placeholder="Password" aria-describedby="basic-addon1">
            </div>
            <h6 align="left">Confirm Password</h6>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                 <input type="password" class="form-control" name="txtpass1" placeholder="Confirm Password" aria-describedby="basic-addon1">
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
            <h6 align="left">Captcha Code</h6>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                 <input type="text" class="form-control" name="captcha_code" placeholder="Enter captcha code" aria-describedby="basic-addon1">
                 
            </div>
              <div>
            <img src="captcha_code.php" />
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" name="btnsub" class="btn btn-primary" value="Save"></input>
      </div>
    </div>
  </div>
</div>
</div>
    </form>

</body>
</html>