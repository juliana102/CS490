
function releaseScores(url) {
  httpRequest = new XMLHttpRequest();

  if (!httpRequest) {
    alert('Cannot create an XMLHTTP instance');
    return false;
  }
    httpRequest.open('POST', url);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send();
}
