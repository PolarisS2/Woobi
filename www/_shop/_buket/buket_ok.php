<?php 
include_once("../common.php");

$id = $_SESSION['id'];
$sql = "
SELECT id,color,product,size,price
FROM buket
where id = '$id'
";

$result = $conn ->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../asset/css/buket_ok.css">
    <title>장바구니</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h3>장바구니 담기</h3>
        </div>

        <form action="buket_remove.php" method="post">
            <ul>
                <?php
                    while($row = mysqli_fetch_assoc($result)){ ?>
                <li>상품명 : 
                    <?php echo $row['product']; ?>
                    <input type="submit" value="삭제" onclick="refresh()">
                </li>
                <li>색상 :
                    <?php echo $row['color']; ?>
                </li>
                <li>사이즈 :
                    <?php echo $row['size']; ?>
                </li>
                <li id="price">가격 :
                    <?php echo $row['price'];?>
                    <hr>
                </li>
                
                <?php }?>
            </ul>
        </form>
        

    </div>
    
</body>
</html>

<script>
    function refresh(){  
       location.reload();
}

</script>
