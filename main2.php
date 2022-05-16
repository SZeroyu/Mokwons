<!--main.php -> 메인화면 및 대학일반-->
<!--main_2.php -> 테이블 없는 메인화면 및 대학일반-->
<!--main2.php -> 학사일정-->
<!--main2_2.php -> 테이블 없는 학사일정-->
<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>목원대학교 종합정보시스템</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main1.css">
    <link rel="stylesheet" href="./css/pass_data.css">
    
    <style>img{right: 50px;}</style>
</head>

<body>
<?php
  session_start();
  if(isset($_SESSION["user_number"])){
    $user_number = $_SESSION["user_number"];
    if(!$user_number){
      echo '
        <script>
          alert("잘못된 접근입니다..");
          location.replace("./login.php");
        </script>';
    }
  }
   ?>
<div><?php include "icon.php";?></div> 

    <div id="main_page">
    <div class= "top_header"></div>
    <div class= "back_header"></div>
    <div class="logo"><img src="./img/로고2.jpg" alt="Logo" width="350"> </div>
      
            <div id="top_menu" style="font-size: 25px; display: inline;">
                <ul>
                <li><a href="#" onclick="location.href='main.php'"> 대학일반 </a></li>
                    <li><a href="#" onclick="location.href='main2.php'"> 학사행정</a></li>
                </ul>
            </div>
            
            <div id="sub_menu">
                <ul class="main">
                    <li><a href="#" style="font-size: 20px; font-weight: bold;">학사행정</a></li>
                    <li><a href="#">학적관리</a>
                    <ul class="sub">
                        <li><a href="#">졸업생정보조회</a></li>
                        <li><a href="#">일반복학신청</a></li>
                        <li><a href="#" onclick="location.href='pass3.php'">일반휴학신청</a></li>
                        <li><a href="#" onclick="location.href='dropout.php'">자퇴신청</a></li>
                        <li><a href="#">국가기술자격증등록</a></li>
                    </ul></li>
                    <li><a href="#">강의정보</a>
                    <ul class="sub">
                        <li><a href="#">공결관리</a></li>
                        <li><a href="#">강의평가입력</a></li>
                        <li><a href="#">시간표조회</a></li>
                        <li><a href="#" onclick="location.href='app_class.php'">수강신청</a></li>
                        </ul></li>

                    <li><a href="#" onclick="location.href='main2.php'">성적관리</a>
                    <ul class="sub">
                        <li><a href="#">성적조회</a></li>
                        <li><a href="#">금학기성적열람</a></li>
                        <li><a href="#">계절학기성적열람</a></li>
                    </ul></li>

                    <li><a href="#">장학관리</a>
                    <ul class="sub">
                        <li><a href="#">장학이력조회</a></li>
                        <li><a href="#">근로장학생신청</a></li>
                        <li><a href="#">온라인장학금신청</a></li>
                    </ul></li>

                    <li><a href="#">등록관리</a>
                    <ul class="sub">
                        <li><a href="#">등록금처리요청</a></li>
                        <li><a href="#">분할납부신청</a></li>
                    </ul></li>

                    <li><a href="#" >상담 및 포트폴리오 관리</a>
                        <ul class="sub">
                            <li><a href="#" onclick="location.href='planing.php'">학업계획등록</a></li>
                            <li><a href="#" onclick="location.href='playing.php'">학습활동등록</a></li>
                            <li><a href="#" onclick="location.href='friend.php'">교우관계등록</a></li>
                            <li><a href="#">상담예약</a></li>
                        </ul></li>

                    <li><a href="#">생활관</a>
                        <ul class="sub">
                            <li><a href="#" onclick="location.href='dormitory.php'">생활관입사신쳥</a></li>
                            <li><a href="#">생활관사생카드작성</a></li>
                            <li><a href="#">생활관외박신청</a></li>
                            <li><a href="#">생활관퇴사신청</a></li>
                        </ul></li>

                    <li><a href="#">부가서비스</a>
                        <ul class="sub">
                            <li><a href="#">봉사자료입력</a></li>
                            <li><a href="#">학습단체활동신청</a></li>
                            <li><a href="#">사물함신청</a></li>
                            <li><a href="#">기초요양클리닉신청</a></li>
                        </ul></li>
                    </ul></div>
                    

    </div>    
    <!--부서전화번호 테이블-->
    <body>
    <div>
        <table class="main_table" border="1" width="50%" height=200 bordercolor="gray" cellspacing="0">
            <tr align="center" bgcolor="#DFE6F7" style="font-weight: bold;">
                <td>구분</td>
                <td>프로그램</td>
                <td>담당부서</td>
                <td>부서전화번호</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td rowspan="4">학적관리</td>
                <td>일반복학신청</td>
                <td>학사지원과</td>
                <td rowspan="2">829-7977~9</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td>일반휴학신청</td>
                <td>학사지원계</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td>자퇴신청</td>
                <td rowspan="2">학사지원과</td>
                <td rowspan="2">829-7104</td>
            </tr>   
            <tr align="center" bgcolor="white">
                <td>국가기술자격증등록</td>
            </tr>
            
            <tr align="center" bgcolor="white">
                <td rowspan="3">강의정보</td>
                <td>공결관리</td>
                <td rowspan="6">학사지원과</td>
                <td>829-7105</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td>강의평가입력</td>
                <td rowspan="2">829-7097</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td>시간표조회</td>
            </tr>
        
            <tr align="center" bgcolor="white">
                <td rowspan="3">성적관리</td>
                <td>성적조회</td>
                <td rowspan="3">829-7102~4</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td>금학기성적열람</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td>계절학기성적열람</td>
            </tr>
        </table>
    </div>
</body>
<body>
    <div class="top_pass4">
   
    <img src="./img/user.png" alt="Logo" width="100">
  <?php
    if(isset($_SESSION['user_number'])){
      $user_number = $_SESSION['user_number'];
    }
    $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
    $sql = "select * from users where user_number='$user_number'; ";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $user_name = $row["user_name"];
    $user_status = $row["user_status"];
    $user_major= $row["user_major"];
  ?>
   <ul class="my-box">

<li><?=$user_major?></li>
<li><?=$user_name?> | <?=$user_status?></li>	
<li><?="접속 ip : " . $ip?></li>

</ul>
<button><a href="#" onclick="location.href='login_out.php'"> 로그아웃 </a></button>
</div>
</body>
</html>

