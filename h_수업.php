<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body> 
    <div><?php include "header_2.php";?>
        <div class="main_page01">
            <!-- 페이지 순 -->
            <div class="page_info"><p>수업<span> &gt </span>부서전화번호</p></div>
            <!-- 사이드 메뉴 -->
            <div class="side_menu">
                <div class="navigation">
                    <ul>
                        <li class="list ">
                            <a href="#" onclick="location.href='h_대학일반.php'">
                                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                                <span class="title">대학일반</span>
                            </a>
                        </li>
                        <li class="list ">
                            <a href="#" onclick="location.href='h_학사행정.php'">
                                <span class="icon"><ion-icon name="desktop-outline"></ion-icon></span>
                                <span class="title">학사행정</span>
                            </a>
                        </li>
                        <li class="list active" onclick="location.href='h_수업.php'">
                            <a href="#">
                                <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                                <span class="title">수업</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" onclick="location.href='login_out.php'">
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
            <!-- //사이드 메뉴 -->
            <!-- 부서전화번호 -->
            <div class="phone_info">
                <div class="info_box">
                    <table cellspacing="0">
                        <thead>
                            <tr>
                                <th>구분</th>
                                <th>프로그램</th>
                                <th>담당부서</th>
                                <th>부서전화번호</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="5">개인정보</td>
                                <td>개인정보변경</td>
                                <td rowspan="2">학사자원과</td>
                                <td rowspan="2">829-7978, 7979</td>
                            </tr>
                            <tr>
                                <td>개인정보변경(졸업생)</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>비밀번호변경</td>
                                <td rowspan="3">전산정보과</td>
                                <td rowspan="2">829-7233</td>
                            </tr>   
                            <tr>
                                <td>비밀번호이력</td>
                                <td></td>
                            </tr> 
                            <tr>
                                <td>접속이력조회</td>
                                <td>829-7236</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- //부서전화번호 -->
        </div>
    </div>
</body>
</html>