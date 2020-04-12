<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Review Student Results</title>
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/css/uikit.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
  <script type="text/javascript" src="ViewGrades.js"></script>
</head>
  <body style="background-color:white">
    <body onload="makeRequest('grades.php')">
  <ul>
    <li><a href="instructor.php">Home</a></li>
    <li><a href="createtest.php">Create Test</a></li>
    <li><a href="questions.php">Create Questions</a></li>
    <li><a class="active" href="grade.php">Grade Tests</a></li>
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
  <h1>Available Student Results</h1><br>
  <div style="text-align:center">
  <button class="uk-button uk-button-primary uk-button-large" id="releaseScores" onclick="releaseScores('final_results.php')">Done</button> </div>
  <div id="released"></div>
  <div id="test"></div>

</body>
</html>
