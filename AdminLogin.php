<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <?php require 'lib.php'; ?>
   <title></title>
 </head>
 <body>
   <br><br><br>
   <div class="container">
     <div class="row form1">
     <div class="col-md-6 col-md-offset-3" id="form">
       <center><b class="headcode"><br> Admin Login <hr></b></center>
       <center>
         <form action="#" >
           <div class="form-group">
             <input type="text" name="username" class="Form-control text" placeholder= "Enter Username" width="50">
           </div>
           <div class="form-group">
             <input type="text" name="password" class="Form-control text" placeholder="Enter Password">
           </div>
           <div class="form-group">
             <button type="Submit" class="btn btn-success formbtn" formaction="\WHERE2PARK\blockmapuser2.php" >LogIn</button>
             <button type="Reset" class="btn btn-danger formbtn" >Reset</button>
           </div>
          </form>
        </center>
      </div>
     </div>
 </body>
</html>
