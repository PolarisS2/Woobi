<?php
include_once("common.php");
include("view/index.html");

// include("common.php");

if ($_SESSION) {
    $id = $_SESSION['id'];
    echo 
    "<script>
    alert('`$id` �� �ȳ��ϼ���');
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
        alert('�ٽ� �α��� �ϼ���.');
        location.href='log_in.php';
    </script>
    ";
    
}

?>
