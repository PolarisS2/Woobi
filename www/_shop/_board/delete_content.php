<?php 

include("../common.php");

$no = $_GET['no'];

$sql = "DELETE FROM board where no = $no";

$result = $conn -> query($sql);

if($result) {
    echo "
    <script>
        alert('�ۻ����Ϸ�');
        location.href='board.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('��������');
        history.back();
    </script>
    ";
}

?>