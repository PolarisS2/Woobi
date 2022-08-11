function readMessage() {
  //ajax
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //web worker
      postMessage(this.responseText);
    }
  };
  xmlhttp.open("GET","review_text_ok.php",true);
  xmlhttp.send();
  setTimeout(readMessage, 3000);
}

readMessage();