<?php
include_once("common.php");
include("view/index.html");

// include("common.php");

if ($_SESSION) {
    $id = $_SESSION['id'];
    echo 
    "<script>
    alert('`$id` �� �ȳ��ϼ���');
    var log_in = document.querySelector('#log_in');
    var log_out = document.querySelector('#log_out');
    log_in.style.display = 'none';
    log_out.style.display = 'block';
    </script>
    ";
    
    // echo  "
    // <script>
    // alert (`$_SESSION[id]` . �� ȯ���մϴ�.);
    // </script>
    // ";

} 
else {
    echo "
    <script>
        alert('�α׾ƿ� �ƽ��ϴ�. �ٽ� �α��� �ϼ���.');
        location.href='./_user/log_in.php';
    </script>
    ";
    
}

?>
