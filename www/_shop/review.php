<?php
include("common.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='EUC-KR'>
    <style>
        table.table2 {
            border-collapse: separate;
            border-spacing: 1px;
            text-align: left;
            line-height: 1.5;
            border-top: 1px solid #ccc;
            margin: 20px 10px;
        }

        table.table2 tr {
            width: 50px;
            padding: 10px;
            font-weight: bold;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }

        table.table2 td {
            width: 100px;
            padding: 10px;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <form method="post" action="review_ok.php" enctype="multipart/form-data">
        <!-- method : POST!!! (GET X) -->
        <table style="padding-top:50px" align=center width=auto border=0 cellpadding=2>
            <tr>
                <td style="height:40; float:center; background-color:#3C3C3C">
                    <p style="font-size:25px; text-align:center; color:white; margin-top:15px; margin-bottom:15px"><b>���� �ۼ��ϱ�</b></p>
                </td>
            </tr>
            <tr>
                <td bgcolor=white>
                    <table class="table2">
                        <tr>
                            <td>�ۼ���</td>
                            <td><input type="text" name="id" size=30 placeholder="<?php ?>"></td>
                        </tr>

                        <tr>
                            <td>����</td>
                            <td><input type="text" name="title" size=70></td>
                        </tr>

                        <tr>
                            <td>����</td>
                            <td><textarea name="text" cols=75 rows=15></textarea></td>
                        </tr>

                        <tr>
                            <td>����÷��</td>
                            <td><input type="file" name="image"></td>
                        </tr>

                        <tr>
                            <td>��й�ȣ</td>
                            <td><input type="password" name="pw" size=15 maxlength=15></td>
                        </tr>
                    </table>

                    <center>
                        <input style="height:26px; width:47px; font-size:16px;" type="submit" value="�ۼ�">
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>