<?php 

include('common.php');
$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$age = $_POST['age'];

$sql = "insert into user set
        id = '$id',
        pw = '$pw',
        name = '$name',
        age = '$age'
        ";

$result = $conn -> query($sql);

if($result) {
    echo "
    <script>
        location.href='sign_in.php';
        alert('회원가입에 성공했습니다.');
    </script>
    ";
} else {
    echo "
    <script>
        alert('회원가입에 실패했습니다.');
        location.href='sign_up.php';
    </script>
    ";
}



?>