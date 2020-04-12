<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Professor Homepage</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/css/uikit.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit-icons.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="ReleaseScores.js"></script>
</head>
  <body>
<script src="js.js"></script>
  <ul>
    <li><a class="active" href="instructor.php">Home</a></li>
    <li><a href="createtest.php">Create Test</a></li>
    <li><a href="questions.php">Create Questions</a></li>
    <li><a href="grade.php">Grade Tests</a></li>
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
<center><img src="njitlogo2.png" height="147px" width="230px"></center>
<div id="homepage" class="page">
<h1>Welcome Professor!</h1>
<hr>
<p style="color:black;">On here you can create tests and questions, grade manually, or adjust auto grades with comments.<br>
Students will not see their grade until you release it to them.
<br><br></p>
<button class="uk-button uk-button-primary uk-button-large" id="releaseScores" onclick="releaseScores('releaseScores.php')">Release Scores</button>
<div id="released"></div>
</body>
</html>
