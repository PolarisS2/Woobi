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
        alert('ȸ�����Կ� �����߽��ϴ�.');
    </script>
    ";
} else {
    echo "
    <script>
        alert('ȸ�����Կ� �����߽��ϴ�.');
        location.href='sign_up.php';
    </script>
    ";
}



?>