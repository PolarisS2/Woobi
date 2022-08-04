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
        alert("<?php echo "게시글이 등록되었습니다." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
    echo "게시글 등록에 실패하였습니다.";
}

mysqli_close($connect);
?>