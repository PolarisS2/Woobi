<?php
include("./www/_shop/common.php");

$id = $_GET['id']; //�̸��� �ޱ�

$sql = "select id from shop where id = '$id'";  //��������

$result = $conn ->query($sql); //���������� ����

$data=mysqli_fetch_assoc($result);
if($data ){
    //�ߺ�
    echo json_encode(array('result' => 'y'));

}else{
    //�ߺ��ƴ�
    echo json_encode(array('result' => 'n'));
}
?>