<?php
include("../common.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$no = $_POST['no'];
$name = $_POST['name'];
$title = $_POST['title'];
$text = $_POST['text'];
$date = date('Y-m-d H:i:s');
$image = $_POST['image'];
$writer = $_SESSION['id'];
$URL = './board.php';
$dir = "../_image/";

if(isset($_POST['lockpost'])){
	$lo_post = '1';
}else{
	$lo_post = '0';
}
//if ($result) {
if($_FILES['image']['name']) {
	$imageFullName = strtolower($_FILES['image']['name']);
	$imageNameSlice = explode(".",$imageFullName);
	$imageName = $imageNameSlice[0];
	$imageType = $imageNameSlice[1];
	$image_ext = array('jpg','jpeg','gif','png');
	$dates = date("mdhis",time());
	$newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
	move_uploaded_file($_FILES['image']['tmp_name'],$dir.$newImage);

	$sql = "INSERT INTO board set
	 no = 'null',
	 text = '$text',
	 date = '$date',
	 title = '$title',
	 image = '".$dir.$newImage."',
	 writer = '$writer',
	 lock_post = '$lo_post'
	 ";
	$result = $conn->query($sql);


?>
	<script>
		alert("<?php echo "게시글이 등록되었습니다." ?>");
		location.replace("<?php echo $URL ?>");
	</script>
<?php
} else {
	echo "게시글 등록에 실패하였습니다.";
}



	

	
	
?>
