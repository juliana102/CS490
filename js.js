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
function submitExam(event){
	event.preventDefault();

	if(question_count == 0){
		document.getElementById("status").innerHTML = "No questions have been Added";
	}
	else{
		var test_name = document.getElementById("test_name").value;
		ajaxCallCreateTest(test_name);
	}

}
function makeExam() {
      var version = "makeExam"
      if (document.getElementById("testname").value == "") {
        document.getElementById("alert").innerHTML = "You forgot to add a Testname";
        return;
      }
      total = "version=" + version + "&testname=" + document.getElementById("testname").value;
      //1 means that this post is meant to search the database

      count = 0;
      var points = 0;
      var constraint = "";
      var h = 1;
      for (var i = 1; i < 6; i++) {
        if (document.getElementById("q" + i).value == "" && document.getElementById("q" + i + "points").value != "") {
          document.getElementById("alert").innerHTML = "Question " + i + " field is blank. Add or remove question";
          //exit();
          return;
        }
        if (document.getElementById("q" + i).value != "") {
          if (document.getElementById("q" + i + "points").value == "" || parseInt(document.getElementById("q" + i + "points").value) < 1 || parseInt(document.getElementById("q" + i + "points").value) > 100) {
            document.getElementById("alert").innerHTML = "Question " + i + " invalid. Please examine points or remove question";
            //exit();
            return;
          }
          count++;
          points += parseInt(document.getElementById("q" + i + "points").value);
          //total += "&question"+count+"number="+document.getElementById("q"+i).value;
          total += "&question" + count + "number=" + document.getElementById("q" + i).value + "&question" + count + "points=" + document.getElementById("q" + i + "points").value;
          var x = 5 * i;

        }
      }
      if (count < 3) {
        document.getElementById("alert").innerHTML = "you created " + count + " question(s), you need to make at least 3";
        return;
        //exit();
      }
      if (points < 100) {
        document.getElementById("alert").innerHTML = document.getElementById("testname").value + " is currently " + points + "/100. Please add " + (100 - points) + " points.";
        return;
        //exit();
      }
      else if (points > 100) {
        document.getElementById("alert").innerHTML = document.getElementById("testname").value + " is currently " + points + "/100. Please subtract " + (points - 100) + " points or remove questions.";
        return;
        //exit();
      }
      //alert(total);
      p1 = document.getElementById("p1").value;

      p2 = document.getElementById("p2").value;

      p3 = document.getElementById("p3").value;

      p4 = document.getElementById("p4").value;

      p5 = document.getElementById("p5").value;

      p6 = document.getElementById("p6").value;

      r1 = document.getElementById("r1").value;

      r2 = document.getElementById("r2").value;

      r3 = document.getElementById("r3").value;

      r4 = document.getElementById("r4").value;

      r5 = document.getElementById("r5").value;

      r6 = document.getElementById("r6").value;

      questionCat = document.getElementById("questionCat").value;
           questionDiff = document.getElementById("questionDiff").value;
           total = "version=".concat(version, "&Question=", Question, "&p1=", encodeURIComponent(p1), "&r1=", encodeURIComponent(r1), "&p2=", encodeURIComponent(p2), "&r2=", encodeURIComponent(r2), "&p3=", encodeURIComponent(p3), "&r3=", encodeURIComponent(r3), "&p4=", encodeURIComponent(p4), "&r4=", encodeURIComponent(r4), "&p5=", encodeURIComponent(p5), "&r5=", encodeURIComponent(r5), "&p6=", encodeURIComponent(p6), "&r6=", encodeURIComponent(r6), "&questionCat=", questionCat, "&questionDiff=", questionDiff);
           total += "&constraint1=\"";
           for (var i = 1; i < 6; i++) {
             if (document.getElementById("check" + i).checked == true) {
               total += "True,";
             }
             else {
               total += "False,";
             }
           }
           total += "\"";
/* function populateQDB(response){
	questionDB = JSON.parse(response);
 console.log(questionDB);
	var table = document.getElementById("question_table");
 table.innerHTML="";
	for (var i in questionDB){
		var tr = document.createElement("tr");
		var question_id_td = document.createElement("td");
		var question_id = document.createTextNode(i);
		question_id.id = "id_"+questionDB[i];
		question_id_td.appendChild(question_id);

		var question_name_td = document.createElement("td");
		var question_name = document.createTextNode(questionDB[i]['functionName']);
		question_name_td.appendChild(question_name);


		var difficulty_td = document.createElement("td");
		var difficulty = document.createTextNode(questionDB[i]['difficulty']);
		difficulty_td.appendChild(difficulty);

		var topic_td = document.createElement("td");
		var topic = document.createTextNode(questionDB[i]['topic']);
		topic_td.appendChild(topic);

		var question_text_td = document.createElement("td");
		var question_text = document.createTextNode(questionDB[i]['question']);
		question_text_td.appendChild(question_text);

		var add_td = document.createElement("td");

		if (questions_added == 0){
		add_td.innerHTML = '<div class="text-center" ><input class="tiny-button" type="button" value="Add" onClick="addQuestion('+i+')" id="question_to_add_'+i+'"></div>'
		} else {
			var flag = false;
			for (var j in questions_added){
				if (i == j){
					flag = true;
				}
			}
			if (flag == true) {
			add_td.innerHTML = '<div class="text-center" ><input class="tiny-button" type="button" disabled value="Add" onClick="addQuestion('+i+')" id="question_to_add_'+i+'"></div>'
			} else {
			add_td.innerHTML = '<div class="text-center" ><input class="tiny-button" type="button" value="Add" onClick="addQuestion('+i+')" id="question_to_add_'+i+'"></div>'
			}
		}

		tr.appendChild(question_id_td);
		tr.appendChild(question_name_td);
		tr.appendChild(difficulty_td);
		tr.appendChild(topic_td);
		tr.appendChild(question_text_td);
		tr.appendChild(add_td);

		table.appendChild(tr);
	}
} */
/* function test(item) {
  var operand1 = parseFloat($('#field_results').val());
  var operand2 = 0;
  var result;

  $('input:checked').each(function() {
    operand1 = parseInt($(this).val())
    operand2 += operand1;

  });
  result = operand2;

  $('#Totalcost').html(result);
} */
function calculate(){
  var field1=document.getElementById('num1').value;
  var field2=document.getElementById('num2').value;
  var field3=document.getElementById('num3').value;
  var result= parseFloat(num1)+parseFloat(num2)+parseFloat(num3);
  if(!isNaN(result)){
  document.getElementById('answer').innerHTML= result;
}
