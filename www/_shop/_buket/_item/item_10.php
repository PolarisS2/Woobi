<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../asset/css/item_one.css">
    <title>상세페이지</title>
    
</head>
<body>
    <div id="category">
        <div id="position">
            <ul>
            <li>Best</li>
            <li>New</li>
            <li>1 + 1</li>
            <li>Top</li>
            <li>Shirt</li>
            <li>Pants</li>
            <li>Shoes</li>
            <li>Acc</li>
            <li>Set-up</li>
            <li>Couple</li>
            <li>#Cody</li>
            <li>big size</li>
            <li>Sale</li>
            <li>휴가배송</li>
            </ul>
        </div>
    </div>
    <div id="container">
        <div>
            <div id="item_img">
                <img src="//cheat-key.com/web/product/medium/202105/41d7996bc8e30763b978c95511ebf1e8.jpg" class="card-img-top" alt="준비중입니다">
            </div>
            
            <form action="../buket.php" method="post">
                <div id="item_img_text">
                    <p><strong>에어 16컬러 스판 셔츠자켓</strong></p>
                    <input name="product" type="hidden" readonly value="에어 16컬러 스판 셔츠자켓">
                    <p>가격 : 33,000원</p>
                    <input name="price" type="hidden" readonly value="33,000원">
                    <ul id="option">
                        <li>
                            <select name="color">
                                <option>------[필수] 옵션을 선택하세요------</option>
                                <option>블랙</option>
                                <option>베이지</option>
                                <option>네이비[품절]</option>
                            </select>

                            <select name="size">
                                <option>------[필수] 옵션을 선택하세요------</option>
                                <option>XS(26)</option>
                                <option>S(28)</option>
                                <option>M(30)</option>
                                <option>L(32)</option>
                                <option>XL(34)</option>
                            </select>
                        </li>
                        <button id="buy_btn" type="submit">BUY NOW(미구현)</button>
                        <button id="btn_buket" type="submit" onclick="window.open('../buket_ok.php','_blank','width=472,height=573')">Buket</button>
                        <button id="btn_1" onclick="location.href='../../index.php'" type="button">메인으로</button>
                    </ul>
                    
                </div>
            </form>
            
            
            
        </div>
        

    </div>

</body>
</html>