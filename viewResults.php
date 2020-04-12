<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Student Results</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/css/uikit.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit-icons.min.js"></script>
	<script type="text/javascript" src="StudentScores.js"></script>
</head>

<body style="background-color:white">
<body onload="makeRequest('ViewGrades.php')">
	<ul>
    <li><a href="studentpage.php">Home</a></li>
    <li><a href="taketest.php">Take Test</a></li>
    <li><a class="active" href="viewResults.php">View Results</a></li>
    <li><a href="javascript:logOut()">Logout</a></li>
  </ul>
	<script>
	function logOut(){
			console.log("Log out");
			window.localStorage.removeItem('username');
			window.localStorage.removeItem('type')
			window.location.replace('https://web.njit.edu/~jac323/index.php');
	}
	</script>
<h1>Find Your Released Scores Here!</h1>

<div id="test"></div>
<div class="container-body">

</div>
