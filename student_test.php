<?php
  $json = json_decode(file_get_contents('php://input'));
  $crl = curl_init();
  curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~");
	curl_setopt($crl, CURLOPT_POST, 1);
  curl_setopt($crl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
  $c=json_decode(curl_exec($crl));
	echo json_encode($c);
?>
