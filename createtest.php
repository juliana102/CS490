<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Create Exam</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/css/uikit.min.css" />
<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit-icons.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="style.css">
</head>
<body onload="makeRequest('get_questions.php');">
  <script src="js.js" type="text/javascript"></script>
  <ul>
    <li><a href="instructor.php">Home</a></li>
    <li><a class="active" href="createtest.php">Create Test</a></li>
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
function dragStart(event) {
  event.dataTransfer.setData("Text", event.target.id);
  document.getElementById("demo").innerHTML = "Started to drag the p element";
}

function allowDrop(event) {
  event.preventDefault();
}

function drop(event) {
  event.preventDefault();
  var data = event.dataTransfer.getData("Text");
  event.target.appendChild(document.getElementById(data));
  document.getElementById("demo").innerHTML = "The p element was dropped";
}
</script>

  <div class="row no-gutters">

    <div class="col-md-6 no-gutters">

      <div class="leftside">
        <h1>Create Exam</h1>
        <form method="POST"  action="create_exam.php">
         <div class="uk-margin">
         <div class="uk-inline">
            <a class="uk-form-icon" href="#" uk-icon="icon: pencil"></a>
            <input class="uk-input" name="testname" id="testname" type="text" placeholder="Enter exam name.." required="required">
        </div>
    </div>
    <div style="text-align:center"><label for="test_questions">Drag questions here:</label></div>
        <div class="droptarget" style="height:300px; width:600px"ondrop="drop(event)" ondragover="allowDrop(event)" name="test_questions"></div><br><br><br><br><br>

<br><br><br><br><br><br><br><br><br>

         <br><br><br><div class="caseDiv">
           <center><h2>Test Cases</h2></center>
           <div class="uk-margin" style="text-align:center">
               Input 1: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="TestCase1" value="" required="required">
               Output 1: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="Test_case1" value="" required="required">
           </div>
           <div class="uk-margin" style="text-align:center">
               Input 2: <input class="uk-input uk-form-success uk-form-width-medium" type="text" value="" name="TestCase2" required="required">
               Output 2: <input class="uk-input uk-form-success uk-form-width-medium" type="text"  value="" name="Test_case2" required="required">
           </div>
           <div class="uk-margin" style="text-align:center">
               Input 3: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="TestCase3" value="">
               Output 3: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="Test_case3" value="">
           </div>
           <div class="uk-margin" style="text-align:center">
               Input 4: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="TestCase4" value="">
               Output 4: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="Test_case4" value="">
           </div>
           <div class="uk-margin" style="text-align:center">
               Input 5: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="TestCase5" value="">
               Output 5: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="Test_case5" value="">
           </div>
           <div class="uk-margin" style="text-align:center">
               Input 6: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="TestCase6" value="">
               Output 6: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="Test_case6" value="">
           </div>
      </div>

         <div style="text-align:center">
         <button class="uk-button uk-button-primary uk-button-large" name="submit_exam" type="submit" onclick="makeRequestData('create_exam.php')">Create</button><br><br>
       </div>
     </form>
      </div>
    </div>
    <div class="col-md-6 no-gutters">

      <div style="color:white;"class="rightside">
        <center><h1 style="font-size:30px">Question Bank</h1></center>

        <div class="uk-margin" style="text-align:center">
  <form class="uk-search uk-search-default">
      <a href="" uk-search-icon></a>
      <input class="uk-search-input" id="myInput" onkeyup="search_questions();" type="search" placeholder="Search...">
  </form>
</div>
        <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)" name="easy" style="width:90%; height:300px">
          <center><label style="color:green">Easy</label></center>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget1" class="question"><input type="number" name="points"  style="width:30px">Write a function named hello_there that takes arguments a_hello and b_hello that returns true if both a and b are saying hello or if neither of them are.Return false otherwise.[Conditional] </p>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget2" class="question"><input type="number" name="points"  style="width:30px">Write a function named sum that returns the sum of two numbers. [Functions]</p>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget3" class="question"><input type="number" name="points"  style="width:30px">Write a function named mult that takes parameters a,b,c and prints the product of those three numbers. [Functions]</p>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget4" class="question"><input type="number" name="points"  style="width:30px">Write a function called total that takes numbers as its argument and adds up all the elements of an arbitrary list and returns that count. [List]</p>
        </div>
        <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)" name="medium" style="width:90%; height:300px">
          <center><label style="color:yellow">Medium</label></center>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget5" class="question"><input type="number" name="points"  style="width:30px">Write a function named swapPos that takes arguments 'list','pos1','pos2' and swaps the second and fourth element in list[5,9,11,23] and prints the result. [Arrays]</p>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget6" class="question"><input type="number" name="points"  style="width:30px">Write a function named not_string that takes argument str and adds 'not' to the front of the string, unless the string already begins with 'not' then return the string unchanged. [Strings]</p>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget7" class="question"><input type="number" name="points"  style="width:30px">Write a function named list_len that takes a list as a parameter and returns the number of items in the list. [Loops]</p>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget8" class="question"><input type="number" name="points"  style="width:30px">Write a function named count that takes two arguments sequence and item that returns the number of times the item occurs in the list. [Loops]</p>
        </div>
        <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)" name="hard" style="width:90%; height:300px">
          <center><label style="color:red">Hard</label></center>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget9" class="question"><input type="number" name="points"  style="width:30px">Write a function named appendMiddle that takes arguments s1 and s2 and creates a new string by appending s2 in the middle of s1 then prints that new string. [Strings]</p>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget10" class="question"><input type="number" name="points"  style="width:30px">Write a function named findAll that takes an input string as its argument and counts all lowercase,uppercase,digits,and special symbols.Then print the counts. [Strings]</p>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget11" class="question"><input type="number" name="points"  style="width:30px">Write a function called digit_sum that takes a positive integer n as input and returns the sum of all that number's digits. [Loops]</p>
          <p ondragstart="dragStart(event)" draggable="true" id="dragtarget12" class="question"><input type="number" name="points"  style="width:30px">Write a function named factorial that takes a non-negative integer x that can multiply all the integers from 1 through x then returns it. [Loops]</p>
        </div>

	<script src="js.js" type="text/javascript"></script>
  <script>
   function search_questions() {
        let input = document.getElementById('myInput').value
        input=input.toLowerCase();
        let x = document.getElementsByClassName('question');

        for (i = 0; i < x.length; i++) {
            if (!x[i].innerHTML.toLowerCase().includes(input)) {
                x[i].style.display="none";
            }
            else {
                x[i].style.display="item";
            }
        }
    }
  </script>
        </div>
      </div>

    </div>
</body>
</html>
