<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/sign_up.css">
    <title>ȸ������</title>
</head>
<body>
    <form action="sign_up_ok.php" method="post">
        <div class="container">
            <div id="test">
                <div>
                    <label for="userId">���̵�</label>
                    <input id="userId" name="id" type="text" placeholder="���̵�" required>
                    <span id="hit"></span>
                    <span id="hit_"></span>
                </div>
            
                <div>
                    <label>��й�ȣ</label>
                    <input name="pw" type="text" placeholder="��й�ȣ" required>
                </div>
            
                <div>
                    <label>��й�ȣ Ȯ��</label>
                    <input name="cpw" type="text" placeholder="��й�ȣȮ��" required>
                </div>
            
                <div>
                    <label>�̸�</label>
                    <input name="name" type="text" placeholder="�̸�" required>
                </div>
            
                <div>
                    <label>�̸���</label>
                    <input name="email" type="email" placeholder="�̸���" required>
                </div>
            
                <div>
                    <label>��ȭ��ȣ</label>
                    <input id="phone" name="phone" type="text" placeholder="��ȭ��ȣ" required>
                    <!-- <input id="test" type="button" value="��ȣȮ��" onclick="fn_submit()"> -->
                    <span id="phoneChk"></span>
                </div>
                <input type="submit" value="ȸ������">
            </div>
            
            
        </div>
    </form>
<script src="../asset/js/sign_up.js"></script>
</body>
</html>



