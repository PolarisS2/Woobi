<?php 

include('common.php');

$no = $_GET['no'];


$sql = "select 
            title,
            text,
            id,
            date,
            image,
            goodcount,
            count
        from board 
        where no = '$no'";

$result = $conn -> query($sql);

$data = mysqli_fetch_assoc($result);

if($data) {
        
} else {    
    echo "
    <script>
        alert('비정상 접근')
        location.href='board.php';        
    </script>
    ";
}



?>
<style> 
*{
    margin: 0 auto;
    text-align: center;
}
#con_table{
    margin-top: 3%;
    border: solid 1px;
    width: 1000px;
}
tr,th,td{
    border: solid 1px;
}
#text{
    height: 300px;
}
#title{
    height: 100px;
}
#id{
    height: 50px;
}
#date{
    height: 50px;
}
#btn{
    text-align: center;
    margin-top: 20px;
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

<div>
    <table id="con_table">
        <tr>
            <th id="title">
                제목
                <td><?php echo $data['title'];?></td>
            </th>
        </tr>

        <tr>
            <th id="text">
                내용
                <td>
                <div><?php echo "<br><img style='width: 200px;' src='$data[image]'></img>";?></div>
                    <div>
                        <?php echo $data['text'];?>
                    </div>                    
                </td>
            </th>
        </tr>

        <tr>
            <th id="id">
                작성자
                <td>
                    <?php echo $data['id'];?>
                </td>
            </th>
        </tr>

        <tr>
            <th id="date">
            작성시간
                <td>    <?php echo $data['date'];?></td>
            </th>
        </tr>

        <tr>
            <th>
                조회수
                <td><?php echo $data['count'];?></td>
            </th>
        </tr>
    </table>
    <div>
        좋아요 : <?php echo $data['good'];?>
    </div>
    
    <div id="btn">
        <button id="btn_1" onclick="location.href='./board.php'">목록</button>&nbsp;&nbsp;
        <button id="btn_2"  onclick="location.href='./modify.php?number=<?= $no ?>&id=<?= $_SESSION['id'] ?>'">수정</button>&nbsp;&nbsp;
        <button id="btn_3"  onclick="location.href='./delete.php?number=<?= $no ?>&id=<?= $_SESSION['id'] ?>'">삭제</button>
    </div>



    
    <script src="https://kit.fontawesome.com/8d9741eb42.js" crossorigin="anonymous"></script>

