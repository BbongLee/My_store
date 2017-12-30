<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8" />
    <title>Welcome to bon's store</title>
    <link rel="stylesheet" href="ye.css">
    <script src="bon.js"></script>
</head>

<body>
    <!-- 상단바  -->
    <div id="top">
        <ul>
            <li><a href="login.php">로그인</a></li>
            <li><a href="join.php">회원가입</a></li>
            <li><a href="bag.php">장바구니</a></li>
            <li><a href="qa.php">Q&amp;A</a></li>
            <li><a href="comments.php">후기</a></li>
            <li>검색</li>
            <li><a href="introduce.html">who is Yebon?</a></li>
        </ul>
    </div>
    <!-- 타이틀  -->
    <table width=100%>
        <tr style="text-align:center;">
<!--

            <td>
                <audio id="myAudio">
                  <source src="horse.ogg" type="audio/ogg">
                  <source src="horse.mp3" type="audio/mpeg">
                </audio>
                <button onclick="playAudio()" type="button">Play Audio</button>

                <audio src="C:\Users\jebon\Music\예본\수고했어.mp3" controls="" autoplay="" loop="" preload="auto"></audio></td>
-->
            <td style="vertical-align:middle;">
                <img src="img/title.png" width="30%">
            </td>
<!--
            <td>
<button onclick="pauseAudio()" type="button">Pause Audio</button>
            </td>
-->
        </tr>
    </table>
    <!-- 메뉴바  -->
    <table id="menu">
        <tr style="height: 20px;">
            <td class="dropdown">
                <div class="dropbtn"><a href="all.php">모든 잡것들</a>
                </div>
            </td>
            &nbsp;&nbsp;
            <td class="dropdown">
                <div class="dropbtn">그림
                    <div class="dropdown-content">
                        <a href="">손그림</a>
                        <a href="#">일러스트</a>
                        <a href="#">발그림</a>
                    </div>
                </div>
            </td>
            &nbsp;&nbsp;
            <td class="dropdown">
                <div class="dropbtn">카드
                    <div class="dropdown-content">
                        <a href="#">사랑카드</a>
                        <a href="#">명절카드</a>
                        <a href="#">성경카드</a>
                        <a href="#">응원카드</a>
                    </div>
                </div>
            </td>
            &nbsp;&nbsp;
            <td class="dropdown">
                <div class="dropbtn">요리
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </td>
            &nbsp;&nbsp;
            <td class="dropdown">
                <div class="dropbtn">글씨
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </td>
            &nbsp;&nbsp;
            <td class="dropdown">
                <div class="dropbtn">사진
                    <div class="dropdown-content">
                        <a href="#">하늘</a>
                        <a href="#">땅</a>
                        <a href="#">사람</a>
                    </div>
                </div>
            </td>
            &nbsp;&nbsp;
            <td class="dropdown">
                <div class="dropbtn">만들기(잡)
                    <div class="dropdown-content">
                        <a href="#">인형</a>
                        <a href="#">장난감</a>
                        <a href="#">양초</a>
                        <a href="#">화장품</a>
                        <a href="#">더 잡</a>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <br>
    <!-- 상품들  -->
    <center>
        <table class=main>
            <tr>
                <td colspan=3><img src="img/mainex.jpg" width="100%"><br/></td>
            </tr>
            <tr>
                <td><img src="img/001.jpg" width="100%"></td>
                <td><img src="img/002.jpg" width="100%"></td>
                <td><img src="img/003.jpg" width="100%"></td>
            </tr>
            <tr>
                <td><img src="img/004.jpg" width="100%"></td>
                <td><img src="img/005.jpg" width="100%"></td>
                <td><img src="img/001.jpg" width="100%"></td>
            </tr>
        </table>
    </center>


</body>

</html>
