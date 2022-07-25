<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/_lib/_con.php";


$q = $_GET["q"];

$sql ="SELECT id FROM Users WHERE userId = '$q'";

$res = $conn1->query($sql);

echo $res->num_rows;

?>