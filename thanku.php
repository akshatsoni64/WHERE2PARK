<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/reg.css">
</head>
<body>
<?php include 'server.php';?>
<?php include'home.php'; ?>

<style>
  .p1
  {
    font-family: "Muli-Regular";
    text-align: justify;
    font-size: 100%;
    padding-top: 0.5%;
    padding-left: 2%;
    padding-right: 2%;
    padding-bottom: 0.5%;
  }
  #form
  {
    margin: auto;
    height: 65%;
    width: 35%;
  }
</style>
<br><br><br>
<div class="p1" id="form">
  <form action="#">
  <p>
    <h2 align="center" >Where2Park</h2>
    <!--h3 align="left"> Date: </h3>
    <h3 align="left"> Time:</h3-->
      <br>
    <h3 style="color: DarkGreen" align="center">Allocated Slot : <?php echo $_SESSION['slotno']?></h3>
     <div class="form-group">

   </form>

</div>


</body>
</html>
