<html>

<head>
    <title>PHP �Խ��� ������Ʈ - ����</title>

    <STYLE TYPE="text/css">
        BODY,
        TD,
        SELECT,
        input,
        DIV,
        form,
        TEXTAREA,
        center,
        option {
            font-family: ����;
            font-size: 9pt;
            color: #555555;
        }

        A:link {
            color: black;
            text-decoration: none;
        }

        A:visited {
            color: black;
            text-decoration: none;
        }

        A:active {
            color: black;
            text-decoration: none;
        }

        A:hover {
            color: gray;
            text-decoration: none;
        }
    </STYLE>


    <script language="javascript">
        function check_submit() {

            if (document.myForm.name.value == "") {
                alert('�̸��� �Է��ϼ���');
                document.myForm.name.focus();
                return;

            } else if (document.myForm.password.value == "") {
                alert('��й�ȣ�� �Է��ؾ� ���� �����ϰų� ������ �� �ֽ��ϴ�.');
                document.myForm.password.focus();
                return;

            } else if (document.myForm.subject.value == "") {
                alert('������ �Է��ϼ���');
                document.myForm.subject.focus();
                return;

            } else if (document.myForm.memo.value == "") {
                alert('������ �Է��ϼ���');
                document.myForm.memo.focus();
                return;

            } else {
                document.myForm.submit();
            }

        }
    </script>

</head>

<body bgcolor=white>

    <br>

    <form name='myForm' method='post' action="insert.php">

        <table border=0 cellspacing=1 cellpadding=0 width=670>
            <tr>
                <td align=center>
                    <font color=green><b>�� ���� ȭ���Դϴ�.</b></font>
                </td>
            </tr>
        </table>

        <table border=0 bgcolor=#CCCCF>
            <tr>
                <td>

                    <table border=0 width=670 cellspacing=0 cellpadding=0 bgcolor=#F0F0F0>

                        <col width=100>
                        </col>
                        <col width=>
                        </col>

                        <tr>
                            <td colspan=2>
                                <table border=0 cellspacing=0 cellpadding=0 width=100%>
                                    <tr>
                                        <td width=100 align=right><b>�̸� </b></td>
                                        <td><input type=text name=name size=20 maxlength=20></td>
                                        <td width=100 align=right><b>��й�ȣ </b></td>
                                        <td><input type=password name=password size=20 maxlength=20></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td bgcolor=white height=1 colspan=2></td>
                        </tr>

                        <tr>
                            <td align=right><b>���ڿ��� </b></td>
                            <td> <input type=text name=email size=40 maxlength=200> </td>
                        </tr>

                        <tr>
                            <td bgcolor=white height=1 colspan=2></td>
                        </tr>

                        <tr>
                            <td align=right><b>Ȩ������ </b></td>
                            <td> <input type=text name=homepage size=40 maxlength=200> </td>
                        </tr>

                        <tr>
                            <td bgcolor=white height=1 colspan=2></td>
                        </tr>

                        <tr>
                            <td align=right><b>���� </b></td>
                            <td> <input type=text name=subject size=87 maxlength=200> </td>
                        </tr>

                        <tr>
                            <td bgcolor=white height=1 colspan=2></td>
                        </tr>

                        <tr>
                            <td align=right><b>���� </b></td>
                            <td valign=top>
                                <textarea name=memo cols=85 rows=20></textarea>
                            </td>
                        </tr>

                    </table>

                    <br>

                    <table border=0 width=670>
                        <tr>
                            <td>
                                <center>
                                    <a href="javascript:check_submit();"><input type="submit" value="���ۼ�"></a>
                                    <a href=# onclick=history.back()></a>
                                </center>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>