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
        alert('�����Ϸ�');
        location.href='buket_ok.php';
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
