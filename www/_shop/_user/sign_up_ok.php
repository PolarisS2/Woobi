<?php
include("../common.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO shop SET
id = '$id',
pw = '$pw',
name = '$name',
email = '$email',
phone = '$phone'
";

$res = $conn->query($sql);

if($res){
    echo "
    <script>
    location.href='log_in.php';
    alert('회원가입에 성공했습니다.');
    </script>
    ";
}else{
    echo "
    <script>
    location.href='sign_up.php';
    alert('회원가입에 실패했습니다.');
    </script>
    ";

}



?>