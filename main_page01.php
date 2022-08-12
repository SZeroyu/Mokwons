<!--main.php -> 메인화면 및 대학일반-->
<!--main_2.php -> 테이블 없는 메인화면 및 대학일반-->
<!--main2.php -> 학사일정-->
<!--main2_2.php -> 테이블 없는 학사일정-->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/main.css">

</head>

<body> 
<div><?php include "header.php";?>
    <div class="main_page01">
        <!-- 페이지 순 -->
        <div class="page_info">
            <p>대학일반<span> &gt </span>부서전화번호</p>
        </div>
        <!-- 사이드 메뉴 -->
        <div class="side_menu">
            <div class="navigation">
                <ul>
                    <li class="list">
                        <a href="#" onclick="location.href='main.php'">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">대학일반</span>
                        </a>
                    </li>
                    <li class="list  active">
                        <a href="#">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="title">학사행정</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">
                            <span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
                            <span class="title">개인정보변경(졸업생)</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">
                            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                            <span class="title">비밀번호변경</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">
                            <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                            <span class="title">비밀번호이력</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">
                            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                            <span class="title">접속이력조회</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="./js/script.js"></script>
        </div>
    </div>

</div>
    <!-- 부서전화번호 테이블
    <div>
    <table class="main_table" border="1" width="50%" height=200 bordercolor="gray" cellspacing="0">
            <tr align="center" bgcolor="#DFE6F7" style="font-weight: bold;">
                <td>구분</td>
                <td>프로그램</td>
                <td>담당부서</td>
                <td>부서전화번호</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td rowspan="5">개인정보</td>
                <td>개인정보변경</td>
                <td rowspan="2">학사자원과</td>
                <td rowspan="2">829-7978, 7979</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td>개인정보변경(졸업생)</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td>비밀번호변경</td>
                <td rowspan="3">전산정보과</td>
                <td rowspan="2">829-7233</td>
            </tr>   
            <tr align="center" bgcolor="white">
                <td>비밀번호이력</td>
            </tr> 
            <tr align="center" bgcolor="white">
                <td>접속이력조회</td>
                <td>829-7236</td>
            </tr>
        </table>
    </div> -->
</body>

</html>