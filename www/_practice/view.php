<?
//DB�� �����ϴ� �κ��Դϴ�. �׻� �ݺ��Ǵ� �κ��̴� �� �ϱ�!!!
$host = "localhost";
$user = "polariss2";
$password = "tjdqls123!@#";
$db = "polariss2";
$conn = mysqli_connect($host,$user,$password,$db);
//���� �����մϴ�.
$tablename="bbs"; //���̺� �̸�
$number = $_GET['number'];

 
//���̺��� ���� �����ɴϴ�.
$query = "select * from $tablename where number='$number'"; // �� ��ȣ�� ������ ��ȸ�� �մϴ�.
$result = $conn->query($query); 
$array = mysqli_fetch_array($result);

//�齽���� ����, Ư������ ��ȯ(HTML��), ����(<br>)ó�� ��
$array['name'] = stripslashes($array['name']);
$array['subject'] = stripslashes($array['subject']);
$array['memo'] = stripslashes($array['memo']);
 
// $array['subject'] = htmlspecialchars($array['subject']);
// $array['memo'] = htmlspecialchars($array['memo']);
 
$array['memo'] = nl2br($array['memo']);

 
// ��ȸ�� ī���� ����
$query = "update $tablename set count = count + 1 where number='$number'";
$conn->query($query);
 
?>
 
<html>
<head>
<title>PHP �Խ��� ������Ʈ - ����</title>
<STYLE TYPE="text/css">
BODY,TD,SELECT,input,DIV,form,TEXTAREA,center,option,pre,blockquote {font-family:����;font-size:9pt;color:#555555;}
A:link    {color:black;text-decoration:none;}
A:visited {color:black;text-decoration:none;}
A:active  {color:black;text-decoration:none;}
A:hover  {color:gray;text-decoration:none;}
</STYLE>
</head>
<body>
<table border=0 cellspacing=1 cellpadding="3" width=670>
        <tr>
          <td align=center>
          <font color=green><b>���� ���� ȭ���Դϴ�.</b></font>
          </td>
        </tr>
    <tr>
          <td bgcolor="#EAC3EA">
<table border=0 cellspacing=1 cellpadding=0 width=670 bgcolor="white">
        <tr>
          <td width="100">
            <p align="right"><b>�̸� &nbsp;</b></p>
 
          </td>
          <td width="400">
                        <p><?php echo $array['name']; ?></p>
          </td>
          <td width="100">
                        <p align="right"><b>��ȸ�� &nbsp;</b></p>
          </td>
          <td>
                        <p><?php echo $array['count']; ?></p>
          </td>
        </tr>
                <tr>
          <td width="100">
                        <p align="right"><b>���ڿ��� &nbsp;</b></p>
          </td>
          <td colspan="3">
                        <p><?php echo $array['email']; ?></p>
          </td>
                </tr>
                <tr>
          <td width="100">
                        <p align="right"><b>Ȩ������ &nbsp;</b></p>
          </td>
          <td colspan="3">
                        <p><?php echo $array['homepage']; ?></p>
          </td>
                </tr>
                <tr>
          <td width="100">
                        <p align="right"><b>���� &nbsp;</b></p>
          </td>
          <td colspan="3">
                        <p><?php echo $array['subject']; ?></p>
          </td>
                </tr>
        <tr>
          <td width="100">
                        <p align="right"><b>���� &nbsp;</b></p>
          </td>
          <td colspan="3">
                        <p><?php echo $array['memo']; ?></p>
          </td>
        </tr>
</table>
            <p align="center"><a href="list.php?page=<? echo $page; ?>">[���]</a> &nbsp;<a href="write.php">[����]</a> &nbsp;<a href="modify.php?number=<? echo $number; ?>&page=<? echo $page; ?>">[����]</a> &nbsp;<a href="delete.php?number=<? echo $number; ?>&page=<? echo $page; ?>">[����]</a></p>
          </td>
    </tr>
</table>
</body>
</html>