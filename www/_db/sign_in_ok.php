<?php 
include('common.php');


$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "select no, id, pw,name from user
where id = '$id'";

$result = $conn -> query($sql);

$db_pw = mysqli_fetch_assoc($result);

//���̵� ���� �ϸ�
if($db_pw){
    //�Է� pw== dbpw�̸�
    if($pw == $db_pw['pw']){
    //���ǿ� ���� �����Ѵ�.
    $_SESSION['no'] = $db_pw['no'];
    $_SESSION['pw'] = $db_pw['pw'];
    $_SESSION['id'] = $db_pw['id'];
    $_SESSION['name'] = $db_pw['name'];
    
    echo"
    <script>
    location.href='main.php';
    </script>
    ";

    //�Է� pw== dbpw �ƴϸ�
    }else{
        echo"
        <script>
        alert('��й�ȣ�� �ٸ��ϴ�');
        history.back()
        </script>
        ";
    }
}
    else{
        echo"
        <script>
        history.back()
        </script>
        ";
    }
    

?>