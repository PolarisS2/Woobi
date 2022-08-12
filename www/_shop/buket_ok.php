<?php 
include_once("common.php");

$id = $_SESSION['id'];
$sql = "
SELECT id,color,product,size,price
FROM buket
where id = '$id'
";

$result = $conn ->query($sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>장바구니</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h3>장바구니 담기</h3>
        </div>

        <ul>
            <li>
                <?php
                $row['product'];
                $row['color'];
                $row['size'];
                $row['price'];
                ?>
            </li>
        </ul>

    </div>
    
</body>
</html>