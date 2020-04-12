<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Homepage</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/css/uikit.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit-icons.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">

  <script src="js.js"></script>
</head>
<body>

  <ul>
    <li><a class="active" href="studentpage.php">Home</a></li>
    <li><a href="taketest.php">Take Test</a></li>
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
<div id="homepage" class="page">
  <img src="njitlogo.jpg" width="200px";height="200px";>
  <h2 style="font-family:palatino;color:red;">Welcome to the Student Homepage</h2>

  <p style="color:black;font-size:25px;">The purpose of this page is for you to take tests created by your professor.</p>
  <p style="color:black;font-size:25px;">You are unable to view your result until the professor releases it to you.</p>

</div>

</body>
</html>
