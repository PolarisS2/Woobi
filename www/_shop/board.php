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
        margin-top: 30px;
    }
    #btn{
        text-align: center;
        margin-top: 20px;
    }
    #btn_1, #btn_2, #btn_3{
        height: 40px;
        width: 80px;
        font-size: 20px;
        text-align: center;
        background-color: white;
        border: 2px solid black;
        border-radius: 10px;
    }

    /* -----------------------------네온----------------- */
    .neonText {
        animation: flicker 1.5s infinite alternate;
        color: #fff;
        text-align: center;
    }
    @keyframes flicker {
        0%, 18%, 22%, 25%, 53%, 57%, 100% {
            text-shadow:
            0 0 4px green,
            0 0 11px green,
            0 0 19px green,
            0 0 40px black,
            0 0 80px black,
            0 0 90px black,
            0 0 100px black,
            0 0 150px black;
            }
            20%, 24%, 55% {        
                text-shadow: none;
            }
        }
    #neonText {
        animation: flicker 1.5s infinite alternate;
        color: #fff;
        text-align: center;
        padding-top: 15px;
    }
    @keyframes flicker {
        0%, 18%, 22%, 25%, 53%, 57%, 100% {
            text-shadow:
            0 0 4px green,
            0 0 11px green,
            0 0 19px green,
            0 0 40px black,
            0 0 80px black,
            0 0 90px black,
            0 0 100px black,
            0 0 150px black;
        }
        20%, 24%, 55% {        
            text-shadow: none;
        }    
    }
    th,td{
        padding: 10px;
        border-bottom: 1px solid #CD5C5C;
    }
    #first{
        width: 40px;
    }
    #second{
        width: 800px;
    }
</style>

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
        title, 
        id, 
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
                리뷰 게시판
            </p>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th id="first">구분</th>
                    <th id="second">제목</th>
                    <th>작성자</th>
                    <th>시간</th>
                    <th>조회수</th>
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
                    <td><?php echo $row['count'];?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <div id="btn">
        <button id="btn_1" onclick="location.href='./board.php'">목록</button>&nbsp;&nbsp;
        <button id="btn_2"  onclick="location.href='./review.php'">글쓰기</button>&nbsp;&nbsp;
        
    </div>
    </div>

</body>

</html>