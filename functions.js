function formListener() {
  const searchSubmit = document.getElementById('login-form');


  searchSubmit.addEventListener('submit', (e) => {
    e.preventDefault();
    new FormData(searchSubmit);

  });
  saveSubmit.addEventListener('formdata', (e) => {
    let data = e.formData;
    console.log(data);

    var lst = document.getElementsByClassName("pts");
    data.append('reqid', '2');
    for(i=0;i<lst.length;i++){
        var temp = document.getElementById(lst[i].id).value;
        data.append(lst[i].id, temp)
    }


      //temp.getElementsByTagName('b')[0].innerHTML = "Question ".concat(i+1);
    let req = new XMLHttpRequest();
    req.addEventListener( 'load', reqListener1 );
    req.open("POST", "https://web.njit.edu/~cc593/back/save.php");
    req.send(data);

  });


  searchSubmit.addEventListener('formdata', (e) => {
    let data = e.formData;
    let req = new XMLHttpRequest();
    req.addEventListener( 'load', reqListener );
    req.open("POST", "https://web.njit.edu/~cc593/mid/mid.php");
    req.responseType = 'json';
    req.send(data);
});

function reqListener1 () {
  console.log(this.response);
}

  function reqListener () {
    var list = this.response;
    console.log((list));
    for(i=0;i<list.length;i++){
      console.log(list[i]);
    }
    var table =fn(list);
    var el = document.getElementById("divtable");
    el.appendChild(table);
  }
}



function fn(list){
  var table = document.createElement('div');
  table.setAttribute('class', 'rTable');
  for (var i = 0; i < list.length; i++){
    var row = document.createElement('div');
    row.setAttribute('class', 'rTableRow');
    row.setAttribute('id', 'i'.concat(list[i]["id"]));
    row.setAttribute('draggable', 'true');
    row.setAttribute('ondragstart', 'drag(event)');

    var id = document.createElement('div');
    id.setAttribute('class', 'rTableCell');
    id.textContent = list[i]["id"];

    var diff = document.createElement('div');
    diff.setAttribute('class', 'rTableCell');
    diff.textContent = list[i]["diff"];
    diff.setAttribute('id', 'd'.concat(list[i]["id"]));


    var q = document.createElement('div');
    q.setAttribute('class', 'rTableCell');
    q.textContent = list[i]["question"];
    q.setAttribute('id', 'qi'.concat(list[i]["id"]));



    row.appendChild(id);
    row.appendChild(diff);
    row.appendChild(q);

    table.appendChild(row);
  }
  return table;
}
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
  console.log(ev);
    ev.dataTransfer.setData("text", ev.target.id);
    console.log(ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    console.log(data)
    var a = document.getElementById(data);
    document.getElementById(data).innerHTML="";

  }

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "+ View Solution";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "- View Solution";
    moreText.style.display = "inline";
  }
}
function changeSize() {
    var el = document.getElementById("test");
    el.style.height = "100px";
    el.style.width = "100px";
}

function removecard(clicked_id){
  document.getElementById("a".concat(clicked_id)).remove
  console.log(clicked_id);

}
function selectThree() {
  var input = document.getElementById("dflag").value;
  var nodes = document.getElementsByClassName('rTableRow');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(input)) {
      nodes[i].style.display = "rTableRow";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
function selectFour() {
  var input = document.getElementById("tflag").value;
  var nodes = document.getElementsByClassName('rTableRow');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(input)) {
      nodes[i].style.display = "rTableRow";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
function AnotherOne() {
  var input = document.getElementById("key");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('rTableRow');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
