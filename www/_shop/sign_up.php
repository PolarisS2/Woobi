<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0 auto;
        text-align: center;
    }
    .container{
        margin-top: 10%;
    }
    input{
        margin-top: 15px;
        width: 200px;
        height: 45px;
    }
</style>
<body>
    <form action="sign_up_ok.php" method="post">
        <div class="container">
            <input name="id" type="text" placeholder="���̵�">
                <br>
            <input name="pw" type="text" placeholder="��й�ȣ">
                <br>
            <input name="cpw" type="text" placeholder="��й�ȣȮ��">
                <br>
            <input name="name" type="text" placeholder="�̸�">
                <br>
            <input name="email" type="email" placeholder="�̸���">
                <br>
            <input name="phone" type="text" placeholder="��ȭ��ȣ">
                <br>
            <input type="submit" value="ȸ������">
            <br>
        </div>
    </form>
    
</body>
</html>