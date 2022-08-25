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


    $tablename = "board"; //���̺� �̸�
    if ($page == '') $page = 1; //������ ��ȣ�� ������ 1
    $list_num = 5; //�� �������� ������ ��� ����
    $page_num = 10; //�� ȭ�鿡 ������ ������ ��ũ(����) ����
    $offset = $list_num * ($page - 1); //�� �������� ���� �� ��ȣ(listnum ����ŭ �������� �� �����ϴ� ���� ��ȣ)


    $sql = "select count(*) from $tablename";
    $result = $conn->query($sql);
    $row = mysqli_fetch_row($result);
    $total_no = $row[0];

    //��ü ������ ���� ���� �� ��ȣ�� ���մϴ�.
    $total_page = ceil($total_no / $list_num); // ��ü�ۼ��� ��������ۼ��� ���� ���� �ø� ���� ���մϴ�.
    $cur_num = $total_no - $list_num * ($page - 1); //���� �۹�ȣ

    //bbs���̺��� ����� �����ɴϴ�. (���� ������ ��뿹�� ����մϴ� .)
    $sql = "select * from $tablename order by no desc limit $offset, $list_num"; // SQL ������
    $result = $conn->query($sql);
    ?>

    <div id="container">
        <div class="neonText">
            <p id="neonText">
                ���� �Խ���
            </p>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th id="first">����</th>
                    <th id="second">����</th>
                    <th>�ۼ���</th>
                    <th>�ð�</th>
                    <th>��ȸ��</th>
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
                        //���⼭���� ���� ������ ��ũ
                        //����, �� ȭ�鿡 ���̴� ���($page_num �⺻�� �̻��� �� ������� �������� )
                        $total_block = ceil($total_page / $page_num);
                        $block = ceil($page / $page_num); //���� ���

                        $first = ($block - 1) * $page_num; // ������ ����� �����ϴ� ù ������
                        $last = $block * $page_num; //������ ����� �� ������

                        if ($block >= $total_block) {
                            $last = $total_page;
                        }

                        echo "&nbsp;<p align=center>";
                        //[ó��][*����]
                        if ($block > 1) {
                            $prev = $first - 1;
                            echo "<a href='board.php?page=1'>[ó�� ]</a>&nbsp; ";
                            echo "<a href='board.php?page=$prev'>[$page_num �� ��]</a>";
                        }

                        //[����]
                        if ($page > 1) {
                            $go_page = $page - 1;
                            echo "<a href='board.php?page=$go_page'>[���� ]</a>";
                        }

                        //������ ��ũ
                        for ($page_link = $first + 1; $page_link <= $last; $page_link++) {
                            if ($page_link == $page) {
                                echo "<font color=green><b>$page_link</b></font>";
                            } else {
                                echo "<a href='board.php?page=$page_link'>[$page_link]</a>";
                            }
                        }

                        //[����]
                        if ($total_page > $page) {
                            $go_page = $page + 1;
                            echo "&nbsp;<a href='board.php?page=$go_page'>[����]</a>";
                        }

                        //[*����][������]
                        if ($block < $total_block) {
                            $next = $last + 1;
                            echo "<a href='board.php?page=$netxt'>[$page_num �� ��]</a>&nbsp;";
                            echo "<a href='board.php?page=$total_page'>[������]</a></p>";
                        }

                        ?>
                    </td>
                </tr>
            </tbody>


        </table>


        <div id="btn">
            <button id="btn_1" onclick="location.href='./board.php'">���</button>&nbsp;&nbsp;
            <button id="btn_2" onclick="location.href='./review.php'">�۾���</button>&nbsp;&nbsp;
            <button id="btn_3" onclick="location.href='../index.php'">��������</button>

        </div>
    </div>

</body>

</html>