<?php 

include("../common.php");

$no = $_GET['no'];

$sql = "DELETE FROM board where no = $no";

$result = $conn -> query($sql);

if($result) {
    echo "
    <script>
        alert('글삭제완료');
        location.href='board.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('삭제실패');
        history.back();
    </script>
    ";
}

?>