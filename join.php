<meta charset="utf-8" />
<html>

<head>
    <script type="text/javascript">
        function email_change() {
            var frm = document.myForm;
            var em = frm.email.value;
            frm.email_addr.value = em;
        }

        function usableId() {
            var id = document.userinput.id.value;
            var url = "id_check.php?id=" + id; //get 방식으로 넘김 받을땐 $_GET
            window.open(url, '', 'width=500, height=150, left=30, top=200, scrollbars=no');
        }

    </script>
    <link rel="stylesheet" href="ye.css">
    <style type="text/css">
        fieldset {
            width: 50%;
            display: block;
            margin-left: 2px;
            margin-right: 2px;
            border: 2px solid #F15F5F;
        }

    </style>
</head>

<body>
    <center>
        <fieldset>
            <legend>
                <h1> 회 원 가 입 </h1>
            </legend>
            <form method="post" action="user_data.php" name="myForm">
                <table>
                    <tr><br /><br />
                        <td>이름</td>
                        <td><input type="text" name="user_name" size="7" maxlength="20" required>
                            <input type="radio" name="gender" value="0" checked>남
                            <input type="radio" name="gender" value="1">여
                        </td>
                    </tr>
                    <tr>
                        <td>생년월일</td>
                        <td><input type="date" name="user_birth" value="" maxlength="4" required>ex)2000.07.22</td>
                    </tr>
                    <tr>
                        <td>아이디</td>
                        <td><input type="text" name="user_id" value="" maxlength="12" size="17" required>
                            <input type="button" name="" value="아이디 중복 확인" maxlength="12" onclick="usableId()" required></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="password" name="pass" value="" maxlength="17" size="17" required></td>
                    </tr>
                    <tr>
                        <td>재입력</td>
                        <td><input type="password" name="passpp" value="" maxlength="12" size="17" required></td>
                    </tr>
                    <tr>
                        <td>우편번호/주소</td>
                        <td>
                            <input type="text" id="postcode" placeholder="우편번호">
                            <input type="button" onclick="execDaumPostcode()" value="우편번호 찾기"><br>
                            <input type="text" id="address" placeholder="주소">
                            <input type="text" id="address2" placeholder="상세주소">

                            <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
                            <script>
                                function execDaumPostcode() {
                                    new daum.Postcode({
                                        oncomplete: function(data) {
                                            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                                            // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                                            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                                            var fullAddr = ''; // 최종 주소 변수
                                            var extraAddr = ''; // 조합형 주소 변수

                                            // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                                            if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                                                fullAddr = data.roadAddress;

                                            } else { // 사용자가 지번 주소를 선택했을 경우(J)
                                                fullAddr = data.jibunAddress;
                                            }

                                            // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                                            if (data.userSelectedType === 'R') {
                                                //법정동명이 있을 경우 추가한다.
                                                if (data.bname !== '') {
                                                    extraAddr += data.bname;
                                                }
                                                // 건물명이 있을 경우 추가한다.
                                                if (data.buildingName !== '') {
                                                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                                                }
                                                // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                                                fullAddr += (extraAddr !== '' ? ' (' + extraAddr + ')' : '');
                                            }

                                            // 우편번호와 주소 정보를 해당 필드에 넣는다.
                                            document.getElementById('postcode').value = data.zonecode; //5자리 새우편번호 사용
                                            document.getElementById('address').value = fullAddr;

                                            // 커서를 상세주소 필드로 이동한다.
                                            document.getElementById('address2').focus();
                                        }
                                    }).open();
                                }

                            </script>
                        </td>
                    </tr>
                    <tr>
                        <td>이메일</td>
                        <td>
                            <input type="text" name="email_id" size="12"> @ <input type="text" name="email_addr" size="12">
                            <select name="email" onchange="email_change()">
                <option value="">직접입력</option>
                <option value="gmail.com">gmail.com</option>
                <option value="naver.com">naver.com</option>
                <option value="yahoo.co.kr">yahoo.co.kr</option>
                <option value="hanmail.net">hanmail.net</option>
                <option value="nate.com">nate.com</option>
                </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">ex)jebon0722@gmail.com</td>
                    </tr>
                    <tr>

                        <td>핸드폰번호</td>
                        <td>
                            <select name="pNum">
                    <option value="010">010</option>
                    <option value="011">011</option>
                    <option value="019">019</option>
                </select>
                            <input type="tel" name="pNumMid" value="" size="4" maxlength="4" required>
                            <input type="tel" name="pNumFin" value="" size="4" maxlength="4" required>
                        </td>
                    </tr>
                    <!--
        <tr><br />
            <td>전화번호</td> 
            <td>
                <select name="hNum">
                    <option value="032">032</option>
                    <option value="02">02</option>
                    <option value="031">031</option>
                </select>
                <input type="tel" name="hNumMid" value="" size=4 maxlength="4" required>
                <input type="tel" name="hNumFin" value="" size=4 maxlength="4" required>
            </td>
        </tr>
-->
                    <tr>
                        <td colspan="2"><br />
                            <input type="checkbox" name="agree" value="yes" required> 약관에 동의하시겠습니까?<br /><br />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="bt" value="회원가입">
                            <input type="reset" name="reset" value="재작성"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <table>
            <tr>
                <td><a href="0727_naver_log.php">로그인</a></td>
                <td><a href="0727_naver_log.php">회원정보변경</a></td>
                <td><a href="all_member.php">모든회원보기</a></td>
                <td><a href="bye.php">회원탈퇴</a></td>
            </tr>
        </table>
    </center>
</body>

</html>
