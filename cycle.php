<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title></title>
<script>
<script>
$(document).ready(function(){
  $(".printcode").click(function(){
    $("p").;
  });
  $(".btn2").click(function(){
    $("p").show();
  });
});
</script>



<body>
   <?php include'admin.php'; ?>

             <br><br><br>
   <div class="container">
     <div class="row form1">
     <div class="col-md-6 col-md-offset-3" id="form">
         <center><b class="headcode"><br>Cycle<hr></b></center>
   <center>
         <form action="#" >
                <!-- <div class="form-group">
                   <label>OTP/Password:</label>
                         <input type="text" name="password" class="Form-control text" placeholder="Enter OTP">
               </div>-->
               <div class="form-group">
     <button type="Submit" class="btn btn-success formbtn" >Generate the code</button>
     <!--<button type="Reset" class="btn btn-success formbtn" >Print the code</button>-->
         </form><br><br><br>
         <div id="printcode">
         <form>
           <label >Generated code is :-<label>
         </form>
       </div>
               </div>
               </div>
     </center>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
 </body>
</html>
