<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/_con.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/_lib.php";

$genreName = $_POST["genreName"];

$sql = "INSERT INTO Genre (name) VALUES ('$genreName')";

if ($conn1->query($sql) === TRUE){
    gotoUrl('index.php');

}else{
    errHandler('index.php',$conn1->error);

}
?>