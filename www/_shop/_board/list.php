<?
include("../common.php");
//�Խ��� ��Ϻ��⿡ �ʿ��� ���� ���� �ʱⰪ�� �����մϴ�.
$tablename="board"; //���̺� �̸�
if($page == '') $page = 1; //������ ��ȣ�� ������ 1
$list_num = 1; //�� �������� ������ ��� ����
$page_num = 10; //�� ȭ�鿡 ������ ������ ��ũ(����) ����
$offset = $list_num*($page-1); //�� �������� ���� �� ��ȣ(listnum ����ŭ �������� �� �����ϴ� ���� ��ȣ)
 

$sql="select count(*) from $tablename";
$result = $conn->query($sql);
$row=mysqli_fetch_row($result);
$total_no=$row[0];
 
//��ü ������ ���� ���� �� ��ȣ�� ���մϴ�.
$total_page=ceil($total_no/$list_num); // ��ü�ۼ��� ��������ۼ��� ���� ���� �ø� ���� ���մϴ�.
$cur_num=$total_no - $list_num*($page-1); //���� �۹�ȣ
 
//bbs���̺��� ����� �����ɴϴ�. (���� ������ ��뿹�� ����մϴ� .)
$sql="select * from $tablename order by no desc limit $offset, $list_num"; // SQL ������
$result= $conn->query($sql);
?>
 
<html>
<head>
<meta http-equiv=content-type content=text/html; charset=euc-kr>
<title>�۸�Ϻ���</title>
<STYLE TYPE=text/css>
BODY,TD,SELECT,input,DIV,form,TEXTAREA,center,option,pre,blockquote {font-family:����;font-size:9pt;color:#555555;}
A:link    {color:black;text-decoration:none;}
A:visited {color:black;text-decoration:none;}
A:active  {color:black;text-decoration:none;}
A:hover  {color:gray;text-decoration:none;}
</STYLE>
</head>
<!-- <body background=./images/body_bg.gif> -->
<!-- <img src=./images/maintitle.gif> -->
<table border=1 cellspacing=0 width=680 bordercolordark=white bordercolorlight=#999999>
    <tr>
        <td width=30 bgcolor=#CCCCCC>
            <p align=center>no</p>
        </td>
        <td bgcolor=#CCCCCC width=490>
            <p align=center>subject</p>
        </td>
        <td width=60 bgcolor=#CCCCCC>
            <p align=center>name</p>
        </td>
        <td width=70 bgcolor=#CCCCCC>
            <p align=center>date</p>
        </td>
        <td width=30 bgcolor=#CCCCCC>
            <p align=center>hit</p>
        </td>
    </tr>
 
<?
while ($array=mysqli_fetch_array($result)) {
 
    $date=date("Y/m/d", $array['date']); //�۾��ð��� Y/m/d ���Ŀ� �°� ���ڿ��� �ٲߴϴ� .

    echo "
<tr>
    <td width=30>
        <p align=center>$cur_num</p>
    </td>
    <td width=490>
        <p>$array[text]< /p>
    </td>
    <td width=60>
        <p align=center>$array[id]</p>
    </td>
    <td width=70>
        <p align=center>$array[date]</p>
    </td>
    <td width=30>
        <p align=center>$array[count]</p>
    </td>
</tr> ";

    $cur_num --;

}
?>
    <tr>
        <td width=100% colspan=5>
 
<?
//���⼭���� ���� ������ ��ũ
//����, �� ȭ�鿡 ���̴� ���($page_num �⺻�� �̻��� �� ������� �������� )
$total_block=ceil($total_page/$page_num);
$block=ceil($page/$page_num); //���� ���
 
$first=($block-1)*$page_num; // ������ ����� �����ϴ� ù ������
$last=$block*$page_num; //������ ����� �� ������
 
if($block >= $total_block) {
        $last=$total_page;
}
 
echo "&nbsp;<p align=center>";
//[ó��][*����]
if($block > 1) {
        $prev=$first-1;
        echo "<a href='list.php?page=1'>[ó�� ]</a>&nbsp; ";
        echo "<a href='list.php?page=$prev'>[$page_num �� ��]</a>";
}
 
//[����]
if($page > 1) {
        $go_page=$page-1;
        echo "<a href='list.php?page=$go_page'>[���� ]</a>";
}
 
//������ ��ũ
for ($page_link=$first+1;$page_link<=$last;$page_link++) {
        if($page_link==$page) {
                echo "<font color=green><b>$page_link</b></font>";
        }
        else {
                echo "<a href='list.php?page=$page_link'>[$page_link]</a>";
        }
}
 
//[����]
if($total_page > $page) {
        $go_page=$page+1;
        echo "&nbsp;<a href='list.php?page=$go_page'>[����]</a>";
}
 
//[*����][������]
if($block < $total_block) {
        $next=$last+1;
        echo "<a href='list.php?page=$netxt'>[$page_num �� ��]</a>&nbsp;";
        echo "<a href='list.php?page=$total_page'>[������]</a></p>";
}
 
?>
        </td>
    </tr>
    <tr>
        <td width=100% colspan=5>
            <p align=center><a href='review.php'>[�۾���]</a></p>
        </td>
    </tr>
</table>
</body>
</html>