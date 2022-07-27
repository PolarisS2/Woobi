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
            <input name="id" type="text" placeholder="아이디">
                <br>
            <input name="pw" type="text" placeholder="비밀번호">
                <br>
            <input name="cpw" type="text" placeholder="비밀번호확인">
                <br>
            <input name="name" type="text" placeholder="이름">
                <br>
            <input name="email" type="email" placeholder="이메일">
                <br>
            <input name="phone" type="text" placeholder="전화번호">
                <br>
            <input type="submit" value="회원가입">
            <br>
        </div>
    </form>
    
</body>
</html>