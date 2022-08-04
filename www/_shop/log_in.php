<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/log_in.css">
    <title>Document</title>
    
</head>
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