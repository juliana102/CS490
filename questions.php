<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>Create Questions</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/css/uikit.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit-icons.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
<script src="js.js"></script>
  <script type="text/javascript">
function addRow(){
  var name = document.getElementById('functionName').value;
  var difficulty = document.getElementById('diff').value;
  var topic = document.getElementById('type').value;
  var question = document.getElementById('question').value;
  var table = document.getElementsByTagName('table')[0];
  var newRow=table.insertRow(1);
  var cel1 = newRow.insertCell(0);
  var cel2 = newRow.insertCell(1);
  var cel3 = newRow.insertCell(2);
  var cel4 = newRow.insertCell(3);

  cel1.innerHTML = topic;
  cel2.innerHTML = difficulty;
  cel3.innerHTML = name;
  cel4.innerHTML = question;
}
</script>
</head>
<body>
  <ul>
    <li><a href="instructor.php">Home</a></li>
    <li><a href="createtest.php">Create Test</a></li>
    <li><a class="active" href="questions.php">Create Questions</a></li>
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
  document.getElementById("first").addEventListener("change"),newFunction;
  function newFunction(){
    var z = document.getElementById("first");
    z.value = z.value.toUpperCase();
  }
  </script>
  <div class="row no-gutters">

    <div class="col-md-6 no-gutters">

      <div class="leftside">
<h1 style="font-size:27px">Create Your Own Questions</h1>
<form class="uk-form-horizontal uk-margin-large" name="create_question">

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text" name="functionName">Function Name</label>
        <div class="uk-form-controls">
            <input class="uk-input" name="functionName" id="functionName" type="text" placeholder="Enter name..." required="required">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Choose Difficulty</label>
        <div class="uk-form-controls">
            <select class="uk-select" name="diff" id="diff">
                <option>Select</option>
                <option>Easy</option>
                <option>Medium</option>
                <option>Hard</option>
            </select>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Question Topic</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="type" name="type">
                <option>Select</option>
                <option>Arrays</option>
                <option>Strings</option>
                <option>Conditionals</option>
                <option>Loops</option>
                <option>List</option>
                <option>Functions</option>
            </select>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Choose Constraint</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="const" name="const" required="required">
                <option>No Constraint</option>
                <option>For</option>
                <option>While</option>
                <option>Print</option>
            </select>
        </div>
    </div>

    <div class="uk-margin">
              Description: <textarea class="uk-textarea" id="question" name="question" rows="5" placeholder="Write a function named___that takes arguments____does_____and returns(or prints) the result" required="required"></textarea>
          </div>
          <center><h2>Test Cases</h2></center>
          <div class="uk-margin" style="text-align:center">
              Input 1: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="TestCase1" value="" required="required">
              Output 1: <input class="uk-input uk-form-success uk-form-width-medium" type="text"  name="Test_case1" value="" required="required">
          </div>
          <div class="uk-margin" style="text-align:center">
              Input 2: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="TestCase2" value="" required="required">
              Output 2: <input class="uk-input uk-form-success uk-form-width-medium" type="text" name="Test_case2" value="" required="required">
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

</form>

  <p id="demo"></p>
  <div style="text-align:center">
  <button class="uk-button uk-button-primary uk-button-large" id="submit" type="submit" onclick="makeRequestData('create_question.php')">Submit</button><br><br>
  <button class="uk-button uk-button-primary uk-button-large" type="button" onclick="addRow();">Add Question</button>

</div>
      </div>
    </div>
    <div class="col-md-6 no-gutters">

        <div style="color:white;"class="rightside">
          <center><h1>Question Bank</h1></center>
          <div class="uk-margin" style="text-align:center">
    <form class="uk-search uk-search-default">
        <a href="" uk-search-icon></a>
        <input class="uk-search-input" id="myInput" onkeyup="myFunction()" type="search" placeholder="Search...">
    </form>
</div>
          <div class="input-group mb-3">
          <form>
            <table class="uk-table" id="question_table">
        <tr class="header">
            <th>Topic</th>
            <th>Difficulty</th>
            <th>Name</th>
            <th>Question</th>
        </tr>
        <tr>
            <td>Arrays</td>
            <td>Medium</td>
            <td>Swap</td>
            <td>Write a function named swapPos that takes arguments 'list','pos1','pos2' and swaps the second and fourth element in list[5,9,11,23]and prints the result.</td>
        </tr>
        <tr>
            <td>Strings</td>
            <td>Medium</td>
            <td>Not</td>
            <td>Write a function named not_string that takes argument str and adds 'not' to the front of the given string, unless the string already begins with 'not' then return the string unchanged.</td>
        </tr>
        <tr>
            <td>Conditionals</td>
            <td>Easy</td>
            <td>hello</td>
            <td>Write a function named hello_there that takes parameters a_hello and b_hello that returns true if both a and b are saying hello or if neither of them are. Return false otherwise.</td>
        </tr>
        <tr>
          <td>Functions</td>
          <td>Easy</td>
          <td>sum</td>
          <td>Write a function named sum that takes arguments x,y and returns the sum of two numbers.</td>
        </tr>
        <tr>
          <td>Loops</td>
          <td>Medium</td>
          <td>count</td>
          <td>Write a function named count that takes two arguments sequence and item that returns the number of times the item occurs in the list.</td>
        </tr>
        <tr>
          <td>Functions</td>
          <td>Easy</td>
          <td>mult</td>
          <td>Write a function named mult that takes parameters a,b,c and prints the product of those three numbers.</td>
        </tr>
        <tr>
          <td>Strings</td>
          <td>Hard</td>
          <td>appendMiddle</td>
          <td>Write a function named appendMiddle that takes arguments s1 and s2 and creates a new string by appending s2 in the middle of s1 then prints that new string.</td>
        </tr>
        <tr>
          <td>Strings</td>
          <td>Hard</td>
          <td>findAll</td>
          <td>Write a function named findAll that takes an input string as its argument and counts all lowercase,uppercase,digits,and special symbols.Then prints the counts.</td>
        </tr>
        <tr>
          <td>Loops</td>
          <td>Medium</td>
          <td>list_len</td>
          <td>Write a function named list_len that takes a list as a parameter and returns the number of items in the list.</td>
        </tr>
        <tr>
          <td>Loops</td>
          <td>Hard</td>
          <td>digit_sum</td>
          <td>Wrtie a function called digit_sum that takes a positive integer n as input and returns the sum of all that number's digits.</td>
        </tr>
        <tr>
          <td>Loops</td>
          <td>Hard</td>
          <td>factorial</td>
          <td>Write a function named factorial that takes a non-negative integer x that can multiply all the integers from 1 through x,then returns it.</td>
        </tr>
        <tr>
          <td>List</td>
          <td>Easy</td>
          <td>total</td>
          <td>Write a function called total that takes numbers as its argument and adds up all the elements of an arbitrary list and returns that count.</td>
        </tr>
</table>
      </form>
      <script>
      function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("question_table");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
        for (i = 1; i < tr.length; i++) {

          tr[i].style.display = "none";

          td = tr[i].getElementsByTagName("td");
          for (var j = 0; j < td.length; j++) {
            cell = tr[i].getElementsByTagName("td")[j];
            if (cell) {
              if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                break;
              }
            }
          }
        }
      }
    </script>

        </div>
    </div>
</body>
</html>
<!--onclick="makeRequestData('createquestion.php') -->
