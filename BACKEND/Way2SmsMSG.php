<?php
//post
$url="www.way2sms.com/api/v1/sendCampaign";
$message = urlencode("Hi I am from Way2SMS");// urlencode your message
$curl = curl_init();
/*
Live Keys-
API Key: M1MXIETGPBER9K7TOVGP8Q2UOWBZZCNY
Secret Key: TAOK4IK8NWKLXTRH
Testing Keys-
API Key: NO0XUX9N97435SWMUWC9OQV95US9CPUS
Secret Key: 2V9D4YU6Q1WQ146Z
*/
$apiKey="NO0XUX9N97435SWMUWC9OQV95US9CPUS";
$secretKey="2V9D4YU6Q1WQ146Z";
$userType="stage"; //stage for testing key prod for live key
$phone="917227875933";
//$phone="917623029499";
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
echo $result;
?>
