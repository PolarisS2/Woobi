<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/sign_up.css">
    <title>회원가입</title>
</head>
<body>
    <form action="sign_up_ok.php" method="post">
        <div class="container">
            <div id="test">
                <div>
                    <label for="userId">아이디</label>
                    <input id="userId" name="id" type="text" placeholder="아이디" required>
                    <span id="hit"></span>
                    <span id="hit_"></span>
                </div>
            
                <div>
                    <label>비밀번호</label>
                    <input name="pw" type="text" placeholder="비밀번호" required>
                </div>
            
                <div>
                    <label>비밀번호 확인</label>
                    <input name="cpw" type="text" placeholder="비밀번호확인" required>
                </div>
            
                <div>
                    <label>이름</label>
                    <input name="name" type="text" placeholder="이름" required>
                </div>
            
                <div>
                    <label>이메일</label>
                    <input name="email" type="email" placeholder="이메일" required>
                </div>
            
                <div>
                    <label>전화번호</label>
                    <input id="phone" name="phone" type="text" placeholder="전화번호" required>
                    <!-- <input id="test" type="button" value="번호확인" onclick="fn_submit()"> -->
                    <span id="phoneChk"></span>
                </div>
                <input type="submit" value="회원가입">
            </div>
            
            
        </div>
    </form>
<script src="../asset/js/sign_up.js"></script>
</body>
</html>



