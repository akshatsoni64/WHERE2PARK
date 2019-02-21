 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
<style type="text/css">
	.switch {
  position: relative;
  display: inline-block;
  width: 51px;
  height: 23px;

}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: white;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 17px;
  width: 15px;
  left: 4px;
  bottom: 4px;
  background-color: grey;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: white;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 30px;

}

.slider.round:before {
  border-radius: 50%;
}

</style>

	</head>
  <body>
  	 <?php include'admin.php'; ?>


							<br><br><br>
		<div class="container">
			<div class="row form1">
			<div class="col-md-6 col-md-offset-3" id="form">
					<center><b class="headcode"><br>Register Here!<hr></b></center>
		<center>
					<form action="#" >
								<div >
										<label>Vehicle Type. : </label><br>
													<label>2 Wheeler </label>
												<label class="switch">
  												<input type="checkbox" checked>
												  <span class="slider round"></span>
												</label>
												<label>&nbsp 4 Wheeler</label>

								</div>
								<div class="form-group">
										<label>Email &nbsp</label>
													<label class="switch">
													  <input type="checkbox" checked>
													  <span class="slider round"></span>
													</label>
													<label>&nbsp Mobile </label>
													<input type="text" name="Vehicle" class="Form-control text" placeholder= "Enter Details">
								</div>
								<div class="form-group">
			<button type="Submit" class="btn btn-success formbtn" >Generate the code</button>
									<!--/	<button type="button" class="btn btn-success formbtn">Print the code</button>-->         
                  <div id="printcode"><br><br>
      
           <label >Generated code is :-<label>
    
                  </div>

					</form>
								</div>
								</div>
         
			</center>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
