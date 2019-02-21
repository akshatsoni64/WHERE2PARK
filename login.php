<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="JS/script.js"></script>
  <!-- <meta http-equiv="x-ua-compatible" content="ie=edge">-->
   <title></title>
   <body>
   <?php include'home.php'; ?><br><br><br>
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
           <input type="text" name="contact_val" class="Form-control text" placeholder="Enter Details">
           <label>Password:</label>
                 <input type="password" name="password" class="Form-control text" placeholder="Enter Password" maxlength=6>
       </div>
       <div class="form-group">
           <input type="submit" class="btn btn-success formbtn" value="LogIn">
           <input type="reset" class="btn btn-danger formbtn" value="Reset">
       </div>
       </form>
       </center>
     </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
   </body>
</html>
