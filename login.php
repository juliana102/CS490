<?php
session_start();

function curl($url, $arr) {
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, count($arr));
  curl_setopt($ch,CURLOPT_POSTFIELDS, $arr);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = trim( curl_exec($ch) );
  curl_close($ch);
  return $response;
}

  echo "UCID: ", $_SESSION['ucid'];
}

?>
