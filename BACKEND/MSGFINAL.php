<?php
$curl = curl_init();

$authkey="263320AOQzBK0rgcpr5c6847d7";
$mobile="917227875933";
$message="Welcome to WHERE2PARK, Your Password is 1234";
$sender="W2PARK";
$otp="1234";
$url="http://api.msg91.com/api/sendotp.php?authkey=".$authkey."&mobile=".$mobile."&message=".$message."&sender=".$sender."&otp=".$otp;

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
