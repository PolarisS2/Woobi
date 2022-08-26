<?php
$host = "localhost";
$user = "polariss2";
$password = "tjdqls123!@#";
$db = "polariss2";
$conn = mysqli_connect($host,$user,$password,$db);

$name = addslashes($_POST['name']);
$password = addslashes($_POST['password']);
$email = addslashes($_POST['email']);
$homepage = addslashes($_POST['homepage']);
$subject = addslashes($_POST['subject']);
$memo = addslashes($_POST['memo']);
$writetime = time();
$ip = getenv("REMOTE_ADDR");
$count = 0;

$sql = " INSERT INTO bbs 
VALUES ('','$name','$password','$email','$homepage','$subject','$memo','$count','$ip','$writetime')
";
$conn ->query($sql);

$msg = "성공적으로 등록되었습니다";
echo " <html><head>
<script name = javascript>
if('$msg' !=''){
    self.window.alert('$msg');
}
location.href='list.php?';
</script>
</head>
</html>
";
?>
