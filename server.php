<?php
  session_start();

  $db=mysqli_connect("localhost","root","","where2park");

  if(isset($_POST['submit-register']))
  {
    echo "<script>console.log('submit..')</script>";

    $_SESSION['contact']=$_POST['contact_val'];
    $vehicleType=$_POST['vehicle'];
    //echo $vehicleType;
    $contactType=$_POST['contact'];

    $contact=$_POST['contact_val'];
    $sql="insert into userInfo(info,typeinfo) values('".$contact."','".$contactType."')";
    mysqli_query($db,$sql);
    $sql_block="select * from block where status='0' AND type='".$vehicleType."'";
    $result=mysqli_query($db,$sql_block);
    $record=mysqli_fetch_assoc($result);
    $r_id=$record['id'];
    $slotno=$record['slot_no'];
    $updateSql="update block set status=1 where id='".$r_id."'";
    mysqli_query($db,$updateSql);
    $sql="select uid from userinfo where info='".$contact."'";
    $res=mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($res))
    {
      $uid=$row['uid'];
    }
    $sql="update block set uid='".$uid."' where slot_no='".$slotno."'";
    echo $sql;
    mysqli_query($db,$sql);
    $_SESSION['slotno']=$slotno;
    $pwd=rand(100000,999999);
    $url="www.way2sms.com/api/v1/sendCampaign";
    $message = urlencode("Welcome to WHERE2PARK, The alloted slot no. is ".$slotno." Your Password is ".$pwd);// urlencode your message
    $curl = curl_init();

    if($contactType=="mobile")
    {
      /*$apiKey="J9C72J8DC1W4NQH3GD5IFKTPNUK14ETC";
      $secretKey="IDUEZX5LOHAJMOWD";*/
      $apiKey="W9557FHEIKE4Q2GF52CAUUZW0C6EP7YZ";
      $secretKey="9W76RTAZTK9VGGBV";
      $userType="stage";
      $phone=$_SESSION['contact'];
      $sender="W2PARK";
      $postField="apikey=".$apiKey."&secret=".$secretKey."&usetype=".$userType."&phone=".$phone."&senderid=".$sender."&message=".$message;
      curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
      curl_setopt($curl, CURLOPT_POSTFIELDS, $postField);// post data
      // query parameter values must be given without squarebrackets.
       // Optional Authentication:
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      $result = curl_exec($curl);
      curl_close($curl);
      echo $result; //sms code ends here/
    }
    elseif($contactType=="email")
    {
      $mailto = $contact;
      $mailSub = "Verification WHERE2PARK";
      $mailMsg = "Welcome to WHERE2PARK, Your OTP is ".$pwd.", Alloted Slot No. is".$slotno;
       require 'LIB/PHPMailer-master/PHPMailerAutoload.php';
       $mail = new PHPMailer();
       $mail ->IsSmtp();
       $mail ->SMTPDebug = 0;
       $mail ->SMTPAuth = true;
       $mail ->SMTPSecure = 'ssl';
       $mail ->Host = "smtp.gmail.com";
       $mail ->Port = 465; // or 587
       $mail ->IsHTML(true);
       $mail ->Username = "noreply.where2park@gmail.com";
       $mail ->Password = "where2Park";
       $mail ->SetFrom("noreply.where2park@gmail.com");
       $mail ->Subject = $mailSub;
       $mail ->Body = $mailMsg;
       $mail ->AddAddress($mailto);

       if(!$mail->Send())
       {
           echo "Mail Not Sent";
       }
       else
       {
           echo "Mail Sent";
       }
    }
  }

  if(isset($_POST['submit-login']))
  {
    $contactType=$_POST['contact'];
    $contact_val=$_POST['contact_val'];
    $password=$_POST['password'];

    $sql="select * from userinfo where info='".$contact_val."' AND typeinfo='".$contactType."'";
    $result=mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($result)){
      if($password==$row['pwd'])
        //update the status
        $sql="update block set status=0 where uid='".$row['uid']."'";
        mysqli_query($db,$sql);
        echo mysqli_error($db);
    }
  }
?>
