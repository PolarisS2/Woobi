<?php
include_once("common.php");
include("view/index.html");

// include("common.php");

if ($_SESSION) {
    $id = $_SESSION['id'];
    echo 
    "<script>
    alert('`$id` 님 안녕하세요');
    </script>
    ";
    
    // echo  "
    // <script>
    // alert (`$_SESSION[id]` . 님 환영합니다.);
    // </script>
    // ";

} 
else {
    echo "
    <script>
        alert('다시 로그인 하세요.');
        location.href='log_in.php';
    </script>
    ";
    
}

?>
