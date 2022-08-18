<!--학업계획등록-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>학업계획등록</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/planing.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/d6d6196cf4.js" crossorigin="anonymous"></script>
</head>
    
<body>
<div><?php include "header_2.php";?></div>
<div class="main_page01">
    <!-- 페이지 순 -->
    <div class="page_info">
        <p>학사행정<span> &gt </span>상담관리<span> &gt </span><span class="page">학업계획연도<span></p>
    </div>
    <!-- 사이드 메뉴 -->
    <div class="side_menu">
        <div class="navigation">
            <ul>
                <li class="list ">
                    <a href="#" onclick="location.href='h_학사행정.php'">
                        <span class="icon"><ion-icon name="desktop-outline"></ion-icon></span>
                        <span class="title">학사행정</span>
                    </a>
                </li>
                <li class="page_list"><p>상담관리</p></li>
                <li class="list active">
                    <a href="#" onclick="location.href='h_학사행정.php'">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="title">학업계획연도</span>
                    </a>
                </li>
                <li class="list" onclick="location.href='planing.php'">
                    <a href="#">
                        <span class="icon"><ion-icon name="footsteps-outline"></ion-icon></span>
                        <span class="title">학습활동등록</span>
                    </a>
                </li>
                <li class="list" onclick="location.href=''">
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">교우관계등록</span>
                    </a>
                </li>
                <li class="list" onclick="location.href=''">
                    <a href="#">
                        <span class="icon"><ion-icon name="calendar-outline"></ion-icon></span>
                        <span class="title">상담예약</span>
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
    <div class="plan">
        <table>
            <tr>
                <td>            
                    <label for="ymd">학업계획연도</label>
                    <input type="date" id="ymd">
                </td>
                <td>
                    <label for="semester">학기</label>
                    <select id="semester">
                        <option>학기선택</option>
                        <option>1학기</option>
                        <option>2학기</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="plan_info">학업계획</label></td>
                <td><textarea name=content id="plan_info" name="plan" cols=85 row=100 style="resize: none"></textarea></td>
            </tr>
            <tr>
                <td><label for="job_info">취업희망분야</label></td>
                <td><textarea name=content cols=85 id="job_info" name="filed" row=50 style="resize: none"></textarea></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>