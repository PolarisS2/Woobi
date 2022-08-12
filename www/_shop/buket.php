<?php
include("common.php");

$id = $_SESSION['id'];
$product = $_POST['product'];
$color = $_POST['color'];
$size = $_POST['size'];
$price = $_POST['price'];

$sql =
"
INSERT INTO buket set
id = '$id',
product = '$product',
color = '$color',
size = '$size',
price = '$price'
";
$result = $conn ->query($sql);

echo "
<script>
        location.href='item_one.php';
</script>";

?>

