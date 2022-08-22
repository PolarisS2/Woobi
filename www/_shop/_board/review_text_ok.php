<?php
include_once("../common.php");
$word = $_POST["word"];
$id = $_SESSION['id'];

$sql = "insert into chat set
id = '$id',
word = '$word'
";
$result=$conn ->query($sql);
$data = mysqli_fetch_assoc($result);
if($result !== TRUE){
    echo "<script>alert('ERROR');</script>";
}else{
    
}



?>