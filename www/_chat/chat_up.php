<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/_lib/_con.php";
// include_once $_SERVER["DOCUMENT_ROOT"]."/_lib/lib.php";

$userName = $_POST["userName"];
$word = $_POST["word"];

$sql = "insert into chat (id,word) values('$userName','$word')";
if($conn1 ->query($sql) !== TRUE){
    echo "<script>alert('ERROR');</script>";
}



?>