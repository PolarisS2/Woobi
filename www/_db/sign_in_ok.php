<?php 
include('common.php');


$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "select no, id, pw,name from user
where id = '$id'";

$result = $conn -> query($sql);

$db_pw = mysqli_fetch_assoc($result);

//아이디 존재 하면
if($db_pw){
    //입력 pw== dbpw이면
    if($pw == $db_pw['pw']){
    //세션에 값을 저장한다.
    $_SESSION['no'] = $db_pw['no'];
    $_SESSION['pw'] = $db_pw['pw'];
    $_SESSION['id'] = $db_pw['id'];
    $_SESSION['name'] = $db_pw['name'];
    
    echo"
    <script>
    location.href='main.php';
    </script>
    ";

    //입력 pw== dbpw 아니면
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