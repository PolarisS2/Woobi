<?php
include("common.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
$no = $_POST['no'];
$title = $_POST['title'];
$text = $_POST['text'];
$date = date('Y-m-d H:i:s');
$img = $_POST['img'];
$URL = './board.php';

$sql = "INSERT INTO board (no,id, pw, text, date,title,name,img) 
        values(null,'$id', '$pw', '$text','$date', '$title','$name','$img')";
$result = $conn->query($sql);
if ($result) {
?> <script>
        alert("<?php echo "�Խñ��� ��ϵǾ����ϴ�." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
    echo "�Խñ� ��Ͽ� �����Ͽ����ϴ�.";
}

mysqli_close($connect);
?>