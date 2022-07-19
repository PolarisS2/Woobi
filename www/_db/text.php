<?php
	include ("common.php");

	$no = $_POST['text'];

	$sql = "select
	no,
	title,
	creater,
	day,
	view,
	text
	from border
	where no = '$no'
	";

	$result = $conn -> query($sql);

    
?>

<div>
	<?php 
	$row = mysqli_fetch_assoc($result);
	echo $row['text'];
	echo $row['creater'];
	?>


</div>

