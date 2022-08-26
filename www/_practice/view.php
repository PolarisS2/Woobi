<?
//DB에 연결하는 부분입니다. 항상 반복되는 부분이니 꼭 암기!!!
$host = "localhost";
$user = "polariss2";
$password = "tjdqls123!@#";
$db = "polariss2";
$conn = mysqli_connect($host,$user,$password,$db);
//변수 설정합니다.
$tablename="bbs"; //테이블 이름
$number = $_GET['number'];

 
//테이블에서 글을 가져옵니다.
$query = "select * from $tablename where number='$number'"; // 글 번호를 가지고 조회를 합니다.
$result = $conn->query($query); 
$array = mysqli_fetch_array($result);

//백슬래쉬 제거, 특수문자 변환(HTML용), 개행(<br>)처리 등
$array['name'] = stripslashes($array['name']);
$array['subject'] = stripslashes($array['subject']);
$array['memo'] = stripslashes($array['memo']);
 
// $array['subject'] = htmlspecialchars($array['subject']);
// $array['memo'] = htmlspecialchars($array['memo']);
 
$array['memo'] = nl2br($array['memo']);

 
// 조회수 카운터 증가
$query = "update $tablename set count = count + 1 where number='$number'";
$conn->query($query);
 
?>
 
<html>
<head>
<title>PHP 게시판 프로젝트 - 보기</title>
<STYLE TYPE="text/css">
BODY,TD,SELECT,input,DIV,form,TEXTAREA,center,option,pre,blockquote {font-family:굴림;font-size:9pt;color:#555555;}
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
          <font color=green><b>내용 보기 화면입니다.</b></font>
          </td>
        </tr>
    <tr>
          <td bgcolor="#EAC3EA">
<table border=0 cellspacing=1 cellpadding=0 width=670 bgcolor="white">
        <tr>
          <td width="100">
            <p align="right"><b>이름 &nbsp;</b></p>
 
          </td>
          <td width="400">
                        <p><?php echo $array['name']; ?></p>
          </td>
          <td width="100">
                        <p align="right"><b>조회수 &nbsp;</b></p>
          </td>
          <td>
                        <p><?php echo $array['count']; ?></p>
          </td>
        </tr>
                <tr>
          <td width="100">
                        <p align="right"><b>전자우편 &nbsp;</b></p>
          </td>
          <td colspan="3">
                        <p><?php echo $array['email']; ?></p>
          </td>
                </tr>
                <tr>
          <td width="100">
                        <p align="right"><b>홈페이지 &nbsp;</b></p>
          </td>
          <td colspan="3">
                        <p><?php echo $array['homepage']; ?></p>
          </td>
                </tr>
                <tr>
          <td width="100">
                        <p align="right"><b>제목 &nbsp;</b></p>
          </td>
          <td colspan="3">
                        <p><?php echo $array['subject']; ?></p>
          </td>
                </tr>
        <tr>
          <td width="100">
                        <p align="right"><b>내용 &nbsp;</b></p>
          </td>
          <td colspan="3">
                        <p><?php echo $array['memo']; ?></p>
          </td>
        </tr>
</table>
            <p align="center"><a href="list.php?page=<? echo $page; ?>">[목록]</a> &nbsp;<a href="write.php">[쓰기]</a> &nbsp;<a href="modify.php?number=<? echo $number; ?>&page=<? echo $page; ?>">[수정]</a> &nbsp;<a href="delete.php?number=<? echo $number; ?>&page=<? echo $page; ?>">[삭제]</a></p>
          </td>
    </tr>
</table>
</body>
</html>