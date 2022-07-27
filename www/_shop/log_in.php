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
        margin-top: 20%;
    }
    input{
        margin-top: 15px;
        width: 200px;
        height: 45px;
    }
    a{
        text-decoration: none;
        color: black;
    }
    .login{
        width: 100px;
    }
    .btn{
        margin-top: 20px;
        width: 100px;
        height: 45px;
    }
</style>
<body>
    <form action="log_in_ok.php" method="post">
        <div class="container">
            <input name="id" type="text" placeholder="아이디">
            <br>
            <input name="pw" type="text" placeholder="비밀번호">
            <br>
            <input class="login" type="submit" value="로그인">
        </div>
    </form>
    <button class="btn"><a href="sign_up.php">회원가입</a></button>
    
</body>
</html>