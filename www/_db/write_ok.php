<?php
    include("common.php");
    
    $title = $_POST['title'];
    // $text = $_POST['text'];
    $no = $_POST['no'];
    $text = $_POST['text'];
    $creater = $_SESSION['name'];
    $day = date("Y-m-d");

    $sql = "insert into border set
            no = '$no',
            title = '$title',
            creater = '$creater',
            text = '$text',
            day = '$day'
            ";
    $result = $conn -> query($sql);
    
    
    

    if($result) {
        echo "
        <script>
            location.href='main.php';
            alert('등록 성공.');
        </script>
        ";
    } else {
        echo "
        <script>
            alert('등록 실패.');
            location.href='main.php';
        </script>
        ";
    }
?>