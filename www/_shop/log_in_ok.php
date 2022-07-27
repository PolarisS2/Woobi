<?php
include("common.php");

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "
SELECT no,id,pw,name 
FROM shop
where id = '$id'";

$res = $conn -> query($sql);

$db_pw = mysqli_fetch_assoc($res);

if($db_pw){
    if($pw == $db_pw['pw']){
    $_SESSION['no'] = $db_pw['no'];
    $_SESSION['pw'] = $db_pw['pw'];
    $_SESSION['id'] = $db_pw['id'];
    $_SESSION['name'] = $db_pw['name'];
    
    echo"
    <script>
    location.href='/_shop/index.php';
    </script>
    ";


    }else{
        echo"
        <script>
        alert('비밀번호가 다릅니다');
        history.back()
        </script>
        ";
    }
}
    else{
        echo"
        <script>
        history.back()
        </script>
        ";
    }


?>