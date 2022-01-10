<!--main.php -> 사용자 메인화면 및 대학일반-->
<!--main_2.php -> 사용자 테이블 없는 메인화면 및 대학일반-->
<!--main2.php -> 사용자 학사일정-->
<!--main2_2.php -> 사용자 테이블 없는 학사일정-->
<!-- admin_main.php -> 관리자 메인화면 및 대학일반-->
<!-- admin_main_2.php -> 관리자 메인화면 및 학사일정-->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/main1.css">
    <link rel="stylesheet" href="./css/icon.css">
    <link rel="stylesheet" href="./css/pass1.css">
</head>

<body>
    
<?php
    session_start();
    if(isset($_SESSION["user_number"])){
      if($_SESSION["user_number"] != "admin" or !$_SESSION["user_number"]){
        echo '
          <script>
            alert("잘못된 접근입니다.");
            location.replace("./login.php");
          </script>';
      }
    } else{
      echo '
        <script>
          alert("세션 실패.");
          location.replace("./login.php");
        </script>';
      }
  ?>
<div><?php include "admin_icon.php";?></div> 
    <div id="main_page">
    <div class= "top_header"></div>
    <div class= "back_header"></div>
            <div class="logo">
                <img src="./img/로고2.jpg" alt="Logo" width="350"></div>
            <div id="top_menu" style="font-size: 25px; display: inline;">

                <ul>
                    <li><a href="#" onclick="location.href='admin_main.php'"> 대학일반 </a></li>
                    <li><a href="#" onclick="location.href='admin_main_2.php'"> 학사일정</a></li>
                    <li><a href="#" onclick="location.href='admin_main_3.php'"> 관리자 </a></li>
                </ul>
            </div>

            
            <div id="sub_menu">
                <ul class="main">
                    <li><a href="#" style="font-size: 20px; font-weight: bold;">학사일정</a></li>
                    <li><a href="#">학적관리</a>
                    <ul class="sub">
                        <li><a href="#">졸업생정보조회</a></li>
                        <li><a href="#">일반복학신청</a></li>
                        <li><a href="#">일반휴학신청</a></li>
                        <li><a href="#">자퇴신청</a></li>
                        <li><a href="#">국가기술자격증등록</a></li>
                    </ul></li>
                    <li><a href="#">강의정보</a>
                    <ul class="sub">
                        <li><a href="#">공결관리</a></li>
                        <li><a href="#">강의평가입력</a></li>
                        <li><a href="#">시간표조회</a></li>
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

                    <li><a href="#" onclick="location.href='hlist.html'">생활관</a>
                        <ul class="sub">
                            <li><a href="#">생활관입사신쳥</a></li>
                            <li><a href="#">생활관사생카드작성</a></li>
                            <li><a href="#">생활관외박신청</a></li>
                            <li><a href="#">생활관퇴사신청</a></li>
                        </ul></li>

                    <li><a href="#" onclick="location.href='hlist.html'">부가서비스</a>
                        <ul class="sub">
                            <li><a href="#">봉사자료입력</a></li>
                            <li><a href="#">학습단체활동신청</a></li>
                            <li><a href="#">사물함신청</a></li>
                            <li><a href="#">기초요양클리닉신청</a></li>
                        </ul></li>
                    </ul></div>

                    <?php
    session_start();
    $ip = file_get_contents('https://api.ipify.org');
    $user_number = $_SESSION["user_number"];
    $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
    $sql = "select u.user_major, u.user_grade, u.user_status, p.user_name
    from personal_data AS p LEFT JOIN users AS u on p.user_number = '$user_number' and  u.user_number = '$user_number' ; ";
      $res = mysqli_query($con, $sql) or die(mysqli_error($con));
      $row = mysqli_fetch_assoc($res)?>

      <div class="top_pass4">
      <ul class="my-box">
      <ins><li><?php echo $row["user_major"] ; ?></li></ins>
      <li><?php echo "[".$row["user_status"]."] > ".$row["user_name"]."(".$row["user_grade"].")"?></li>
      <li><?php echo "접속 ip : " . $ip;?></li>
      <button><a href="#" onclick="location.href='login_out.php'"> 로그아웃 </a></button>
    </ul>
</div>

</body>
</html>
