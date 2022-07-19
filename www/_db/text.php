<?php
include("common.php");

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$no = $_SESSION['no'];

$sql = "select 
no,
title,
creater,
text
";

$result = $conn -> query($sql);

$data = mysqli_fetch_assoc($result);











?>