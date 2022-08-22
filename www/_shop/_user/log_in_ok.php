<?php
include("../common.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
$no = $_POST['no'];
$sql = "
SELECT id,pw,name,no 
FROM shop
where id = '$id'";
$res = $conn -> query($sql);
$db_pw = mysqli_fetch_assoc($res);
if($db_pw){
    if($pw == $db_pw['pw']){
        $_SESSION['id'] = $db_pw['id'];
        $_SESSION['pw'] = $db_pw['pw'];
        $_SESSION['name'] = $db_pw['name'];
        echo"
        <script>
        location.href='/_shop/index.php';
        </script>
        ";
    } else{
        echo"
        <script>
        alert('아이디 혹은 비밀번호가 다릅니다');
        history.back()
        </script>
        ";
    }
}
else{
    echo"
    <script>
    alert('아이디 혹은 비밀번호가 다릅니다');
    history.back()
    </script>
    ";
}
?>
