<?php
include_once("common.php");
include("view/index.html");

// include("common.php");

if ($_SESSION) {
    $id = $_SESSION['id'];
    echo 
    "<script>
    alert('`$id` 님 안녕하세요');
    var log_in = document.querySelector('#log_in');
    var log_out = document.querySelector('#log_out');
    log_in.style.display = 'none';
    log_out.style.display = 'block';
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
        alert('로그아웃 됐습니다. 다시 로그인 하세요.');
        location.href='./_user/log_in.php';
    </script>
    ";
    
}

?>
