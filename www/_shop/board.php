<!DOCTYPE html>
<html>

<head>
    <meta charset='EUC-KR'>
</head>
<style>
    *{
        margin: 0 auto;
    }
    #container{
        text-align: center;
    }
    #table{
        border: 1px solid #444444;
        margin-top: 30px;
    }
    #btn{
        text-align: center;
    }
    #btn_1, #btn_2, #btn_3{
        height: 40px;
        width: 60px;
        font-size: 20px;
        text-align: center;
        background-color: white;
        border: 2px solid black;
        border-radius: 10px;
    }
    

</style>

<body>
    <?php
        include("common.php");
        $sql = "select 
        no, 
        title, 
        id, 
        date,
        text
        from board
        ";

        $result = $conn ->query($sql);
    ?>

    <div id="container">
        <table id="table">
            <thead>
                <tr>
                    <th>구분</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>시간</th>
                </tr>
            </thead>


            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php  echo $row['no']?></td>
                    <td>
                        <a href="content.php?no=<?php echo $row['no']?>">
                        <?php  echo $row['title']?>
                        </a>

                    </td>
                    <td><?php  echo $row['id']?></td>
                    <td><?php  echo $row['date']?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    
    <div id="btn">
        <button id="btn_1" onclick="location.href='./index.php'">목록</button>&nbsp;&nbsp;
        <button id="btn_2"  onclick="location.href='./modify.php?number=<?= $no ?>&id=<?= $_SESSION['id'] ?>'">수정</button>&nbsp;&nbsp;
        <button id="btn_3"  onclick="location.href='./delete.php?number=<?= $no ?>&id=<?= $_SESSION['id'] ?>'">삭제</button>
    </div>
</body>

</html>