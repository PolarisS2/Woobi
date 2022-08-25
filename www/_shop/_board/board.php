<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../asset/css/board.css">
    <meta charset='EUC-KR'>
</head>

<body>
    <?php
    // include_once("common.php");

    $host = "localhost";
    $user = "polariss2";
    $password = "tjdqls123!@#";
    $db = "polariss2";
    $conn = mysqli_connect($host, $user, $password, $db);

    $sql = "select
        no,
        writer,
        title,        
        date,
        text,
        count
        from board
        ";

    $result = $conn->query($sql);


    $tablename = "board"; //테이블 이름
    if ($page == '') $page = 1; //페이지 번호가 없으면 1
    $list_num = 5; //한 페이지에 보여줄 목록 갯수
    $page_num = 10; //한 화면에 보여줄 페이지 링크(묶음) 갯수
    $offset = $list_num * ($page - 1); //한 페이지의 시작 글 번호(listnum 수만큼 나누었을 때 시작하는 글의 번호)


    $sql = "select count(*) from $tablename";
    $result = $conn->query($sql);
    $row = mysqli_fetch_row($result);
    $total_no = $row[0];

    //전체 페이지 수와 현재 글 번호를 구합니다.
    $total_page = ceil($total_no / $list_num); // 전체글수를 페이지당글수로 나눈 값의 올림 값을 구합니다.
    $cur_num = $total_no - $list_num * ($page - 1); //현재 글번호

    //bbs테이블에서 목록을 가져옵니다. (위의 쿼리문 사용예와 비슷합니다 .)
    $sql = "select * from $tablename order by no desc limit $offset, $list_num"; // SQL 쿼리문
    $result = $conn->query($sql);
    ?>

    <div id="container">
        <div class="neonText">
            <p id="neonText">
                리뷰 게시판
            </p>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th id="first">구분</th>
                    <th id="second">제목</th>
                    <th>작성자</th>
                    <th>시간</th>
                    <th>조회수</th>
                </tr>
            </thead>


            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['no'] ?></td>
                        <td>
                            <?php $locking = "<img src= '' alt='lock' title='lock' width='20' height='20'/>";
                            if($board['lock_post'] == "1"){
                                ?><a href='.php?no=<?php echo $row["no"];?>'> <?php echo $title, $lockimg;
                            }else{  ?>
                            <a href="content.php?no=<?php echo $row['no'] ?>"><?php echo $row['title'];} ?> </a>
                            
                        </td>
                        <td><?php echo $row['writer'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['count']; ?></td>


                    </tr>
                <?php } ?>
                <tr>
                    <td width=100% colspan=5>

                        <?
                        //여기서부터 각종 페이지 링크
                        //먼저, 한 화면에 보이는 블록($page_num 기본값 이상일 때 블록으로 나뉘어짐 )
                        $total_block = ceil($total_page / $page_num);
                        $block = ceil($page / $page_num); //현재 블록

                        $first = ($block - 1) * $page_num; // 페이지 블록이 시작하는 첫 페이지
                        $last = $block * $page_num; //페이지 블록의 끝 페이지

                        if ($block >= $total_block) {
                            $last = $total_page;
                        }

                        echo "&nbsp;<p align=center>";
                        //[처음][*개앞]
                        if ($block > 1) {
                            $prev = $first - 1;
                            echo "<a href='board.php?page=1'>[처음 ]</a>&nbsp; ";
                            echo "<a href='board.php?page=$prev'>[$page_num 개 앞]</a>";
                        }

                        //[이전]
                        if ($page > 1) {
                            $go_page = $page - 1;
                            echo "<a href='board.php?page=$go_page'>[이전 ]</a>";
                        }

                        //페이지 링크
                        for ($page_link = $first + 1; $page_link <= $last; $page_link++) {
                            if ($page_link == $page) {
                                echo "<font color=green><b>$page_link</b></font>";
                            } else {
                                echo "<a href='board.php?page=$page_link'>[$page_link]</a>";
                            }
                        }

                        //[다음]
                        if ($total_page > $page) {
                            $go_page = $page + 1;
                            echo "&nbsp;<a href='board.php?page=$go_page'>[다음]</a>";
                        }

                        //[*개뒤][마지막]
                        if ($block < $total_block) {
                            $next = $last + 1;
                            echo "<a href='board.php?page=$netxt'>[$page_num 개 뒤]</a>&nbsp;";
                            echo "<a href='board.php?page=$total_page'>[마지막]</a></p>";
                        }

                        ?>
                    </td>
                </tr>
            </tbody>


        </table>


        <div id="btn">
            <button id="btn_1" onclick="location.href='./board.php'">목록</button>&nbsp;&nbsp;
            <button id="btn_2" onclick="location.href='./review.php'">글쓰기</button>&nbsp;&nbsp;
            <button id="btn_3" onclick="location.href='../index.php'">메인으로</button>

        </div>
    </div>

</body>

</html>