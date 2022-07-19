<?php
include("common.php");
// include("./view/main.html");
if ($_SESSION) {
    echo $_SESSION['id'] . "님 환영합니다.";
} else {
    echo "
    <script>
        location.href='sign_in.php';
    </script>
    ";
}

$sql = "select no, title, creater, day, view,text
from border ";

$result = $conn -> query($sql);
// var_dump($result);
$data = mysqli_fetch_assoc($result);


if($data) {
        
}
else {
    echo "
    <script>
        alert('비정상 접근')
        location.href='main.php';
    </script>
    ";
}

?>
<html>
<style>
    *{
        margin: 0 auto;
        /* margin-top: 40px; */
        text-align: center;
    }
    #title{
        width: 500px;
        height: 40px;
        margin-bottom: 20px;

    }
    #text{
        width: 500px;
        height: 300px;
    }
    label{
        
    }
    #container{
        text-align: center;
    }
    table,tr,td{
        border: 1px solid;
        border-collapse: collapse;
    }

</style>
<body>
    <table>
        <thead>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>작성자</th>
                <th>날짜</th>
                <th>조회수</th>
            </tr>
        </thead>


        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td>
                    <?php  echo $row['no']?>
                </td>

                <td>
                    <a href="text.php"><?php  echo $row['title']?></a>
                </td>

                <td>
                    <?php  echo $row['creater']?>
                </td>

                <td>
                    <?php  echo $row['day']?>
                </td>

                <td>
                    <?php  echo $row['view']?>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>

    <div class = text>
        <button onClick="location.href='write.php'">글쓰기</button>
    </div>
</body>
</html>


