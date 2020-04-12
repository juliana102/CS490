<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['U']) || empty($_POST['P'])) {
$error = "UCID or Password is invalid";
}
else
{

$ucid=$_POST['U'];
$password=$_POST['P'];
$json = array('UCID' => $ucid, 'password' => $password);
$data = json_encode($json);
echo $data;
$crl = curl_init();
curl_setopt($crl, CURLOPT_URL, "https://web.njit.edu/~pz89/final.php");
curl_setopt($crl, CURLOPT_POST, 1);
curl_setopt($crl, CURLOPT_POSTFIELDS, $data);
curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
$c=(curl_exec($crl));
echo $c;
if ($c==1){
	$_SESSION['login_user']=$ucid;
	$crl = curl_init();
	curl_setopt($crl, CURLOPT_URL, "/Professor/session.php");
	curl_setopt($crl, CURLOPT_POST, 1);
	curl_setopt($crl, CURLOPT_POSTFIELDS, $_SESSION['login_user']);
	curl_setopt($crl, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
	header("location: https://web.njit.edu/~jac323/instructor.php");


	}
	elseif ($c==0){
		$_SESSION['login_user']=$ucid;
		header("location: https://web.njit.edu/~jac323/studentpage.php");

		}
		else{
			$_SESSION['login_user']=$ucid;
			header("location: index.php");
			echo "Invalid Login";
			}

}
}

?>
