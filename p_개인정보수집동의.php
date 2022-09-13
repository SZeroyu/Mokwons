<!--개인정보 수집 동의 체크박스-->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/user_info.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/d6d6196cf4.js" crossorigin="anonymous"></script>
</head>
<body>
<div><?php include "header_1.php";?></div>
<div class="main_page01">
    <div class="page_info"><p>대학일반<span> &gt </span>개인정보<span> &gt </span><span class="page">개인정보변경<span></p></div>
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
                <li class="page_list"><p>개인정보</p></li>
                <li class="list active">
                    <a href="#" onclick="location.href='p_개인정보수집동의.php'">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="title">개인정보변경</span>
                    </a>
                </li>
                <li class="list ">
                    <a href="#">
                            <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                            <span class="title">졸업생정보조회</span>
                    </a>
                </li>
                <li class="list ">
                    <a href="#" onclick="location.href='password_new.php'">
                            <span class="icon"><ion-icon name="key-outline"></ion-icon></span>
                            <span class="title">비밀번호변경</span>
                    </a>
                </li>
                <li class="list ">
                    <a href="#">
                            <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                            <span class="title">비밀번호이력</span>
                    </a>
                </li>
                <li class="list ">
                    <a href="#">
                            <span class="icon"><ion-icon name="link-outline"></ion-icon></span>
                            <span class="title">접속이력</span>
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


<!--개인정보 수집 동의-->
<div class="user_yes">
<form action="p_개인정보수집동의_checked.php" method="post">
<div class="yes_box">
        <label class="checkbox">
            <input type="checkbox" value="y" name="agree" id="agree" />
            <span class="icon"></span>
            <span class="text">개인정보 수집에 동의</span>
        </label>
  

        <div class="info_box">
            <ul>
                <li style="padding-top:18px; padding-left:10px;"> 1. 수집된 개인정보는 학사 운영 업무 이외의 다른 목적에는 절대 사용되지 않습니다.</li>
                <li style="padding-top:8px; padding-left:10px;"> 2. 수집하는 개인정보 </li> <li style="padding-left:30px;"> - 거주 정보, 전화번호, 이메일주소 등</li>
                <li style="padding-top:8px; padding-left:10px;"> 3. 개인정보 수집 이용 </li> <li style="padding-left:30px;"> - 학사운영 및 교내 공지사항 전달, 우편물 발송, 장학금자급 등의 업무에 이용합니다.</li>
            </ul>
        </div>
        

        <!--비밀번호 확인-->
        <div class="pwd_check_box">
            <label for="pwd_check">비밀번호 확인</label>
            <input type="password" id="pwd_check" name="user_password" placeholder="비밀번호">
        </div> 
        <input type="submit" name="check_btn" id ="check_btn" class="check_btn" value="동의">
    </div>
</form>
</div>


</div>

<script>
$(function(){
    agree_CheckedChanged();
});

//체크박스 체크 선택 또는 해체할 때 상태 업데이트
$("#agree").change(function(){
    agree_CheckedChanged();
});
function agree_CheckedChanged(){
//페이지 로드할 때 체크박스 상태 확인
if($("#agree").prop("checked")){
    console.log("체크");
    $("#check_btn").prop("disabled", false); // 활성화
}
else{
    console.log("no 체크");
    $("#check_btn").prop("disabled", true); // 비활성화
    }
}
</script>
</body>
</html>