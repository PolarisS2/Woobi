<!DOCTYPE html>
<html>
<body>
<form action="chat_up.php" target="up" method="post">
    <input type="text" name="word" style="width: 100%;"placeholder="내용">
    <input type="text" name="userName" style="width: 100px;" placeholder="이름">
    <input type="submit" value="전송">

</form>
<iframe name="up"></iframe>
<style>
    iframe{
        width: 0;
        height: 0;
        opacity: 0;
    }
</style>




<script>
var w;
function startWorker() {
  if (typeof(Worker) !== "undefined") {
    if (typeof(w) == "undefined") {
      w = new Worker("worker.js");
    }
    w.onmessage = function(event) {
      document.getElementById("result").innerHTML = event.data;
    };
  } else {
    document.getElementById("result").innerHTML = "Sorry! No Web Worker support.";
  }
}

function stopWorker() {
  w.terminate();
  w = undefined;
}
startWorker();

</script>

</body>
</html>