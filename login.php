<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php require 'lib.php';?>
  <!-- <meta http-equiv="x-ua-compatible" content="ie=edge">-->
   <title></title>
 </head>
  <body>
   <?php require 'nav.php'; ?><br><br><br>
   <div class="container">
   <div class="row form1">
   <div class="col-md-6 col-md-offset-3" id="form">
     <center><b class="headcode">
       <b><br>Login <hr></b>
     </center>
     <center>
     <form id="w2p_login" action="" method="post">
       <div class="form-group">
           <input type="radio" name="contact" value="mobile"><label> Mobile</label>
           <input type="radio" name="contact" value="email"> <label>Email</label>
           <input type="text" name="contact_val" class="Form-control text" placeholder="Enter Details"><br>
           <input type="password" name="password" class="Form-control text" placeholder="Enter Password" maxlength=6>
       </div>
       <div class="form-group">
           <input type="submit" class="btn btn-success formbtn" value="Login">
           <input type="reset" class="btn btn-danger formbtn" value="Reset">
       </div>
       </form>
       </center>
     </div>
   </body>
</html>
