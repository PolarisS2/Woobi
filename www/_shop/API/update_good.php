<?php 
// include('../common.php');
$host = "localhost";
$user = "polariss2";
$password = "tjdqls123!@#";
$db = "polariss2";
$conn = mysqli_connect($host,$user,$password,$db);

$no = $_GET['no'];

$cancle = $_GET['cancle'];

$sql = "update board set
        goodcount = goodcount + $cancle
        where no = $no";

$result = $conn -> query($sql);

$sql_count = "select 
                goodcount 
                from board
                where no = $no";
$result_count = $conn -> query($sql_count);
$data = mysqli_fetch_assoc($result_count);
$countValue = $data['goodcount'];
if($data) {
    // 중복    
    echo json_encode(array('result' => $countValue));
} else {
    // 중복이 아니다
    echo json_encode(array('result' => 'n'));
}

?>