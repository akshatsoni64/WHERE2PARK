$(document).ready(function()
{
  $("#w2p_register").on('submit',function(event)
  {
    event.preventDefault();
    console.log("submitting..");
    var formdata=new FormData(this);
    formdata.append('submit-register','submit-register');

    $.ajax({
      url:"server.php",
      method:"post",
      contentType: false,
			cache: false,
			processData:false,
			data: formdata,
			success:function(data){
        alert(" Slot Registered Successfully");
        $(location).attr('href',"thanku.php");
			}
    });
  });
  $("#w2p_login").on('submit',function(event)
  {
    event.preventDefault();

    console.log("submitting..");
    var formdata=new FormData(this);
    formdata.append('submit-login','submit-login');

    $.ajax({
      url:"server.php",
      method:"post",
      contentType: false,
			cache: false,
			processData:false,
			data: formdata,
			success:function(data){
        alert("Slot Vacated Successfully");
        $(location).attr('href',"index.php");
			}
    });
  });
});
