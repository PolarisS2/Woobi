<?php
include("../common.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='EUC-KR'>
    <link rel="stylesheet" type="text/css" href="../asset/css/modify.css">
</head>

<body>
    <form method="post" action="modify_ok.php" enctype="multipart/form-data">
        <!-- method : POST!!! (GET X) -->
        <table style="padding-top:50px" align=center width=auto border=0 cellpadding=2>
            <tr>
                <td style="height:40; float:center; background-color:#3C3C3C">
                    <p style="font-size:25px; text-align:center; color:white; margin-top:15px; margin-bottom:15px"><b>���� �����ϱ�</b></p>
                </td>
            </tr>
            <tr>
                <td bgcolor=white>
                    <table class="table2">
                        <tr>
                            <td>�ۼ���</td>
                            <td><input type="text" name="id" size=30 placeholder="<?php $_SESSION['id'];?>"></td>
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
                        <input style="height:26px; width:47px; font-size:16px;" type="submit" value="�����Ϸ�">
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>