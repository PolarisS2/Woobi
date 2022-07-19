<?php
session_start();

$host = "localhost";
$user = "polariss2";
$password = "tjdqls123!@#";
$db = "polariss2";

$conn = mysqli_connect($host,$user,$password,$db);

// print_r($conn);
// $servername = "localhost";
// $username = "polariss2";
// $password = "tjdqls123!@#";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// $servername = "localhost"; //호스트
// $uswername = "username" //계정
// $password = "password" //비번

/*
include_once --> 한번만 부른다
$_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/_con.php   루트다음 경로를 적어주면 된다

*/

?>