<?php 

include('../common.php');
$no = $_GET['no'];

$sql_c = "
SELECT id,word
FROM chat";
$result_c = $conn ->query($sql_c);
// $data_c = mysqli_fetch_assoc($result_c);

$sql_u = "update board
        set count = count + 1
        where no = '$no'";

$result = $conn -> query($sql_u);

$sql = "select 
            title,
            text,
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="../asset/css/content.css">
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
    <div id="like">
        <p>좋아요</p> <i id="good" class="bi bi-heart" onclick="good()"></i> <label id="goodcount"><?php echo $data['goodcount'];?> </label>
    </div>
    
    <div id="btn">
        <button id="btn_1" onclick="location.href='./board.php'">목록</button>&nbsp;&nbsp;
        <button id="btn_2"  onclick="location.href='./modify.php?no=<?= $no ?>&id=<?= $_SESSION['id'] ?>'">수정</button>&nbsp;&nbsp;
        <button id="btn_3"  onclick="location.href='./delete_content.php?no=<?= $no ?>&id=<?= $_SESSION['id'] ?>'">삭제</button>
    </div>

    <hr>
    <div id="result">
        <div style="float: left;">
            <?php while($row = mysqli_fetch_assoc($result_c)){ ?>
                <p>
                    <?php
                        echo $row['id'] . " : " . $row['word'];}?>
                </p>
                
        
        </div>
    </div>
      <form action="review_text_ok.php" method="post" target="ifram">
        <textarea id="textarea" name="word"></textarea>
        <input type="submit" value="전송" onclick="refresh()">
      </form>
      <iframe name="ifram"></iframe>

    
<script src="https://kit.fontawesome.com/8d9741eb42.js" crossorigin="anonymous"></script>
<script>
    var contentNo = <?php echo $no; ?>;
    function updateContent() {
        location.href='update_content.php?no=' + <?php echo $no ?>;
    }
    function deleteContent() {
        location.href='delete_content.php?no=' + <?php echo $no ?>;
    }
    function good() {
        var className = document.querySelector('#good').className
        if(className == 'bi bi-heart') {
            document.querySelector('#good').setAttribute('class', 'bi bi-heart-fill');
            document.querySelector('#good').style.color = 'red';
            var http = new XMLHttpRequest();
            http.onreadystatechange = function () {
                if(this.status == 200 && this.readyState == this.DONE) {                            
                    if(JSON.parse(http.response)['result'] != 'n'){
                        // 좋아요 갯수 최신화
                        document.querySelector('#goodcount').innerText 
                        = JSON.parse(http.response)['result'];
                    } else {
                        alert('실패');
                    }
                }            
            }            
            
            var url = "http://polariss2.woobi.co.kr/_shop/API/update_good.php?no=" + contentNo+ '&&cancle=+1';
            
            http.open('GET', url);
            http.send();
        } 
        if(className == 'bi bi-heart-fill') {
            document.querySelector('#good').setAttribute('class', 'bi bi-heart');
            document.querySelector('#good').style.color = 'black';
            var http = new XMLHttpRequest();
            http.onreadystatechange = function () {
                if(this.status == 200 && this.readyState == this.DONE) {                            
                    if(JSON.parse(http.response)['result'] != 'n'){
                        // 좋아요 갯수 최신화
                        document.querySelector('#goodcount').innerText 
                        = JSON.parse(http.response)['result'];
                    } else {
                        alert('실패');
                    }
                }            
            }            
            
            var url = "http://polariss2.woobi.co.kr/_shop/API/update_good.php?no=" + contentNo + '&&cancle=-1';
            
            http.open('GET', url);
            http.send();
        } 
        
    }

function refresh(){
    location.reload();
}
</script>