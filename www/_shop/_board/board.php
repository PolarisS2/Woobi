<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="../asset/css/board.css">
    <meta charset='EUC-KR'>
</head>
<body>
    <?php
        // include_once("common.php");
        $host = "localhost";
        $user = "polariss2";
        $password = "tjdqls123!@#";
        $db = "polariss2";
        $conn = mysqli_connect($host,$user,$password,$db);

        $sql = "select
        no,
        writer,
        title,        
        date,
        text,
        count
        from board
        ";

        $result = $conn ->query($sql);
    ?>

    <div id="container">
        <div class="neonText">
            <p id="neonText">
                ���� �Խ���
            </p>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th id="first">����</th>
                    <th id="second">����</th>
                    <th>�ۼ���</th>
                    <th>�ð�</th>
                    <th>��ȸ��</th>
                </tr>
            </thead>


            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php  echo $row['no']?></td>
                    <td>
                        <a href="content.php?no=<?php echo $row['no']?>"><?php  echo $row['title']?> </a>

                    </td>
                    <td><?php  echo $row['writer']?></td>
                    <td><?php  echo $row['date']?></td>
                    <td><?php echo $row['count'];?></td>

                    
                </tr>
                <?php }?>
                
            </tbody>
            <td><?php include("page.php");?></td>            
        </table>

 
        <div id="btn">
        <button id="btn_1" onclick="location.href='./board.php'">���</button>&nbsp;&nbsp;
        <button id="btn_2"  onclick="location.href='./review.php'">�۾���</button>&nbsp;&nbsp;
        <button id="btn_3" onclick="location.href='../index.php'">��������</button>
        
    </div>
    </div>

</body>

</html>