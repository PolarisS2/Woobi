<html>
<body>

<form method="post" action="take.php">
  ID : <input type="text" name="fname">
  <br>
  PW : <input type="text" name="fname2">
  <br>
  <input type="submit">
</form>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['fname2'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['fname2'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
    }
?>


</body>
</html>