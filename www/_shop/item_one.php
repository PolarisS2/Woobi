<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0 auto;
    }
    @font-face {
    font-family: 'RixInooAriDuriR';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2207-01@1.0/RixInooAriDuriR.woff2') format('woff2');
    font-weight: normal;
    font-style: normal;
    }
    #container{
        margin-top: 5%;
        /* text-align: center; */
    }
    #item_img{
        float: left;
        margin-right: 40px;
    }
    #item_img::after{
        clear: both;
        display: table;
        content: '';
    }
    #item_img_text{
        font-size: x-large;
        padding-top: 10%;
    }
    #item_img_text > p{
        padding-top: 30px;
        margin-bottom: 20px;
    }
    #option{
        float: left;
    }
    li{
        list-style: none;
    }

    #category{
        float: left;
        width: 10%;
        background-color: lightgray;
        border-radius: 30px;
        margin-right: 15%;
        margin-left: 5%;
    }
    #category::after{
        clear: both;
        display: table;
        content: '';

    }
    
    #position > ul > li{
        font-family: 'RixInooAriDuriR';
        margin-top: 10%;
        margin-bottom: 10%;
        font-size: xx-large;
    }
    #buy_btn,#btn_1,#btn_buket{
        margin-top: 40px;
        height: 40px;
        background-color: black;
        color: white;
        margin-left: 10%;
    }
    
</style>
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
            <li>�ް����</li>
            </ul>
        </div>
    </div>
    <div id="container">
        <div>
            <div id="item_img">
                <img src="//cheat-key.com/web/product/medium/202206/1cb8eb00f5cdf2960cba8114a961e50d.jpg" class="card-img-top" alt="�غ����Դϴ�">
            </div>
            
            <form action="buket.php" method="post">
                <div id="item_img_text">
                    <p><strong>�Ʒн��� ���ϸ� �¾�</strong></p>
                    <input name="product" type="hidden" readonly value="�Ʒн��� ���ϸ� �¾�">
                    <p>���� : 29,900��</p>
                    <input name="price" type="hidden" readonly value="29,900��">
                    <ul id="option">
                        <li>
                            <select name="color">
                                <option>------[�ʼ�] �ɼ��� �����ϼ���------</option>
                                <option>��</option>
                                <option>������</option>
                                <option>���̺�[ǰ��]</option>
                            </select>

                            <select name="size">
                                <option>------[�ʼ�] �ɼ��� �����ϼ���------</option>
                                <option>XS(26)</option>
                                <option>S(28)</option>
                                <option>M(30)</option>
                                <option>L(32)</option>
                                <option>XL(34)</option>
                            </select>
                        </li>
                        <button id="buy_btn" type="submit">BUY NOW(�̱���)</button>
                        <button id="btn_buket" type="submit" onclick="window.open('buket_ok.php','_blank','width=472,height=573')">Buket</button>
                        <button id="btn_1" onclick="location.href='./index.php'">��������</button>
                    </ul>
                    
                </div>
            </form>
            
            
            
        </div>
        

    </div>

</body>
</html>