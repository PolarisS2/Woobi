<?php
include("../common.php");

$no = $_SESSION['no'];
$id = $_SESSION['id'];

$sql = "
DELETE
FROM buket
WHERE id = '$id'
";

$result = $conn->query($sql);

if($result) {
    echo "
    <script>
        alert('삭제완료');
        location.href='buket_ok.php';
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
