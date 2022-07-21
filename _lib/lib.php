<?php
// ���۵� ������ ��ȿ�� �˻�
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//�ѱ� üũ
function isonlyHangul( $text, $encode = 'utf-8' ) {
  $check  = true;
  $len    = mb_strlen($text, $encode);
  for( $i = 0; $i < $len; $i++ ) {
    $cha = mb_substr( $text, $i , 1, $encode );
    if( !preg_match("/[\xA1-\xFE\xA1-\xFE]/", $cha ) ) {
        $check = false;
        break;
    }
  }
  
  return $check;
}

//�����̷�Ʈ
function gotoUrl($url) {
  echo "<script>location.replace(\"$url\");</script>";
}

//����ó��
function errHandler($url, $error_report = null) {
  echo "<meta charset='EUC-KR'>";
  
  gotoUrl("$url?err=1&exp=$error_report");
}
?>