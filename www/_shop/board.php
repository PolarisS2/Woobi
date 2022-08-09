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
        /* border: 1px solid #444444; */
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

    /* -----------------------------�׿�----------------- */
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
        <div class="neonText">
            <p id="neonText">
                ���� �Խ���
            </p>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th id="first">����</th>
                    <th>����</th>
                    <th>�ۼ���</th>
                    <th>�ð�</th>
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
        <div id="btn">
        <button id="btn_1" onclick="location.href='./board.php'">���</button>&nbsp;&nbsp;
        <button id="btn_2"  onclick="location.href='./review.php'">�۾���</button>&nbsp;&nbsp;
        
    </div>
    </div>

</body>

</html>