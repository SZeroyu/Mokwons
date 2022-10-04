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
    <div><?php include "admin_header_3.php";?>
        <div class="main_page01">
            <!-- 페이지 순 -->
            <div class="page_info"><p>수업<span> &gt </span><span class="page">부서전화번호<span></p></div>
            <!-- 사이드 메뉴 -->
            <div class="side_menu">
                <div class="navigation">
                    <ul>
                        <li class="list ">
                            <a href="#" onclick="location.href='admin_대학일반.php'">
                                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                                <span class="title">대학일반</span>
                            </a>
                        </li>
                        <li class="list ">
                            <a href="#" onclick="location.href='admin_학사행정.php'">
                                <span class="icon"><ion-icon name="desktop-outline"></ion-icon></span>
                                <span class="title">학사행정</span>
                            </a>
                        </li>
                        <li class="list active" onclick="location.href='admin_수업.php'">
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
                   <h3>강의정보</h3>
                   <table cellspacing="0">
                    <thead>
                        <tr>
                            <th>프로그램</th>
                            <th>담당부서</th>
                            <th>부서전화번호</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>공결관리</td>
                            <td>학사지원과</td>
                            <td>829-7105</td>
                        </tr>
                        <tr>
                            <td>강의평가 입력</td>
                            <td>//</td>
                            <td>829-7097</td>
                        </tr>
                        <tr>
                            <td>시간표 조회</td>
                            <td>//</td>
                            <td>//</td>
                        </tr>
                    </tbody>
                   </table>
                   <h3>성적관리</h3>
                   <table cellspacing="0">
                    <thead>
                        <tr>
                            <th>프로그램</th>
                            <th>담당부서</th>
                            <th>부서전화번호</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>성적조회</td>
                            <td>학사지원과</td>
                            <td>829-7102~4</td>
                        </tr>
                        <tr>
                            <td>금학기 성적열람</td>
                            <td>//</td>
                            <td>//</td>
                        </tr>
                        <tr>
                            <td>계절학기성적열람</td>
                            <td>//</td>
                            <td>//</td>
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