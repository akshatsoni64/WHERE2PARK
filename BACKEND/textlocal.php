<?php
  // Account details
	$apiKey = urlencode('266aiymUMbM-H1g86tJ5ArEM4M1pwqcAKeR3dvrNFb'); //Enter Your API Key here //266aiymUMbM-H1g86tJ5ArEM4M1pwqcAKeR3dvrNFb

	// Message details
	$numbers = array(918487973385);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('This is your message');

	$numbers = implode(',', $numbers);

	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);

	// Process your response here
	print_r($response);

  /*require('SNIPPETS/Textlocal.class.php');

  $Textlocal = new Textlocal(false, false, 'your apiKey');

  $numbers = array(918123456789);
  $sender = 'TXTLCL';
  $message = 'This is your message';

  $response = $Textlocal->sendSms($numbers, $message, $sender);
  print_r($response);*/
?>
