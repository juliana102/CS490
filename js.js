var testname = window.localStorage.getElementById('testname').innerHTML;
alert(testname);

function logOut(){
    console.log("Log out");
    window.localStorage.removeItem('username');
    window.localStorage.removeItem('type')
    window.location.replace('https://web.njit.edu/~jac323/index.php');
}
function loggedInTeacher(){
    var user = window.localStorage.getItem('username');
    var role = window.localStorage.getItem('type');
    console.log(user);
    if(role == null)
        window.location.replace("https://web.njit.edu/~jac323/index.php");
    if(role == "student")
        window.location.replace("https://web.njit.edu/~jac323/studentpage.html")
    var role = window.localStorage.getItem('role');
    document.getElementById("userid").innerHTML = "User: "+user
}
function loggedInStudent(){
    var user = window.localStorage.getItem('username');
    var role = window.localStorage.getItem('type');
    console.log(user);
    if(role == null)
        window.location.replace("https://web.njit.edu/~jac323/index.php");
    if(role == "teacher")
        window.location.replace("https://web.njit.edu/~jac323/instructor.html")
    var role = window.localStorage.getItem('role');
    document.getElementById("userid").innerHTML = "User: "+user
}
function select(){
var input = document.getElementById('dflag').value;
document.querySelectorAll('tr').forEach(element=>{
element.style.display = "table-row";
})

document.querySelectorAll('tr:not(.'+input+')').forEach(element=>{
element .style.display = "none";
})
}

function selectFour() {
  var input = document.getElementById("tflag").value;
  var nodes = document.getElementsByTagName('tr');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(input)) {
      nodes[i].style.display = "tr";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
