<?php 
include('common.php');
$q = $_GET['q'];
$sql = "SELECT id 
        FROM shop 
        WHERE id = '$q'";
$result = $conn -> query($sql);
$data = mysqli_fetch_assoc($result);
if($data) {
    echo json_encode(array('result' => 'y'));
} else {
    echo json_encode(array('result' => 'n'));
}
?>