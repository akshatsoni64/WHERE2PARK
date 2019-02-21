<html>
  <head>
    <!--meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge"-->
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/reg.css">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="JS/script.js" type="text/javascript"></script>

	</head>
  <body>
  	 <?php include'home.php'; ?>
  	 <br><br><br>
		<div class="container">
			<div class="row form1">
			<div class="col-md-6 col-md-offset-3" id="form">
					<center><b class="headcode"><br>Register Here!<hr></b></center>
			<center>
					<form id="w2p_register" action="" method="post">
								<div >
  									<!--label>Vehicle Type. : </label><br>
  									<label>2 Wheeler </label>
  									<label class="switch">
										<input id="vehicle" name="vehicle" type="checkbox" checked=true/>
  									<span class="slider round"></span>
  									</label>
  									<label>&nbsp 4 Wheeler</label-->
                    Two Wheeler <input type="radio" name="vehicle" value="two">
                    Four Wheeler <input type="radio" name="vehicle" value="four">
								</div><br>
								<div class="form-group">
										<!--label>Email &nbsp</label>
										<label class="switch">
										<input id="contact" name="contact" type="checkbox" checked=true>
										<span class="slider round"></span>
										</label>
										<label>&nbsp Mobile </label-->
                    <input type="radio" name="contact" value="mobile"> Mobile
                    <input type="radio" name="contact" value="email"> Email
										<input type="text" name="contact_val" class="Form-control text" placeholder= "Enter Details">
								</div>
								<div class="form-group">
									<input type="Submit" class="btn btn-success formbtn" value="Submit">
									<input type="Reset" class="btn btn-danger formbtn" value="Reset">
					</form>
								</div>
		</div>
			</div>
			</div>
			</center>
  </body>
</html>
