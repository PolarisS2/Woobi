<?php
$servername = "localhost";
$username = "polariss2";
$password = "tjdqls123!@#";
$db = "polariss2";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM Author";

$res = $conn-> query($sql);
while($row = $res->fetch_assoc()){
    
}

var_dump(($row));
?>