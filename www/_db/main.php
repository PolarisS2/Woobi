<?php
include("common.php");
// include("./view/main.html");
if ($_SESSION) {
    echo $_SESSION['id'] . "�� ȯ���մϴ�.";
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
        alert('������ ����')
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
                <th>��ȣ</th>
                <th>����</th>
                <th>�ۼ���</th>
                <th>��¥</th>
                <th>��ȸ��</th>
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
        <button onClick="location.href='write.php'">�۾���</button>
    </div>
</body>
</html>


