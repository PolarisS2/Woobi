<?php
include("common.php");

$title = $_SESSION['title'];

$sql =  "select no, title, creater, day
        from border
        where title = '$title'
";

$result = $conn -> query($sql);

echo $result;













?>