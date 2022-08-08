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
                        <a href="content.php?no=<?php echo $row['no']?>"><?php  echo $row['title']?> </a>

                    </td>
                    <td><?php  echo $row['id']?></td>
                    <td><?php  echo $row['date']?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

</body>

</html>