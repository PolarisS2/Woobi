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


// $servername = "localhost"; //ȣ��Ʈ
// $uswername = "username" //����
// $password = "password" //���

/*
include_once --> �ѹ��� �θ���
$_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/_con.php   ��Ʈ���� ��θ� �����ָ� �ȴ�

*/

?>