<?php
$crl = curl_init();
curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~");
curl_setopt($crl, CURLOPT_POST, 1);
curl_setopt($crl, CURLOPT_POSTFIELDS);
curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);

$c=(curl_exec($crl));

echo $c;
?>
