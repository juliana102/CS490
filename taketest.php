<?php
include('session.php');
?>
<html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Take Test</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/css/uikit.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit-icons.min.js"></script>
  <script src="js.js"></script>
  <script type="text/javascript" src="take_studentTest.js"></script>
</head>
<body onload="makeRequest('student_test.php');" style="background-color:white">
  <ul>
    <li><a href="studentpage.php">Home</a></li>
    <li><a class="active" href="taketest.php">Take Test</a></li>
    <li><a href="viewResults.php">View Results</a></li>
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
  <h1>Find Your Available Tests Here</h1>
<div id="test"></div>
        <button class="uk-button uk-button-primary uk-button-large" type="submit" onclick="makeRequestData('submit_exam.php')">Submit</button>
  </body>
  </html>
